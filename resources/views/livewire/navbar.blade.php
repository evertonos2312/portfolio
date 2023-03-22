<div class="w-full z-50 top-0 py-3 sm:py-5  fixed bg-custom-gradient-to-r from-custom-hero-gradient-from to-hero-custom-gradient-to  ">
    <div class="container flex items-center justify-center">
        <div class="hidden lg:block">
            <ul class="flex items-center">
                <li class="group pl-6">
                <span @click="triggerNavItem('#about')"
                      class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white">Sobre mim</span>

                    <span class="block h-0.5 w-full bg-transparent group-hover:bg-yellow"></span>
                </li>
                <li class="group pl-6">
                <span @click="triggerNavItem('#portfolio')"
                      class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white">Portfólio</span>

                    <span class="block h-0.5 w-full bg-transparent group-hover:bg-yellow"></span>
                </li>
                <li class="group pl-6">

                <span @click="triggerNavItem('#work')"
                      class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white">Experiências</span>

                    <span class="block h-0.5 w-full bg-transparent group-hover:bg-yellow"></span>
                </li>
                <li class="group pl-6">
                <span @click="triggerNavItem('#blog')"
                      class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white">Blog</span>

                    <span class="block h-0.5 w-full bg-transparent group-hover:bg-yellow"></span>
                </li>

                <li class="group pl-6">

                <span @click="triggerNavItem('#contact')"
                      class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white">Contato</span>

                    <span class="block h-0.5 w-full bg-transparent group-hover:bg-yellow"></span>
                </li>
            </ul>
        </div>
        <div class="block lg:hidden">
            <button @click="mobileMenu = true">
                <i class="bx bx-menu text-4xl text-white"></i>
            </button>
        </div>
    </div>
</div>
<div
    class="pointer-events-none fixed inset-0 z-70 min-h-screen bg-black bg-opacity-70 opacity-0 transition-opacity lg:hidden"
    :class="{ 'opacity-100 pointer-events-auto': mobileMenu }">
    <div class="absolute right-0 min-h-screen w-2/3 bg-primary py-4 px-8 shadow md:w-1/3">
        <button class="absolute top-0 right-0 mt-4 mr-4" @click="mobileMenu = false">
            <img src="{{Vite::asset('resources/assets/img/icon-close.svg')}}" class="h-10 w-auto" alt="" />
        </button>
        <ul class="mt-8 flex flex-col">
            <li class="py-2">
              <span @click="triggerMobileNavItem('#about')"
                    class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white">Sobre mim</span>

            </li>


            <li class="py-2">

              <span @click="triggerMobileNavItem('#portfolio')"
                    class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white">Portfólio</span>

            </li>



            <li class="py-2">

              <span @click="triggerMobileNavItem('#work')"
                    class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white">Experiências</span>

            </li>
            <li class="py-2">

              <span @click="triggerMobileNavItem('#blog')"
                    class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white">Blog</span>

            </li>

            <li class="py-2">

              <span @click="triggerMobileNavItem('#contact')"
                    class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white">Contato</span>

            </li>

        </ul>
    </div>
</div>
