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

    .children-container {
      display: none;
    }
  </style>
@endsection

@section('content')
  <main>
    <section class="w-full px-[5%] pb-16 pt-10">
      <div class="bg-[#0051FF] py-5 fondo__catalogo-desktop" {{-- style="background-image: url({{asset('images/img/image_16.png')}}); background-repeat: no-repeat; background-size:cover;" --}}>
        <div class="grid grid-cols-1 lg:grid-cols-2" data-aos="fade-up" data-aos-offset="150">
          <div class="flex flex-col justify-center gap-5 order-1 lg:order-2 px-5 md:z-50 lg:-mx-[100px] w-full lg:w-11/12">
            <p class="text-white text-text18 md:text-text20 font-moderat_Bold blobk lg:hidden">Accesorios</p>
            <h1 class="text-text40 md:text-text48 font-moderat_700 text-white leading-[56px] md:leading-tight">
              Catálogo</h1>
            <p class="text-white text-text14 md:text-text16 font-moderat_Regular w-full lg:w-5/6 hidden lg:block">
              Productos digitales</p>
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

    <section class="w-full px-[5%]">

      <div class="grid grid-cols-1 lg:grid-cols-5">

        <div class="lg:col-span-1 flex flex-col gap-3 pb-10 pr-5">

          <div class=" flex flex-col gap-4 sticky top-48">
            <div class="relative inline-block text-left w-full lg:w-auto">
              <input id="input-search-catalogo" type="text"
                class="py-2 px-3 rounded-none w-full border-gray-300 font-Montserrat_Regular text-[16px]"
                placeholder="Buscar producto...">
            </div>
            <div class="relative flex flex-col gap-4">
              <div
                class="filter-blocker absolute top-0 -left-1 -right-1 h-full z-10 flex items-center justify-center bg-white opacity-50 cursor-not-allowed"
                style="display: none">
                <i class="fa fa-spinner fa-spin"> </i>
              </div>

              <div class="relative inline-block text-left w-full lg:w-auto">
                <h4 class="mb-2 font-Montserrat_Bold">CATEGORIA</h4>
                @foreach ($categorias as $category)
                  <div class="block-container">
                    <label class="block font-Montserrat_Regular py-0.5 cursor-pointer text-[16px]">
                      <input class="rounded w-5 h-5 border-gray-300 cursor-pointer me-1" type="checkbox" name="category"
                        value="{{ $category->id }}"
                        {{ isset($_GET['cat']) && $_GET['cat'] == $category->id ? 'checked' : '' }}>
                      <span>{{ strtoupper($category->name) }}</span>
                    </label>
                    @if ($category->subcategories)
                      <div class="ps-7 py-1 children-container"
                        style="{{ isset($_GET['cat']) && $_GET['cat'] == $category->id ? 'display: block' : '' }}">
                        @foreach ($category->subcategories->take(6) as $subcategory)
                          <label class="block font-Montserrat_Regular py-0.5 cursor-pointer text-[14px] text-gray-600">
                            <input class="rounded w-4 h-4 border-gray-300 cursor-pointer me-1" type="checkbox"
                              name="subcategory" value="{{ $subcategory->id }}" parent-id="{{ $category->id }}"
                              {{ isset($_GET['subcat']) && $_GET['subcat'] == $subcategory->id ? 'checked' : '' }}>
                            <span>{{ $subcategory->name }}</span>
                          </label>
                        @endforeach
                        @if ($category->subcategories->count() > 6)
                          <button
                            class="ms-7 py-0.5 font-Montserrat_SemiBold border-b text-[14px] text-gray-600 btn-filters"
                            data-modal="categories">
                            + Ver más
                          </button>
                        @endif
                      </div>
                    @endif
                  </div>
                @endforeach
                {{-- <select id="categorias"
                  class="select2 focus:outline-none font-moderat_Bold text-text16 xl:text-text18 text-[#0051FF] border-[1.5px] border-gray-200 py-3 px-4 w-full lg:w-[200px]">
                  <option value="">Categorías</option>
                  @foreach ($categorias as $cat)
                    <option value="{{ $cat->id }}" @if (isset($_GET['cat']) && $cat->id == $_GET['cat']) selected @endif>
                      {{ strtoupper($cat->name) }}
                    </option>
                  @endforeach
                </select> --}}
              </div>

              {{-- <div class="relative inline-block text-left w-full lg:w-auto">
                <select id="subCategoria"
                  class="select2 focus:outline-none font-moderat_Bold text-text16 xl:text-text18 text-[#0051FF] border-[1.5px] border-gray-200 py-3 px-4 w-full lg:w-[200px]">
                  <option value="">Subcategorías</option>
                </select>
              </div> --}}

              <div class="relative inline-block text-left w-full lg:w-auto">
                <h4 class="mb-2 font-Montserrat_SemiBold">MARCAS</h4>
                <div id="brands-list">
                  @foreach ($marcas->take(6) as $brand)
                    <label class="block font-Montserrat_Regular py-0.5 cursor-pointer text-[16px]">
                      <input class="rounded w-5 h-5 border-gray-300 cursor-pointer me-1" type="checkbox" name="brand"
                        value="{{ $brand->id }}">
                      <span>{{ strtoupper($brand->name) }}</span>
                    </label>
                  @endforeach
                </div>
                @if ($marcas->count() > 6)
                  <button class="ms-7 py-0.5 font-Montserrat_SemiBold border-b text-[16px] btn-filters"
                    data-modal="brands">
                    + VER MÁS
                  </button>
                @endif
                {{-- <select id="selectMarcas"
                  class="select2 focus:outline-none font-moderat_Bold text-text16 xl:text-text18 text-[#0051FF] border-[1.5px] border-gray-200 py-3 px-4 w-full lg:w-[200px]">
                  <option value="">Marca</option>
                </select> --}}
              </div>
            </div>
            <div class="relative inline-block text-left w-full lg:w-auto">
              <h4 class="mb-2 font-Montserrat_SemiBold">ORDENAR</h4>
              <div class="flex flex-col gap-1">
                <label class="font-Montserrat_Regular">
                  <input type="radio" class="w-5 h-5 border-gray-300 cursor-pointer me-1" name="ordenItems"
                    value="preciofiltro|asc">
                  <span class="cursor-pointer">DE MENOR A MAYOR</span>
                </label>
                <label class="font-Montserrat_Regular">
                  <input type="radio" class="w-5 h-5 border-gray-300 cursor-pointer me-1" name="ordenItems"
                    value="preciofiltro|desc">
                  <span class="cursor-pointer">DE MAYOR A MENOR</span>
                </label>
                <label class="font-Montserrat_Regular">
                  <input type="radio" class="w-5 h-5 border-gray-300 cursor-pointer me-1" name="ordenItems"
                    value="producto|asc" checked>
                  <span class="cursor-pointer">POR NOMBRE (A - Z)</span>
                </label>
                <label class="font-Montserrat_Regular">
                  <input type="radio" class="w-5 h-5 border-gray-300 cursor-pointer me-1" name="ordenItems"
                    value="producto|desc">
                  <span class="cursor-pointer">POR NOMBRE (Z - A)</span>
                </label>
              </div>
              {{-- <select id="ordenItems"
                class="select2 focus:outline-none font-Montserrat_Regular text-text16 xl:text-text18 text-[#0051FF] border-[1.5px] border-gray-200 py-3 px-4 w-full ">
                <option value="preciofiltro|asc">DE MENOR A MAYOR</option>
                <option value="preciofiltro|desc">DE MAYOR A MENOR</option>
                <option value="producto|asc" selected>POR NOMBRE (A - Z)</option>
                <option value="producto|desc">POR NOMBRE (Z - A)</option>
              </select> --}}
            </div>

            {{-- <div class="flex w-full">
              <button id="searchButton"
                class="bg-[#0051FF] text-white font-moderat_Bold text-text16 w-full  py-2 px-3 ">Buscar</button>
            </div> --}}
          </div>

        </div>

        <div class="lg:col-span-4">
          <div class="grid grid-cols-2 md:grid-cols-3  gap-5 md:gap-7 min-h-80" id="catalogo-result">
            {{-- @foreach ($productos as $item)
              <x-product.cardproduct bgcolor="bg-[#FFFFFF]" :item="$item" />
            @endforeach --}}

          </div>
          <div class="relative w-full font-medium flex flex-row justify-center items-center mt-[2.5%] mb-[5%]">
            <nav aria-label="Page navigation example w-full">
              <div
                class="filter-blocker absolute top-0 -left-1 -right-1 h-full z-10 flex items-center justify-center bg-white opacity-50 cursor-not-allowed"
                style="display: none">
                <i class="fa fa-spinner fa-spin"> </i>
              </div>
              <ul id="pages-filter" class="flex flex-wrap items-center gap-1 -space-x-px text-base justify-center">
                <li>
                  <button
                    class="cursor-pointer flex items-center justify-center px-4 h-10 w-10 leading-tight text-gray-500 hover:bg-white rounded-full bg-gray-100 hover:text-gray-700"
                    type="button">
                    ←
                  </button>
                </li>
                <li class="block">
                  <button aria-current="page"
                    class="cursor-pointer z-10 flex items-center justify-center px-4 h-10 w-10 leading-tight  hover:bg-white rounded-full bg-gray-100 text-gray-500 hover:text-gray-700"
                    type="button">
                    1
                  </button>
                </li>
                <li>
                  <button
                    class="cursor-pointer flex items-center justify-center px-4 h-10 w-10 leading-tight text-gray-500 hover:bg-white rounded-full bg-gray-100 hover:text-gray-700"
                    type="button">
                    →
                  </button>
                </li>
              </ul>
            </nav>
          </div>
          {{-- <div data-aos="fade-up" data-aos-offset="150" class="py-10 w-full">
            {{ $productos }}
          </div> --}}
        </div>

      </div>

    </section>

    <div id="filters-modal-categories"
      class="modal bg-white !opacity-100 h-max !max-w-[720px] min-h-[300px] max-h-[calc(100vh-200px)]">
      <h4 class="mb-2 font-Montserrat_Bold">CATEGORIA</h4>
      <div class="grid md:grid-cols-2 gap-4">
        @foreach ($categorias as $category)
          <div class="block-container">
            <label class="block font-Montserrat_Regular py-0.5 cursor-pointer text-[16px]">
              <input class="rounded w-5 h-5 border-gray-300 cursor-pointer me-1" type="checkbox" name="category"
                value="{{ $category->id }}"
                {{ isset($_GET['cat']) && $_GET['cat'] == $category->id ? 'checked' : '' }}>
              <span>{{ strtoupper($category->name) }}</span>
            </label>
            @if ($category->subcategories)
              <div class="ps-7 py-1">
                @foreach ($category->subcategories as $subcategory)
                  <label class="block font-Montserrat_Regular py-0.5 cursor-pointer text-[14px] text-gray-600">
                    <input class="rounded w-4 h-4 border-gray-300 cursor-pointer me-1" type="checkbox"
                      name="subcategory" value="{{ $subcategory->id }}" parent-id="{{ $category->id }}"
                      {{ isset($_GET['subcat']) && $_GET['subcat'] == $subcategory->id ? 'checked' : '' }}>
                    <span>{{ $subcategory->name }}</span>
                  </label>
                @endforeach
              </div>
            @endif
          </div>
        @endforeach
      </div>
    </div>

    <div id="filters-modal-brands"
      class="modal bg-white !opacity-100 h-max !max-w-[720px] min-h-[300px] max-h-[calc(100vh-200px)]">
      <h4 class="mb-2 font-Montserrat_SemiBold">MARCAS</h4>
      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-1">
        @foreach ($marcas as $brand)
          <label class="block font-Montserrat_Regular py-0.5 cursor-pointer text-[16px]">
            <input class="rounded w-5 h-5 border-gray-300 cursor-pointer me-1" type="checkbox" name="brand"
              value="{{ $brand->id }}">
            <span>{{ strtoupper($brand->name) }}</span>
          </label>
        @endforeach
      </div>
    </div>
  </main>
@endsection

@section('scripts_importados')
  <script>
    var brandsDB = @json($marcas);
    $(document).on('click', '.btn-filters', (e) => $(`#filters-modal-${$(e.target).data('modal')}`).modal('show'))

    var triggeredBy =
      @if (isset($_GET['cat']) || isset($_GET['subcat']))
        'category'
      @else
        null
      @endif ;
    let controllerCatalogo = new AbortController();
    var currentPage = 1;
    $(document).on('change', '[name="category"]', e => {
      const childrenContainer = $(`[name="category"][value="${e.target.value}"]`).parents('.block-container').find(
        '.children-container')
      if (e.target.checked) {
        childrenContainer.show(125)
      } else {
        childrenContainer.hide(125)
        $(`[name="subcategory"][parent-id="${e.target.value}"]`).prop('checked', false)
      }
      $(`[name="category"][value="${e.target.value}"]`).prop('checked', e.target.checked)
      triggeredBy = triggeredBy == null ? 'category' : triggeredBy
      currentPage = 1;
      obtenerProductosCatalogo()
    })

    $(document).on('change', '[name="subcategory"]', e => {
      $(`[name="subcategory"][value="${e.target.value}"]`).prop('checked', e.target.checked)
      if (e.target.checked) {
        $(`[name="category"][value="${$(e.target).attr('parent-id')}"]`).prop('checked', true)
      }
      triggeredBy = triggeredBy == null ? 'category' : triggeredBy
      currentPage = 1;
      obtenerProductosCatalogo()
    })

    $(document).on('change', '[name="brand"]', e => {
      $(`[name="brand"][value="${e.target.value}"]`).prop('checked', e.target.checked)
      triggeredBy = triggeredBy == null ? 'brand' : triggeredBy
      currentPage = 1;
      obtenerProductosCatalogo()
    })

    $(document).on('keyup', '#input-search-catalogo', e => {
      // triggeredBy = null
      currentPage = 1;
      obtenerProductosCatalogo()
    })

    $(document).on('change', '[name="ordenItems"]', e => {
      // triggeredBy = null
      currentPage = 1;
      obtenerProductosCatalogo()
    })

    $(document).on('change', '[name="paginator"]', e => {
      currentPage = e.target.value;
    })

    $(document).on('click', '[data-pagination]', e => {
      const action = $(e.target).data('pagination')

      switch (action) {
        case 'add':
          currentPage++;
          break;
        case 'reduce':
          currentPage--;
          break;
        default:
          currentPage = parseInt($(e.target).val())
          break;
      }

      obtenerProductosCatalogo()
    })

    const obtenerProductosCatalogo = async () => {
      $('.filter-blocker').show(0)

      const search = $('#input-search-catalogo').val()
      const categories = [...new Set([...$('[name="category"]:checked')].map(e => e.value))]
      const subcategories = [...new Set([...$('[name="subcategory"]:checked')].map(e => e.value))]
      const brandsSelected = [...new Set([...$('[name="brand"]:checked')].map(e => e.value))]
      const order = $('[name="ordenItems"]:checked').val()

      if (categories.length == 0 && subcategories.length == 0 && brandsSelected.length == 0) {
        triggeredBy = null
      }

      controllerCatalogo.abort();
      controllerCatalogo = new AbortController();

      try {
        const res = await fetch("{{ route('buscarProductos') }}", {
            method: 'POST',
            headers: {
              'Content-Type': 'application/json',
              'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({
              valorInput: search,
              categories,
              subcategories,
              brands: brandsSelected,
              take: 12,
              skip: 12 * (currentPage - 1),
              order,
              triggeredBy
            }),
            signal: controllerCatalogo.signal
          })
          .then(response => response.json())
          .then(({
            data,
            categories,
            brands,
            totalCount
          }) => {
            $('#catalogo-result').html('')
            data.forEach(x => {
              $('#catalogo-result').append(`<div x-data="{ showAmbiente: false }" @mouseenter="showAmbiente = true" @mouseleave="showAmbiente = false"
                class="flex flex-col rounded-xl gap-3  overflow-hidden  bg-[#FFFFFF]">
                <div class="bg-[#FFFFFF] flex flex-col justify-center relative product_container">


                  <div class="flex flex-row justify-end items-center absolute top-5 right-[5%] z-[1]">
                    ${
                    x.descuento > 0 ? `<span
                                                                                                  class="font-Montserrat_Bold text-[13px] rounded-l-full rounded-br-full tracking-tight  bg-black text-white py-1 px-2">
                                                                                                  AHORRA
                                                                                                  ${Math.round((x.precio - x.descuento) / x.precio) * 100 }%
                                                                                                </span>`: x.tags?.map(tag => {
                        return `<span class="font-Montserrat_Bold text-[13px] rounded-l-full rounded-br-full text-white py-1 px-2"
                                                                                                    style="background-color: ${tag.color}">
                                                                                                      ${tag.name}
                                                                                                    </span>`
                      }).join('')
                    }
                  </div>

                  <div>
                    <a href="/producto/${x.id}" class="relative flex justify-center items-center aspect-square group">
                      <img
                        class="w-full object-contain md:object-cover absolute inset-0 aspect-square transition-transform duration-300 bg-gray-100 ease-in-out transform group-hover:scale-[115%] hover:transition-transform hover:duration-300"
                        src="${x.imagen ? `/${x.imagen}`: '/images/img/noimagen.jpg'}"
                        alt="${ x.imagen ? x.producto : 'Imagen alternativa' }"
                        onerror="this.onerror=null;this.src='/images/img/noimagen.jpg';"
                        style="view-transition-name: product-detail-${x.id}" />
                      <img
                        class="w-full object-cover md:object-cover absolute inset-0 aspect-square transition-transform duration-300 bg-gray-100 ease-in-out transform group-hover:scale-[115%] hover:transition-transform hover:duration-300"
                        src="${x.imagen ? `/${x.imagen}`: '/images/img/noimagen.jpg'}"
                        alt="${ x.imagen ? x.producto : 'Imagen alternativa' }"
                        style="view-transition-name: product-detail-${x.id}" />
                    </a>
                  </div>
                </div>


                <div class="flex flex-col bg-white p-2 md:px-5 pb-3 sm:pb-0 z-[2]">
                  <div class="flex flex-col gap-2 md:gap-2">
                    ${
                      x.descuento == 0 ? `<span class="text-[#111111] text-text16 md:text-xl font-Montserrat_Bold font-bold ">
                                                                                                    S/. ${Number(x.precio).toFixed(2)}
                                                                                                  </span>`: `<div class="flex flex-row gap-2  justify-start items-center">
                                                                                                    <span class="text-[#111111] text-sm md:text-xl font-Montserrat_Bold font-bold ">
                                                                                                      S/. ${Number(x.descuento).toFixed(2)}
                                                                                                    </span>
                                                                                                    <span class="text-[#111111] text-xs line-through font-Montserrat_Regular font-bold md:font-medium">
                                                                                                      S/. ${Number(x.precio).toFixed(2)}
                                                                                                    </span>
                                                                                                  </div>`
                    }
                    <a href="/producto/${x.id}">
                      <h2
                        class="font-Montserrat_SemiBold leading-normal uppercase text-sm md:text-base text-[#111111] line-clamp-2 tracking-tight">
                        ${x.producto}
                      </h2>
                    </a>

                    <a href="/catalogo?marca=${x.marca_id}">
                      <h3 class="font-Montserrat_SemiBold text-text12 md:text-sm text-opacity-50 text-[#111111]">
                        ${x?.marca?.name ?? 'S/M'}
                      </h3>
                    </a>


                    <div class="addProduct flex flex-row items-center justify-center cursor-pointer py-2 sm:mb-4">
                      <button data-id="${x.id}" type="button" id='btnAgregarCarrito'
                        class="uppercase text-white text-[11px] md:text-sm font-Montserrat_Bold font-semibold bg-[#0051FF] px-4 py-3 rounded-3xl">
                        <i class="fa fa-cart"></i>
                        Añadir al carrito
                      </button>
                    </div>

                  </div>
                </div>

              </div>`)
            })

            $('#brands-list').html('')
            const brandsTD = brandsDB.filter(x => brands == null || brands.find(b => b.id == x.id));
            brandsTD.slice(0, 6).map(b => {
              $('#brands-list').append(`<label class="block font-Montserrat_Regular py-0.5 cursor-pointer text-[16px]">
                  <input class="rounded w-5 h-5 border-gray-300 cursor-pointer me-1" type="checkbox" name="brand"
                    value="${b.id}" ${brandsSelected.includes(String(b.id)) ? 'checked' : ''}>
                  <span>${b.name.toUpperCase()}</span>
                </label>`)
            })

            if (brandsTD.length > 6) $('[data-modal="brands"]').show()
            else $('[data-modal="brands"]').hide()

            if (triggeredBy == null) {
              $('[name="category"]').parents('.block-container').show()
              $('[name="brand"]').parent().show()
            }

            if (categories != null) {
              $('[name="category"]').parents('.block-container').hide()
              categories.map(({
                id
              }) => {
                $(`[name="category"][value="${id}"]`).parents('.block-container').show()
              })
            }

            if (brands != null) {
              $('[name="brand"]').parent().hide()
              brands.map(({
                id
              }) => {
                $(`[name="brand"][value="${id}"]`).parent().show()
              })
            }

            const pages = Math.ceil(totalCount / 12);
            let paginationArray = [];
            const maxElements = 9;
            const maxOffset = 3; // Máximo de 3 páginas más/menos
            const startPage = Math.max(1, currentPage - maxOffset);
            const endPage = Math.min(pages, currentPage + maxOffset);

            for (let i = startPage; i <= endPage; i++) {
              paginationArray.push(i);
            }

            // Agregar null al inicio si no es la primera página
            if (paginationArray[0] > 1) {
              paginationArray.unshift(null); // Añadir null para los puntos suspensivos
            }

            // Agregar null al final si no es la última página
            if (paginationArray[paginationArray.length - 1] < pages) {
              paginationArray.push(null); // Añadir null para los puntos suspensivos
            }

            // Asegurarse de que no exceda el número máximo de elementos
            while (paginationArray.length > maxElements) {
              paginationArray.shift(); // Eliminar el primer elemento si excede el máximo
            }
            $('#pages-filter').html(`<li>
              <button
                data-pagination="reduce"
                class="flex items-center justify-center px-4 h-10 w-10 leading-tight text-gray-500 hover:bg-white rounded-full bg-gray-100 hover:text-gray-700"
                type="button" ${currentPage <= 1 ? 'disabled' : ''}>
                ←
              </button>
            </li>`)
            paginationArray.forEach(page => {
              if (page == null) {
                $('#pages-filter').append(`<li>
                  <button aria-current="page"
                    class="z-10 flex items-center justify-center px-4 h-10 w-10 leading-tight  hover:bg-white rounded-full bg-transparent text-gray-500 hover:text-gray-700"
                    type="button" disabled>
                    ···
                  </button>
                </li>`)
              } else {
                $('#pages-filter').append(`<li class="block">
                  <button aria-current="page"
                    data-pagination="apply"
                    class="z-10 flex items-center justify-center px-4 h-10 w-10 leading-tight rounded-full ${page == currentPage ? 'bg-[#006BF6] text-white': 'hover:bg-white bg-gray-100 text-gray-500 hover:text-gray-700'}  text-gray-500 "
                    type="button" value="${page}" ${page == currentPage ? 'disabled': ''}>
                    ${page}
                  </button>
                </li>`)
              }
            })
            $('#pages-filter').append(`<li>
              <button
                data-pagination="add"
                class="flex items-center justify-center px-4 h-10 w-10 leading-tight text-gray-500 hover:bg-white rounded-full bg-gray-100 hover:text-gray-700"
                type="button" ${currentPage >= pages ? 'disabled': ''}>
                →
              </button>
            </li>`)

          })

      } catch (error) {

      }
      $('.filter-blocker').hide(0)
    }

    obtenerProductosCatalogo()

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
        dropdownParent: $('body'),
        minimumResultsForSearch: -1
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
