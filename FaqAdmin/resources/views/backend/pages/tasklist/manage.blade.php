@extends('backend.template.template')
@section('content')
    <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
            <h4>Manage The  List</h4>
            <p class="mg-b-0">FAQ ADMIN</p>
        </div>

        <div class="br-pagebody">
            <div class="row row-sm">
            </div>
        </div>
    </div>
    <div class="br-page-body">
        <div class="br-section-wrapper">
            <div class="row">
                <div class="col-md-6">
                    <h6 class="br-section-label"> Manage Task List</h6>
                </div>
            </div>


            <div class="row">
                <div class="col-md-12">

                    <div classs="bd bd-gray-300 rounded table-responsive">

                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Sl</th>
                                    <th scope="col">Question</th>
                                    <th scope="col">Answers</th>
                                    </th>
                                    <th scope="col">Status</th>
                                    </th>
                                    <th scope="col" class="offset-3">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i=1; @endphp
                                @foreach ($tasks as $task)
                                    <tr>
                                        <th scope="row">{{ $i }}</th>
                                        <td>{{ $task->question }}</td>
                                        <td>{{ $task->answers }}</td>
                                        <td>
                                            @if ($task->status == 1)
                                                <span class="badge badge-warning">Pending</span>
                                            @elseif ($task->status ==2)
                                                <span class="badge badge-success">Complete</span>
                                            @endif

                                        </td>
                                        <td>
                                            <a href="" class="btn  btn-info btn-sm">View</a>
                                            <a href="{{ route('task.edit', $task->id) }}"
                                                class="btn btn-success btn-sm">Edit</a>
                                                <br>

                                                <div class="mt-1">
                                                    <form action="{{ route('task.destroy',$task->id) }}" method="POST">
                                                        @csrf
    
                                                        <button class="btn btn-danger btn-sm">Delete</button>
                                                    </form>

                                                </div>
                                               


                                           

                                            {{-- <a type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#delete{{$task->id}}">
                                                    Launch Delete
                                                </a>
                                                  
                                           

                                            <!-- Modal -->
                                            <div class="modal fade" id="delete{{$task->id}}" tabindex="-1"
                                                aria-labelledby="deleteLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel"></h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            ...
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Save
                                                                changes</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End  Modal --> --}}
                                        </td>
                                    </tr>

                                    @php $i++ @endphp
                                @endforeach
                            </tbody>
                        </table>
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection
