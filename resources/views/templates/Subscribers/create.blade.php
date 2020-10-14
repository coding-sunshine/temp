@extends('layouts.app',[
'title' => 'Subscribers',
'navTab' => 'Subscribers',
'navTabSecondary' => 'create',
'az_content' => 'az-content-dashboard-ten'
])

@section('content')


<div class="az-content-body">
    <div class="az-content-body-left">
        {!! form($subscriber_form) !!}
    </div>
</div>
@endsection

@csrf