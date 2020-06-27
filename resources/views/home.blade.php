@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center">Patient Records</h1>
    <a href="{{route('new-patient')}}"  class="btn btn-success mb-3">Add New Record</a>
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">Patient Name</th>
            <th scope="col">Age</th>
            <th scope="col">Address</th>
            <th scope="col">Description</th>
        </tr>
        </thead>
        <tbody>

            @foreach($patients as $patient)
                <tr>
                    <th scope="row">{{$patient->name}}</th>
                    <td>{{$patient->age}}</td>
                    <td>{{$patient->address}}</td>
                    <td><a href="{{route('admin.show',$patient->id)}}" class="btn btn-primary" >Show</a></td>
                </tr>

                @endforeach


        </tbody>
    </table>
</div>
@endsection
