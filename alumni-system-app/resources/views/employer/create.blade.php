@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add Employer</h1>
    <form action="{{ route('employers.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="company_name">Company Name</label>
            <input type="text" name="company_name" id="company_name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="contact_name">Contact Name</label>
            <input type="text" name="contact_name" id="contact_name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="contact_email">Contact Email</label>
            <input type="email" name="contact_email" id="contact_email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="contact_phone">Contact Phone</label>
            <input type="text" name="contact_phone" id="contact_phone" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Add Employer</button>
    </form>
</div>
@endsection
