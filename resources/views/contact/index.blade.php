@extends('layout')

@section('content')
    <div>
        <a href="/contacts/create">Create</a>
    </div>
    <table>
        <thead>
            <tr>
                <th>Email</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contacts as $contact)
                <tr>
                    <td>Email: {{ $contact->email }}</td>
                    <td>{{ $contact->description }}</td>
                    <td><a href="/contacts/{{ $contact->id }}">View</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection