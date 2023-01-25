@extends('layouts.admin.admin')

@section('content')
    <div class="container">
        <h1>Lista Progetti:</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome Progetto</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">Data creazione</th>
                    <th scope="col">Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <td>{{ $project->id }}</td>
                        <td>{{ $project->name_project }}</td>
                        <td>{{ $project->summary }}</td>
                        <td>{{ $project->slug }}</td>
                        <td>{{ $project->client }}</td>
                        <td>{{ $project->shipped_at }}</td>
                        <td>...</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    @endsection
</div>
