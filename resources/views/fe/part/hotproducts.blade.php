<div class="container">
    <div class="row-grid">
        {{-- <p class="heading-text">MacBook</p> --}}
    </div>
    <div class="row-grid row-grid-hot-products">
        @foreach ($products as $product )
            <div class="hot-product-item">
                <div class="hangrao">
                    <a href="/fe/product/{{$product -> id}}"><img  src="{{asset($product -> avatar)}}" alt=""></a>
                    <p class="red">
                        <a href="/fe/product/{{$product -> id}}">
                            {{$product -> Name}}
                        </a>
                    </p>
                <span class="color-span">
                    {{$product -> Address}}
                </span>
                <span class="color-span">
                    {{$product -> Star_rating}}
                </span>
                <div class="hot-product-item-price">
                    <p>
                        <span class="sale">
                            {{number_format($product -> Price_sale)}}<sup>₫</sup>
                        </span>
                        <span class="money" >
                            {{number_format($product -> Price_nomal)}}<sup>₫</sup>
                        </span>
                        
                    </p>
                </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

