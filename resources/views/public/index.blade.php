@extends('components.public.matrix')

@section('css_importados')
  @php
    use Carbon\Carbon;
  @endphp

  <style>
    .pagination__mobile .swiper-pagination>.swiper-pagination-bullet-active,
    .pagination__desktop .swiper-pagination>.swiper-pagination-bullet-active {
      background-color: transparent;
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center;
      width: 20px;
      height: 20px;
      opacity: 1;
      background-image: url({{ asset('images/svg/image_8.svg') }});
    }

    .pagination__mobile .swiper-pagination-bullet:not(.swiper-pagination-bullet-active),
    .pagination__desktop .swiper-pagination-bullet:not(.swiper-pagination-bullet-active) {
      background-color: transparent;
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center;
      width: 6px;
      height: 6px;
      opacity: 1;
      background-image: url({{ asset('images/svg/image_9.svg') }});
    }

    /*  .bg__mobile {
                                                                                                                                                                                                                                                                  background-repeat: no-repeat;
                                                                                                                                                                                                                                                                  background-size: cover;
                                                                                                                                                                                                                                                                  background-position: center;
                                                                                                                                                                                                                                                                  background-image: url({{ asset('images/img/image_3.png') }});
                                                                                                                                                                                                                                                              } */

    .fondo__slider-desktop {
      background-image: none;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }

    .fondo__categorias-producto {
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      background-image: url({{ asset('images/img/image_47.png') }});
    }

    .fondo__marcas {
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      background-image: url({{ asset('images/img/image_50.png') }});
    }

    @media (min-width:768px) {
      .fondo__slider-desktop {
        background-image: url({{ asset('images/img/image_16.png') }});
      }

      .fondo__categorias-producto {
        background-image: url({{ asset('images/img/image_48.png') }});
      }


      .fondo__marcas {
        background-image: url({{ asset('images/img/image_49.png') }});
      }
    }

    .custom-swiper-buttons .swiper-button-prev:after {
      background-image: url({{ asset('images/svg/image_53.svg') }});
    }


    .custom-swiper-buttons .swiper-button-next:after {
      background-image: url({{ asset('images/svg/image_52.svg') }});
    }
  </style>

@stop

@section('title', 'Inicio | ' . config('app.name', 'Laravel'))
{{-- <title>@yield('title', config('app.name', 'Laravel'))</title>s --}}




@section('content')

  <main>

    <section class="w-11/12 mx-auto py-10">
      <div class="swiper productos__main-mobile">
        <div class="swiper-wrapper">
          @foreach ($slider as $item)
            @php
              $hasContent = !!$item->title || !!$item->description;
            @endphp
            <div
              class="swiper-slide bg-[#0051FF] pt-5 pb-20 md:py-24 fondo__slider-desktop {{ !$hasContent ? 'cursor-pointer' : '' }}"
              @if (!$hasContent) style="background-image: url('{{ asset($item->url_image . $item->name_image) }}'); background-repeat: no-repeat; background-size:cover" onclick="location.href = '{{ $item->link1 }}'" @endif>
              <div class="grid grid-cols-1 lg:grid-cols-2" data-aos="fade-up" data-aos-offset="150">
                <div
                  class="flex flex-col justify-center gap-5 order-1 lg:order-2 px-5 md:z-50 lg:-mx-[100px] w-full lg:w-11/12">
                  <h1
                    class="text-text40 md:text-text48 font-Montserrat_SemiBold text-white leading-[56px] md:leading-tight">
                    {{ $item->title }}</h1>
                  <p class="text-white text-text14 md:text-text16 font-Montserrat_Regular w-full lg:w-5/6">
                    {{ $item->description }}</p>

                  <div class="flex justify-start items-center gap-4">
                    @if ($item->botontext1)
                      <a href="{{ $item->link1 }}" class="flex justify-center gap-2 items-center text-text16 bg-[#0051FF] hover:bg-white text-white hover:text-[#0051FF]  rounded-lg overflow-hidden py-2 px-6 hover:stroke-[#0051FF]">
                        <span class="font-Montserrat_Bold">{{ $item->botontext1 }}</span>
                        <i class="fa fas fa-angle-right"></i>
                      </a>
                    @endif
                    @if ($item->botontext2)
                      <a href="{{ $item->link2 }}" class="flex justify-center items-center text-white text-text16 gap-2 py-2 px-6">
                        <span class="font-Montserrat_Bold">{{ $item->botontext2 }}</span>
                        <i class="fa fas fa-angle-right"></i>
                      </a>
                    @endif
                  </div>
                </div>

                <div class="flex justify-end md:justify-end  items-center py-10 order-2 lg:order-1 relative lg:z-10 pr-5"
                  {{-- style="background-image: url({{asset('images/img/image_3.png')}}); background-repeat: no-repeat; background-size:cover;" --}}>
                  <img src="{{ asset('images/svg/image_18.svg') }}" alt="impresora"
                    class="w-[200px] h-[200px] md:w-[450px] md:h-[450px] {{ !$item->title && !$item->description ? 'opacity-0' : '' }}">
                  <img src="{{ asset('images/img/image_59.png') }}" alt="impresora"
                    class="block md:hidden absolute mt-12 mr-16 w-[226px] h-[228px] {{ !$item->title && !$item->description ? 'opacity-0' : '' }}">
                  <img src="{{ asset($item->url_image . $item->name_image) }}" alt="impresora"
                    class="hidden md:block absolute mr-24 {{ !$item->title && !$item->description ? 'opacity-0' : '' }}">
                </div>
              </div>
            </div>
          @endforeach
        </div>
        <div class="relative pagination__mobile">
          <div class="swiper-pagination flex !items-center !justify-center !bottom-[30px] md:!bottom-[50px]">
          </div>
        </div>

        <div class="hidden md:block">
          <div class="swiper-button-next !text-white"></div>
          <div class="swiper-button-prev !text-white"></div>
        </div>
      </div>
    </section>

    <section class="w-11/12 mx-auto py-5">
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
        <div class="flex flex-row items-center w-full border-r xl:border-[#0711E5]">
          <div class="p-3"><img class="max-w-24" src="{{ asset('images/img/1mic.png') }}" /></div>
          <div class="flex flex-col gap-1 items-center justify-start pr-3">
            <p class="text-[#111111] text-base font-Montserrat_Bold w-full">COMPRA Y RECOGE</p>
            <p class="text-[#111111] text-sm font-Montserrat_Regular w-full leading-none">
              Separa tu producto y recojelo en nuestro punto
            </p>
          </div>
        </div>
        <div class="flex flex-row items-center w-full border-r xl:border-[#0711E5]">
          <div class="p-3"><img class="max-w-24" src="{{ asset('images/img/mic2.png') }}" /></div>
          <div class="flex flex-col gap-1 items-center justify-start pr-3">
            <p class="text-[#111111] text-base font-Montserrat_Bold w-full">DELIVERY GRATIS</p>
            <p class="text-[#111111] text-sm font-Montserrat_Regular w-full leading-none">
              En productos seleccionados
            </p>
          </div>
        </div>
        <div class="flex flex-row items-center w-full border-r xl:border-[#0711E5]">
          <div class="p-3"><img class="max-w-24" src="{{ asset('images/img/mic3.png') }}" /></div>
          <div class="flex flex-col gap-1 items-center justify-start pr-3">
            <p class="text-[#111111] text-base font-Montserrat_Bold w-full">PAGO SEGURO</p>
            <p class="text-[#111111] text-sm font-Montserrat_Regular w-full leading-none">
              Tarjeta crédito o débito, yape, plin, etc.
            </p>
          </div>
        </div>
        <div class="flex flex-row items-center w-full xl:border-[#0711E5]">
          <div class="p-3"><img class="max-w-24" src="{{ asset('images/img/mic4.png') }}" /></div>
          <div class="flex flex-col gap-1 items-center justify-start pr-3">
            <p class="text-[#111111] text-base font-Montserrat_Bold w-full">ASESORAMIENTO</p>
            <p class="text-[#111111] text-sm font-Montserrat_Regular w-full leading-none">
              Toda la información necesaria para tu compra
            </p>
          </div>
        </div>

      </div>
    </section>

    @if (count($category) > 0)
      <section class="w-11/12 mx-auto flex flex-col gap-7 pt-10">

        <div class="flex flex-col items-start md:flex-row md:justify-between md:items-center gap-5">
          <h2 class="text-[#111111] text-text32 md:text-text36 font-Montserrat_Bold w-1/2">Nuestras Categorías</h2>
          <div class="flex justify-start items-center">
            <a href="{{ route('catalogo') }}" class="flex justify-center items-center gap-2">
              <span class="text-text16 text-[#0051FF] md:text-text20 font-Montserrat_Bold">Ver todas las
                categorías</span>
              <div>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path d="M5 12H19" stroke="#0051FF" stroke-width="1.33333" stroke-linecap="round"
                    stroke-linejoin="round" />
                  <path d="M12 5L19 12L12 19" stroke="#0051FF" stroke-width="1.33333" stroke-linecap="round"
                    stroke-linejoin="round" />
                </svg>
              </div>
            </a>
          </div>
        </div>

        <div class="grid grid-cols-1 grid-rows-1 lg:grid-cols-4 lg:grid-rows-2 gap-5 md:gap-12">
          @if (count($category->take(3)) == 1)
            <div
              class="group col-span-1 lg:col-span-4 bg-[#F3F3F3] hover:bg-[#0051FF] p-5 md:p-10 flex flex-col md:flex-row gap-5 md:gap-10 justify-center overflow-hidden rounded-2xl"
              data-aos="fade-up" data-aos-offset="150">

              <div class="flex flex-col gap-5 w-full md:w-1/2 items-start justify-center">
                <a href="{{ route('catalogo', ['cat' => $category[0]->id]) }}">
                  <h2 class="text-text28 md:text-text32 font-Montserrat_Bold group-hover:text-white">
                    {{ $category[0]->name }}</h2>
                </a>

                <p class="font-Montserrat_Regular text-sm md:text-text16 group-hover:text-white">{!! $category[0]->description !!}
                </p>

                <div
                  class="flex flex-row justify-center items-center bg-[#0051FF] group-hover:bg-white rounded-lg overflow-hidden w-40  py-2">
                  <a href="{{ route('catalogo', ['cat' => $category[0]->id]) }}"
                    class="flex justify-center items-center gap-1">
                    <span class="text-text16 text-white group-hover:text-[#0051FF] md:text-text18 font-moderat_Bold ">
                      Ver productos
                    </span>
                    <div>
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 12H19" stroke="white" class="group-hover:stroke-[#0051FF]" stroke-width="1.33333"
                          stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M12 5L19 12L12 19" stroke="white" class="group-hover:stroke-[#0051FF]"
                          stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                      </svg>
                    </div>
                  </a>
                </div>

              </div>

              <div class="flex justify-end items-end md:items-center w-full md:w-1/2">
                <img src="{{ asset($category[0]->url_image . $category[0]->name_image) }}" alt="impresora"
                  class="w-full flex md:hidden object-contain aspect-video group-hover:scale-110 transition-transform duration-500">
                <img src="{{ asset($category[0]->url_image . $category[0]->name_image) }}" alt="impresora"
                  class="w-full hidden md:flex object-contain aspect-video group-hover:scale-110 transition-transform duration-500">
              </div>

            </div>
          @elseif (count($category->take(3)) == 2)
            <div
              class="group col-span-1 lg:row-span-2 lg:col-span-2 bg-[#F3F3F3] hover:bg-[#0051FF] p-5 flex flex-col gap-5 justify-center overflow-hidden rounded-2xl"
              data-aos="fade-up" data-aos-offset="150">
              <div class="flex flex-col gap-5 w-full ">
                <a href="{{ route('catalogo', ['cat' => $category[0]->id]) }}">
                  <h2 class="text-text28 md:text-text32 font-Montserrat_Bold group-hover:text-white">
                    {{ $category[0]->name }}</h2>
                </a>

                <p class="font-Montserrat_Regular text-sm md:text-text16 group-hover:text-white">{!! $category[0]->description !!}
                </p>
              </div>

              <div class="flex justify-end items-end md:items-center">
                <img src="{{ asset($category[0]->url_image . $category[0]->name_image) }}" alt="impresora"
                  class="w-full flex md:hidden object-contain aspect-video group-hover:scale-110 transition-transform duration-500">
                <img src="{{ asset($category[0]->url_image . $category[0]->name_image) }}" alt="impresora"
                  class="w-full hidden md:flex object-contain aspect-video group-hover:scale-110 transition-transform duration-500">
              </div>

              <div
                class="flex flex-row justify-center items-center bg-[#0051FF] group-hover:bg-white rounded-lg overflow-hidden w-40  py-2">
                <a href="{{ route('catalogo', ['cat' => $category[1]->id]) }}"
                  class="flex justify-center items-center gap-1">
                  <span class="text-text16 text-white group-hover:text-[#0051FF] md:text-text18 font-moderat_Bold ">
                    Ver productos
                  </span>
                  <div>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path d="M5 12H19" stroke="white" class="group-hover:stroke-[#0051FF]" stroke-width="1.33333"
                        stroke-linecap="round" stroke-linejoin="round" />
                      <path d="M12 5L19 12L12 19" stroke="white" class="group-hover:stroke-[#0051FF]"
                        stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                  </div>
                </a>
              </div>
            </div>
            <div
              class="group col-span-1 lg:row-span-2 lg:col-span-2 bg-[#F3F3F3] hover:bg-[#0051FF] p-5 flex flex-col gap-5 justify-center overflow-hidden rounded-2xl"
              data-aos="fade-up" data-aos-offset="150">
              <div class="flex flex-col gap-5 w-full ">
                <a href="{{ route('catalogo', ['cat' => $category[1]->id]) }}">
                  <h2 class="text-text28 md:text-text32 font-Montserrat_Bold group-hover:text-white">
                    {{ $category[1]->name }}</h2>
                </a>

                <p class="font-Montserrat_Regular text-[15px] group-hover:text-white">{!! $category[1]->description !!}</p>
              </div>

              <div class="flex justify-end items-end md:items-center">
                <img src="{{ asset($category[1]->url_image . $category[1]->name_image) }}" alt="impresora"
                  class="w-full flex md:hidden object-contain aspect-video group-hover:scale-110 transition-transform duration-500">
                <img src="{{ asset($category[1]->url_image . $category[1]->name_image) }}" alt="impresora"
                  class="w-full hidden md:flex object-contain aspect-video group-hover:scale-110 transition-transform duration-500">
              </div>

              <div
                class="flex flex-row justify-center items-center bg-[#0051FF] group-hover:bg-white rounded-lg overflow-hidden w-40 py-2">
                <a href="{{ route('catalogo', ['cat' => $category[1]->id]) }}"
                  class="flex justify-center items-center gap-1">
                  <span class="text-text16 text-white group-hover:text-[#0051FF] md:text-base font-moderat_Bold">
                    Ver productos
                  </span>
                  <div>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path d="M5 12H19" stroke="white" class="group-hover:stroke-[#0051FF]" stroke-width="1.33333"
                        stroke-linecap="round" stroke-linejoin="round" />
                      <path d="M12 5L19 12L12 19" stroke="white" class="group-hover:stroke-[#0051FF]"
                        stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                  </div>
                </a>
              </div>
            </div>
          @elseif (count($category->take(3)) == 3)
            <div
              class="group col-span-1 lg:row-span-2 lg:col-span-2 bg-[#F3F3F3] hover:bg-[#0051FF]  p-5 md:p-10 flex flex-col gap-5 justify-center overflow-hidden rounded-2xl"
              data-aos="fade-up" data-aos-offset="150">
              <div class="flex flex-col gap-2 w-full">
                <a href="{{ route('catalogo', ['cat' => $category[0]->id]) }}">
                  <h2 class="text-text28 md:text-text32 font-Montserrat_Bold group-hover:text-white">
                    {{ $category[0]->name }}</h2>
                </a>

                <p class="font-Montserrat_Regular text-[15px] group-hover:text-white">{!! $category[0]->description !!}</p>
              </div>

              <div class="flex justify-end items-end md:items-center">
                <img src="{{ asset($category[0]->url_image . $category[0]->name_image) }}" alt="impresora"
                  class="w-full flex md:hidden object-contain aspect-video group-hover:scale-110 transition-transform duration-500">
                <img src="{{ asset($category[0]->url_image . $category[0]->name_image) }}" alt="impresora"
                  class="w-full hidden md:flex object-contain aspect-video group-hover:scale-110 transition-transform duration-500">
              </div>

              <div
                class="flex flex-row justify-center items-center bg-[#0051FF] group-hover:bg-white rounded-lg overflow-hidden w-40 py-2">
                <a href="{{ route('catalogo', ['cat' => $category[0]->id]) }}"
                  class="flex justify-center items-center gap-1">
                  <span class="text-text16 text-white group-hover:text-[#0051FF] md:text-base font-moderat_Bold">
                    Ver productos
                  </span>
                  <div>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path d="M5 12H19" stroke="white" class="group-hover:stroke-[#0051FF]" stroke-width="1.33333"
                        stroke-linecap="round" stroke-linejoin="round" />
                      <path d="M12 5L19 12L12 19" stroke="white" class="group-hover:stroke-[#0051FF]"
                        stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                  </div>
                </a>
              </div>
            </div>

            <div
              class="group col-span-1 lg:row-span-1 lg:col-span-2 flex flex-col md:flex-row justify-between bg-[#F3F3F3] hover:bg-[#0051FF] pl-[5%] py-1 gap-2 md:gap-5 overflow-hidden rounded-2xl"
              data-aos="fade-up" data-aos-offset="150">

              <div class="flex flex-col gap-2 justify-center w-full  md:w-2/6 py-5 pr-5">
                <a href="{{ route('catalogo', ['cat' => $category[1]->id]) }}">
                  <h2 class="text-text28 md:text-text28 font-Montserrat_Bold group-hover:text-white">
                    {{ $category[1]->name }}</h2>
                </a>

                <p class="font-Montserrat_Regular text-[15px] group-hover:text-white">{!! $category[1]->description !!}</p>

                <div
                  class="flex flex-row justify-center items-center bg-[#0051FF] group-hover:bg-white rounded-lg overflow-hidden w-40  py-2">
                  <a href="{{ route('catalogo', ['cat' => $category[1]->id]) }}"
                    class="flex justify-center items-center gap-1">
                    <span class="text-text16 text-white group-hover:text-[#0051FF] md:text-base font-moderat_Bold">
                      Ver productos
                    </span>
                    <div>
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 12H19" stroke="white" class="group-hover:stroke-[#0051FF]" stroke-width="1.33333"
                          stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M12 5L19 12L12 19" stroke="white" class="group-hover:stroke-[#0051FF]"
                          stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                      </svg>
                    </div>
                  </a>
                </div>
              </div>

              <div class="flex justify-end items-center w-full  md:w-4/6">
                <img src="{{ asset($category[1]->url_image . $category[1]->name_image) }}" alt="impresora"
                  class="hidden md:block w-full object-contain object-right aspect-square md:aspect-video lg:aspect-square xl:aspect-[4/3] group-hover:scale-110 transition-transform duration-500">
                <img src="{{ asset($category[1]->url_image . $category[1]->name_image) }}" alt="impresora"
                  class="max-w-[70%] block md:hidden w-full object-contain object-right aspect-square md:aspect-video lg:aspect-square xl:aspect-[4/3] group-hover:scale-110 transition-transform duration-500">
              </div>

            </div>


            <div
              class="group col-span-1 lg:row-span-1 lg:col-span-2 flex flex-col md:flex-row justify-between bg-[#F3F3F3] hover:bg-[#0051FF] pr-[5%] py-1 gap-2 md:gap-5 overflow-hidden rounded-2xl"
              data-aos="fade-up" data-aos-offset="150">

              <div class="flex justify-end items-center basis-full md:basis-4/6">
                <img src="{{ asset($category[2]->url_image . $category[2]->name_image) }}" alt="impresora"
                  class="hidden md:block w-full object-contain object-left aspect-square md:aspect-video lg:aspect-square xl:aspect-[4/3] group-hover:scale-110 transition-transform duration-500">
                <img src="{{ asset($category[2]->url_image . $category[2]->name_image) }}" alt="impresora"
                  class="mr-auto max-w-[70%] block md:hidden w-full object-contain object-left aspect-square md:aspect-video lg:aspect-square xl:aspect-[4/3] group-hover:scale-110 transition-transform duration-500">
              </div>

              <div class="flex flex-col justify-center gap-2 basis-full md:basis-2/6 items-end py-5 pl-5">
                <a href="{{ route('catalogo') }}">
                  <h2 class="text-text28 md:text-text28 font-Montserrat_Bold text-right group-hover:text-white">
                    {{ $category[2]->name }}</h2>
                </a>

                <p class="font-Montserrat_Regular text-[15px] text-right group-hover:text-white">{!! $category[2]->description !!}
                </p>


                <div
                  class="flex flex-row justify-center items-center bg-[#0051FF] group-hover:bg-white rounded-lg overflow-hidden w-40  py-2">
                  <a href="{{ route('catalogo', ['cat' => $category[2]->id]) }}"
                    class="flex justify-center items-center gap-1">
                    <span class="text-text16 text-white group-hover:text-[#0051FF] md:text-base font-moderat_Bold">
                      Ver productos
                    </span>
                    <div>
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 12H19" stroke="white" class="group-hover:stroke-[#0051FF]" stroke-width="1.33333"
                          stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M12 5L19 12L12 19" stroke="white" class="group-hover:stroke-[#0051FF]"
                          stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                      </svg>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          @endif
        </div>

      </section>
    @endif

    @if (count($productosDestacados) > 0)
      <section class="w-full px-[5%] py-10 lg:py-16 mt-10 lg:mt-20 bg-[#f3f3f3]">
        @if ($general->titulo_destacados)
          <div class="flex flex-col md:flex-row md:justify-center items-start md:items-center pb-10 gap-5 md:gap-0">
            <p
              class="font-Montserrat_Bold text-text32 md:text-text36 tracking-wide leading-normal uppercase text-[#0711E5]">
              {{ $general->titulo_destacados }}</p>
            {{-- <div class="flex justify-start items-center">
            <a href="{{ route('catalogo') }}" class="flex justify-center items-center gap-2">
              <p
                class="text-[#3374FF] text-text16 font-Montserrat_Bold md:text-text20 flex justify-center items-center gap-3">
               Ver todos
                <span class="hidden md:block">los productos</span>
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
          </div> --}}
          </div>
        @endif

        <div class="grid grid-cols-2 lg:grid-cols-4 xl:grid-cols-5 gap-3 lg:gap-5 swiper destacados">
          <div class="swiper-wrapper">
            @foreach ($productosDestacados as $item)
              <div class="swiper-slide">
                <x-product.cardproduct bgcolor="bg-[#FFFFFF]" :item="$item" />
              </div>
            @endforeach
          </div>
        </div>
      </section>
    @endif

    @if (count($banners) > 0)
      <section class="w-full px-[5%] pt-10 md:pt-20">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 lg:gap-7">
          @foreach ($banners as $banner)
            <div class="w-full">
              <a href="{{ $banner->description }}">
                <img class="object-contain h-auto" src="{{ asset($banner->url_image) }}" />
              </a>
            </div>
          @endforeach
        </div>
      </section>
    @endif

    @if (count($cyber) > 0)
      <section class="w-full px-[5%] pt-10 md:pt-20">
        <div class="bg-[#0051FF] rounded-xl overflow-hidden px-5 md:px-10 pt-3 pb-5 md:pt-5 md:pb-10 ">

          <div class="flex flex-col md:flex-row md:justify-between items-start md:items-center pt-5 pb-7 gap-2">
            <p class="font-Montserrat_Bold text-base md:text-lg text-white ">¡PROMOS POR <span
                class="font-Montserrat_Bold">CYBER WOW TIEMPO LIMITADO!</span></p>
            <div class="flex justify-start items-center">

              {{-- <div class="countup flex flex-row gap-1 items-center" id="stopwatch">
                  <div class="bg-white text-[#0711E5] p-1 rounded-lg">
                    <span id="hour" class="timeel hours font-moderat_700">00</span>
                    <span class="timeel timeRefHours font-moderat_400">HR</span>
                  </div>
                  <span class="text-white font-moderat_700">:</span>
                  <div class="bg-white text-[#0711E5] p-1 rounded-lg">
                    <span id="min" class="timeel minutes font-moderat_700">00</span>
                    <span class="timeel timeRefMinutes font-moderat_400">MN</span>
                  </div>
                  <span class="text-white font-moderat_700">:</span>
                  <div class="bg-white text-[#0711E5] p-1 rounded-lg">
                    <span id="sec" class="timeel seconds font-moderat_700">00</span>
                    <span class="timeel timeRefSeconds font-moderat_400">SEG</span>
                  </div>
                </div> --}}
            </div>
          </div>

          <div>
            <div class="swiper cyber">
              <div class="swiper-wrapper">
                @foreach ($cyber as $item)
                  <div class="swiper-slide">
                    <div class="flex flex-row bg-white rounded-lg overflow-hidden p-2 gap-2">

                      <div class="w-2/5">
                        <img src="{{ asset($item->imagen) }}" alt="ss"
                          class="w-full object-contain md:object-contain aspect-square p-3"
                          onerror="this.onerror=null;this.src='/images/img/noimagen.jpg';" />
                      </div>

                      <div class="w-3/5 flex flex-col justify-center items-start">
                        <div class="flex flex-col gap-1">

                          <a href="/catalogo?marca={{ $item->marca_id }}">
                            <h3 class="font-Montserrat_Regular text-text12 md:text-sm text-[#111111]">
                              {{ $item->marca->name ?? 'S/M' }}</h3>
                          </a>

                          <a href="{{ route('producto', $item->id) }}">
                            <h2
                              class="font-Montserrat_Bold leading-normal text-sm  text-[#111111] line-clamp-2 tracking-tight">
                              {{ $item->producto }}
                            </h2>
                          </a>

                          @if ($item->descuento == 0)
                            <span
                              class="text-[#111111] text-text16 md:text-xl font-Montserrat_Bold font-bold md:font-medium">
                              S/. {{ $item->precio }}</span>
                          @else
                            <div class="flex flex-row gap-2 items-center">
                              <span
                                class="text-[#111111] text-text14 line-through font-Montserrat_Bold font-bold md:font-medium">S/.
                                {{ $item->descuento }}</span>
                              <span
                                class="text-[#111111] text-text16 md:text-xl font-moderat_Regular font-bold md:font-medium">S/.
                                {{ $item->precio }}</span>
                            </div>
                          @endif

                        </div>
                      </div>

                    </div>
                  </div>
                @endforeach
              </div>
            </div>
          </div>

        </div>
      </section>
    @endif

    @if (count($ofertasProductos) > 0)
      <section class="w-full px-[5%] py-10 lg:py-16 mt-10 lg:mt-20 bg-[#f3f3f3]">
        <div class="grid grid-cols-1 md:grid-cols-6  gap-5 lg:gap-7">
          <div class="md:col-span-2 flex flex-col items-center justify-center">
            <img src="{{ asset('images/img/bannervertical.PNG') }}?v={{ uniqid() }}" alt="ss"
              class="w-full object-cover aspect-[3/4] rounded-xl object-center"
              onerror="this.onerror=null;this.src='/images/img/noimagen.jpg';" />
          </div>

          <div class="md:col-span-4 flex flex-col justify-center gap-5">
            @if ($general->titulo_liquidacion)
              <div class="flex flex-row justify-center">
                <p class="font-Montserrat_Bold text-text32 tracking-normal leading-normal uppercase text-[#0711E5]">
                  {{ $general->titulo_liquidacion }}
                </p>
              </div>
            @endif
            <div>
              <div class="swiper ofertas">
                <div class="swiper-wrapper">

                  @foreach ($ofertasProductos as $item)
                    <div class="swiper-slide">
                      <x-product.cardproduct bgcolor="bg-[#FFFFFF]" :item="$item" />
                    </div>
                  @endforeach

                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    @endif

    {{-- <section class="w-full px-[5%] pt-20">
      @if (count($ofertasProductos))
        <div class="flex flex-col md:flex-row md:justify-between items-start md:items-center py-5">
          <p class="font-moderat_700 text-text32 md:text-text36">En Oferta</p>
          <div class="flex justify-start items-center">
            <a href="{{ route('catalogo') }}" class="flex justify-center items-center gap-2">
              <p
                class="text-[#3374FF] text-text16 font-moderat_Bold md:text-text20 flex justify-center items-center gap-3">
                <span>Ver todos</span>
                <span class="hidden md:block">los productos</span>
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
          @foreach ($ofertasProductos as $item)
            <div class="flex flex-col gap-5" data-aos="fade-up" data-aos-offset="150">
              <div class="bg-[#F3F3F3] flex flex-col justify-center relative">
               
                <div class="flex justify-start items-center absolute top-[5%] left-[5%]">
                  @foreach ($item->tags as $tag)
                    <span class="font-moderat_500 text-text10 md:text-text20 bg-[#0051FF] text-white py-1 px-2">
                      {{ $tag->name }}</span>
                  @endforeach
                </div>

                <div>
                  <div class="relative flex justify-center items-center aspect-square">
                    @if ($item->imagen)
                      <img x-show="{{ isset($item->imagen_ambiente) }} || !showAmbiente"
                        x-transition:enter="transition ease-out duration-300 transform"
                        x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-300 transform"
                        x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
                        src="{{ asset($item->imagen) }}" alt="{{ $item->name }}"
                        class="w-full object-contain md:object-cover absolute inset-0 aspect-square"
                        onerror="this.onerror=null;this.src='/images/img/noimagen.jpg';" />
                    @else
                      <img x-show="{{ isset($item->imagen_ambiente) }} || !showAmbiente"
                        x-transition:enter="transition ease-out duration-300 transform"
                        x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-300 transform"
                        x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
                        src="{{ asset('images/img/noimagen.jpg') }}" alt="imagen_alternativa"
                        class="w-full object-contain md:object-cover absolute inset-0 aspect-square" />
                    @endif
                  </div>
                </div>
              </div>

              <div class="flex flex-col">
                <div class="flex flex-col gap-2">
                  
                  <a href="/catalogo?marca={{$item->marca_id}}"><h3 class="font-moderat_Medium text-text12 md:text-sm text-[#111111]">{{ $item->marca->name ?? "S/M" }}</h3></a>

                  <a href="{{ route('producto', $item->id) }}">
                    <h2
                      class="font-moderat_700 leading-normal text-text16 md:text-lg text-[#111111] line-clamp-2 tracking-tight">
                      {{ $item->producto }}</h2>
                  </a>
              
                  @if ($item->descuento == 0)
                      <span class="text-[#111111] text-text16 md:text-xl font-space_grotesk font-bold md:font-medium"> S/. {{ $item->precio }}</span>
                  @else
                    <div class="flex flex-row gap-2 items-center">
                      <span class="text-[#111111] text-text14 line-through font-space_grotesk font-bold md:font-medium">S/. {{ $item->descuento }}</span>
                      <span class="text-[#111111] text-text16 md:text-xl font-space_grotesk font-bold md:font-medium">S/. {{ $item->precio }}</span>
                    </div>
                  @endif
                </div>
              </div>

            </div>
          @endforeach

        </div>
      @endif

    </section> --}}

    @if (count($logos) > 0)
      <section class="w-11/12 mx-auto bg-[#001232] text-white mt-20 fondo__marcas">
        <div class="flex flex-col gap-5 py-10 items-center" data-aos="fade-up" data-aos-offset="150">
          <h2 class="text-white font-Montserrat_Bold text-text32 md:text-text44 text-center">Aliados estratégicos con las
            marcas</h2>
          {{-- <p class="font-moderat_Regular text-base md:text-lg text-center w-full md:w-2/3">Colaboramos con una
            amplia variedad de marcas reconocidas a nivel mundial, ofreciendo productos de alta calidad que se adaptan a
            las necesidades tecnológicas de todos nuestros clientes.</p> --}}
        </div>

        <div class="swiper productos_marcas w-10/12 mx-auto">
          <div class="swiper-wrapper pt-5 pb-10">
            @foreach ($logos as $logo)
              <div class="swiper-slide">
                <a href="/catalogo?marca={{ $logo->id }}">
                  <div class="flex justify-center items-center">
                    <img src="{{ asset($logo->description) }}"
                      onerror="this.onerror=null;this.src='/images/img/noimagen.jpg';" alt="marcas">
                  </div>
                </a>
              </div>
            @endforeach
          </div>
        </div>
      </section>
    @endif


    @if (count($testimonios) > 0)
      <section class="bg-[#f3f3f3] py-10 md:py-20 mt-10 md:mt-20">
        <div class="w-11/12 mx-auto flex flex-col gap-3 items-center" data-aos="fade-up" data-aos-offset="150">
          <h2 class="font-Montserrat_Bold text-text32 md:text-text40 text-center">Clientes Satisfechos</h2>
          <p class="font-Montserrat_Regular text-base md:text-lg text-[#565656] text-center w-full md:w-2/3">Nuestros
            clientes
            confían en nosotros por la calidad y el servicio que ofrecemos. Ya sea por la rápida entrega de accesorios
            gamer o soluciones de impresión confiables, siempre estamos comprometidos con la satisfacción total.</p>
        </div>



        <div class="mt-16 w-11/12 lg:w-9/12 mx-auto  relative" data-aos="fade-up" data-aos-offset="150">
          <div class="swiper testimonios rounded-2xl">
            <div class="swiper-wrapper">

              @foreach ($testimonios as $item)
                <div class="swiper-slide">
                  <div class="flex flex-col gap-5 bg-[#FFFFFF] border-[1.5px] border-gray-100 shadow-md p-8">
                    <div class="flex justify-start items-center gap-5">
                      <div class="flex justify-center items-center">
                        <img src="{{ asset($item->imagen) }}" alt="usuario" class="rounded-full">
                      </div>
                      <div class="flex flex-col gap-2 justify-center">
                        <h3 class="font-Montserrat_Bold text-text24 md:text-text32 text-[#111111]">
                          {{ $item->name }}</h3>
                        <p class="font-Montserrat_Regular text-text12 md:text-text16 text-[#111111]">
                          {{ $item->departamento }} - {{ $item->country }}
                        </p>
                      </div>
                    </div>
                    <div>
                      <p class="text-[#565656] font-Montserrat_Regular text-text14 md:text-text18">
                        {!! $item->testimonie !!}
                      </p>
                    </div>
                  </div>
                </div>
              @endforeach
            </div>
          </div>
          <div class="custom-swiper-buttons lg:flex lg:absolute block ">
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>
        </div>

      </section>
    @endif

    @if (count($blog) > 0)
      <section class="w-11/12 mx-auto py-16">



        <div class="flex flex-col gap-10">
          <div class="flex flex-col justify-center gap-3 md:flex-row md:justify-between md:items-center">
            <div class="flex flex-col gap-5 basis-8/12">
              <h2 class="font-Montserrat_Bold text-text32 md:text-text40 text-[#111111] leading-none md:leading-tight">
                Últimas Publicaciones</h2>
              <p class="text-[#565656] text-text18 font-Montserrat_Regular">Descubre las últimas novedades en
                tecnología. Encuentra desde tintas y toners para impresoras hasta teclados mecánicos y accesorios gamer.
                ¡Mejora tu setup con nuestros monitores de alta resolución y laptops de última generación!</p>
            </div>

            <div class="flex justify-end items-center basis-4/12">
              <a href="{{ route('blog', 0) }}"
                class="font-Montserrat_Bold text-base md:text-lg py-3 rounded-xl px-5 bg-[#0051FF] text-white md:w-auto text-center w-full">Ver
                más Publicaciones</a>
            </div>
          </div>

          <div class="grid grid-cols-2 lg:grid-cols-3 gap-4 md:gap-10">

            @foreach ($blog as $item)
              <div class="hidden lg:flex  flex-col gap-5" data-aos="fade-up" data-aos-offset="150">
                <div>
                  <img src="{{ asset($item->url_image . $item->name_image) }} " alt="publicacion"
                    class="w-full aspect-video object-cover object-center shadow-lg rounded-lg">
                </div>
                <div class="flex flex-col gap-2">
                  <p class="font-Montserrat_Bold text-text12 md:text-text20 text-[#0051FF]">
                    {{ $item->categories->name ?? 'Sin categoria' }}
                  </p>
                  <a href="{{ route('post', $item->id) }}">
                    <h2 class="text-[#082252] font-Montserrat_Bold text-text16 md:text-text28 line-clamp-2 h-[84px]">
                      {{ $item->title }}
                    </h2>
                  </a>

                  <p
                    class="text-[#565656] font-Montserrat_Regular text-sm line-clamp-2 h-12 overflow-hidden text-ellipsis">
                    {!! strip_tags($item->description) !!}
                  </p>
                </div>

                <div
                  class="flex justify-start items-center text-text10 md:text-text14 text-[#0051FF] font-Montserrat_Regular gap-1 md:gap-2">
                  <p class="hidden lg:block">{{ Carbon::parse($item->created_at)->translatedFormat('d \d\e F \d\e Y') }}
                  </p>
                  <p class="block lg:hidden">{{ Carbon::parse($item->created_at)->format('d/m/Y') }}</p>
                  <img src="{{ asset('images/svg/image_17.svg') }}" alt="point" class="w-[3px] md:w-[6px]" />
                  {{-- <p>Leído hace 5 min</p> --}}
                </div>

              </div>
            @endforeach


            @foreach ($blog as $item)
              <div class="flex lg:hidden flex-col gap-5" data-aos="fade-up" data-aos-offset="150">
                <div>
                  <img src="{{ asset($item->url_image . $item->name_image) }} " alt="publicacion" class="w-full">
                </div>
                <div class="flex flex-col gap-2">
                  <p class="font-Montserrat_Bold text-text12 md:text-text20 text-[#0051FF]">
                    {{ $item->categories->name }}
                  </p>
                  <a href="{{ route('post', $item->id) }}">
                    <h2 class="text-[#082252] font-Montserrat_Bold text-text16 md:text-text28 line-clamp-2 h-[84px]">
                      {{ $item->title }}
                    </h2>
                  </a>

                  <p
                    class=" text-[#565656] font-Montserrat_Regular text-sm line-clamp-2 h-12 overflow-hidden text-ellipsis">
                    {!! strip_tags($item->description) !!}
                  </p>
                </div>

                <div
                  class="flex justify-start items-center text-text10 md:text-text14 text-[#0051FF] font-Montserrat_Regular gap-1 md:gap-2">
                  <p class="hidden lg:block">{{ Carbon::parse($item->created_at)->translatedFormat('d \d\e F \d\e Y') }}
                  </p>
                  <p class="block lg:hidden">{{ Carbon::parse($item->created_at)->format('d/m/Y') }}</p>
                  <img src="{{ asset('images/svg/image_17.svg') }}" alt="point" class="w-[3px] md:w-[6px]">
                  {{-- <p>Leído hace 5 min</p> --}}
                </div>

              </div>
            @endforeach

          </div>
        </div>



      </section>
    @endif

  </main>

@section('scripts_importados')
  <script>
    var swiper = new Swiper(".productos__main-mobile", {
      slidesPerView: 1,
      spaceBetween: 30,
      loop: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },

    });

    var swiper = new Swiper(".productos_marcas", {
      slidesPerView: 5,
      spaceBetween: 30,
      loop: true,
      grabCursor: true,
      centeredSlides: false,
      initialSlide: 0,
      autoplay: {
        delay: 1500,
        disableOnInteraction: false,
      },

      breakpoints: {
        0: {
          slidesPerView: 2,
          centeredSlides: true,
          loop: true,
        },
        1024: {
          slidesPerView: 5,
          centeredSlides: false,

        },
      },

    });

    var swiper = new Swiper(".testimonios", {
      slidesPerView: 2,
      spaceBetween: 30,
      loop: true,
      grabCursor: true,
      centeredSlides: false,
      initialSlide: 0,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      breakpoints: {
        0: {
          slidesPerView: 1,
        },
        1024: {
          slidesPerView: 2,
        },
      },

    });

    var swiper = new Swiper(".ofertas", {
      slidesPerView: 3,
      spaceBetween: 30,
      loop: true,
      grabCursor: true,
      centeredSlides: false,
      initialSlide: 0,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      breakpoints: {
        0: {
          slidesPerView: 2,
          spaceBetween: 15
        },

        1200: {
          slidesPerView: 3,
          spaceBetween: 20
        },
      },

    });

    var swiper = new Swiper(".cyber", {
      slidesPerView: 3,
      spaceBetween: 30,
      loop: true,
      grabCursor: true,
      centeredSlides: false,
      initialSlide: 0,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      breakpoints: {
        0: {
          slidesPerView: 1,
          spaceBetween: 15
        },

        800: {
          slidesPerView: 2,
          spaceBetween: 15
        },

        1200: {
          slidesPerView: 3,
          spaceBetween: 20
        },
      },

    });

    var swiper = new Swiper(".destacados", {
      slidesPerView: 5,
      spaceBetween: 30,
      loop: true,
      grabCursor: true,
      centeredSlides: false,
      initialSlide: 0,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      breakpoints: {
        0: {
          slidesPerView: 2,
          spaceBetween: 15
        },

        640: {
          slidesPerView: 3,
          spaceBetween: 15
        },

        768: {
          slidesPerView: 4,
          spaceBetween: 20
        },

        1024: {
          slidesPerView: 5,
          spaceBetween: 30
        },
      },

    });
  </script>
  <script>
    var appUrl = '{{ env('APP_URL') }}';
  </script>
  <script src="{{ asset('js/carrito.js') }}?v=totalcount.fixed"></script>

  {{-- <script>
      // Configuración inicial: tiempo total en segundos (por ejemplo, 1 hora)
      let totalTime = 36000; // 1 hora en segundos

      function updateCountdown() {
          // Calculamos horas, minutos y segundos restantes
          const hours = Math.floor(totalTime / 3600);
          const minutes = Math.floor((totalTime % 3600) / 60);
          const seconds = totalTime % 60;

          // Actualizamos los elementos en el DOM
          document.getElementById('hour').textContent = String(hours).padStart(2, '0');
          document.getElementById('min').textContent = String(minutes).padStart(2, '0');
          document.getElementById('sec').textContent = String(seconds).padStart(2, '0');

          // Reducimos el tiempo en 1 segundo
          totalTime--;

          // Si el tiempo llega a cero, detener el contador
          if (totalTime < 0) {
              clearInterval(countdown);
          }
      }

      // Actualizamos el contador cada segundo
      const countdown = setInterval(updateCountdown, 1000);
  </script> --}}

@stop

@stop
