@extends('school.layouts.main')

@section('content')
    @if(!$profileSchool->address)
        @include('school.dashboard.completeProfile')
    @endif

    @include('school.dashboard.widget')
    @include('school.charts.index')
    @include('school.dashboard.roomlist')
    @include('school.dashboard.nextevent')
@endsection
