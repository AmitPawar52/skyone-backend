<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\home\partner;

class PartnersController extends Controller
{ 
    public function index()
    {
        $partners = partner::all();
        if(count($partners) > 0){
            $response = [
                'msg'=> 'all Partners',
                'blogs'=>$partners
            ];
            return response()->json($partners, 201);
        }
        else {
            $response = [ 
                'msg'=> 'Partners not found'
            ];
            return response()->json($response, 404);
        }
    }

    public function create()
    {
        
    }

   
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'img_url' => 'required',
        ]);
        $name = $request->input('name');
        $img_url = $request->input('img_url');
        
        $partners = new partner([
            'name' => $name,
            'img_url' => $img_url,
        ]);
        if($partners->save()){
            $response = [
                'msg'=>'data stored',
                'data'=>$partners
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
        $partners = partner::where('id', $id)->firstOrFail();
        if($partners){
            $response = [
                'msg'=>'Record found',
                'record'=>$partners
            ];
            return response()->json($partners, 201);
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
        $name = $request->input('name');
        $img_url = $request->input('img_url');
        
        $partners = partner::where('id', $id)->firstOrFail();
        $partners->name = $name;
        $partners->img_url = $img_url;
        if($partners->save()){
            $response = [
                'msg' => 'Record updated',
                'Data' => $partners
            ];
            return response()->json($response, 201);
        }
    }

    public function destroy($id)
    {
        $partners = partner::where('id',$id)->firstOrFail();
        if($partners->delete()){
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
