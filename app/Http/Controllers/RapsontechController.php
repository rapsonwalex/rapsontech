<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Website_design_questionnaire;
use App\Website_design_questionnaire_dump;
use App\Http\Requests;
use Carbon\Carbon;

use Mail;
use Session;

class RapsontechController extends Controller
{

//HOME PAGE........................................
public function main()
{
      return view('main');
}


public function postContact(Request $request) {
		$this->validate($request, [
			'name' => 'required|min:3',
			'email' => 'required|email',
			'phone_no' => 'digits:11',
			'message' => 'required|min:10']);

		$data = array(
			'name' => $request->name,
			'email' => $request->email,
			'phone_no' => $request->phone_no,
			'bodyMessage' => $request->message
			);

		Mail::send('emails.contact', $data, function($message) use ($data){
			$message->from($data['email'], $data['name']);
			$message->to('info@rapsontech.com', 'Rapsotech');
			$message->subject('Message From The Contact Form');

	});
		Mail::send('emails.contackfeedback', $data, function($message) use ($data){
			$message->from('info@rapsontech.com', 'RapsonTech');
			$message->to($data['email']);
			$message->subject('Thank you for contacting us');
		});


		\Session::flash('message', 'Your Email was Sent!');

		return redirect('/');
	}



public function web_questionnaires($questionnaire_unique_code)
{

 $questionnaire =Website_design_questionnaire::where('end_record', 0)->where('questionnaire_unique_code', $questionnaire_unique_code)->first();
 return view('web_q', compact('questionnaire'));
}

public function save_updated_web_questionnaires(Request $request, $website_design_questionnaire_id)
{
	// dd($request->all());

	$today = Carbon::now()->format('Y-m-d H:i:s');

		$store_questionnaire = Website_design_questionnaire::findorfail($website_design_questionnaire_id); 
		$store_questionnaire->your_name = $request->your_name;
		$store_questionnaire->contact_name = $request->contact_name;
		$store_questionnaire->title = $request->title;
		$store_questionnaire->address = $request->address;
		$store_questionnaire->phone = $request->phone;
		$store_questionnaire->fax = $request->fax;
		$store_questionnaire->email = $request->email;
		$store_questionnaire->q1 = $request->q1;
		$store_questionnaire->q2 = $request->q2;
		$store_questionnaire->q3 = $request->q3;
		$store_questionnaire->q4 = $request->q4;
		$store_questionnaire->q5 = $request->q5;
		$store_questionnaire->q6 = $request->q6;
		$store_questionnaire->q7 = $request->q7;
		$store_questionnaire->q8 = $request->q8;
		$store_questionnaire->q9 = $request->q9;
		$store_questionnaire->q10 = $request->q10;
		$store_questionnaire->q11 = $request->q11;
		$store_questionnaire->q12 = $request->q12;
		$store_questionnaire->q13 = $request->q13;
		$store_questionnaire->q14 = $request->q14;
		$store_questionnaire->q15 = $request->q15;
		$store_questionnaire->q16 = $request->q16;
		$store_questionnaire->q17 = $request->q17;
		$store_questionnaire->q18 = $request->q18;
		$store_questionnaire->q19 = $request->q19;
		$store_questionnaire->q20 = $request->q20;
		$store_questionnaire->q21 = $request->q21;
		$store_questionnaire->q22 = $request->q22;
		$store_questionnaire->q23 = $request->q23;
		$store_questionnaire->q24 = $request->q24;
		$store_questionnaire->q25 = $request->q25;
		$store_questionnaire->q26 = $request->q26;
		$store_questionnaire->q27 = $request->q27;
		$store_questionnaire->q28 = $request->q28;
		$store_questionnaire->q29 = $request->q29;
		$store_questionnaire->q30 = $request->q30;
		$store_questionnaire->q31 = $request->q31;
		$store_questionnaire->q32 = $request->q32;
		$store_questionnaire->q33 = $request->q33;
		$store_questionnaire->q34 = $request->q34;
		$store_questionnaire->q35 = $request->q35;
		$store_questionnaire->q36 = $request->q36;
		$store_questionnaire->q37 = $request->q37;
		$store_questionnaire->q38 = $request->q38;
		$store_questionnaire->q39 = $request->q39;
		$store_questionnaire->q40 = $request->q40;
		$store_questionnaire->q41 = $request->q41;
		$store_questionnaire->q42 = $request->q42;
		$store_questionnaire->q43 = $request->q43;
		$store_questionnaire->q44 = $request->q44;
		$store_questionnaire->q45 = $request->q45;
		$store_questionnaire->q46 = $request->q46;
		$store_questionnaire->q47 = $request->q47;
		$store_questionnaire->q48 = $request->q48;
		$store_questionnaire->q49 = $request->q49;
		$store_questionnaire->q50 = $request->q50;
		$store_questionnaire->q51 = $request->q51;
		$store_questionnaire->q52 = $request->q52;
		$store_questionnaire->q53 = $request->q53;
		$store_questionnaire->q54 = $request->q54;
		$store_questionnaire->q55 = $request->q55;
		$store_questionnaire->q56 = $request->q56;
		$store_questionnaire->q57 = $request->q57;
		$store_questionnaire->q58 = $request->q58;
		$store_questionnaire->q59 = $request->q59;
		$store_questionnaire->q60 = $request->q60;
		$store_questionnaire->q61 = $request->q61;
		$store_questionnaire->q62 = $request->q62;
		$store_questionnaire->save();


		$store_questionnaire_dump = new Website_design_questionnaire_dump();
		$store_questionnaire_dump->website_design_questionnaire_id = $website_design_questionnaire_id;
		$store_questionnaire_dump->questionnaire_unique_code = $request->questionnaire_unique_code;
		$store_questionnaire_dump->your_name = $request->your_name;
		$store_questionnaire_dump->contact_name = $request->contact_name;
		$store_questionnaire_dump->title = $request->title;
		$store_questionnaire_dump->address = $request->address;
		$store_questionnaire_dump->phone = $request->phone;
		$store_questionnaire_dump->fax = $request->fax;
		$store_questionnaire_dump->email = $request->email;
		$store_questionnaire_dump->q1 = $request->q1;
		$store_questionnaire_dump->q2 = $request->q2;
		$store_questionnaire_dump->q3 = $request->q3;
		$store_questionnaire_dump->q4 = $request->q4;
		$store_questionnaire_dump->q5 = $request->q5;
		$store_questionnaire_dump->q6 = $request->q6;
		$store_questionnaire_dump->q7 = $request->q7;
		$store_questionnaire_dump->q8 = $request->q8;
		$store_questionnaire_dump->q9 = $request->q9;
		$store_questionnaire_dump->q10 = $request->q10;
		$store_questionnaire_dump->q11 = $request->q11;
		$store_questionnaire_dump->q12 = $request->q12;
		$store_questionnaire_dump->q13 = $request->q13;
		$store_questionnaire_dump->q14 = $request->q14;
		$store_questionnaire_dump->q15 = $request->q15;
		$store_questionnaire_dump->q16 = $request->q16;
		$store_questionnaire_dump->q17 = $request->q17;
		$store_questionnaire_dump->q18 = $request->q18;
		$store_questionnaire_dump->q19 = $request->q19;
		$store_questionnaire_dump->q20 = $request->q20;
		$store_questionnaire_dump->q21 = $request->q21;
		$store_questionnaire_dump->q22 = $request->q22;
		$store_questionnaire_dump->q23 = $request->q23;
		$store_questionnaire_dump->q24 = $request->q24;
		$store_questionnaire_dump->q25 = $request->q25;
		$store_questionnaire_dump->q26 = $request->q26;
		$store_questionnaire_dump->q27 = $request->q27;
		$store_questionnaire_dump->q28 = $request->q28;
		$store_questionnaire_dump->q29 = $request->q29;
		$store_questionnaire_dump->q30 = $request->q30;
		$store_questionnaire_dump->q31 = $request->q31;
		$store_questionnaire_dump->q32 = $request->q32;
		$store_questionnaire_dump->q33 = $request->q33;
		$store_questionnaire_dump->q34 = $request->q34;
		$store_questionnaire_dump->q35 = $request->q35;
		$store_questionnaire_dump->q36 = $request->q36;
		$store_questionnaire_dump->q37 = $request->q37;
		$store_questionnaire_dump->q38 = $request->q38;
		$store_questionnaire_dump->q39 = $request->q39;
		$store_questionnaire_dump->q40 = $request->q40;
		$store_questionnaire_dump->q41 = $request->q41;
		$store_questionnaire_dump->q42 = $request->q42;
		$store_questionnaire_dump->q43 = $request->q43;
		$store_questionnaire_dump->q44 = $request->q44;
		$store_questionnaire_dump->q45 = $request->q45;
		$store_questionnaire_dump->q46 = $request->q46;
		$store_questionnaire_dump->q47 = $request->q47;
		$store_questionnaire_dump->q48 = $request->q48;
		$store_questionnaire_dump->q49 = $request->q49;
		$store_questionnaire_dump->q50 = $request->q50;
		$store_questionnaire_dump->q51 = $request->q51;
		$store_questionnaire_dump->q52 = $request->q52;
		$store_questionnaire_dump->q53 = $request->q53;
		$store_questionnaire_dump->q54 = $request->q54;
		$store_questionnaire_dump->q55 = $request->q55;
		$store_questionnaire_dump->q56 = $request->q56;
		$store_questionnaire_dump->q57 = $request->q57;
		$store_questionnaire_dump->q58 = $request->q58;
		$store_questionnaire_dump->q59 = $request->q59;
		$store_questionnaire_dump->q60 = $request->q60;
		$store_questionnaire_dump->q61 = $request->q61;
		$store_questionnaire_dump->q62 = $request->q62;
		$store_questionnaire_dump->save();

$data = array(
			'questionnaire_unique_code' => $request->questionnaire_unique_code,
			'date' => $today,
			);

		Mail::send('emails.questionnaire_mail_alert', $data, function($message) use ($data){
			$message->from('info@rapsontech.com', 'RapsonTech');
			$message->to('belloadewalea@gmail.com', 'Bello Adewale');
			$message->subject('WEBSITE DESIGN QUESTIONNAIRE EDITED');

	});


\Session::flash('message', 'Saved Successfully!! Thank You');
	return back();
}

public function deleteq(Request $request)
    {
		$id = $request->id;
		$delete_questionnaire = Website_design_questionnaire::find($id);
		$delete_questionnaire->end_record = 1;
		$delete_questionnaire->update();

		if ($delete_questionnaire) {
		echo "Record Deleted successfully.";
		} else {
		echo "There was a problem. Please try again later.";
		}
		}

//////END 
}