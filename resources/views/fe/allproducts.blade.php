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
<h1 style="padding-top: 100px;text-align: center;padding-bottom: 25px ">
    Tất Cả Các Sản Phẩm
</h1>

<!--hotproduct-->
<section class="hot-products">
    @include('fe.part.hotproducts')
</section>
    
<!--footer-->
<footer>
        @include('fe.part.footer')
</footer>
<script src="{{asset('fe/js/script.js')}}"></script>
</body>
</html>