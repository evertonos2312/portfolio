@extends('layouts.admin.admin')
@section('content')
    <div class="content-header">
        <h2 class="content-title">Experiências</h2>
        <div>
            <a href="{{ route('experiences.create') }}" class="btn btn-primary"><i class="material-icons md-plus"></i> Adicionar novo</a>
        </div>
    </div>
    <div class="card mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">Título</th>
                        <th scope="col">Iniciado em</th>
                        <th scope="col" class="text-end"> Ações </th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($experiences as $experience)
                    <tr>
                        <td><b>{{ $experience->title }}</b></td>
                        <td>{{ $experience->start_at }}</td>
                        <td class="text-end">
                            <div class="dropdown">
                                <a href="#" data-bs-toggle="dropdown" class="btn btn-light"> <i
                                        class="material-icons md-more_horiz"></i> </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Editar</a>
                                    <a class="dropdown-item text-danger" href="#">Excluir</a>
                                </div>
                            </div> <!-- dropdown //end -->
                        </td>
                    </tr>
                    @empty
                    @endforelse

                    </tbody>
                </table>
            </div> <!-- table-responsive //end -->
        </div> <!-- card-body end// -->
    </div> <!-- card end// -->


@endsection
