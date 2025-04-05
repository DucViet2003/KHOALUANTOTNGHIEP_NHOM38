@extends('admin.main')
@section('content')
<div class="admin-content-main-content-product-list">
    <div class="table-heght">
                            <table>
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Banner</th>
                                        
                                        <th>Tùy Chỉnh</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($banner as $banner)
                                    <tr>
                                        <td>{{$banner -> id}}</td>
                                        
                                        <td>
                                            @php
                                                $product_images = explode("*",$banner->images);
                                            @endphp
                                            @foreach ($product_images as $product_image)
                                                <img style="width: 420px;padding: 10px;" src="{{asset($banner->images)}}" alt="">
                                            @endforeach
                                        </td>
                                        
                                        <td>
                                            <a class="edit-class" href="/adm/slide/edit/{{$banner -> id}}">Sửa</a>
                                            <a onclick="removeRows(banner=<?php echo $banner -> id?>,url='/adm/slide/delete')" class="delete-class" href="">Xóa</a>
                                        </td>
                                    </tr>  
                                    @endforeach
                                    
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
@endsection