@extends('layouts.master')

@section('content')
<div class="container">
           
<div class="row">
  <div class="col-xs-12">
    <div class="box">
      
   
<h1> WEBSITE DESIGN QUESTIONNAIRE ({{$questionnaire->questionnaire_unique_code}})</h1>
<br>
<p>
Please complete and return the enclosed form. Your response will help us to define the initial direction of your new web site based on a clear understanding of your vision, type of business and requirements.
Client input is the foundation upon which successful identities are built. This questionnaire will help you articulate and identify the overall goals of development project, including specific answers regarding the message, audience, look and feel, and application.
Each key decision maker in your company should fill out his or her own form and answer each of the questions in a brief and clear manner. Please add any additional notes or comments at the end of the survey.
</p>
<br>
<p>
  NOTE: You can save at any stage you wish and use this same URL whenever you wish to continue till you are satisfied. Highlight questions where you need further clarification or explanation. As much detail as possible is preferred, but anything you can provide initially will help guide us in defining the initial direction for your project. 
</p>
<br>
<h1> Contact Information</h1>
<br>

   <form method = 'POST' action = "{{ url('/save_updated_web_questionnaires/'.$questionnaire->website_design_questionnaire_id) }}" enctype="multipart/form-data">
        {{ method_field('PATCH') }}
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>

  <div class="form-group row">
    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Your Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control form-control-sm" name="your_name" placeholder="Your Name" value="{{$questionnaire->your_name}}">
    </div>
  </div>

  <div class="form-group row">
    <label for="colFormLabel" class="col-sm-2 col-form-label">Contact Name</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" placeholder="Contact Name" name="contact_name" value="{{$questionnaire->contact_name}}">
    </div>

     <label for="colFormLabel" class="col-sm-1 col-form-label">Title</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" placeholder="Title" name="title" value="{{$questionnaire->title}}">
    </div>
  </div>

  <div class="form-group row">
    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Address</label>
    <div class="col-sm-10">
      <input type="text" class="form-control form-control-lg" name="address" placeholder="Address" value="{{$questionnaire->address}}">
    </div>
  </div>

    <div class="form-group row">
    <label for="colFormLabel" class="col-sm-2 col-form-label">Phone</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" placeholder="Phone" name="phone" value="{{$questionnaire->phone}}">
    </div>

     <label for="colFormLabel" class="col-sm-1 col-form-label">Fax</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" placeholder="Fax" name="fax" value="{{$questionnaire->fax}}"> 
    </div>
  </div>

    <div class="form-group row">
    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Email</label>
    <div class="col-sm-5">
      <input type="email" class="form-control form-control-lg" placeholder="Email" value="{{$questionnaire->email}}" name="email">
    </div>
  </div>


<br>
<h1>Services</h1>
<br>
<div class="form-group row">
  <div class="col-sm-6">
  <input class="form-check-input" type="checkbox" value="1" name="q1" @if ($questionnaire->q1 == 1) checked @endif>
  <label class="form-check-label">Web Site Design & Development</label>
</div>
<div class="col-sm-6">
  <input class="form-check-input" type="checkbox" value="1" name="q2" @if ($questionnaire->q2 == 1) checked @endif>
  <label class="form-check-label">Custom Design for Company/Business Operations</label>
</div>
</div>

<div class="form-group row">
  <div class="col-sm-6">
  <input class="form-check-input" type="checkbox" value="1" name="q3" @if ($questionnaire->q3 == 1) checked @endif>
  <label class="form-check-label">E-commerce</label>
</div>
<div class="col-sm-6">
  <input class="form-check-input" type="checkbox" value="1" name="q4" @if ($questionnaire->q4 == 1) checked @endif>
  <label class="form-check-label">Blog/Forum</label>
</div>
</div>

<div class="form-group row">
  <div class="col-sm-6">
  <input class="form-check-input" type="checkbox" value="1" name="q5" @if ($questionnaire->q5 == 1) checked @endif>
  <label class="form-check-label">Redesign of Current Site</label>
</div>
<div class="col-sm-6">
  <input class="form-check-input" type="checkbox" value="1" name="q6" @if ($questionnaire->q6 == 1) checked @endif>
  <label class="form-check-label">Social Media Integration</label>
</div>
</div>

<div class="form-group row">
  <div class="col-sm-6">
  <input class="form-check-input" type="checkbox" value="1" name="q7" @if ($questionnaire->q7 == 1) checked @endif>
  <label class="form-check-label">Web Site Maintenance</label>
</div>
<div class="col-sm-6">
  <input class="form-check-input" type="checkbox" value="1" name="q8" @if ($questionnaire->q8 == 1) checked @endif>
  <label class="form-check-label">Live Chat</label>
</div>
</div>


 <div class="form-group row">
    <label for="colFormLabelLg" class="col-sm-5 col-form-label col-form-label-lg">Who will be the the contact person(s) for your web site?</label>
    <div class="col-sm-7">
      <input type="text" class="form-control form-control-lg" name="q9" value="{{$questionnaire->q9}}">
    </div>
  </div>

  <div class="form-group row">
    <label for="colFormLabelLg" class="col-sm-5 col-form-label col-form-label-lg">Domain name:</label>
    <div class="col-sm-7">
      <input type="text" class="form-control form-control-lg" name="q10" value="{{$questionnaire->q10}}">
    </div>
  </div>

 <div class="form-group row">
    <label for="colFormLabelLg" class="col-sm-5 col-form-label col-form-label-lg">What will be the budget for your project?</label>
    <div class="col-sm-7">
      <input type="text" class="form-control form-control-lg" name="q11" value="{{$questionnaire->q11}}">
    </div>
  </div>

   <div class="form-group row">
    <label for="colFormLabelLg" class="col-sm-5 col-form-label col-form-label-lg">Is there a deadline for this project?</label>
    <div class="col-sm-7">
      <input type="text" class="form-control form-control-lg" name="q12" value="{{$questionnaire->q12}}">
    </div>
  </div> 

  <div class="form-group row">
    <label for="colFormLabelLg" class="col-sm-5 col-form-label col-form-label-lg">Would you like the project broken down in phases to help you meet your goals?</label>
    <div class="col-sm-7">
      <input type="text" class="form-control form-control-lg" name="q13" value="{{$questionnaire->q13}}">
    </div>
  </div> 

  <div class="form-group row">
    <label for="colFormLabelLg" class="col-sm-5 col-form-label col-form-label-lg">Will this be a new Web Site design or redesign of your existing Web Site?</label>
    <div class="col-sm-7">
      <input type="text" class="form-control form-control-lg" name="q14" value="{{$questionnaire->q14}}">
    </div>
  </div> 

  <div class="form-group row">
    <label for="colFormLabelLg" class="col-sm-5 col-form-label col-form-label-lg">If you have a Web Site will you be using existing content?</label>
    <div class="col-sm-7">
      <input type="text" class="form-control form-control-lg" name="q15" value="{{$questionnaire->q15}}">
    </div>
  </div> 

  <div class="form-group row">
    <label for="colFormLabelLg" class="col-sm-5 col-form-label col-form-label-lg">If you will be using existing content will you add more content?</label>
    <div class="col-sm-7">
      <input type="text" class="form-control form-control-lg" name="q16" value="{{$questionnaire->q16}}">
    </div>
  </div> 

<br>
<h1>Background</h1>
<br>

 <div class="form-group row">
    <label for="colFormLabelLg" class="col-sm-5 col-form-label col-form-label-lg">Describe the nature of your business.</label>
    <div class="col-sm-7">
      <input type="text" class="form-control form-control-lg" name="q17" value="{{$questionnaire->q17}}">
    </div>
  </div>

  <div class="form-group row">
    <label for="colFormLabelLg" class="col-sm-5 col-form-label col-form-label-lg">List the services that your company provides</label>
    <div class="col-sm-7">
      <input type="text" class="form-control form-control-lg" name="q18" value="{{$questionnaire->q18}}">
    </div>
  </div>

 <div class="form-group row">
    <label for="colFormLabelLg" class="col-sm-5 col-form-label col-form-label-lg">How many pages do you anticipate your Web site will have?</label>
    <div class="col-sm-7">
      <input type="text" class="form-control form-control-lg" name="q19" value="{{$questionnaire->q19}}">
    </div>
  </div>

   <div class="form-group row">
    <label for="colFormLabelLg" class="col-sm-5 col-form-label col-form-label-lg">Describe your target audience (i.e. average age, special interests, income level, education level). Do they have any special needs?</label>
    <div class="col-sm-7">
      <input type="text" class="form-control form-control-lg" name="q20" value="{{$questionnaire->q20}}">
    </div>
  </div> 

  <div class="form-group row">
    <label for="colFormLabelLg" class="col-sm-5 col-form-label col-form-label-lg">Do you currently have marketing materials that we should incorporate into our design?</label>
    <div class="col-sm-7">
      <input type="text" class="form-control form-control-lg" name="q21" value="{{$questionnaire->q21}}">
    </div>
  </div> 

<br>
<h1>Goals, Purpose, Concept, Focus, Direction, Strategy, and Message</h1>
What is the core purpose of your Web Site? Check all those that apply.
<br>

<div class="form-group row">
  <div class="col-sm-6">
  <input class="form-check-input" type="checkbox" value="1" name="q22" @if ($questionnaire->q22 == 1) checked @endif>
  <label class="form-check-label">Entertainment</label>
</div>
<div class="col-sm-6">
  <input class="form-check-input" type="checkbox" value="1" name="q23" @if ($questionnaire->q23 == 1) checked @endif>
  <label class="form-check-label">Increase sales</label>
</div>
</div>

<div class="form-group row">
  <div class="col-sm-6">
  <input class="form-check-input" type="checkbox" value="1" name="q24" @if ($questionnaire->q24 == 1) checked @endif>
  <label class="form-check-label">Increase corporate, brand, product recognition</label>
</div>
<div class="col-sm-6">
  <input class="form-check-input" type="checkbox" value="1" name="q25" @if ($questionnaire->q25 == 1) checked @endif>
  <label class="form-check-label">Improve internal communication</label>
</div>
</div>

<div class="form-group row">
  <div class="col-sm-6">
  <input class="form-check-input" type="checkbox" value="1" name="q26" @if ($questionnaire->q26 == 1) checked @endif>
  <label class="form-check-label">Reduce customer service calls</label>
</div>
<div class="col-sm-6">
  <input class="form-check-input" type="checkbox" value="1" name="q27" @if ($questionnaire->q27 == 1) checked @endif>
  <label class="form-check-label">Increase prospective customer base</label>
</div>
</div>

 <div class="form-group row">
    <label for="colFormLabelLg" class="col-sm-5 col-form-label col-form-label-lg">What is the primary message you wish to convey?</label>
    <div class="col-sm-7">
      <input type="text" class="form-control form-control-lg" name="q28" value="{{$questionnaire->q28}}">
    </div>
  </div>

  <div class="form-group row">
    <label for="colFormLabelLg" class="col-sm-5 col-form-label col-form-label-lg">Do you have any specific design elements in mind?</label>
    <div class="col-sm-7">
      <input type="text" class="form-control form-control-lg" name="q29" value="{{$questionnaire->q29}}">
    </div>
  </div>

 <div class="form-group row">
    <label for="colFormLabelLg" class="col-sm-5 col-form-label col-form-label-lg">What kind of interactivity will your site need?</label>
    <div class="col-sm-7">
      <input type="text" class="form-control form-control-lg" name="q30" value="{{$questionnaire->q30}}">
    </div>
  </div>



  <br>
<h1>Style, Design Message, Theme</h1>
<br>

 <div class="form-group row">
    <label for="colFormLabelLg" class="col-sm-5 col-form-label col-form-label-lg">What image do you want your site to project, what should be "the look and feel"?</label>
    <div class="col-sm-7">
      <input type="text" class="form-control form-control-lg" name="q31" value="{{$questionnaire->q31}}">
    </div>
  </div>

  <div class="form-group row">
    <label for="colFormLabelLg" class="col-sm-5 col-form-label col-form-label-lg">Please list some examples of sites that you like:</label>
    <div class="col-sm-7">
      <input type="text" class="form-control form-control-lg" name="q32" value="{{$questionnaire->q32}}">
    </div>
  </div>

 <div class="form-group row">
    <label for="colFormLabelLg" class="col-sm-5 col-form-label col-form-label-lg">Sites where I like the navigation:</label>
    <div class="col-sm-7">
      <input type="text" class="form-control form-control-lg" name="q33" value="{{$questionnaire->q33}}">
    </div>
  </div>

   <div class="form-group row">
    <label for="colFormLabelLg" class="col-sm-5 col-form-label col-form-label-lg">Sites where I like the color scheme:</label>
    <div class="col-sm-7">
      <input type="text" class="form-control form-control-lg" name="q34" value="{{$questionnaire->q34}}">
    </div>
  </div> 

  <div class="form-group row">
    <label for="colFormLabelLg" class="col-sm-5 col-form-label col-form-label-lg">Sites where I like the branding or image:</label>
    <div class="col-sm-7">
      <input type="text" class="form-control form-control-lg" name="q35" value="{{$questionnaire->q35}}">
    </div>
  </div> 


 <div class="form-group row">
    <label for="colFormLabelLg" class="col-sm-5 col-form-label col-form-label-lg">Sites designed for same target audience:</label>
    <div class="col-sm-7">
      <input type="text" class="form-control form-control-lg" name="q36" value="{{$questionnaire->q36}}">
    </div>
  </div>

 <div class="form-group row">
    <label for="colFormLabelLg" class="col-sm-5 col-form-label col-form-label-lg">Sites I like the user interface or layout:</label>
    <div class="col-sm-7">
      <input type="text" class="form-control form-control-lg" name="q37" value="{{$questionnaire->q37}}">
    </div>
  </div>

   <div class="form-group row">
    <label for="colFormLabelLg" class="col-sm-5 col-form-label col-form-label-lg">Please list some competitor's sites and what you like and dislike about them:</label>
    <div class="col-sm-7">
      <input type="text" class="form-control form-control-lg" name="q38" value="{{$questionnaire->q38}}">
    </div>
  </div> 

  <div class="form-group row">
    <label for="colFormLabelLg" class="col-sm-5 col-form-label col-form-label-lg">Please list some sites that you like in general/overall. Explain what you like and dislike.</label>
    <div class="col-sm-7">
      <input type="text" class="form-control form-control-lg" name="q39" value="{{$questionnaire->q39}}">
    </div>
  </div> 

    <div class="form-group row">
    <label for="colFormLabelLg" class="col-sm-5 col-form-label col-form-label-lg">Please list sites that you do not like. Explain:</label>
    <div class="col-sm-7">
      <input type="text" class="form-control form-control-lg" name="q40" value="{{$questionnaire->q40}}">
    </div>
  </div>

 <br>
<h1>Logo and Corporate Identity</h1>
<br>

<div class="custom-control custom-radio form-group row">
  <label for="colFormLabelLg" class="col-sm-3 col-form-label col-form-label-lg">Do you have a company logo?</label>
   <div class="col-sm-7">
  <input type="radio" id="q41" class="custom-control-input" name="q41" value="1" @if ($questionnaire->q41 == 1) checked @endif>
  <label class="custom-control-label" for="customRadio1">Yes</label>

   <input type="radio" id="q41" class="custom-control-input" name="q41" value="2" @if ($questionnaire->q41 == 2) checked @endif>
  <label class="custom-control-label" for="customRadio2">No</label>
</div>
</div>

<div class="custom-control custom-radio form-group row">
  <label for="colFormLabelLg" class="col-sm-6 col-form-label col-form-label-lg">Do you have a company slogan and/or mission statement?</label>
  <div class="col-sm-6">
  <input type="radio" id="q42" class="custom-control-input" name="q42" value="1" @if ($questionnaire->q42 == 1) checked @endif>
  <label class="custom-control-label" for="customRadio1">Yes</label>

   <input type="radio" id="q42" class="custom-control-input" name="q42" value="2" @if ($questionnaire->q42 == 2) checked @endif>
  <label class="custom-control-label" for="customRadio2">No</label>
  </div>
</div>

   <div class="form-group row">
    <label for="colFormLabelLg" class="col-sm-5 col-form-label col-form-label-lg">If yes, what is it?</label>
    <div class="col-sm-7">
      <input type="text" class="form-control form-control-lg" name="q43" value="{{$questionnaire->q43}}">
    </div>
  </div>

  <div class="custom-control custom-radio form-group row">
  <label for="colFormLabelLg" class="col-sm-6 col-form-label col-form-label-lg">Do you have a corporate color scheme or any symbols/icons that we should incorporate in our design?</label>
  <div class="col-sm-6">
  <input type="radio" id="q44" class="custom-control-input" name="q44" value="1" @if ($questionnaire->q44 == 1) checked @endif>
  <label class="custom-control-label" for="customRadio1">Yes</label>

   <input type="radio" id="q44" class="custom-control-input" name="q44" value="2" @if ($questionnaire->q44 == 2) checked @endif>
  <label class="custom-control-label" for="customRadio2">No</label>
  </div>
</div>

   <div class="form-group row">
    <label for="colFormLabelLg" class="col-sm-5 col-form-label col-form-label-lg">If yes, please list:</label>
    <div class="col-sm-7">
      <input type="text" class="form-control form-control-lg" name="q45" value="{{$questionnaire->q45}}">
    </div>
  </div>

  <div class="custom-control custom-radio form-group row">
  <label for="colFormLabelLg" class="col-sm-6 col-form-label col-form-label-lg">Do you already have image/graphic content for you web site?</label>
   <div class="col-sm-6">
  <input type="radio" id="q46" class="custom-control-input" name="q46" value="1" @if ($questionnaire->q46 == 1) checked @endif>
  <label class="custom-control-label" for="customRadio1">Yes</label>

   <input type="radio" id="q46" class="custom-control-input" name="q46" value="2" @if ($questionnaire->q46 == 2) checked @endif>
  <label class="custom-control-label" for="customRadio2">No</label>
</div>
</div>

<div class="custom-control custom-radio form-group row">
  <label for="colFormLabelLg" class="col-sm-6 col-form-label col-form-label-lg">Do you need assistance scanning or preparing your images?</label>
  <div class="col-sm-6">
  <input type="radio" id="q47" class="custom-control-input" name="q47" value="1" @if ($questionnaire->q47 == 1) checked @endif>
  <label class="custom-control-label" for="customRadio1">Yes</label>

   <input type="radio" id="q47" class="custom-control-input" name="q47" value="2" @if ($questionnaire->q47 == 2) checked @endif>
  <label class="custom-control-label" for="customRadio2">No</label>
  </div>
</div>

  <div class="form-group row">
    <label for="colFormLabelLg" class="col-sm-5 col-form-label col-form-label-lg">Approximately how many photos/graphics would you like to use on the site?</label>
    <div class="col-sm-7">
      <input type="text" class="form-control form-control-lg" name="q48" value="{{$questionnaire->q48}}">
    </div>
  </div>

  <div class="custom-control custom-radio form-group row">
  <label for="colFormLabelLg" class="col-sm-6 col-form-label col-form-label-lg">Do you have a separate budget for images?</label>
  <div class="col-sm-6">
  <input type="radio" id="q49" class="custom-control-input" name="q49" value="1" @if ($questionnaire->q49 == 1) checked @endif>
  <label class="custom-control-label" for="customRadio1">Yes</label>

   <input type="radio" id="q49" class="custom-control-input" name="q49" value="2" @if ($questionnaire->q49 == 2) checked @endif>
  <label class="custom-control-label" for="customRadio2">No</label>
  </div>
</div>

<div class="custom-control custom-radio form-group row">
  <label for="colFormLabelLg" class="col-sm-6 col-form-label col-form-label-lg">Do you have text content ready for your web site?</label>
  <div class="col-sm-6">
  <input type="radio" id="q50" class="custom-control-input" name="q50" value="1" @if ($questionnaire->q50 == 1) checked @endif>
  <label class="custom-control-label" for="customRadio1">Yes</label>

   <input type="radio" id="q50" class="custom-control-input" name="q50" value="2" @if ($questionnaire->q50 == 2) checked @endif>
  <label class="custom-control-label" for="customRadio2">No</label>
  </div>
</div>

<div class="custom-control custom-radio form-group row">
  <label for="colFormLabelLg" class="col-sm-6 col-form-label col-form-label-lg">Would you like us to help develop textual content for your web site?</label>
  <div class="col-sm-6">
  <input type="radio" id="q51" class="custom-control-input" name="q51" value="1" @if ($questionnaire->q51 == 1) checked @endif>
  <label class="custom-control-label" for="customRadio1">Yes</label>

   <input type="radio" id="q51" class="custom-control-input" name="q51" value="2" @if ($questionnaire->q51 == 2) checked @endif>
  <label class="custom-control-label" for="customRadio2">No</label>
  </div>
</div>

  <div class="form-group row">
    <label for="colFormLabelLg" class="col-sm-5 col-form-label col-form-label-lg">Do you have anything in mind for background images or colors?</label>
    <div class="col-sm-7">
      <input type="text" class="form-control form-control-lg" name="q52" value="{{$questionnaire->q52}}">
    </div>
  </div>

 <br>
<h1>E-Commerce</h1>
<br>

<div class="custom-control custom-radio form-group row">
  <label for="colFormLabelLg" class="col-sm-6 col-form-label col-form-label-lg">Are you going to be accepting credit cards?</label>
  <div class="col-sm-6">
  <input type="radio" id="q53" class="custom-control-input" name="q53" value="1" @if ($questionnaire->q53 == 1) checked @endif>
  <label class="custom-control-label" for="customRadio1">Yes</label>

   <input type="radio" id="q53" class="custom-control-input" name="q53" value="2" @if ($questionnaire->q53 == 2) checked @endif>
  <label class="custom-control-label" for="customRadio2">No</label>
  </div>
</div>

<div class="custom-control custom-radio form-group row">
  <label for="colFormLabelLg" class="col-sm-6 col-form-label col-form-label-lg">If so do you currently have a merchant account?</label>
  <div class="col-sm-6">
  <input type="radio" id="q54" class="custom-control-input" name="q54" value="1" @if ($questionnaire->q54 == 1) checked @endif>
  <label class="custom-control-label" for="customRadio1">Yes</label>

   <input type="radio" id="q54" class="custom-control-input" name="q54" value="2" @if ($questionnaire->q54 == 2) checked @endif>
  <label class="custom-control-label" for="customRadio2">No</label>
  </div>
</div>

  <div class="form-group row">
    <label for="colFormLabelLg" class="col-sm-5 col-form-label col-form-label-lg">List the name of your merchant account if you have one:</label>
    <div class="col-sm-7">
      <input type="text" class="form-control form-control-lg" name="q55" value="{{$questionnaire->q55}}">
    </div>
  </div>


  <div class="form-group row">
    <label for="colFormLabelLg" class="col-sm-5 col-form-label col-form-label-lg">How many products and/or services do you plan to sell?</label>
    <div class="col-sm-7">
      <input type="text" class="form-control form-control-lg" name="q56" value="{{$questionnaire->q56}}">
    </div>
  </div>

 <br>
<h1>Maintenance</h1>
<br>

<div class="custom-control custom-radio form-group row">
  <label for="colFormLabelLg" class="col-sm-6 col-form-label col-form-label-lg">Would you be interested in having us do updates and maintenance to your web site?</label>
  <div class="col-sm-6">
  <input type="radio" id="q57" class="custom-control-input" name="q57" value="1" @if ($questionnaire->q57 == 1) checked @endif>
  <label class="custom-control-label" for="customRadio1">Daily</label>

   <input type="radio" id="q57" class="custom-control-input" name="q57" value="2" @if ($questionnaire->q57 == 2) checked @endif>
  <label class="custom-control-label" for="customRadio2">Weekly</label>

    <input type="radio" id="q57" class="custom-control-input" name="q57" value="3" @if ($questionnaire->q57 == 3) checked @endif>
  <label class="custom-control-label" for="customRadio1">Monthly</label>

   <input type="radio" id="q57" class="custom-control-input" name="q57" value="4" @if ($questionnaire->q57 == 4) checked @endif>
  <label class="custom-control-label" for="customRadio2">Quarterly</label>

   <input type="radio" id="q57" class="custom-control-input" name="q57" value="5" @if ($questionnaire->q57 == 5) checked @endif>
  <label class="custom-control-label" for="customRadio2">Other</label>
  </div>
</div>

<div class="custom-control custom-radio form-group row">
  <label for="colFormLabelLg" class="col-sm-6 col-form-label col-form-label-lg">How often would you require updates?</label>
  <div class="col-sm-6">
  <input type="radio" id="q58" class="custom-control-input" name="q58" value="1" @if ($questionnaire->q58 == 1) checked @endif>
  <label class="custom-control-label" for="customRadio1">Yes</label>

   <input type="radio" id="q58" class="custom-control-input" name="q58" value="2" @if ($questionnaire->q58 == 2) checked @endif>
  <label class="custom-control-label" for="customRadio2">No</label>
  </div>
</div>

<div class="custom-control custom-radio form-group row">
  <label for="colFormLabelLg" class="col-sm-6 col-form-label col-form-label-lg">Do you require us to train your employee for updates?</label>
  <div class="col-sm-6">
  <input type="radio" id="q59" class="custom-control-input" name="q59" value="1" @if ($questionnaire->q59 == 1) checked @endif>
  <label class="custom-control-label" for="customRadio1">Yes</label>

   <input type="radio" id="q59" class="custom-control-input" name="q59" value="2" @if ($questionnaire->q59 == 2) checked @endif>
  <label class="custom-control-label" for="customRadio2">No</label>
  </div>
</div>

<div class="custom-control custom-radio form-group row">
  <label for="colFormLabelLg" class="col-sm-6 col-form-label col-form-label-lg">Would you be interested in assistance from us to promote your site through Social Media and Search Engines?</label>
  <div class="col-sm-6">
  <input type="radio" id="q60" class="custom-control-input" name="q60" value="1" @if ($questionnaire->q60 == 1) checked @endif>
  <label class="custom-control-label" for="customRadio1">Yes</label>

   <input type="radio" id="q60" class="custom-control-input" name="q60" value="2" @if ($questionnaire->q60 == 2) checked @endif>
  <label class="custom-control-label" for="customRadio2">No</label>
  </div>
</div>

  <div class="form-group row">
    <label for="colFormLabelLg" class="col-sm-5 col-form-label col-form-label-lg">What is your number one business problem? How could a new web site assist you in solving this problem?</label>
    <div class="col-sm-7">
      <input type="text" class="form-control form-control-lg" name="q61" value="{{$questionnaire->q61}}">
    </div>
  </div>

   <br>
<h1>ADDITIONAL NOTES/COMMENTS</h1>
<br>
  <div class="form-group row">
    <div class="col-sm-12">
      <textarea class="form-control" name="q62" id="q62" rows="5" cols="50" name="q62">{{$questionnaire->q62}}</textarea>
    </div>
  </div>

<br>
Please save the document for review. NOTE: you can save at any stage you wish and use this same URL whenever you wish to continue till you are satisfied. Highlight questions where you need further clarification or explanation. As much detail as possible is preferred, but anything you can provide initially will help guide us in defining the initial direction for your project. 
<div class="col-md-12 grid-contact-in">
<input type="hidden" name="questionnaire_unique_code" value="{{$questionnaire->questionnaire_unique_code}}">
<input type="submit" value="Save">
</div>
<div class="clearfix"> </div>
</form>

          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
  </div>
</div>
@endsection
