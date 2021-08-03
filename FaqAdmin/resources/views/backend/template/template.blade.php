<!DOCTYPE html>
<html lang="en">

<head>
     {{-- header --}}
    @include('backend.includes.header') 

    <!-- vendor css -->

    @include('backend.includes.css')
</head>

<body>
    <!-- ########## START: LEFT PANEL ########## -->

     @include('backend.includes.leftbar')


    <!-- ########## START: HEAD PANEL ########## -->
    @include('backend.includes.topber')

    <!-- ########## START: RIGHT PANEL ########## -->

    @include('backend.includes.rightbar') 


    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">

        @yield('content')


        {{-- footer --}}

        @include('backend.includes.footer')
    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->


    {{-- script --}}

    @include('backend.includes.scripts')

</body>

</html>