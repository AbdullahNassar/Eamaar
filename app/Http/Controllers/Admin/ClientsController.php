<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Client;
use DB;

class ClientsController extends Controller {
    public function getIndex() {
        $clients = client::orderBy('id')->get();
        return view('admin.pages.client.index', compact('clients'));
    }

    public function getClient($id)
    {
        if (isset($id)) {
        $clients = DB::table('clients')
            ->select('clients.*')
            ->where('id','=', $id)
            ->get();
        return view('admin.pages.client.edit', compact('clients'));
        }
    }

    public function getC($id)
    {
        if (isset($id)) {
        $clients = DB::table('clients')
            ->select('clients.*')
            ->where('id','=', $id)
            ->get();
        return view('admin.pages.client.delete', compact('clients'));
        }
    }

    public function deleteC($id)
    {
        if (isset($id)) {
            DB::table('clients')->where('id','=', $id)->delete();
            $clients = client::orderBy('id')->get();
        return view('admin.pages.client.index', compact('clients'));
        }
    }

    public function updateClient(Request $request)
    {
        $id = $request->input('s_id');
        $image = $request->input('image');
        $client_name_ar = $request->input('client_name_ar');
        $client_name_en = $request->input('client_name_en');

        $data = array('client_name_ar'=>$client_name_ar,'client_name_en'=>$client_name_en,
            'image'=>$image);

        DB::table('clients')
            ->where('id','=', $id)
            ->update($data);

        $clients = client::orderBy('id')->get();
        return view('admin.pages.client.index', compact('clients'));
    }

    public function getAdd() {
        return view('admin.pages.client.add');
    }

    public function insertClient(Request $request)
    {

        $image = $request->input('image');
        $client_name_ar = $request->input('client_name_ar');
        $client_name_en = $request->input('client_name_en');

        $data = array('client_name_ar'=>$client_name_ar,'client_name_en'=>$client_name_en,
            'image'=>$image);

        DB::table('clients')->insert($data);

        $clients = client::orderBy('id')->get();
        return view('admin.pages.client.index', compact('clients'));
    }

}
