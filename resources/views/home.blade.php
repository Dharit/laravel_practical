@extends('layouts.app')
@php 
    $gender = [0 => 'Male', 1 => 'Female', 2 => 'Other'];
@endphp
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">My Account Info:</div>
                <div class="panel-body">
                    <p class=""><strong>Name:</strong>  {{ Auth::user()->name }} </p>
                    <p class=""><strong>Email:</strong>  {{ Auth::user()->email }} </p>
                    <p class=""><strong>Address:</strong>  {{ Auth::user()->address }} </p>
                    <p class=""><strong>Gender:</strong>  {{ in_array(Auth::user()->gender,$gender)? $gender[Auth::user()->gender]:'' }} </p>
                    <p class=""><strong>Contact:</strong>  {{ Auth::user()->contact }} </p>
                    <p class=""><strong>Registered:</strong>  {{ Auth::user()->created_at->diffForHumans() }} </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
