<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\banner;
use Illuminate\Http\Request;

class bannercontroller extends Controller
{
    public function insert_banner(Request $request)
    {
        $banner = new banner();
        if($request->has('banner_images')){
            $banner_images = implode('*', $request->input('banner_images'));
            $banner->images = $banner_images;
        }
        // dd($request -> all());
        $banner->save();
        return redirect()->back();
    }




    public function list_banner(){
        $banner = banner::all();
        // dd($banner);
        return view('admin.slide.list',[
        'title' => 'Danh Sách Banner',
        'banner'=> $banner
        ]);

    }
    public function add_banner(){
        return view('admin.slide.add',[
        'title' => 'Thêm Banner',
        ]);
    }
    public function delete_banner(Request $request){
        banner::find($request -> banner_id)->delete();
        return response() -> json([
            'success' => true
        ]);
    }
    public function edit_banner(Request $request){
        $banner = banner::find($request -> id);
        return view('admin.banner.edit',[
            'title' => 'Sửa Banner',
            'banner' => $banner
        ]);
    }
    public function update_banner(Request $request){
        $banner = banner::find($request -> id);
        if($request->has('banner_images')){
            $banner_images = implode('*', $request->input('banner_images'));
            $banner->images = $banner_images;
        }
        $banner->save();
        return redirect('/admin/banner/list');
    }
}
