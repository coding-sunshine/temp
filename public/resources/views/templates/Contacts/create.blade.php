@extends('layouts.app',[
'title' => 'Contacts',
'navTab' => 'Contacts',
'navTabSecondary' => 'create',
'az_content' => 'az-content-dashboard-ten'
])

@section('content')


<div class="az-content-body">
    <div class="az-content-body-left">
        {!! form($contact_form) !!}
    </div>
</div>
@endsection

@csrf