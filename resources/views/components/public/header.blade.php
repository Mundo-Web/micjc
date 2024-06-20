<header class="{{-- z-[600] relative --}}">

  <div class="bg-[#0051FF] py-5">
    <div class="flex justify-between items-center w-11/12 mx-auto text-white">
      <div>
        <p class="text-text12 md:text-text14 font-moderat_500">Grandes dispositivos para grandes decisiones</p>
      </div>
      <div class="flex justify-center items-center gap-2">
        <div class="flex justify-center items-center gap-2">
          @if ($general->facebook != null)
            <a target="_blank" href="https://{{ $general->facebook }}"><img src="{{ asset('images/svg/image_1.svg') }}"
                alt="facebook" class="cursor-pointer"></a>
          @endif

          @if ($general->instagram != null)
            <a target="_blank" href="https://{{ $general->instagram }}"><img src="{{ asset('images/svg/image_2.svg') }}"
                alt="instagram" class="cursor-pointer"></a>
          @endif
        </div>
        <a href="{{ route('index') }}" class="font-moderat_Regular text-text12 md:text-text14">Mic&JC</a>
      </div>
    </div>
  </div>

  <div class="w-11/12 mx-auto py-5">
    <div class="grid grid-rows-3 grid-cols-2 xl:grid-cols-12 xl:grid-rows-1">

      <div
        class="flex justify-start items-center row-span-1 col-span-1 xl:row-span-1 xl:col-span-1 2xl:col-span-1 order-1 xl:order-1">
        <a href="{{ route('index') }}"><img src="{{ asset('images/svg/image_3.svg') }}" alt="MICJC"></a>
      </div>

      <div
        class="flex justify-between lg:justify-center lg:gap-10 items-center row-span-1 col-span-2 xl:row-span-1 xl:col-span-7 2xl:col-span-8  order-3 xl:order-2 text-text16 md:text-text20 font-moderat_500">
        <a href="{{ route('index') }}"
          class=" {{ request()->routeIs('index') ? 'enlaces__after text-[#0051FF]' : 'text-[#000000]' }}">Inicio</a>
        <a href="{{ route('catalogo') }}"
          class="{{ request()->routeIs('catalogo') ? 'enlaces__after text-[#0051FF]' : 'text-[#000000]' }}">Productos</a>
        @if ($blogCount > 0)
          <a href="{{ route('blog') }}"
            class="{{ request()->routeIs('blog') ? 'enlaces__after text-[#0051FF]' : 'text-[#000000]' }}">Blog
          </a>
        @endif

        <a href="{{ route('contacto') }}"
          class="{{ request()->routeIs('contacto') ? 'enlaces__after text-[#0051FF]' : 'text-[#000000]' }}">Contáctanos</a>
      </div>

      <div
        class="relative flex justify-center items-center row-span-1 col-span-2 xl:row-span-1 xl:col-span-2 2xl:col-span-2 order-4 xl:order-3">
        <form action="" class="w-full">
          <x-header.buscador class=" w-full border-2 border-[#CCCCCC] rounded-lg flex justify-center items-center" />
        </form>
      </div>

      <div
        class="flex justify-end items-center gap-5 row-span-1 col-span-1 xl:row-span-1 xl:col-span-2 2xl:col-span-1 order-2 xl:order-4">
        <a href="{{ route('miCuenta') }}"><img src="{{ asset('images/svg/image_4.svg') }}" alt="user"></a>
        <img src="{{ asset('images/svg/image_5.svg') }}" alt="bag" class="bag__carrito cursor-pointer">
        <div class="flex justify-center items-center font-moderat_700 relative ">
          <img id="imgCantidad" src="{{ asset('images/svg/image_10.svg') }}" alt="bag">
          <span id="spanCantidad" class="text-white absolute"></span>
        </div>
      </div>
    </div>
  </div>

  <div class="flex justify-end w-11/12 mx-auto z-10">
    <div class="fixed bottom-6 sm:bottom-[2rem] lg:bottom-[4rem] z-20">
      <a target="_blank"
        href="https://api.whatsapp.com/send?phone={{ $general->whatsapp }}&text={{ $general->mensaje_whatsapp }}"
        rel="noopener">
        <img src="{{ asset('images/svg/image_11.svg') }}" alt="whatsapp" class="w-20 h-20 md:w-full md:h-full">
      </a>
    </div>
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


</header>
<script src="{{ asset('js/storage.extend.js') }}"></script>
