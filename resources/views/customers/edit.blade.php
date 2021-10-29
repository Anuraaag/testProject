@extends('layouts.app')

@section('title', 'Edit customer details')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-6 mt-5 ">
                <h3>Edit details for {{ $customer->name }}</h3>

                <form action="/customers/{{ $customer->id }}" method="POST">
                    @method('PATCH')
                    @include('customers.form')

                    <button type="submit" class="mt-5 btn btn-primary">Update</button>
                </form>
            
            </div>

        </div>
        
            
    </div>

@endsection