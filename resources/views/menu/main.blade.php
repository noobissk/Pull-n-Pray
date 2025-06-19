@extends('auth.layout')

@section("content")
<div class="content">
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


        {{-- <p>{{ $loot ?? '// drops' }}</p> --}}
    </div>
</div>
@endsection
