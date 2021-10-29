@extends('layouts.app')

@section('title', 'Add new customer')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-6 mt-5 ">
                <h3>Add new customer</h3>

                <form action="/customers" method="POST">
                    @include('customers.form') 

                    <button type="submit" class="mt-5 btn btn-primary">Add Customer</button>
                </form>
            
            </div>

        </div>
    </div>
@endsection