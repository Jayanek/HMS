@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    {{$patient->name}}
                </div>
                <div class="card-body">
                    <h5 class="card-title">Age : {{$patient->age}}</h5>
                    <p class="card-text">Description : {{$patient->description}}</p>
                    <a href="#" class="btn btn-primary">Edit</a>
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>

@endsection
