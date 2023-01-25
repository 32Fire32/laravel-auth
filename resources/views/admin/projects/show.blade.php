@extends('layouts.admin.admin')

@section('content')
    <div class="container text-center">
        <h1>{{ $project->name_project }}</h1>
        <p>{!! $project->summary !!}</p>
        <a href="{{ route('admin.projects.index') }}"class="btn btn-primary">Torna alla lista dei progetti</a>
    @endsection
