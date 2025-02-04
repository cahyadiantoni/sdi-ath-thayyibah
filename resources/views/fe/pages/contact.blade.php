@extends('fe.layouts.main')

@section('title', 'Kontak Kami ! SDI Ath Thayyibah')

@section('page-title', 'Kontak Kami')
@section('page-description', 'Berikut adalah kontak dan alamat dari SD Islam Ath Thayyibah "Unggul Berkarakter!"')
@section('prev-page-title', 'Home')
@section('prev-page-link', '{{ url("/") }}')

@section('content')
    @include('fe.components.page-title')
    @include('fe.components.contact')
@endsection()