@extends('layouts.app',[
'title' => 'User',
'navTab' => 'User',
'navTabSecondary' => 'create',
'az_content' => 'az-content-dashboard-ten'
])

@section('content')


<div class="az-content-body">
    <div class="az-content-body-left">
        {!! form($user_form) !!}
    </div>
</div>
@endsection

@csrf