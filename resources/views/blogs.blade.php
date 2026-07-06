@extends('layout')
@section('title', 'บทความ')
@section('content')
    <h2>บทความทั้งหมด</h2>
    <hr>
    @foreach ($blogs as $blog)
        <h3>{{ $blog['title'] }}</h3>
        <p>{{ $blog['content'] }}</p>
        @if ($blog['status'] == true)
            <p class="text-success">สถานะ : เผยแพร่</p>
        @else
            <p class="text-danger">สถานะ : ไม่เผยแพร่</p>
        @endif
        <hr>
    @endforeach
@endsection
