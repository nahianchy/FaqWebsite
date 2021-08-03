@extends('layout.app')




@section('title','ViewsForUser')





@section('content')
<div class="container">

    <div class="page-header">
        <h1> FAQ <small>Frequently Asked Questions</small></h1>
    </div>
    
    <!-- Bootstrap FAQ - START -->
    <div class="container">
        <br />
        <br />
        <br />
    
        <div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            This section contains a wealth of information, related to <strong>PrepBootstrap</strong> and its store. If you cannot find an answer to your question, 
            make sure to contact us. 
        </div>
    
        <br />
        @foreach($tasks as $task) 
            
        
        <h2> Question #{{$task->id}}</h2>
        <div class="panel-group" id="accordion">
            <div class="faqHeader"></div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title ml-4">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                           {{$task->question}}
                        </a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="panel-body ml-4">
                        {{$task->answers}}
                    </div>
                </div>
            </div>
           
           
        </div>
        @endforeach
    </div>
    <!-- Bootstrap FAQ - END -->
    </div>
    
    

    
@endsection


