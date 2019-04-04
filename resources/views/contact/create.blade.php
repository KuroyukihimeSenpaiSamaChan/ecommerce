@extends('layout')

@section('content')
    <h1>Contact Form</h1>

    <form method="post" action="/contacts">
        @csrf
        <input type="email" name="email" placeholder="Your Email address" required />

        <p>
            <textarea name="description" placeholder="Description..." cols="50" rows="10" required></textarea>
        </p>

        <button type="submit">Send</button>
    </form>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection