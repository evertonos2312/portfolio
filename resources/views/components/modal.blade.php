<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Adicionar Linguagem</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('language.create') }}">
                    @csrf

                    <div class="row mb-3">
                        <div class="">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nome') }}</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required>


                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="">
                            <label for="percent" class="col-md-4 col-form-label text-md-end">{{ __('Nível') }}</label>
                            <input onInput="$('#rangeval').html($(this).val())" id="percent" type="range" min="1" max="100" step="1" class="form-range @error('percent') is-invalid @enderror" name="percent" value="{{ old('percent') }}" required>
                            <span id="rangeval">50</span>
                            @error('percent')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">
                            {{ __('Salvar') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
