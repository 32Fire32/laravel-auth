@extends('layouts.admin.admin')

@section('content')
    <div class="container text-center">
        <h1>{{ $project->name_project }}</h1>
        @if ($project->project_logo_img)
            <div>
                <img class="w-25" src="{{ asset("storage/$project->project_logo_img") }}" alt="{{ $project->name_project }}">
            </div>
            <p>{!! $project->summary !!}</p>
        @endif
        <a href="{{ route('admin.projects.index') }}"class="btn btn-primary">Torna alla lista dei progetti</a>
    @endsection
