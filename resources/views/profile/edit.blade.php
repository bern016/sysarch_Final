@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Profile</h2>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form method="POST" action="{{ route('profile.update') }}">
        @csrf
        <label>Name:</label>
        <input type="text" name="name" value="{{ old('name', auth()->user()->name) }}" required>
        @error('name') <div class="text-danger">{{ $message }}</div> @enderror

        <label>Email:</label>
        <input type="email" name="email" value="{{ old('email', auth()->user()->email) }}" required>
        @error('email') <div class="text-danger">{{ $message }}</div> @enderror

        <button type="submit" class="btn btn-primary mt-2">Update</button>
    </form>
</div>
@endsection
