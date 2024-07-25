@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Employers</h1>
    <a href="{{ route('employers.create') }}" class="btn btn-primary">Add Employer</a>
    <table class="table">
        <thead>
            <tr>
                <th>Company Name</th>
                <th>Contact Name</th>
                <th>Contact Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employers as $employer)
                <tr>
                    <td>{{ $employer->company_name }}</td>
                    <td>{{ $employer->contact_name }}</td>
                    <td>{{ $employer->contact_email }}</td>
                    <td>
                        <a href="{{ route('employers.show', $employer->id) }}" class="btn btn-info">View</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
