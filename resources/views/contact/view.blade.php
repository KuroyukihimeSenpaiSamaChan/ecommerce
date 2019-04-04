@extends('layout')

@section('content')
    <h1>Contact {{ $contact->id }}</h1>
    <div>
    <a href="/contacts/{{ $contact->id }}/edit">Edit</a>
    </div>

    <input type="email" disabled value="{{ $contact->email }}" />
    <p>
    <textarea cols="50" rows="10" disabled>{{ $contact->description }}</textarea>
    </p>
@endsection