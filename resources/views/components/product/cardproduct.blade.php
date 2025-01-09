<div x-data="{ showAmbiente: false }" @mouseenter="showAmbiente = true" @mouseleave="showAmbiente = false"
  class="flex flex-col rounded-xl gap-3  overflow-hidden  {{ $bgcolor }}">
  <div class="{{ $bgcolor }} flex flex-col justify-center relative product_container">


    <div class="flex flex-row justify-end items-center absolute top-5 right-[5%] z-10">
      @if ($item->descuento > 0)
        <span
          class="font-Montserrat_Bold text-[13px] rounded-l-full rounded-br-full tracking-tight  bg-black text-white py-1 px-2">
          AHORRA
          {{ round((($item->precio - $item->descuento) / $item->precio) * 100) }}%
        </span>
      @endif
      @foreach ($item->tags as $tag)
        <span class="font-Montserrat_Bold text-[13px] rounded-l-full rounded-br-full text-white py-1 px-2"
          style="background-color: {{ $tag->color }}">
          {{ $tag->name }}</span>
      @endforeach
    </div>

    <div>
      <div class="relative flex justify-center items-center aspect-square">
        @php
          $category = $item->categoria();
        @endphp
        @if ($item->imagen)
          <img x-show="{{ isset($item->image_texture) ? 'true' : 'false' }} || !showAmbiente"
            x-transition:enter="transition ease-out duration-300 transform"
            x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-300 transform"
            x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
            src="{{ asset($item->imagen) }}" alt="{{ $item->name }}"
            class="w-full object-contain md:object-cover absolute inset-0 aspect-square"
            onerror="this.onerror=null;this.src='{{ asset('images/img/noimagen.jpg') }}';" />
        @else
          <img x-show="{{ isset($item->image_texture) ? 'true' : 'false' }} || !showAmbiente"
            x-transition:enter="transition ease-out duration-300 transform"
            x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-300 transform"
            x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
            src="{{ asset('images/img/noimagen.jpg') }}" alt="imagen_alternativa"
            class="w-full object-contain md:object-cover absolute inset-0 aspect-square" />
        @endif
        @isset($item->image_texture)

          @if ($item->image_texture)
            <img x-show="showAmbiente" x-transition:enter="transition ease-out duration-300 transform"
              x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
              x-transition:leave="transition ease-in duration-300 transform"
              x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
              src="{{ asset($item->image_texture) }}" alt="{{ $item->name }}"
              class="w-full object-contain md:object-cover absolute inset-0 aspect-square"
              onerror="this.onerror=null;this.src='{{ asset('images/img/noimagen.jpg') }}';" />
          @else
            <img x-show="showAmbiente" x-transition:enter="transition ease-out duration-300 transform"
              x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
              x-transition:leave="transition ease-in duration-300 transform"
              x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
              src="{{ asset('images/img/noimagen.jpg') }}" alt="imagen_alternativa"
              class="w-full object-contain md:object-cover absolute inset-0 aspect-square" />
          @endif
        @endisset

      </div>
    </div>
  </div>


  <div class="flex flex-col bg-white p-2 md:px-5 pb-3 sm:pb-0">
    <div class="flex flex-col gap-2 md:gap-2">

      @if ($item->descuento == 0)
        <span class="text-[#111111] text-text16 md:text-xl font-Montserrat_Bold font-bold "> S/.
          {{ $item->precio }}</span>
      @else
        <div class="flex flex-row gap-2  justify-start items-center">
          <span class="text-[#111111] text-sm md:text-xl font-Montserrat_Bold font-bold ">S/.
            {{ $item->descuento }}</span>
          <span class="text-[#111111] text-xs line-through font-Montserrat_Regular font-bold md:font-medium">S/.
            {{ $item->precio }}</span>
        </div>
      @endif

      <a href="{{ route('producto', $item->id) }}">
        <h2
          class="font-Montserrat_SemiBold leading-normal uppercase text-sm md:text-base text-[#111111] line-clamp-2 tracking-tight">
          {{ $item->producto }}</h2>
      </a>

      <a href="/catalogo?marca={{ $item->marca_id }}">
        <h3 class="font-Montserrat_SemiBold text-text12 md:text-sm text-opacity-50 text-[#111111]">
          {{ $item->marca->name ?? 'S/M' }}</h3>
      </a>


      <div class="addProduct flex flex-row items-center justify-center cursor-pointer py-2 sm:mb-4">
        <button data-id="{{ $item->id }}" type="button" id='btnAgregarCarrito'
          class="uppercase text-white text-[11px] md:text-sm font-Montserrat_Bold font-semibold bg-[#0051FF] px-4 py-3 rounded-3xl">
          <i class="fa fa-cart"></i>
          Añadir al carrito
        </button>
      </div>

    </div>
  </div>

</div>

<style>
  .cortartexto {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    text-overflow: ellipsis;
    max-height: 60px;
  }
</style>
{{-- 
<script>
  $(document).ready(function() {
    tippy('.tippy', {
      arrow: true,
      followCursor: true,
      placement: 'right',

    })
  })
</script> --}}
