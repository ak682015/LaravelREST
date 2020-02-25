@extends('app')

@section('title', 'Services')

@section('content')

    <h1>
        In services
    </h1>

    
    {{-- @forelse ($services as $service)
        <li>{{ $service }}</li>
    @empty
        <li> No </li>
    @endforelse
 --}}

 
    <form action="/service" method="post">
        <input type="text" name="name">
        @csrf
        <button>Add Service</button>
    </form>

    <p>@error('name') {{ $message }} @enderror</p>

    @forelse ($services as $service)
        <li>{{ $service->name }}</li>
    @empty
        <li> No </li>
    @endforelse




@endsection