@extends('Dashboard.Owner.layouts.app')
@section('BEATRECORDS', 'Welcome to StudioSpace')
@section('nav')
@include('layouts.nav')
@endsection
@section('addStudios')
@include('Dashboard.Owner.layouts.addStudios')
@endsection
@section('editStudios')
@include('Dashboard.Owner.layouts.editStudios')
@endsection
@section('main')
@include('Dashboard.Owner.layouts.main')
@endsection
