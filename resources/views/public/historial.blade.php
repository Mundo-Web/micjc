@extends('components.public.matrix')

@section('title', 'Historial | ' . config('app.name', 'Laravel'))

@section('css_importados')
  {{--     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css"> --}}

  @php
    use Carbon\Carbon;
  @endphp

@stop


@section('content')
  <main>

    <section class=" mb-0 md:mb-10 hidden md:block">
      <div class="flex flex-col w-11/12 mx-auto">
        <div class="flex flex-col gap-10 my-5" data-aos="fade-up" data-aos-offset="150">
          <div class="flex gap-1 text-text14 md:text-text18">
            <a href="index.html" class="font-moderat_500 text-[#565656]">Home</a>
            <span>></span>
            <a href="#" class="font-moderat_700 text-[#111111]">Mi cuenta</a>
          </div>
        </div>
      </div>
    </section>

    <section class="md:mb-20">
      <div class="flex flex-col gap-10 lg:flex-row md:gap-28 w-full md:w-11/12 mx-auto">
        @component('components.sidebarMiCuenta')
        @endcomponent
        <div class="basis-7/12 w-11/12 md:w-full mx-auto">
          <h2 class="text-[#151515] font-moderat_700 text-text20 xl:text-text22 pt-5 md:pt-5 pb-10">
            Historial de compras
          </h2>
          <!-- para destop tabla -->
          <div class="hidden lg:block">
            <table class="table-auto w-full">
              <thead data-aos="fade-up" data-aos-offset="150">
                <tr
                  class="text-left text-[#6C7275] font-moderat_Regular text-text14 md:text-text16 border-b-[1px] border-[#E8ECEF]">
                  <th class="py-4">Código de pedido</th>
                  <th class="py-4">Fecha</th>
                  <th class="py-4">Estatus</th>
                  <th class="py-4">Precio</th>
                </tr>
              </thead>
              <tbody data-aos="fade-up" data-aos-offset="150"
                class="text-[#141718] font-moderat_Regular text-text14 md:text-text16">

                @foreach ($ordenes as $item)
                  <tr class="border-b-[1px] border-[#E8ECEF] text-left">
                    <td class="py-5">#{{ $item->codigo_orden }}</td>
                    <td class="py-5">{{ Carbon::parse($item->created_at)->translatedFormat('d \d\e F \d\e Y') }}</td>
                    <td class="py-5">{{ $item->statusOrdenes->descripcion ?? '' }}</td>
                    <td class="py-5">S/{{ $item->precio_envio + $item->monto }}</td>
                  </tr>
                @endforeach




              </tbody>
            </table>
          </div>
          <!-- para mobiles acordion -->
          <div class="block lg:hidden">
            <div class="flex flex-col gap-5">
              <div class="grid grid-cols-2  gap-5 border-b-2 border-[#E8ECEF] pb-5" data-aos="fade-up"
                data-aos-offset="150">
                <div class="flex flex-col gap-1">
                  <p class="text-[#6C7275] text-text12 font-moderat_Regular">Código de pedido</p>
                  <p class="text-[#141718] font-moderat_Regular text-text16">#3456_768</p>
                </div>
                <div class="flex flex-col gap-1">
                  <p class="text-[#6C7275] text-text12 font-moderat_Regular">Fecha</p>
                  <p class="text-[#141718] font-moderat_Regular text-text16">12 de Enero de 2024</p>
                </div>
                <div class="flex flex-col gap-1">
                  <p class="text-[#6C7275] text-text12 font-moderat_Regular">Estatus</p>
                  <p class="text-[#141718] font-moderat_Regular text-text16">Entregado</p>
                </div>
                <div class="flex flex-col gap-1">
                  <p class="text-[#6C7275] text-text12 font-moderat_Regular">Precio</p>
                  <p class="text-[#141718] font-moderat_Regular text-text16">S/ 1234.00</p>
                </div>
              </div>

              <div class="grid grid-cols-2  gap-5 border-b-2 border-[#E8ECEF] pb-5" data-aos="fade-up"
                data-aos-offset="150">
                <div class="flex flex-col gap-1">
                  <p class="text-[#6C7275] text-text12 font-moderat_Regular">Código de pedido</p>
                  <p class="text-[#141718] font-moderat_Regular text-text16">#3456_768</p>
                </div>
                <div class="flex flex-col gap-1">
                  <p class="text-[#6C7275] text-text12 font-moderat_Regular">Fecha</p>
                  <p class="text-[#141718] font-moderat_Regular text-text16">12 de Enero de 2024</p>
                </div>
                <div class="flex flex-col gap-1">
                  <p class="text-[#6C7275] text-text12 font-moderat_Regular">Estatus</p>
                  <p class="text-[#141718] font-moderat_Regular text-text16">Entregado</p>
                </div>
                <div class="flex flex-col gap-1">
                  <p class="text-[#6C7275] text-text12 font-moderat_Regular">Precio</p>
                  <p class="text-[#141718] font-moderat_Regular text-text16">S/ 1234.00</p>
                </div>
              </div>

              <div class="grid grid-cols-2  gap-5 border-b-2 border-[#E8ECEF] pb-5" data-aos="fade-up"
                data-aos-offset="150">
                <div class="flex flex-col gap-1">
                  <p class="text-[#6C7275] text-text12 font-moderat_Regular">Código de pedido</p>
                  <p class="text-[#141718] font-moderat_Regular text-text16">#3456_768</p>
                </div>
                <div class="flex flex-col gap-1">
                  <p class="text-[#6C7275] text-text12 font-moderat_Regular">Fecha</p>
                  <p class="text-[#141718] font-moderat_Regular text-text16">12 de Enero de 2024</p>
                </div>
                <div class="flex flex-col gap-1">
                  <p class="text-[#6C7275] text-text12 font-moderat_Regular">Estatus</p>
                  <p class="text-[#141718] font-moderat_Regular text-text16">Entregado</p>
                </div>
                <div class="flex flex-col gap-1">
                  <p class="text-[#6C7275] text-text12 font-moderat_Regular">Precio</p>
                  <p class="text-[#141718] font-moderat_Regular text-text16">S/ 1234.00</p>
                </div>
              </div>


              <div class="grid grid-cols-2  gap-5 border-b-2 border-[#E8ECEF] pb-5" data-aos="fade-up"
                data-aos-offset="150">
                <div class="flex flex-col gap-1">
                  <p class="text-[#6C7275] text-text12 font-moderat_Regular">Código de pedido</p>
                  <p class="text-[#141718] font-moderat_Regular text-text16">#3456_768</p>
                </div>
                <div class="flex flex-col gap-1">
                  <p class="text-[#6C7275] text-text12 font-moderat_Regular">Fecha</p>
                  <p class="text-[#141718] font-moderat_Regular text-text16">12 de Enero de 2024</p>
                </div>
                <div class="flex flex-col gap-1">
                  <p class="text-[#6C7275] text-text12 font-moderat_Regular">Estatus</p>
                  <p class="text-[#141718] font-moderat_Regular text-text16">Entregado</p>
                </div>
                <div class="flex flex-col gap-1">
                  <p class="text-[#6C7275] text-text12 font-moderat_Regular">Precio</p>
                  <p class="text-[#141718] font-moderat_Regular text-text16">S/ 1234.00</p>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="bg-[#F3F3F3] w-11/12 mx-auto">

      <div
        class="flex flex-col md:flex-row justify-between items-center gap-5 pt-5 md:pt-10 pl-5 md:pl-10 pr-5 md:pr-10 my-20">
        <div class="flex flex-col gap-6" data-aos="fade-up" data-aos-offset="150">
          <div class="flex flex-col gap-3">
            <p class="text-[#02173C] font-moderat_700 text-text32 leading-[38px]">¿Aún tienes alguna duda?</h2>
            <p class="text-[#02173C] font-moderat_Regular text-text18">Vestibulum ante ipsum primis in faucibus
              orci luctus et ultrices posuere.</p>
          </div>

          <div class="flex justify-start items-center pb-8">
            <a href="#"
              class="text-[#FFFFFF] font-moderat_Bold text-text16 py-3 bg-[#001232] px-5 w-full text-center md:inline-flex md:w-auto">Ponerse
              en contacto</a>
          </div>
        </div>

        <div>
          <img src="{{ asset('images/img/image_42.png') }}" alt="contacto">
        </div>
      </div>

    </section>
  </main>




@section('scripts_importados')
  <script></script>

@stop

@stop
