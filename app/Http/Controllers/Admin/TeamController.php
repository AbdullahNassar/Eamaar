<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Team;


class TeamController extends Controller {


    public function getIndex() {
        $teams = DB::table('team')
                    ->select('team.*')
                    ->get();

        return view('admin.pages.team.index', compact('teams'));
    }

    public function getTeam($id)
    {
        if (isset($id)) {
            $teams = DB::table('team')
                ->select('team.*')
                ->where('id','=', $id)
                ->get();

        return view('admin.pages.team.edit', compact('teams'));
        }
    }

    public function deleteTeam($id)
    {
        if (isset($id)) {
            DB::table('team')->where('id','=', $id)->delete();
            
            $teams = DB::table('team')
                    ->select('team.*')
                    ->get();
            return view('admin.pages.team.index', compact('teams'));
        }
    }

    public function getAdd() {

        return view('admin.pages.team.add');
    }

    public function insertTeam(Request $request)
    {
        $image = $request->input('image');
        $name = $request->input('name');
        $name_en = $request->input('name_en');
        $title = $request->input('title');
        $title_en = $request->input('title_en');
        $content = $request->input('content');
        $content_en = $request->input('content_en');
        $facebook = $request->input('facebook');
        $twitter = $request->input('twitter');
        $google = $request->input('google');
        $linkedin = $request->input('linkedin');
        $active = $request->input('active');
        $_order = $request->input('_order');
        
        $data = array(
            'name_ar'=>$name,
            'name_en'=>$name_en,
            'title_ar'=>$title,
            'title_en'=>$title_en,
            'content_ar'=>$content,
            'content_en'=>$content_en,
            'facebook'=>$facebook,
            'twitter'=>$twitter,
            'google'=>$google,
            'linkedin'=>$linkedin,
            'image'=>$image,
            '_order'=>$_order,
            'active'=>$active
            );

        DB::table('team')->insert($data);
        
        $teams = DB::table('team')
                    ->select('team.*')
                    ->get();
        return view('admin.pages.team.index', compact('teams'));
    }

    public function updateTeam(Request $request)
    {
        $id = $request->input('s_id');
        $image = $request->input('image');
        $name = $request->input('name');
        $name_en = $request->input('name_en');
        $title = $request->input('title');
        $title_en = $request->input('title_en');
        $content = $request->input('content');
        $content_en = $request->input('content_en');
        $facebook = $request->input('facebook');
        $twitter = $request->input('twitter');
        $google = $request->input('google');
        $linkedin = $request->input('linkedin');
        $active = $request->input('active');
        $_order = $request->input('_order');
        
        $data = array(
            'name_ar'=>$name,
            'name_en'=>$name_en,
            'title_ar'=>$title,
            'title_en'=>$title_en,
            'content_ar'=>$content,
            'content_en'=>$content_en,
            'facebook'=>$facebook,
            'twitter'=>$twitter,
            'google'=>$google,
            'linkedin'=>$linkedin,
            'image'=>$image,
            '_order'=>$_order,
            'active'=>$active
            );

        DB::table('team')
            ->where('id','=', $id)
            ->update($data);

        $teams = DB::table('team')
                    ->select('team.*')
                    ->get();
        return view('admin.pages.team.index', compact('teams'));
    }

}
