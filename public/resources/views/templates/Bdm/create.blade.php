@extends('layouts.app',[
'title' => 'Bdm',
'navTab' => 'Bdm',
'navTabSecondary' => 'create',
'az_content' => 'az-content-dashboard-ten'
])

@section('content')


<div class="az-content-body">
    <div class="az-content-body-left">
        {!! form($bdm_form) !!}
    </div>
</div>
@endsection

@csrf