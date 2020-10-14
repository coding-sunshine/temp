
@extends('layouts.app',[
    'title' => 'Afiliates',
    'navTab' => 'afiliate',
    'navTabSecondary' => 'home',
    'az_content' => 'az-content-dashboard-ten'
])

@section('content')
<div class="body">\
<div class="col-sm-12">
<a href="/affiliates/create"><i class="fa fa-user" aria-hidden="true"> +Add Affiliate</i></a>
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
 
<!-- Modal -->
               
<div class="modal right fade add-frm1" id="myModalForm1" style="display: none;" aria-hidden="true">
  <div class="modal-dialog affiliate-Add-form">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal"><i class="fas fa-arrow-left"></i></button>
       <h4 class="modal-title">Add New</h4>
       
      </div>


      <!-- Modal body -->
      <div class="modal-body">

     <div class="accordion accordion-property-bx" id="accordionExample">


       <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
           <div class="heading-inr-popup" data-toggle="collapse" data-target="#collapsezero" aria-expanded="true" aria-controls="collapsezero">Overview</div>
      </h2>
    </div>

    <div id="collapsezero" class="collapse show" aria-labelledby="headingzero" data-parent="#accordionExample">
      <div class="card-body overview-bx">
        <div class="row">
     <div class="col-md-4">
               <div class="overview-left">
                 <div class="img-overivew">
                  <img  id='avatar'>
                 </div>

                 <!-- <div class="socila-icn-bx">
                   <ul>
                     <li><a href="#"><img src="image/fb-1.png"></a></li>
                     <li><a href="#"><img src="image/linkedin-1.png"></a></li>
                     <li><a href="#"><img src="image/pintrest-1.png"></a></li>
                     <li><a href="#"><img src="image/twitter-1.png"></a></li>
                     <li><a href="#"><img src="image/youtube-1.png"></a></li>
                   </ul>
                 </div> -->
                  <div class="contact-info-bx">
                   <ul>
                     <li>
                       <b>Mobile :</b>
                       <span id="mobile"></span>
                        <span id="mobile2"></span>
                     </li>

                      <li>
                       <b>Phone :</b>
                       <span id="phone"></span>
                       <span id="phone2"></span>
                       <span id="phone2_ext"></span>
                       <span id="phone_work"></span>
                       <span id="phone_work_ext"></span>
                       </li>
                        <li>
                       <b>Email :</b>
                       <span id="email"></span>
                        <span id="email2"></span>
                     </li>
                   </ul>

                 </div>



               </div>
              </div>

              <div class="col-md-8">
                <div class="user-info-bx">
                  <h4 id="firstname"></h4>
                     <div class="contact-info-bx">
                   <ul>
                     <li>
                       <b>Partner :</b>
                       <span id="partner"></span>
                     </li>

                      <li>
                       <b>Address :</b>
                       <span class="street"></span>
                     </li>

                      <li>
                       <b>Company :</b>
                       <span id="company"></span>
                     </li>

                      <li>
                       <b>Location : </b>
                       <span></span>
                     </li>

                      <li>
                       <b>Referred by :</b>
                       <span id="referred_by"></span>
                     </li>

                     <li>
                       <b>Work :</b>
                       <span>Boronia 3155</span>
                     </li>

                     <li>
                       <b>Fax :</b>
                       <span id="fax"></span>
                     </li>

                     <li>
                       <b>Phone Between :</b>
                       <span id="phone"></span>
                     </li>

                   </ul>

                 </div>
                </div>
              </div>
    </div>
      </div>
    </div>
  </div>



  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
           <div class="heading-inr-popup" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Relationship</div>
      </h2>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <div class="row">
     <div class="col-md-12">
                <div class="relation-bx">
                
                  <div class="relation-inr">
                    <div class="relation-list table-clr">
                      <p><b>Affiliate : </b><span>Property in a Box (Property in a Box)</span></p>
                      <p><b>PIF : </b><span>Property in a Box (Property in a Box)</span></p>
                      <p><b>BDM : </b><span>N/A</span></p>
                      <p><b>Supper Group : </b><span>N/A</span></p>
                      <p><b>Event Coordinator : </b><span>N/A</span></p>
                      <p><b>Insurance : </b><span>N/A</span></p>
                      <p><b>Broker : </b><span>N/A</span></p>
                    </div>
                  </div>
                </div>
              </div>
    </div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
          <div class="heading-inr-popup collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Communications</div>
        
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        

        <ul class="nav nav-tabs tab-property" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="summary-tab" data-toggle="tab" href="#summary" role="tab" aria-controls="summary" aria-selected="true">Summary</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="note-tab" data-toggle="tab" href="#notes" role="tab" aria-controls="profile" aria-selected="false">Notes</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Registrations</a>
  </li>

    <li class="nav-item">
    <a class="nav-link" id="email-tab" data-toggle="tab" href="#email" role="tab" aria-controls="email" aria-selected="false">Email</a>
  </li>


</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="summary" role="tabpanel" aria-labelledby="summary-tab">
    
<div class="col-md-12">
                <textarea class="form-control enterYourBox" placeholder="Enter Your Summary ..."></textarea>
              </div>

  </div>
  <div class="tab-pane fade" id="notes" role="tabpanel" aria-labelledby="note-tab">
     
     <div class="col-md-12">
                <div class="communication-bx">
                  <div class="talk-bx">
                    <div class="talk-1">
                      <div class="user-img-1"><img src="image/user.png" alt=""></div>
                      <div class="chat-bx-sec">
                        <div class="float-l">Julie</div>
                        <div class="float-r color-org-1">Goi Olsen P2</div>
                        <div class="clear"></div>
                      <div class="chat-one1">
                        <div class="inr-more-icn"><a href="javascript:;"><img src="image/iocn-more.png" alt=""></a></div>
                        Hi Brenden &amp; Joey<br>
                        My apologies we haven't received this contract back as yet.<br>
                        My apologies we haven't received this contract back as yet.
                      </div>
                       <div class="float-r font-12">15 May 2018, .3:58pm - <b>By:</b> Joey Sta. Maria</div>
                      </div>
                    </div>

                       <div class="talk-1 talk-right">
                      <div class="user-img-1 img-right"><img src="image/user.png" alt=""></div>
                      <div class="chat-bx-sec">
                        <div class="float-l color-org-1">Goi Olsen P2</div>
                        <div class="clear"></div>
                      <div class="chat-one1">
                        <div class="inr-more-icn"><a href="javascript:;"><img src="image/iocn-more.png" alt=""></a></div>
                        Hi Brenden &amp; Joey<br>
                        My apologies we haven't received this contract back as yet.<br>
                        My apologies we haven't received this contract back as yet.
                      </div>
                       <div class="float-r font-12">15 May 2018, .3:58pm - <b>By:</b> Joey Sta. Maria</div>
                      </div>
                    </div>

                    <div class="clear"></div>
                  </div>
                  
           <div class="chat-bt">
                    <div class="msg-bx">
                      <textarea class="form-control" placeholder="Type Here ..."></textarea>
                      <div class="float-l">
                        Display Limit 20
                      </div>
                       <div class="float-r color-org">
                       View All
                      </div>
                      <div class="clear"></div>
                    </div>
                    <div class="msg-btn">
                      <a href="#" class="send-btn">
                        <i class="far fa-paper-plane"></i>
                      </a>
                      <a href="#" class="attach-icn">
                        <i class="fas fa-paperclip"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div> 

  </div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
        
        <div class="relation-bx">
      <div class="relation-inr">
    <div class="relation-list table-clr">
                      <p><b>Name : </b><span>Still Testing???</span></p>
                      <p><b>Date : </b><span>23 Jun 2015</span></p>
                      <p><b>Time : </b><span>07:54 pm</span></p>
                      <p><b>By : </b><span>Property In A Box</span></p>
                    </div>

                    </div>
                    </div>

  </div>

  <div class="tab-pane fade" id="email" role="tabpanel" aria-labelledby="email-tab">
    
           <div class="relation-bx">
      <div class="relation-inr">
    <div class="relation-list table-clr">
                      <p><b>Name : </b><span>Still Testing???</span></p>
                      <p><b>Date : </b><span>23 Jun 2015</span></p>
                      <p><b>Time : </b><span>07:54 pm</span></p>
                      <p><b>By : </b><span>Property In A Box</span></p>
                    </div>

                    </div>
                    </div>

  </div>
</div>


      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
          <div class="heading-inr-popup collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Documents</div>
         
    
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
       
        <div class="row wraper-inr">
                 <div class="icon-activty">
                   <ul>
                     <li><a href="#"><i class="fas fa-upload"></i></a></li>
                    <li><a href="#"><i class="fas fa-sync-alt"></i></a></li>
                   </ul>
                 </div>
                 <div class="clear"></div>
         
           
                 <div class="col-md-12 table-colr">
                  <div class="doc-list">
                  <p>Property Presentaion-eden-manor-homes.pdf </p>
                  <p><span class="color-org">Date Uploaded :</span> 20/06/2014 05.00 PM</p>
                  <p><span class="color-org">Uploaded By :</span> N/A</p>
                  </div>  

                  <div class="extension-downline">
                        <span>PDF</span> (339 KB)
                  </div>
                     

                       <div class="doc-list">
                 <div class="downline-rit-icn">
                  <p><i class="fas fa-plus"></i> &nbsp; <b>Add</b></p>
                   <p><i class="fas fa-eye"></i> &nbsp; <b>Preview</b></p>
                    <p><i class="fas fa-file-download"></i> &nbsp; <b>Download</b> 330.5kb</p>
                 </div>
                  </div>
                     

                 </div>


                 <div class="col-md-12 table-colr">
                  <div class="doc-list">
                  <p>Property Presentaion-eden-manor-homes.pdf </p>
                  <p><span class="color-org">Date Uploaded :</span> 20/06/2014 05.00 PM</p>
                  <p><span class="color-org">Uploaded By :</span> N/A</p>
                  </div>  

                  <div class="extension-downline">
                        <span>PDF</span> (339 KB)
                  </div>
                     

                       <div class="doc-list">
                 <div class="downline-rit-icn">
                  <p><i class="fas fa-plus"></i> &nbsp; <b>Add</b></p>
                   <p><i class="fas fa-eye"></i> &nbsp; <b>Preview</b></p>
                    <p><i class="fas fa-file-download"></i> &nbsp; <b>Download</b> 330.5kb</p>
                 </div>
                  </div>
                     

                 </div>



                 <div class="col-md-12 table-colr">
                  <div class="doc-list">
                  <p>Property Presentaion-eden-manor-homes.pdf </p>
                  <p><span class="color-org">Date Uploaded :</span> 20/06/2014 05.00 PM</p>
                  <p><span class="color-org">Uploaded By :</span> N/A</p>
                  </div>  

                  <div class="extension-downline">
                        <span>PDF</span> (339 KB)
                  </div>
                     

                       <div class="doc-list">
                 <div class="downline-rit-icn">
                  <p><i class="fas fa-plus"></i> &nbsp; <b>Add</b></p>
                   <p><i class="fas fa-eye"></i> &nbsp; <b>Preview</b></p>
                    <p><i class="fas fa-file-download"></i> &nbsp; <b>Download</b> 330.5kb</p>
                 </div>
                  </div>
                     

                 </div>


                 <div class="col-md-12 table-colr">
                  <div class="doc-list">
                  <p>Property Presentaion-eden-manor-homes.pdf </p>
                  <p><span class="color-org">Date Uploaded :</span> 20/06/2014 05.00 PM</p>
                  <p><span class="color-org">Uploaded By :</span> N/A</p>
                  </div>  

                  <div class="extension-downline">
                        <span>PDF</span> (339 KB)
                  </div>
                     

                       <div class="doc-list">
                 <div class="downline-rit-icn">
                  <p><i class="fas fa-plus"></i> &nbsp; <b>Add</b></p>
                   <p><i class="fas fa-eye"></i> &nbsp; <b>Preview</b></p>
                    <p><i class="fas fa-file-download"></i> &nbsp; <b>Download</b> 330.5kb</p>
                 </div>
                  </div>
                     

                 </div>


                 <div class="col-md-12 table-colr">
                  <div class="doc-list">
                  <p>Property Presentaion-eden-manor-homes.pdf </p>
                  <p><span class="color-org">Date Uploaded :</span> 20/06/2014 05.00 PM</p>
                  <p><span class="color-org">Uploaded By :</span> N/A</p>
                  </div>  

                  <div class="extension-downline">
                        <span>PDF</span> (339 KB)
                  </div>
                     

                       <div class="doc-list">
                 <div class="downline-rit-icn">
                  <p><i class="fas fa-plus"></i> &nbsp; <b>Add</b></p>
                   <p><i class="fas fa-eye"></i> &nbsp; <b>Preview</b></p>
                    <p><i class="fas fa-file-download"></i> &nbsp; <b>Download</b> 330.5kb</p>
                 </div>
                  </div>
                     

                 </div>



                 <div class="col-md-12 table-colr">
                  <div class="doc-list">
                  <p>Property Presentaion-eden-manor-homes.pdf </p>
                  <p><span class="color-org">Date Uploaded :</span> 20/06/2014 05.00 PM</p>
                  <p><span class="color-org">Uploaded By :</span> N/A</p>
                  </div>  

                  <div class="extension-downline">
                        <span>PDF</span> (339 KB)
                  </div>
                     

                       <div class="doc-list">
                 <div class="downline-rit-icn">
                  <p><i class="fas fa-plus"></i> &nbsp; <b>Add</b></p>
                   <p><i class="fas fa-eye"></i> &nbsp; <b>Preview</b></p>
                    <p><i class="fas fa-file-download"></i> &nbsp; <b>Download</b> 330.5kb</p>
                 </div>
                  </div>
                     

                 </div>


                 <div class="col-md-12 table-colr">
                  <div class="doc-list">
                  <p>Property Presentaion-eden-manor-homes.pdf </p>
                  <p><span class="color-org">Date Uploaded :</span> 20/06/2014 05.00 PM</p>
                  <p><span class="color-org">Uploaded By :</span> N/A</p>
                  </div>  

                  <div class="extension-downline">
                        <span>PDF</span> (339 KB)
                  </div>
                     

                       <div class="doc-list">
                 <div class="downline-rit-icn">
                  <p><i class="fas fa-plus"></i> &nbsp; <b>Add</b></p>
                   <p><i class="fas fa-eye"></i> &nbsp; <b>Preview</b></p>
                    <p><i class="fas fa-file-download"></i> &nbsp; <b>Download</b> 330.5kb</p>
                 </div>
                  </div>
                     

                 </div>

                 <div class="col-md-12 table-colr">
                  <div class="doc-list">
                  <p>Property Presentaion-eden-manor-homes.pdf </p>
                  <p><span class="color-org">Date Uploaded :</span> 20/06/2014 05.00 PM</p>
                  <p><span class="color-org">Uploaded By :</span> N/A</p>
                  </div>  

                  <div class="extension-downline">
                        <span>PDF</span> (339 KB)
                  </div>
                     

                       <div class="doc-list">
                 <div class="downline-rit-icn">
                  <p><i class="fas fa-plus"></i> &nbsp; <b>Add</b></p>
                   <p><i class="fas fa-eye"></i> &nbsp; <b>Preview</b></p>
                    <p><i class="fas fa-file-download"></i> &nbsp; <b>Download</b> 330.5kb</p>
                 </div>
                  </div>
                     

                 </div>

                 <div class="col-md-12 table-colr">
                  <div class="doc-list">
                  <p>Property Presentaion-eden-manor-homes.pdf </p>
                  <p><span class="color-org">Date Uploaded :</span> 20/06/2014 05.00 PM</p>
                  <p><span class="color-org">Uploaded By :</span> N/A</p>
                  </div>  

                  <div class="extension-downline">
                        <span>PDF</span> (339 KB)
                  </div>
                     

                       <div class="doc-list">
                 <div class="downline-rit-icn">
                  <p><i class="fas fa-plus"></i> &nbsp; <b>Add</b></p>
                   <p><i class="fas fa-eye"></i> &nbsp; <b>Preview</b></p>
                    <p><i class="fas fa-file-download"></i> &nbsp; <b>Download</b> 330.5kb</p>
                 </div>
                  </div>
                     

                 </div>

                 <div class="col-md-12 table-colr">
                  <div class="doc-list">
                  <p>Property Presentaion-eden-manor-homes.pdf </p>
                  <p><span class="color-org">Date Uploaded :</span> 20/06/2014 05.00 PM</p>
                  <p><span class="color-org">Uploaded By :</span> N/A</p>
                  </div>  

                  <div class="extension-downline">
                        <span>PDF</span> (339 KB)
                  </div>
                     

                       <div class="doc-list">
                 <div class="downline-rit-icn">
                  <p><i class="fas fa-plus"></i> &nbsp; <b>Add</b></p>
                   <p><i class="fas fa-eye"></i> &nbsp; <b>Preview</b></p>
                    <p><i class="fas fa-file-download"></i> &nbsp; <b>Download</b> 330.5kb</p>
                 </div>
                  </div>
                     

                 </div>

                 <div class="col-md-12 table-colr">
                  <div class="doc-list">
                  <p>Property Presentaion-eden-manor-homes.pdf </p>
                  <p><span class="color-org">Date Uploaded :</span> 20/06/2014 05.00 PM</p>
                  <p><span class="color-org">Uploaded By :</span> N/A</p>
                  </div>  

                  <div class="extension-downline">
                        <span>PDF</span> (339 KB)
                  </div>
                     

                       <div class="doc-list">
                 <div class="downline-rit-icn">
                  <p><i class="fas fa-plus"></i> &nbsp; <b>Add</b></p>
                   <p><i class="fas fa-eye"></i> &nbsp; <b>Preview</b></p>
                    <p><i class="fas fa-file-download"></i> &nbsp; <b>Download</b> 330.5kb</p>
                 </div>
                  </div>
                     

                 </div>
                 
                 <div class="col-md-12 table-colr">
                  <div class="doc-list">
                  <p>Property Presentaion-eden-manor-homes.pdf </p>
                  <p><span class="color-org">Date Uploaded :</span> 20/06/2014 05.00 PM</p>
                  <p><span class="color-org">Uploaded By :</span> N/A</p>
                  </div>  

                  <div class="extension-downline">
                        <span>PDF</span> (339 KB)
                  </div>
                     

                       <div class="doc-list">
                 <div class="downline-rit-icn">
                  <p><i class="fas fa-plus"></i> &nbsp; <b>Add</b></p>
                   <p><i class="fas fa-eye"></i> &nbsp; <b>Preview</b></p>
                    <p><i class="fas fa-file-download"></i> &nbsp; <b>Download</b> 330.5kb</p>
                 </div>
                  </div>
                     

                 </div>

               


               </div>

      </div>
    </div>
  </div>


    <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
       
          <div class="heading-inr-popup collapsed" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">Sales Tracker</div>
         
       
      </h2>
    </div>
    <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordionExample">
      <div class="card-body">
      
      <ul class="nav nav-tabs tab-property" id="myTab" role="tablist">

  <li class="nav-item">
    <a class="nav-link active" id="sales-bx-tab" data-toggle="tab" href="#sales-bx" role="tab" aria-controls="sales-bx" aria-selected="true">Sales</a>
  </li>

  <li class="nav-item">
 <a class="nav-link" id="reservations-tab" data-toggle="tab" href="#reservations" role="tab" aria-controls="reservations" aria-selected="false">Reservations</a>
  </li>


</ul>


<div class="tab-content" id="myTabContent">

  <div class="tab-pane fade show active" id="sales-bx" role="tabpanel" aria-labelledby="sales-bx-tab">
      
      <div class="col-md-12">
                <div class="sale-pro-bx">
                
                  <!-- <div class="lot-dropD">The Pavilions[Lot 37]</div> -->
                  <div class="sale-inr">
                     <div class="sale-bx">
                    <div class="sale-list-1">
                        <h5>Joey Sta. Maria</h5>
                        <p><b>Status :</b><span>New</span></p>
                        <p><b>Property / Estate :</b><span>Lowry Lane</span></p>
                        <p><b>Lot Address :</b><span>Lowry Lane</span></p>
                        <p><b>Developer :</b><span>Peter Morton</span></p>
                      </div>
                      <div class="pai-graph"><img src="image/pai.png" alt=""></div>
                    </div>
                    <div class="sale-tbl colr-ev-od">
                      
                      <div class="ev-od">
                        <div class="sale-left">
                        <b>Super Group : </b><span>N/A</span>
                         </div>
                          <div class="sale-right">
                        <b>Commission : </b><span class="color-org-1">12400.00</span>
                         </div>
                      </div>

                      <div class="ev-od">
                        <div class="sale-left">
                        <b>Affiliate : </b><span>Property In a Box</span>
                         </div>
                          <div class="sale-right">
                        <b>Commission : </b><span class="color-org-1">3120.00</span>
                         </div>
                     </div>

                      <div class="ev-od">
                        <div class="sale-left">
                        <b>Sales Agent : </b><span>Property In a Box</span>
                         </div>
                          <div class="sale-right">
                        <b>Commission : </b><span class="color-org-1">5200.00</span>
                         </div>
                     </div>


                      <div class="ev-od">
                        <div class="sale-left">
                        <b>B.D.M : </b><span>Property In a Box</span>
                         </div>
                          <div class="sale-right">
                        <b>Commission : </b><span class="color-org-1">00.00</span>
                         </div>
                     </div>

                      <div class="ev-od">
                        <div class="sale-left">
                        <b>Referral Partner : </b><span>N/A</span>
                         </div>
                          <div class="sale-right">
                        <b>Commission : </b><span class="color-org-1">00.00</span>
                         </div>
                     </div>
                   
                      
                    </div>
                  </div>
                </div>
              </div>

  </div>

  <div class="tab-pane fade" id="reservations" role="tabpanel" aria-labelledby="reservations-tab">
      
      <div class="col-md-12">
                <div class="relation-bx">
  
                  <div class="relation-inr">
                    <div class="relation-list table-clr">
                      <p><b>Status : </b><span>SOLD</span></p>
                      <p><b>Reserved For : </b><span>Gai Olsen P2</span></p>
                      <p><b>Reserved By : </b><span>Joey Sta. Maria</span></p>
                      <p><b>Property / Estate : </b><span>Weemala at the Lake, Boolaroon</span></p>
                      <p><b>Lot Number : </b><span>222</span></p>
                      <div class="update-inr"><font class="color-org">Update On :</font> April 29, 2016, 5.00pm &nbsp; <font class="color-org">Updated By :</font>Paul Rochelli </div>
                    </div>
                  </div>
                </div>
              </div>

  </div>


</div>

      </div>
    </div>
  </div>


      <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
       
          <div class="heading-inr-popup collapsed" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">Activity</div>
         
    
      </h2>
    </div>
    <div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordionExample">
      <div class="card-body">
        <div class="row">
        <div class="col-md-12">
                <div class="relation-bx">
                  <div class="relation-inr">
                    <div class="relation-list table-clr">
                      <p><b>Affiliate : </b><span>Property in a Box (Property in a Box)</span></p>
                      <p><b>PIF : </b><span>Property in a Box (Property in a Box)</span></p>
                      <p><b>BDM : </b><span>N/A</span></p>
                      <p><b>Supper Group : </b><span>N/A</span></p>
                      <p><b>Event Coordinator : </b><span>N/A</span></p>
                      <p><b>Insurance : </b><span>N/A</span></p>
                      <p><b>Broker : </b><span>N/A</span></p>
                    </div>
                  </div>
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
      </div>

    </div>
  </div>
</div> 
<div class="table-responsive table-inr col-lg-12 col-md-12 col-sm-12" >
    {!! $dataTable->table(['width' => '100%']) !!}
   

</div>
<div id='uploaded_image'>
   @push('scripts')
    {!! $dataTable->scripts() !!}
@endpush
</div>


</div>
@endsection

<script src="/js/jquery.min.js"></script>
<script type="text/javascript">
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
    url: "{{url('affiliates/Update')}}",
   
   data: { value:field, id:id, fieldname:name },
   success:function(response){
    console.log('Save successfully'); 
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
    url: "{{url('affiliates/updatestatus')}}",
   
   data: { value:value, id:id, fieldname:name },
   success:function(response){
    console.log('Save successfully'); 

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
function getid (id) {
var get_ID = $(this).attr('id');

  $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
  $.ajax({
    type: 'POST',
    url: "{{url('affiliates/get')}}",
   data: {id:id},
   success:function(data){
      if(data !=='')
    {
     $('#avatar').attr('src', 'profileimage/'+data.avatar);
    }
    else
    {
     $('#avatar').attr('src', 'profileimage/5cc88d8e2cec316f62098f28be91f766.png');
     }
      $("#firstname").text(data.firstname);
      $("#surname").text(data.surname);
      $("#email ").text(data.email );
      $("#email2").text(data.email2);
      $("#phone").text(data.phone);
      $("#phone2").text(data.phone2);
      $("#phone2_ext").text(data.phone2_ext);
      $("#phone_work").text(data.phone_work);
      $("#phone_work_ext").text(data.phone_work_ext);
      $("#mobile").text(data.mobile);
      $("#mobile2").text(data.mobile2);
      $("#company").text(data.company);
      $(".street").text(data.street);
      $(".suburb").text(data.suburb);
      $(".postcode").text(data.postcode);
      $("#fax").text(data.fax);
      $(".state").text(data.state);
      $("#referred_by").text(data.referred_by);
      $("#partner").text(data.partner);
      $('#myModalForm1').modal('show');

 }
  });
}
</script>

<script type="text/javascript">

  // Delete 
    function doWork (id){

   var post_ID = $(this).attr('id');
  



    var answer = confirm ("Are you sure you want to delete from the database?");
    if (answer){

  // Confirm box
// AJAX Request
$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
$.ajax({
    type: 'POST',
    url: "{{url('affiliates/Delete')}}",
    data: {id:id},

     success: function(html){  
      $('.row sales-list').append(html)
       },
    //  success:function(response){
    // console.log('Save successfully'); 
    //  var table = $('#example').DataTable('id');
});

}
 
}
</script>
<script src="/js/jquery.min.js"></script>


<script type="text/javascript">
     
    $(document).ready(function (e) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

    $('#uploadform').submit(function(ev){
            e.preventDefault();
 
            var formData = new FormData(this);
 
            $.ajax({
                type:'POST',
                url: "{{ url('/affiliates/image') }}",
                data: formData,
                cache:false,
                contentType: false,
                processData: false,
                success: (data) => {
                    this.reset();
                    alert('Image has been uploaded successfully');
                },
                error: function(data){
                    console.log(data);
                }
            });
        });
    });
 
</script>





