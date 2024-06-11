@extends('components.public.matrix')

@section('title', 'Mi Cuenta | ' . config('app.name', 'Laravel'))

@section('css_importados')
  <style>

  </style>

@stop


@section('content')
  <main>
    <section class=" mb-0 md:my-12">
      <div class="flex flex-col w-11/12 mx-auto">
        <div class="flex flex-col gap-10 my-5" data-aos="fade-up" data-aos-offset="150">
          <div class="flex gap-1 text-text14 xl:text-text18">
            <a href="index.html" class="font-moderat_500 text-[#565656]">Home</a>
            <span>></span>
            <a href="#" class="font-moderat_700 text-[#111111]">Mi cuenta</a>
          </div>
        </div>
      </div>
    </section>

    <section class="mb-8 md:mb-16">
      <div class="flex flex-col gap-12 md:flex-row md:gap-28 w-full md:w-11/12 mx-auto">
        {{-- 
        Componente sidebar --}}
        <x-sidebarMiCuenta />
        {{-- @component('components.sidebarMiCuenta')
        @endcomponent --}}
        <div class="basis-7/12 w-11/12 md:w-full mx-auto" data-aos="fade-up" data-aos-offset="150">
          <form id="detalleCuenta" class="flex flex-col gap-5 mb-10">
            @csrf
            <h2 class="text-text20 xl:text-text22 font-moderat_700 text-[#151515]">
              Detalles de la cuenta
            </h2>
            <input type="hidden" name="id" value="{{ $user->id }}">
            <div class="flex flex-col gap-2" data-aos="fade-up" data-aos-offset="150">
              <label for="nombre_user"
                class="font-moderat_Medium text-text12 md:text-text14 text-[#6C7275]">Nombre</label>
              <input id="nombre_user" name="name" type="text" placeholder="Nombre" value="{{ $userDetail->nombre }}"
                class="w-full py-3 px-4 focus:outline-none placeholder-gray-400 font-moderat_Regular text-text16 md:text-text18 border-[1px] border-gray-200 text-[#6C7275] focus:ring-0  focus:border-black" />
            </div>

            <div class="flex flex-col gap-2" data-aos="fade-up" data-aos-offset="150">
              <label for="apellido_user"
                class="font-moderat_Medium text-text12 md:text-text14 text-[#6C7275]">Apellido</label>
              <input id="apellido_user" name="lastname" type="text" placeholder="Apellido"
                value="{{ $userDetail->apellidos }}"
                class="w-full py-3 px-4 focus:outline-none placeholder-gray-400 font-moderat_Regular text-text16 md:text-text18 border-[1px] border-gray-200 text-[#6C7275] focus:ring-0  focus:border-black" />
            </div>

            <div class="flex flex-col gap-2" data-aos="fade-up" data-aos-offset="150">
              <label for="email_user" class="font-moderat_Medium text-text12 md:text-text14 text-[#6C7275]">E-mail</label>
              <input disabled id="email_user" type="email" placeholder="hola@gmail.com" value="{{ $user->email }}"
                class="w-full py-3 px-4 focus:outline-none placeholder-gray-400 font-moderat_Regular text-text16 md:text-text18 border-[1px] border-gray-200 text-[#6C7275] focus:ring-0  focus:border-black" />
            </div>

            <div class="my-5">
              <hr class="bg-[#151515] h-[2px]" />
            </div>

            <h2 class="text-text20 md:text-text22 font-moderat_700 text-[#151515]">
              Contraseña
            </h2>

            <div class="flex flex-col gap-2" data-aos="fade-up" data-aos-offset="150">
              <label for="contrasenia_anterior"
                class="font-moderat_Medium text-text12 md:text-text14 text-[#6C7275]">Contraseña anterior</label>
              <input id="contrasenia_anterior" name="password" type="password" placeholder="*************"
                class="w-full py-3 px-4 focus:outline-none placeholder-gray-400 font-moderat_Regular text-text16 md:text-text18 border-[1px] border-gray-200 text-[#6C7275] focus:ring-0  focus:border-black" />
            </div>

            <div class="flex flex-col gap-2" data-aos="fade-up" data-aos-offset="150">
              <label for="contrasenia_nueva" class="font-moderat_Medium text-text12 md:text-text14 text-[#6C7275]">Nueva
                Contraseña</label>
              <input id="contrasenia_nueva" name="newpassword" type="password" placeholder="*************"
                class="w-full py-3 px-4 focus:outline-none placeholder-gray-400 font-moderat_Regular text-text16 md:text-text18 border-[1px] border-gray-200 text-[#6C7275] focus:ring-0  focus:border-black" />
            </div>

            <div class="flex flex-col gap-2" data-aos="fade-up" data-aos-offset="150">
              <label for="repetir_contrasenia"
                class="font-moderat_Medium text-text12 md:text-text14 text-[#6C7275]">Repetir nueva contraseña</label>
              <input id="repetir_contrasenia" name="confirmnewpassword" type="password" placeholder="*************"
                class="w-full py-3 px-4 focus:outline-none placeholder-gray-400 font-moderat_Regular text-text16 md:text-text18 border-[1px] border-gray-200 text-[#6C7275] focus:ring-0  focus:border-black" />
            </div>

            <div class="flex gap-5 flex-col md:flex-row">
              <input data-aos="fade-up" data-aos-offset="150" type="submit" value="Guardar cambios" id="botonGuardar"
                class="text-white bg-[#0051FF] py-3 px-5  cursor-pointer border-2 font-moderat_Bold text-text18 text-center border-none inline-block" />

              <input data-aos="fade-up" data-aos-offset="150" type="submit" value="Cancelar"
                class="text-[#FFFFFF] py-3 px-5 cursor-pointer font-moderat_Bold text-text18 text-center inline-block border-[1px] border-[#151515] bg-[#001232]" />
            </div>
          </form>
        </div>
      </div>
    </section>

    <section class="bg-[#F3F3F3] w-11/12 mx-auto">

      <div
        class="flex flex-col md:flex-row justify-between items-center gap-5 pt-5 md:pt-10 pl-5 md:pl-10 pr-5 md:pr-10 mb-20">
        <div class="flex flex-col gap-6" data-aos="fade-up" data-aos-offset="150">
          <div class="flex flex-col gap-3">
            <p class="text-[#02173C] font-moderat_700 text-text32 leading-[38px]">¿Aún tienes alguna duda?</h2>
            <p class="text-[#02173C] font-moderat_Regular text-text18">Vestibulum ante ipsum primis in faucibus orci
              luctus et ultrices posuere.</p>
          </div>

          <div class="flex justify-start items-center pb-8">
            <a href="#"
              class="text-[#FFFFFF] font-moderat_Bold text-text16 py-3 bg-[#001232] px-5 w-full text-center md:inline-flex md:w-auto">Ponerse
              en contacto</a>
          </div>
        </div>

        <div>
          <img src="{{ asset('images/img/image_42.png') }}" alt="contacto">
        </div>
      </div>

    </section>
  </main>


@section('scripts_importados')
  <script>
    $("#botonGuardar").click(function(event) {

      event.preventDefault();

      let mensaje = null;
      let alert = "error";

      if ($('#contrasenia_anterior').val() != "" && $('#contrasenia_nueva').val() == "" && $(
          '#repetir_contrasenia').val() == "") {
        mensaje = "Completar los campos para cambiar contraseña";
      } else if ($('#contrasenia_anterior').val() === "" && $('#contrasenia_nueva').val() !== "" && $(
          '#repetir_contrasenia').val() === "") {
        mensaje = "Completar los campos para cambiar contraseña";
      } else if ($('#contrasenia_anterior').val() === "" && $('#contrasenia_nueva').val() === "" && $(
          '#repetir_contrasenia').val() !== "") {
        mensaje = "Completar los campos para cambiar contraseña";
      } else if ($('#contrasenia_anterior').val() !== "" && $('#contrasenia_nueva').val() !== "" && $(
          '#repetir_contrasenia').val() === "") {
        mensaje = "Completar los campos para cambiar contraseña";
      } else if ($('#contrasenia_anterior').val() !== "" && $('#contrasenia_nueva').val() === "" && $(
          '#repetir_contrasenia').val() !== "") {
        mensaje = "Completar los campos para cambiar contraseña";
      } else if ($('#contrasenia_anterior').val() === "" && $('#contrasenia_nueva').val() !== "" && $(
          '#repetir_contrasenia').val() !== "") {
        mensaje = "Completar los campos para cambiar contraseña";
      } else {
        if ($('#contrasenia_nueva').val() !== $('#repetir_contrasenia').val()) {
          mensaje = "La nueva contraseña no coincide con la confirmación";
        } else {
          alert = "success"
          const formData = new FormData();
          formData.append('id', $('#detalleCuenta input[name="id"]').val());
          formData.append('_token', $('#detalleCuenta input[name="_token"]').val());
          formData.append('name', $('#detalleCuenta input[name="name"]').val());
          formData.append('lastname', $('#detalleCuenta input[name="lastname"]').val());

          formData.append('password', $('#detalleCuenta input[name="password"]').val());
          formData.append('newpassword', $('#detalleCuenta input[name="newpassword"]').val());
          formData.append('confirmnewpassword', $('#detalleCuenta input[name="confirmnewpassword"]')
            .val());

          $.ajax({

            url: "{{ route('actualizarPerfil') }}",
            method: 'POST',
            data: formData,
            processData: false,
            contentType: false,

            success: function(success) {


              Swal.fire({
                position: "center",
                icon: success.alert,
                title: success.message,
                showConfirmButton: true,

              });


              // window.location.href = window.location.href;


            },
            error: function(error) {
              console.log(error)
              error = error.responseJSON
              Swal.fire({
                position: "center",
                icon: error.alert,
                title: error.message,
                showConfirmButton: true,

              });

            }

          })

        }
      }

      if (alert == "error") {
        Swal.fire({
          position: "center",
          icon: alert,
          title: mensaje,
          showConfirmButton: true,

        });
      } else if (alert == "success") {

      }

    });
  </script>



@stop

@stop
