@extends('layout')

@section('title', 'Customer Details')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 mt-5 ">
                <h3> Details for {{ $customer->name }}</h3>
                <p> <a href="/customers/{{$customer->id}}/edit">Edit </a></p>
            </div>
        </div>
        
        <div class="row">
            <div class="col-12 mt-5 ">
                <p> <strong> Name </strong> {{ $customer->name }}</p>
                <p> <strong> Email </strong> {{ $customer->email }}</p>
                <p> <strong> Company </strong> {{ $customer->company->name }}</p>
            </div>
        </div>
    </div>

@endsection