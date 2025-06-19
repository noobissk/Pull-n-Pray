@extends('auth.layout')

@section("content")

<div class="content">
    {{-- <p>Click <a href="https://example.com" target="_blank">here</a> to visit an example page.</p> --}}
    
    <div class="container">
        <h1>Roll da Dice!</h1>

                <form action="{{ route('lootbox.common') }}" method="POST" style="display: inline;">
            @csrf
            <button class="silver" type="submit">Loot box - common</button>
        </form>

        <form action="{{ route('lootbox.rare') }}" method="POST" style="display: inline;">
            @csrf
            <button class="silver" type="submit">Loot box - rare</button>
        </form>

        <form action="{{ route('lootbox.epic') }}" method="POST" style="display: inline;">
            @csrf
            <button class="gold" type="submit">Loot box - epic</button>
        </form>


        <p>// drops</p>
    </div>
</div>
@endsection
