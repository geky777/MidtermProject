@extends('components.layout')

@section('title', 'Lab Act 2')

@section('content')

<div class="container-about mt-5">  
<h2><b>Lab Activity - 2 </b></h2>
    <div class="card-grid">
    @php
        $cards = [
            [
                'title' => 'Routes',
                'content' => 'Defining named routes',
                'image' => 'l2-1.png',
                'link' => ''
            ],

            [
                'title' => 'Welcome Modal',
                'content' => 'Starts the home page with the "welcome guest" Modal',
                'image' => 'l2-2.png',
                'link' => ''
            ],

            [
                'title' => 'Usage of Named routes',
                'content' => 'Usage of the named routes',
                'image' => 'l2-3.png',
                'link' => ''
            ],

            [
                'title' => 'The Welcome page with the routes implemented in it',
                'content' => 'After entering the the welcome guest the user would see this home page',
                'image' => 'l2-4.png',
                'link' => ''
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
    <br>
    <br>
    <p>In Lab Activity 2 We have used the Named routing so that the navigation for each page and the usage of routes would be eaiser just by refferencing the name of the route</p>
    </div>    
@endsection
