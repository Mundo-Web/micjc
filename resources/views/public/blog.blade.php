@extends('components.public.matrix')

@section('title', 'Blogs | ' . config('app.name', 'Laravel'))

@section('css_importados')

  @php
    use Carbon\Carbon;
  @endphp

@stop


@section('content')
  <main>

    <section class="px-[5%] pt-12 xl:pt-16 w-full">
      <div class="flex flex-col gap-2">
        <p class="text-[#0051FF] font-moderat_Bold text-text22 md:text-text24">Blogs</p>
        <h2 class="text-[#111111] font-moderat_700 text-text44 md:text-text52 leading-[1.10] md:leading-tight">
          Descubre lo digital:
          <span class="block">
            Publicaciones sobre el mundo de la tecnología
          </span>
        </h2>
        <p class="text-[#565656] font-moderat_Regular text-text18 md:text-text22">Explora nuestros blogs llenos de
          consejos, guías y novedades sobre laptops, periféricos gamer, tintas de impresoras, y lo último en tecnología
          para tu oficina o setup personal.</p>
      </div>
  </section>

  <section class="px-[5%] pt-12 xl:pt-16 w-full">
      <div class="flex flex-col justify-start gap-12">

          <div class="flex flex-wrap gap-3 lg:gap-5 justify-center" data-aos="fade-up" data-aos-duration="150">
              <div class="flex flex-col gap-3">
                  <a href="{{ route('blog', 0) }}"
                      class="text-[15px] py-2.5 px-4 rounded-xl font-moderat_Regular text-center
                    {{ $filtro == 0 ? 'text-white bg-[#052F4E]' : 'text-[#052F4E] bg-[#EBEDEF]' }}">
                      Ver todas
                  </a>
              </div>
              @foreach ($categorias as $item)
                  <div class="flex flex-col gap-3">
                      <a href="{{ route('blog', $item->id) }}"
                          class="text-[15px] py-2.5 px-4 rounded-lg font-moderat_Regular text-center
                        {{ $item->id == $filtro ? 'text-white bg-[#052F4E]' : 'text-[#052F4E] bg-[#EBEDEF]' }}">
                          {{ $item->name }}
                      </a>
                  </div>
              @endforeach
          </div>

          <div class="w-full grid grid-cols-1 md:grid-cols-2 gap-10">

              @foreach ($lastposts as $post)
                  <div class="flex flex-col gap-1">
                    <a href="{{ route('post', $post->id) }}" class="w-full">
                      <img class="w-full h-[250px] lg:h-[300px] object-cover"
                          src="{{ asset($post->url_image . $post->name_image) }}"
                          onerror="this.onerror=null;this.src='{{ asset('images/imagen/noimagen.jpg') }}';" alt="{{ $post->title }}" />

                      <h2 class="text-[#052F4E] text-base font-galano_regular font-semibold mt-3">
                          {{ $post->categories->name ?? 'Sin categoría' }}
                      </h2>

                      <h2 class="text-[#052F4E] text-2xl font-galano_bold line-clamp-2 md:line-clamp-1">
                          {{ $post->title }}
                      </h2>

                      <p class="text-[#052F4E] text-lg font-galano_regular line-clamp-3">
                          {{ $post->extract ?? 'No hay descripción disponible.' }}
                      </p>

                      <h2 class="text-[#052F4E] text-base font-galano_regular font-semibold mt-1">
                          Publicado {{ \Carbon\Carbon::parse($post->created_at)->diffForHumans() }}
                      </h2>
                    </a>
                  </div>
              @endforeach

          </div>

          @if ($posts->isEmpty())
          @else
            <div class="w-full grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10">
                @foreach ($posts as $post)
                    <x-blog.container-post :post="$post" />
                @endforeach
            </div>
          @endif

      </div>
  </section>





    {{-- <section class="w-11/12 md:w-10/12 mx-auto pt-5 pb-16">

      <div class="flex flex-col gap-10" data-aos="fade-up" data-aos-offset="150">
        

        <div class="grid grid-cols-1 grid-rows-1 lg:grid-cols-2 lg:grid-rows-2 gap-10">
          @php
            $designClasses = [
                'row-span-1 col-span-1 lg:col-span-1 lg:row-span-2 flex flex-col gap-5', // Diseño 1
                'row-span-1 col-span-1 lg:col-span-1 lg:row-span-1 grid grid-cols-1 lg:grid-cols-2 gap-5', // Diseño 2
                'row-span-1 col-span-1 lg:col-span-1 lg:row-span-1 grid grid-cols-1 lg:grid-cols-2 gap-5', // Diseño 3
            ];
          @endphp

          @foreach ($blogs->chunk(3) as $chunk)
            @foreach ($chunk as $index => $blog)
              <div class="{{ $designClasses[$index % 3] }}">
                <div class="flex justify-center items-center">
                  <img src="{{ asset($blog->url_image . $blog->name_image) }}" alt="blog" class="w-full">
                </div>

                <div class="flex flex-col gap-3 justify-center">
                  <div class="flex flex-col gap-2">
                    <p class="font-moderat_Bold text-text12 md:text-text20 text-[#0051FF]">{{ $blog->categories->name }}
                    </p>
                    <a href="{{ route('post', $blog->id) }}">
                      <h2 class="text-[#082252] font-moderat_700 text-text16 md:text-text28">
                        {{ $blog->title }}
                      </h2>
                    </a>
                    <p class="text-[#565656] font-moderat_Regular text-text12 md:text-text20 leading-tight">
                      {!! $blog->description !!}</p>
                  </div>

                  <div
                    class="flex justify-start items-center text-text14 text-[#0051FF] font-moderat_Medium gap-1 md:gap-2">
                    <p class="hidden lg:block">{{ Carbon::parse($blog->created_at)->translatedFormat('d \d\e F \d\e Y') }}
                    </p>
                    <p class="block lg:hidden">{{ Carbon::parse($blog->created_at)->format('d/m/Y') }}</p>
                    <img src="{{ asset('images/svg/image_17.svg') }}" alt="point" class="w-[3px] md:w-[6px]">
                    <p>Leído hace 5 min</p>
                  </div>
                </div>

              </div>
            @endforeach
          @endforeach





        </div>
      </div>

    </section> --}}


    
    {{-- <section class="w-11/12 md:w-10/12 mx-auto pb-16 md:pb-24">
      <div class="flex flex-col gap-10" data-aos="fade-up" data-aos-offset="150">
        <div class="flex flex-col gap-4 md:gap-2">
          <h2 class="font-moderat_700 text-[#111111] text-text44 md:text-text52 leading-none md:leading-tight">Últimas
            publicaciones</h2>
          <p class="text-[#565656] font-moderat_Regular text-text18 md:text-text22">Entérate de las últimas tendencias en
            tecnología. Desde novedades en teclados gamer y laptops hasta soluciones para impresoras y accesorios que
            mejoran tu productividad.</p>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-3 gap-4 md:gap-10">

          @foreach ($blogs as $blog)
            <div class="flex flex-col gap-5" data-aos="fade-up" data-aos-offset="150">
              <div>
                <img src="{{ asset($blog->url_image . $blog->name_image) }}" alt="publicacion" class="w-full">
              </div>
              <div class="flex flex-col gap-2">
                <p class="font-moderat_Bold text-text12 md:text-text20 text-[#0051FF]">{{ $blog->categories->name }}</p>
                <a href="{{ route('post', $blog->id) }}">
                  <h2 class="text-[#082252] font-moderat_700 text-text16 md:text-text28"> {{ $blog->title }}</h2>
                </a>
                <p class="text-[#565656] font-moderat_Regular text-text12 md:text-text20 "> {!! $blog->description !!}</p>
              </div>

              <div
                class="flex justify-start items-center text-text10 md:text-text14 text-[#0051FF] font-moderat_Medium gap-1 md:gap-2">
                <p class="hidden lg:block">{{ Carbon::parse($blog->created_at)->translatedFormat('d \d\e F \d\e Y') }}
                </p>
                <p class="block lg:hidden">{{ Carbon::parse($blog->created_at)->format('d/m/Y') }}</p>
                <img src="{{ asset('images/svg/image_17.svg') }}" alt="point" class="w-[3px] md:w-[6px]">
                <p>Leído hace 5 min</p>
              </div>

            </div>
          @endforeach





        </div>

      </div>
    </section> --}}



  </main>
@section('scripts_importados')

  <script></script>
  <script>
    var appUrl = '{{ env('APP_URL') }}';
  </script>
  <script src="{{ asset('js/carrito.js') }}"></script>


  {{-- <script src="{{ asset('js/storage.extend.js') }}"></script> --}}
@stop

@stop
