<footer class="bg-[#0051FF] py-20">
  <div class="grid grid-cols-1 lg:grid-cols-4 text-white w-11/12 mx-auto gap-12" data-aos="fade-up" data-aos-offset="150">

    <div class="flex flex-col gap-5">
      <div class="flex items-center">
        <a href="{{ route('index') }}"><img src="{{ asset('images/svg/image_12.svg') }}" alt="MICJC"></a>

      </div>
      <div class="flex flex-col gap-5">
        <div class="flex gap-2 items-center">
          <img src="{{ asset('images/svg/image_13.svg') }}" alt="direccion">
          <p class="font-moderat_Regular text-text12 md:text-text14">
            {{--  Av. Camino Real 356 - San Isidro. Lima -
                        Perú --}}

            {{ $general->address }} - {{ $general->district }} - Perú

          </p>
        </div>

        <div class="flex gap-2 items-center">
          <img src="{{ asset('images/svg/image_14.svg') }}" alt="email">
          <p class="font-moderat_Regular text-text12 md:text-text14">soporte@micjc.com.pe</p>
        </div>

        <div class="flex gap-2 items-center">

          @if ($general->facebook != null)
            <a target="_blank" href="https://{{ $general->facebook }}">
              <img src="{{ asset('images/svg/image_15.svg') }}" alt="facebook">
            </a>
          @endif
          @if ($general->instagram != null)
            <a target="_blank" href="https://{{ $general->instagram }}">
              <img src="{{ asset('images/svg/image_16.svg') }}" alt="instagram">
            </a>
          @endif
          <a href="{{ route('index') }}" class="font-moderat_Regular text-text12 md:text-text14">Mic&JC</a>

        </div>

      </div>
    </div>

    <div class="flex flex-col gap-5">
      <p class="underline font-moderat_500 text-text14 md:text-text16">Términos de uso</p>
      <a href="/politica_privacidad" class="font-moderat_Regular text-text12 md:text-text14">Políticas de privacidad</a>
      <a href="/term_condiciones" class="font-moderat_Regular text-text12 md:text-text14">Términos y condiciones</a>
      <a href="/libro-de-reclamaciones" class="font-moderat_Regular text-text12 md:text-text14">Libro de
        Reclamaciones</a>
      {{-- <a href="/politicas-de-devolucion" class="font-moderat_Regular text-text12 md:text-text14">Políticas de
        devolución</a> --}}
    </div>

    <div class="flex flex-col gap-5">
      <p class="underline font-moderat_500 text-text14 md:text-text16">Menú</p>
      <a href="{{ route('index') }}" class="font-moderat_Regular text-text12 md:text-text14">Inicio</a>
      <a href="{{ route('index') }}" class="font-moderat_Regular text-text12 md:text-text14">Nosotros</a>
      <a href="{{ route('catalogo') }}" class="font-moderat_Regular text-text12 md:text-text14">Productos</a>
      <a href="{{ route('blog') }}" class="font-moderat_Regular text-text12 md:text-text14">Blog</a>
      <a href="{{ route('contacto') }}" class="font-moderat_Regular text-text12 md:text-text14">Contáctanos</a>
    </div>

    <div class="flex flex-col gap-5">
      <p class="font-moderat_700 text-text24 md:text-text28">Suscribete a nuestro blog</p>
      <p class="font-moderat_Regular text-text12 md:text-text14">Mantente actualizado sobre las últimas noticias y
        ofertas.</p>
      <form action="" id="formInscripcion">
        @csrf
        <div class="relative w-full rounded-lg flex justify-center items-center">
          <input type="email" placeholder="hola@hotmail.com" name="email" id="email"
            class="placeholder:text-[#565656] font-moderat_Medium text-text12 md:text-text14 w-full border-none outline-none focus:outline-none pl-5 pr-4 py-4 text-[#565656]">
          <input type="text" name="tipo" value="Inscripción" hidden />
          <div class="absolute inset-y-0 right-0  flex items-center pl-3">
            <button type="submit"
              class="text-[#0051FF] font-moderat_700 text-text12 md:text-text14 pr-5 pl-4 py-4">Suscriberme
            </button>
          </div>
        </div>
      </form>
    </div>

  </div>

</footer>
