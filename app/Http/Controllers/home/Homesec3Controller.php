<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\home\homesec3;

class Homesec3Controller extends Controller
{
   
    public function index()
    {
        $sec3 = homesec3::all();
        if(count($sec3) > 0){
            foreach($sec3 as $temp){
                $temp->percentage = number_format($temp->percentage, 2);
            }
            $response = [
                'msg'=> 'all Partners',
                'blogs'=>$sec3
            ];
            return response()->json($sec3, 201);
        }
        else {
            $response = [ 
                'msg'=> 'Data not found'
            ];
            return response()->json($response, 404);
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
            'percentage'=> 'required',
            'label' => 'required',
            'img_url' => 'required',
        ]);
        $title = $request->input('title');
        $percentage = $request->input('percentage');
        $label = $request->input('label');
        $img_url = $request->input('img_url');
        
        $sec3 = new homesec3([
            'title' => $title,
            'percentage'=> $percentage,
            'label'=> $label,
            'img_url' => $img_url,
        ]);
        if($sec3->save()){
            $response = [
                'msg'=>'data stored',
                'data'=>$sec3
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
        $sec3 = homesec3::where('id', $id)->firstOrFail();
        if($sec3){
            $sec3->percentage = number_format($sec3->percentage, 2);
            $response = [
                'msg'=>'Record found',
                'record'=>$sec3
            ];
            return response()->json($sec3, 201);
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
        $percentage = $request->input('percentage');
        $label = $request->input('label');
        $img_url = $request->input('img_url');
        
        $sec3 = homesec3::where('id', $id)->firstOrFail();
        $sec3->title = $title;
        $sec3->percentage = $percentage;
        $sec3->label = $label;
        $sec3->img_url = $img_url;
        if($sec3->save()){
            $response = [
                'msg' => 'Record updated',
                'Data' => $sec3
            ];
            return response()->json($response, 201);
        }
    }

    public function destroy($id)
    {
        $sec3 = homesec3::where('id',$id)->firstOrFail();
        if($sec3->delete()){
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
