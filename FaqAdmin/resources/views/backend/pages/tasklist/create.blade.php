@extends('backend.template.template')
@section('content')
    <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
            <h4>Manage  List</h4>
            <p class="mg-b-0">Do bigger things.</p>
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
                    <form action="{{route('task.store')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="">Add a Question</label>
                            <input type="text" name="name" class="form-control" required="required" autocomplete="off">
                        </div>

                        <div class="mb-3">
                            <label for="">Add the Answers</label>
                            <textarea name="description" class="form-control" cols="10" rows="5">
                            </textarea>
                        </div>

                        <div class="mb-3">
                            <label for="">Task Status</label>
                            <select name="status" class="form-control" id="">
                                <option value="2">Please select the status</option>
                                <option value="1">Pending</option>
                                <option value="2">Complete</option>

                            </select>
                        </div>

                        <div class="mb-3">
                            <input type="submit" name="save" class="btn btn-info btn-block mg-b-10" value="Add New Question/Answers">
                        </div>
                    </form>

                    {{-- Form end --}}
                </div>
            </div>
        </div>
    </div>
@endsection
