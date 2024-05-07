@extends('components.layouts.app')
@section('content')
@livewire('battles',['id' => Route::current()->parameter('id')])
@endsection