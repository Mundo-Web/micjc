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
          <div class="swiper-slide bg-[#0051FF] pt-5 pb-20 md:py-24 fondo__slider-desktop" {{-- style="background-image: url({{asset('images/img/image_16.png')}}); background-repeat: no-repeat; background-size:cover;" --}}>
            <div class="grid grid-cols-1 lg:grid-cols-2" data-aos="fade-up" data-aos-offset="150">
              <div
                class="flex flex-col justify-center gap-5 order-1 lg:order-2 px-5 md:z-50 lg:-mx-[100px] w-full lg:w-11/12">
                <p class="text-white text-text18 md:text-text20 font-moderat_Bold">Accesorios</p>
                <h1 class="text-text40 md:text-text48 font-moderat_700 text-white leading-[56px] md:leading-tight">
                  Descubre lo digital: Productos innovadores</h1>
                <p class="text-white text-text14 md:text-text16 font-moderat_Regular w-full lg:w-5/6">
                  Selección de productos
                  digitales que facilitan la forma en que realizamos nuestras tareas cotidianas.</p>

                <div class="flex justify-start items-center">
                  <a href="#" class="flex justify-center items-center gap-2">
                    <span class="text-white text-text16 font-moderat_Bold">Ver productos</span>
                    <div>
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 12H19" stroke="white" stroke-width="1.33333" stroke-linecap="round"
                          stroke-linejoin="round" />
                        <path d="M12 5L19 12L12 19" stroke="white" stroke-width="1.33333" stroke-linecap="round"
                          stroke-linejoin="round" />
                      </svg>
                    </div>
                  </a>
                </div>
              </div>

              <div class="flex justify-end md:justify-end  items-center py-10 order-2 lg:order-1 relative lg:z-10 pr-5"
                {{-- style="background-image: url({{asset('images/img/image_3.png')}}); background-repeat: no-repeat; background-size:cover;" --}}>
                <img src="{{ asset('images/svg/image_18.svg') }}" alt="impresora"
                  class="w-[200px] h-[200px] md:w-[450px] md:h-[450px]">
                <img src="{{ asset('images/img/image_59.png') }}" alt="impresora"
                  class="block md:hidden absolute mt-12 mr-16 w-[226px] h-[228px]">
                <img src="{{ asset('images/img/image_58.png') }}" alt="impresora" class="hidden md:block absolute mr-24">
              </div>
            </div>
          </div>

          <div class="swiper-slide bg-[#0051FF] pt-5 pb-20 md:py-24 fondo__slider-desktop" {{-- style="background-image: url({{asset('images/img/image_16.png')}}); background-repeat: no-repeat; background-size:cover;" --}}>
            <div class="grid grid-cols-1 lg:grid-cols-2" data-aos="fade-up" data-aos-offset="150">
              <div
                class="flex flex-col justify-center gap-5 order-1 lg:order-2 px-5 md:z-50 lg:-mx-[100px] w-full lg:w-11/12">
                <p class="text-white text-text18 md:text-text20 font-moderat_Bold">Accesorios</p>
                <h1 class="text-text40 md:text-text48 font-moderat_700 text-white leading-[56px] md:leading-tight">
                  Descubre lo digital: Productos innovadores</h1>
                <p class="text-white text-text14 md:text-text16 font-moderat_Regular w-full lg:w-5/6">
                  Selección de productos
                  digitales que facilitan la forma en que realizamos nuestras tareas cotidianas.</p>

                <div class="flex justify-start items-center">
                  <a href="#" class="flex justify-center items-center gap-2">
                    <span class="text-white text-text16 font-moderat_Bold">Ver productos</span>
                    <div>
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 12H19" stroke="white" stroke-width="1.33333" stroke-linecap="round"
                          stroke-linejoin="round" />
                        <path d="M12 5L19 12L12 19" stroke="white" stroke-width="1.33333" stroke-linecap="round"
                          stroke-linejoin="round" />
                      </svg>
                    </div>
                  </a>
                </div>
              </div>

              <div class="flex justify-end md:justify-end  items-center py-10 order-2 lg:order-1 relative lg:z-10 pr-5"
                {{-- style="background-image: url({{asset('images/img/image_3.png')}}); background-repeat: no-repeat; background-size:cover;" --}}>
                <img src="{{ asset('images/svg/image_18.svg') }}" alt="impresora"
                  class="w-[200px] h-[200px] md:w-[450px] md:h-[450px]">
                <img src="{{ asset('images/img/image_59.png') }}" alt="impresora"
                  class="block md:hidden absolute mt-12 mr-16 w-[226px] h-[228px]">
                <img src="{{ asset('images/img/image_58.png') }}" alt="impresora" class="hidden md:block absolute mr-24">
              </div>
            </div>
          </div>

          <div class="swiper-slide bg-[#0051FF] pt-5 pb-20 md:py-24 fondo__slider-desktop" {{-- style="background-image: url({{asset('images/img/image_16.png')}}); background-repeat: no-repeat; background-size:cover;" --}}>
            <div class="grid grid-cols-1 lg:grid-cols-2" data-aos="fade-up" data-aos-offset="150">
              <div
                class="flex flex-col justify-center gap-5 order-1 lg:order-2 px-5 md:z-50 lg:-mx-[100px] w-full lg:w-11/12">
                <p class="text-white text-text18 md:text-text20 font-moderat_Bold">Accesorios</p>
                <h1 class="text-text40 md:text-text48 font-moderat_700 text-white leading-[56px] md:leading-tight">
                  Descubre lo digital: Productos innovadores</h1>
                <p class="text-white text-text14 md:text-text16 font-moderat_Regular w-full lg:w-5/6">
                  Selección de productos
                  digitales que facilitan la forma en que realizamos nuestras tareas cotidianas.</p>

                <div class="flex justify-start items-center">
                  <a href="#" class="flex justify-center items-center gap-2">
                    <span class="text-white text-text16 font-moderat_Bold">Ver productos</span>
                    <div>
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 12H19" stroke="white" stroke-width="1.33333" stroke-linecap="round"
                          stroke-linejoin="round" />
                        <path d="M12 5L19 12L12 19" stroke="white" stroke-width="1.33333" stroke-linecap="round"
                          stroke-linejoin="round" />
                      </svg>
                    </div>
                  </a>
                </div>
              </div>

              <div class="flex justify-end md:justify-end  items-center py-10 order-2 lg:order-1 relative lg:z-10 pr-5"
                {{-- style="background-image: url({{asset('images/img/image_3.png')}}); background-repeat: no-repeat; background-size:cover;" --}}>
                <img src="{{ asset('images/svg/image_18.svg') }}" alt="impresora"
                  class="w-[200px] h-[200px] md:w-[450px] md:h-[450px]">
                <img src="{{ asset('images/img/image_59.png') }}" alt="impresora"
                  class="block md:hidden absolute mt-12 mr-16 w-[226px] h-[228px]">
                <img src="{{ asset('images/img/image_58.png') }}" alt="impresora"
                  class="hidden md:block absolute mr-24">
              </div>
            </div>
          </div>
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
      <div class="grid grid-cols-2 md:grid-cols-4">
        <div class="flex flex-col gap-3 items-start w-full">
          <p class="text-[#0711E5] text-text52 font-moderat_700 text-center w-full md:text-left">1k+</p>
          <p class="text-[#111111] text-text16 font-moderat_Medium w-full md:w-1/2 text-center md:text-left">
            Clientes activos</p>
        </div>
        <div class="flex flex-col gap-3 items-end md:items-center w-full">
          <p class="text-[#0711E5] text-text52 font-moderat_700 w-full text-center">45+</p>
          <p class="text-[#111111] text-text16 font-moderat_Medium w-full md:w-1/2 text-center">Marcas exclusivas
          </p>
        </div>
        <div class="flex flex-col gap-3 items-start md:items-center w-full">
          <p class="text-[#0711E5] text-text52 font-moderat_700 w-full text-center">10k+</p>
          <p class="text-[#111111] text-text16 font-moderat_Medium w-full md:w-1/2 text-center">Órdenes
            Procesadas
            Anualmente</p>
        </div>
        <div class="flex flex-col gap-3 items-end w-full">
          <p class="text-[#0711E5] text-text52 font-moderat_700 w-full text-center md:text-right">1.8M+</p>
          <p class="text-[#111111] text-text16 font-moderat_Medium w-full md:w-1/2 text-center">Unidades
            entregadas
            Anualmente</p>
        </div>
      </div>
    </section>

    <section class="w-11/12 mx-auto flex flex-col gap-7 pt-10">

      <div class="flex flex-col items-start md:flex-row md:justify-between md:items-center gap-5">

        <h2 class="text-[#111111] text-text32 md:text-text36 font-moderat_700 w-1/2">Nuestras Categorías</h2>

        <div class="flex justify-start items-center">
          <a href="{{ route('catalogo') }}" class="flex justify-center items-center gap-2">
            <span class="text-text16 text-[#0051FF] md:text-text20 font-moderat_Bold">Ver todas las
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
          <div class="col-span-1 lg:row-span-4 lg:col-span-4 bg-[#F3F3F3] p-5 md:p-10 flex flex-col gap-5 justify-center"
            data-aos="fade-up" data-aos-offset="150">
            <div class="flex flex-col gap-5 w-full md:w-1/2">
              <a href="{{ route('catalogo', ['cat' => $category[0]->id]) }}">
                <h2 class="text-text28 md:text-text32 font-moderat_700 w-1/2">{{ $category[0]->name }}</h2>
              </a>

              <p class="font-moderat_Regular text-text12 md:text-text16">{!! $category[0]->description !!}</p>

              <div>
                <p class="font-moderat_Regular text-text12 md:text-text16 text-[#111111]">Desde</p>
                <p class="font-moderat_Bold text-text20 md:text-text24 text-[#111111]">S/. 99,99</p>
              </div>
            </div>

            <div class="flex justify-end items-end md:items-center">
              <img src="{{ asset($category[0]->url_image . $category[0]->name_image) }}" alt="impresora"
                class="w-full flex md:hidden object-cover">
              <img src="{{ asset($category[0]->url_image . $category[0]->name_image) }}" alt="impresora"
                class="w-full hidden md:flex">
            </div>

            <div class="flex justify-start items-center">
              <a href="{{ route('catalogo', ['cat' => $category[0]->id]) }}"
                class="flex justify-center items-center gap-2">
                <span class="text-text16 text-[#0051FF] md:text-text20 font-moderat_Bold">Ver productos</span>
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
        @elseif (count($category->take(3)) == 2)
          <div class="col-span-1 lg:row-span-2 lg:col-span-2 bg-[#F3F3F3] p-5 md:p-10 flex flex-col gap-5 justify-center"
            data-aos="fade-up" data-aos-offset="150">
            <div class="flex flex-col gap-5 w-full md:w-1/2">
              <a href="{{ route('catalogo', ['cat' => $category[0]->id]) }}">
                <h2 class="text-text28 md:text-text32 font-moderat_700 w-1/2">{{ $category[0]->name }}</h2>
              </a>

              <p class="font-moderat_Regular text-text12 md:text-text16">{!! $category[0]->description !!}</p>

              <div>
                <p class="font-moderat_Regular text-text12 md:text-text16 text-[#111111]">Desde</p>
                <p class="font-moderat_Bold text-text20 md:text-text24 text-[#111111]">S/. 99,99</p>
              </div>
            </div>

            <div class="flex justify-end items-end md:items-center">
              <img src="{{ asset($category[0]->url_image . $category[0]->name_image) }}" alt="impresora"
                class="w-full flex md:hidden object-cover">
              <img src="{{ asset($category[0]->url_image . $category[0]->name_image) }}" alt="impresora"
                class="w-full hidden md:flex">
            </div>

            <div class="flex justify-start items-center">
              <a href="{{ route('catalogo', ['cat' => $category[0]->id]) }}"
                class="flex justify-center items-center gap-2">
                <span class="text-text16 text-[#0051FF] md:text-text20 font-moderat_Bold">Ver productos</span>
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
          <div class="col-span-1 lg:row-span-2 lg:col-span-2 bg-[#F3F3F3] p-5 md:p-10 flex flex-col gap-5 justify-center"
            data-aos="fade-up" data-aos-offset="150">
            <div class="flex flex-col gap-5 w-full md:w-1/2">
              <a href="{{ route('catalogo', ['cat' => $category[1]->id]) }}">
                <h2 class="text-text28 md:text-text32 font-moderat_700 w-1/2">{{ $category[1]->name }}</h2>
              </a>

              <p class="font-moderat_Regular text-text12 md:text-text16">{!! $category[1]->description !!}</p>

              <div>
                <p class="font-moderat_Regular text-text12 md:text-text16 text-[#111111]">Desde</p>
                <p class="font-moderat_Bold text-text20 md:text-text24 text-[#111111]">S/. 99,99</p>
              </div>
            </div>

            <div class="flex justify-end items-end md:items-center">
              <img src="{{ asset($category[1]->url_image . $category[1]->name_image) }}" alt="impresora"
                class="w-full flex md:hidden object-cover">
              <img src="{{ asset($category[1]->url_image . $category[1]->name_image) }}" alt="impresora"
                class="w-full hidden md:flex">
            </div>

            <div class="flex justify-start items-center">
              <a href="{{ route('catalogo', ['cat' => $category[0]->id]) }}"
                class="flex justify-center items-center gap-2">
                <span class="text-text16 text-[#0051FF] md:text-text20 font-moderat_Bold">Ver productos</span>
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
        @elseif (count($category->take(3)) == 3)
          <div class="col-span-1 lg:row-span-2 lg:col-span-2 bg-[#F3F3F3] p-5 md:p-10 flex flex-col gap-5 justify-center"
            data-aos="fade-up" data-aos-offset="150">
            <div class="flex flex-col gap-5 w-full md:w-1/2">
              <a href="{{ route('catalogo', ['cat' => $category[0]->id]) }}">
                <h2 class="text-text28 md:text-text32 font-moderat_700 w-1/2">{{ $category[0]->name }}</h2>
              </a>

              <p class="font-moderat_Regular text-text12 md:text-text16">{!! $category[0]->description !!}</p>

              <div>
                <p class="font-moderat_Regular text-text12 md:text-text16 text-[#111111]">Desde</p>
                <p class="font-moderat_Bold text-text20 md:text-text24 text-[#111111]">S/. 99,99</p>
              </div>
            </div>

            <div class="flex justify-end items-end md:items-center">
              <img src="{{ asset($category[0]->url_image . $category[0]->name_image) }}" alt="impresora"
                class="w-full flex md:hidden object-cover">
              <img src="{{ asset($category[0]->url_image . $category[0]->name_image) }}" alt="impresora"
                class="w-full hidden md:flex">
            </div>

            <div class="flex justify-start items-center">
              <a href="{{ route('catalogo', ['cat' => $category[0]->id]) }}"
                class="flex justify-center items-center gap-2">
                <span class="text-text16 text-[#0051FF] md:text-text20 font-moderat_Bold">Ver productos</span>
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

          <div
            class="col-span-1 lg:row-span-1 lg:col-span-2 flex justify-between bg-[#F3F3F3] pl-5 py-5 md:p-10 md:gap-10"
            data-aos="fade-up" data-aos-offset="150">

            <div class="flex flex-col gap-5 justify-center basis-3/6 md:basis-2/6">
              <a href="{{ route('catalogo', ['cat' => $category[1]->id]) }}">
                <h2 class="text-text28 md:text-text32 font-moderat_700">{{ $category[1]->name }}</h2>
              </a>

              <p class="font-moderat_Regular text-text12 md:text-text16">{!! $category[1]->description !!}</p>
              <div>
                <p class="font-moderat_Regular text-text12 md:text-text16 text-[#111111]">Desde</p>
                <p class="font-moderat_Bold text-text20 md:text-text24 text-[#111111]">S/. 999,99</p>
              </div>


              <div class="flex justify-start items-center">
                <a href="{{ route('catalogo', ['cat' => $category[1]->id]) }}"
                  class="flex justify-center items-center gap-2">
                  <span class="text-text16 text-[#0051FF] md:text-text20 font-moderat_Bold">Ver
                    productos</span>
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

            <div class="flex justify-end items-end md:items-center basis-3/6 md:basis-4/6">
              <img src="{{ asset($category[1]->url_image . $category[1]->name_image) }}" alt="impresora"
                class="hidden md:block w-full object-cover">
              <img src="{{ asset($category[1]->url_image . $category[1]->name_image) }}" alt="impresora"
                class="block md:hidden w-full object-cover">
            </div>

          </div>

          <div
            class="col-span-1 lg:row-span-1 lg:col-span-2 bg-[#0051FF] flex justify-between text-white pr-5 py-5 gap-10 md:p-10 fondo__categorias-producto"{{-- 
                    style="background-image: url('{{ asset('images/img/image_9.png') }}'); background-repeat:no-repeat; background-size:cover;" --}}
            data-aos="fade-up" data-aos-offset="150">

            <div class="flex justify-end items-end md:items-center basis-3/6 md:basis-4/6">
              <img src="{{ asset($category[2]->url_image . $category[2]->name_image) }}" alt="impresora"
                class="hidden md:block w-full">
              <img src="{{ asset($category[2]->url_image . $category[2]->name_image) }}" alt="impresora"
                class="block md:hidden w-full">
            </div>

            <div class="flex flex-col justify-center gap-5 basis-3/6 md:basis-2/6">
              <a href="{{ route('catalogo') }}">
                <h2 class="text-text28 md:text-text32 font-moderat_700 text-right">{{ $category[2]->name }}</h2>
              </a>

              <p class="font-moderat_Regular text-text12 md:text-text16 text-right">{!! $category[2]->description !!}</p>
              <div>
                <p class="font-moderat_Regular text-text12 md:text-text16 text-right">Desde</p>
                <p class="font-moderat_Bold text-text20 md:text-text24 text-right">S/. 999,99</p>
              </div>

              <div class="flex justify-end items-center">
                <a href="{{ route('catalogo', ['cat' => $category[2]->id]) }}"
                  class="flex justify-center items-center
                  gap-2">
                  <span class="text-text16 text-[#FFFFFF] md:text-text20 font-moderat_Bold text-right">Ver
                    productos</span>
                  <div>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path d="M5 12H19" stroke="#FFFFFF" stroke-width="1.33333" stroke-linecap="round"
                        stroke-linejoin="round" />
                      <path d="M12 5L19 12L12 19" stroke="#FFFFFF" stroke-width="1.33333" stroke-linecap="round"
                        stroke-linejoin="round" />
                    </svg>
                  </div>
                </a>
              </div>
            </div>

          </div>
        @endif

      </div>



    </section>

    <section class="w-11/12 md:w-10/12 mx-auto pt-20">

      @if (count($productosDestacados) > 0)
        <div class="flex justify-between items-center py-5">
          <p class="font-moderat_700 text-text32 md:text-text36">Destacados</p>
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


          @foreach ($productosDestacados as $item)
            <div class="flex flex-col gap-5" data-aos="fade-up" data-aos-offset="150">
              <div class="bg-[#F3F3F3] flex flex-col justify-center pt-5 gap-20 relative">
                <div class="flex justify-start items-center absolute top-[5%] left-[5%]">
                  @foreach ($item->tags as $tag)
                    <span class="font-moderat_500 text-text10 md:text-text20 bg-[#0051FF] text-white py-1 px-2">
                      {{ $tag->name }}</span>
                  @endforeach
                </div>
                <div class="flex justify-center items-center py-10 md:py-20">
                  <a href="{{ route('producto', $item->id) }}"><img src="{{ asset($item->imagen) }}" alt="impresora"
                      class="w-[120px] h-[90px] md:w-auto md:h-auto"></a>

                </div>
              </div>

              <div class="flex flex-col gap-6">
                <div class="flex flex-col gap-3">
                  <h3 class="font-moderat_Medium text-text12 md:text-text20 text-[#1F1F1F]">{{ $item->extracto }}</h3>
                  <a href="{{ route('producto', $item->id) }}">
                    <h2 class="font-moderat_700 text-text16 md:text-text28 text-[#111111]">{{ $item->producto }}</h2>
                  </a>

                  <p class="font-moderat_Regular text-text12 md:text-text20 text-[#565656]">
                    {!! Str::limit($item->description, 200, '...') !!}
                  </p>
                  <div class="flex justify-start items-center gap-2 md:gap-4">

                  </div>
                  <p class="text-[#111111] text-text16 md:text-text28 font-space_grotesk font-bold md:font-medium">
                    S/ {{ $item->precio }}</p>
                </div>
              </div>

            </div>
          @endforeach

      @endif
    </section>

    @if (count($logos) > 0)
      <section class="w-11/12 mx-auto bg-[#001232] text-white mt-20 fondo__marcas">

        <div class="flex flex-col gap-5 py-10 items-center" data-aos="fade-up" data-aos-offset="150">
          <h2 class="text-white font-moderat_Bold text-text32 md:text-text44 text-center">Nuestras marcas
            asociadas
          </h2>
          <p class="font-moderat_Regular text-text16 md:text-text20 text-center w-full md:w-2/3">Lorem ipsum
            dolor
            sit
            amet, consectetur adipiscing elit. Vivamus eu fermentum justo, ac fermentum nulla. Sed sed
            scelerisque
            urna, vitae ultrices libero. Pellentesque vehicula et urna in venenatis.</p>
        </div>

        <div class="swiper productos_marcas w-10/12 mx-auto">
          <div class="swiper-wrapper pt-5 pb-10">
            @foreach ($logos as $logo)
              <div class="swiper-slide">
                <div class="flex justify-center items-center">
                  <img src="{{ asset($logo->url_image) }}" alt="marcas">
                </div>
              </div>
            @endforeach


          </div>
        </div>
      </section>
    @endif


    <section class="w-11/12 md:w-10/12 mx-auto pt-20">

      @if (count($ofertasProductos))
        <div class="flex justify-between items-center py-5">
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
              <div class="bg-[#F3F3F3] flex flex-col justify-center pt-5 gap-20 relative">
                <div class="flex justify-start items-center absolute top-[5%] left-[5%]">
                  @foreach ($item->tags as $tag)
                    <span class="font-moderat_500 text-text10 md:text-text20 bg-[#0051FF] text-white py-1 px-2">
                      {{ $tag->name }}</span>
                  @endforeach
                </div>
                <div class="flex justify-center items-center py-10 md:py-20">
                  <a href="{{ route('producto', $item->id) }}"><img src="{{ asset($item->imagen) }}" alt="impresora"
                      class="w-[120px] h-[90px] md:w-auto md:h-auto"></a>

                </div>
              </div>

              <div class="flex flex-col gap-6">
                <div class="flex flex-col gap-3">
                  <h3 class="font-moderat_Medium text-text12 md:text-text20 text-[#1F1F1F]">{{ $item->extracto }}</h3>
                  <a href="{{ route('producto', $item->id) }}">
                    <h2 class="font-moderat_700 text-text16 md:text-text28 text-[#111111]">{{ $item->producto }}</h2>
                  </a>

                  <p class="font-moderat_Regular text-text12 md:text-text20 text-[#565656]">
                    {!! $item->description !!}
                  </p>
                  <div class="flex justify-start items-center gap-2 md:gap-4">

                  </div>
                  <p class="text-[#111111] text-text16 md:text-text28 font-space_grotesk font-bold md:font-medium">
                    S/ {{ $item->precio }}</p>
                </div>
              </div>

            </div>
          @endforeach

        </div>
      @endif

    </section>


    @if (count($testimonios) > 0)
      <section class="bg-[#FBFBFB] pt-10 mt-10 pb-32">
        <div class="w-11/12 mx-auto flex flex-col gap-3 items-center" data-aos="fade-up" data-aos-offset="150">
          <h2 class="font-moderat_700 text-text32 md:text-text44 text-center">Clientes satisfechos</h2>
          <p class="font-moderat_Regular text-text14 text-[#565656] text-center w-full md:w-2/3">Lorem ipsum
            dolor sit
            amet, consectetur adipiscing elit. Vivamus eu fermentum justo, ac fermentum nulla. Sed sed
            scelerisque
            urna, vitae ultrices libero. Pellentesque vehicula et urna in venenatis.
          </p>
        </div>


        <div class="mt-16 w-11/12 lg:w-9/12 mx-auto  relative" data-aos="fade-up" data-aos-offset="150">
          <div class="swiper testimonios rounded-2xl">
            <div class="swiper-wrapper">

              @foreach ($testimonios as $item)
                <div class="swiper-slide">
                  <div class="flex flex-col gap-5 bg-[#FFFFFF] border-[1.5px] border-gray-100 shadow-md p-8">
                    <div class="flex justify-start items-center gap-5">
                      <div class="flex justify-center items-center">
                        <img src="{{ asset('images/img/image_24.png') }}" alt="usuario" class="rounded-full">
                      </div>
                      <div class="flex flex-col gap-2 justify-center">
                        <h3 class="font-moderat_Medium text-text24 md:text-text32 text-[#111111]">
                          {{ $item->name }}</h3>
                        <p class="font-moderat_Regular text-text12 md:text-text16 text-[#111111]">
                          {{ $item->departamento }} - {{ $item->country }}
                        </p>
                      </div>
                    </div>
                    <div>
                      <p class="text-[#565656] font-moderat_Regular text-text14 md:text-text18">
                        {{ $item->testimonie }}
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




    <section class="w-11/12 mx-auto py-16">
      @if (count($blog) > 0)
        {

        <div class="flex flex-col gap-10">
          <div class="flex flex-col justify-center gap-3 md:flex-row md:justify-between md:items-center">
            <div class="flex flex-col gap-5 basis-8/12">
              <h2 class="font-moderat_700 text-text44 md:text-text52 text-[#111111] leading-none md:leading-tight">
                Últimas publicaciones</h2>
              <p class="text-[#565656] text-text18 md:text-text22 font-moderat_Regular">Nam tempor diam quis urna
                maximus, ac laoreet arcu convallis. Aenean dignissim nec sem quis consequat.</p>
            </div>

            <div class="flex justify-end items-center basis-4/12">
              <a href="{{ route('blog') }}"
                class="font-moderat_Bold text-text16 md:text-text20 py-3 px-5 bg-[#0051FF] text-white md:w-auto text-center w-full">Ver
                más Publicaciones</a>
            </div>
          </div>

          <div class="grid grid-cols-2 lg:grid-cols-3 gap-4 md:gap-10">

            @foreach ($blog as $item)
              <div class="hidden lg:flex  flex-col gap-5" data-aos="fade-up" data-aos-offset="150">
                <div>
                  <img src="{{ asset($item->url_image . $item->name_image) }} " alt="publicacion" class="w-full">
                </div>
                <div class="flex flex-col gap-2">
                  <p class="font-moderat_Bold text-text12 md:text-text20 text-[#0051FF]">{{ $item->categories->name }}
                  </p>
                  <a href="{{ route('post', $item->id) }}">
                    <h2 class="text-[#082252] font-moderat_Bold text-text16 md:text-text28">
                      {{ $item->title }}
                    </h2>
                  </a>

                  <p class="text-[#565656] font-moderat_Regular text-text12 md:text-text20 ">
                    {!! $item->description !!}
                  </p>
                </div>

                <div
                  class="flex justify-start items-center text-text10 md:text-text14 text-[#0051FF] font-moderat_Medium gap-1 md:gap-2">
                  <p class="hidden lg:block">{{ Carbon::parse($item->created_at)->translatedFormat('d \d\e F \d\e Y') }}
                  </p>
                  <p class="block lg:hidden">{{ Carbon::parse($item->created_at)->format('d/m/Y') }}</p>
                  <img src="{{ asset('images/svg/image_17.svg') }}" alt="point" class="w-[3px] md:w-[6px]">
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
                  <p class="font-moderat_Bold text-text12 md:text-text20 text-[#0051FF]">{{ $item->categories->name }}
                  </p>
                  <a href="{{ route('post', $item->id) }}">
                    <h2 class="text-[#082252] font-moderat_Bold text-text16 md:text-text28">
                      {{ $item->title }}
                    </h2>
                  </a>

                  <p class="text-[#565656] font-moderat_Regular text-text12 md:text-text20 ">
                    {!! $item->description !!}
                  </p>
                </div>

                <div
                  class="flex justify-start items-center text-text10 md:text-text14 text-[#0051FF] font-moderat_Medium gap-1 md:gap-2">
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

      @endif

    </section>
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
      }

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
  </script>
  <script>
    var appUrl = '{{ env('APP_URL') }}';
  </script>
  <script src="{{ asset('js/carrito.js') }}"></script>


@stop

@stop
