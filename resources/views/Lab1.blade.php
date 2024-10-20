@extends('components.layout')

@section('title', 'LabActs')

@section('content')

<div class="container-about mt-5">  
<h2><b>Lab Activity 1 - Setup </b></h2>
    <div class="card-grid">
    @php
        $cards = [
            [
                'title' => 'Setup',
                'content' => 'Setting up and creating the first laravel project',
                'image' => 'l1-1.png',
                'link' => ''
            ],

            [
                'title' => 'Test run',
                'content' => 'php artisan serve / test run the laravel',
                'image' => 'l1-2.png',
                'link' => ''
            ],

            [
                'title' => 'Homepage',
                'content' => 'Creation of the homepage with the contents of introduction, MyCv and my social media accounts',
                'image' => 'l1-3.png',
                'link' => ''
            ],

            [
                'title' => 'Routes',
                'content' => 'In Lab Activity 1 We have first setup and installed larvel and made our very first laravel project',
                'image' => 'l1-4.png',
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
    <p>In Lab Activity 1 We have first setup and installed larvel and made our very first laravel project</p>
    </div>    
@endsection
