@extends('fe.layouts.main')

@section('title', 'Home ! SDI Ath Thayyibah')

@section('content')
    @include('fe.components.hero')
    @include('fe.components.about')
    @include('fe.components.counts')
    @include('fe.components.calendar')
    @include('fe.components.kurikulum')
    @include('fe.components.struktur-kurikulum')
    @include('fe.components.alokasi-waktu')
@endsection()