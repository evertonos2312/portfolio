@extends('layouts.admin.admin')
@section('content')

    <div class="content-header">
        <h2 class="content-title">Cadastrar nova experiência </h2>
        <div>
            <a href="{{ route('experiences.index') }}" class="btn btn-outline-danger"> &times; Cancelar</a>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-body">
            <form method="post" action="{{ route('experiences.store') }}" enctype="multipart/form-data">
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
                    <label for="title" class="form-label">Tìtulo</label>
                    <input type="text" placeholder="Digite aqui" name="title" class="form-control" id="title" value="{{ old('title') }}">
                </div>

                <div class="mb-4">
                    <label for="description" class="form-label">Descrição</label>
                    <textarea name="description" id="description" placeholder="Digite aqui" class="form-control" rows="4">{{ old('description') }}</textarea>
                </div>

                <div class="mb-4">
                    <label class="form-label">Imagem</label>
                    <input name="logo" accept="image/*" class="form-control" type="file">
                </div>
                <div class="mb-4">
                    <label for="start_at" class="form-label">Iniciado em</label>
                    <input type="text" name="start_at" id="start_at" class="form-control" {{ old('start_at') }}>
                </div>
                <div class="form-check">
                    <input class="form-check-input" name="current" type="checkbox" value="on" id="current"  {{ old('current') == 'on' ? 'checked' : '' }}>
                    <label class="form-check-label" for="current">
                        Atual
                    </label>
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
            $( "#start_at" ).datepicker();
            $( "#finished_at" ).datepicker();
        } );
    </script>


@endsection
