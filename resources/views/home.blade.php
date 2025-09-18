@extends('layouts.app')
@section('title', 'Home')
@section('content')

@include('components.hero')
@include('components.portfolio')
@include('components.services')
@include('components.about')
@include('components.contact')

@endsection
