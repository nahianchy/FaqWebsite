<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('font-awesome/css/font-awesome.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('font-awesome/css/font-awesome.css')}}"/>

    <link rel="stylesheet" href="{{asset('css/custom.css')}}">

   
</head>
<body>






    
@yield('content')









<script type="text/javascript" src="{{asset('js/jquery-1.10.2.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
</script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/jquery.caret/0.1/jquery.caret.js"></script>
<script src="https://www.solodev.com/_/assets/phone/jquery.mobilePhoneNumber.js"></script>
<script>
    $(document).ready(function() {
        jQuery(function($) {
            var input = $('[type=tel]')
            input.mobilePhoneNumber({
                allowPhoneWithoutPrefix: '+1'
            });
            input.bind('country.mobilePhoneNumber', function(e, country) {
                $('.country').text(country || '')
            })
        });
    });
</script>


</body>
</html>