@extends('layout.app')

@section('title', 'show')



@section('content')
    <div class="container">
        <h2 class="text-center mb-4 pt-5">FAQ Show</h2>

       

        <div class="row">
            <div class="text-center">
                <a href="{{ route('home') }}"class="bolder"><h4>  Go to Index</h4></a>

                <p><h2> Question </h2></p>
                <p><h4>
                    {{ $student->question }}  
                </h4></p>
                <p><h2>Answers</h2></p>
                <p>
                    <h4>
                        {{ $student->answers }}
                    </h4>
                  </p>
            </div>
        </div>
    </div>
@endsection
