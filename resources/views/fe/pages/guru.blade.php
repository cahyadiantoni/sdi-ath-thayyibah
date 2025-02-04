@extends('fe.layouts.main')

@section('title', 'Guru & Staff ! SDI Ath Thayyibah')

@section('page-title', 'Guru & Staff')
@section('page-description', 'Susunan Guru dan Staff di SD Islam Ath Thayyibah "Unggul Berkarakter!"')
@section('prev-page-title', 'Home')
@section('prev-page-link', '{{ url("/") }}')

@section('content')
    @include('fe.components.page-title')
    @include('fe.components.guru')
@endsection()