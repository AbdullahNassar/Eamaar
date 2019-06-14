<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Data;
use DB;

class DataController extends Controller {

	public function getData()
    {
        $gallery = new Data;
        $contacts = DB::table('data')
            ->select('data.*')
            ->where('id','=', 1)
            ->get();
        return view('admin.pages.data', compact('contacts','gallery'));
    }


    public function updateData(Request $request)
    {
        // $gallery = DB::table('data')
        //     ->select('data.clients_gallery')
        //     ->where('id','=', 1)
        //     ->get();

        // $c_gallery = json_decode($gallery);

        // $imgs = array();
        //     foreach ($product->images as $image) {
        //         $imgs[] = $image->name;
        //     }


        $a_ar['a_ar1'] = $request->input('a_ar1');
        $a_ar['a_ar2'] = $request->input('a_ar2');

        $a_en['a_en1'] = $request->input('a_en1');
        $a_en['a_en2'] = $request->input('a_en2');

        $about_ar = json_encode($a_ar);
        $about_en = json_encode($a_en);

        $why_ar = $request->input('why_ar');
        $why_en = $request->input('why_en');

        $b1_ar['b1_ar1'] = $request->input('b1_ar1');
        $b1_ar['b1_ar2'] = $request->input('b1_ar2');

        $block1_ar = json_encode($b1_ar);

        $b2_ar['b2_ar1'] = $request->input('b2_ar1');
        $b2_ar['b2_ar2'] = $request->input('b2_ar2');

        $block2_ar = json_encode($b2_ar);

        $b3_ar['b3_ar1'] = $request->input('b3_ar1');
        $b3_ar['b3_ar2'] = $request->input('b3_ar2');

        $block3_ar = json_encode($b3_ar);

        $b4_ar['b4_ar1'] = $request->input('b4_ar1');
        $b4_ar['b4_ar2'] = $request->input('b4_ar2');

        $block4_ar = json_encode($b4_ar);

        $b1_en['b1_en1'] = $request->input('b1_en1');
        $b1_en['b1_en2'] = $request->input('b1_en2');

        $block1_en = json_encode($b1_en);

        $b2_en['b2_en1'] = $request->input('b2_en1');
        $b2_en['b2_en2'] = $request->input('b2_en2');

        $block2_en = json_encode($b2_en);

        $b3_en['b3_en1'] = $request->input('b3_en1');
        $b3_en['b3_en2'] = $request->input('b3_en2');

        $block3_en = json_encode($b3_en);

        $b4_en['b4_en1'] = $request->input('b4_en1');
        $b4_en['b4_en2'] = $request->input('b4_en2');

        $block4_en = json_encode($b4_en);

        $stories_ar = $request->input('stories_ar');
        $stories_en = $request->input('stories_en');

        $clients_ar = $request->input('clients_ar');
        $clients_en = $request->input('clients_en');

        $services_ar = $request->input('services_ar');
        $services_en = $request->input('services_en');

        $projects_ar = $request->input('projects_ar');
        $projects_en = $request->input('projects_en');

        $contact_ar = $request->input('contact_ar');
        $contact_en = $request->input('contact_en');

        $subscribe_ar = $request->input('subscribe_ar');
        $subscribe_en = $request->input('subscribe_en');

        $t_ar['t_ar1'] = $request->input('t_ar1');
        $t_ar['t_ar2'] = $request->input('t_ar2');

        $team_ar = json_encode($t_ar);

        $t_en['t_en1'] = $request->input('t_en1');
        $t_en['t_en2'] = $request->input('t_en2');

        $team_en = json_encode($t_en);

        $data = array('about_content_ar' => $about_ar ,'about_content_en' => $about_en ,
         'why_ar' => $why_ar ,'why_en' => $why_en ,
         'block1_ar' => $block1_ar,'block1_en' => $block1_en,
         'block2_ar' => $block2_ar,'block2_en' => $block2_en,
         'block3_ar' => $block3_ar,'block3_en' => $block3_en,
         'block4_ar' => $block4_ar,'block4_en' => $block4_en,
         'stories_ar' => $stories_ar ,'stories_en' => $stories_en,
         'clients_ar' => $clients_ar ,'clients_en' => $clients_en,
         'services_ar' => $services_ar ,'services_en' => $services_en,
         'projects_ar' => $projects_ar ,'projects_en' => $projects_en,
         'contact_ar' => $contact_ar ,'contact_en' => $contact_en,
         'subscribe_ar' => $subscribe_ar,'subscribe_en' => $subscribe_en,
         'team_ar' => $team_ar,'team_en' => $team_en);
        DB::table('data')
            ->where('id', 1)
            ->update($data);

        return view('admin.pages.home');
    }
}
