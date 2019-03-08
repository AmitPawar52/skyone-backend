<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\home\loanProcess;

class LoanProcessController extends Controller
{
    
    public function index()
    {
        $loanProcess = loanProcess::all();
        if(count($loanProcess) > 0){
            $response = [
                'msg'=> 'all Partners',
                'blogs'=>$loanProcess
            ];
            return response()->json($loanProcess, 201);
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
        
        $loanProcess = new loanProcess([
            'title' => $title,
            'description'=> $description,
            'img_url' => $img_url,
        ]);
        if($loanProcess->save()){
            $response = [
                'msg'=>'data stored',
                'data'=>$loanProcess
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
        $loanProcess = loanProcess::where('id', $id)->firstOrFail();
        if($loanProcess){
            $response = [
                'msg'=>'Record found',
                'record'=>$loanProcess
            ];
            return response()->json($loanProcess, 201);
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
        $img_url = $request->input('img_url');
        
        $loanProcess = loanProcess::where('id', $id)->firstOrFail();
        $loanProcess->title = $title;
        $loanProcess->description = $description;
        $loanProcess->img_url = $img_url;
        if($loanProcess->save()){
            $response = [
                'msg' => 'Record updated',
                'Data' => $loanProcess
            ];
            return response()->json($response, 201);
        }
    }

    public function destroy($id)
    {
        $loanProcess = loanProcess::where('id',$id)->firstOrFail();
        if($loanProcess->delete()){
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
