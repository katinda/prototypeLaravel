@inject('date','App\Utilities\Date')

@extends('layouts/master')

@section('content')
     <h1>DemdemHelp</h1>

@if($date::isWeekend())
    {{ "Va t'amuser" }}
@else
    {{ "Va travailler" }} 
@endif

@endsection            
 