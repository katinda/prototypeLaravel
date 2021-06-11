@inject('date','App\Utilities\Date')

@extends('layouts/master')

@section('title',config('app.name'))

@section('content')
     <h1>DemdemAbout</h1>

@if($date::isWeekend())
    {{ "Va t'amuser" }}
@else
{{ "Va travailler" }} 
@endif

@endsection     

        
@section('footer')
  <h1>toto &copy; copyright 2021</h1> 

@section('scripts.footer')
<script src="https://code.code.jquery.com/jquery.min.js"></script>
@endsection    