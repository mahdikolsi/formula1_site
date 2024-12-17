@extends('layouts.app')

@section('content')
<div class="text-center p-4 mb-5 bg-secondary text-white">

    <h1>Welcome to Formula 1 Hub</h1>
    <p>Your source for the latest news, stats, and insights in the world of Formula 1.</p>
</div>

<h2 class="text-center mb-4">Latest News</h2>
<div class="row">
    <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm">
        <img src="{{ asset('storage/2.avif') }}" class="card-img-top" alt="News Image">
            <div class="card-body">
                <h5 class="card-title">New Engine Regulations</h5>
                <p class="card-text">Formula 1 has announced new engine regulations starting in 2026 to enhance sustainability...</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-4">
    <div class="card h-100 shadow-sm">
        <img src="{{ asset('storage/1.png') }}" class="card-img-top" alt="News Image">
        <div class="card-body">
            <h5 class="card-title">Hamilton vs Verstappen: Rivalry Continues</h5>
            <p class="card-text">The fierce rivalry between Hamilton and Verstappen heats up as they compete for the top position...</p>
            <a href="#" class="btn btn-primary">Read More</a>
        </div>
    </div>
</div>

    <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm">
        <img src="{{ asset('storage/3.jpg') }}" class="card-img-top" alt="News Image">
            <div class="card-body">
                <h5 class="card-title">Upcoming Grand Prix Highlights</h5>
                <p class="card-text">The brazilian Grand Prix promises exciting action as drivers prepare for one of the most challenging circuits...</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
        </div>
    </div>
</div>
@endsection
