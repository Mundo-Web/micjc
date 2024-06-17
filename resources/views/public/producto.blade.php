@extends('components.public.matrix')

@section('title', 'Producto | ' . config('app.name', 'Laravel'))


@section('content')


  <main>
    <section class="w-11/12 md:w-10/12 mx-auto pt-5">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 md:gap-16">
        <div class="flex flex-col md:flex-row justify-center items-center gap-5 md:gap-0">
          <div
            class=" flex flex-row justify-between md:flex-col md:justify-start md:items-center h-full md:gap-10 md:basis-1/4 order-2 md:order-1 w-full  ">
            @isset($producto->galeria)
              <img id="imgGaleria" src="{{ asset($producto->imagen) }}" alt="computer"
                class="w-[70px] h-[90px] object-cover  hover:scale-110 transition-all duration-300 cursor-pointer "
                data-aos-offset="150">
              @foreach ($producto->galeria->take(3) as $item)
                <div class="">
                  <img id="imgGaleria" src="{{ asset($item->imagen) }}" alt="computer"
                    class="w-[70px] h-[90px] object-cover hover:scale-110 transition-all duration-300 cursor-pointer "
                    data-aos-offset="150">
                  {{-- <span><img src="{{ asset($item->imagen) }}" alt="computer" data-aos-offset="150"
                      style="max-width: 150%;"></span> --}}
                </div>
              @endforeach

            @endisset



          </div>

          <div id="containerCaratula"
            class="md:basis-3/4 flex justify-center items-center order-1 md:order-2 w-full object-cover">
            <img src="{{ asset($producto->imagen) }}" alt="computer" class="w-full h-full " data-aos="fade-up"
              data-aos-offset="150">
          </div>
        </div>

        <div class="flex flex-col gap-5">
          <div class="flex flex-col gap-5 pb-10 border-b-2 border-[#DDDDDD]" data-aos="fade-up" data-aos-offset="150">
            <h2 class="font-moderat_700 text-text40 md:text-text44 text-[#111111]">{{ $producto->producto }}</h2>
            <p class="font-moderat_Bold text-text24 md:text-text28 text-[#111111]">S/ {{ $producto->precio }}</p>
            <div class="flex justify-start items-center gap-5">

            </div>
            <div>
              <input type="number" id="cantidadInput" class="border-2 rounded-lg w-16" value="01" step="1">
            </div>

            <p class="text-[#565656] text-text16 md:text-text20 font-moderat_Regular">{{ $producto->extract }}</p>

            <div
              class="flex justify-between items-center text-white font-moderat_Bold text-text14 md:text-text16 gap-5 pt-3"
              data-aos="fade-up" data-aos-offset="150">
              <button href="#" id='btnAgregarCarrito'
                class="bg-[#0051FF] w-full py-3 px-2 md:px-10 text-center">Quiero comprar</button>
              <a href="#"
                class="bg-[#25D366] flex justify-center items-center w-full py-3 px-2 md:px-10 text-center gap-2">
                <span>Cotizar aquí</span>
                <div>
                  <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M14.1 2.3C12.6 0.8 10.6 0 8.5 0C4.1 0 0.5 3.6 0.5 8C0.5 9.4 0.900006 10.8 1.60001 12L0.5 16L4.70001 14.9C5.90001 15.5 7.2 15.9 8.5 15.9C12.9 15.9 16.5 12.3 16.5 7.9C16.5 5.8 15.6 3.8 14.1 2.3ZM8.5 14.6C7.3 14.6 6.10001 14.3 5.10001 13.7L4.89999 13.6L2.39999 14.3L3.10001 11.9L2.89999 11.6C2.19999 10.5 1.89999 9.3 1.89999 8.1C1.89999 4.5 4.9 1.5 8.5 1.5C10.3 1.5 11.9 2.2 13.2 3.4C14.5 4.7 15.1 6.3 15.1 8.1C15.1 11.6 12.2 14.6 8.5 14.6ZM12.1 9.6C11.9 9.5 10.9 9 10.7 9C10.5 8.9 10.4 8.9 10.3 9.1C10.2 9.3 9.80001 9.7 9.70001 9.9C9.60001 10 9.49999 10 9.29999 10C9.09999 9.9 8.50001 9.7 7.70001 9C7.10001 8.5 6.70001 7.8 6.60001 7.6C6.50001 7.4 6.60001 7.3 6.70001 7.2C6.80001 7.1 6.9 7 7 6.9C7.1 6.8 7.10001 6.7 7.20001 6.6C7.30001 6.5 7.20001 6.4 7.20001 6.3C7.20001 6.2 6.80001 5.2 6.60001 4.8C6.50001 4.5 6.30001 4.5 6.20001 4.5C6.10001 4.5 5.99999 4.5 5.79999 4.5C5.69999 4.5 5.49999 4.5 5.29999 4.7C5.09999 4.9 4.60001 5.4 4.60001 6.4C4.60001 7.4 5.29999 8.3 5.39999 8.5C5.49999 8.6 6.79999 10.7 8.79999 11.5C10.5 12.2 10.8 12 11.2 12C11.6 12 12.4 11.5 12.5 11.1C12.7 10.6 12.7 10.2 12.6 10.2C12.5 9.7 12.3 9.7 12.1 9.6Z"
                      fill="white" />
                  </svg>
                </div>
              </a>
            </div>
          </div>


          <div class="pt-5" data-aos="fade-up" data-aos-offset="150">
            <p class="font-inter font-medium text-text14 md:text-text16 text-[#111111]">
              Categoría: <span
                class="text-[#565656] font-moderat_Regular text-text14">{{ $producto->categoria->name }}</span>
            </p>
            <p class="font-inter font-medium text-text14 md:text-text16 text-[#111111]">
              SKU: <span class="text-[#565656] font-moderat_Regular text-text14">{{ $producto->sku }}</span>
            </p>
            <p class="font-inter font-medium text-text14 md:text-text16 text-[#111111]">
              Marca: @isset($producto->marca->name)
                <span class="text-[#565656] font-moderat_400 text-text14">
                  {{ $producto->marca->name }}</span>
              @endisset
            </p>
          </div>
        </div>
      </div>

      <div class="flex flex-col gap-5 pt-10 md:pt-16" data-aos="fade-up" data-aos-offset="150">
        {!! $producto->description !!}

      </div>

      <div class="pt-10 md:pt-16 flex flex-col gap-5">
        <h3 class="font-moderat_700 text-text28 md:text-text32 text-[#111111]">Características técnicas</h3>
        <div class="mx-6" data-aos="fade-up" data-aos-offset="150">
          <ul class="font-moderat_Regular text-text16 md:text-text20 list-disc text-[#565656]">
            @foreach ($especificaciones as $espec)
              <li>
                {{ $espec->tittle }} : {{ $espec->specifications }}

              </li>
            @endforeach


          </ul>
        </div>
      </div>
    </section>

    <section class="w-11/12 md:w-10/12 mx-auto pt-10 pb-16 md:pt-16 md:pb-24">
      <div class="flex flex-col gap-5">
        <div class="flex flex-col items-start md:flex-row md:justify-start md:items-center py-5 gap-2">
          <p class="font-moderat_700 text-text32 md:text-text36">Productos relacionados</p>
          <div class="flex md:hidden justify-start items-center">
            <a href="#" class="flex flex-row justify-center items-center gap-2">
              <p
                class="text-[#3374FF] text-text16 font-moderat_Bold md:text-text20 flex justify-center items-center gap-3">
                Ver todo
              </p>
              <div>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M5 12H19" stroke="#3374FF" stroke-width="1.33333" stroke-linecap="round"
                    stroke-linejoin="round" />
                  <path d="M12 5L19 12L12 19" stroke="#3374FF" stroke-width="1.33333" stroke-linecap="round"
                    stroke-linejoin="round" />
                </svg>
              </div>
            </a>
          </div>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-5 lg:gap-5">


          @foreach ($productosRelacionados as $item)
            <div class="flex flex-col gap-5" data-aos="fade-up" data-aos-offset="150">
              <div class="bg-[#F3F3F3] md:w-[266px] md:h-[312px] flex flex-col justify-center pt-5 gap-20 relative">
                <div class="flex justify-start items-center absolute top-[5%] left-[5%]">
                  @foreach ($item->tags as $tag)
                    <span class="font-moderat_500 text-text10 md:text-text20 bg-[#0051FF] text-white py-1 px-2">
                      {{ $tag->name }}</span>
                  @endforeach
                </div>
                <div class="flex justify-center items-center py-10 md:py-20">
                  <a href="{{ route('producto', $item->id) }}"><img src="{{ asset($item->imagen) }}" alt="impresora"
                      class="w-[120px] h-[90px]  md:w-[266px] md:h-[292px] object-cover  "></a>

                </div>
              </div>

              <div class="flex flex-col gap-6">
                <div class="flex flex-col gap-3">
                  <h3 class="font-moderat_Medium text-text12 md:text-text20 text-[#1F1F1F]">{{ $item->extracto }}</h3>
                  <a href="{{ route('producto', $item->id) }}">
                    <h2 class="font-moderat_700 text-text16 md:text-text24 text-[#111111]">{{ $item->producto }}</h2>
                  </a>

                  <p class="font-moderat_Regular text-text12 md:text-text20 text-[#565656]">
                    {!! Str::limit($item->description, 150, '...') !!}
                  </p>
                  <div class="flex justify-start items-center gap-2 md:gap-4">

                  </div>
                  <p class="text-[#111111] text-text16 md:text-text28 font-space_grotesk font-bold md:font-medium">
                    S/ {{ $item->precio }}</p>
                </div>
              </div>

            </div>
          @endforeach
          <div data-aos="fade-up" data-aos-offset="150" class="py-10">
            {{ $productosRelacionados }}

          </div>
        </div>
      </div>
    </section>
  </main>



@section('scripts_importados')

  <script>
    var appUrl = '{{ env('APP_URL') }}';
  </script>
  <script>
    $(document).ready(function() {
      $('.zoom').hover(function() {
        console.log('haciendo el hover');
        $(this).addClass('transition');
      }, function() {
        $(this).removeClass('transition');
      });
    });
  </script>


  <script src="{{ asset('js/carrito.js') }}"></script>

  <script>
    $(document).on('click', "#imgGaleria", function() {

      let src = $(this).attr('src');
      console.log(src);
      let imagen = `<img src="${src}" alt="computer" class="w-full h-full object-cover" data-aos="fade-up"
              data-aos-offset="150">`

      $('#containerCaratula').html(imagen)
    })
  </script>

  {{-- <script src="{{ asset('js/storage.extend.js') }}"></script> --}}
@stop

@stop
