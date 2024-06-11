@extends('components.public.matrix')

@section('title', 'Post | ' . config('app.name', 'Laravel'))

@section('css_importados')

@stop

@php
  use Carbon\Carbon;
@endphp
@section('content')
  <main>
    <section class="w-11/12 md:w-10/12 mx-auto pt-5">

      <div class="flex flex-col gap-10" data-aos="fade-up" data-aos-offset="150">
        <div class="flex flex-col gap-2">
          <h1 class="font-moderat_700 text-text40 md:text-text48 leading-tight">{{ $blog->title }}</h1>
          <p class="text-[#0051FF] font-moderat_Bold text-text16 md:text-text20">{{ $blog->categories->name }} -
            {{ Carbon::parse($blog->created_at)->translatedFormat('d \d\e F \d\e Y') }}</p>
        </div>

        <div class="flex justify-center items-center">
          <img src="{{ asset($blog->url_image . $blog->name_image) }}" alt="blog" class="w-full block md:hidden">
          <img src="{{ asset($blog->url_image . $blog->name_image) }}" alt="blog" class="w-full hidden md:block">
        </div>

        {!! $blog->description !!}

      </div>

      <div class="flex flex-col gap-10 py-10 border-b-2 border-[#565656]" data-aos="fade-up" data-aos-offset="150">

      </div>

      <div class="flex flex-col gap-2 py-10" data-aos="fade-up" data-aos-offset="150">
        <p class="font-moderat_Bold text-[#0051FF] text-text16">Compartir</p>
        <div class="flex justify-start items-center gap-5">
          <a href="{{ route('post', $blog->id) }}"
            class="rounded-full w-8 h-8 bg-[#F4F4F4] flex justify-center items-center copy-link-btn"
            data-link="{{ route('post', $blog->id) }}">
            <img src="{{ asset('images/svg/image_22.svg') }}" alt="enlace">
          </a>
          <a target="_blank"
            href="https://www.linkedin.com/shareArticle?mini=true&url{{ urlencode(route('post', $blog->id)) }}"
            class="rounded-full w-8 h-8 bg-[#F4F4F4] flex justify-center items-center">
            <img src="{{ asset('images/svg/image_23.svg') }}" alt="linkedin">
          </a>
          <a target="_blank"
            href="https://x.com/intent/post?url={{ route('post', $blog->id) }}&text=Este+blog+me+pareció+interesante+{{ $blog->title }}"
            class="rounded-full w-8 h-8 bg-[#F4F4F4] flex justify-center items-center">
            <img src="{{ asset('images/svg/image_24.svg') }}" alt="x">
          </a>
          <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{ route('post', $blog->id) }}"
            class="rounded-full w-8 h-8 bg-[#F4F4F4] flex justify-center items-center">
            <img src="{{ asset('images/svg/image_25.svg') }}" alt="facebook">
          </a>
        </div>
      </div>

    </section>

    <section class="w-11/12 md:w-10/12 mx-auto pt-10 pb-16">
      <div class="flex flex-col gap-10">
        <div class="flex flex-col justify-center gap-3 md:flex-row md:justify-between md:items-center">
          <div class="flex flex-col gap-5 basis-8/12">
            <h2 class="font-moderat_700 text-text44 md:text-text52 text-[#111111] leading-none md:leading-tight">Últimas
              publicaciones</h2>
            <p class="text-[#565656] text-text18 md:text-text22 font-moderat_400">Nam tempor diam quis urna maximus, ac
              laoreet arcu convallis. Aenean dignissim nec sem quis consequat.</p>
          </div>

          <div class="flex justify-end items-center basis-4/12">
            <a href="{{ route('blog') }}
              class="font-moderat_Bold text-text16 md:text-text20 py-3 px-5
              bg-[#0051FF] text-white md:w-auto text-center w-full">Ver
              más Publicaciones</a>
          </div>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-3 gap-4 md:gap-10">

          @foreach ($lastBlogs as $blog)
            <div class="hidden lg:flex flex-col gap-5" data-aos="fade-up" data-aos-offset="150">
              <div>
                <img src="{{ asset($blog->url_image . $blog->name_image) }}" alt="publicacion" class="w-full">
              </div>
              <div class="flex flex-col gap-2">
                <p class="font-moderat_Bold text-text12 md:text-text20 text-[#0051FF]">{{ $blog->categories->name }}</p>
                <a href="{{ route('post', $blog->id) }}">
                  <h2 class="text-[#082252] font-moderat_700 text-text16 md:text-text28 leading-[19px] md:leading-[32px]">
                    {{ $blog->title }} </h2>
                </a>

                <p class="text-[#565656] font-moderat_Regular text-text12 md:text-text20 ">{!! $blog->description !!}</p>
              </div>

              <div
                class="flex justify-start items-center text-text10 md:text-text14 text-[#0051FF] font-moderat_Medium gap-1 md:gap-2">
                <p class="hidden lg:block">{{ Carbon::parse($blog->created_at)->translatedFormat('d \d\e F \d\e Y') }}
                </p>
                <p class="block lg:hidden">{{ Carbon::parse($blog->created_at)->format('d/m/Y') }}</p>
                <img src="{{ asset($blog->url_image . $blog->name_image) }}" alt="point" class="w-[3px] md:w-[6px]">
                <p>Leído hace 5 min</p>
              </div>

            </div>
          @endforeach

          @foreach ($lastBlogs as $blog)
            <div class="flex lg:hidden flex-col gap-5" data-aos="fade-up" data-aos-offset="150">
              <div>
                <img src="{{ asset($blog->url_image . $blog->name_image) }}" alt="publicacion" class="w-full">
              </div>
              <div class="flex flex-col gap-2">
                <p class="font-moderat_Bold text-text12 md:text-text20 text-[#0051FF]">{{ $blog->categories->name }}</p>
                <a href="{{ route('post', $blog->id) }}">
                  <h2 class="text-[#082252] font-moderat_700 text-text16 md:text-text28 leading-[19px] md:leading-[32px]">
                    {{ $blog->title }} </h2>
                </a>

                <p class="text-[#565656] font-moderat_Regular text-text12 md:text-text20 ">{!! $blog->description !!}</p>
              </div>

              <div
                class="flex justify-start items-center text-text10 md:text-text14 text-[#0051FF] font-moderat_Medium gap-1 md:gap-2">
                <p class="hidden lg:block">{{ Carbon::parse($blog->created_at)->translatedFormat('d \d\e F \d\e Y') }}
                </p>
                <p class="block lg:hidden">{{ Carbon::parse($blog->created_at)->format('d/m/Y') }}</p>
                <img src="{{ asset($blog->url_image . $blog->name_image) }}" alt="point" class="w-[3px] md:w-[6px]">
                <p>Leído hace 5 min</p>
              </div>

            </div>
          @endforeach






        </div>
      </div>
    </section>

  </main>


@section('scripts_importados')

  <script>
    $(document).ready(function() {
      $('.copy-link-btn').click(function(e) {
        e.preventDefault()
        var link = $(this).data('link');
        navigator.clipboard.writeText(link).then(function() {
          alert('Enlace copiado al portapapeles: ' + link);
        }, function(err) {
          console.error('Error al copiar el enlace: ', err);
        });
      });
    });
  </script>

@stop

@stop
