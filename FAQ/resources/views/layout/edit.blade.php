@extends('layout.app')

@section('title', 'Edit')

@section('content')

    <div class="container bg-light mt-3 mb-3">
        <h1 class="text-center pt-2"><a href="">FAQ Question with search functionality</a></h1>

        <div class="row  offset-3">

            <div class=" ml-5 col-sm-6">

                <h5 class="">Fields with <span class="text-danger">*</span> are mandatory!</h5>

                @if(Session::has('msg'))


                <div class="alert alert-info" role="alert">
                    {{ Session::get('msg') }}
                    
                </div>
                        
                @endif
               

                <form action="{{ route('layout.update', $student->id) }}" method="post">
                    @csrf
                    @method('put')
                    <div class="form-group">

                        <label>Add a Questions <span class="text-danger mb-3">*</span></label>

                        <input type="text" name="question" id="useremail"
                            class="form-control @error('question') is-invalid @enderror" value="{{ $student->question }}"
                            placeholder="write your Question">

                        @error('question')
                            <div class="alert alert-danger"> {{ $message }}</div>
                        @enderror

                    </div>

                    <div class="form-group">

                        <label>Add a Answer <span class="text-danger mb-3">*</span></label>

                        <input type="text" name="answers" id="useremail"
                            class="form-control @error('answers') is-invalid @enderror" value="{{ $student->answers }}"
                            placeholder="write your answers">

                        @error('answers')
                            <div class="alert alert-danger"> {{ $message }}</div>
                        @enderror

                    </div>

                    <div class="form-group">

                        <button type="submit" name="submit" value="submit" id="submit" class="btn btn-success"><i
                                class="fa fa-fw fa-plus-circle"></i> Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection










<div class="container my-4">

    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

    <!-- demo left sidebar -->

    <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-6724419004010752" data-ad-slot="7706376079"
        data-ad-format="auto" data-full-width-responsive="true"></ins>

    <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
    </script>

</div>









<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
                            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
                                                        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
                                                        crossorigin="anonymous">
                            </script>
                            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
                                                        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
                                                        crossorigin="anonymous">
                            </script>
                            -->
