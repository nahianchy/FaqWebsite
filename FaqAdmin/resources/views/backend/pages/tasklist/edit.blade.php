@extends('backend.template.template')
@section('content')
    <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
            <h4>Update The  List</h4>
            <p class="mg-b-0">Do bigger things .</p>
        </div>

        <div class="br-pagebody">
            <div class="row row-sm">
            </div>
        </div>
    </div>
    <div class="br-page-body">
        <div class="br-section-wrapper">
            <div class="row">
                <div class="col-md-12">

                    {{-- form start --}}
                    <form action="{{route('task.update',$task->id)}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="">Update the Question</label>
                            <input type="text" name="name" class="form-control" required="required" autocomplete="off"
                            value="{{$task->question}}">
                        </div>

                        <div class="mb-3">
                            <label for="">Update The Answers</label>
                            <textarea name="description" class="form-control" rows="5" > {{$task->answers}}
                            </textarea>
                        </div>

                        <div class="mb-3">
                            <label for="">Task Status</label>
                            <select name="status" class="form-control" id="">
                                <option value="2">Please select the status</option>
                                <option value="1"@if ($task->status ==1)Selected @endif>Pending</option>
                                <option value="2"@if ($task->status ==2)Selected @endif>Complete</option>

                            </select>
                        </div>

                        <div class="mb-3">
                            <input type="submit" name="save" class="btn btn-info btn-block mg-b-10" value="Update">
                        </div>
                    </form>

                    {{-- Form end --}}
                </div>
            </div>
        </div>
    </div>
@endsection
