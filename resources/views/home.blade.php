@extends('layouts.master')

@section('content')
<div class="container">
           
<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
               
<a href="{{ url('/generate_code') }}"><button type="button" class="btn btn-primary btn-sm btn-flat" onclick="event.preventDefault();
document.getElementById('send_id').submit();"><span class="btn-label"><i class="fa fa-plus"></i></span> Generate New Questionnaire Unique code</button></a> 
<form id="send_id" action="{{ url('/generate_code') }}" method="get" style="display: none;">
<input type="hidden" name="id" value="1">
{{ csrf_field() }}
</form>
</div>
            <!-- /.box-header -->
            <div class="box-body">
             <table id="example1" class="table table-borderless table-striped">
                <thead>
               <tr style="background-color: #a0bdf2">
                  <th class="exportable">S/No</th>
                  <th class="exportable">Questionnaire Unique Code</th>
                  <th class="exportable">Name</th>
                  <th class="exportable">Phone</th>
                  <th class="exportable">Email</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                   @foreach ($questionnaires as $a => $questionnaire)  
                <tr>
                  <td>{{$a + 1}}</td>
                  <td><a href="{{ url('/web_questionnaires/'.$questionnaire->questionnaire_unique_code) }}" target="_blank">{{$questionnaire->questionnaire_unique_code}}</a></td>
                  <td>{{$questionnaire->your_name}}</td>
                  <td>{{$questionnaire->phone}}</td>
                  <td>{{$questionnaire->email}}</td>
                  <td>
                  
                 <a href="{{ url('/web_questionnaires/'.$questionnaire->questionnaire_unique_code) }}" target="_blank"><button type="button" class="btn btn-warning btn-sm btn-flat"><span class="btn-label"><i class="fa fa-info-circle"></i></span> Info</button></a>

                 <button type="button" class="btn btn-danger btn-sm btn-flat" onclick="deleteq(this.id)" id="{{$questionnaire->website_design_questionnaire_id}}"><span class="btn-label"><i class="fa fa-trash"></i></span> Delete</button>
                  </td>
                </tr>
               
                @endforeach
                </tbody>
              
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
  </div>
</div>
<input type="hidden" name="hidden_leave_delete" id="hidden_leave_delete" value="{{url('deleteq')}}">
@endsection


  <script>

    function deleteq(id)
    {
      var conf = confirm("Are you sure want to delete?");
      if(conf){
        var delete_url = $("#hidden_leave_delete").val();
        $.ajax({
          url: delete_url,
          type:"POST", 
          data: {"id":id,_token: "{{ csrf_token() }}"}, 
          success: function(response){
            alert(response);
            location.reload(); 

          }
        });
      }
      else{
        return false;
      }
    }


</script>