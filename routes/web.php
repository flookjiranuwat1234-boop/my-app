<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/abouts', function () {
    $name = "Jiranuwat Krasaeain";
    $date = "6 กรกฏาคม 2026";
    return view('abouts', compact('name', 'date'));
})->name('abouts');

Route::get('/blogs', function () {
    $blogs = [
        [
            'title' => 'บทความที่ 1',
            'content' => 'เนื้อหาบทที่ 1',
            'status' => true
        ],
        [
            'title' => 'บทความที่ 2',
            'content' => 'เนื้อหาบทที่ 2',
            'status' => true
        ],
        [
            'title' => 'บทความที่ 3',
            'content' => 'เนื้อหาบทที่ 3',
            'status' => false
        ]
    ];
    return view('blogs', compact('blogs'));
})->name('blogs');

