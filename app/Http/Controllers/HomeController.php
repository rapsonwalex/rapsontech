<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Website_design_questionnaire;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questionnaires = Website_design_questionnaire::where('end_record','=', 0)->orderBy('website_design_questionnaire_id', 'DSC')->get();
        return view('home', compact('questionnaires'));
    }

  
    public function generate_code(Request $request)
    {
       $id= $request->id; //get the searched content
        
     if($id!=""){
        $today = Carbon::now()->format('YmdHis');
         // $approved_date = Carbon::now();
        $store_questionnaire = new Website_design_questionnaire();
        $store_questionnaire->questionnaire_unique_code = $today;
        $store_questionnaire->save();
    }
         return redirect('home');
    }

       
}
