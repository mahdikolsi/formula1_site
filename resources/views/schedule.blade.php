@extends('layouts.app')

@section('content')
<div class="text-center p-4 mb-5 bg-secondary text-white">
    <h1>2024 Formula 1 Schedule</h1>
    <p>Stay updated with the complete race calendar for the 2024 season.</p>
</div>

<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Race</th>
                <th>Date</th>
                <th>Location</th>
            </tr>
        </thead>
        <tbody>
            @php
                $schedule = [
                    ['race' => 'Bahrain Grand Prix', 'date' => 'March 3, 2024', 'location' => 'Bahrain International Circuit, Sakhir'],
                    ['race' => 'Saudi Arabian Grand Prix', 'date' => 'March 17, 2024', 'location' => 'Jeddah Corniche Circuit, Jeddah'],
                    ['race' => 'Australian Grand Prix', 'date' => 'March 31, 2024', 'location' => 'Albert Park Circuit, Melbourne'],
                    ['race' => 'Chinese Grand Prix', 'date' => 'April 14, 2024', 'location' => 'Shanghai International Circuit, Shanghai'],
                    ['race' => 'Azerbaijan Grand Prix', 'date' => 'April 28, 2024', 'location' => 'Baku City Circuit, Baku'],
                    ['race' => 'Miami Grand Prix', 'date' => 'May 5, 2024', 'location' => 'Miami International Autodrome, Miami'],
                    ['race' => 'Monaco Grand Prix', 'date' => 'May 26, 2024', 'location' => 'Circuit de Monaco, Monte Carlo'],
                    ['race' => 'Spanish Grand Prix', 'date' => 'June 9, 2024', 'location' => 'Circuit de Barcelona-Catalunya, Barcelona'],
                    ['race' => 'Canadian Grand Prix', 'date' => 'June 16, 2024', 'location' => 'Circuit Gilles Villeneuve, Montreal'],
                    ['race' => 'British Grand Prix', 'date' => 'June 30, 2024', 'location' => 'Silverstone Circuit, Northamptonshire'],
                    ['race' => 'Hungarian Grand Prix', 'date' => 'July 21, 2024', 'location' => 'Hungaroring, Budapest'],
                    ['race' => 'Belgian Grand Prix', 'date' => 'July 28, 2024', 'location' => 'Circuit de Spa-Francorchamps, Spa'],
                    ['race' => 'Dutch Grand Prix', 'date' => 'August 25, 2024', 'location' => 'Circuit Zandvoort, Zandvoort'],
                    ['race' => 'Italian Grand Prix', 'date' => 'September 8, 2024', 'location' => 'Autodromo Nazionale Monza, Monza'],
                    ['race' => 'Singapore Grand Prix', 'date' => 'September 22, 2024', 'location' => 'Marina Bay Street Circuit, Singapore'],
                    ['race' => 'Japanese Grand Prix', 'date' => 'September 29, 2024', 'location' => 'Suzuka International Racing Course, Suzuka'],
                    ['race' => 'Qatar Grand Prix', 'date' => 'October 6, 2024', 'location' => 'Losail International Circuit, Doha'],
                    ['race' => 'United States Grand Prix', 'date' => 'October 20, 2024', 'location' => 'Circuit of the Americas, Austin'],
                    ['race' => 'Mexican Grand Prix', 'date' => 'October 27, 2024', 'location' => 'Autódromo Hermanos Rodríguez, Mexico City'],
                    ['race' => 'Brazilian Grand Prix', 'date' => 'November 3, 2024', 'location' => 'Interlagos, São Paulo'],
                    ['race' => 'Abu Dhabi Grand Prix', 'date' => 'November 17, 2024', 'location' => 'Yas Marina Circuit, Abu Dhabi'],
                ];
            @endphp

            @foreach ($schedule as $event)
            <tr>
                <td>{{ $event['race'] }}</td>
                <td>{{ $event['date'] }}</td>
                <td>{{ $event['location'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
