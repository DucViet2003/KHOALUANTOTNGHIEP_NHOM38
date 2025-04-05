<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\banner;
use Illuminate\Http\Request;

class bannercontroller extends Controller
{
    public function show_banner(){
        $banner = banner::all();
        // dd($banner);
        return view('fe.part.slide',[
        
        'banner'=> $banner
        ]);

    }
}
