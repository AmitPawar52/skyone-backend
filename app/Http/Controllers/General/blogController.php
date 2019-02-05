<?php

namespace App\Http\Controllers\General;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\blog;
use Carbon\Carbon;

class blogController extends Controller
{
    public function index()
    {
        $blogs = blog::all();
        if(count($blogs) > 0){
            $response = [
                'msg'=> 'all blogs',
                'blogs'=>$blogs
            ];
            return response()->json($blogs, 201);
        }
        else {
            $response = [ 
                'msg'=> 'blogs not found'
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
            'title' => 'required',
            'body' => 'required',
            'date' => 'required',
            'imagePath' => 'required'
        ]);
        $title = $request->input('title');
        $body = $request->input('body');
        $date = $request->input('date');
        $imagePath = $request->input('imagePath');
        
        $blogs = new blog([
            'title' => $title,
            'body' => $body,
            'date' => Carbon::parse($date)->format('d-M-Y'),
            'imagePath' => $imagePath
        ]);
        if($blogs->save()){
            $response = [
                'msg'=>'data stored',
                'data'=>$blogs
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
        $blogs = blog::where('id', $id)->firstOrFail();
        if($blogs){
            $response = [
                'msg'=>'Record found',
                'record'=>$blogs
            ];
            return response()->json($blogs, 201);
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
        $body = $request->input('body');
        $date = $request->input('date');
        $imagePath = $request->input('imagePath');

        $blogs = blog::where('id', $id)->firstOrFail();
        $blogs->title = $title;
        $blogs->body = $body;
        $data->date = Carbon::parse($date)->format('d-M-Y');
        $blogs->imagePath = $imagePath;

        if($blogs->save()){
            $response = [
                'msg' => 'Record updated',
                'Data' => $blogs
            ];
            return response()->json($response, 201);
        }
    }

    public function destroy($id)
    {
        $blogs = blog::where('id',$id)->firstOrFail();
        if($blogs->delete()){
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
