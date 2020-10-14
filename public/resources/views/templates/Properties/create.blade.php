@extends('layouts.app',[
'title' => 'Afiliates',
'navTab' => 'Afiliates',
'navTabSecondary' => 'create',
'az_content' => 'az-content-dashboard-ten'
])

@section('content')


<div class="az-content-body">
    <div class="az-content-body-left">
        {!! form($afiliate_form) !!}
    </div>
</div>
@endsection

@csrf