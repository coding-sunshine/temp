@extends('layouts.app',[
'title' => 'Referral Partners',
'navTab' => 'referralpartners',
'navTabSecondary' => 'create',
'az_content' => 'az-content-dashboard-ten'
])

@section('content')


<div class="az-content-body">
    <div class="az-content-body-left">
        {!! form($refpartner_form) !!}
    </div>
</div>
@endsection

@csrf