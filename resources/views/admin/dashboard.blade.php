@extends('layouts.admin')

@section('content')
    <h1 class="text-center mt-5">Ciao {{ Auth::user()->name }}</h1>
@endsection