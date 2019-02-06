<?php

namespace App\Http\Controllers;
use App\Inquiry;
use Illuminate\Http\Request;

class InquiryController extends Controller
{
    public function index() 
    {
        $inquiry = Inquiry::all();
        if(count($inquiry) > 0){
            $response = [
                'msg' => count($inquiry).'inquiries found',
                'inquities' => $inquiry
            ];
            return response()->json($response, 201);
        }
        $response = [
            'msg' => 'No enquiries found'
        ];
        return response()->json($response, 404);
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required | max:60',
            'email' => 'required | E-Mail',
            'mobileNo' => 'required | Integer',
            'company' => 'required',
            'salary' => 'required | Integer',
            'requirement' => 'required'
        ]);
        $name = $request->input('name');
        $email = $request->input('email');
        $mobileNo = $request->input('mobileNo');
        $company = $request->input('company');
        $salary = $request->input('salary');
        $requirement = $request->input('requirement');

        $inquiry = new Inquiry([
            'name' => $name,
            'email' => $email,
            'mobileNo' => $mobileNo,
            'company' => $company,
            'salary' => $salary,
            'requirement' => $requirement
        ]);
        
        if($inquiry->save()){
            $response = [
                'msg' => 'inquiry created',
                'inquiry' => $inquiry
            ];
            return response()->json($response, 201);
        }

        $response = [
            'msg' => 'Error occured while submitting inquiry'
        ];
        return response()->json($response, 404);
    }

    public function show($id)
    {
        $inquiry = Inquiry::where('id', $id)->firstOrFail();
        if($inquiry){
            $response = [
                'msg'=> 'record found',
                'details' => $inquiry
            ];
            return response()->json($response,201);
        }
        $response = [
            'msg' => 'record not found'
        ];
        return response()->json($response, 404);
    }

    public function edit($id)
    {
        
    }

    public function update(Request $request, $id)
    {
        
    }

    public function destroy($id)
    {
        $inquiry = Inquiry::where('id', $id)->firstOrFail();
        if($inquiry->delete()){
            $response = [
                'msg' => 'inquiry deleted successfully'
            ];
            return response()->json($response, 201);
        }
    }
}
