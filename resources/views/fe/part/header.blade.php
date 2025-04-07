<div class="container">
    <div class="row-flex">
        <div class="header-bar-icon">
            <i class="ri-menu-line"></i>
        </div>
        <div class="header-logo">
            <img class="logo" src="{{asset('fe/image/logo.webp') }}" alt="">
        </div>
        <div class="header-logo-mobile">
            <img class="logo" src="{{asset('fe/image/logo1.webp') }}" alt="">
        </div>
        <div class="header-nav">
            <nav>
                <ul>
                    <li><a href="/">Trang Chủ</a></li>
                    <li><a href="allproducts">Sản Phẩm</a></li>
                    <li><a href="#">Vila</a></li>
                    <li><a href="#">Khách Sạn</a></li>
                    <li><a href="#">Nhà Nghỉ</a></li>
                    <li><a href="#">Liên Hệ</a></li>
                </ul>
            </nav>
        </div>
        <div class="header-search">
            <input type="text" placeholder="Tìm Kiếm">
            <i class='bx bx-search'></i>
        </div>
        {{-- <div class="header-cart">
            <a href="cart"><i class='bx bx-cart' number="0"></i></a>
        </div> --}}
        {{-- <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit">Đăng xuất</button>
        </form> --}}
    </div>
</div>