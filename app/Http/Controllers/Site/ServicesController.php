<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Contacts;
use App\Service;
use App\Data;
use DB;

use App\Reservation;

class ServicesController extends Controller {

    public function getIndex() {

        $contact = new Contacts;
        $data = new Data;

        $services = DB::table('services')
            ->select('services.*')
            ->where('active','=', 1)
            ->get();

        return view('site.pages.services', compact('contact','data','services'));
    }

    public function getService($id) {

        if (isset($id)) {

        $contact = new Contacts;
        $data = new Data;

        $services = DB::table('services')
            ->select('services.*')
            ->where('id','=', $id)
            ->get();

        $counts = DB::table('services')
            ->select('services.*')
            ->where('active','=', 1)
            ->get();

        $projects = DB::table('projects')
            ->join('services', 'services.id', '=', 'projects.service_id')
            ->select('projects.*','services.*')
            ->where('projects.service_id','=', $id)
            ->get();

        $pro = DB::table('projects')
            ->join('services', 'services.id', '=', 'projects.category_id')
            ->join('categories', 'categories.c_id', '=', 'projects.category_id')
            ->select('projects.*','services.*','categories.*')
            ->where('projects.service_id', '=', $id)
            ->get();

        return view('site.pages.service', compact('contact','data','services','counts','projects','pro'));
        }
    }
}
