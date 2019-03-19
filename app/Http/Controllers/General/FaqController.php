<?php

namespace App\Http\Controllers\General;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\faq;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faq = \App\faq::paginate(10);
        if(count($faq) > 0 ){
            $response = [
                'FAQs'=> $faq
            ];
            return response()->json($faq, 201);
        }
        $response = [
            'msg' => 'failed to retrive data'
        ];
        return response()->json($response, 404);
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

    public function getLtype($id){
        $faqs = faq::find($id);
        return response()->json($faqs->loanDetail, 201);
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'loanDetail_id'=> 'required',
            'question'=> 'required | max:160',
            'answer'=> 'required | max:500'
        ]);
        $loanDetail_id = $request->input('loanDetail_id');
        $question = $request->input('question');
        $answer = $request->input('answer');

        $faq = new \App\faq([
            'loanDetail_id'=>$loanDetail_id,
            'question'=> $question,
            'answer'=> $answer
        ]);
        if($faq->save()){
            $response = [
                'msg'=> 'data saved',
                'data'=> $faq
            ];
            return response()->json($response,201);
        }
        $response = [
            'msg'=> 'failed to save data'
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
        $faq = \App\faq::where('id', $id)->firstOrFail();
        if($faq){
            $response = [
                'msg'=> 'single faq',
                'faq'=> $faq
            ];
            return response()->json($response, 201);
        }
        $response = [
            'msg'=> 'failed to fetch record'
        ];
        return response()->json($response, 404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $question = $request->input('question');
        $answer = $request->input('answer');

        $faq = \App\faq::where('id', $id)->firstOrFail();
        $faq->question = $question;
        $faq->answer = $answer;

        if($faq->save()){
            $response = [
                'msg'=> 'faq updated',
                'faq'=> $faq
            ];
            return response()->json($response, 201);
        }
        $response = [
            'msg'=> 'failed to update'
        ];
        return response()->json($response, 404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $faq = \App\faq::where('id', $id)->firstOrFail();
        if($faq->delete()){
            $response = [
            'msg' => 'faq deleted'
            ];
            return response()->json($response, 201);
        }
        $response = [
            'msg' => 'failed to delete'
        ];
        return response()->json($response, 404);
    }
}
