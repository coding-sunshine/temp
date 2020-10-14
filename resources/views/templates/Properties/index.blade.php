@extends('layouts.app',[
    'title' => 'projects',
    'navTab' => 'projects',
    'navTabSecondary' => 'home',
    'az_content' => 'az-content-dashboard-ten'
])

@section('content')
<div class="body">\
<div class="col-sm-12">
<a href="#" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-user" aria-hidden="true"> Add Developer
</i></a>&nbsp;&nbsp; 
<a href="/affiliates/create"><i class="fa fa-user" aria-hidden="true"> Add New Project

</i></a>&nbsp; &nbsp; 
<a href="/affiliates/create"><i class="fa fa-user" aria-hidden="true"> Held Properties Log

</i></a>&nbsp; &nbsp; 
<a href="/affiliates/create"><i class="fa fa-user" aria-hidden="true"> Reservations Log

</i></a>&nbsp; &nbsp; 
<a href="/affiliates/create"><i class="fa fa-user" aria-hidden="true"> Comms
</i></a>
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
  <div class="dropdown-menu dropdwn-cls" aria-labelledby="dropdownMenuButton">
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
  <div class="dropdown-menu dropdwn-cls" aria-labelledby="dropdownMenuButton">
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
  <div class="dropdown-menu dropdwn-cls" aria-labelledby="dropdownMenuButton">
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
  <div class="dropdown-menu dropdwn-cls" aria-labelledby="dropdownMenuButton">
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
  <div class="dropdown-menu dropdwn-cls" aria-labelledby="dropdownMenuButton">
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
                <div class="dropdown-menu dropdwn-cls" aria-labelledby="dropdownMenuButton">
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
                <div class="dropdown-menu dropdwn-cls" aria-labelledby="dropdownMenuButton">
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
                <div class="dropdown-menu dropdwn-cls" aria-labelledby="dropdownMenuButton">
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

{{-- start add developer--}}  
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">+New Developer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <!-- <form id="myForm" name="myForm" class="form-horizontal" novalidate=""> -->
<form action="{{ url('/projects/store') }}" class="form-container" method="post" enctype="multipart/form-data">
      @csrf
          
          <div class="row">

          <div class="col-md-12">
            <div class="heading-info-proty">MAIN INFORMATION</div>
          </div>

          <div class="form-group col-md-6">
           <input type="text" class="form-control" placeholder="First name" id="first_name" name="first_name" required="">
          </div>
          <div class="form-group col-md-6">
            <input type="text" class="form-control" placeholder="Last name"id="last_name" name="last_name" required="">
          </div>

          <div class="form-group col-md-6">
          <input type="text" class="form-control"placeholder="Job TiTle"id="title" name="title" required="">
          </div>

          <div class="form-group col-md-6">
          <input type="text" class="form-control"placeholder="Company/Business"id="company" name="company">
          </div>
       
          </div>

           <div class="row">
        
          <div class="col-md-12">
            <div class="heading-info-proty">CONTACT INFORMATION </div>
          </div>
           <div class="form-group col-md-6">
           <input type="text" class="form-control" placeholder="Email Address" id="email" name="email" required="">
          </div>
          <div class="form-group col-md-6">
            <input type="text" class="form-control" placeholder="Altenactive Email" id="secondary_email" name="secondary_email" required="">
          </div>

          <div class="form-group col-md-12">
          <input type="text" class="form-control"placeholder="Phone" id="office_phone" name="office_phone" required="">
          </div>

          <div class="form-group col-md-6">
          <input type="text" class="form-control"placeholder="mobile"id="mobile_phone" name="mobile_phone" required="">
          </div>
           <div class="form-group col-md-6">
          <input type="text" class="form-control"placeholder="website"id="website" name="website">
          </div>
       
        </div>
         <div class="row">
          <div class="col-md-12">
            <div class="heading-info-proty">ADDRESS</div>
          </div>
           <div class="form-group col-md-6">
           <input type="text" class="form-control" placeholder="street" id="address_street" name="address_street">
          </div>
          <div class="form-group col-md-6">
            <input type="text" class="form-control" placeholder="address_city"id="address_city" name="address_city">
          </div>

          <div class="form-group col-md-6">
            <select  class="form-control" placeholder="State"id="address_state" name="address_state">
            <option>Select</option>
            <option>inadia</option>
            <option>inadia</option>
            <option>inadia</option>
            </select>
          </div>

          <div class="form-group col-md-6">
          <input type="text" class="form-control"placeholder="postcode"id="address_postal_code" name="address_postal_code">
          </div>

          <div class="form-group col-md-12">
          <input type="file" class="form-control"placeholder="postcode"id="profile_image" name="profile_image">
          </div>

        </div>
    
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="Submit" class="btn btn-secondary"  value="Sumbit">
       <!--  <button type="Sumbit" class="btn btn-primary">Sumbit</button> -->
      </div>
    </form>
    </div>
  </div>
</div>


               

{{-- end add developer--}}  

<div class="table-responsive table-inr col-lg-12 col-md-12 col-sm-12">
{!! $dataTable->table(['width' => '100%']) !!}
</div>


</div>
@push('scripts')
    {!! $dataTable->scripts() !!}
@endpush
<!-- Modal -->
<!-- Button trigger modal -->
             
<div class="modal right fade add-frm1" id="add-new-project" style="display: none;" aria-hidden="true">
  <div class="modal-dialog affiliate-Add-form">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal"><i class="fas fa-arrow-left"></i></button>
       <h4 class="modal-title">ADD NEW PROJECT</h4>
       
      </div>

      <div class="row">
        <div class="col-md-12">
                <div class="buttn-list2">
                <ul>
                   <li><a href="#"><i class="fas fa-user"></i> Andrew Macdonald</a></li>
                  <li><a href="#"><i class="fas fa-tasks"></i> Task <span>0</span></a> </li>
                  <li><a href="#"><i class="fas fa-paper-plane"></i> Send Message</a></li>
                  <li><a href="#"><i class="fas fa-tasks"></i> Projects <span>0</span></a></li>
                  <li><a href="#"><i class="fas fa-info"></i> Extra Information</a></li>
                </ul>
              </div>
              </div>
      </div>

      <!-- Modal body -->
      <div class="modal-body">

     <div class="accordion accordion-property-bx" id="accordionExample2">


       <div class="card">
    <div class="card-header" id="accountSelectheading">
      <h2 class="mb-0">
           <div class="heading-inr-popup" data-toggle="collapse" data-target="#account-select" aria-expanded="true" aria-controls="account-select">Account Select <i class="fa fa-angle-down"></i></div>
      </h2>
    </div>

    <div id="account-select" class="collapse show" aria-labelledby="accountSelectheading" data-parent="#accordionExample2">
      <div class="card-body">
        
        <div class="row from-projectDtls">
           <div class="col-md-12">
           <div class="form-list-innr">
           <!-- value="" -->
           <?php //$getusertypedetails = App::make("app\User")->getUserListArray('D');
          
           
            // \Helpers::form_dropdown('user_ID', $getusertypedetails, null, 'id="fgen_user_ID" class="form-control chosen-select"'); 
           ?>
           <input type="text" class="form-control"  placeholder="D | - NEW - Andrew Macdonald ()" id="" name="" required="">
           </div>
           </div>

        </div>

      </div>
    </div>
  </div>


     <div class="card">
    <div class="card-header" id="projectDetail-heading">
      <h2 class="mb-0">
       
          <div class="heading-inr-popup collapsed" data-toggle="collapse" data-target="#project-detail" aria-expanded="false" aria-controls="project-detail">Projet (Estate) Details</div>
         
    
      </h2>
    </div>
    <div id="project-detail" class="collapse" aria-labelledby="projectDetail-heading" data-parent="#accordionExample2">
      <div class="card-body">
       
        <div class="row from-projectDtls">

           <div class="col-md-6">
           <div class="form-list-innr">
           <input type="text" class="form-control" placeholder="O.T.P" id="" name="" required="">
           </div>
           </div>

            <div class="col-md-6">
           <div class="form-list-innr">
           <input type="text" class="form-control" placeholder="House and Land" id="" name="" required="">
           </div>
           </div>

             <div class="col-md-6">
           <div class="form-list-innr">
           <input type="text" class="form-control" placeholder="Project Estate *" id="" name="" required="">
           </div>
           </div>

            <div class="col-md-6">
           <div class="form-list-innr">
           <input type="text" class="form-control" placeholder="Suburb *" id="" name="" required="">
           </div>
           </div>


            <div class="col-md-6">
           <div class="form-list-innr">
           <input type="text" class="form-control" placeholder="City *" id="" name="" required="">
           </div>
           </div>


            <div class="col-md-6">
           <div class="form-list-innr">
           <input type="text" class="form-control" placeholder="Post Code *" id="" name="" required="">
           </div>
           </div>


            <div class="col-md-12">
           <div class="form-list-innr">
           <input type="text" class="form-control" placeholder="State" id="" name="" required="">
           </div>
           </div>


            <div class="col-md-6">
           <div class="form-list-innr">
            <div class="map-icnBx"><i class="fas fa-map-marked-alt"></i></div>
            <b><a href="" class="link-style">Check Address with Google Maps</a></b>
            <p>Test the address — checking the location; Suburb and State are both accurate.</p>
          
           </div>
           </div>


            <div class="col-md-6">
           <div class="form-list-innr">
            <span>Latitude</span>
           <input type="text" class="form-control" placeholder="" id="" name="" required="">
           </div>
           </div>


                <div class="col-md-6">
           <div class="form-list-innr">
             <div class="map-icnBx"><i class="fas fa-map-marked-alt"></i></div>
            <b><a href="" class="link-style">Get Lat/Lng</a></b>
            <p>Get the Latitude and Longitude by Suburb, Postcode and State.</p>
          
           </div>
           </div>


            <div class="col-md-6">
           <div class="form-list-innr">
            <span>Longitude</span>
           <input type="text" class="form-control" placeholder="" id="" name="" required="">
           </div>
           </div>



        </div>

      </div>
    </div>
  </div>



       <div class="card">
    <div class="card-header" id="returnOfInvestment-heading">
      <h2 class="mb-0">
           <div class="heading-inr-popup" data-toggle="collapse" data-target="#returnOfInvestment" aria-expanded="false" aria-controls="returnOfInvestment">Return of Investment</div>
      </h2>
    </div>

    <div id="returnOfInvestment" class="collapse" aria-labelledby="returnOfInvestment-heading" data-parent="#accordionExample2">
      <div class="card-body">
      <div class="row from-projectDtls">
           <div class="col-md-6">
           <div class="form-list-innr">
            <span>Rental Yield % Average</span>
           <input type="text" class="form-control" placeholder="Rental Yield % Average" id="" name="" required="">
           </div>
           </div>

            <div class="col-md-6">
           <div class="form-list-innr">
            <span>Rent $ Per Week ( Low/Min )</span>
           <input type="text" class="form-control" placeholder="" id="" name="" required="">
           </div>
           </div>

            <div class="col-md-6">
           <div class="form-list-innr">
            <span>Rent $ Per Week ( High/Max )</span>
           <input type="text" class="form-control" placeholder="" id="" name="" required="">
           </div>
           </div>

           <div class="col-md-6">
           <div class="form-list-innr">
            <span>Score</span>
           <input type="text" class="form-control" placeholder="Score (Decimal value to show historical growth %)" id="" name="" required="">
           </div>
           </div>

        </div>
      </div>
    </div>
  </div>


        <div class="card">
    <div class="card-header" id="expenses-heading">
      <h2 class="mb-0">
           <div class="heading-inr-popup" data-toggle="collapse" data-target="#expenses" aria-expanded="false" aria-controls="expenses">Expenses</div>
      </h2>
    </div>

    <div id="expenses" class="collapse" aria-labelledby="expenses-heading" data-parent="#accordionExample2">
      <div class="card-body">

        <div class="row from-projectDtls">

           <div class="col-md-6">
           <div class="form-list-innr">
            <span>Council Land Rates - Rates Fees (Lowest)</span>
           <input type="text" class="form-control" placeholder="" id="" name="" required="">
           </div>
           </div>

            <div class="col-md-6">
           <div class="form-list-innr">
            <span>Council Land Rates - Rates Fees (Highest)</span>
           <input type="text" class="form-control" placeholder="" id="" name="" required="">
           </div>
           </div>

            <div class="col-md-6">
           <div class="form-list-innr">
            <span>Body Corporate - Fees (Lowest)</span>
           <input type="text" class="form-control" placeholder="" id="" name="" required="">
           </div>
           </div>

            <div class="col-md-6">
           <div class="form-list-innr">
            <span>Body Corporate - Fees (Highest)</span>
           <input type="text" class="form-control" placeholder="" id="" name="" required="">
           </div>
           </div>

         </div>
      </div>
    </div>
  </div>


    <div class="card">
    <div class="card-header" id="buildTime-heading">
      <h2 class="mb-0">
           <div class="heading-inr-popup" data-toggle="collapse" data-target="#buildTime" aria-expanded="false" aria-controls="buildTime">Build Time - Frame</div>
      </h2>
    </div>

    <div id="buildTime" class="collapse" aria-labelledby="buildTime-heading" data-parent="#accordionExample2">
      <div class="card-body">
       <div class="row from-projectDtls">

           <div class="col-md-6">
           <div class="form-list-innr">
            <span>Build Time</span>
           <input type="text" class="form-control" placeholder="" id="" name="" required="">
           </div>
           </div>

            <div class="col-md-6">
           <div class="form-list-innr">
            <span>Build Date Start</span>
           <input type="text" class="form-control" placeholder="" id="" name="" required="">
           </div>
           </div>


              <div class="col-md-6">
           <div class="form-list-innr">
            <span>Land Registration</span>
           <input type="text" class="form-control" placeholder="" id="" name="" required="">
           </div>
           </div>

            <div class="col-md-6">
           <div class="form-list-innr">
            <span>Build Date Start</span>
           <input type="text" class="form-control" placeholder="" id="" name="" required="">
           </div>
           </div>

         </div>
      </div>
    </div>
  </div>


      <div class="card">
    <div class="card-header" id="commissions-heading">
      <h2 class="mb-0">
           <div class="heading-inr-popup" data-toggle="collapse" data-target="#commissions" aria-expanded="false" aria-controls="commissions">Commissions</div>
      </h2>
    </div>

    <div id="commissions" class="collapse" aria-labelledby="commissions-heading" data-parent="#accordionExample2">
      <div class="card-body">
         <div class="row from-projectDtls">

           <div class="col-md-12">
           <div class="form-list-innr">
            <textarea class="form-control enterYourBox"></textarea>
            <a href="#">Edit Note</a>
           </div>
           </div>

           <div class="col-md-6">
           <div class="form-list-innr">
            <span>$ Commissions IN</span>
           <input type="text" class="form-control" placeholder="Commissions that We Receive (IN) inc.GST" id="" name="" required="">
           </div>
           </div>

           <div class="col-md-6">
           <div class="form-list-innr">
            <span>$ Commissions OUT (inc.GST)</span>
           <input type="text" class="form-control" placeholder="Commissions that We Pay (OUT) inc.GST" id="" name="" required="">
           </div>
           </div>

           <div class="col-md-6">
           <div class="form-list-innr">
            <span>% Commissions IN</span>
           <input type="text" class="form-control" placeholder="Commissions that We Receive (IN) %" id="" name="" required="">
           </div>
           </div>

           <div class="col-md-6">
           <div class="form-list-innr">
            <span>% Commissions OUT (inc.GST)</span>
           <input type="text" class="form-control" placeholder="Commissions that We Pay (OUT) inc.GST" id="" name="" required="">
           </div>
           </div>

              <div class="col-md-12">
           <div class="form-list-innr">
            <textarea class="form-control enterYourBox" placeholder="Special Notes"></textarea>
           
           <button class="button-org">Clear</button>
           </div>
           </div>

         </div>
      </div>
    </div>
  </div>




    <div class="card">
    <div class="card-header" id="propertyTextual-heading">
      <h2 class="mb-0">
           <div class="heading-inr-popup" data-toggle="collapse" data-target="#property-Textual" aria-expanded="false" aria-controls="property-Textual">Property (Estate) Textual Content</div>
      </h2>
    </div>

    <div id="property-Textual" class="collapse" aria-labelledby="propertyTextual-heading" data-parent="#accordionExample2">
      <div class="card-body">
        <div class="row from-projectDtls">
       <div class="col-md-12">
           <div class="form-list-innr">
            <span>Title Text *</span>
           <input type="text" class="form-control" placeholder="" id="" name="" required="">
           </div>
           </div>

           <div class="col-md-12">
           <div class="form-list-innr">
            <span>Introduction Text</span>
           <textarea class="form-control enterYourBox" placeholder=""></textarea>
            <button class="button-org mar-rit20">Submit</button>
             <button class="button-org mar-rit20">Preview</button>
              <button class="button-org">Clear</button>
           </div>
           </div>

         </div>
      </div>
    </div>
  </div>






      <div class="card">
    <div class="card-header" id="PropertyOptions-heading">
      <h2 class="mb-0">
           <div class="heading-inr-popup" data-toggle="collapse" data-target="#PropertyOptions" aria-expanded="false" aria-controls="PropertyOptions">Property Options <span class="arw-icn"><i class="fas fa-angle-down rotate-icon"></i></span></div>
      </h2>
    </div>

    <div id="PropertyOptions" class="collapse" aria-labelledby="PropertyOptions-heading" data-parent="#accordionExample2">
      <div class="card-body">
        
        <input type="checkbox" data-toggle="toggle" data-on="Enabled" data-off="Disabled">
<input type="checkbox" id="toggle-two">


      </div>
    </div>
  </div>


   <div class="card">
    <div class="card-header" id="trustAccount-heading">
      <h2 class="mb-0">
           <div class="heading-inr-popup" data-toggle="collapse" data-target="#trustAccount" aria-expanded="false" aria-controls="trustAccount">Trust Account Details <span class="arw-icn"><i class="fas fa-angle-down rotate-icon"></i></span></div>
      </h2>
    </div>

    <div id="trustAccount" class="collapse" aria-labelledby="trustAccount-heading" data-parent="#accordionExample2">
      <div class="card-body">
       <div class="row from-projectDtls">
       <div class="col-md-6">
           <div class="form-list-innr">
            <span>Account Name</span>
           <input type="text" class="form-control" placeholder="" id="" name="" required="">
           </div>
           </div>

              <div class="col-md-6">
           <div class="form-list-innr">
            <span>Bank</span>
           <input type="text" class="form-control" placeholder="" id="" name="" required="">
           </div>
           </div>

              <div class="col-md-6">
           <div class="form-list-innr">
            <span>BSB</span>
           <input type="text" class="form-control" placeholder="" id="" name="" required="">
           </div>
           </div>

              <div class="col-md-6">
           <div class="form-list-innr">
            <span>Account No</span>
           <input type="text" class="form-control" placeholder="" id="" name="" required="">
           </div>
           </div>
         </div>
      </div>
    </div>
  </div>






</div>

      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
       <p>First Entered By: Geanelle Labios - Property In A Box (P) | On: 4th Sep, 2020, 05:07 am</p>
       <div class="clearfix"></div>
      <p>Last Modified By: ? | On: 4th Sep, 2020, 03:09 pm</p>
        <!-- <button type="button" class="button-org">Submit</button> -->
      </div>

    </div>
  </div>
</div>


@endsection

<script src="/js/jquery.min.js"></script>


<script type="text/javascript">
function showPropertyDetails(id){
  $('#add-new-project').modal("show");
}


 function editshow(id,field){
  $("#"+field+id).show();
  $("#"+field+"_"+id).hide();
  $("#span"+field+id).hide();
}
 function savechange(id,field){
  $("#"+field+id).hide();
  $("#span"+field+id).show();
  var name= $("#"+field+id).val();
  $("#span"+field+id).text(name);
  $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
  $.ajax({
    type: 'POST',
    url: "{{url('projects/Update')}}",
   
   data: { value:name, id:id, fieldname:field },
   success:function(response){
    console.log('Save successfully');

   }
  });
}
 function Changestatus(id,name)
{ 
  var value =$("#status_ID"+id).val();
  var text =$("#status_ID"+id+" option:selected").text();
  $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
  $.ajax({
    type: 'POST',
    url: "{{url('projects/Update')}}",
   
   data: { value:value, id:id, fieldname:name },
   success:function(response){
    console.log('Save successfully'); 
    $("#"+name+id).hide();
    $("#span"+name+id).text(text);
    $("#span"+name+id).show();

   }
  });
   
}
function updateUserFav(developerId,loginId)
{ 
  
  $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
  $.ajax({
    type: 'POST',
    url: "{{url('projects/addfavourite')}}",
   
   data: { developerId:developerId, loginId:loginId },
   success:function(response){
    console.log(response); 
    if(response == 'inactive'){
      $('#fav_'+developerId).removeClass('active');
    }else if(response == 'active'){
      $('#fav_'+developerId).addClass('active');
    }
    // $("#"+name+id).hide();
    // $("#span"+name+id).text(text);
    // $("#span"+name+id).show();

   }
  });
   
}
</script>
<script src="/js/jquery.min.js"></script>
<script type="text/javascript">
function showedit(id){
  $("#"+id).show();
}
function hideedit(id){
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
//     url: "{{url('affiliates/Update')}}",
   
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
var email =$("#email"+id).text();
var mobile_phone =$("#mobile_phone"+id).text();
var office_phone =$("#office_phone"+id).text();
var profile_image =$("#profile_image"+id).text();

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
<!-- <script type="text/javascript">
  $(document).ready(function(){
  $("#btn-save").click(function (e) {
     $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
  $.ajax({
    type: 'POST',
    url: "{{url('/projects/store')}}",
   
   data: { first_name:first_name},
   success:function(response){
    console.log('Save successfully'); 
   }
  });
});
  });
</script> -->





