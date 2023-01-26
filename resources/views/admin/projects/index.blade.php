@extends('layouts.admin.admin')

@section('content')
    <div class="container">
        <h1>Lista Progetti:</h1>
        <a href="{{ route('admin.projects.create') }}" class="btn btn-warning">Inserisci un nuovo progetto</a>
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
                        <td>{{ $project->slug }}</td>
                        <td>{{ $project->client }}</td>
                        <td>{{ $project->shipped_at }}</td>
                        <td><a href="{{ route('admin.projects.show', $project) }}" class="btn btn-primary">Dettagli</a></td>
                        <td><a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-warning">Modifica</a></td>
                        <td><a href="#" class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#ModalDelete{{ $project->id }}">{{ __('Delete') }}</a>

                            <!-- Delete Warning Modal -->

                            <div class="modal fade" id="ModalDelete{{ $project->id }}" tabindex="-1" role="dialog"
                                aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Cancella il progetto</h5>
                                            <button type="button" class="close" data-bs-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            {{-- <input type=hidden id="id" name=id> --}}
                                            <h5 class="text-center">Sei sicuro di cancellare
                                                {{ $project->name_project }}?
                                            </h5>
                                            <form action="{{ route('admin.projects.destroy', $project->id) }}"
                                                method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @method('DELETE')
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Annulla</button>
                                                    <button type="submit" class="btn btn-danger">Elimina</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Delete Modal -->
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endsection
</div>
