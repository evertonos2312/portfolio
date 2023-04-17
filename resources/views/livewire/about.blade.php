<div class="bg-grey-50" id="about">
    <div class="container flex flex-col items-center py-16 md:py-20 lg:flex-row">
        <div class="w-full text-center sm:w-3/4 lg:w-3/5 lg:text-left">
            <h2 class="font-header text-4xl font-semibold uppercase text-primary sm:text-5xl lg:text-6xl">
                Quem eu sou?
            </h2>
            <h4 class="pt-6 font-header text-xl font-medium text-black sm:text-2xl lg:text-3xl">
                Olá, meu nome é Everton e sou Programador PHP.
            </h4>
            <p class="pt-6 font-body leading-relaxed text-grey-20">
                @if(isset($profile->description))
                    {!! $profile->description  !!}
                @endif
            </p>
            @if(isset($profile->linkedin_url))


            <div class="flex flex-col justify-center pt-6 sm:flex-row lg:justify-start">
                <div class="flex  justify-center sm:justify-start">
                    <p class="font-body text-lg font-semibold uppercase text-grey-20">
                        Conecte-se comigo
                    </p>
                    <div class="hidden sm:block">
                        <i class="bx bx-chevron-right text-2xl text-primary"></i>
                    </div>
                </div>
                <div class="flex  justify-center pl-2 sm:justify-start sm:pt-0">
                    <a target="_blank" href="{{$profile->linkedin_url}}" class="pl-4">
                        <i class="bx bxl-linkedin text-2xl text-primary hover:text-yellow"></i>
                    </a>
                    <a target="_blank" href="{{$profile->github_url}}" class="pl-4">
                        <i class="bx bxl-github text-2xl text-primary hover:text-yellow"></i>
                    </a>
                </div>
            </div>
            @endif
        </div>
        <div class="w-full pl-0 pt-10 sm:w-3/4 lg:w-2/5 lg:pl-12 lg:pt-0">
            <div>
                <div class="flex items-end justify-between">
                    <h4 class="font-body font-semibold uppercase text-black">
                        HTML & CSS
                    </h4>
                    <h3 class="font-body text-3xl font-bold text-primary">85%</h3>
                </div>
                <div class="mt-2 h-3 w-full rounded-full bg-lila">
                    <div class="h-3 rounded-full bg-primary" style="width: 85%"></div>
                </div>
            </div>
            <div class="pt-6">
                <div class="flex items-end justify-between">
                    <h4 class="font-body font-semibold uppercase text-black">Python</h4>
                    <h3 class="font-body text-3xl font-bold text-primary">70%</h3>
                </div>
                <div class="mt-2 h-3 w-full rounded-full bg-lila">
                    <div class="h-3 rounded-full bg-primary" style="width: 70%"></div>
                </div>
            </div>
            <div class="pt-6">
                <div class="flex items-end justify-between">
                    <h4 class="font-body font-semibold uppercase text-black">
                        Javascript
                    </h4>
                    <h3 class="font-body text-3xl font-bold text-primary">98%</h3>
                </div>
                <div class="mt-2 h-3 w-full rounded-full bg-lila">
                    <div class="h-3 rounded-full bg-primary" style="width: 98%"></div>
                </div>
            </div>
            <div class="pt-6">
                <div class="flex items-end justify-between">
                    <h4 class="font-body font-semibold uppercase text-black">Figma</h4>
                    <h3 class="font-body text-3xl font-bold text-primary">91%</h3>
                </div>
                <div class="mt-2 h-3 w-full rounded-full bg-lila">
                    <div class="h-3 rounded-full bg-primary" style="width: 91%"></div>
                </div>
            </div>
        </div>
    </div>
</div>
