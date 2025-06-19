@extends('auth.layout')

@section('content')
<div class="content">
    <div class="container">
        <h1>Your Inventory</h1>
        @if($items->isEmpty())
            <p>You have no items yet!</p>
        @else
            <ul>
            @foreach ($items as $item)
                <li>
                    {{ $item->name }} (x{{ $item->pivot->quantity }}) - {{ ucfirst($item->rarity) }}
                </li>
            @endforeach
            </ul>

        @endif

        <a href="{{ route('menu.index') }}">← Back to Menu</a>
    </div>
</div>
@endsection
