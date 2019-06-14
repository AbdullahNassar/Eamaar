<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Service;
use App\Packages;
use DB;

class ServicesController extends Controller {


    public function getIndex() {
        $services = DB::table('services')
            ->select('services.*')
            ->get();

        return view('admin.pages.service.index', compact('services'));
    }

    public function getService($id)
    {
        if (isset($id)) {
        $services = DB::table('services')
            ->select('services.*')
            ->where('id','=', $id)
            ->get();
        return view('admin.pages.service.edit', compact('services'));
        }
    }

    public function getServ($id)
    {
        if (isset($id)) {
        $services = DB::table('services')
            ->select('services.*')
            ->where('id','=', $id)
            ->get();
        return view('admin.pages.service.delete', compact('services'));
        }
    }

    public function deleteServ($id)
    {
        if (isset($id)) {
            DB::table('services')->where('id','=', $id)->delete();
            $services = DB::table('services')
            ->select('services.*')
            ->get();
        return view('admin.pages.service.index', compact('services'));
        }
    }

    public function getAdd() {
        return view('admin.pages.service.add');
    }

    public function insertService(Request $request)
    {
        $image = $request->input('image');
        $active = $request->input('active');
        $_order = $request->input('_order');
        $name_ar = $request->input('name_ar');
        $name_en = $request->input('name_en');

        $c_ar['c_ar1'] = $request->input('c_ar1');
        $c_ar['c_ar2'] = $request->input('c_ar2');
        $c_ar['c_ar3'] = $request->input('c_ar3');

        $c_en['c_en1'] = $request->input('c_en1');
        $c_en['c_en2'] = $request->input('c_en2');
        $c_en['c_en3'] = $request->input('c_en3');

        $content_ar = json_encode($c_ar);
        $content_en = json_encode($c_en);

        $whyb1_ar['b1_ar1'] = $request->input('b1_ar1');
        $whyb1_ar['b1_ar2'] = $request->input('b1_ar2');
        $whyb2_ar['b2_ar1'] = $request->input('b2_ar1');
        $whyb2_ar['b2_ar2'] = $request->input('b2_ar2');
        $whyb3_ar['b3_ar1'] = $request->input('b3_ar1');
        $whyb3_ar['b3_ar2'] = $request->input('b3_ar2');

        $why_ar1 = json_encode($whyb1_ar);
        $why_ar2 = json_encode($whyb2_ar);
        $why_ar3 = json_encode($whyb3_ar);

        $whyb1_en['b1_en1'] = $request->input('b1_en1');
        $whyb1_en['b1_en2'] = $request->input('b1_en2');
        $whyb2_en['b2_en1'] = $request->input('b2_en1');
        $whyb2_en['b2_en2'] = $request->input('b2_en2');
        $whyb3_en['b3_en1'] = $request->input('b3_en1');
        $whyb3_en['b3_en2'] = $request->input('b3_en2');

        $why_en1 = json_encode($whyb1_en);
        $why_en2 = json_encode($whyb2_en);
        $why_en3 = json_encode($whyb3_en);

        $h_ar['h_ar1'] = $request->input('h_ar1');
        $h_ar['h_ar2'] = $request->input('h_ar2');

        $h_en['h_en1'] = $request->input('h_en1');
        $h_en['h_en2'] = $request->input('h_en2');

        $how_ar = json_encode($h_ar);
        $how_en = json_encode($h_en);

        $data = array('s_name_ar'=>$name_ar,'s_name_en'=>$name_en,
            'content_ar'=>$content_ar,'content_en'=>$content_en,
            'whyb1_ar'=>$why_ar1,'whyb1_en'=>$why_en1,
            'whyb2_ar'=>$why_ar2,'whyb2_en'=>$why_en2,
            'whyb3_ar'=>$why_ar3,'whyb3_en'=>$why_en3,
            'how_ar'=>$how_ar,'how_en'=>$how_en,
            'image'=>$image,'_order'=>$_order,'active'=>$active);

        DB::table('services')->insert($data);

        $services = DB::table('services')
            ->select('services.*')
            ->get();
        return view('admin.pages.service.index', compact('services'));
    }

    public function updateService(Request $request)
    {
        $id = $request->input('s_id');
        $image = $request->input('image');
        $active = $request->input('active');
        $_order = $request->input('_order');
        $name_ar = $request->input('name_ar');
        $name_en = $request->input('name_en');

        $c_ar['c_ar1'] = $request->input('c_ar1');
        $c_ar['c_ar2'] = $request->input('c_ar2');
        $c_ar['c_ar3'] = $request->input('c_ar3');

        $c_en['c_en1'] = $request->input('c_en1');
        $c_en['c_en2'] = $request->input('c_en2');
        $c_en['c_en3'] = $request->input('c_en3');

        $content_ar = json_encode($c_ar);
        $content_en = json_encode($c_en);

        $whyb1_ar['b1_ar1'] = $request->input('b1_ar1');
        $whyb1_ar['b1_ar2'] = $request->input('b1_ar2');
        $whyb2_ar['b2_ar1'] = $request->input('b2_ar1');
        $whyb2_ar['b2_ar2'] = $request->input('b2_ar2');
        $whyb3_ar['b3_ar1'] = $request->input('b3_ar1');
        $whyb3_ar['b3_ar2'] = $request->input('b3_ar2');

        $why_ar1 = json_encode($whyb1_ar);
        $why_ar2 = json_encode($whyb2_ar);
        $why_ar3 = json_encode($whyb3_ar);

        $whyb1_en['b1_en1'] = $request->input('b1_en1');
        $whyb1_en['b1_en2'] = $request->input('b1_en2');
        $whyb2_en['b2_en1'] = $request->input('b2_en1');
        $whyb2_en['b2_en2'] = $request->input('b2_en2');
        $whyb3_en['b3_en1'] = $request->input('b3_en1');
        $whyb3_en['b3_en2'] = $request->input('b3_en2');

        $why_en1 = json_encode($whyb1_en);
        $why_en2 = json_encode($whyb2_en);
        $why_en3 = json_encode($whyb3_en);

        $h_ar['h_ar1'] = $request->input('h_ar1');
        $h_ar['h_ar2'] = $request->input('h_ar2');

        $h_en['h_en1'] = $request->input('h_en1');
        $h_en['h_en2'] = $request->input('h_en2');

        $how_ar = json_encode($h_ar);
        $how_en = json_encode($h_en);

        $data = array('s_name_ar'=>$name_ar,'s_name_en'=>$name_en,
            'content_ar'=>$content_ar,'content_en'=>$content_en,
            'whyb1_ar'=>$why_ar1,'whyb1_en'=>$why_en1,
            'whyb2_ar'=>$why_ar2,'whyb2_en'=>$why_en2,
            'whyb3_ar'=>$why_ar3,'whyb3_en'=>$why_en3,
            'how_ar'=>$how_ar,'how_en'=>$how_en,
            'image'=>$image,'_order'=>$_order,'active'=>$active);

        DB::table('services')
            ->where('id','=', $id)
            ->update($data);

        $services = DB::table('services')
            ->select('services.*')
            ->get();
        return view('admin.pages.service.index', compact('services'));
    }

}
