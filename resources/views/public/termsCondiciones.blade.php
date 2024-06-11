@extends('components.public.matrix')

@section('css_improtados')
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">


  <style>
    [type="text"]:focus,
    input:where(:not([type])):focus,
    [type="email"]:focus,
    [type="url"]:focus,
    [type="password"]:focus,
    [type="number"]:focus,
    [type="date"]:focus,
    [type="datetime-local"]:focus,
    [type="month"]:focus,
    [type="search"]:focus,
    [type="tel"]:focus,
    [type="time"]:focus,
    [type="week"]:focus,
    [multiple]:focus,
    textarea:focus,
    select:focus {
      outline: none;
      box-shadow: none;
      border-color: initial;
      /* o tu color deseado */
    }

    .bg__destino-header {
      background-color: #0F1B2C;
    }
  </style>
@stop


@section('content')
  <main>
    <section class="w-11/12 mx-auto gap-5 grid grid-cols-1 grid-rows-1  pt-60 px-10 lg:px-40">
      <div class="flex flex-col items-center gap-5 col-span-1 row-span-1 leading-relaxed" data-aos="fade-up"
        data-aos-offset="150">


        {!! $terms->content !!}

      </div>
    </section>
  </main>




@section('scripts_improtados')

@stop

@stop
