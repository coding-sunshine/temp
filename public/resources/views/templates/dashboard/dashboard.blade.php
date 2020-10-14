@extends('layouts.app',[
    'title' => 'Dashboard',
    'navTab' => 'dashboard',
    'navTabSecondary' => 'home',
    'az_content' => 'az-content-dashboard-ten'
])
@section('content')
<div class="az-content-body">
    <div class="az-content-body-left">
        <h2 class="az-content-title tx-24 mg-b-5">Hi, welcome back!</h2>
        @can('users')
        <p class="mg-b-20">Your account performance and management dashboard.</p>
        @endcan

        <div class="row row-sm mg-b-20">
            <div class="col-sm-6 col-lg-4">
                <div class="card card-dashboard-twentysix">
                <div class="card-header">
                    <h6 class="card-title">Leads</h6>
                    <div class="chart-legend">
                    <div><span class="bg-primary"></span> New</div>
                    <div><span class="bg-chocolate"></span> Total</div>
                    </div><!-- chart-legend -->
                </div><!-- card-header -->
                <div class="card-body">
                    <div class="pd-x-15">
                    <h6>156 <span class="tx-primary"><i class="icon ion-md-arrow-up"></i> 3.7%</span></h6>
                    <label>Avg. Leads/Day</label>
                    </div>
                    <div class="chart-wrapper">
                    <div id="flotChart7" class="flot-chart"></div>
                    </div><!-- chart-wrapper -->
                </div><!-- card-body -->
                </div><!-- card -->
            </div><!-- col -->
            <div class="col-sm-6 col-lg-4 mg-t-20 mg-sm-t-0">
                <div class="card card-dashboard-twentysix card-dark-one">
                <div class="card-header">
                    <h6 class="card-title">Conversions</h6>
                </div><!-- card-header -->
                <div class="card-body">
                    <div class="pd-x-15">
                    <h6>0.23% <span><i class="icon ion-md-arrow-up"></i> 0.20%</span></h6>
                    <label>Clients</label>
                    </div>
                    <div class="chart-wrapper">
                    <div id="flotChart8" class="flot-chart"></div>
                    </div><!-- chart-wrapper -->
                </div><!-- card-body -->
                </div><!-- card -->
            </div><!-- col -->
            <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                <div class="card card-dashboard-twentysix card-dark-two">
                <div class="card-header">
                    <h6 class="card-title">Revenue</h6>
                </div><!-- card-header -->
                <div class="card-body">
                    <div class="pd-x-15">
                    <h6>$7,299 <span><i class="icon ion-md-arrow-up"></i> 1.18%</span></h6>
                    <label>Total Sales</label>
                    </div>
                    <div class="chart-wrapper">
                    <div id="flotChart9" class="flot-chart"></div>
                    </div><!-- chart-wrapper -->
                </div><!-- card-body -->
                </div><!-- card -->
            </div><!-- col -->
        </div><!-- row -->

        <div class="card card-body card-dashboard-twentyfive mg-b-20">
            <h6 class="card-title">Statistics</h6>
            <div class="row row-sm">

                <div class="col-6 col-sm-4 col-lg mg-t-20 mg-lg-t-0">
                    <label class="card-label">Unique Visitors</label>
                    <h6 class="card-value">306</h6>
                    <div class="chart-wrapper">
                        <div id="flotChart1" class="flot-chart"></div>
                    </div><!-- chart-wrapper -->
                </div><!-- col -->
                
                <div class="col-6 col-sm-4 col-lg mg-t-20 mg-sm-t-0">
                    <label class="card-label">Leads</label>
                    <h6 class="card-value">53</h6>
                    <div class="chart-wrapper">
                        <div id="flotChart2" class="flot-chart"></div>
                    </div><!-- chart-wrapper -->
                </div><!-- col -->

                <div class="col-6 col-sm-4 col-lg mg-t-20 mg-lg-t-0">
                    <label class="card-label">Clients</label>
                    <h6 class="card-value">31</h6>
                    <div class="chart-wrapper">
                        <div id="flotChart3" class="flot-chart"></div>
                    </div><!-- chart-wrapper -->
                </div><!-- col -->

                <div class="col-6 col-sm-4 col-lg">
                    <label class="card-label">Contacts</label>
                    <h6 class="card-value">467</h6>
                    <div class="chart-wrapper">
                        <div id="flotChart4" class="flot-chart"></div>
                    </div><!-- chart-wrapper -->
                </div><!-- col -->

                <div class="col-6 col-sm-4 col-lg mg-t-20 mg-lg-t-0">
                    <label class="card-label">Properties</label>
                    <h6 class="card-value">5200</h6>
                    <div class="chart-wrapper">
                        <div id="flotChart5" class="flot-chart"></div>
                    </div><!-- chart-wrapper -->
                </div><!-- col -->

                <div class="col-6 col-sm-4 col-lg">
                    <label class="card-label">Earnings</label>
                    <h6 class="card-value"><span>$</span>1,095,190</h6>
                    <div class="chart-wrapper">
                        <div id="flotChart6" class="flot-chart"></div>
                    </div><!-- chart-wrapper -->
                </div><!-- col -->
                
            </div><!-- row -->
        </div><!-- card -->

        <div class="row row-sm">
            <div class="col-lg-6">
                <div class="card card-dashboard-twentyfour">
                <div class="card-header">
                    <h6 class="card-title">Real Time Sales</h6>
                    <span>This Month</span>
                </div><!-- card-header -->
                <div class="card-body">
                    <div class="card-body-top">
                    <div>
                        <h6><span>$</span>150,200<small>.00</small></h6>
                        <label>Total Sales</label>
                    </div>
                    <div>
                        <h6><span>$</span>21,830<small>.25</small></h6>
                        <label>Avg. Sales per Month</label>
                    </div>
                    </div><!-- card-body-top -->

                    <div class="d-flex justify-content-between mg-b-15">
                    <label class="az-content-label">Sales Per Month</label>
                    <div class="chart-legend">
                        <div><span class="bg-crimson"></span> Apr</div>
                        <div><span class="bg-gold"></span> March</div>
                    </div><!-- chart-legend -->
                    </div>
                    <div class="chart-wrapper">
                    <div id="flotBar1" class="flot-chart"></div>
                    </div><!-- chart-wrapper -->
                </div><!-- card-body -->
                </div><!-- card -->
            </div><!-- col -->
            <div class="col-lg-6 mg-t-20 mg-lg-t-0">
                <div class="card card-dashboard-twentyfour">
                <div class="card-header">
                    <h6 class="card-title">Website Analytics</h6>
                    <span>This Month</span>
                </div><!-- card-header -->
                <div class="card-body">
                    <div class="card-body-top">
                    <div>
                        <h6>297,506</h6>
                        <label>Total Visitors</label>
                    </div>
                    <div>
                        <h6>38,130</h6>
                        <label>Visits per Day</label>
                    </div>
                    <div>
                        <h6>35.07%</h6>
                        <label>Bounce Rate</label>
                    </div>
                    </div><!-- card-body-top -->

                    <div class="d-flex justify-content-between mg-b-15">
                    <label class="az-content-label">Visitors Per Hour</label>
                    <div class="chart-legend">
                        <div><span class="bg-crimson"></span> Today</div>
                        <div><span class="bg-gold"></span> Yesterday</div>
                    </div><!-- chart-legend -->
                    </div>
                    <div class="chart-wrapper">
                    <div id="flotLine1" class="flot-chart"></div>
                    </div><!-- chart-wrapper -->
                </div><!-- card-body -->
                </div><!-- card -->
            </div><!-- col -->
            <div class="col-lg-8 mg-t-20">
                <div class="card card-table-two">
                    <h6 class="card-title">Tasks</h6>
                    <div class="card-header bg-primary bd-b-0-f pd-b-0">
                        <nav class="nav nav-tabs">
                            <a class="nav-link active show" data-toggle="tab" href="#tabCont1">Overdue</a>
                            <a class="nav-link" data-toggle="tab" href="#tabCont2">Completed</a>
                            <a class="nav-link" data-toggle="tab" href="#tabCont3"><i class="typcn typcn-calendar"></i></a>
                        </nav>
                    </div>
                    <div class="card-body bd bd-t-0 tab-content">
                        <div id="tabCont1" class="tab-pane active show">
                            <div class="table-responsive">
                                <table id="datatable1" class="responsive" width="100%">
                                    <thead style="display:none">
                                        <tr>
                                            <th class="wd-60p">Task</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <h6 class="mg-t-5">Tiger Nixon Loreum Ipsum Loreum Ipsum Loreum Ipsum</h6>
                                                <div class="d-flex align-items-end flex-row">
                                                    <div class="pd-r-10 tx-11 tx-light"><label class="tx-bold">Status: </label> <span class="badge badge-danger tx-11">DUE</span></div> 
                                                    <div class="pd-r-10 tx-11 tx-light"><label class="tx-bold pd-r-5">Due Date: </label> 25 April 2020, 5:00PM</div>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="#" class="mg-b-5 d-block mark-completed tx-12">Mark Completed</a>
                                                <a href="#" class="d-block tx-12 delete">Delete</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6 class="mg-t-5">Tiger Nixon Loreum Ipsum Loreum Ipsum Loreum Ipsum</h6>
                                                <div class="d-flex align-items-end flex-row">
                                                    <div class="pd-r-10 tx-11 tx-light"><label class="tx-bold">Status: </label> <span class="badge badge-danger tx-11">DUE</span></div> 
                                                    <div class="pd-r-10 tx-11 tx-light"><label class="tx-bold pd-r-5">Due Date: </label> 25 April 2020, 5:00PM</div>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="#" class="mg-b-5 d-block mark-completed tx-12">Mark Completed</a>
                                                <a href="#" class="d-block tx-12 delete">Delete</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6 class="mg-t-5">Tiger Nixon Loreum Ipsum Loreum Ipsum Loreum Ipsum</h6>
                                                <div class="d-flex align-items-end flex-row">
                                                    <div class="pd-r-10 tx-11 tx-light"><label class="tx-bold">Status: </label> <span class="badge badge-danger tx-11">DUE</span></div>
                                                    <div class="pd-r-10 tx-11 tx-light"><label class="tx-bold pd-r-5">Due Date: </label> 25 April 2020, 5:00PM</div>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="#" class="mg-b-5 d-block mark-completed tx-12">Mark Completed</a>
                                                <a href="#" class="d-block tx-12 delete">Delete</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div><!-- table-responsive -->
                        </div><!-- tab-pane -->
                        <div id="tabCont2" class="tab-pane">
                            <div class="table-responsive">
                                <table id="datatable2" class="responsive" width="100%">
                                    <thead style="display:none">
                                        <tr>
                                            <th class="wd-60p">Task</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <h6 class="mg-t-5">Tiger Nixon Loreum Ipsum Loreum Ipsum Loreum Ipsum</h6>
                                                <div class="d-flex align-items-end flex-row">
                                                    <div class="pd-r-10 tx-11 tx-light"><label class="tx-bold">Status: </label> <span class="badge badge-danger tx-11">DUE</span></div> 
                                                    <div class="pd-r-10 tx-11 tx-light"><label class="tx-bold pd-r-5">Due Date: </label> 25 April 2020, 5:00PM</div>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="#" class="mg-b-5 d-block mark-completed tx-12">Mark Completed</a>
                                                <a href="#" class="d-block tx-12 delete">Delete</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6 class="mg-t-5">Tiger Nixon Loreum Ipsum Loreum Ipsum Loreum Ipsum</h6>
                                                <div class="d-flex align-items-end flex-row">
                                                    <div class="pd-r-10 tx-11 tx-light"><label class="tx-bold">Status: </label> <span class="badge badge-danger tx-11">DUE</span></div> 
                                                    <div class="pd-r-10 tx-11 tx-light"><label class="tx-bold pd-r-5">Due Date: </label> 25 April 2020, 5:00PM</div>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="#" class="mg-b-5 d-block mark-completed tx-12">Mark Completed</a>
                                                <a href="#" class="d-block tx-12 delete">Delete</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6 class="mg-t-5">Tiger Nixon Loreum Ipsum Loreum Ipsum Loreum Ipsum</h6>
                                                <div class="d-flex align-items-end flex-row">
                                                    <div class="pd-r-10 tx-11 tx-light"><label class="tx-bold">Status: </label> <span class="badge badge-danger tx-11">DUE</span></div>
                                                    <div class="pd-r-10 tx-11 tx-light"><label class="tx-bold pd-r-5">Due Date: </label> 25 April 2020, 5:00PM</div>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="#" class="mg-b-5 d-block mark-completed tx-12">Mark Completed</a>
                                                <a href="#" class="d-block tx-12 delete">Delete</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div id="tabCont3" class="tab-pane">This is tab content 3...</div>
                    </div>
                </div><!-- card-dashboard-five -->
            </div><!-- col -->
            <div class="col-lg-4 mg-t-20">
                <div class="card card-dashboard-eight bg-white">
                    <h6 class="card-title">Your Top Countries</h6>
                    <span class="d-block mg-b-20">Sales performance revenue based by country</span>

                    <div class="list-group">
                        <div class="list-group-item">
                            <i class="flag-icon flag-icon-us flag-icon-squared"></i>
                            <p>United States</p>
                            <span>$1,671.10</span>
                        </div><!-- list-group-item -->
                        <div class="list-group-item">
                            <i class="flag-icon flag-icon-nl flag-icon-squared"></i>
                            <p>Netherlands</p>
                            <span>$1,064.75</span>
                        </div><!-- list-group-item -->
                        <div class="list-group-item">
                            <i class="flag-icon flag-icon-gb flag-icon-squared"></i>
                            <p>United Kingdom</p>
                            <span>$1,055.98</span>
                        </div><!-- list-group-item -->
                        <div class="list-group-item">
                            <i class="flag-icon flag-icon-ca flag-icon-squared"></i>
                            <p>Canada</p>
                            <span>$1,045.49</span>
                        </div><!-- list-group-item -->
                        <div class="list-group-item">
                            <i class="flag-icon flag-icon-au flag-icon-squared"></i>
                            <p>Australia</p>
                            <span>$1,042.00</span>
                        </div><!-- list-group-item -->
                    </div><!-- list-group -->
                </div><!-- card -->
            </div><!-- col -->
        </div><!-- row -->
    </div>
    <div class="az-content-body-right">
        <div class="row mg-b-20">
            <div class="col">
                <label class="az-rating-label">Conversion Rate</label>
                <h6 class="az-rating-value">58%</h6>
            </div><!-- col -->
            <div class="col">
                <label class="az-rating-label">Rating Score</label>
                <h6 class="az-rating-value">4.5</h6>
            </div><!-- col -->
        </div><!-- row -->

        <hr class="mg-y-25">
        <label class="az-content-label tx-base mg-b-25">2 Recent Reviews</label>
        <div class="az-media-list-reviews">
            <div class="media">
                <div class="az-img-user"><img src="https://via.placeholder.com/500x500" alt=""></div>
                <div class="media-body">
                    <div class="d-flex justify-content-between mg-b-10">
                        <div>
                            <h6 class="mg-b-0">Socrates Itumay</h6>
                            <div class="az-star-group">
                                <div class="az-star-item"><i class="icon ion-md-star"></i></div>
                                <div class="az-star-item"><i class="icon ion-md-star"></i></div>
                                <div class="az-star-item"><i class="icon ion-md-star"></i></div>
                                <div class="az-star-item"><i class="icon ion-md-star"></i></div>
                                <div class="az-star-item"><i class="icon ion-md-star"></i></div>
                                <span>4.1</span>
                            </div><!-- star-group -->
                        </div>
                        <small>1 hour ago</small>
                    </div>
                    <p class="mg-b-0">Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed amet...<a href="">Read more</a></p>
                </div><!-- media-body -->
            </div><!-- media -->
            <div class="media">
                <div class="az-img-user"><img src="https://via.placeholder.com/500x500" alt=""></div>
                <div class="media-body">
                    <div class="d-flex justify-content-between mg-b-10">
                        <div>
                            <h6 class="mg-b-0">Reynante Labares</h6>
                            <div class="az-star-group">
                                <div class="az-star-item"><i class="icon ion-md-star"></i></div>
                                <div class="az-star-item"><i class="icon ion-md-star"></i></div>
                                <div class="az-star-item"><i class="icon ion-md-star"></i></div>
                                <div class="az-star-item"><i class="icon ion-md-star"></i></div>
                                <div class="az-star-item"><i class="icon ion-md-star"></i></div>
                                <span>4.5</span>
                            </div><!-- star-group -->
                        </div>
                        <small>2 days ago</small>
                    </div>
                    <p class="mg-b-0">Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed amet...<a href="">Read more</a></p>
                </div><!-- media-body -->
            </div><!-- media -->
        </div><!-- media-list -->
        
        <hr class="mg-y-25">
        <label class="az-content-label tx-base mg-b-25">Activity Stream</label>
        <div class="az-media-list-activity mg-b-20">
            <div class="media">
                <div class="media-icon bg-success"><i class="typcn typcn-tick-outline"></i></div>
                <div class="media-body">
                    <h6>Successful Purchase</h6>
                    <span>Product ID: #0102</span>
                </div>
                <div class="media-right">2 hours</div>
            </div><!-- media -->
            <div class="media">
                <div class="media-icon bg-primary"><i class="typcn typcn-shopping-cart"></i></div>
                <div class="media-body">
                    <h6>Order Verification</h6>
                    <span>Product ID: #2200</span>
                </div>
                <div class="media-right">3 hours</div>
            </div><!-- media -->
            <div class="media">
                <div class="media-icon bg-purple"><i class="typcn typcn-arrow-forward-outline"></i></div>
                <div class="media-body">
                    <h6>Orders For Shipment</h6>
                    <span>Cleared By: Agent#20</span>
                </div>
                <div class="media-right">5 hours</div>
            </div><!-- media -->
            <div class="media">
                <div class="media-icon bg-danger"><i class="typcn typcn-times-outline"></i></div>
                <div class="media-body">
                    <h6>Purchase Cancellation</h6>
                    <span>Product ID: #0102</span>
                </div>
                <div class="media-right">6 hours</div>
            </div><!-- media -->
            <div class="media">
                <div class="media-icon bg-success"><i class="typcn typcn-tick-outline"></i></div>
                <div class="media-body">
                    <h6>Successful Purchase</h6>
                    <span>Product ID: #2070</span>
                </div>
                <div class="media-right">10 hours</div>
            </div><!-- media -->
            <div class="media">
                <div class="media-icon bg-warning"><i class="typcn typcn-tick-outline"></i></div>
                <div class="media-body">
                    <h6>Overdue Shipments</h6>
                    <span>Reminder from: Agent#30</span>
                </div>
                <div class="media-right">18 hours</div>
            </div><!-- media -->
            <div class="media">
                <div class="media-icon bg-danger"><i class="typcn typcn-times-outline"></i></div>
                <div class="media-body">
                    <h6>Purchase Cancellation</h6>
                    <span>Product ID: #0102</span>
                </div>
                <div class="media-right">Yesterday</div>
            </div><!-- media -->
            <div class="media">
                <div class="media-icon bg-info"><i class="typcn typcn-times-outline"></i></div>
                <div class="media-body">
                    <h6>New Item Added</h6>
                    <span>Department: Wearables</span>
                </div>
                <div class="media-right">Yesterday</div>
            </div><!-- media -->
            <div class="media">
                <div class="media-icon bg-orange"><i class="typcn typcn-times-outline"></i></div>
                <div class="media-body">
                    <h6>New Registered Seller</h6>
                    <span>Seller Name: Socrates</span>
                </div>
                <div class="media-right">3 days</div>
            </div><!-- media -->
            <div class="media">
                <div class="media-icon bg-success"><i class="typcn typcn-tick-outline"></i></div>
                <div class="media-body">
                    <h6>Successful Purchase</h6>
                    <span>Product ID: #2070</span>
                </div>
                <div class="media-right">4 days</div>
            </div><!-- media -->
        </div><!-- az-media-list-activity -->
        <a href="" class="btn btn-outline-light btn-block">View All Activities</a>
    </div>
</div><!-- az-content-body -->

@endsection


@push('css-up')

@endpush
@push('scripts')

<script>
    $(function(){
      'use strict'
      /******************* DASHBOARD CHARTS **************************/

    $.plot('#flotBar1', [{
            data: [[1,0],[2,0],[3,0],[4,1],[5,3],[6,3],[7,10],[8,11],[9,10],[10,9],[11,12],[12,8],[13,10],[14,6],[15,3]],
            bars: {
            show: true,
            lineWidth: 0,
            fillColor: '#f68c28',
            barWidth: .3,
            order: 'left'
            }
        },{
            data: [[1,0],[2,0],[3,1],[4,2],[5,2],[6,5],[7,8],[8,12],[9,10],[10,11],[11,3]],
            bars: {
            show: true,
            lineWidth: 0,
            fillColor: '#eb2337',
            barWidth: .3,
            align: 'right'
            }
        }], {
        grid: {
          borderWidth: 0
        },
        yaxis: {
          min: 0,
          max: 15,
          tickColor: '#ddd',
          ticks: [[0,''],[5,'$500'],[10,'$1000'],[15,'$3000']],
          font: {
            color: '#444',
            size: 10
          }
        },
        xaxis: {
          mode: 'categories',
          tickColor: '#eee',
          ticks: [[0,'3am'],[1,'4am'],[2,'5am'],[3,'6am'],[4,'7am'],[5,'8am'],[6,'9am'],[7,'10am'],[8,'11am'],[9,'12nn'],[10,'1pm'],[11,'2pm'],
        [12,'3pm'],[13,'4pm'],[14,'5pm']],
          font: {
            color: '#999',
            size: 9
          }
        }
    });

    $.plot('#flotLine1', [{
        data: [[1,0],[2,0],[3,0],[4,1],[5,3],[6,3],[7,10],[8,11],[9,12],[10,9],[11,12],[12,8],[13,5],[14,10],[15,11]],
        color: '#f68c28'
        },{
            data: [[1,0],[2,0],[3,1],[4,2],[5,2],[6,5],[7,8],[8,12],[9,9],[10,11],[11,5]],
            color: '#eb2337'
        }], {
        series: {
                  shadowSize: 0,
          lines: {
            show: true,
            lineWidth: 2,
            fill: true,
            fillColor: { colors: [ { opacity: 0 }, { opacity: 0.12 } ] }
          }
              },
        grid: {
          borderWidth: 0
        },
        yaxis: {
          min: 0,
          max: 15,
          tickColor: '#ddd',
          ticks: [[0,''],[5,'100K'],[10,'200K'],[15,'300K']],
          font: {
            color: '#444',
            size: 10
          }
        },
        xaxis: {
          mode: 'categories',
          tickColor: '#eee',
          ticks: [[0,'3am'],[1,'4am'],[2,'5am'],[3,'6am'],[4,'7am'],[5,'8am'],[6,'9am'],[7,'10am'],[8,'11am'],[9,'12nn'],[10,'1pm'],[11,'2pm'],
        [12,'3pm'],[13,'4pm'],[14,'5pm']],
          font: {
            color: '#999',
            size: 9
          }
        }
    });

    $.plot('#flotChart1', [{
          data: dashData5,
          color: '#f68c28'
        }], {
              series: {
                  shadowSize: 0,
          lines: {
            show: true,
            lineWidth: 2,
            fill: true,
            fillColor: { colors: [ { opacity: 0 }, { opacity: .5 } ] }
          }
              },
        grid: {
          borderWidth: 0,
          labelMargin: 0
        },
              yaxis: {
          show: false,
          min: 0,
          max: 60
        },
              xaxis: { show: false }
    });

    $.plot('#flotChart2', [{
          data: dashData6,
          color: '#eb2337'
        }], {
              series: {
                  shadowSize: 0,
          lines: {
            show: true,
            lineWidth: 2,
            fill: true,
            fillColor: { colors: [ { opacity: 0 }, { opacity: .5 } ] }
          }
              },
        grid: {
          borderWidth: 0,
          labelMargin: 0
        },
              yaxis: {
          show: false,
          min: 0,
          max: 80
        },
              xaxis: { show: false }
    });

    $.plot('#flotChart3', [{
          data: dashData7,
          color: '#cb4a33'
        }], {
              series: {
                  shadowSize: 0,
          lines: {
            show: true,
            lineWidth: 2,
            fill: true,
            fillColor: { colors: [ { opacity: 0 }, { opacity: .5 } ] }
          }
              },
        grid: {
          borderWidth: 0,
          labelMargin: 0
        },
              yaxis: {
          show: false,
          min: 0,
          max: 80
        },
              xaxis: { show: false }
    });

    $.plot('#flotChart4', [{
          data: dashData5,
          color: '#e4b478'
        }], {
              series: {
                  shadowSize: 0,
          lines: {
            show: true,
            lineWidth: 2,
            fill: true,
            fillColor: { colors: [ { opacity: 0 }, { opacity: .5 } ] }
          }
              },
        grid: {
          borderWidth: 0,
          labelMargin: 0
        },
              yaxis: {
          show: false,
          min: 0,
          max: 80
        },
              xaxis: { show: false }
    });

    $.plot('#flotChart5', [{
          data: dashData6,
          color: '#7c1a23'
        }], {
              series: {
                  shadowSize: 0,
          lines: {
            show: true,
            lineWidth: 2,
            fill: true,
            fillColor: { colors: [ { opacity: 0 }, { opacity: .5 } ] }
          }
              },
        grid: {
          borderWidth: 0,
          labelMargin: 0
        },
              yaxis: {
          show: false,
          min: 0,
          max: 80
        },
              xaxis: { show: false }
    });

    $.plot('#flotChart6', [{
          data: dashData7,
          color: '#d57556'
        }], {
              series: {
                  shadowSize: 0,
          lines: {
            show: true,
            lineWidth: 2,
            fill: true,
            fillColor: { colors: [ { opacity: 0 }, { opacity: .5 } ] }
          }
              },
        grid: {
          borderWidth: 0,
          labelMargin: 0
        },
              yaxis: {
          show: false,
          min: 0,
          max: 80
        },
              xaxis: { show: false }
    });

    $.plot('#flotChart7', [{
            data: dashData3,
            color: '#f68c28',
            curvedLines: { apply: true }
        },{
            data: dashData4,
            color: '#cb4a33',
            curvedLines: { apply: true }
        }], {
              series: {
                  shadowSize: 0,
          lines: {
            show: true,
            lineWidth: 0,
            fill: true,
            fillColor: { colors: [ { opacity: .5 }, { opacity: 1 } ] }
          },
          curvedLines: { active: true }
              },
        grid: {
          borderWidth: 0,
          labelMargin: 0
        },
              yaxis: {
          show: true,
          min: 0,
          max: 50,
          ticks: [[0,''],[10,'100'],[20,'200'],[30,'300']],
          tickColor: '#f3f3f3'
        },
              xaxis: {
          show: true,
          ticks: [[0,''],[20,'Nov 20'],[40,'Nov 21'],[60,'Nov 22']],
          tickColor: 'rgba(255,255,255,0)'
        }
    });

    $.plot('#flotChart8', [{
        data: dashData4,
        color: '#f79d4f'
        }], {
            series: {
            bars: {
            show: true,
            lineWidth: 0,
            fill: 1,
            barWidth: .5
          }
              },
        grid: {
          borderWidth: 0,
          labelMargin: 0
        },
              yaxis: {
          show: true,
          min: 0,
          max: 30,
          ticks: [[0,''],[10,'100'],[20,'200']],
          tickColor: 'rgba(255,255,255,0)'
        },
              xaxis: {
          show: true,
          max: 40,
          ticks: [[0,''],[15,'Nov 20'],[30,'Nov 21']],
          tickColor: 'rgba(255,255,255,0)'
        }
    });

    $.plot('#flotChart9', [{
        data: dashData3,
        color: '#fff',
        bars: {
          show: true,
          lineWidth: 0,
          barWidth: .5
        }
      },{
        data: dashData4,
        color: '#fff',
        lines: {
          show: true,
          lineWidth: 2,
          fill: .16
        }
      }], {
        series: {
          shadowSize: 0
        },
        grid: {
          borderWidth: 0,
          labelMargin: 0
        },
              yaxis: {
          show: true,
          min: 0,
          max: 30,
          ticks: [[0,''],[10,'100'],[20,'200']],
          tickColor: 'rgba(255,255,255,0)'
        },
              xaxis: {
          show: true,
          max: 40,
          ticks: [[0,''],[15,'Nov 20'],[30,'Nov 21']],
          tickColor: 'rgba(255,255,255,0)'
        }
          });

      //
    });

    $(document).ready(function(){
        'use strict';

        $('#datatable1').DataTable({
            bLengthChange: false,
            searching: false,
            responsive: true,
            pageLength: 5
        });
        
        $('#datatable2').DataTable({
            bLengthChange: false,
            searching: false,
            responsive: true,
            pageLength: 5
        });

        // Select2
        $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

    });
</script>

@endpush


