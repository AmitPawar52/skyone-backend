<?php

namespace App\Http\Controllers;
use App\contactus;
use Illuminate\Http\Request;

class ContactusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contactus = contactus::where('id', $id)->firstOrFail();
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
