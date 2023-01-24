@extends('layouts.app')

{{-- Section with @show --}}

@section('grb')
    This is jobsblade ,,showing with @ show,, its work like when we do not declare in master page.

@show

@push('scripts')
    <script src="myscript.js"></script>
@endpush

@push('styles')
    <link rel="stylesheet" href="jobstyle.css">
@endpush
