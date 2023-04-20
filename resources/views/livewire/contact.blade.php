<div class="container py-16 md:py-20" id="contact">
    <h2 class="text-center font-header text-4xl font-semibold uppercase text-primary sm:text-5xl lg:text-6xl">
        CONTATO
    </h2>
    <div class="mx-auto w-full pt-5 text-left sm:w-2/3 lg:pt-6">
        <p class="font-body text-grey-10">
            Caso queira entrar em contato comigo para novas oportunidades, conselhos ou apenas bater um papo, sinta-se à vontade para me contatar pelo
            <a target="_blank" href="">Linkedin</a>.
        </p>
    </div>
    <div class="flex flex-col pt-16 lg:flex-row flex justify-center">
        <div
            class="w-full border-2 border-grey-60 px-6 py-6 sm:py-8 lg:w-1/3">
            <div class="flex items-center justify-center">
                <i class="bx bx-envelope text-2xl text-grey-40"></i>
            </div>
            <p class="pt-2 text-center font-body font-bold text-primary lg:text-lg">
                <small><a href="mailto:{{ $profile->email }}">{{$profile->email}}</a></small>
            </p>
        </div>
        <div
            class="w-full border-2 border-grey-60 px-6 py-6 sm:py-8 lg:w-1/3">
            <div class="flex items-center justify-center">
                <i class="bx bxl-github text-2xl text-grey-40"></i>
            </div>
            <p class="pt-2 text-center font-body font-bold text-primary lg:text-lg">
                <small><a target="_blank" href="{{$profile->github_url}}">{{$profile->github_url}}</a></small>
            </p>
        </div>
        <div
            class="w-full border-2 border-grey-60 px-6 py-6 sm:py-8 lg:w-1/3">
            <div class="flex items-center justify-center">
                <i class="bx bxl-linkedin text-2xl text-grey-40"></i>
            </div>
            <p class="pt-2 text-sm text-center font-body font-bold text-primary lg:text-lg">
                <small><a target="_blank" href="{{$profile->linkedin_url}}">{{$profile->linkedin_url}}</a></small>
            </p>
        </div>
    </div>
</div>
