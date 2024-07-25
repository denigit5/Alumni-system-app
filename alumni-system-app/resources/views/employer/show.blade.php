@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $employer->company_name }}</h1>
    <p>Contact Name: {{ $employer->contact_name }}</p>
    <p>Contact Email: {{ $employer->contact_email }}</p>
    <p>Contact Phone: {{ $employer->contact_phone }}</p>

    <h2>Alumni</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>View Portfolio</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($alumni as $alumnus)
                <tr>
                    <td>{{ $alumnus->name }}</td>
                    <td>{{ $alumnus->email }}</td>
                    <td>
                        <a href="{{ route('portfolios.show', $alumnus->id) }}" class="btn btn-info">View Portfolio</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
