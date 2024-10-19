@extends('components.layout')

@section('title', 'LabActs')

@section('content')
<div class="card-grid">
    
    @php
        $cards = [
            [
                'title' => 'Setup',
                'content' => 'Lab Act 1',
                'image' => 'Lab1.png',
                'link' => 'https://github.com/geky777/Laravel1stLabAct'
            ],

            [
                'title' => 'Routes',
                'content' => 'Lab Act 2',
                'image' => 'Lab2.png',
                'link' => 'https://github.com/jaor13/WebDev-Laboratory2'
            ],

            [
                'title' => 'Layouts',
                'content' => 'Lab Act 3',
                'image' => 'Lab3.png',
                'link' => 'https://github.com/jaor13/WebDev-Laboratory3'
            ],

            [
                'title' => 'Middleware',
                'content' => 'Lab Act 4',
                'image' => 'Lab4.png',
                'link' => 'https://github.com/jaor13/WebDev-Laboratory4'
            ],
        ];
    @endphp

    @foreach ($cards as $card) 
    <a href="{{ $card['link'] }}" class="card"> 
        <img src="{{ $card['image'] }}" alt="Card Image">
        <div class="card-content">
            <h3 class="card-title">{{ $card['title'] }}</h3>
            <p class="card-text">{{ $card['content'] }}</p>
        </div>
    </a>
    @endforeach
</div>
@endsection
