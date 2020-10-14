@extends('layouts.app',[
'title' => 'Leads',
'navTab' => 'Leads',
'navTabSecondary' => 'create',
'az_content' => 'az-content-dashboard-ten'
])

@section('content')


<div class="az-content-body">
    <div class="az-content-body-left">
        {!! form($lead_form) !!}
    </div>
</div>
@endsection

@csrf


