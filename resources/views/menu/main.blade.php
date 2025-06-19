@extends('auth.layout')

@section("content")

<div class="content">
    {{-- <p>Click <a href="https://example.com" target="_blank">here</a> to visit an example page.</p> --}}
    
    <div class="container">
        <h1>Roll da Dice!</h1>

        {{-- <button class="copper"  onclick="alert('Button 1 clicked!')">Loot box - common</button> --}}
        <button class="silver"  onclick="alert('Button 1 clicked!')">Loot box - common</button>
        <button class="silver"  onclick="alert('Button 1 clicked!')">Loot box - rare</button>
        <button class="gold"    onclick="alert('Button 1 clicked!')">Loot box - epic</button>

        <p>// drops</p>
    </div>
</div>
@endsection
