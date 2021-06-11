@inject('date','App\Utilities\Date')

@extends('layouts/master')

@section('title',config('app.name'))
    
    @section('content')
           {{ $name }}


           @if($date::isWeekend())
                {{ "Va t'amuser" }}
           @else
                {{ "Va travailler" }} 
            @endif
    @endsection

    @push('scripts.footer')
    <script src="baa"></script>
    @endpush

           
            
    
    
