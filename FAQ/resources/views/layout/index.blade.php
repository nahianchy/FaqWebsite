@extends('layout.app')

    


    <div class="container">
        <h2 class="text-center mb-4 pt-5">FAQ list</h2>

        
        @if(Session::has('msg'))


        <div class="alert alert-info" role="alert">
            {{ Session::get('msg') }}
            
        </div>
                
        @endif
        

        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Question</th>
                    <th scope="col">Answer</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($dataKey as $value)
                <tr>
                    <th scope="row">{{$value->id}}</th>
                    <td>{{$value->question}}</td>
                    <td>{{$value->answers}}</td>
                    <td>
                      <a href="{{ route('layout.edit',$value->id)}}" class="btn btn-success"> Edit</a>|
                       
                        <a href="{{ route('layout.show',$value->id)}}" class="btn btn-primary">Show</a>|

                        <form action="{{route('destroy',$value->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">delete</button>
                        </form>
                        
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

   