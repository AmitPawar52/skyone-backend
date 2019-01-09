<?php

namespace App\Http\Controllers;
use App\contactus;
use Illuminate\Http\Request;

class ContactusController extends Controller
{

    public function index()
    {
        $contactus = contactus::all();
        if(count($contactus) > 0){
            $response = [
                'msg'=> 'Records found',
                'Records' => $contactus
            ];
            return response()->json($response,201);
        }
        $response = [
            'msg' => 'No records found'
        ];
        return response()->json($response,404);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required | max:60',
            'email' => 'required | E-Mail',
            'mobileNo' => 'required | Integer',
            'company' => 'required',
            'message' => 'required'
        ]);
        $name = $request->input('name');
        $email = $request->input('email');
        $mobileNo = $request->input('mobileNo');
        $company = $request->input('company');
        $message = $request->input('message');
        
        $contactus = new Contactus([
            'name'=>$name,
            'email'=>$email,
            'mobileNo'=>$mobileNo,
            'company'=>$company,
            'message'=>$message
        ]);

        if($contactus->save()){
            $response = [
                'msg'=> 'contact info saved',
                'info'=> $contactus
            ];
            return response()->json($response,201);
        }
        
        $response = [
            'msg' => 'error in submitting details'
            ];
        return response()->json($response, 404);
    }

    public function show($id)
    {
        $contactus = contactus::where('id', $id)->firstOrFail();
        if($contactus){
            $response = [
                'msg' => 'record found',
                'record' => $contactus
            ];
            return response()->json($response, 201);
        }
    }

 
    public function destroy($id)
    {
        $contactus = contactus::where('id', $id)->first();
        if($contactus->delete()){
            $response = [
                'msg'=>'contact deleted sucessfully'
            ];
            return response()->json($response,201);
        }
        $response = [
            'msg' => 'unable to delete record'
        ];
        return response()->json($response, 404);
    }
}
