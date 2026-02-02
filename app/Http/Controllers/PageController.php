<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $url = route('product.show',['productNumber'=> 10]);
        return 'Like generated : '. $url;
    }
    public function about()
    {
        return 'Bienvenue sur ShopLaravel, votre boutique en ligne de référence développée avec la puissance du framework Laravel. Nous nous engageons à vous offrir une expérience d\'achat moderne et fluide. Explorez notre catalogue pour découvrir les détails de nos produits et profiter d\'une interface optimisée pour vos besoins.';
    }
}