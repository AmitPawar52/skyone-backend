<?php

namespace App\Http\Controllers\bank;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\loanDetail;
use App\faq;
class loanDetailsController extends Controller
{
    public function index()
    {
        $lDetails = loanDetail::all();
        if(count($lDetails) > 0){
            // foreach($lDetails as $point){
            //     $point->whyChoosePoints = explode('.', $point->whyChoosePoints);
            //     $point->ptcPoints = explode('.', $point->ptcPoints);
            // }
            $response = [
                'msg'=> 'all blogs',
                'blogs'=>$lDetails
            ];
            return response()->json($lDetails, 201);
        }
        else {
            $response = [ 
                'msg'=> 'blogs not found'
            ];
            return response()->json($response, 404);
        }
    }

// my function to retrive faqs of given loan type
    public function getFaqs($id){
        $lDetails = loanDetail::find($id)->faqs;
        return response()->json($lDetails);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'loanType' => 'required',
            'whatIsLType' => 'required',
            'whyChooseTitle' => 'required',
            'whyChoosePoints' => 'required',
            'ptcTitle' => 'required',
            'ptcPoints' => 'required'
        ]);
        $loanType = $request->input('loanType');
        $whatIsLType = $request->input('whatIsLType');
        $whyChooseTitle = $request->input('whyChooseTitle');
        $whyChoosePoints = $request->input('whyChoosePoints');
        $whyChooseFooter = $request->input('whyChooseFooter');
        $ptcTitle = $request->input('ptcTitle');
        $ptcPoints = $request->input('ptcPoints');
        
        $lDetails = new loanDetail([
            'loanType' => $loanType,
            'whatIsLType' => $whatIsLType,
            'whyChooseTitle' => $whyChooseTitle,
            'whyChoosePoints' => $whyChoosePoints,
            'whyChooseFooter' => $whyChooseFooter,
            'ptcTitle' => $ptcTitle,
            'ptcPoints' => $ptcPoints
        ]);
        if($lDetails->save()){
            $response = [
                'msg'=>'data stored',
                'data'=>$lDetails
            ];
            return response()->json($response, 201);
        }
        $response = [
            'msg'=> 'unable to save record'
        ];
        return response()->json($response, 404);
    }

    public function show($loanType)
    {
        $lDetails = loanDetail::where('loanType', $loanType)->firstOrFail();
        if($lDetails){
            // $whyChoosePoints[] = explode('.',$lDetails->whyChoosePoints);
            // $ptcPoints[] = explode('.', $lDetails->ptcPoints);
            // $lDetails->whyChoosePoints = $whyChoosePoints;
            // $lDetails->ptcPoints = $ptcPoints;
            $response = [
                'msg'=>'Record found',
                'record'=>$lDetails
            ];
            return response()->json($lDetails, 201);
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
        $loanType = $request->input('loanType');
        $whatIsLType = $request->input('whatIsLType');
        $whyChooseTitle = $request->input('whyChooseTitle');
        $whyChoosePoints = $request->input('whyChoosePoints');
        $whyChooseFooter = $request->input('whyChooseFooter');
        $ptcTitle = $request->input('ptcTitle');
        $ptcPoints = $request->input('ptcPoints');

        $lDetails = loanDetail::where('id', $id)->firstOrFail();
        $lDetails->loanType = $loanType;
        $lDetails->whatIsLType = $whatIsLType;
        $lDetails->whyChooseTitle = $whyChooseTitle;
        $lDetails->whyChoosePoints =$whyChoosePoints;
        $lDetails->whyChooseFooter = $whyChooseFooter;
        $lDetails->ptcTitle = $ptcTitle;
        $lDetails->ptcPoints = $ptcPoints;

        if($lDetails->save()){
            $response = [
                'msg' => 'Record updated',
                'Data' => $lDetails
            ];
            return response()->json($response, 201);
        }
    }

    public function destroy($id)
    {
        $lDetails = loanDetail::where('id',$id)->firstOrFail();
        if($lDetails->delete()){
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
