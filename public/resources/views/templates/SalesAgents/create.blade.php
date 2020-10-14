@extends('layouts.app',[
'title' => 'Sales Agents',
'navTab' => 'Saleagents',
'navTabSecondary' => 'create',
'az_content' => 'az-content-dashboard-ten'
])

@section('content')


<div class="az-content-body">
    <div class="az-content-body-left">
        {!! form($salesagent_form) !!}
    </div>
</div>
@endsection

@csrf