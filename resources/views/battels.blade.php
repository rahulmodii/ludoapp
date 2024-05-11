@extends('components.layouts.app')
@section('content')
@livewire('battles',['id' => Route::current()->parameter('id'),'tabId'=>Route::current()->parameter('tabId')])
@endsection