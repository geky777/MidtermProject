@extends('components.layout')

@section('title', 'Social Media and Gaming Profiles')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Welcome to my Profiles!</h2>

    <div class="section-title">Social Media Platforms</div>
    <ul class="list-group">
        <li class="list-group-item">
            <a href="https://open.spotify.com/user/22vj4vorgtpxlst33hhcbcxoa" target="_blank" rel="noopener noreferrer">
                <i class="bi bi-spotify"></i> Spotify
            </a>
        </li>
        <li class="list-group-item">
            <a href="https://www.instagram.com/lzfaq.7.11/" target="_blank" rel="noopener noreferrer">
                <i class="bi bi-instagram"></i> Instagram
            </a>
        </li>
        <li class="list-group-item">
            <a href="https://www.facebook.com/zaro.quintanilla" target="_blank" rel="noopener noreferrer">
                <i class="bi bi-facebook"></i> Facebook
            </a>
        </li>
    </ul>

    <div class="section-title">Gaming Platforms</div>
    <ul class="list-group">
        <li class="list-group-item">
            <a href="https://store.steampowered.com" target="_blank" rel="noopener noreferrer">
                <i class="bi bi-steam"></i> Steam Account: Gekyume
            </a>
        </li>
        <li class="list-group-item">
            <a href="https://playvalorant.com" target="_blank" rel="noopener noreferrer">
                <i class="bi bi-controller"></i> Riot Account: plant#71717
            </a>
        </li>
    </ul>

    <div class="section-title">Donate Me!</div>
    <ul class="list-group">
        <li class="list-group-item">
            <a href="https://store.steampowered.com" target="_blank" rel="noopener noreferrer">
                <i class="bi bi-currency-dollar"></i> Support Me
            </a>
        </li>
    </ul>

    <div class="mt-4 text-center">
        <a href="http://127.0.0.1:8000" class="btn custom-btn">
            <i class="bi bi-house-door-fill"></i> Home
        </a>
    </div>
</div>
@endsection
