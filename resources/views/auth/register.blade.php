@extends('auth.layout')

@section("content")

<div class="content">
    {{-- <p>Click <a href="https://example.com" target="_blank">here</a> to visit an example page.</p> --}}
    
    <div class="container">
        <h1>REGISTER</h1>

        <input class="silver" type="text" placeholder="nickname">
        <input class="silver" type="text" placeholder="email">
        
        <input class="silver" type="password" placeholder="password">
        <input class="silver" type="password" placeholder="password repeat">

        <button class="gold" onclick="alert('Button 1 clicked!')">REGISTER</button>
        
        <p>Already have an account? click “<a href="/auth/login">here</a>”</p>
    </div>
</div>
@endsection
