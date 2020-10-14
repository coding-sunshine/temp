@extends('layouts.app',[
'title' => 'Clients',
'navTab' => 'Clients',
'navTabSecondary' => 'create',
'az_content' => 'az-content-dashboard-ten'
])

@section('content')


<div class="az-content-body">
    <div class="az-content-body-left">
        {!! form($client_form) !!}
    </div>
</div>
@endsection

@csrf