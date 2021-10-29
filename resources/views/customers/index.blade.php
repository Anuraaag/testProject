@extends('layouts.app')

@section('title', 'Customers')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 mt-5">
                <p class="mb-3"><a href="customers/create">Add new customer</a></p>
                <h3 class="mb-4">Customer Details</h3>
                <table class="table mb-5">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Company</th>
                            <th scope="col">Category</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($customers as $customer) 
                            <tr>
                                <td> <a href="/customers/{{ $customer->id }}"> {{ $customer->name }} </a></td>
                                <td> {{ $customer->email }} </td>
                                <td> {{ $customer->company->name }} </td>
                                <td> {{ $customer->category }} </td>
                            </tr>
                        @endforeach    
                    </tbody>
                </table>
            </div>



        </div>
        
            
    </div>

@endsection