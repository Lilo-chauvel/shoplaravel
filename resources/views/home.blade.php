@extends('layouts.app')

@section('content')
    @if($shopInfo['isOpen'] === true) 
    <h1>Welcome to the world of{{ $shopInfo['name'] }}</h1>
    <p>We are delighted to welcome you to our new online shop. Explore our exclusive collections and enjoy a simplified shopping experience, powered by Laravel technology.</p>
    <p>Available product : {{ $shopInfo['nbProduct'] }}</p>
    @else 
        <p>Sorry the shop is Close </p>
    @endif
@endsection