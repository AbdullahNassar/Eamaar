<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Contacts;
use App\Service;
use App\Subscriber;
use App\Data;
use DB;

class HomeController extends Controller {

    public function getIndex() {

        $sliders = DB::table('sliders')
            ->select('sliders.*')
            ->orderBy('id')
            ->where('active','=', 1)
            ->get();

        $services = DB::table('services')
            ->select('services.*')
            ->orderBy('id')
            ->where('active','=', 1)
            ->get();

        $projects = DB::table('projects')
            ->join('categories', 'categories.c_id', '=', 'projects.category_id')
            ->select('projects.*','categories.*')
            ->orderBy('id')
            ->where('active','=', 1)
            ->get();

        $stories = DB::table('stories')
            ->select('stories.*')
            ->orderBy('id')
            ->where('active','=', 1)
            ->get();

    	$contact = new Contacts;
    	$data = new Data;
    	$service = new Service;
        return view('site.pages.home', compact('contact','sliders','data','services','doctors','stories','service','projects'));
    }

    public function subscribe(Request $request)
    {
        if ($request->ajax()){
            $subscribe = $request->input('subscribe');
            $data = array('email'=>$subscribe);
            $subscriber = Subscriber::create($data); 
            return response($subscriber);
        }
    }

}
