@extends('components.public.matrix')

@section('title', 'Producto | ' . config('app.name', 'Laravel'))


@section('content')


  <main>
    <section class="w-11/12 md:w-10/12 mx-auto pt-10">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 md:gap-16">
        <div class="flex flex-col md:flex-row justify-center  gap-5 md:gap-0">
          {{-- <div
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
                </div>
              @endforeach

            @endisset



          </div> --}}

          <div id="containerCaratula" class="md:basis-3/4 flex justify-start items-start order-1 md:order-2 w-full ">
            <img src="{{ asset($producto->imagen) }}" alt="computer" class="w-[398px] h-[510px] object-cover "
              {{-- data-aos="fade-up" data-aos-offset="150" --}}
              style="view-transition-name: product-detail-{{$producto->id}}">
          </div>
        </div>

        <div class="flex flex-col gap-5">
          <div class="flex flex-col gap-5 pb-10 border-b-2 border-[#DDDDDD]" data-aos="fade-up" data-aos-offset="150">
            <h2 class="font-Montserrat_Bold text-3xl md:text-4xl leading-tight text-[#111111]">
              {{ $producto->producto }}</h2>

            @if ($producto->descuento == 0)
              <span class="font-Montserrat_Bold text-lg md:text-text36 text-[#111111]">S/ {{ $producto->precio }}</span>
            @else
              @php
                $porcentajeDescuento = round((($producto->precio - $producto->descuento) / $producto->precio) * 100);
              @endphp
              <div class="flex flex-col gap-2 items-start">
                <div class="flex flex-row gap-2 justify-start items-center">
                  <span class="text-[#333333] text-text30 line-through font-Montserrat_Regular">S/.
                    {{ $producto->precio }}</span>
                  <span class="text-white bg-[#0051FF] px-3 py-1 rounded-lg font-Montserrat_SemiBold">-
                    {{ $porcentajeDescuento }}%</span>
                </div>
                <span class="font-Montserrat_Bold text-text24 md:text-text36 text-[#111111]">S/.
                  {{ $producto->descuento }}</span>
              </div>
            @endif


            <div class="flex items-center gap-4">
              <span class="text-[#25D366] font-moderat_Bold text-xl ">En stock {{ round($producto->stock) }}</span>
              <input type="number" id="cantidadInput"
                class="border-2 border-gray-400 w-20 px-3 py-1 rounded-full text-center" value="1" step="1">
            </div>

            <p class="text-[#565656] text-text16 md:text-text20 font-Montserrat_Regular">{{ $producto->extract }}</p>

            <div
              class="flex justify-between items-center text-white font-Montserrat_Bold text-text14 md:text-text16 gap-5 pt-3"
              data-aos="fade-up" data-aos-offset="150">
              <button href="#" id='btnAgregarCarrito'
                class="bg-[#0051FF] w-full py-3 px-2 md:px-10 text-center">Agregar al carrito</button>
              @if ($general->whatsapp)
                <a href="//wa.me/51{{ $general->whatsapp }}?text={{ rawurlencode('Estoy interesado en cotizar el producto: ' . htmlentities($producto->producto)) }}"
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
              @endif
            </div>
          </div>


          <div class="pt-2" data-aos="fade-up" data-aos-offset="150">
            <p class="font-Montserrat_Bold text-text14 md:text-text16 text-[#111111]">
              Categoría: <span
                class="text-[#565656] font-Montserrat_Regular text-text14">{{ $producto->categoria->name ?? '' }}</span>
            </p>
            <p class="font-Montserrat_Bold text-text14 md:text-text16 text-[#111111]">
              SKU: <span class="text-[#565656] font-Montserrat_Regular text-text14">{{ $producto->sku }}</span>
            </p>
            <p class="font-Montserrat_Bold text-text14 md:text-text16 text-[#111111]">
              Marca: @isset($producto->marca->name)
                <span class="text-[#565656] font-Montserrat_Regular text-text14">
                  {{ $producto->marca->name ?? 'Sin marca' }}</span>
              @endisset
            </p>
          </div>
        </div>
      </div>

      <div class="flex flex-col gap-5 pt-10 md:pt-16 font-Montserrat_Regular text-[#565656]" data-aos="fade-up"
        data-aos-offset="150">
        {!! $producto->description !!}
      </div>

      <div class="pt-10 md:pt-16 flex flex-col gap-5 mb-10 md:mb-16">
        <h3 class="font-Montserrat_Bold text-text28 md:text-text32 text-[#111111]">Características técnicas</h3>
        <div class="mx-6" data-aos="fade-up" data-aos-offset="150">
          <ul class="font-Montserrat_Regular text-text16 list-disc text-[#111111]">
            @foreach ($especificaciones as $espec)
              <li>
                {{ $espec->tittle }} : {{ $espec->specifications }}

              </li>
            @endforeach


          </ul>
        </div>
      </div>
    </section>

    @if (count($productosRelacionados) > 0)
      <section class="w-11/12 md:w-10/12 mx-auto  pb-16  md:pb-24">
        <div class="flex flex-col gap-5">
          <div class="flex flex-col items-start md:flex-row md:justify-start md:items-center py-5 gap-2">
            <p class="font-Montserrat_Bold text-text32 md:text-text36">Productos relacionados</p>
            <div class="flex md:hidden justify-start items-center">
              <a href="#" class="flex flex-row justify-center items-center gap-2">
                <p
                  class="text-[#3374FF] text-text16 font-moderat_Bold md:text-text20 flex justify-center items-center gap-3">
                  Ver todo
                </p>
                <div>
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
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
              <x-product.cardproduct bgcolor="bg-[#FFFFFF]" :item="$item" />
            @endforeach
            <div data-aos="fade-up" data-aos-offset="150" class="py-10 col-span-2 lg:col-span-4">
              {{ $productosRelacionados }}

            </div>
          </div>
        </div>
      </section>
    @endif
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


  <script src="{{ asset('js/carrito.js') }}?v=totalcount.fixed"></script>

  <script>
    $(document).on('click', "#imgGaleria", function() {

      let src = $(this).attr('src');
      console.log(src);
      let imagen = `<img src="${src}" alt="computer" class="w-[398px] h-[510px] object-cover" data-aos="fade-up"
              data-aos-offset="150">`

      $('#containerCaratula').html(imagen)
    })
  </script>

  {{-- <script src="{{ asset('js/storage.extend.js') }}"></script> --}}
@stop

@stop
