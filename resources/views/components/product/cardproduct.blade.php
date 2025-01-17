<div x-data="{ showAmbiente: false }" @mouseenter="showAmbiente = true" @mouseleave="showAmbiente = false"
  class="flex flex-col rounded-xl gap-3  overflow-hidden  {{ $bgcolor }}">
  <div class="{{ $bgcolor }} flex flex-col justify-center relative product_container">


    <div class="flex flex-row justify-end items-center absolute top-5 right-[5%] z-[1]">
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
      <a href="{{ route('producto', $item->id) }}" class="relative flex justify-center items-center aspect-square group">
        @php
          $category = $item->categoria();
        @endphp
        <img
          class="w-full object-contain md:object-cover absolute inset-0 aspect-square transition-transform duration-300 ease-in-out transform group-hover:scale-[115%] hover:transition-transform hover:duration-300"
          src="{{ $item->imagen ? asset($item->imagen) : asset('images/img/noimagen.jpg') }}"
          alt="{{ $item->imagen ? $item->name : 'imagen_alternativa' }}"
          onerror="this.onerror=null;this.src='{{ asset('images/img/noimagen.jpg') }}';"
          style="view-transition-name: product-detail-{{ $item->id }}" />
        <img
          class="w-full object-cover md:object-cover absolute inset-0 aspect-square transition-transform duration-300 ease-in-out transform group-hover:scale-[115%] hover:transition-transform hover:duration-300"
          src="{{ $item->imagen ? asset($item->imagen) : asset('images/img/noimagen.jpg') }}"
          alt="{{ $item->imagen ? $item->name : 'imagen_alternativa' }}"
          style="view-transition-name: product-detail-{{ $item->id }}" />
      </a>
    </div>
  </div>


  <div class="flex flex-col bg-white p-2 md:px-5 pb-3 sm:pb-0 z-[2]">
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
