<div class="az-iconbar az-iconbar-primary">
    <a href="/dashboard" class="az-iconbar-logo"><img src="/image/favicon.png" width="50"></a>
    <nav class="nav">
        <a href="#asideDashboard" class="nav-link {{ ($navTab == 'dashboard') ? 'active' : '' }}"><i class="typcn typcn-th-small"></i></a>
        <a href="#asideAccounts" class="nav-link {{ ($navTab == 'accounts') ? 'active' : '' }}"><i class="typcn typcn-group"></i></a>
        <a href="#asideMarketing" class="nav-link {{ ($navTab == 'marketing') ? 'active' : '' }}"><i class="typcn typcn-device-desktop"></i></a>
        <a href="{{ url('projects') }}" class="nav-link {{ ($navTab == 'properties') ? 'active' : '' }}"><i class="typcn typcn-location"></i></a>
        <a href="#asideSales" class="nav-link {{ ($navTab == 'sales') ? 'active' : '' }}"><i class="typcn typcn-chart-line"></i></a>
        <a href="#asideReports" class="nav-link {{ ($navTab == 'reports') ? 'active' : '' }}"><i class="typcn typcn-chart-bar"></i></a>
        <a href="#asideSettings" class="nav-link {{ ($navTab == 'settings') ? 'active' : '' }}"><i class="typcn typcn-cog"></i></a>
    </nav>
    <div class="az-iconbar-bottom">
        <a href="" class="az-iconbar-help"><i class="far fa-question-circle"></i></a>
        <a href="" class="az-img-user online"><img src="{{ asset('/image/avatars/male-1.png') }}" alt=""></a>
    </div><!-- az-iconbar-bottom -->
</div><!-- az-iconbar -->

<div class="az-iconbar-aside az-iconbar-aside-primary">
    <div class="az-iconbar-header">
        <a href="index.html" class="az-logo">
            <img src="/image/fusion-crm-txt.png" width="100">
        </a>
        <a href="" class="az-iconbar-toggle-menu">
            <i class="icon ion-md-arrow-back"></i>
            <i class="icon ion-md-close"></i>
        </a>
    </div><!-- az-iconbar-header -->
    <div class="az-iconbar-body">
        <div id="asideDashboard" class="az-iconbar-pane">
            <h6 class="az-iconbar-title">Dashboard</h6>
            <small class="az-iconbar-text">A holistic view of your sales history and account activity. </small>

            <nav class="nav">
                <a href="{{ url('dashboard') }}" class="nav-link {{ ($navTab == 'dashboard' && $navTabSecondary == 'home') ? 'active' : '' }}">Home</a>
                <a href="{{ url('tasks') }}" class="nav-link {{ ($navTabSecondary == 'tasks') ? 'active' : '' }}">Tasks</a>
                <a href="{{ url('leads') }}" class="nav-link {{ ($navTabSecondary == 'leads') ? 'active' : '' }}">Leads Management</a>
                <a href="{{ url('contacts') }}" class="nav-link {{ ($navTabSecondary == 'contacts') ? 'active' : '' }}">Contacts Management</a>
                <a href="{{ url('sales') }}" class="nav-link {{ ($navTabSecondary == 'sales') ? 'active' : '' }}">Sales History</a>
                <a href="{{ url('projects') }}" class="nav-link {{ ($navTabSecondary == 'properties') ? 'active' : '' }}">Property Portal</a>
                <a href="{{ url('websites') }}" class="nav-link {{ ($navTab == 'settings' && $navTabSecondary == 'websites') ? 'active' : '' }}">Website Settings</a>
                <a href="{{ url('reports/network-activity') }}" class="nav-link {{ ($navTab == 'reports' && $navTabSecondary == 'network') ? 'active' : '' }}">Network Activity</a>
                <a href="{{ url('downlines') }}" class="nav-link {{ ($navTabSecondary == 'downlines') ? 'active' : '' }}">Downlines</a>
                <a href="{{ url('uploader') }}" class="nav-link {{ ($navTab == 'uploader') ? 'active' : '' }}">Uploader</a>
                <a href="{{ url('help') }}" class="nav-link {{ ($navTab == 'help') ? 'active' : '' }}">Help & Training</a>
            </nav>
        </div>
        <div id="asideAccounts" class="az-iconbar-pane">
            <h6 class="az-iconbar-title">Accounts</h6>
            <small class="az-iconbar-text">Leads, Contacts and Downlines.</small>
            <nav class="nav">
                <a href="{{ url('leads') }}" class="nav-link {{ ($navTab == 'accounts' && $navTabSecondary == 'leads') ? 'active' : '' }}">Leads</a>
                <a href="{{ url('contacts') }}" class="nav-link {{ ($navTab == 'accounts' && $navTabSecondary == 'contacts') ? 'active' : '' }}">Contacts</a>
                <a href="{{ url('clients')}}" class="nav-link {{ ($navTab == 'accounts' && $navTabSecondary == 'clients') ? 'active' : '' }}">Clients</a>
                <a href="{{ url('affiliates') }}" class="nav-link {{ ($navTab == 'accounts' && $navTabSecondary == 'affiliates') ? 'active' : '' }}">Affiliates</a>
                <a href="{{ url('subscribers') }}" class="nav-link {{ ($navTab == 'accounts' && $navTabSecondary == 'subscribers') ? 'active' : '' }}">Subscribers</a>
                <a href="{{ url('bdm') }}" class="nav-link {{ ($navTab == 'accounts' && $navTabSecondary == 'bdms') ? 'active' : '' }}">BDM</a>
            
                <a href="{{ url('sales-agents') }}" class="nav-link {{ ($navTab == 'accounts' && $navTabSecondary == 'sales_agents') ? 'active' : '' }}">Sales Agents</a>
                <a href="{{ url('referral-partners') }}" class="nav-link {{ ($navTab == 'accounts' && $navTabSecondary == 'referral_partners') ? 'active' : '' }}">Referral Partners</a>
                <a href="{{ route('users') }}" class="nav-link {{ ($navTab == 'accounts' && $navTabSecondary == 'leads') ? 'active' : '' }}">User</a>
            </nav>
        </div><!-- az-iconbar-pane -->
        <div id="asideMarketing" class="az-iconbar-pane">
            <h6 class="az-iconbar-title">Marketing</h6>
            <small class="az-iconbar-text">Marketing tools section to manage branding, websites, email signatures and emails.</small>
            <nav class="nav">
                <a href="{{ url('marketing/branding') }}" class="nav-link {{ ($navTab == 'marketing' && $navTabSecondary == 'branding') ? 'active' : '' }}">Branding</a>
                <a href="{{ url('marketing/websites') }}" class="nav-link {{ ($navTab == 'marketing' && $navTabSecondary == 'websites') ? 'active' : '' }}">Websites</a>
                <a href="{{ url('settings/email/signature') }}" class="nav-link {{ ($navTab == 'marketing' && $navTabSecondary == 'email_signature') ? 'active' : '' }}">Email Signatures</a>
                <a href="{{ url('marketing/email/templates') }}" class="nav-link {{ ($navTab == 'marketing' && $navTabSecondary == 'email_templates') ? 'active' : '' }}">Email Templates</a>
                <a href="{{ url('settings/website/preferences') }}" class="nav-link {{ ($navTab == 'marketing' && $navTabSecondary == 'preferences') ? 'active' : '' }}">Preferences</a>
            </nav>
        </div><!-- az-iconbar-pane -->
        <div id="asideProperties" class="az-iconbar-pane">
            <h6 class="az-iconbar-title">Properties</h6>
            <small class="az-iconbar-text">5000+ off-market properties giving 90% of Commssions.<br> Manage your own properties database also.</small>
            <nav class="nav">
                <a href="{{ url('projects') }}" class="nav-link {{ ($navTab == 'properties' && $navTabSecondary == 'projects') ? 'active' : '' }}">Projects/Estates</a>
                <a href="{{ url('properties') }}" class="nav-link {{ ($navTab == 'properties' && $navTabSecondary == 'lots') ? 'active' : '' }}">Properties/Lots</a>
                <a href="{{ url('favourites') }}" class="nav-link {{ ($navTab == 'properties' && $navTabSecondary == 'favourites') ? 'active' : '' }}">Favourites</a>
                <a href="{{ url('commissions') }}" class="nav-link {{ ($navTab == 'properties' && $navTabSecondary == 'commissions') ? 'active' : '' }}">Commissions</a>
                <a href="{{ url('portal-push') }}" class="nav-link {{ ($navTab == 'properties' && $navTabSecondary == 'portal_push') ? 'active' : '' }}">Portal Push</a>
                <a href="{{ url('api/docs') }}" class="nav-link {{ ($navTab == 'properties' && $navTabSecondary == 'api') ? 'active' : '' }}">API</a>
            </nav>
        </div><!-- az-iconbar-pane -->
        <div id="asideSales" class="az-iconbar-pane">
            <h6 class="az-iconbar-title">Sales</h6>
            <small class="az-iconbar-text">Sales & Comissions</small>

            <nav class="nav">
                <a href="{{ url('sales') }}" class="nav-link">Dashboard</a>
                <a href="{{ url('sales/history') }}" class="nav-link {{ ($navTab == 'sales' && $navTabSecondary == 'history') ? 'active' : '' }}">Sales History</a>
                <a href="{{ url('sales/process') }}" class="nav-link {{ ($navTab == 'sales' && $navTabSecondary == 'process') ? 'active' : '' }}">Sales Process</a>
                <a href="{{ url('tasks') }}" class="nav-link {{ ($navTab == 'sales' && $navTabSecondary == 'tasks') ? 'active' : '' }}">Tasks</a>
            </nav>
        </div><!-- az-iconbar-pane -->
        <div id="asideReports" class="az-iconbar-pane">
            <h6 class="az-iconbar-title">Reports</h6>
            <small class="az-iconbar-text">Generate reports with meaningful insights to your business.</small>
            <nav class="nav">
                <a href="{{ url('reports/activity') }}" class="nav-link {{ ($navTab == 'reports' && $navTabSecondary == 'activity') ? 'active' : '' }}">Activity Feed</a>
                <a href="{{ url('reports/downlines') }}" class="nav-link {{ ($navTab == 'reports' && $navTabSecondary == 'downlines') ? 'active' : '' }}">Downlines</a>
                <a href="{{ url('reports/network-activity') }}" class="nav-link {{ ($navTab == 'reports' && $navTabSecondary == 'network') ? 'active' : '' }}">Network Status</a>
                <a href="{{ url('reports/login-history') }}" class="nav-link {{ ($navTab == 'reports' && $navTabSecondary == 'login') ? 'active' : '' }}">Login History</a>
                <a href="{{ url('reports/website') }}" class="nav-link {{ ($navTab == 'reports' && $navTabSecondary == 'website') ? 'active' : '' }}">Website Analytics</a>
                <a href="{{ url('reports/email') }}" class="nav-link {{ ($navTab == 'reports' && $navTabSecondary == 'email') ? 'active' : '' }}">Email Analytics</a>
            </nav>
        </div><!-- az-iconbar-pane -->
        <div id="asideSettings" class="az-iconbar-pane">
            <h6 class="az-iconbar-title">Settings</h6>
            <small class="az-iconbar-text">Personalise Fusion and set business preferences.</small>
            <nav class="nav">
                <a href="{{ url('settings') }}" class="nav-link {{ ($navTab == 'settings' && $navTabSecondary == 'general') ? 'active' : '' }}">General</a>
                <a href="{{ url('settings/email') }}" class="nav-link {{ ($navTab == 'settings' && $navTabSecondary == 'email') ? 'active' : '' }}">Email</a>
                <a href="{{ url('settings/websites') }}" class="nav-link {{ ($navTab == 'settings' && $navTabSecondary == 'website') ? 'active' : '' }}">Website</a>
                <a href="{{ url('settings/referrals') }}" class="nav-link {{ ($navTab == 'settings' && $navTabSecondary == 'referrals') ? 'active' : '' }}">Referrals</a>
                <a href="{{ url('reports/payment-history') }}" class="nav-link {{ ($navTab == 'settings' && $navTabSecondary == 'payments') ? 'active' : '' }}">Payment History</a>
            </nav>
        </div><!-- az-iconbar-pane -->
    </div><!-- az-iconbar-body -->
</div><!-- az-iconbar-aside -->

@push('scripts')
    <script id="template-sidebar" type="text/javascript">
        $(function(){
        'use strict'

        $('.az-iconbar .nav-link').on('click', function(e){
            e.preventDefault();

            $(this).addClass('active');
            $(this).siblings().removeClass('active');

            $('.az-iconbar-aside').addClass('show');

            var targ = $(this).attr('href');
            $(targ).addClass('show');
            $(targ).siblings().removeClass('show');
        });

        $('.az-iconbar-toggle-menu').on('click', function(e){
            e.preventDefault();

            if(window.matchMedia('(min-width: 992px)').matches) {
            $('.az-iconbar .nav-link.active').removeClass('active');
            $('.az-iconbar-aside').removeClass('show');
            } else {
            $('body').removeClass('az-iconbar-show');
            }
        })

        $('#azIconbarShow').on('click', function(e){
            e.preventDefault();
            $('body').toggleClass('az-iconbar-show');

            var targ = $('.az-iconbar .nav-link.active').attr('href');
            $(targ).addClass('show');
        });

        $(document).bind('click touchstart', function(e){
            e.stopPropagation();

            var azContent = $(e.target).closest('.az-content').length;
            var azIconBarMenu = $(e.target).closest('.az-header-menu-icon').length;

            if(azContent) {
            $('.az-iconbar-aside').removeClass('show');

            // for mobile
            if(!azIconBarMenu) {
                $('body').removeClass('az-iconbar-show');
            }
            }
        });
        });
    </script>
@endpush