@extends('layout')

@section('title', 'Customers')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 mt-5">
                <p class="mb-3"><a href="customers/create">Add new customer</a></p>
                <h3 class="mb-4">Active Customer Details</h3>
                <table class="table mb-5">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Company</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($activeCustomers as $customer) 
                            <tr>
                                <td> {{ $customer->name }} </td>
                                <td> {{ $customer->email }} </td>
                                <td> {{ $customer->company->name }} </td>
                            </tr>
                        @endforeach    
                    </tbody>
                </table>

                <h3 class="mb-4">Inactive Customer Details</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Company</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($inactiveCustomers as $customer) 
                            <tr>
                                <td> {{ $customer->name }} </td>
                                <td> {{ $customer->email }} </td>
                                <td> {{ $customer->company->name }} </td>
                            </tr>
                        @endforeach                        
                    </tbody>
                </table>
            </div>



        </div>
        
            
    </div>

@endsection