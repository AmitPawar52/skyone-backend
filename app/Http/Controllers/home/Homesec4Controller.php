<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\home\homesec4;

class Homesec4Controller extends Controller
{
    public function index()
    {
        $homesec4 = homesec4::all();
        if(count($homesec4) > 0 ){
            return response()->json($homesec4, 201);
        }
        else {
            return response()->json(['msg'=> 'data not found'], 404);
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
            'description'=> 'required',
            'img_url' => 'required',
        ]);
        $title = $request->input('title');
        $description = $request->input('description');
        $img_url = $request->input('img_url');
        
        $homesec4 = new homesec4([
            'title' => $title,
            'description'=> $description,
            'img_url' => $img_url,
        ]);
        if($homesec4->save()){
            $response = [
                'msg'=>'data stored',
                'data'=>$homesec4
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
        $homesec4 = homesec4::where('id', $id)->firstOrFail();
        if($homesec4){
            $response = [
                'msg'=>'Record found',
                'record'=>$homesec4
            ];
            return response()->json($homesec4, 201);
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
        //
    }

    public function update(Request $request, $id)
    {
        $title = $request->input('title');
        $description = $request->input('description');
        $img_url = $request->input('img_url');
        
        $homesec4 = homesec4::where('id', $id)->firstOrFail();
        $homesec4->title = $title;
        $homesec4->description = $description;
        $homesec4->img_url = $img_url;
        if($homesec4->save()){
            $response = [
                'msg' => 'Record updated',
                'Data' => $homesec4
            ];
            return response()->json($response, 201);
        }
    }

    public function destroy($id)
    {
        $homesec4 = homesec4::where('id',$id)->firstOrFail();
        if($homesec4->delete()){
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
