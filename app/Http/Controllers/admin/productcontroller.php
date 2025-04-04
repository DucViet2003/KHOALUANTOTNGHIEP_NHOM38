<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\product;
use Illuminate\Http\Request;

class productcontroller extends Controller
{
    public function insert_product(Request $request)
    {
        
        $products = new product();
        $products->Name = $request->input('Name');
        $products->Address = $request->input('Address');
        $products->Star_rating = $request->input('Star_rating');
        $products->Price_nomal = $request->input('Price_nomal');
        $products->Price_sale = $request->input('Price_sale');
        $products->Phone = $request->input('Phone');
        $products->Gmail = $request->input('Gmail');
        $products->Description = $request->input('Description');
        $products->Content = $request->input('Content');
        $products->avatar = $request->input('avatar');
        if($request->has('product_images')){
            $product_images = implode('*', $request->input('product_images'));
            $products->images = $product_images;
        }

        // dd($request -> all());
        $products->save();
        return redirect()->back();
    }
    public function list_product(){
        $products =product::all();
        // dd($product);
        return view('admin.product.list',[
        'title' => 'Danh Sách Căn Hộ',
        'products'=> $products
        ]);

    }
    public function add_product(){
        return view('admin.product.add',[
        'title' => 'Thêm Sản Phẩm',
        ]);
    }
    public function delete_product(Request $request){
        product::find($request -> product_id)->delete();
        return response() -> json([
            'success' => true
        ]);
    }
    public function edit_product(Request $request){
        $product = product::find($request -> id);
        return view('admin.product.edit',[
            'title' => 'Sửa Sản Phẩm',
            'product' => $product
        ]);
    }
    public function update_product(Request $request){
        $product = product::find($request -> id);
        $product->name = $request->input('name');
        $product->ram = $request->input('ram');
        $product->ssd = $request->input('ssd');
        $product->price_noma = $request->input('price_noma');
        $product->price_sale = $request->input('price_sale');
        $product->description = $request->input('description');
        $product->content = $request->input('content');
        $product->avatar = $request->input('avatar');
        if($request->has('product_images')){
            $product_images = implode('*', $request->input('product_images'));
            $product->images = $product_images;
        }
        $product->save();
        return redirect('/admin/product/list');
    }
}
