@extends('components.public.matrix')
@section('title', 'Productos | ' . config('app.name', 'Laravel'))

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
                  class="selectpicker focus:outline-none font-moderat_Bold text-text16 xl:text-text18 mr-20 text-[#0051FF] border-[1.5px] border-gray-200 py-3 px-4 flex justify-between items-center w-full">
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
                  class="selectpicker focus:outline-none font-moderat_Bold text-text16 xl:text-text18 mr-20 text-[#0051FF] border-[1.5px] border-gray-200 py-3 px-4 flex justify-between items-center w-full">
                  <div class="flex flex-col justify-start ">
                    <option value=""
                      class="bg-[#0051FF] bg-opacity-25 w-full py-3 text-left px-4 text-white font-moderat_Bold hover:bg-[#3374FF] text-text16">
                      Elija
                      Sub-categoria</option>

                  </div>



                </select>
              </div>
            </div>

            <div class="relative inline-block text-left w-auto">
              <div class="group">


                <!-- Dropdown menu -->
                <select id="selectMarcas"
                  class=" selectpicker focus:outline-none font-moderat_Bold text-text16 xl:text-text18 mr-20 text-[#0051FF] border-[1.5px] border-gray-200 py-3 px-4 flex justify-between items-center w-full">
                  <div class="flex flex-col justify-start ">
                    <option value=""
                      class="bg-[#0051FF] bg-opacity-25 w-full py-3  text-left px-4 text-white font-moderat_Bold hover:bg-[#3374FF] text-text16">
                      Elija Marca</option>




                  </div>



                </select>
              </div>
            </div>

          </div>


          <div class="relative inline-block text-left w-auto">
            <div class="group">
              <select id="ordenItems"
                class="selectpicker focus:outline-none font-moderat_Bold text-text16 xl:text-text18 mr-20 text-[#0051FF] border-[1.5px] border-gray-200 py-3 px-4 flex justify-between items-center w-full">

                <option value="">Ordenar</option>

                <!-- Dropdown arrow -->
                {{--  <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1 1L6.00081 5.58L11 1" stroke="#0051FF" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
                </svg> --}}
                <option value="menorAmayor"
                  class="bg-[#0051FF] bg-opacity-25 w-full py-3 text-left px-4 text-white font-moderat_Bold hover:bg-[#3374FF] text-text16">
                  De
                  menor a mayor</option>
                <option value="mayorAmenor"
                  class="bg-[#0051FF] bg-opacity-25 w-full py-3 text-left px-4 text-white font-moderat_Bold hover:bg-[#3374FF] text-text16">
                  De
                  mayor a menor</option>
                <option value="nameAsc"
                  class="bg-[#0051FF] bg-opacity-25 w-full py-3 text-left px-4 text-white font-moderat_Bold hover:bg-[#3374FF] text-text16">
                  A
                  - Z</option>
                <option value="nameDesc"
                  class="bg-[#0051FF] bg-opacity-25 w-full py-3 text-left px-4 text-white font-moderat_Bold hover:bg-[#3374FF] text-text16">
                  Z
                  - A</option>

              </select>

              <!-- Dropdown menu -->
              {{--  <div
                class="absolute left-0 w-full  origin-top-left bg-white divide-y divide-gray-100 rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition duration-300  z-[100]">
                <div class="flex flex-col justify-start ">
                  <a onclick="Orderfn('menorAmayor')"
                    class="bg-[#0051FF] bg-opacity-25 w-full py-3 text-left px-4 text-white font-moderat_Bold hover:bg-[#3374FF] text-text16">De
                    menor a mayor</a>
                  <a onclick="Orderfn('mayorAmenor')"
                    class="bg-[#0051FF] bg-opacity-25 w-full py-3 text-left px-4 text-white font-moderat_Bold hover:bg-[#3374FF] text-text16">De
                    mayor a menor</a>
                  <a onclick="Orderfn('nameAsc')"
                    class="bg-[#0051FF] bg-opacity-25 w-full py-3 text-left px-4 text-white font-moderat_Bold hover:bg-[#3374FF] text-text16">A
                    - Z</a>
                  <a onclick="Orderfn('nameDesc')"
                    class="bg-[#0051FF] bg-opacity-25 w-full py-3 text-left px-4 text-white font-moderat_Bold hover:bg-[#3374FF] text-text16">Z
                    - A</a>
                  <a href=""                    class="bg-[#0051FF] bg-opacity-25 w-full py-3 text-left px-4 text-white font-moderat_Bold hover:bg-[#3374FF] text-text16">BROTHER</a>
                </div>



              </div> --}}
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
                  <div class="flex justify-center items-center py-2 md:py-2">

                    <a href="{{ route('producto', $item->id) }}"><img src="{{ asset($item->imagen) }}" alt="impresora"
                        class="object-cover md:w-auto md:h-auto hover:scale-125 transition-all duration-200"></a>

                  </div>
                </div>

                <div class="flex flex-col gap-6">
                  <div class="flex flex-col gap-3">
                    <h3 class="font-moderat_Medium text-text12 md:text-text20 text-[#1F1F1F]">{{ $item->extracto }}</h3>
                    <a href="{{ route('producto', $item->id) }}">
                      <h2 class="font-moderat_700 text-text16 md:text-text24 text-[#111111]">{{ $item->producto }}
                      </h2>
                    </a>
                    <p class="font-moderat_Regular text-text12 md:text-text20 text-[#565656]">
                      {!! Str::limit($item->description, 150, '...') !!}</p>
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
          {{ $productos }}
          {{-- <div class="flex items-center gap-2 justify-center md:justify-end">
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
          </div> --}}
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
          url: "{{ route('subcategoria.obtenerDepend') }}",
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
          // $('#subCategoria').toggleClass('opacity-15')
          $.each(res.subCategoria, function(key, value) {
            $('#subCategoria').append(
              '<option value="' + value['id'] + '">' + value['name'] + '</option>'
            )
          });
        });
      })

      $("#subCategoria").on('change', function(e) {
        let subcategoria = $('#subCategoria').val();
        console.log(subcategoria)
        $.ajax({
          url: "{{ route('marca.marcaDependiente') }}",
          dataType: "json",
          method: 'POST',
          data: {
            _token: $('input[name="_token"]').val(),
            id: subcategoria
          }
        }).done(function(res) {
          $('#selectMarcas').empty();
          $('#selectMarcas').append(
            '<option value="">Seleccionar Marca</option>'
          )
          // $('#selectMarcas').toggleClass('opacity-15')
          $.each(res.selectMarcas, function(key, value) {
            $('#selectMarcas').append(
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
    function setUrl(categoria, subCat, marca, order) {

      // Create a URL object based on the current window location
      let url = new URL(window.location.href);

      // Use URLSearchParams to manipulate the query string
      let params = new URLSearchParams(url.search);

      // Update the parameters

      if (categoria) {
        params.set('cat', categoria);
      } else {
        params.delete('cat');
      }

      if (subCat) {
        params.set('subcat', subCat);
      } else {
        params.delete('subcat');
      }
      if (marca) {
        params.set('marca', marca);
      } else {
        params.delete('marca');
      }
      if (order) {
        params.set('order', order)
      } else {
        params.delete('order');
      }

      // Update the path to include 'propiedades'
      url.pathname = '/catalogo';

      // Set the updated search parameters
      url.search = params.toString();
      window.location.href = url.toString();
    }

    $('#ordenItems').on('change', function() {
      let orden = $('#ordenItems').val();
      let categoria = document.getElementById('categorias').value ?? null;
      let subCat = document.getElementById('subCategoria').value ?? null;

      let marca = document.getElementById('selectMarcas').value ?? null;

      console.log('categotia  = ', categoria)
      console.log('subCat  = ', subCat)
      console.log('marca  = ', marca)
      setUrl(categoria, subCat, marca, orden)
    })
  </script>

  <script>
    var appUrl = '{{ env('APP_URL') }}';
    $(document).ready(function() {
      $('.selectpicker').select2();
    });
  </script>


  <script src="{{ asset('js/carrito.js') }}"></script>

@stop

@stop
