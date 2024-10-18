@extends('components.layout')

@section('title', 'Welcome Page')

@section('content')
    <div class="head text-center mb-4">
        <h2>Welcome to my webpage!</h2>
        <p>Get to know me!</p>
    </div>

    <a href="{{ url('/Content') }}">
        <div class="section">
            <i class="bi bi-arrow-right icon"></i>
            <h2>Introduction</h2>
            <p>Hello There! On this page, you will see an introduction about myself.</p>
        </div>
    </a>

    <a href="{{ url('/Cv') }}">
        <div class="section">
            <i class="bi bi-arrow-right icon"></i>
            <h2>My CV</h2>
            <p>On this page, you will see my educational background as well as my skills.</p>
        </div>
    </a>

    <a href="{{ url('/About') }}">
        <div class="section">
            <i class="bi bi-arrow-right icon"></i>
            <h2>My Social Media Accounts</h2>
            <p>On this page, you will see all my social media accounts. Come and let's be friends!</p>
        </div>
    </a>
@endsection
