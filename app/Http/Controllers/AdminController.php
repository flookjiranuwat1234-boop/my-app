<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function about2() {
        $name = "Jiranuwat Krasaeain";
        $date = "6 กรกฏาคม 2026";
        return view('about2', compact('name', 'date'));
    }

    public function blog2() {
        $blog2 = [
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
        return view('blog2', compact('blog2'));
    }

    public function create() {
        return view('form');
    }
}
