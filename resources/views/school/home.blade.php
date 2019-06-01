@extends('school.layouts.main')

@section('content')
    @include('school.dashboard.widget')
    @include('school.charts.index')
    @include('school.dashboard.roomlist')
    @include('school.dashboard.nextevent')
@endsection
