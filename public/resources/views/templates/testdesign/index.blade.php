@extends('layouts.app',[
    'title' => 'Roles',
    'navTab' => 'role',
    'navTabSecondary' => 'List',
    'az_content' => 'az-content-dashboard-ten'
])
@section('content')

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

    <div class="col-md-3 offset-md-3">
      <div class="pagination-lyaout float-r">
        <nav aria-label="Page navigation example">
          <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#">Prev</a></li>
            <li class="page-item"><a class="page-link active" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">4</a></li>
            <li class="page-item"><a class="page-link" href="#">5</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>


  <!-- CLient list -->

  <div class="row sales-list">
            <div class="tble-check2">
               <label class="check-box"><input type="checkbox" checked="checked"><span class="checkmark"></span></label>
            </div>
                <div class="col-md-3">
                   <div class="sales-bx">
                    <div class="img-client">
                      <img src="/image/user.png" alt="">
                    </div>
                    <div class="deatis-bx">
                      <h4 class="hD-1">John Doe <span>
                        <a href="javascript:;"><img src="/image/edit-icon.png" alt=""></a>
                      </span></h4>
                      <p class="txt-bx">
                        <b>88 Realty Pvt LTD</b><!-- <span><img src="img/edit-icon.png" alt=""></span> -->
                        <br>486 Jepean Hwy, Chelsea, 3196, VIC 
                       <!--  <span><img src="img/edit-icon.png" alt=""></span> -->
                        </p>
                      
                      <div class=""></div>
                    </div>
                  </div>
                </div>

                    <div class="col-md-2 pad-top-bot">
                    <div class="sales-bx">
                  <p>
                  <b class="wid-40">Status : </b><span class="color-org">Send Mock Email <!-- <img src="img/edit-icon.png" alt=""> --></span>
                </p>
                <p>
                  <b class="wid-40">Join Date : </b><span class=""><span class=""><img src="/image/calendar.png" alt="">&nbsp; 28 Sep 2019</span></span>
                </p>
                  <p>
                  </p><ul class="socila-bx1">
                          <li><img src="/image/facebook.png" alt=""></li>
                          <li><img src="/image/linkdin.png" alt=""></li>
                          <li><img src="/image/twitter.png" alt=""></li>
                          <li><img src="/image/pintrerst.png" alt=""></li>
                          <li><img src="/image/youtube.png" alt=""></li>
                        </ul>
                <p></p>
                    </div>
                  </div>

                  <div class="col-md-5 pad-top-bot">
                  <div class="sales-bx">
                    <div class="info-bx">
              <p>
              <b class="wid-40">Affiliate : </b><span class="color-org">Nisrin Spacy</span>
            </p>
            <p>
              <b class="wid-40">Subscriber : </b><span class="">Ashley Southen</span>
            </p>
              <p>
              <b class="wid-40">BDM : </b><span class="">Poul Hasson</span>
            </p>
            </div>

              <div class="info-bx">
              <p>
              <b class="wid-40">Affiliate : </b><span class="color-org">Nisrin Spacy</span>
            </p>
            <p>
              <b class="wid-40">Subscriber : </b><span class="">Ashley Southen</span>
            </p>
              <p>
              <b class="wid-40">BDM : </b><span class="">Poul Hasson</span>
            </p>
            </div>
                    </div>
                  </div>

                  <div class="col-md-2 pad-top-bot">
                    <div class="sales-bx broder-none">
                      <p>
                        <a href="JavaScript:;"><b><img src="/image/satting-2.png" alt=""></b>&nbsp;<span>Admin Setting</span></a>
                      </p>
                       <p>
                        <a href="JavaScript:;"><b><img src="/image/marketing-icon.png" alt=""></b>&nbsp;<span>Marketing Tools</span></a>
                      </p>
                       <p>
                        <a href="JavaScript:;"><b><img src="/image/satting-2.png" alt=""></b>&nbsp;<span>View Downline</span></a>
                      </p>
                    </div>
                    
                  </div>

                      <div class="clear"></div>
                <div class="gry-strip">
                  <ul class="float-l mar-left">
                    <li><span><img src="/image/mobile-1.png" alt=""></span> &nbsp;0411422079</li>
                    <li><span><img src="/image/call.png" alt=""></span> &nbsp;0411422079</li>
                    <li><span><img src="/image/mobile-1.png" alt=""></span> &nbsp;matt.hemmons@denfin.com.au</li>
                  </ul>
                  <ul class="float-r font-10">
                    <li>Last Modified : 28 Sep 2019</li>
                    <li><span class="round-org"></span></li>
                    <li>Created on : 28 Sep 2019</li>
                  </ul>

                </div>

              </div>

 <!-- End Client list -->

 <div class="row">
                <div class="col-md-3 offset-md-9">
                  <div class="pagination-lyaout float-r">
                    <nav aria-label="Page navigation example">
                      <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                        <li class="page-item"><a class="page-link active" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                      </ul>
                    </nav>
                  </div>
                </div>
              </div>


                </div>




@endsection

