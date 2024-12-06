<header class="{{-- z-[600] relative --}}">

  <div class="bg-[#0051FF] h-10 my-auto flex flex-col justify-center items-center">
    <div class="flex justify-between items-center w-full px-[5%] text-white">
      <div class="min-w-20 hidden md:flex "></div>
      <div class="min-w-96 w-full max-w-3xl">
        <marquee class="text-base font-moderat_500">Grandes dispositivos para grandes decisiones</marquee>
      </div>
      <div class="flex justify-center items-center gap-2">
        <div class="min-w-20 hidden md:flex justify-center items-center gap-2">
          @if ($general->facebook != null)
            <a target="_blank" href="https://{{ $general->facebook }}"><img class="w-8" src="{{ asset('images/svg/image_1.svg') }}"
                alt="facebook" class="cursor-pointer"></a>
          @endif

          @if ($general->instagram != null)
            <a target="_blank" href="https://{{ $general->instagram }}"><img class="w-8" src="{{ asset('images/svg/image_2.svg') }}"
                alt="instagram" class="cursor-pointer"></a>
          @endif
        </div>
      </div>
    </div>
  </div>

  <div class="px-[5%] w-full py-2">
    <div class="grid grid-cols-1 md:grid-cols-12">

      <div class="flex justify-start items-center md:col-span-3 pb-2 md:pb-0">
        <a href="{{ route('index') }}"><img class="w-full min-w-40" src="{{ asset('images/svg/image_3.svg') }}" alt="MICJC"></a>
      </div>

      <div class="relative flex justify-center items-center md:col-span-6">
        <form action="" class="w-full">
          <x-header.buscador class=" w-full border-2 border-[#CCCCCC] rounded-2xl flex justify-center items-center" />
        </form>
      </div>

      <div class="flex flex-row justify-end items-center gap-5 md:col-span-3 !font-moderat">
            @if (Auth::user() == null)
              <a class="hidden md:flex" href="{{ route('login') }}">
                <i class="fa-solid fa-circle-user text-4xl text-[#CCCCCC]"></i></a>
            @else
              <div class="relative !font-moderat_400 hidden md:inline-flex" x-data="{ open: false }">
                <button class="px-3 py-5 inline-flex justify-center items-center group" aria-haspopup="true"
                  @click.prevent="open = !open" :aria-expanded="open">
                  <div class="flex items-center truncate">
                    <span id="username"
                      class="truncate ml-2 text-sm font-medium dark:text-slate-300 group-hover:opacity-75 dark:group-hover:text-slate-200 text-[#272727] ">
                      {{ explode(' ', Auth::user()->name)[0] }}</span>
                    <svg class="w-3 h-3 shrink-0 ml-1 fill-current text-slate-400" viewBox="0 0 12 12">
                      <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z" />
                    </svg>
                  </div>
                </button>
                <div
                  class="origin-top-left z-10 right-0 absolute top-full min-w-44 bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 py-1.5 rounded shadow-lg overflow-hidden mt-1"
                  @click.outside="open = false" @keydown.escape.window="open = false" x-show="open">
                  <ul>
                    <li class="hover:bg-gray-100">
                      <a class="font-medium text-sm text-black flex items-center py-1 px-3" href="{{ route('miCuenta') }}"
                        @click="open = false" @focus="open = true" @focusout="open = false">Mi Cuenta</a>
                    </li>

                    <li class="hover:bg-gray-100">
                      <form method="POST" action="{{ route('logout') }}" x-data>
                        @csrf
                        <button type="submit" class="font-medium text-sm text-black flex items-center py-1 px-3"
                          @click.prevent="$root.submit(); open = false">
                          {{ __('Cerrar sesión') }}
                        </button>
                      </form>
                    </li>
                  </ul>
                </div>
              </div>
            @endif
      </div>

    </div>


  </div>

  <div class="flex justify-end w-11/12 mx-auto z-10">
    <div class="fixed bottom-6 sm:bottom-[2rem] lg:bottom-[4rem] z-20 fixed-whastapp">
      <a target="_blank"
        href="https://api.whatsapp.com/send?phone={{ $general->whatsapp }}&text={{ $general->mensaje_whatsapp }}"
        rel="noopener">
        <img src="{{ asset('images/svg/image_11.svg') }}" alt="whatsapp" class="w-20 h-20 md:w-full md:h-full">
      </a>
    </div>
  </div>


   <div class="bg-[#0051FF] h-10 flex px-[5%] justify-between lg:justify-center lg:gap-10 items-center text-base md:text-lg font-moderat_500">
        <a href="{{ route('index') }}"
          class=" {{ request()->routeIs('index') ? 'enlaces__after text-white' : 'text-white' }}">Inicio</a>
        <a href="{{ route('catalogo') }}"
          class="{{ request()->routeIs('catalogo') ? 'enlaces__after text-white' : 'text-white' }}">Productos</a>
        @if ($blogCount > 0)
          <a href="{{ route('blog') }}"
            class="{{ request()->routeIs('blog') ? 'enlaces__after text-white' : 'text-white' }}">Blog
          </a>
        @endif

        <a href="{{ route('contacto') }}"
          class="{{ request()->routeIs('contacto') ? 'enlaces__after text-white' : 'text-white' }}">Contáctanos</a>
    </div>

  {{-- Modal carrito --}}
  <div class="modal" id="jsModalCarrito">
    <div class="modal__container">
      {{-- <button
            type="button"
            class="modal__close fa-solid fa-xmark jsModalClose"
          ></button> --}}

      <div class="modal__info flex flex-col justify-between">

        <div class="modal__header">
          <p class="font-moderat_Medium text-text28">Carrito</p>
        </div>

        <div class="modal__body">
          <div class="modal__list">

            <div class="flex flex-col gap-10" id="itemsCarrito">

            </div>

          </div>
        </div>


        <div class="modal__footer">
          <div class="flex flex-col gap-2 ">
            <div class="text-[#141718] flex justify-between items-center">

            </div>

            <div class="text-[#141718] font-moderat_Medium text-[20px] flex justify-between items-center">
              <p>Total</p>
              <p id="itemsTotal"></p>
            </div>
            <div>
              <a href="{{ route('carrito') }}"
                class="font-moderat_Bold text-base bg-[#0051FF] py-3 px-5 text-white cursor-pointer w-full inline-block text-center">
                Checkout
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- fixed-whastapp --}}


</header>
<script>
  $(document).ready(function() {
    const icon = $('.fixed-whastapp');
    const footer = $('footer');
    const offset = 24; // Offset from the bottom of the footer

    $(window).on('scroll', function() {
      const scrollTop = $(window).scrollTop();
      const windowHeight = $(window).height();
      const footerTop = footer.offset().top;

      // Calculate the bottom position of the icon
      const iconBottom = scrollTop + windowHeight - icon.outerHeight(true) - offset;

      // Check if the icon is overlapping with the footer
      if (iconBottom > footerTop) {
        icon.css('bottom', (iconBottom - footerTop + offset * 6) + 'px');
      } else {
        icon.css('bottom', offset + 'px');
      }
    });
  });
</script>
<script src="{{ asset('js/storage.extend.js') }}"></script>
