@extends('layouts.app')

{{-- 2 vabe kora jay --}}
{{-- @section('title', 'About us') --}}
@section('title')
    About us
@endsection

{{-- For content --}}
@section('contenent')
    This is my about page.. it is showing throughout the section part
@endsection

@push('styles')
    <link rel="stylesheet" href="aboutstyle.css">
@endpush
