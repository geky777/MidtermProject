@extends('components.layout')

@section('title', 'Lab Act 4')

@section('content')

<div class="container-about mt-5">  
<h2><b>Lab Activity 4 - Middleware </b></h2>
    <div class="card-grid">
    @php
        $cards = [
            [
                'title' => 'Creation of middleware',
                'content' => 'php artisan make:middleware',
                'image' => 'l4-1.png',
                'link' => ''
            ],

            [
                'title' => 'Registration of Middleware',
                'content' => 'Registered the middlewarep on the bootstrap/app.php',
                'image' => 'l4-2.png',
                'link' => ''
            ],

            [
                'title' => 'Assign middleware to routes',
                'content' => 'We assigned a certain middleware to a certain route to protect it',
                'image' => 'l4-3.png',
                'link' => ''
            ],

            [
                'title' => 'Middleware with parameters',
                'content' => 'The age as a parameter and a validation for the user to access some age restricted page',
                'image' => 'l4-4.png',
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
    <p>In Lab Activity 4 We utilized the middleware to protect certain pages by asking the user for their age if they are eligible to view some of the age restricted pages of our webpage</p>
    </div>    
@endsection
