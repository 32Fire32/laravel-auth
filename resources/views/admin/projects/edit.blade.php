@extends('layouts.admin.admin')

@section('content')
    <div class="container">
        <h1>Modifica il progetto {{ $project->name_project }}</h1>
        <form action="{{ route('admin.projects.update', $project) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name_project" class="form-label">Nome del progetto*</label>
                <input type="text" class="form-control @error('name_project') is-invalid @enderror" id="name_project"
                    name="name_project" value="{{ old('name_project', $project->name_project) }}" required>
            </div>
            @error('name_project')
                <div class="alert alert-danger">{{ $message }} </div>
            @enderror
            <div class="mb-3">
                <label for="description">Riassunto*</label>
                <textarea class="form-control @error('summary') is-invalid @enderror " rows="2" placeholder="Leave a summary here"
                    id="summary" name="summary">{{ old('summary', $project->summary) }}</textarea>
            </div>
            @error('summary')
                <div class="alert alert-danger">{{ $message }} </div>
            @enderror
            <div class="mb-3">
                <label for="slug" class="form-label">Slug*</label>
                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug"
                    value="{{ old('slug', $project->slug) }}" required>
            </div>
            @error('slug')
                <div class="alert alert-danger">{{ $message }} </div>
            @enderror
            <div class="mb-3">
                <label for="client" class="form-label">Cliente*</label>
                <input type="text" class="form-control @error('client') is-invalid @enderror" id="client"
                    name="client" value="{{ old('client', $project->client) }}" required>
            </div>
            @error('client')
                <div class="alert alert-danger">{{ $message }} </div>
            @enderror
            <div class="mb-3">
                <label for="shipped_at" class="form-label">Data creazione*</label>
                <input type="date" class="form-control @error('shipped_at') is-invalid @enderror" id="shipped_at"
                    name="shipped_at" value="{{ old('shipped_at', $project->shipped_at) }}" required>
            </div>
            @error('shipped_at')
                <div class="alert alert-danger">{{ $message }} </div>
            @enderror
            <button type="submit" class="btn btn-primary">Modifica</button>
            <button type="reset" class="btn btn-secondary">Annulla</button>
        </form>
    </div>
@endsection
