@extends('layout')

@section('title', 'Companies')

@section('content')

    <div class="container">
        <div class="row">

            <div class="col-12 mt-5">
                <p class="mb-3"><a href="companies/create">Add new Company</a></p>
                <h3 class="mb-4">Companies Details</h3>
                <table class="table mb-5">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Customers</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($companies as $company) 
                            <tr>
                                <td> {{ $company->name }} </td>
                                <td> {{ $company->phone }} </td>
                                <td>
                                    @foreach ($company->customers as $customer)
                                        {{ $customer->name }},
                                    @endforeach
                                </td>
                            </tr>
                        @endforeach    
                    </tbody>
                </table>
            </div>

        </div>
        
    </div>

@endsection