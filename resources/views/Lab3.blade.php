@extends('components.layout')

@section('title', 'Lab Act 3')

@section('content')

<div class="container-about mt-5">  
<h2><b>Lab Activity 3 - Layouts </b></h2>
    <div class="card-grid">
    @php
        $cards = [
            [
                'title' => 'Layout',
                'content' => 'Making the layout files on the views/componenst',
                'image' => 'l3-1.png',
                'link' => ''
            ],

            [
                'title' => 'Usage of the layout',
                'content' => 'The usage of the lay out on each web page',
                'image' => 'l3-2.png',
                'link' => ''
            ],

            [
                'title' => 'Layout output',
                'content' => 'The about page of the CWN and the output when we have used the Layout',
                'image' => 'l3-3.png',
                'link' => ''
            ],

            [
                'title' => 'Layout output',
                'content' => 'The layout output for the shop on CWN',
                'image' => 'l3-4.png',
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
    <p>In Lab Activity 3 We made a layout file for easier code reusage and for a well structed webpage</p>
    </div>    
@endsection
