@extends('auth.layout')

@section("content")

<div class="content">
    {{-- <p>Click <a href="https://example.com" target="_blank">here</a> to visit an example page.</p> --}}
    
    <div class="container">
        <h1>VERIFICATION</h1>

        <input class="silver" type="text" placeholder="code">
        <button class="gold" onclick="alert('Button 1 clicked!')">SUBMIT</button>

        <p>Forgot password? Click “<a href="/auth/password-reset">here</a>”</p>
        {{-- <p>To resend email, click “<a href="/auth/">here</a>”</p> --}}
    </div>
</div>
@endsection
