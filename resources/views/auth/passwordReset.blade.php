@extends('auth.layout')

@section("content")

<div class="content">
    {{-- <p>Click <a href="https://example.com" target="_blank">here</a> to visit an example page.</p> --}}
    
    <div class="container">
        <input class="silver" type="text" placeholder="email/name">
        <input class="silver" type="password" placeholder="password">
        <button class="gold" onclick="alert('Button 1 clicked!')">Sign up</button>
    </div>
</div>
@endsection
