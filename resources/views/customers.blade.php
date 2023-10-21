@extends('Layouts.template')
@section('my-data')
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center text-info">Customers Data</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead class="text-center bg-secondary">
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Gender</th>
                                        <th>DOB</th>
                                        <th>Country</th>
                                        <th>State</th>
                                        <th>Address</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach ( $all_customers as $customers)
                                    <tr>
                                        <td>{{$i++ }}</td>
                                        <td>{{ $customers->name }}</td>
                                        <td>{{ $customers->email }}</td>
                                        <td>{{ $customers->gender }}</td>
                                        <td>{{ $customers->dob }}</td>
                                        <td>{{ $customers->country }}</td>
                                        <td>{{ $customers->state }}</td>
                                        <td>{{ $customers->address }}</td>
                                        
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection