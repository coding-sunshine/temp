@extends('layouts.app',[
    'title' => 'Dashboard',
    'navTab' => 'settings',
    'navTabSecondary' => 'general',
    'az_content'  => 'az-content-profile'
])

@section('content')
  <div class="container-fluid mn-ht-100p">
    <div class="az-content-left az-content-left-profile">
      <div class="az-profile-overview">
        <div class="az-img-user">
        <img src="{{ asset('/image/avatars/male-1.png') }}" alt="">
        </div><!-- az-img-user -->
        <div class="d-flex justify-content-between mg-b-20">
          <div>
            <h5 class="az-profile-name">Sophia White</h5>
            <p class="az-profile-name-text">UI/UX Designer</p>
          </div>
          <div class="btn-icon-list">
            <button class="btn btn-indigo btn-icon"><i class="typcn typcn-plus-outline"></i></button>
            <button class="btn btn-primary btn-icon"><i class="typcn typcn-message"></i></button>
          </div>
        </div>

        <div class="az-profile-bio">
          Genius, Compiler, Powerful Multitasker, Fantasy Fruit Loop, Replacement President of a Major Soft Drink Manufacturer. <a href="">More</a>
        </div><!-- az-profile-bio -->

        <hr class="mg-y-30">

        <label class="az-content-label tx-13 mg-b-20">Websites &amp; Social Channel</label>
        <div class="az-profile-social-list">
          <div class="media">
            <div class="media-icon"><i class="icon ion-logo-github"></i></div>
            <div class="media-body">
              <span>Github</span>
              <a href="">github.com/sophia.white</a>
            </div>
          </div><!-- media -->
          <div class="media">
            <div class="media-icon"><i class="icon ion-logo-twitter"></i></div>
            <div class="media-body">
              <span>Twitter</span>
              <a href="">twitter.com/sophia.me</a>
            </div>
          </div><!-- media -->
          <div class="media">
            <div class="media-icon"><i class="icon ion-logo-linkedin"></i></div>
            <div class="media-body">
              <span>Linkedin</span>
              <a href="">linkedin.com/in/sophiaw</a>
            </div>
          </div><!-- media -->
          <div class="media">
            <div class="media-icon"><i class="icon ion-md-link"></i></div>
            <div class="media-body">
              <span>My Portfolio</span>
              <a href="">bootstrapdash.com/</a>
            </div>
          </div><!-- media -->
        </div><!-- az-profile-social-list -->

      </div><!-- az-profile-overview -->
    </div>
    <div class="az-content-body az-content-body-profile">
        <nav class="nav az-nav-line">
          <a href="#tabCont1" class="nav-link active" data-toggle="tab">General</a>
          <a href="#tabCont2" class="nav-link" data-toggle="tab">Email</a>
          <a href="#tabCont3" class="nav-link" data-toggle="tab">Website</a>
          <a href="#tabCont4" class="nav-link" data-toggle="tab">Referrals</a>
          <a href="#tabCont5" class="nav-link" data-toggle="tab">Payment History</a>
          <a href="#tabCont6" class="nav-link" data-toggle="tab">Account Settings</a>
        </nav>

        <div class="az-profile-body">
          <div class="tab-content">
            <div id="tabCont1" class="tab-pane active show">
              <div class="row mg-b-20">
                <div class="col-md-7 col-xl-8">
                  <div class="az-profile-view-chart">
                    <canvas id="chartArea"></canvas>
                    <div class="az-profile-view-info">
                      <div class="d-flex align-items-baseline">
                        <h6>508</h6>
                        <span>-1.2% since last week</span>
                      </div>
                      <p>Profile viewers past 10 days</p>
                    </div>
                  </div>
                </div><!-- col -->
                <div class="col-md-5 col-xl-4 mg-t-40 mg-md-t-0">
                  <div class="az-content-label tx-13 mg-b-20">Traffic Details</div>
                  <div class="az-traffic-detail-item">
                    <div>
                      <span>People with title Founder &amp; CEO</span>
                      <span>24 <span>(20%)</span></span>
                    </div>
                    <div class="progress">
                      <div class="progress-bar wd-20p" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                    </div><!-- progress -->
                  </div>
                  <div class="az-traffic-detail-item">
                    <div>
                      <span>People with title UX Designer</span>
                      <span>16 <span>(15%)</span></span>
                    </div>
                    <div class="progress">
                      <div class="progress-bar bg-success wd-15p" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                    </div><!-- progress -->
                  </div>
                  <div class="az-traffic-detail-item">
                    <div>
                      <span>People with title Recruitment</span>
                      <span>87 <span>(45%)</span></span>
                    </div>
                    <div class="progress">
                      <div class="progress-bar bg-pink wd-45p" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                    </div><!-- progress -->
                  </div>
                  <div class="az-traffic-detail-item">
                    <div>
                      <span>People with title Software Engineer</span>
                      <span>32 <span>(25%)</span></span>
                    </div>
                    <div class="progress">
                      <div class="progress-bar bg-teal wd-25p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div><!-- progress -->
                  </div>
                </div><!-- col -->
              </div><!-- row -->
    
              <hr class="mg-y-40">
    
              <div class="row">
                <div class="col-md-7 col-xl-8">
                  <div class="az-content-label tx-13 mg-b-25">Work &amp; Education</div>
                  <div class="az-profile-work-list">
                    <div class="media">
                      <div class="media-logo bg-success"><i class="icon ion-logo-whatsapp"></i></div>
                      <div class="media-body">
                        <h6>UI/UX Designer at <a href="">Whatsapp</a></h6>
                        <span>2016 - present</span>
                        <p>Past Work: ThemePixels, Inc. and ThemeForest, Inc.</p>
                      </div><!-- media-body -->
                    </div><!-- media -->
                    <div class="media">
                      <div class="media-logo bg-primary"><i class="icon ion-logo-buffer"></i></div>
                      <div class="media-body">
                        <h6>Studied at <a href="">Buffer University</a></h6>
                        <span>2002 - 2006</span>
                        <p>Degree: Bachelor of Science in Computer Science</p>
                      </div><!-- media-body -->
                    </div><!-- media -->
                  </div><!-- az-profile-work-list -->
                </div><!-- col -->
                <div class="col-md-5 col-xl-4 mg-t-40 mg-md-t-0">
                  <div class="az-content-label tx-13 mg-b-25">Contact Information</div>
                  <div class="az-profile-contact-list">
                    <div class="media">
                      <div class="media-icon"><i class="icon ion-md-phone-portrait"></i></div>
                      <div class="media-body">
                        <span>Mobile</span>
                        <div>(+63) 123 4567 890</div>
                      </div><!-- media-body -->
                    </div><!-- media -->
                    <div class="media">
                      <div class="media-icon"><i class="icon ion-logo-slack"></i></div>
                      <div class="media-body">
                        <span>Slack</span>
                        <div>@sophia.w</div>
                      </div><!-- media-body -->
                    </div><!-- media -->
                    <div class="media">
                      <div class="media-icon"><i class="icon ion-md-locate"></i></div>
                      <div class="media-body">
                        <span>Current Address</span>
                        <div>San Francisco, CA</div>
                      </div><!-- media-body -->
                    </div><!-- media -->
                  </div><!-- az-profile-contact-list -->
                </div><!-- col -->
              </div><!-- row -->
    
              <div class="mg-b-20"></div>
            </div><!-- tab-pane -->

            <div id="tabCont2" class="tab-pane">
            </div><!-- tab-pane -->

            <div id="tabCont3" class="tab-pane">
            </div><!-- tab-pane -->

            <div id="tabCont4" class="tab-pane">
            </div><!-- tab-pane -->

            <div id="tabCont5" class="tab-pane">
            </div><!-- tab-pane -->

            <div id="tabCont6" class="tab-pane">
            </div><!-- tab-pane -->
          </div>
          
        </div><!-- az-profile-body -->
    </div><!-- az-content-body -->
  </div><!-- container -->






    {{-- <div class="block-header">
        <h2>@lang('settings::settings.module')</h2>
    </div> --}}


            {{-- @include('settings::partial.menu') --}}


                        {{-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            @widget('Modules\Platform\Settings\Widgets\UserCountWidget',['count_active' =>
                            true,'color'=>'bg-light-green'])
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            @widget('Modules\Platform\Settings\Widgets\UserCountWidget',['count_active' =>
                            false,'widget_title'=>'inactive','color'=>'bg-deep-orange'])
                        </div> --}}

                        {{-- @if($account != null )

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="info-box">
                                    <div class="icon bg-light-blue">
                                        <i class="material-icons ">person</i>
                                    </div>
                                    <div class="content">
                                        <div class="text">@lang('settings::settings.users_limit')</div>
                                        <div class="number">{{ $currentUsers }} / {!! $account->user_limit != null ? $account->user_limit : '&#x221e;' !!} </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="info-box">
                                    <div class="icon bg-purple">
                                        <i class="material-icons ">cloud_upload</i>
                                    </div>
                                    <div class="content">
                                        <div class="text">@lang('settings::settings.storage_limit')</div>
                                        <div class="number">{{ $accountFileSize }} / {!! $account->storage_limit != null ? $account->storage_limit : '&#x221e;' !!} gb </div>
                                    </div>
                                </div>
                            </div>

                        @endif --}}

@endsection

@push('scripts')
<script>
  $(function(){
    'use strict'

    /** AREA CHART **/
    var ctx = document.getElementById('chartArea').getContext('2d');

    var gradient = ctx.createLinearGradient(0, 240, 0, 0);
    gradient.addColorStop(0, 'rgba(0,123,255,0)');
    gradient.addColorStop(1, 'rgba(0,123,255,.3)');

    new Chart(ctx, {
      type: 'line',
      data: {
        labels: ['Oct 1', 'Oct 2', 'Oct 3', 'Oct 4', 'Oct 5', 'Oct 6', 'Oct 7', 'Oct 8', 'Oct 9', 'Oct 10'],
        datasets: [{
          data: [12, 15, 18, 40, 35, 38, 32, 20, 25],
          borderColor: '#007bff',
          borderWidth: 1,
          backgroundColor: gradient
        }]
      },
      options: {
        maintainAspectRatio: false,
        legend: {
          display: false,
            labels: {
              display: false
            }
        },
        scales: {
          yAxes: [{
            display: false,
            ticks: {
              beginAtZero:true,
              fontSize: 10,
              max: 80
            }
          }],
          xAxes: [{
            ticks: {
              beginAtZero:true,
              fontSize: 11,
              fontFamily: 'Arial'
            }
          }]
        }
      }
    });

  });
</script>
@endpush