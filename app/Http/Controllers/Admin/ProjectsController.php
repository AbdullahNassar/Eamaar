<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Project;
use App\Gallery;
use DB;

class ProjectsController extends Controller {


    public function getIndex() {
        $projects = DB::table('projects')
            ->join('clients', 'clients.id', '=', 'projects.client_id')
            ->select('projects.*','clients.client_name_ar')
            ->orderBy('id')
            ->get();

        return view('admin.pages.project.index', compact('projects'));
    }

    public function getGallery() {
        $projects = DB::table('projects')
            ->select('projects.*')
            ->orderBy('id')
            ->get();

        return view('admin.pages.project.gallery', compact('projects'));
    }

    public function getProject($id)
    {
        if (isset($id)) {
        $projects = DB::table('projects')
            ->join('services', 'services.id', '=', 'projects.service_id')
            ->join('categories', 'categories.c_id', '=', 'projects.service_id')
            ->join('clients', 'clients.id', '=', 'projects.client_id')
            ->select('projects.*','services.s_name_ar','categories.*','clients.*')
            ->where('projects.id','=', $id)
            ->get();

        $services = DB::table('services')
            ->select('services.*')
            ->orderBy('id')
            ->get();

        $categories = DB::table('categories')
            ->select('categories.*')
            ->orderBy('c_id')
            ->get();

        $clients = DB::table('clients')
            ->select('clients.*')
            ->orderBy('id')
            ->get();

        $images = DB::table('gallery')
            ->select('gallery.*')
            ->orderBy('id')
            ->where('project_id','=', $id)
            ->get();

        return view('admin.pages.project.edit', compact('services','projects','categories','clients','images'));
        }
    }


    public function deleteProject($id)
    {
        if (isset($id)) {
            DB::table('projects')->where('id','=', $id)->delete();
            $projects = DB::table('projects')
            ->join('clients', 'clients.id', '=', 'projects.client_id')
            ->select('projects.*','clients.client_name_ar')
            ->get();
        return view('admin.pages.project.index', compact('projects'));
        }
    }

    public function getAdd() {
        $services = DB::table('services')
            ->select('services.*')
            ->get();

        $categories = DB::table('categories')
            ->select('categories.*')
            ->get();

        $clients = DB::table('clients')
            ->select('clients.*')
            ->get();
        return view('admin.pages.project.add', compact('services','categories','clients'));
    }

    public function insertProject(Request $request)
    {
        $image = $request->input('image');
        $image2 = $request->input('c_image');
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
        
        $location_ar = $request->input('location_ar');
        $location_en = $request->input('location_en');

        $area_ar = $request->input('area_ar');
        $area_en = $request->input('area_en');

        $cost_ar = $request->input('cost_ar');
        $cost_en = $request->input('cost_en');

        $st_date = $request->input('st_date');
        $end_date = $request->input('end_date');

        $service = $request->input('service');
        $category = $request->input('category');
        $client = $request->input('client');

        $data = array('name_ar'=>$name_ar,'name_en'=>$name_en,
            'content_ar'=>$content_ar,'content_en'=>$content_en,
            'location_ar'=>$location_ar,'location_en'=>$location_en,
            'area_ar'=>$area_ar,'area_en'=>$area_en,
            'st_date'=>$st_date,'end_date'=>$end_date,
            'cost_ar'=>$cost_ar,'cost_en'=>$cost_en,
            'p_image'=>$image,'_order'=>$_order,'active'=>$active,
            'service_id'=>$service,'category_id'=>$category,'client_id'=>$client);

        DB::table('projects')->insert($data);

        $projects = DB::table('projects')
            ->join('clients', 'clients.id', '=', 'projects.client_id')
            ->select('projects.*','clients.client_name_ar')
            ->get();

        return view('admin.pages.project.index', compact('projects'));
    }

    public function updateProject(Request $request)
    {
        $id = $request->input('s_id');
        $image = $request->input('image');
        $image2 = $request->input('c_image');
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

        $client_ar = $request->input('client_ar');
        $client_en = $request->input('client_en');
        
        $location_ar = $request->input('location_ar');
        $location_en = $request->input('location_en');

        $area_ar = $request->input('area_ar');
        $area_en = $request->input('area_en');

        $cost_ar = $request->input('cost_ar');
        $cost_en = $request->input('cost_en');

        $st_date = $request->input('st_date');
        $end_date = $request->input('end_date');

        $service = $request->input('service');
        $category = $request->input('category');
        $client = $request->input('client');

        $data = array('name_ar'=>$name_ar,'name_en'=>$name_en,
            'content_ar'=>$content_ar,'content_en'=>$content_en,
            'location_ar'=>$location_ar,'location_en'=>$location_en,
            'area_ar'=>$area_ar,'area_en'=>$area_en,
            'st_date'=>$st_date,'end_date'=>$end_date,
            'cost_ar'=>$cost_ar,'cost_en'=>$cost_en,
            'p_image'=>$image,'_order'=>$_order,'active'=>$active,
            'service_id'=>$service,'category_id'=>$category,'client_id'=>$client);

        DB::table('projects')
            ->where('id','=', $id)
            ->update($data);

        $projects = DB::table('projects')
            ->join('clients', 'clients.id', '=', 'projects.client_id')
            ->select('projects.*','clients.client_name_ar')
            ->get();

        return view('admin.pages.project.index', compact('projects'));
    }

    public function getPostImages(Request $request) {
        $id = $request->input('project');
        $image = $request->file('file');
        if ($image) {
            $destination = storage_path('uploads/project/');
            $imageName = $image->getClientOriginalName();
            $image->move($destination, $imageName);
            $image_path = "storage/uploads/project".'/'.$imageName;
            $data = array('images'=>$image_path,'project_id'=>$id);
            DB::table('gallery')->insert($data);
        }
    }

    public function addImages(Request $request) {
        $id = $request->input('project_id');
        $image = $request->file('file');
        if ($image) {
            $destination = storage_path('uploads/project/');
            $imageName = $image->getClientOriginalName();
            $image->move($destination, $imageName);
            $image_path = "storage/uploads/project".'/'.$imageName;
            $data = array('images'=>$image_path,'project_id'=>$id);
            DB::table('gallery')->insert($data);
        }
    }

    public function deleteImage($id)
    {
        if (isset($id)) {
            DB::table('gallery')->where('id','=', $id)->delete();
            return back();
        }
    }
}
