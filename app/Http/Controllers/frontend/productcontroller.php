<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\product;
use Illuminate\Http\Request;

class productcontroller extends Controller
{
    public function index(){
        $products = product::all();
        return view('fe.home',[
            'products' => $products
        ]);
    }
    public function show_allhotproduct() {
        $products = product::all();  // Lấy tất cả các sản phẩm từ bảng Product
        return view('fe.allproducts', [
            'products' => $products   // Truyền biến $products vào view
        ]);
    }
    
    public function show_product(Request $request){
        $product = product::find($request -> id);
        return view('fe.product', [
            'product' =>  $product,
            
        ]);
    }
}
