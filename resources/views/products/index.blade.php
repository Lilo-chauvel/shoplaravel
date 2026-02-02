@extends('layouts.app')

@section('content')
<ul>
    @forelse ($products as $product)
        <li>{{ $product['name'] }}</li>
    @empty
    <li>No product</li>
    @endforelse
</ul>
@endsection