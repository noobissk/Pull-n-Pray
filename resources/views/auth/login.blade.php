@extends('auth.layout')

@section("content")

<div class="content">
    {{-- <p>Click <a href="https://example.com" target="_blank">here</a> to visit an example page.</p> --}}
    
    <div class="container">
        <h1>LOG IN</h1>
        <form action="{{ route('login.store') }}" method="POST">
            @csrf
            <input class="silver" type="text" placeholder="email/nickname" name="login"> {{-- FIXED HERE --}}
            <input class="silver" type="password" placeholder="password" name="password">
            <button class="gold" type="submit">LOG IN</button>
        </form>



        <p>Forgot password? Click “<a href="/auth/password-reset">here</a>”</p>
        <p>Don't have an account? Click “<a href="/auth/register">here</a>”</p>
    </div>
</div>
@endsection
