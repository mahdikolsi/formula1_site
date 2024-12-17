@extends('layouts.app')

@section('content')
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Team Name</th>
                <th>Points</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($standings as $standing)
                <tr>
                    <td>{{ $standing->team_name }}</td>
                    <td>{{ $standing->points }}</td>
                    <td>
                        <a href="{{ route('standings.edit', $standing) }}" class="btn btn-primary">Edit</a>

                        <form action="{{ route('standings.destroy', $standing) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('standings.create') }}" class="btn btn-success">Add New Standing</a>

    <div class="tab-content mt-4">
        <!-- Drivers standings -->
        <div class="tab-pane fade show active" id="drivers">
            <h3>Drivers Standings</h3>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Position</th>
                        <th>Driver</th>
                        <th>Team</th>
                        <th>Points</th>
                        <th>Wins</th>
                        <th>Podiums</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $driversStandings = [
                        ['position' => 1, 'driver' => 'M. Verstappen', 'team' => 'Red Bull', 'points' => 362, 'wins' => 7, 'podiums' => 12],
                        ['position' => 2, 'driver' => 'L. Norris', 'team' => 'McLaren', 'points' => 315, 'wins' => 3, 'podiums' => 12],
                        ['position' => 3, 'driver' => 'C. Leclerc', 'team' => 'Ferrari', 'points' => 291, 'wins' => 3, 'podiums' => 11],
                        ['position' => 4, 'driver' => 'O. Piastri', 'team' => 'McLaren', 'points' => 251, 'wins' => 2, 'podiums' => 7],
                        ['position' => 5, 'driver' => 'C. Sainz Jr.', 'team' => 'Ferrari', 'points' => 240, 'wins' => 2, 'podiums' => 7],
                        ['position' => 6, 'driver' => 'L. Hamilton', 'team' => 'Mercedes', 'points' => 189, 'wins' => 2, 'podiums' => 4],
                        ['position' => 7, 'driver' => 'G. Russell', 'team' => 'Mercedes', 'points' => 177, 'wins' => 1, 'podiums' => 3],
                        ['position' => 8, 'driver' => 'S. Perez', 'team' => 'Red Bull', 'points' => 150, 'wins' => 0, 'podiums' => 4],
                        ['position' => 9, 'driver' => 'F. Alonso', 'team' => 'Aston Martin', 'points' => 62, 'wins' => 0, 'podiums' => 0],
                        ['position' => 10, 'driver' => 'N. Hulkenberg', 'team' => 'Haas', 'points' => 31, 'wins' => 0, 'podiums' => 0],
                    ];
                    @endphp

                    @foreach ($driversStandings as $standing)
                    <tr>
                        <td>{{ $standing['position'] }}</td>
                        <td>{{ $standing['driver'] }}</td>
                        <td>{{ $standing['team'] }}</td>
                        <td>{{ $standing['points'] }}</td>
                        <td>{{ $standing['wins'] }}</td>
                        <td>{{ $standing['podiums'] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Constructors standings -->
        <div class="tab-pane fade" id="constructors">
            <h3>Constructors Standings</h3>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Position</th>
                        <th>Team</th>
                        <th>Points</th>
                        <th>Wins</th>
                        <th>Podiums</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $constructorsStandings = [
                        ['position' => 1, 'team' => 'McLaren', 'points' => 566, 'wins' => 5, 'podiums' => 19],
                        ['position' => 2, 'team' => 'Ferrari', 'points' => 537, 'wins' => 5, 'podiums' => 18],
                        ['position' => 3, 'team' => 'Red Bull', 'points' => 512, 'wins' => 7, 'podiums' => 16],
                        ['position' => 4, 'team' => 'Mercedes', 'points' => 366, 'wins' => 3, 'podiums' => 7],
                        ['position' => 5, 'team' => 'Aston Martin', 'points' => 86, 'wins' => 0, 'podiums' => 0],
                    ];
                    @endphp

                    @foreach ($constructorsStandings as $standing)
                    <tr>
                        <td>{{ $standing['position'] }}</td>
                        <td>{{ $standing['team'] }}</td>
                        <td>{{ $standing['points'] }}</td>
                        <td>{{ $standing['wins'] }}</td>
                        <td>{{ $standing['podiums'] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
