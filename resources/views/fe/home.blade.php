<!DOCTYPE html>
<html lang="en">
<head>
    @include('fe.part.head')
</head>
<body>
<!-------header-->
<header id="header">
    @include('fe.part.header')
</header>

    <!--slider-->

<section class="slider"> 
    @include('fe.part.slide')
</section>  
<!--hotproduct-->
 {{--  <section class="hot-products">
    @include('shop.part.hotproduct')
</section>
  
<!--footer-->
<footer>
        @include('shop.part.footer')
</footer> --}}
<script src="{{asset('fe/js/script.js')}}"></script>
</body>
</html>