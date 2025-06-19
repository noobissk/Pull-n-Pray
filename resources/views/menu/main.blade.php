@extends('auth.layout')

@section('content')
<div class="content">
    <div class="container">
        <h1>Roll da Dice!</h1>

        @if(session('drop'))
            <div class="mb-4 p-4 bg-green-100 rounded">
                <strong>You got:</strong> {{ session('drop')->name }}
                (rarity: {{ session('drop')->rarity }})
            </div>
        @endif

        <form action="{{ route('lootbox.common') }}" method="POST" class="inline-block">
            @csrf
            <button class="silver px-4 py-2">Loot box – common</button>
        </form>

        <form action="{{ route('lootbox.rare') }}" method="POST" class="inline-block">
            @csrf
            <button class="silver px-4 py-2">Loot box – rare</button>
        </form>

        <form action="{{ route('lootbox.epic') }}" method="POST" class="inline-block">
            @csrf
            <button class="gold px-4 py-2">Loot box – epic</button>
        </form>
        
        <button class="silver px-4 py-2" action="{{ route('inventory') }}" >View inventory</button>

        <a href="{{ route('inventory') }}">
            <button type="button">View Inventory</button>
        </a>


    </div>
</div>
@endsection
