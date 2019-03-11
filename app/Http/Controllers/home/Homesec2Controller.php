<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\home\homesec2;

class Homesec2Controller extends Controller
{
    public function index()
    {
        $homesec2 = homesec2::all();
        if(count($homesec2) > 0){
            return response()->json($homesec2, 201);
        }
        else {
            return response()->json(['msg'=>'records not found'], 404);
        }
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'img_url' => 'required',
        ]);
        $title = $request->input('title');
        $img_url = $request->input('img_url');
        
        $homesec2 = new homesec2([
            'title' => $title,
            'img_url' => $img_url,
        ]);
        if($homesec2->save()){
            $response = [
                'msg'=>'data stored',
                'data'=>$homesec2
            ];
            return response()->json($response, 201);
        }
        $response = [
            'msg'=> 'unable to save record'
        ];
        return response()->json($response, 404);
    }

    public function show($id)
    {
        $homesec2 = homesec2::where('id', $id)->firstOrFail();
        if($homesec2){
            $response = [
                'msg'=>'Record found',
                'record'=>$homesec2
            ];
            return response()->json($homesec2, 201);
        }
        else{
            $response = [
                'msg'=>'record not found'
            ];
            return response()->json($response, 404);
        }
    }

    public function edit($id)
    {
        
    }

    public function update(Request $request, $id)
    {
        $title = $request->input('title');
        $img_url = $request->input('img_url');
        
        $homesec2 = homesec2::where('id', $id)->firstOrFail();
        $homesec2->title = $title;
        $homesec2->img_url = $img_url;
        if($homesec2->save()){
            $response = [
                'msg' => 'Record updated',
                'Data' => $homesec2
            ];
            return response()->json($response, 201);
        }
    }

    public function destroy($id)
    {
        $homesec2 = homesec4::where('id',$id)->firstOrFail();
        if($homesec2->delete()){
            $response = [
                'msg'=>'record deleted successfully'
            ];
            return response()->json($response, 201);
        }
        $response = [
            'msg'=>'unable to delete record'
        ];
        return response()->json($response, 404);
    }
}
