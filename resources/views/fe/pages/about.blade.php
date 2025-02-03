@extends('fe.layouts.main')

@section('title', 'Tentang Kami ! SDI Ath Thayyibah')

@section('page-title', 'Tentang Kami')
@section('page-description', 'Profil SD Islam Ath Thayyibah "Unggul Berkarakter!"')
@section('prev-page-title', 'Home')
@section('prev-page-link', '{{ url("/") }}')

@section('content')
    @include('fe.components.page-title')
    @include('fe.components.about')
    @include('fe.components.counts')
    @include('fe.components.testimonial')
@endsection()