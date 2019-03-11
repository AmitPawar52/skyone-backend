<?php

namespace App\Http\Controllers\home;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\home\clientspeaks;

class ClientSpeaksController extends Controller
{

    public function index()
    {
        $clientSpeaks = clientspeaks::all();
        if(count($clientSpeaks) > 0 ){
            $response = [
                'msg' => 'Client sayings',
                'details' => $clientSpeaks
            ];
            return response()->json($clientSpeaks, 201);
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
            'clientName' => 'required | max:60',
            'clientPosition' => 'required | max:40',
            'clientSays' => 'required',
            'imgPath' => 'required'
        ]);
        $clientName = $request->input('clientName');
        $clientPosition = $request->input('clientPosition');
        $clientSays = $request->input('clientSays');
        $imgPath = $request->input('imgPath');

        $clientSpeaks = new clientspeaks([
            'clientName' => $clientName,
            'clientPosition' => $clientPosition,
            'clientSays' => $clientSays,
            'imgPath' => $imgPath
        ]);
        if($clientSpeaks->save()){
            $response = [
                'msg'=>'Client speaks data stored',
                'data'=>$clientSpeaks
            ];
            return response()->json($response, 201);
        }
        $response = [
            'msg'=> 'unable to save record'
        ];
        return response()->json($response, 201);
    }

    public function show($id)
    {
        $clientSpeaks = clientspeaks::where('id', $id)->firstOrFail();
        if($clientSpeaks){
            $response = [
                'msg'=>'Record found',
                'record'=>$clientSpeaks
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
        //
    }

    public function update(Request $request, $id)
    {
        $clientName = $request->input('clientName');
        $clientPosition = $request->input('clientPosition');
        $clientSays = $request->input('clientSays');
        $imgPath = $request->input('imgPath');

        $clientSpeaks = clientspeaks::where('id', $id)->firstOrFail();
        $clientSpeaks->clientName = $clientName;
        $clientSpeaks->clientPosition = $clientPosition;
        $clientSpeaks->clientSays = $clientSays;
        $clientSpeaks->imgPath = $imgPath;

        if($clientSpeaks->save()){
            $response = [
                'msg' => 'Record updated',
                'Data' => $clientSpeaks
            ];
            return response()->json($response, 201);
        }
    }


    public function destroy($id)
    {
        $clientSpeaks = clientspeaks::where('id',$id)->firstOrFail();
        if($clientSpeaks->delete()){
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
