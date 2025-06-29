@extends('auth.layout')

@section("content")

<div class="content">
    {{-- <p>Click <a href="https://example.com" target="_blank">here</a> to visit an example page.</p> --}}
    
    <div class="container">
        <form action="{{ route('register.store') }}" method="post">
            @csrf
            <h1>REGISTER</h1>

            <input class="silver" type="text" placeholder="nickname" name="nickname" id="nickname">
            @error('nickname') <div>{{ $message }}</div> @enderror

            <input class="silver" type="text" placeholder="email" name="email" id="email">
            @error('email') <div>{{ $message }}</div> @enderror

            <input class="silver" type="password" placeholder="password" name="password" id="password">
            @error('password') <div>{{ $message }}</div> @enderror

            <input class="silver" type="password" placeholder="password repeat" name="password_confirmation" id="confirm-password">
            @error('password_confirmation') <div>{{ $message }}</div> @enderror

            <button class="gold" type="submit">REGISTER</button>
        </form>

        
        <p>Already have an account? click “<a href="/auth/login">here</a>”</p>
    </div>
</div>
@endsection
