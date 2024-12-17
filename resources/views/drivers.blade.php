@extends('layouts.app')

@section('content')
<div class="text-center p-4 mb-5 bg-secondary text-white">
    <h1>Formula 1 Drivers 2024</h1>
    <p>Meet the talented drivers competing this season in Formula 1.</p>
</div>

<div class="row">
    @php
    $drivers = [
    ['name' => 'Max Verstappen', 'team' => 'Red Bull Racing', 'nationality' => 'Dutch', 'bio' => 'The reigning World Champion, Verstappen is recognized for his aggressive driving and strategic acumen on track.', 'photo' => asset('storage/max.jpg')],
    ['name' => 'Sergio Pérez', 'team' => 'Red Bull Racing', 'nationality' => 'Mexican', 'bio' => 'Known for his tire management skills, Pérez is a key player in Red Bull Racing’s strategy.', 'photo' => asset('storage/perez.jpg')],
    ['name' => 'Lewis Hamilton', 'team' => 'Mercedes', 'nationality' => 'British', 'bio' => 'A seven-time World Champion, Hamilton is known for his speed, skill, and activism in promoting diversity in motorsport.', 'photo' => asset('storage/hamilton.jpg')],
    ['name' => 'George Russell', 'team' => 'Mercedes', 'nationality' => 'British', 'bio' => 'Russell is known for his quick adaptation and performance, quickly becoming a key driver for Mercedes.', 'photo' => asset('storage/russ.jpg')],
    ['name' => 'Charles Leclerc', 'team' => 'Ferrari', 'nationality' => 'Monégasque', 'bio' => 'A young and highly skilled driver, Leclerc aims to lead Ferrari back to championship glory.', 'photo' => asset('storage/lecc.png')],
    ['name' => 'Carlos Sainz', 'team' => 'Ferrari', 'nationality' => 'Spanish', 'bio' => 'A consistent performer, Sainz brings speed and experience to the Ferrari team.', 'photo' => asset('storage/sainz.jpg')],
    ['name' => 'Lando Norris', 'team' => 'McLaren', 'nationality' => 'British', 'bio' => 'A rising star, Norris is known for his speed and charisma both on and off the track.', 'photo' => asset('storage/lando.jpg')],
    ['name' => 'Oscar Piastri', 'team' => 'McLaren', 'nationality' => 'Australian', 'bio' => 'A highly-rated rookie, Piastri is expected to impress with his driving talent.', 'photo' => asset('storage/osc.jpg')],
    ['name' => 'Fernando Alonso', 'team' => 'Aston Martin', 'nationality' => 'Spanish', 'bio' => 'A two-time World Champion, Alonso continues to impress with his experience and skill.', 'photo' => asset('storage/alonso.jpg')],
    ['name' => 'Lance Stroll', 'team' => 'Aston Martin', 'nationality' => 'Canadian', 'bio' => 'Stroll combines youth with experience and aims to contribute to Aston Martin\'s success.', 'photo' => asset('storage/str.jpg')],
    ['name' => 'Esteban Ocon', 'team' => 'Alpine', 'nationality' => 'French', 'bio' => 'Ocon is known for his resilience and has shown strong performances for Alpine.', 'photo' => asset('storage/occ.jpg')],
    ['name' => 'Pierre Gasly', 'team' => 'Alpine', 'nationality' => 'French', 'bio' => 'Gasly is a talented driver known for his speed and determination on the track.', 'photo' => asset('storage/gas.jpg')],
    ['name' => 'Valtteri Bottas', 'team' => 'Sauber', 'nationality' => 'Finnish', 'bio' => 'Bottas brings experience and speed to the Sauber team.', 'photo' => asset('storage/bot.jpg')],
    ['name' => 'Zhou Guanyu', 'team' => 'Sauber', 'nationality' => 'Chinese', 'bio' => 'The first Chinese driver in F1, Zhou is known for his determination and skill.', 'photo' => asset('storage/zho.jpg')],
    ['name' => 'Yuki Tsunoda', 'team' => 'Scuderia AlphaTauri', 'nationality' => 'Japanese', 'bio' => 'A young talent, Tsunoda has impressed with his pace and determination.', 'photo' => asset('storage/tsu.jpg')],
    ['name' => 'Daniel Ricciardo', 'team' => 'Scuderia AlphaTauri', 'nationality' => 'Australian', 'bio' => 'Returning to F1, Ricciardo brings experience and skill to the team.', 'photo' => asset('storage/ric.jpg')],
    ['name' => 'Kevin Magnussen', 'team' => 'Haas', 'nationality' => 'Danish', 'bio' => 'Magnussen is known for his aggressive style and experience in the sport.', 'photo' => asset('storage/mag.jpg')],
    ['name' => 'Nico Hülkenberg', 'team' => 'Haas', 'nationality' => 'German', 'bio' => 'Hülkenberg brings a wealth of experience and is known for his consistency.', 'photo' => asset('storage/hul.jpg')]
];

    @endphp

    @foreach ($drivers as $driver)
    <div class="col-md-4 mb-4">
        <div class="card">
            <img src="{{ $driver['photo'] }}" class="card-img-top" alt="{{ $driver['name'] }}">
            <div class="card-body">
                <h5 class="card-title">{{ $driver['name'] }}</h5>
                <p class="card-text"><strong>Team:</strong> {{ $driver['team'] }}</p>
                <p class="card-text"><strong>Nationality:</strong> {{ $driver['nationality'] }}</p>
                <p class="card-text">{{ $driver['bio'] }}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
