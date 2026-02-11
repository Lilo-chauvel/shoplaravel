@extends('layouts.app')

@section('title', 'A propos - VeloSprint')

@section('content')
        <div class="card shadow-sm border-0">
            <div class="card-body p-4">
                <form action="{{ route('carts.store') }}" method="POST">
                    @csrf
                    <label for="product">Vélo : </label>
                    <select name="product" id="product">
                        @foreach ($products as $product)
                            <option value="{{ $product->id }}" data-price="{{ $product->price }}">{{ $product->name }} -
                                {{ $product->price }}€</option>
                        @endforeach
                    </select>
                    <br>
                    <label for="quantity">Quantité</label>
                    <input type="number" name="quantity" id="quantity" min="0" value="1">
                    <br><br>
                    <p><strong>Prix total : <span id="total">0.00</span>€</strong></p>
                    <button type="submit">Valider</button>
                </form>

                <script src="{{ asset('js/order-total.js') }}"></script>
            </div>
        </div>
@endsection