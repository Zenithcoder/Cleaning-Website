@extends('layout.master')

@section('content')
    You received a message from Mitaneon.com :

<p>
Name: {{ $name }}
</p>

<p>
{{ $email }}
</p>

<p>
{{ $phone }}
</p>

<p>
{{ $user_message }}
</p>
           
@endsection