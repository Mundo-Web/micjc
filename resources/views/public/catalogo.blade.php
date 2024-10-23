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
@endsection

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
            <div class="relative inline-block text-left w-full lg:w-auto">
              <select id="categorias"
                class="select2 focus:outline-none font-moderat_Bold text-text16 xl:text-text18 text-[#0051FF] border-[1.5px] border-gray-200 py-3 px-4 w-full lg:w-[200px]">
                <option value="">SELECCIONAR CATEGORIA</option>
                @foreach ($categorias as $cat)
                  <option value="{{ $cat->id }}" @if (isset($_GET['cat']) && $cat->id == $_GET['cat']) selected @endif>
                    {{ strtoupper($cat->name) }}
                  </option>
                @endforeach
              </select>
            </div>

            <div class="relative inline-block text-left w-full lg:w-auto">
              <select id="subCategoria"
                class="select2 focus:outline-none font-moderat_Bold text-text16 xl:text-text18 text-[#0051FF] border-[1.5px] border-gray-200 py-3 px-4 w-full lg:w-[200px]">
                <option value="">SELECCIONAR SUBCATEGORIA</option>
              </select>
            </div>

            <div class="relative inline-block text-left w-full lg:w-auto">
              <select id="selectMarcas"
                class="select2 focus:outline-none font-moderat_Bold text-text16 xl:text-text18 text-[#0051FF] border-[1.5px] border-gray-200 py-3 px-4 w-full lg:w-[200px]">
                <option value="">SELECCIONAR MARCA</option>
              </select>
            </div>
          </div>

          <div class="flex flex-col lg:flex-row gap-3 items-center">
            <div class="relative inline-block text-left w-full lg:w-auto">
              <select id="ordenItems"
                class="select2 focus:outline-none font-moderat_Bold text-text16 xl:text-text18 text-[#0051FF] border-[1.5px] border-gray-200 py-3 px-4 w-full lg:w-[200px]">
                <option value="">ORDENAR</option>
                <option value="menorAmayor">DE MENOR A MAYOR</option>
                <option value="mayorAmenor">DE MAYOR A MENOR</option>
                <option value="nameAsc">A - Z</option>
                <option value="nameDesc">Z - A</option>
              </select>
            </div>

            <div class="flex w-full lg:w-auto -mt-2">
              <input type="text" id="searchInput" placeholder="Buscar productos" class="w-full lg:w-[200px] focus:outline-none font-moderat_Bold text-text16  text-[#0051FF] border-[1.5px] border-gray-200 py-2 px-3" value="{{$_GET['search'] ?? ''}}">
              <button id="searchButton" class="bg-[#0051FF] text-white font-moderat_Bold text-text16  py-2 px-3 ml-2">Buscar</button>
            </div>
          </div>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5 md:gap-10">
          @foreach ($productos as $item)
            <div class="flex flex-col gap-5" data-aos="fade-up" data-aos-offset="150">
              <div class="bg-[#F3F3F3] aspect-square relative overflow-hidden">
                <div class="flex justify-start items-center absolute top-[5%] left-[5%] z-10">
                  @foreach ($item->tags as $tag)
                    <span class="font-moderat_500 text-text10 md:text-text20 bg-[#0051FF] text-white py-1 px-2">
                      {{ $tag->name }}
                    </span>
                  @endforeach
                </div>
                <a href="{{ route('producto', $item->id) }}" class="block w-full h-full">
                  <img src="{{ asset($item->imagen) }}" alt="{{ $item->producto }}" class="w-full h-full object-cover">
                </a>
              </div>

              <div class="flex flex-col gap-6">
                <div class="flex flex-col gap-3">
                  <h3 class="font-moderat_Medium text-text12 md:text-text20 text-[#1F1F1F]">{{ $item->extracto }}</h3>
                  <a href="{{ route('producto', $item->id) }}" title="{{ $item->producto }}">
                    <h2 class="font-moderat_700 leading-normal text-text16 md:text-text20 text-[#111111] line-clamp-3 tracking-tight">
                      {{ $item->producto }}</h2>
                  </a>
                  <p class="font-moderat_Regular text-text12 md:text-base text-[#565656] line-clamp-3">
                    {!! $item->description !!}
                  </p>
                  <p class="text-[#111111] text-text16 md:text-text28 font-space_grotesk font-bold md:font-medium">
                    S/ {{ $item->precio }}
                  </p>
                </div>
              </div>
            </div>
          @endforeach
        </div>

        <div data-aos="fade-up" data-aos-offset="150" class="py-10">
          {{ $productos }}
        </div>
      </div>
    </section>
  </main>
@endsection

@section('scripts_importados')
  <script>
    const obtenerSubcategorias = () => {
      let categoria = $('#categorias').val();
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
        $('#subCategoria').append('<option value="">SELECCIONAR SUBCATEGORIA</option>');
        $.each(res.subCategoria, function(key, value) {
          const option = document.createElement('option')
          option.textContent = value.name.toUpperCase()
          option.value = value.id
          option.selected = subcategoriaSeleccionada == value.id
          $('#subCategoria').append(option)
        });
        $('#subCategoria').trigger('change');
      });
    }

    const obtenerMarcas = () => {
      let subcategoria = $('#subCategoria').val();
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
        $('#selectMarcas').append('<option value="">SELECCIONAR MARCA</option>');
        $.each(res.selectMarcas, function(key, value) {
          const option = document.createElement('option')
          option.textContent = value.name.toUpperCase()
          option.value = value.id
          option.selected = value.id == marcaSeleccionada
          $('#selectMarcas').append(option)
        });
        $('#selectMarcas').trigger('change');
      });
    }

    const categoriaSeleccionada = {{ $_GET['cat'] ?? 'null' }};
    const subcategoriaSeleccionada = {{ $_GET['subcat'] ?? 'null' }};
    const marcaSeleccionada = {{ $_GET['marca'] ?? 'null' }};

    if (categoriaSeleccionada) obtenerSubcategorias()
    if (subcategoriaSeleccionada) obtenerMarcas()

    $(document).ready(function() {
      $('.select2').select2({
        width: '100%',
        dropdownParent: $('body')
      });

      $("#categorias").on('change', () => obtenerSubcategorias());

      $("#subCategoria").on('change', () => obtenerMarcas());

      $('#searchButton').on('click', function() {
        setUrl();
      });
    });

    function setUrl() {
      let categoria = $('#categorias').val();
      let subCat = $('#subCategoria').val();
      let marca = $('#selectMarcas').val();
      let orden = $('#ordenItems').val();
      let search = $('#searchInput').val();

      let url = new URL(window.location.href);
      let params = new URLSearchParams(url.search);

      if (categoria) params.set('cat', categoria);
      else params.delete('cat');

      if (subCat) params.set('subcat', subCat);
      else params.delete('subcat');

      if (marca) params.set('marca', marca);
      else params.delete('marca');

      if (orden) params.set('order', orden);
      else params.delete('order');

      if (search) params.set('search', search);
      else params.delete('search');

      url.pathname = '/catalogo';
      url.search = params.toString();
      window.location.href = url.toString();
    }
  </script>
@endsection