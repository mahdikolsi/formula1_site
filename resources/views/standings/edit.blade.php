@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Standing</h1>
    <form action="{{ route('standings.update', $standing->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="team_name" class="form-label">Team Name</label>
            <input type="text" name="team_name" id="team_name" class="form-control" value="{{ old('team_name', $standing->team_name) }}" required>
        </div>
        <div class="mb-3">
            <label for="points" class="form-label">Points</label>
            <input type="number" name="points" id="points" class="form-control" value="{{ old('points', $standing->points) }}" required>
        </div>
        <div class="mb-3">
            <label for="wins" class="form-label">Wins</label>
            <input type="number" name="wins" id="wins" class="form-control" value="{{ old('wins', $standing->wins) }}" required>
        </div>
        <div class="mb-3">
            <label for="losses" class="form-label">Losses</label>
            <input type="number" name="losses" id="losses" class="form-control" value="{{ old('losses', $standing->losses) }
