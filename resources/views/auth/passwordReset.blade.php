@extends('auth.layout')

@section("content")

<div class="content">
    {{-- <p>Click <a href="https://example.com" target="_blank">here</a> to visit an example page.</p> --}}
    
    <div class="container">
        <h1>PASSWORD RESET</h1>

        <input class="silver" type="text" placeholder="email">
        <button class="gold" onclick="alert('Button 1 clicked!')">SUBMIT</button>

        <p>To resend email, click “<a href="/auth/password-reset">here</a>”</p>
    </div>
</div>
@endsection
