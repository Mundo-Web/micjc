@extends('components.public.matrix')

@section('css_importados')

  <style>
    .fondo__catalogo-desktop {
      background-image: none;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      background-image: url({{ asset('images/img/image_34.png') }});
    }

    @media (min-width:768px) {
      .fondo__catalogo-desktop {
        background-image: url({{ asset('images/img/image_33.png') }});
      }
    }

    .categorias::before,
    .subcategoria::before,
    .marca::before,
    .ordenar::before {
      background-image: url({{ asset('images/svg/image_50.svg') }});
    }
  </style>

@stop


@section('content')
  <main>
    <section class="w-11/12 mx-auto pb-16">
      <div class="bg-[#0051FF] py-5 fondo__catalogo-desktop" {{-- style="background-image: url({{asset('images/img/image_16.png')}}); background-repeat: no-repeat; background-size:cover;" --}}>
        <div class="grid grid-cols-1 lg:grid-cols-2" data-aos="fade-up" data-aos-offset="150">
          <div class="flex flex-col justify-center gap-5 order-1 lg:order-2 px-5 md:z-50 lg:-mx-[100px] w-full lg:w-11/12">
            <p class="text-white text-text18 md:text-text20 font-moderat_Bold blobk lg:hidden">Accesorios</p>
            <h1 class="text-text40 md:text-text48 font-moderat_700 text-white leading-[56px] md:leading-tight">
              Catálogo</h1>
            <p class="text-white text-text14 md:text-text16 font-moderat_Regular w-full lg:w-5/6 hidden lg:block">
              Productos digitales</p>

            <div class="flex lg:hidden justify-start items-center">
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
    </section>

    <section class="w-11/12 md:w-10/12 mx-auto">
      <div>

        <div class="flex flex-col gap-5 lg:flex-row lg:justify-between lg:gap-0 pb-10">
          <div class="flex flex-col lg:flex-row lg:justify-start gap-3">
            <div class="relative inline-block text-left w-auto">
              <div class="group">


                <!-- Dropdown menu -->
                <select id="categorias"
                  class="focus:outline-none font-moderat_Bold text-text16 xl:text-text18 mr-20 text-[#0051FF] border-[1.5px] border-gray-200 py-3 px-4 flex justify-between items-center w-full">
                  <div class="flex flex-col justify-start">
                    <option value="">Categorías</option>
                    @foreach ($categorias as $cat)
                      <option value="{{ $cat->id }}"
                        class="bg-[#0051FF] bg-opacity-25 w-full py-3 text-left px-4 text-white font-moderat_Bold hover:bg-[#3374FF] text-text16">
                        {{ $cat->name }}</option>
                    @endforeach

                  </div>



                </select>
              </div>
            </div>

            <div class="relative inline-block text-left w-auto">
              <div class="group">


                <!-- Dropdown menu -->
                <select id="subCategoria"
                  class="opacity-15 focus:outline-none font-moderat_Bold text-text16 xl:text-text18 mr-20 text-[#0051FF] border-[1.5px] border-gray-200 py-3 px-4 flex justify-between items-center w-full">
                  <div class="flex flex-col justify-start ">
                    <option
                      class="bg-[#0051FF] bg-opacity-25 w-full py-3 text-left px-4 text-white font-moderat_Bold hover:bg-[#3374FF] text-text16">
                      Eliga
                      una categoria</option>

                  </div>



                </select>
              </div>
            </div>

            <div class="relative inline-block text-left w-auto">
              <div class="group">


                <!-- Dropdown menu -->
                <select id="selectMarcas"
                  class="focus:outline-none font-moderat_Bold text-text16 xl:text-text18 mr-20 text-[#0051FF] border-[1.5px] border-gray-200 py-3 px-4 flex justify-between items-center w-full">
                  <div class="flex flex-col justify-start ">
                    <option
                      class="bg-[#0051FF] bg-opacity-25 w-full py-3  text-left px-4 text-white font-moderat_Bold hover:bg-[#3374FF] text-text16">
                      Todas</option>

                    @foreach ($marcas as $item)
                      <option value="{{ $item->id }}"
                        class="bg-[#0051FF] bg-opacity-25 w-full py-3  text-left px-4 text-white font-moderat_Bold hover:bg-[#3374FF] text-text16">
                        {{ $item->name }}</option>
                    @endforeach


                  </div>



                </select>
              </div>
            </div>

          </div>


          <div class="relative inline-block text-left w-auto">
            <div class="group">
              <button type="button"
                class="focus:outline-none font-moderat_Bold text-text16 xl:text-text18 mr-20 text-[#0051FF] border-[1.5px] border-gray-200 py-3 px-4 flex justify-between items-center w-full">

                <span>Ordenar</span>

                <!-- Dropdown arrow -->
                <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1 1L6.00081 5.58L11 1" stroke="#0051FF" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
                </svg>

              </button>

              <!-- Dropdown menu -->
              <div
                class="absolute left-0 w-full  origin-top-left bg-white divide-y divide-gray-100 rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition duration-300  z-[100]">
                <div class="flex flex-col justify-start ">
                  <a href=""
                    class="bg-[#0051FF] bg-opacity-25 w-full py-3 text-left px-4 text-white font-moderat_Bold hover:bg-[#3374FF] text-text16">De
                    menor a mayor</a>
                  <a href=""
                    class="bg-[#0051FF] bg-opacity-25 w-full py-3 text-left px-4 text-white font-moderat_Bold hover:bg-[#3374FF] text-text16">De
                    mayor a menor</a>
                  <a href=""
                    class="bg-[#0051FF] bg-opacity-25 w-full py-3 text-left px-4 text-white font-moderat_Bold hover:bg-[#3374FF] text-text16">A
                    - Z</a>
                  <a href=""
                    class="bg-[#0051FF] bg-opacity-25 w-full py-3 text-left px-4 text-white font-moderat_Bold hover:bg-[#3374FF] text-text16">Z
                    - A</a>
                  <a href=""
                    class="bg-[#0051FF] bg-opacity-25 w-full py-3 text-left px-4 text-white font-moderat_Bold hover:bg-[#3374FF] text-text16">BROTHER</a>
                </div>



              </div>
            </div>
          </div>


        </div>

        <div>
          <div class="grid grid-cols-2 lg:grid-cols-4 gap-5 md:gap-10">
            @foreach ($productos as $item)
              <div class="flex flex-col gap-5" data-aos="fade-up" data-aos-offset="150">
                <div class="bg-[#F3F3F3] flex flex-col justify-center pt-5 gap-20 relative">
                  <div class="flex justify-start items-center absolute top-[5%] left-[5%] gap-2">
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
                      <h2 class="font-moderat_700 text-text16 md:text-text28 text-[#111111]">{{ $item->producto }}
                      </h2>
                    </a>
                    <p class="font-moderat_Regular text-text12 md:text-text20 text-[#565656]">
                      {!! $item->description !!}</p>
                    <div class="flex justify-start items-center gap-2 md:gap-4">

                      {{-- <div class="rounded-full bg-[#00AEEF] w-4 h-4 md:w-6 md:h-6"></div>
                      <div class="rounded-full bg-[#EC008C] w-4 h-4 md:w-6 md:h-6"></div>
                      <div class="rounded-full bg-[#FFF200] w-4 h-4 md:w-6 md:h-6"></div>
                      <div class="rounded-full bg-[#000000] w-4 h-4 md:w-6 md:h-6"></div> --}}
                    </div>
                  </div>
                  <p class="text-[#111111] text-text16 md:text-text28 font-space_grotesk font-bold md:font-medium">
                    S/ {{ $item->precio }}
                  </p>
                </div>
              </div>
            @endforeach

          </div>
        </div>

        <div data-aos="fade-up" data-aos-offset="150" class="py-10">

          <div class="flex items-center gap-2 justify-center md:justify-end">
            <p class="text-[#111111] font-space_grotesk font-medium text-text16 md:text-text20">
              Pág.
            </p>
            <nav class="flex justify-between" aria-label="Pagination">
              <div class="flex items-center text-[16px] xl:text-text20 text-textGray">
                <a class="rounded-lg px-4 py-2 font-space_grotesk font-medium text-[#0711E5]" href="#">
                  1
                </a>
                <p>|</p>
                <a class="rounded-lg px-4 py-2 font-space_grotesk font-medium text-text16 md:text-text20"
                  href="#">2
                </a>
                <p>|</p>
                <a class="rounded-lg px-4 py-2 font-space_grotesk font-medium text-text16 md:text-text20"
                  href="#">3
                </a>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </section>
  </main>


@section('scripts_importados')
  <script>
    $(document).ready(function() {
      $("#categorias").on('change', function(e) {
        let categoria = $('#categorias').val();
        console.log(categoria)
        $.ajax({
          url: "{{ route('subcategoria.obtener') }}",
          dataType: "json",
          method: 'POST',
          data: {
            _token: $('input[name="_token"]').val(),
            id: categoria
          }
        }).done(function(res) {
          $('#subCategoria').empty();
          $('#subCategoria').append(
            '<option value="">Seleccionar Categoria</option>'
          )
          $('#subCategoria').toggleClass('opacity-15')
          $.each(res.subCategoria, function(key, value) {
            $('#subCategoria').append(
              '<option value="' + value['id'] + '">' + value['name'] + '</option>'
            )
          });
        });
      })

      $('#selectMarcas').on('change', function(e) {
        console.log('cambiando slect marcas')
        event.preventDefault();

        // Get the values from the form inputs
        let categoria = document.getElementById('categorias').value;
        let subCat = document.getElementById('subCategoria').value;

        let marca = document.getElementById('selectMarcas').value;
        setUrl(categoria, subCat, marca)
      })
    })
  </script>
  <script>
    function setUrl(categoria, subCat, marca) {

      // Create a URL object based on the current window location
      let url = new URL(window.location.href);

      // Use URLSearchParams to manipulate the query string
      let params = new URLSearchParams(url.search);

      // Update the parameters

      if (categoria) {
        params.set('cat', categoria);
      }

      if (subCat) {
        params.set('subcat', subCat);
      }
      if (marca) {
        params.set('marca', marca);
      }

      // Update the path to include 'propiedades'
      url.pathname = '/catalogo';

      // Set the updated search parameters
      url.search = params.toString();
      window.location.href = url.toString();
    }
  </script>

@stop

@stop
