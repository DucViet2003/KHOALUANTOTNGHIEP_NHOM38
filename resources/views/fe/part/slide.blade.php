<div class="slider-items">
        @php
            $product_images = explode('*',$banner->images);
        @endphp
        @foreach ($product_images as $product_image )
        <div class="slider-item">
            <img src="{{asset($product_image)}}" alt="">
        </div>
        
        @endforeach
</div>
<div class="slider-arrow" style="display: none;">
    <i class="ri-arrow-right-fill"></i>
    <i class="ri-arrow-left-fill"></i>
</div>