@extends('admin.main')
@section('content')
<form action="/adm/slide/add" enctype="multipart/form-data" method="post">

    <div class="admin-content-main-content-product-add">
        <div class="admin-content-main-content-images">
            <label for="files"><i class="ri-folder-image-line"></i>Ảnh Sản Phẩm</label>
            <input type="file" id="files" name="images">
            <input type="hidden" name="banner" id="input-file-img-hiden">
            <div class="image-show" id="input-file-imgs">
            </div>
            


            <br>
            <br>
            <br>
            <br>
            <br>
            <button type="submit" class="main-btn">Thêm Banner</button>
           
        </div>
    </div>
    @csrf
</form>
                    
@endsection
