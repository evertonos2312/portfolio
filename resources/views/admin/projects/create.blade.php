@extends('layouts.admin.admin')
@section('content')

    <div class="content-header">
        <h2 class="content-title">Cadastrar novo projeto </h2>
        <div>
            <a href="{{ route('projects.index') }}" class="btn btn-outline-danger"> &times; Cancelar</a>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-body">
            <form method="post" action="{{ route('projects.store') }}" enctype="multipart/form-data">
                @csrf
                @if ($errors->any())
                    <div class="text-red-500">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="mb-4">
                    <label for="name" class="form-label">Tìtulo</label>
                    <input type="text" placeholder="Digite aqui" name="name" class="form-control" id="name" value="{{ old('name') }}">
                </div>

                <div class="mb-4">
                    <label for="description" class="form-label">Descrição</label>
                    <textarea name="description" id="description" placeholder="Digite aqui" class="form-control" rows="4">{{ old('description') }}</textarea>
                </div>

                <div class="mb-4">
                    <label class="form-label">Imagem</label>
                    <input name="image" accept="image/*" class="form-control" type="file">
                </div>

                <div class="mb-4">
                    <label for="skills" class="form-label">Tecnologias utilizadas</label>
                    <input type="text" name="skills" id="skills" class="form-control" {{ old('skills') }}>
                </div>
                <div class="mb-4">
                    <label for="url" class="form-label">URL</label>
                    <input type="text" name="url" id="url" class="form-control" {{ old('url') }}>
                </div>
                <div class="mb-4">
                    <label for="finished_at" class="form-label">Terminado em</label>
                    <input type="text" name="finished_at" id="finished_at" class="form-control" {{ old('finished_at') }}>
                </div>
                <button type="submit" class="btn btn-primary">Salvar</button>

            </form>
        </div>
    </div> <!-- card end// -->
    <script>
        $( function() {
            $( "#finished_at" ).datepicker();
        } );
    </script>


@endsection
