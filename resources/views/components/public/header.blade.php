<style>
  nav a .underline-this {
    position: relative;
    overflow: hidden;
    display: inline-block;
    text-decoration: none;
    /* padding-bottom: 4px; */
  }

  nav a .underline-this::before,
  nav a .underline-this::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    width: 100%;
    height: 2px;
    background-color: #0051FF;
    transform: scaleX(0);
    transition: transform 0.3s ease;
  }

  nav a .underline-this::after {
    transform-origin: right;
  }

  nav a:hover .underline-this::before,
  nav a:hover .underline-this::after {
    transform: scaleX(1);
  }

  nav a:hover .underline-this::before {
    transform-origin: left;
  }

  nav li {
    padding: 0 !important;
    margin: 0 !important;
  }
</style>

<header class="{{-- z-[600] relative --}}">
  <div class="fixed top-0 w-full z-10">
    <div class="bg-[#0051FF] h-10 my-auto flex flex-col justify-center items-center">
      <div class="flex justify-between items-center w-full px-[5%] text-white">
        <div class="min-w-20 hidden md:flex "></div>
        <div class="min-w-96 w-full max-w-3xl">
          <marquee class="text-base font-Montserrat_Bold italic">¡Grandes dispositivos para grandes decisiones!</marquee>
        </div>
        <div class="flex justify-center items-center gap-2">
          <div class="min-w-20 hidden md:flex justify-center items-center gap-2">
            @if ($general->facebook != null)
              <a target="_blank" href="https://{{ $general->facebook }}"><img class="w-8"
                  src="{{ asset('images/svg/image_1.svg') }}" alt="facebook" class="cursor-pointer"></a>
            @endif

            @if ($general->instagram != null)
              <a target="_blank" href="https://{{ $general->instagram }}"><img class="w-8"
                  src="{{ asset('images/svg/image_2.svg') }}" alt="instagram" class="cursor-pointer"></a>
            @endif

            @if ($general->youtube != null)
              <a target="_blank" href="https://{{ $general->youtube }}"><img class="w-8"
                  src="{{ asset('images/svg/youtube.svg') }}" alt="YouTube" class="cursor-pointer"></a>
            @endif

            @if ($general->twitter != null)
              <a target="_blank" href="https://{{ $general->twitter }}"><img class="w-8"
                  src="{{ asset('images/svg/tiktok.svg') }}" alt="Tiktok" class="cursor-pointer"></a>
            @endif
          </div>
        </div>
      </div>
    </div>

    <div class="px-[5%] w-full py-2 bg-white">
      <div class="md:flex justify-between items-center">

        <div class="flex justify-between">
          <div class="flex justify-center items-center  pb-2 md:pb-0">
            <a href="{{ route('index') }}"><img class="w-full min-w-40" src="{{ asset('images/svg/image_3.svg') }}"
                alt="MICJC"></a>
          </div>

          <div class=" flex md:hidden flex-row justify-end items-center gap-5 !font-moderat">
            @if (Auth::user() == null)
              <a class="flex" href="{{ route('login') }}">
                <i class="fa-solid fa-circle-user text-4xl text-[#CCCCCC]"></i></a>
            @else
              <div class="relative !font-moderat_400 inline-flex" x-data="{ open: false }">
                <button class="px-3 py-5 inline-flex justify-center items-center group" aria-haspopup="true"
                  @click.prevent="open = !open" :aria-expanded="open">
                  <div class="flex items-center truncate">
                    <span id="username"
                      class="truncate ml-2 text-sm font-medium dark:text-slate-300 group-hover:opacity-75 dark:group-hover:text-slate-200 text-[#272727] ">
                      {{ explode(' ', Auth::user()->name)[0] }}</span>
                    <svg class="w-3 h-3 shrink-0 ml-1 fill-current text-slate-400" viewBox="0 0 12 12">
                      <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z" />
                    </svg>
                  </div>
                </button>
                <div
                  class="origin-top-left z-10 right-0 absolute top-full min-w-44 bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 py-1.5 rounded shadow-lg overflow-hidden mt-1"
                  @click.outside="open = false" @keydown.escape.window="open = false" x-show="open">
                  <ul>
                    <li class="hover:bg-gray-100">
                      <a class="font-medium text-sm text-black flex items-center py-1 px-3"
                        href="{{ route('micuenta') }}" @click="open = false" @focus="open = true"
                        @focusout="open = false">Mi Cuenta</a>
                    </li>

                    <li class="hover:bg-gray-100">
                      <form method="POST" action="{{ route('logout') }}" x-data>
                        @csrf
                        <button type="submit" class="font-medium text-sm text-black flex items-center py-1 px-3"
                          @click.prevent="$root.submit(); open = false">
                          {{ __('Cerrar sesión') }}
                        </button>
                      </form>
                    </li>
                  </ul>
                </div>
              </div>
            @endif


            <div
              class="{{ request()->routeIs('carrito') ? 'hidden' : 'flex' }} justify-center items-center min-w-[38px]">
              <div id="open-cart" class="relative inline-block cursor-pointer pr-3">
                <span id="itemsCount"
                  class="bg-[#0051FF] text-xs font-medium text-white text-center px-[7px] py-[2px]  rounded-full absolute bottom-0 right-0 ml-3">0</span>
                <img src="{{ asset('images/svg/bag_boost.svg') }}"
                  class="bg-white rounded-lg p-1 max-w-full h-auto cursor-pointer" />
              </div>
            </div>
          </div>
        </div>

        <div class="relative flex justify-center items-center w-full max-w-[600px]">
          <form action="/catalogo" class="w-full">
            <x-header.buscador class=" w-full border-2 border-[#CCCCCC] rounded-2xl flex justify-center items-center" />
          </form>
        </div>

        <div class="hidden md:flex flex-row justify-end items-center gap-5 !font-moderat">
          @if (Auth::user() == null)
            <a class="hidden md:flex" href="{{ route('login') }}">
              <i class="fa-solid fa-circle-user text-4xl text-[#CCCCCC]"></i></a>
          @else
            <div class="relative !font-moderat_400 hidden md:inline-flex" x-data="{ open: false }">
              <button class="px-3 py-5 inline-flex justify-center items-center group" aria-haspopup="true"
                @click.prevent="open = !open" :aria-expanded="open">
                <div class="flex items-center truncate">
                  <span id="username"
                    class="truncate ml-2 text-sm font-medium dark:text-slate-300 group-hover:opacity-75 dark:group-hover:text-slate-200 text-[#272727] ">
                    {{ explode(' ', Auth::user()->name)[0] }}</span>
                  <svg class="w-3 h-3 shrink-0 ml-1 fill-current text-slate-400" viewBox="0 0 12 12">
                    <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z" />
                  </svg>
                </div>
              </button>
              <div
                class="origin-top-left z-10 right-0 absolute top-full min-w-44 bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 py-1.5 rounded shadow-lg overflow-hidden mt-1"
                @click.outside="open = false" @keydown.escape.window="open = false" x-show="open">
                <ul>
                  <li class="hover:bg-gray-100">
                    <a class="font-medium text-sm text-black flex items-center py-1 px-3"
                      href="{{ route('micuenta') }}" @click="open = false" @focus="open = true"
                      @focusout="open = false">Mi Cuenta</a>
                  </li>

                  <li class="hover:bg-gray-100">
                    <form method="POST" action="{{ route('logout') }}" x-data>
                      @csrf
                      <button type="submit" class="font-medium text-sm text-black flex items-center py-1 px-3"
                        @click.prevent="$root.submit(); open = false">
                        {{ __('Cerrar sesión') }}
                      </button>
                    </form>
                  </li>
                </ul>
              </div>
            </div>
          @endif


          <div class="{{ request()->routeIs('carrito') ? 'hidden' : 'flex' }} justify-center items-center min-w-[38px]">
            <div id="open-cart" class="relative inline-block cursor-pointer pr-3">
              <span id="itemsCount"
                class="bg-[#0051FF] text-xs font-medium text-white text-center px-[7px] py-[2px]  rounded-full absolute bottom-0 right-0 ml-3">0</span>
              <img src="{{ asset('images/svg/bag_boost.svg') }}"
                class="bg-white rounded-lg p-1 max-w-full h-auto cursor-pointer" />
            </div>
          </div>
        </div>



      </div>


    </div>

    <div x-data="{ openCatalogo: false, openSubMenu: null }"
      class="bg-[#0051FF] h-10 flex px-[5%] justify-between lg:justify-center lg:gap-10 items-center text-base md:text-lg font-Montserrat_SemiBold overflow-x-auto">
      <a href="{{ route('index') }}"
        class=" px-4 py-2 hover:bg-white hover:text-[#0051FF] {{ request()->routeIs('index') ? 'enlaces__after text-white' : 'text-white' }}">Inicio</a>
      {{-- <a href="{{ route('catalogo') }}"
        class="{{ request()->routeIs('catalogo') ? 'enlaces__after text-white' : 'text-white' }}">Productos</a> --}}

      <nav @mouseenter="openCatalogo = true" @mouseleave="openCatalogo = false" class="block">
        <a href="javascript:void(0)" @click="openCatalogo = true"
          class="block font-medium px-2 md:px-4 py-2 font-Montserrat_SemiBold text-white hover:bg-white hover:text-[#0051FF] {{ request()->routeIs('catalogo') ? 'enlaces__after text-white' : 'text-white' }}"
          aria-haspopup="true">
          Productos
        </a>
        <div x-show="openCatalogo"
          class="origin-top-right absolute top-full left-0 w-screen max-h-[calc(100vh-300px)] overflow-y-auto mt-0 bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 p-8 shadow-lg overflow-hidden grid gap-8 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 z-50"
          @click.outside="openCatalogo = false" @keydown.escape.window="openCatalogo = false" style="display: none;">

          @foreach ($categorias as $category)
            @if (count($category->subcategories))
              <ul class="border-t pt-2">
                <a href="/catalogo?cat={{ $category->id }}" class="block w-full mb-2 text-[16px]">
                  <span class="underline-this">{{ $category->name }}</span>
                </a>
                @foreach ($category->subcategories as $subcategory)
                  <li>
                    <a class="font-Montserrat_Regular text-[14px]"
                      href="/catalogo?cat={{ $category->id }}&subcat={{ $subcategory->id }}">
                      <span class="py-0.5 underline-this">{{ $subcategory->name }}</span>
                    </a>
                  </li>
                @endforeach
              </ul>
            @endif
          @endforeach

          {{-- <div class="md:col-span-3">
            <a href="{{ route('catalogo') }}" class="h4 text-[#272727] px-3 py-1">Ver productos ➚</a>
            <hr class="mx-3 my-3">
            <ul>
              @foreach ($categorias as $category)
                @if (count($category->subcategories))
                  <li>
                    <a @click="openSubMenu === {{ $category->id }} ? openSubMenu = null : openSubMenu = {{ $category->id }}"
                      href="javascript:void(0)"
                      class="text-[#272727] flex justify-between items-center py-2 px-3 hover:opacity-75 transition-opacity duration-300">
                      <span class="underline-this">{{ $category->name }}</span>
                      <span :class="{ 'rotate-180': openSubMenu === {{ $category->id }} }"
                        class="ms-1 inline-block transform transition-transform duration-300">↓</span>
                    </a>
                    <ul x-show="openSubMenu === {{ $category->id }}" x-transition
                      class="ml-3 mt-1 space-y-1 border-l border-gray-300">
                      <li>
                        <a href="/catalogo?cat={{ $category->id }}"
                          class="text-[#272727] flex items-center py-2 px-3 hover:opacity-75 transition-opacity duration-300">
                          <span class="underline-this">Ver todo {{ $category->name }}</span>
                        </a>
                      </li>
                      @foreach ($category->subcategories as $subcategory)
                        <li>
                          <a href="/catalogo?cat={{ $category->id }}&subcat={{ $subcategory->id }}"
                            class="text-[#272727] flex items-center py-2 px-3 hover:opacity-75 transition-opacity duration-300">
                            <span class="underline-this">{{ $subcategory->name }}</span>
                          </a>
                        </li>
                      @endforeach
                    </ul>
                  </li>
                @else
                  <li>
                    <a href="/catalogo?cat={{ $category->id }}"
                      class="text-[#272727] flex items-center py-2 px-3 hover:opacity-75 transition-opacity duration-300">
                      <span class="underline-this">{{ $category->name }}</span>
                    </a>
                  </li>
                @endif
              @endforeach
            </ul>
          </div>

          <div class="md:col-span-9">
            <div class="categories-header swiper w-full">
              <div class="swiper-wrapper mt-2 mb-4 w-full">
                @foreach ($categorias as $category)
                  @if ($category->destacar)
                    <div class="swiper-slide rounded-2xl w-full md:w-[unset]">
                      <x-category.container :item="$category" />
                    </div>
                  @endif
                @endforeach
              </div>
              <div class="swiper-scrollbar-categories-header h-2"></div>
              <div class="mt-4 text-end">
                <button type="button"
                  class="swiper-button-prev-categories-header text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-full text-sm px-4 py-2 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700 ">
                  ←
                </button>
                <button type="button"
                  class="swiper-button-next-categories-header text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-full text-sm px-4 py-2 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700 ">
                  →
                </button>
              </div>
            </div>
          </div> --}}
        </div>
      </nav>

      @if ($blogCount > 0)
        <a href="{{ route('blog', 0) }}"
          class="px-4 py-2 hover:bg-white hover:text-[#0051FF] {{ request()->routeIs('blog') ? 'enlaces__after text-white' : 'text-white' }}">Blog
        </a>
      @endif

      <a href="{{ route('contacto') }}"
        class="px-4 py-2 hover:bg-white hover:text-[#0051FF] {{ request()->routeIs('contacto') ? 'enlaces__after text-white' : 'text-white' }}">Contáctanos</a>
    </div>
  </div>

  <div class="flex justify-end w-11/12 mx-auto z-10">
    <div class="fixed bottom-6 sm:bottom-[2rem] lg:bottom-[4rem] z-20 fixed-whastapp">
      <a target="_blank"
        href="https://api.whatsapp.com/send?phone={{ $general->whatsapp }}&text={{ $general->mensaje_whatsapp }}"
        rel="noopener">
        <img src="{{ asset('images/svg/image_11.svg') }}" alt="whatsapp" class="w-20 h-20 md:w-full md:h-full">
      </a>
    </div>
  </div>

  {{-- Modal carrito --}}
  {{-- <div class="modal" id="jsModalCarrito">
    <div class="modal__container">
      <button
            type="button"
            class="modal__close fa-solid fa-xmark jsModalClose"
          ></button>

      <div class="modal__info flex flex-col justify-between">

        <div class="modal__header">
          <p class="font-moderat_Medium text-text28">Carrito</p>
        </div>

        <div class="modal__body">
          <div class="modal__list">

            <div class="flex flex-col gap-10" id="itemsCarrito">

            </div>

          </div>
        </div>


        <div class="modal__footer">
          <div class="flex flex-col gap-2 ">
            <div class="text-[#141718] flex justify-between items-center">

            </div>

            <div class="text-[#141718] font-moderat_Medium text-[20px] flex justify-between items-center">
              <p>Total</p>
              <p id="itemsTotal"></p>
            </div>
            <div>
              <a href="{{ route('carrito') }}"
                class="font-moderat_Bold text-base bg-[#0051FF] py-3 px-5 text-white cursor-pointer w-full inline-block text-center">
                Checkout
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> --}}

  {{-- fixed-whastapp --}}
  <style>
    .jquery-modal.blocker {
      z-index: 20;
    }
  </style>
  <div id="cart-modal"
    class="bag !absolute top-0 right-0 md:w-[450px] cartContainer border shadow-2xl  !rounded-sm !p-0 !z-50"
    style="display: none">
    <div class="p-4 flex flex-col h-[98vh] justify-between gap-2">
      <div class="flex flex-col">
        <div class="flex justify-between ">
          <h2 class="font-semibold font-Montserrat_Bold text-2xl text-[#151515] pb-5">Carrito</h2>
          <div id="close-cart" class="cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" class="w-6 h-6">
              <path stroke="#272727" stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>
          </div>
        </div>
        <div class="overflow-y-scroll h-[calc(95vh-200px)] scroll__carrito">
          <table class="w-full">
            <tbody id="itemsCarrito">
            </tbody>
          </table>
        </div>
      </div>
      <div class="flex flex-col gap-2 pt-2">
        <div class="text-[#006BF6]  text-xl flex justify-between items-center">
          <p class="font-Montserrat_Bold font-semibold">Total</p>
          <p class="font-Montserrat_Bold font-semibold" id="itemsTotal">S/ 0.00</p>
        </div>
        <div>
          <a href="/carrito"
            class="font-normal font-Montserrat_Bold text-lg bg-[#006BF6] py-2 px-3 rounded-2xl text-white cursor-pointer w-full inline-block text-center">Ver
            Carrito</a>
        </div>
      </div>
    </div>
  </div>

</header>
<script src="{{ asset('js/storage.extend.js') }}"></script>
<script>
  function deleteItem(id) {
    let articulosCarrito = Local.get('carrito') ?? []
    articulosCarrito = articulosCarrito.filter(objeto => objeto.id != id);

    Local.set('carrito', articulosCarrito)
    limpiarHTML()
    PintarCarrito()
    pintarCantidad()
  }

  function pintarCantidad() {
    let carritoCantidad = Local.get('carrito')


    if (typeof carritoCantidad !== 'undefined' && carritoCantidad !== null) {
      // La variable carritoCantidad está definida y no es null
      let total = carritoCantidad.length
      if (total == 0) {

        $('#imgCantidad').attr('hidden', true);


      } else {
        $('#imgCantidad').attr('hidden', false);

        $('#spanCantidad').text(total)

      }


    } else {

      $('#imgCantidad').attr('hidden', true);
    }

  }

  function calcularTotal() {
    let articulos = Local.get('carrito')
    let total = articulos.map(item => {
      let monto
      if (Number(item.descuento) !== 0) {
        monto = item.cantidad * Number(item.descuento)
      } else {
        monto = item.cantidad * Number(item.precio)

      }
      return monto

    })
    const suma = total.reduce((total, elemento) => total + elemento, 0);

    $('#itemsTotal').text(`S/. ${suma.toFixed(2)} `)

  }

  function PintarCarrito() {

    let itemsCarrito = $('#itemsCarrito')
    let articulosCarrito = (Local.get('carrito') ?? []).filter(x => x.cantidad > 0);
    Local.set('carrito', articulosCarrito);
    itemsCarrito.html('');
    articulosCarrito.forEach(element => {
      let plantilla = `<div class="flex justify-between border-b-[1px] py-1">
              <div class="flex flex-row justify-center items-center gap-2">
                
                <div class="bg-[#F3F5F7] rounded-md p-1 min-w-20">
                  
                  <img src="/${element.imagen}" alt="producto" class="w-20" />

                </div>

                <div class="flex flex-col gap-1 py-2">
                  <h3 class="font-semibold font-Montserrat_Regular text-[12px] uppercase text-[#151515] line-clamp-2 max-w-40">
                    ${element.producto} 
                  </h3>
                 
                  <div class="flex w-20 justify-center text-[#151515] border-[1px] border-[#6C7275] rounded-md">
                    <button type="button" onClick="(deleteOnCarBtn(${element.id}, '-'))" class="  w-8 h-8 flex justify-center items-center ">
                      <span  class="text-[20px]">-</span>
                    </button>
                    <div class="w-8 h-8 flex justify-center items-center">
                      <span  class="font-semibold text-[12px]">${element.cantidad }</span>
                    </div>
                    <button type="button" onClick="(addOnCarBtn(${element.id}, '+'))" class="  w-8 h-8 flex justify-center items-center ">
                      <span class="text-[20px]">+</span>
                    </button>
                  </div>
                </div>
              </div>

              <div class="flex flex-col justify-center py-2 gap-2 items-center pr-2 min-w-20">
                <p class="font-semibold font-Montserrat_Regular text-[14px] text-[#151515]">
                  S/ ${Number(element.descuento) !== 0 ? element.descuento : element.precio}
                </p>
                <div class="flex items-center">
                  <button type="button" onClick="(deleteItem(${element.id}, '${element.talla}'))" class="  w-8 h-8 flex justify-center items-center ">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                  </svg>
                  </button>
  
                </div>
              </div>
            </div>`

      itemsCarrito.append(plantilla)

    });

    calcularTotal()
    mostrarTotalItems()
  }

  PintarCarrito()

  function deleteOnCarBtn(id, operacion) {
    let articulosCarrito = Local.get('carrito') ?? []
    const prodRepetido = articulosCarrito.map(item => {
      if (item.id === id && item.cantidad > 0) {
        item.cantidad -= Number(1);
        if (item.cantidad == 0) return null;
        return item; // retorna el objeto actualizado 
      } else {
        return item; // retorna los objetos que no son duplicados 
      }

    }).filter(Boolean);
    Local.set('carrito', articulosCarrito)
    limpiarHTML()
    PintarCarrito()


  }

  function addOnCarBtn(id, operacion) {

    let articulosCarrito = Local.get('carrito') ?? []

    const prodRepetido = articulosCarrito.map(item => {
      if (item.id === id) {
        item.cantidad += Number(1);
        return item; // retorna el objeto actualizado 
      } else {
        return item; // retorna los objetos que no son duplicados 
      }

    });
    Local.set('carrito', articulosCarrito)
    // localStorage.setItem('carrito', JSON.stringify(articulosCarrito));
    limpiarHTML()
    PintarCarrito()


  }

  function mostrarTotalItems() {
    let articulos = Local.get('carrito') ?? []
    let contarArticulos = articulos.reduce((total, articulo) => {
      return total + articulo.cantidad;
    }, 0);

    $('[id="itemsCount"]').text(contarArticulos)
  }

  function agregarAlCarritoPr(item, cantidad) {
    $.ajax({

      url: `{{ route('carrito.buscarProducto') }}`,
      method: 'POST',
      data: {
        _token: $('input[name="_token"]').val(),
        id: item,
        cantidad

      },
      success: function(success) {
        let {
          producto,
          id,
          descuento,
          precio,
          imagen,
          color,
          precio_reseller
        } = success.data
        let is_reseller = success.is_reseller


        if (is_reseller) {
          descuento = precio_reseller
        }

        let cantidad = Number(success.cantidad)
        let detalleProducto = {
          id,
          producto,
          isCombo: false,
          descuento,
          precio,
          imagen,
          cantidad,
          color

        }
        let articulosCarrito = Local.get('carrito') ?? []
        let existeArticulo = articulosCarrito.some(item => item.id === detalleProducto.id && item.isCombo ==
          false, )
        if (existeArticulo) {
          //sumar al articulo actual 
          const prodRepetido = articulosCarrito.map(item => {
            if (item.id === detalleProducto.id && item.isCombo == false) {
              item.cantidad += Number(detalleProducto.cantidad);
              // retorna el objeto actualizado 
            }
            return item; // retorna los objetos que no son duplicados 


          });
        } else {
          articulosCarrito = [...articulosCarrito, detalleProducto]

        }

        Local.set('carrito', articulosCarrito)
        let itemsCarrito = $('#itemsCarrito')
        let ItemssubTotal = $('#ItemssubTotal')
        let itemsTotal = $('#itemsTotal')
        $('#itemsCarrito').html('')
        PintarCarrito()
        mostrarTotalItems()

        // Notify.add({
        //   icon: '/images/svg/Boost.svg',
        //   title: 'Producto agregado',
        //   body: 'El producto se agregó correctamente al carrito',
        //   type: 'primary',
        // })

        Swal.fire({

          icon: "success",
          title: `Producto agregado correctamente`,
          showConfirmButton: true
        });

      },
      error: function(error) {
        console.log(error)
      }

    })
  }

  $(document).ready(function() {
    const icon = $('.fixed-whastapp');
    const footer = $('footer');
    const offset = 24; // Offset from the bottom of the footer

    $(window).on('scroll', function() {
      const scrollTop = $(window).scrollTop();
      const windowHeight = $(window).height();
      const footerTop = footer.offset().top;

      // Calculate the bottom position of the icon
      const iconBottom = scrollTop + windowHeight - icon.outerHeight(true) - offset;

      // Check if the icon is overlapping with the footer
      if (iconBottom > footerTop) {
        icon.css('bottom', (iconBottom - footerTop + offset * 6) + 'px');
      } else {
        icon.css('bottom', offset + 'px');
      }
    });
  });

  function limpiarHTML() {
    $('#itemsCarrito').html('')
  }

  $(document).on('click', '#btnAgregarCarrito', function() {
    let item = $(this).data('id')

    let cantidad = 1
    try {
      agregarAlCarritoPr(item, cantidad)

    } catch (error) {
      console.log(error)

    }
  })
</script>
<script>
  $('[id="open-cart"]').on('click', () => {
    $('#cart-modal').modal({
      showClose: false,
      fadeDuration: 100
    });
    $('body').addClass('modal-open');
  });

  $('#close-cart').on('click', () => {
    $('.jquery-modal.blocker.current').trigger('click');
    $('body').removeClass('modal-open');
  });

  new Swiper('.categories-header', {
    slidesPerView: 1,
    spaceBetween: 10,
    loop: true,
    grab: false,

    centeredSlides: false,
    initialSlide: 0, // Empieza en el cuarto slide (índice 3)
    // pagination: {
    //   el: '.swiper-pagination-categories-header',
    //   clickable: true,
    // },
    navigation: {
      nextEl: '.swiper-button-next-categories-header',
      prevEl: '.swiper-button-prev-categories-header',
    },
    scrollbar: {
      el: '.swiper-scrollbar-categories-header',
    },
    breakpoints: {
      512: {
        slidesPerView: 1
      },
      768: {
        slidesPerView: 2
      },
      1024: {
        slidesPerView: 3
      },
      1280: {
        slidesPerView: 4
      },
    },
  });
</script>
