@extends('components.layouts.app')
@section('content')
    @livewire('game-details', ['id' => Route::current()->parameter('id')])
@endsection
