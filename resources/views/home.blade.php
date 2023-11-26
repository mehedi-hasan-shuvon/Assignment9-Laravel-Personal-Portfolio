@extends('Layout.MasterLayout')


@section('content')
    @include('components.hero')
    @include('components.skills')
    @include('components.projects')
    @include('components.about')
    @include('components.cv')
    @include('components.contact')

@endsection