@extends('fe.layouts.main')

@section('title', 'Galeri Kami ! SDI Ath Thayyibah')

@section('page-title', 'Galeri Kami')
@section('page-description', 'Berikut adalah dokumentasi kegiatan dari SD Islam Ath Thayyibah "Unggul Berkarakter!"')
@section('prev-page-title', 'Home')
@section('prev-page-link', '{{ url("/") }}')

@section('content')
    @include('fe.components.page-title')
    @include('fe.components.galeri')
@endsection()