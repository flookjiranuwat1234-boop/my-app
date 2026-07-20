<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            [
                'id' => 1,
                'name' => 'Notebook',
                'price' => 25900,
                'stock' => 15
            ],
            [
                'id' => 2,
                'name' => 'Mouse',
                'price' => 590,
                'stock' => 50
            ],
            [
                'id' => 3,
                'name' => 'Keyboard',
                'price' => 1290,
                'stock' => 25
            ],
            [
                'id' => 4,
                'name' => 'Monitor',
                'price' => 4990,
                'stock' => 10
            ]
        ];

        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }
}