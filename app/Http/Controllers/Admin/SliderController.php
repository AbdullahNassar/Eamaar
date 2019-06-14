<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Slider;
use DB;

class SliderController extends Controller {
    public function getIndex() {
        $sliders = Slider::orderBy('_order')->get();
        return view('admin.pages.slider.index', compact('sliders'));
    }

    public function getSlider($id)
    {
        if (isset($id)) {
        $sliders = DB::table('sliders')
            ->select('sliders.*')
            ->where('id','=', $id)
            ->get();
        return view('admin.pages.slider.edit', compact('sliders'));
        }
    }

    public function getSlid($id)
    {
        if (isset($id)) {
        $sliders = DB::table('sliders')
            ->select('sliders.*')
            ->where('id','=', $id)
            ->get();
        return view('admin.pages.slider.delete', compact('sliders'));
        }
    }

    public function deleteSlid($id)
    {
        if (isset($id)) {
            DB::table('sliders')->where('id','=', $id)->delete();
            $sliders = Slider::orderBy('_order')->get();
        return view('admin.pages.slider.index', compact('sliders'));
        }
    }

    public function updateSlider(Request $request)
    {
        $id = $request->input('s_id');
        $image = $request->input('image');
        $active = $request->input('active');
        $_order = $request->input('_order');
        $_header = $request->input('_header');
        $_header_en = $request->input('_header_en');
        $content = $request->input('content');
        $content_en = $request->input('content_en');

        $data = array('image'=>$image,'active'=>$active,'_order'=>$_order,
                      '_header'=>$_header,'_header_en'=>$_header_en,
                      'content'=>$content,'content_en'=>$content_en,);
        DB::table('sliders')
            ->where('id','=', $id)
            ->update($data);

        $sliders = Slider::orderBy('_order')->get();
        return view('admin.pages.slider.index', compact('sliders'));
    }

    public function getAdd() {
        return view('admin.pages.slider.add');
    }

    public function insertSlider(Request $request)
    {

        $image = $request->input('image');
        $active = $request->input('active');
        $_order = $request->input('_order');
        $_header = $request->input('_header');
        $_header_en = $request->input('_header_en');
        $content = $request->input('content');
        $content_en = $request->input('content_en');

        $data = array('image'=>$image,'active'=>$active,'_order'=>$_order,
                      '_header'=>$_header,'_header_en'=>$_header_en,
                      'content'=>$content,'content_en'=>$content_en,);

        DB::table('sliders')->insert($data);

        $sliders = Slider::orderBy('_order')->get();
        return view('admin.pages.slider.index', compact('sliders'));
    }

}
