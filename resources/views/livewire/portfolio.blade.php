<div class="container py-16 md:py-20" id="portfolio">
    <h2 class="text-center font-header text-4xl font-semibold uppercase text-primary sm:text-5xl lg:text-6xl">
        Confira meu portfólio
    </h2>
    <h3 class="pt-6 text-center font-header text-xl font-medium text-black sm:text-2xl lg:text-3xl">
        Alguns dos meus últimos projetos
    </h3>

    <div class="mx-auto grid w-full grid-cols-1 gap-8 pt-12 sm:w-3/4 md:gap-10 lg:w-full lg:grid-cols-2" id="gallery" data-bs-toggle="modal"  data-bs-target="#exampleModal">
        @forelse($projects as $project)
            <div class="mx-auto transform transition-all hover:scale-105 md:mx-0">
                @if(isset($project->image) && \Illuminate\Support\Facades\Storage::exists('public/'.$project->image))
                    <img data-bs-target="#carouselExample" data-bs-slide-to="{{ $loop->index }}" src="{{ asset('storage/'. $project->image)}}" class="w-full shadow" alt="{{  $project->name }}" />
                @else
                    <img data-bs-target="#carouselExample" data-bs-slide-to=" {{ $loop->index }}" src="{{Vite::asset('resources/assets/img/portfolio-apple.jpeg')}}" class="w-full shadow" alt="portfolio image" />
                @endif
            </div>
        @empty
        @endforelse
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div id="carouselExample" class="carousel carousel-dark slide" data-bs-ride="carousel" data-bs-interval="false">
                        <div class="carousel-inner">
                            @forelse($projects as $project)
                                <div class="carousel-item @if($loop->first) active @endif">
                                    <div class="d-flex justify-content-center">
                                        <div class="w-75">
                                            <div class="d-lg-flex">
                                                <div class="col-sm-12 col-md-8 col-lg-8">
                                                    @if(isset($project->image) && \Illuminate\Support\Facades\Storage::exists('public/'.$project->image))
                                                        <img class="w-100" src="{{ asset('storage/'. $project->image)}}" alt="{{  $project->name }}">
                                                    @else
                                                        <img class="w-100" src="{{Vite::asset('resources/assets/img/portfolio-apple.jpeg')}}" alt="{{  $project->name }}">
                                                    @endif
                                                </div>
                                                <div class="lg:ml-5 col-sm-12 col-lg-4">
                                                    <h5>{{ $project->name }}</h5>
                                                    <p> <span class="font-bold">Tecnologias:</span> {{ $project->skills }}</p>
                                                    <p> <span class="font-bold">URL:</span> <a target="_blank" href="{{ $project->url }}">{{ $project->url }}</a></p>
                                                    <p>
                                                        {{ $project->description }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                            @endforelse
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Anterior</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Próxima</span>
                        </button>
                    </div>
                </div>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>
