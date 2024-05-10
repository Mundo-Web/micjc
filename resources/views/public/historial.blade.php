@extends('components.public.matrix')

@section('css_importados')
    {{--     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css"> --}}

    <style>

    </style>

@stop


@section('content')
<main>

  <section class=" mb-0 md:mb-10 hidden md:block">
    <div class="flex flex-col w-11/12 mx-auto">
        <div class="flex flex-col gap-10 my-5" data-aos="fade-up" data-aos-offset="150">
            <div class="flex gap-1 text-text14 md:text-text18">
                <a href="index.html" class="font-moderat_500 text-[#565656]">Home</a>
                <span>></span>
                <a href="#" class="font-moderat_700 text-[#111111]">Mi cuenta</a>
            </div>
        </div>
    </div>
  </section>

    <section class="md:mb-20">
      <div
        class="flex flex-col gap-10 lg:flex-row md:gap-28 w-full md:w-11/12 mx-auto"
      >
        <div class="">
          <div class="w-11/12 md:w-full mx-auto">
            <div class="flex flex-col gap-5 basis-5/12" data-aos="fade-up" data-aos-offset="150">
                <div class="flex flex-col gap-5">
                    <div
                      class="rounded-full w-24 h-24 bg-[#E9EDEF] flex justify-center items-center relative"
                    >
                      <p
                        class="text-[#111111] text-text32 md:text-text36 font-moderat_700"
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
                  <div class="flex flex-col gap-4">
                    <div
                      class="text-textBlack py-3 px-5 rounded-2xl cursor-pointer border-none md:w-80 w-full flex justify-between items-center"
                    >
                      <a
                        href="{{route('miCuenta')}}"
                        class="font-moderat_Bold text-text16 md:text-text18 text-[#565656]"
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
                            fill="#E9EDEF"
                          />
                        </svg>
                      </span>
                    </div>
                    <div
                      class="text-textBlack py-3 px-5 rounded-2xl cursor-pointer border-none md:w-80 w-full flex justify-between items-center"
                    >
                      <a
                        href="{{route('miDireccion')}}"
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
                      class="text-textWhite bg-[#0051FF] py-3 px-5 cursor-pointer border-none md:w-80 w-full flex justify-between items-center"
                    >
                      <a
                        href="{{route('historial')}}"
                        class="font-moderat_Bold text-text16 md:text-text18 text-white"
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
                            fill="#FFFFFF"
                          />
                        </svg>
                      </span>
                    </div>
    
                    <a
                      href="#"
                      class="bg-[#F3F5F7] text-[#151515] font-moderat_700 text-text16 md:text-text18 py-3 px-4 flex justify-between items-center md:w-80 w-full mt-10 lg:mt-[200px]"
                    >
                      <span>Cerrar Sesión</span>
                      <img src="{{asset('images/svg/image_33.svg')}}" alt="cerrar" />
                    </a>
                  </div>
            </div>
          </div>
        </div>
        <div class="basis-7/12 w-11/12 md:w-full mx-auto">
          <h2
            class="text-[#151515] font-moderat_700 text-text20 xl:text-text22 pt-5 md:pt-5 pb-10"
          >
            Historial de pedidos
          </h2>
          <!-- para destop tabla -->
          <div class="hidden lg:block">
            <table class="table-auto w-full">
              <thead data-aos="fade-up" data-aos-offset="150">
                <tr
                  class="text-left text-[#6C7275] font-moderat_Regular text-text14 md:text-text16 border-b-[1px] border-[#E8ECEF]"
                >
                  <th class="py-4">Código de pedido</th>
                  <th class="py-4">Fecha</th>
                  <th class="py-4">Estatus</th>
                  <th class="py-4">Precio</th>
                </tr>
              </thead>
              <tbody data-aos="fade-up" data-aos-offset="150"
                class="text-[#141718] font-moderat_Regular text-text14 md:text-text16"
              >
                <tr class="border-b-[1px] border-[#E8ECEF] text-left">
                  <td class="py-5">#3456_768</td>
                  <td class="py-5">12 de Enero de 2024</td>
                  <td class="py-5">Entregado</td>
                  <td class="py-5">$1234.00</td>
                </tr>

                <tr class="border-b-[1px] border-[#E8ECEF] text-left">
                  <td class="py-5">#3456_768</td>
                  <td class="py-5">12 de Enero de 2024</td>
                  <td class="py-5">Entregado</td>
                  <td class="py-5">$1234.00</td>
                </tr>

                <tr class="border-b-[1px] border-[#E8ECEF] text-left">
                  <td class="py-5">#3456_768</td>
                  <td class="py-5">12 de Enero de 2024</td>
                  <td class="py-5">Entregado</td>
                  <td class="py-5">$1234.00</td>
                </tr>

                <tr class="border-b-[1px] border-[#E8ECEF] text-left">
                  <td class="py-5">#3456_768</td>
                  <td class="py-5">12 de Enero de 2024</td>
                  <td class="py-5">Entregado</td>
                  <td class="py-5">$1234.00</td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- para mobiles acordion -->
          <div class="block lg:hidden">
            <div class="flex flex-col gap-5">
                <div class="grid grid-cols-2  gap-5 border-b-2 border-[#E8ECEF] pb-5" data-aos="fade-up" data-aos-offset="150">
                    <div class="flex flex-col gap-1">
                        <p class="text-[#6C7275] text-text12 font-moderat_Regular">Código de pedido</p>
                        <p class="text-[#141718] font-moderat_Regular text-text16">#3456_768</p>
                    </div>
                    <div class="flex flex-col gap-1">
                        <p class="text-[#6C7275] text-text12 font-moderat_Regular">Fecha</p>
                        <p class="text-[#141718] font-moderat_Regular text-text16">12 de Enero de 2024</p>
                    </div>
                    <div class="flex flex-col gap-1">
                        <p class="text-[#6C7275] text-text12 font-moderat_Regular">Estatus</p>
                        <p class="text-[#141718] font-moderat_Regular text-text16">Entregado</p>
                    </div>
                    <div class="flex flex-col gap-1">
                        <p class="text-[#6C7275] text-text12 font-moderat_Regular">Precio</p>
                        <p class="text-[#141718] font-moderat_Regular text-text16">S/ 1234.00</p>
                    </div>
                </div>

                <div class="grid grid-cols-2  gap-5 border-b-2 border-[#E8ECEF] pb-5" data-aos="fade-up" data-aos-offset="150">
                  <div class="flex flex-col gap-1">
                      <p class="text-[#6C7275] text-text12 font-moderat_Regular">Código de pedido</p>
                      <p class="text-[#141718] font-moderat_Regular text-text16">#3456_768</p>
                  </div>
                  <div class="flex flex-col gap-1">
                      <p class="text-[#6C7275] text-text12 font-moderat_Regular">Fecha</p>
                      <p class="text-[#141718] font-moderat_Regular text-text16">12 de Enero de 2024</p>
                  </div>
                  <div class="flex flex-col gap-1">
                      <p class="text-[#6C7275] text-text12 font-moderat_Regular">Estatus</p>
                      <p class="text-[#141718] font-moderat_Regular text-text16">Entregado</p>
                  </div>
                  <div class="flex flex-col gap-1">
                      <p class="text-[#6C7275] text-text12 font-moderat_Regular">Precio</p>
                      <p class="text-[#141718] font-moderat_Regular text-text16">S/ 1234.00</p>
                  </div>
              </div>

              <div class="grid grid-cols-2  gap-5 border-b-2 border-[#E8ECEF] pb-5" data-aos="fade-up" data-aos-offset="150">
                <div class="flex flex-col gap-1">
                    <p class="text-[#6C7275] text-text12 font-moderat_Regular">Código de pedido</p>
                    <p class="text-[#141718] font-moderat_Regular text-text16">#3456_768</p>
                </div>
                <div class="flex flex-col gap-1">
                    <p class="text-[#6C7275] text-text12 font-moderat_Regular">Fecha</p>
                    <p class="text-[#141718] font-moderat_Regular text-text16">12 de Enero de 2024</p>
                </div>
                <div class="flex flex-col gap-1">
                    <p class="text-[#6C7275] text-text12 font-moderat_Regular">Estatus</p>
                    <p class="text-[#141718] font-moderat_Regular text-text16">Entregado</p>
                </div>
                <div class="flex flex-col gap-1">
                    <p class="text-[#6C7275] text-text12 font-moderat_Regular">Precio</p>
                    <p class="text-[#141718] font-moderat_Regular text-text16">S/ 1234.00</p>
                </div>
            </div>


            <div class="grid grid-cols-2  gap-5 border-b-2 border-[#E8ECEF] pb-5" data-aos="fade-up" data-aos-offset="150">
              <div class="flex flex-col gap-1">
                  <p class="text-[#6C7275] text-text12 font-moderat_Regular">Código de pedido</p>
                  <p class="text-[#141718] font-moderat_Regular text-text16">#3456_768</p>
              </div>
              <div class="flex flex-col gap-1">
                  <p class="text-[#6C7275] text-text12 font-moderat_Regular">Fecha</p>
                  <p class="text-[#141718] font-moderat_Regular text-text16">12 de Enero de 2024</p>
              </div>
              <div class="flex flex-col gap-1">
                  <p class="text-[#6C7275] text-text12 font-moderat_Regular">Estatus</p>
                  <p class="text-[#141718] font-moderat_Regular text-text16">Entregado</p>
              </div>
              <div class="flex flex-col gap-1">
                  <p class="text-[#6C7275] text-text12 font-moderat_Regular">Precio</p>
                  <p class="text-[#141718] font-moderat_Regular text-text16">S/ 1234.00</p>
              </div>
          </div>
                
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="bg-[#F3F3F3] w-11/12 mx-auto">

      <div
          class="flex flex-col md:flex-row justify-between items-center gap-5 pt-5 md:pt-10 pl-5 md:pl-10 pr-5 md:pr-10 my-20">
          <div class="flex flex-col gap-6" data-aos="fade-up" data-aos-offset="150">
              <div class="flex flex-col gap-3">
                  <p class="text-[#02173C] font-moderat_700 text-text32 leading-[38px]">¿Aún tienes alguna duda?</h2>
                  <p class="text-[#02173C] font-moderat_Regular text-text18">Vestibulum ante ipsum primis in faucibus
                      orci luctus et ultrices posuere.</p>
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
        
        
       
    </script>

@stop

@stop
