<?php

namespace App\Http\Controllers\General;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\homeSlider;
class homeSliderController extends Controller
{
    public function index()
    {   
        $numberOfRows = 4;
        $homeSlider = homeSlider::all();
        if(count($homeSlider) > 0){
            $randRows = $homeSlider->shuffle()->slice(0,$numberOfRows);
            $response = [
                'msg' => 'slider text',
                'data' => $randRows
            ]; 
            return response()->json($randRows, 201); 
        }
        $response = [
            'msg'=>'error in showing data'
        ];
        return response()->json($response, 404);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'imagePath' => 'required'
        ]);
        $title = $request->input('title');
        $description = $request->input('description');
        $imagePath = $request->input('imagePath');

        $homeSlider = new \App\homeSlider([
            'title' => $title,
            'description' => $description,
            'imagePath' => $imagePath
        ]);
        if($homeSlider->save()){
            $response = [
                'msg'=>'data stored',
                'data'=>$homeSlider
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
        $homeSlider = \App\homeSlider::where('id', $id)->firstOrFail();
        if($homeSlider){
            $response = [
                'msg'=>'Record found',
                'record'=>$homeSlider
            ];
            return response()->json($response, 201);
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
        $description = $request->input('description');
        $imagePath = $request->input('imagePath');

        $homeSlider = \App\homeSlider::where('id', $id)->firstOrFail();
        $homeSlider->title = $title;
        $homeSlider->description = $description;
        $homeSlider->imagePath = $imagePath;

        if($homeSlider->save()){
            $response = [
                'msg' => 'Record updated',
                'Data' => $homeSlider
            ];
            return response()->json($response, 201);
        }
    }

    public function destroy($id)
    {
        $homeSlider = \App\homeSlider::where('id',$id)->firstOrFail();
        if($homeSlider->delete()){
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
