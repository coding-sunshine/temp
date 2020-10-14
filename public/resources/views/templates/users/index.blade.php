@extends('layouts.app',[
    'title' => 'User',
    'navTab' => 'User',
    'navTabSecondary' => 'home',
    'az_content' => 'az-content-dashboard-ten'
])
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
@section('content')

<div class="body">
<div class="col-sm-12">

<a href="/users/create"><i class="fa fa-user" aria-hidden="true"> +Add User</i></a>
<div class="container-fluid clien-sec">



<div class="page-header">
                <nav>
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">Sales Dashboard</li>
                  </ol>
                </nav>
  </div>
    


<div class="row top-filter">
  
  <div class="col-md-2">
    <div class="dropdown filter-inr">
  <button class="forms-dropdown dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    State(All)
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div>

  </div>

   <div class="col-md-2">
    <div class="dropdown filter-inr">
  <button class="forms-dropdown dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    BDM(All)
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div>

  </div>

    <div class="col-md-2">
    <div class="dropdown filter-inr">
  <button class="forms-dropdown dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Affiliate(All)
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div>

  </div>


     <div class="col-md-2">
    <div class="dropdown filter-inr">
  <button class="forms-dropdown dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   Sales Agent(All)
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div>

  </div>

     <div class="col-md-2">
    <div class="dropdown filter-inr">
  <button class="forms-dropdown dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   Supper Group(All)
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div>

  </div>

     <div class="col-md-2">
    <div class="dropdown filter-inr">
  <button class="forms-dropdown dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  Developer(All)
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div>

  </div>


</div>



    <div class="clearfix"></div>

   <div class="col-md-12">
                  <button class="button-org mar-rit20">Apply</button>
                  <button class="button-org">Clear</button>
                </div>

<hr>
<div class="row top-filter">
                <div class="col-md-2">
                  <span>Customise Columns</span><br>
                    <div class="dropdown">
                <button class="forms-dropdown dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 State(All)
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </div>
                </div>

                  <div class="col-md-2">
                  <span>25 Total</span><br>
                    <div class="dropdown">
                <button class="forms-dropdown dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 State(All)
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </div>
                </div>

                   <div class="col-md-2">
                  <span>Item Par Page</span><br>
                    <div class="dropdown">
                <button class="forms-dropdown dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 State(All)
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </div>
                </div>

                  <div class="col-md-3 offset-md-3">
                  <span></span><br>
                        <div id="custom-search-input">
                            <div class="input-group">
                                <input type="text" class="forms-dropdown search-query form-control" placeholder="Search from the list">
                                <span class="input-group-btn">
                                    <button class="search-btn" type="button">
                                    </button>
                                </span>
                            </div>
                        </div>
               
                </div>

              </div>
  <div class="row section-top-actions">
    <div class="col-md-6">
      <div class="actions-top">
        <ul>
          <li>
            <label class="check-box">Select All<input type="checkbox" checked="checked"><span class="checkmark"></span></label>
          </li>
          <li><a href="#"><span><img src="/image/export-icon.png"></span>Export As CSV</a></li>
           <li><a href="#"><span><img src="/image/add-new.png"></span>Add New</a></li>
        </ul>
      </div>
    </div>
<div class="form-popup" id="myForm">
  <form action="{{ url('/users/updateedit') }}" class="form-container" method="post">
    @csrf
   <center><img src='/profileimage/1c791561be984c634024342af3a39724.png' alt=''><center><br><br>
    <label for="email"><b>first_name</b></label>
    <input type="text" placeholder="first_name" id="first_name" name="first_name" value="">
     <input type="hidden" placeholder="first_name" id="id" name="id" value="">
    <label for="email"><b>last_name</b></label>
    <input type="text" placeholder="last_name" id="last_name" name="last_name"  value="">
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="email" id="email" name="email" value="" >
    <label for="email"><b>mobile_phone</b></label>
    <input type="text" placeholder="email" id="mobile_phone"name="mobile_phone" value="" >
    <label for="email"><b>office_phone</b></label>
    <input type="text" placeholder="email" id="office_phone"name="office_phone" value="" >
    <!-- <label for="email"><b>image</b></label>
    <input type="file" placeholder="email"  id="profile_image" name="profile_image" value="" > --><br><br>
    <button type="" class="btn">submit</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
    </form>
</div>
<div class="table-responsive table-inr col-lg-12 col-md-12 col-sm-12">
{!! $dataTable->table(['width' => '100%']) !!}
</div>

</div>

@endsection
<script src="/js/jquery.min.js"></script>
<script type="text/javascript">
function editshow(id,name){
    $("."+id+"_div").hide();
    $("."+id+"_input").show();
}
 function savechange(filed,filedname,id){  
    var name = $("#"+filed).val();
// alert(name);
  $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
  $.ajax({
    type: 'POST',
    url: "{{url('users/Update')}}",
   
   data: { value:name, id:id, fieldname:filedname },
   success:function(response){
     console.log('Save successfully'); 
     
     // $("."+filed+"_div").load('affiliates .'+filed+'_div');
     $("."+filed+"_input").hide();
     $("."+filed+"_div").text(name);
    $("."+filed+"_div").show();

    }
  });
   
}
 function getval(id,name)
{ 
  var value =$("#status_"+id).val();
  $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
  $.ajax({
    type: 'POST',
    url: "{{url('users/updatestatus')}}",
   
   data: { value:value, id:id, fieldname:name },
   success:function(response){
    console.log('Save successfully'); 
   }
  });
   
}
</script>
<script src="/js/jquery.min.js"></script>
<script type="text/javascript">
  function showedit(id,name){
  $("#"+id).show();   
}
function hideedit(id,name){
  $("#"+id).hide();    
}
   
// function EditName(id,name){

// var value = $("#"+name+"_"+id).text();
 
//   $.ajaxSetup({
//   headers: {
//     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//   }
// });
//   $.ajax({
//     type: 'POST',
//     url: "{{url('users/Update')}}",
   
//    data: { value:value, id:id, fieldname:name },
//    success:function(response){
//     console.log('Save successfully'); 
//    }
//   });
// }
</script>
<script>
function openForm(id) {
var first_name =$("#first_name"+id).text();
var last_name =$("#last_name"+id).text();
var email=$("#email"+id).text();
var mobile_phone=$("#mobile_phone"+id).text();
var office_phone=$("#office_phone"+id).text();
var profile_image=$("#profile_image"+id).text();

document.getElementById("myForm").style.display = "block";
  $("#id").val(id);
  $("#first_name").val(first_name);
  $("#last_name").val(last_name);
  $("#email").val(email);
  $("#mobile_phone").val(mobile_phone);
  $("#office_phone").val(office_phone);
  $("#profile_image").val(profile_image);

}
function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
@push('scripts')
    {!! $dataTable->scripts() !!}
@endpush



