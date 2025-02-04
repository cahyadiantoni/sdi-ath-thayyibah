@extends('fe.layouts.main')

@section('title', 'Artikel Kami ! SDI Ath Thayyibah')

@section('page-title', 'Artikel Kami')
@section('page-description', 'Berikut adalah artikel artikel dari SD Islam Ath Thayyibah "Unggul Berkarakter!"')
@section('prev-page-title', 'Home')
@section('prev-page-link', '{{ url("/") }}')

@section('content')
    @include('fe.components.page-title')
    @include('fe.components.artikel')
@endsection()