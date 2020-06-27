@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{route('save-patient')}}" method="post" id="form">
        @csrf
        <div class="form-group">
            <label for="name">Patient Name</label>
            <input type="text" id="name" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="age">Age</label>
            <input type="text" id="age" name="age" class="form-control">
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" id="address" name="address" class="form-control">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" id="description" name="description" class="form-control">
        </div>
        <button type="submit" class="btn btn-success mt-3">Save</button>
    </form>
</div>


@endsection

