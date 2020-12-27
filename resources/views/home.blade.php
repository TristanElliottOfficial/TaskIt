@extends('layouts.app')

@section('content')
  <header class="flex justify-between items-center px-4 py-6 border-b">
    <div class="flex">
      <div class="text-5xl">
        <i class="fas fa-tachometer-alt text-purple-600 pr-3"></i>
      </div>
      <div class="">
        <h1 class="text-2xl font-light text-gray-700">Dashboard</h1>
        <p class="text-xs font-light text-gray-400">Welcome to your dashboard</p>
      </div>
    </div>
    <div class="">
      <a href="#" class="bg-green-500">Action Button</a>
    </div>
  </header>
@endsection
