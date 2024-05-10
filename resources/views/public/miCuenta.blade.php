@extends('components.public.matrix')

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
            <a href="index.html" class="font-moderat_500 text-[#565656]"
              >Home</a
            >
            <span>></span>
            <a href="#" class="font-moderat_700 text-[#111111]">Mi cuenta</a>
          </div>
        </div>
      </div>
    </section>

    <section class="mb-8 md:mb-16">
      <div
        class="flex flex-col gap-12 md:flex-row md:gap-28 w-full md:w-11/12 mx-auto"
      >
        <div class="bg-white py-5 md:py-0">
          <div class="w-11/12 md:w-full mx-auto">
            <div class="basis-5/12 flex flex-col gap-5">
              <div class="flex flex-col gap-5" data-aos="fade-up" data-aos-offset="150">
                <div
                  class="rounded-full w-24 h-24 bg-[#E9EDEF] flex justify-center items-center relative"
                >
                  <p
                    class="text-[#111111] text-text32 xl:text-text36 font-moderat_700"
                  >
                    FB
                  </p>
                  <label
                    for="upload_image"
                    class="bg-[#0051FF] rounded-full w-7 h-7 flex justify-center items-center absolute bottom-0 right-0 cursor-pointer"
                  >
                    <img
                      src="{{asset('images/svg/image_32.svg')}}"
                      alt="upload photo"
                    />
                  </label>
                  <input
                    type="file"
                    id="upload_image"
                    name="imagen"
                    accept="image/*"
                    class="hidden"
                  />
                </div>

                <div class="text-[#111111]">
                  <p class="font-moderat_700 text-text24 md:text-text28">
                    Ademir Neyra
                  </p>

                  <p class="font-moderat_Medium text-text12 md:text-text16 text-[#8896A8]">
                    ademirneyra@gmail.com
                  </p>
                </div>
              </div>
              <div class="flex flex-col gap-4" data-aos="fade-up" data-aos-offset="150">
                <div 
                  class="text-textWhite bg-[#0051FF] py-3 px-5 cursor-pointer border-none md:w-80 w-full flex justify-between items-center"
                >
                  <a
                    href="miCuenta.html"
                    class="font-moderat_Bold text-text16 md:text-text18 text-white"
                  >
                    Mi cuenta
                  </a>
                  <span>
                    <svg
                      width="20"
                      height="20"
                      viewBox="0 0 14 13"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M0.332031 6.50048C0.332031 2.93378 3.3187 0.0390626 6.9987 0.0390628C10.6787 0.039063 13.6654 2.93378 13.6654 6.50048C13.6654 10.0672 10.6787 12.9619 6.9987 12.9619C3.3187 12.9619 0.332031 10.0672 0.332031 6.50048ZM8.76536 6.27433L6.90536 4.47159C6.69203 4.26483 6.33203 4.40698 6.33203 4.69774L6.33203 8.30967C6.33203 8.60044 6.69203 8.74259 6.8987 8.53582L8.7587 6.73309C8.89203 6.60386 8.89203 6.39709 8.76536 6.27433Z"
                        fill="#FFFFFF"
                      />
                    </svg>
                  </span>
                </div>
                <div
                  class="text-textBlack py-3 px-5 rounded-2xl cursor-pointer border-none md:w-80 w-full flex justify-between items-center"
                >
                  <a
                    href="direccion.html"
                    class="font-moderat_Bold text-text16 md:text-text18 text-[#565656]"
                  >
                    Dirección
                  </a>
                  <span>
                    <svg
                      width="20"
                      height="20"
                      viewBox="0 0 14 13"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M0.332031 6.50048C0.332031 2.93378 3.3187 0.0390626 6.9987 0.0390628C10.6787 0.039063 13.6654 2.93378 13.6654 6.50048C13.6654 10.0672 10.6787 12.9619 6.9987 12.9619C3.3187 12.9619 0.332031 10.0672 0.332031 6.50048ZM8.76536 6.27433L6.90536 4.47159C6.69203 4.26483 6.33203 4.40698 6.33203 4.69774L6.33203 8.30967C6.33203 8.60044 6.69203 8.74259 6.8987 8.53582L8.7587 6.73309C8.89203 6.60386 8.89203 6.39709 8.76536 6.27433Z"
                        fill="#E9EDEF"
                      />
                    </svg>
                  </span>
                </div>
                <div
                  class="text-textBlack py-3 px-5 rounded-2xl cursor-pointer border-none md:w-80 flex justify-between items-center w-full"
                >
                  <a
                    href="historial.html"
                    class="font-moderat_Bold text-text16 md:text-text18 text-[#565656]"
                  >
                    Historial de pedidos
                  </a>
                  <span>
                    <svg
                      width="20"
                      height="20"
                      viewBox="0 0 14 13"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M0.332031 6.50048C0.332031 2.93378 3.3187 0.0390626 6.9987 0.0390628C10.6787 0.039063 13.6654 2.93378 13.6654 6.50048C13.6654 10.0672 10.6787 12.9619 6.9987 12.9619C3.3187 12.9619 0.332031 10.0672 0.332031 6.50048ZM8.76536 6.27433L6.90536 4.47159C6.69203 4.26483 6.33203 4.40698 6.33203 4.69774L6.33203 8.30967C6.33203 8.60044 6.69203 8.74259 6.8987 8.53582L8.7587 6.73309C8.89203 6.60386 8.89203 6.39709 8.76536 6.27433Z"
                        fill="#E9EDEF"
                      />
                    </svg>
                  </span>
                </div>

                <a
                  href="#"
                  class="bg-[#F3F5F7] text-[#151515] font-moderat_Bold text-text16 md:text-text18 py-3 px-4 flex justify-between items-center md:w-80 mt-0 md:mt-[200px] w-full"
                >
                  <span>Cerrar Sesión</span>
                  <img src="{{asset('images/svg/image_33.svg')}}" alt="cerrar" />
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="basis-7/12 w-11/12 md:w-full mx-auto" data-aos="fade-up" data-aos-offset="150">
          <form action="#" class="flex flex-col gap-5 mb-10">
            <h2
              class="text-text20 xl:text-text22 font-moderat_700 text-[#151515]"
            >
              Detalles de la cuenta
            </h2>
            <div class="flex flex-col gap-2" data-aos="fade-up" data-aos-offset="150">
              <label
                for="nombre_user"
                class="font-moderat_Medium text-text12 md:text-text14 text-[#6C7275]"
                >Nombre</label
              >
              <input
                id="nombre_user"
                type="text"
                placeholder="Nombre"
                class="w-full py-3 px-4 focus:outline-none placeholder-gray-400 font-moderat_Regular text-text16 md:text-text18 border-[1px] border-gray-200 text-[#6C7275] focus:ring-0  focus:border-black" 
              />
            </div>

            <div class="flex flex-col gap-2" data-aos="fade-up" data-aos-offset="150">
              <label
                for="apellido_user"
                class="font-moderat_Medium text-text12 md:text-text14 text-[#6C7275]"
                >Apellido</label
              >
              <input
                id="apellido_user"
                type="text"
                placeholder="Apellido"
                class="w-full py-3 px-4 focus:outline-none placeholder-gray-400 font-moderat_Regular text-text16 md:text-text18 border-[1px] border-gray-200 text-[#6C7275] focus:ring-0  focus:border-black"
              />
            </div>

            <div class="flex flex-col gap-2" data-aos="fade-up" data-aos-offset="150">
              <label
                for="email_user"
                class="font-moderat_Medium text-text12 md:text-text14 text-[#6C7275]"
                >E-mail</label
              >
              <input
                id="email_user"
                type="email"
                placeholder="hola@gmail.com"
                class="w-full py-3 px-4 focus:outline-none placeholder-gray-400 font-moderat_Regular text-text16 md:text-text18 border-[1px] border-gray-200 text-[#6C7275] focus:ring-0  focus:border-black"
              />
            </div>

            <div class="my-5">
              <hr class="bg-[#151515] h-[2px]" />
            </div>

            <h2
              class="text-text20 md:text-text22 font-moderat_700 text-[#151515]"
            >
              Contraseña
            </h2>

            <div class="flex flex-col gap-2" data-aos="fade-up" data-aos-offset="150">
              <label
                for="contrasenia_anterior"
                class="font-moderat_Medium text-text12 md:text-text14 text-[#6C7275]"
                >Contraseña anterior</label
              >
              <input
                id="contrasenia_anterior"
                type="password"
                placeholder="*************"
                class="w-full py-3 px-4 focus:outline-none placeholder-gray-400 font-moderat_Regular text-text16 md:text-text18 border-[1px] border-gray-200 text-[#6C7275] focus:ring-0  focus:border-black"
              />
            </div>

            <div class="flex flex-col gap-2" data-aos="fade-up" data-aos-offset="150">
              <label
                for="contrasenia_nueva"
                class="font-moderat_Medium text-text12 md:text-text14 text-[#6C7275]"
                >Nueva Contraseña</label
              >
              <input
                id="contrasenia_nueva"
                type="password"
                placeholder="*************"
                class="w-full py-3 px-4 focus:outline-none placeholder-gray-400 font-moderat_Regular text-text16 md:text-text18 border-[1px] border-gray-200 text-[#6C7275] focus:ring-0  focus:border-black"
              />
            </div>

            <div class="flex flex-col gap-2" data-aos="fade-up" data-aos-offset="150">
              <label
                for="repetir_contrasenia"
                class="font-moderat_Medium text-text12 md:text-text14 text-[#6C7275]"
                >Repetir nueva contraseña</label
              >
              <input
                id="repetir_contrasenia"
                type="password"
                placeholder="*************"
                class="w-full py-3 px-4 focus:outline-none placeholder-gray-400 font-moderat_Regular text-text16 md:text-text18 border-[1px] border-gray-200 text-[#6C7275] focus:ring-0  focus:border-black"
              />
            </div>

            <div class="flex gap-5 flex-col md:flex-row">
              <input
              data-aos="fade-up" data-aos-offset="150"
                type="submit"
                value="Guardar cambios"
                class="text-white bg-[#0051FF] py-3 px-5  cursor-pointer border-2 font-moderat_Bold text-text18 text-center border-none inline-block"
              />

              <input
              data-aos="fade-up" data-aos-offset="150"
                type="submit"
                value="Cancelar"
                class="text-[#FFFFFF] py-3 px-5 cursor-pointer font-moderat_Bold text-text18 text-center inline-block border-[1px] border-[#151515] bg-[#001232]"
              />
            </div>
          </form>
        </div>
      </div>
    </section>

    <section class="bg-[#F3F3F3] w-11/12 mx-auto">

      <div class="flex flex-col md:flex-row justify-between items-center gap-5 pt-5 md:pt-10 pl-5 md:pl-10 pr-5 md:pr-10 mb-20">
          <div class="flex flex-col gap-6" data-aos="fade-up" data-aos-offset="150">
              <div class="flex flex-col gap-3">
                  <p class="text-[#02173C] font-moderat_700 text-text32 leading-[38px]">¿Aún tienes alguna duda?</h2>
                  <p class="text-[#02173C] font-moderat_Regular text-text18">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere.</p>
              </div>
             
              <div class="flex justify-start items-center pb-8">
                  <a href="#" class="text-[#FFFFFF] font-moderat_Bold text-text16 py-3 bg-[#001232] px-5 w-full text-center md:inline-flex md:w-auto">Ponerse en contacto</a>
              </div>
          </div>

          <div>
              <img src="{{asset('images/img/image_42.png')}}" alt="contacto">
          </div>
      </div>

  </section>
  </main>


@section('scripts_importados')




@stop

@stop
