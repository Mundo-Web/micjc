@extends('components.public.matrix')

@section('css_importados')

@stop


@section('content')


<main>
      <section class="w-11/12 mx-auto mt-8 mb-16 flex flex-col gap-5">
        <div class="text-text14 xl:text-text16">
          <a href="" class="font-moderat_400 text-[#565656]"
            >
            Home
            </a>
          <span>/</span>
          <a href="carrito.html" class="font-moderat_700 text-[#141718]"
            >Carrito</a
          >
        </div>
        <div class="flex md:gap-20">
          <div
            class="flex flex-col md:flex-row md:justify-between md:items-center md:basis-7/12 w-full md:w-auto text-text18"
          >
            <p
              class="font-moderat_700 text-[#21201E] border-b-[1px] border-[#6C7275] py-4 basis-1/3 h-full text-center"
            >
              <span class="flex items-center h-full justify-start">Carro de la compra</span>
            </p>

            <p
              class="font-moderat_700 text-[#C8C8C8] border-b-[1px] border-[#6C7275] py-4 basis-1/3 h-full text-center flex justify-start md:justify-center items-center"
            >
              <span class="flex items-center h-full">Detalles de pago</span>
            </p>

            <p
              class="font-moderat_700 text-[#C8C8C8] border-b-[1px] border-[#6C7275] py-4 basis-1/3 h-full text-center"
            >
              <span class="flex items-center h-full justify-start md:justify-end">Orden completada</span>
            </p>
          </div>
          <div class="md:basis-5/12"></div>
        </div>
        <div class="flex flex-col md:flex-row gap-20">
          <div class="basis-7/12 flex flex-col">
            <div>
              <div
                class="flex flex-col lg:flex-row pb-5 border-b-[2px] border-[#E8ECEF] gap-5"
              >
                <div class="w-full basis-5/12">
                  <p
                    class="font-moderat_700 text-text14 xl:text-text16 text-[#141718] text-left py-4"
                  >
                    Producto
                  </p>

                  <div class="flex justify-start items-center gap-5 w-full">
                    <img src="{{asset('images/img/image_45.png')}}" alt="doomine" />
                    <div class="flex flex-col justify-start items-start w-full gap-1 md:gap-0">
                      <h3
                        class="font-moderat_700 text-text14 xl:text-text16 text-[#151515]"
                      >
                        Laptop HP
                      </h3>
                      <p
                        class="font-moderat_400 text-text12 xl:text-text14 text-[#6C7275]"
                      >
                        Color: Black
                      </p>
                      <div
                        class="font-moderat_500 text-text12 xl:text-text14 text-[#6C7275] flex justify-between items-center gap-10 w-full md:w-auto"
                      >
                        <p>Eliminar</p>
                        <div class="cursor-pointer">
                          <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0.529247 0.529247C0.789596 0.268897 1.21171 0.268897 1.47206 0.529247L5.00065 4.05784L8.52925 0.529247C8.7896 0.268897 9.21171 0.268897 9.47206 0.529247C9.73241 0.789596 9.73241 1.21171 9.47206 1.47206L5.94346 5.00065L9.47206 8.52925C9.73241 8.7896 9.73241 9.21171 9.47206 9.47206C9.21171 9.73241 8.7896 9.73241 8.52925 9.47206L5.00065 5.94346L1.47206 9.47206C1.21171 9.73241 0.789596 9.73241 0.529247 9.47206C0.268897 9.21171 0.268897 8.7896 0.529247 8.52925L4.05784 5.00065L0.529247 1.47206C0.268897 1.21171 0.268897 0.789596 0.529247 0.529247Z" fill="#6C7275"/>
                          </svg>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="flex gap-5 w-full text-center basis-7/12">
                  <div class="flex-1">
                    <p
                      class="font-moderat_700 text-text14 xl:text-text16 text-[#141718] pt-4 pb-6 lg:pb-14"
                    >
                      Cantidad
                    </p>

                    <div>
                        <input type="number" class="border-2 rounded-lg w-16 h-8" value="01" step="1">
                    </div>
                  </div>

                  <div class="flex-1">
                    <p
                      class="font-moderat_700 text-text14 xl:text-text16 text-[#141718] pt-4 pb-6 lg:pb-14"
                    >
                      Precio
                    </p>
                    <p
                      class="font-moderat_700 text-text18 xl:text-text20 text-[#151515]"
                    >
                      S/<span>19.00</span> 
                    </p>
                  </div>

                  <div class="flex-1">
                    <p
                      class="font-moderat_700 text-text14 xl:text-text16 text-[#141718] pt-4 pb-6 lg:pb-14"
                    >
                      Sub Total
                    </p>
                    <p
                      class="font-moderat_700 text-text18 xl:text-text20 text-[#151515]"
                    >
                      S/<span>38.00</span> 
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <div>
              <div
                class="flex flex-col lg:flex-row pb-5 border-b-[2px] border-[#E8ECEF] gap-5"
              >
                <div class="w-full basis-5/12">
                  <p
                    class="font-moderat_700 text-text14 xl:text-text16 text-[#141718] text-left py-4"
                  >
                    Producto
                  </p>

                  <div class="flex justify-start items-center gap-5 w-full">
                    <img src="{{asset('images/img/image_45.png')}}" alt="doomine" />
                    <div class="flex flex-col justify-start items-start w-full gap-1 md:gap-0">
                      <h3
                        class="font-moderat_700 text-text14 xl:text-text16 text-[#151515]"
                      >
                        Laptop HP
                      </h3>
                      <p
                        class="font-moderat_400 text-text12 xl:text-text14 text-[#6C7275]"
                      >
                        Color: Black
                      </p>
                      <div
                        class="font-moderat_500 text-text12 xl:text-text14 text-[#6C7275] flex justify-between items-center gap-10 w-full md:w-auto"
                      >
                        <p>Eliminar</p>
                        <div class="cursor-pointer">
                          <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0.529247 0.529247C0.789596 0.268897 1.21171 0.268897 1.47206 0.529247L5.00065 4.05784L8.52925 0.529247C8.7896 0.268897 9.21171 0.268897 9.47206 0.529247C9.73241 0.789596 9.73241 1.21171 9.47206 1.47206L5.94346 5.00065L9.47206 8.52925C9.73241 8.7896 9.73241 9.21171 9.47206 9.47206C9.21171 9.73241 8.7896 9.73241 8.52925 9.47206L5.00065 5.94346L1.47206 9.47206C1.21171 9.73241 0.789596 9.73241 0.529247 9.47206C0.268897 9.21171 0.268897 8.7896 0.529247 8.52925L4.05784 5.00065L0.529247 1.47206C0.268897 1.21171 0.268897 0.789596 0.529247 0.529247Z" fill="#6C7275"/>
                          </svg>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="flex gap-5 w-full text-center basis-7/12">
                  <div class="flex-1">
                    <p
                      class="font-moderat_700 text-text14 xl:text-text16 text-[#141718] pt-4 pb-6 lg:pb-14"
                    >
                      Cantidad
                    </p>

                    <div>
                        <input type="number" class="border-2 rounded-lg w-16 h-8" value="01" step="1">
                    </div>
                  </div>

                  <div class="flex-1">
                    <p
                      class="font-moderat_700 text-text14 xl:text-text16 text-[#141718] pt-4 pb-6 lg:pb-14"
                    >
                      Precio
                    </p>
                    <p
                      class="font-moderat_700 text-text18 xl:text-text20 text-[#151515]"
                    >
                      S/<span>19.00</span> 
                    </p>
                  </div>

                  <div class="flex-1">
                    <p
                      class="font-moderat_700 text-text14 xl:text-text16 text-[#141718] pt-4 pb-6 lg:pb-14"
                    >
                      Sub Total
                    </p>
                    <p
                      class="font-moderat_700 text-text18 xl:text-text20 text-[#151515]"
                    >
                      S/<span>38.00</span> 
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <div>
              <div
                class="flex flex-col lg:flex-row pb-5 border-b-[2px] border-[#E8ECEF] gap-5"
              >
                <div class="w-full basis-5/12">
                  <p
                    class="font-moderat_700 text-text14 xl:text-text16 text-[#141718] text-left py-4"
                  >
                    Producto
                  </p>

                  <div class="flex justify-start items-center gap-5 w-full">
                    <img src="{{asset('images/img/image_45.png')}}" alt="doomine" />
                    <div class="flex flex-col justify-start items-start w-full gap-1 md:gap-0">
                      <h3
                        class="font-moderat_700 text-text14 xl:text-text16 text-[#151515]"
                      >
                        Laptop HP
                      </h3>
                      <p
                        class="font-moderat_400 text-text12 xl:text-text14 text-[#6C7275]"
                      >
                        Color: Black
                      </p>
                      <div
                        class="font-moderat_500 text-text12 xl:text-text14 text-[#6C7275] flex justify-between items-center gap-10 w-full md:w-auto"
                      >
                        <p>Eliminar</p>
                        <div class="cursor-pointer">
                          <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0.529247 0.529247C0.789596 0.268897 1.21171 0.268897 1.47206 0.529247L5.00065 4.05784L8.52925 0.529247C8.7896 0.268897 9.21171 0.268897 9.47206 0.529247C9.73241 0.789596 9.73241 1.21171 9.47206 1.47206L5.94346 5.00065L9.47206 8.52925C9.73241 8.7896 9.73241 9.21171 9.47206 9.47206C9.21171 9.73241 8.7896 9.73241 8.52925 9.47206L5.00065 5.94346L1.47206 9.47206C1.21171 9.73241 0.789596 9.73241 0.529247 9.47206C0.268897 9.21171 0.268897 8.7896 0.529247 8.52925L4.05784 5.00065L0.529247 1.47206C0.268897 1.21171 0.268897 0.789596 0.529247 0.529247Z" fill="#6C7275"/>
                          </svg>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="flex gap-5 w-full text-center basis-7/12">
                  <div class="flex-1">
                    <p
                      class="font-moderat_700 text-text14 xl:text-text16 text-[#141718] pt-4 pb-6 lg:pb-14"
                    >
                      Cantidad
                    </p>

                    <div>
                        <input type="number" class="border-2 rounded-lg w-16 h-8" value="01" step="1">
                    </div>
                  </div>

                  <div class="flex-1">
                    <p
                      class="font-moderat_700 text-text14 xl:text-text16 text-[#141718] pt-4 pb-6 lg:pb-14"
                    >
                      Precio
                    </p>
                    <p
                      class="font-moderat_700 text-text18 xl:text-text20 text-[#151515]"
                    >
                      S/<span>19.00</span> 
                    </p>
                  </div>

                  <div class="flex-1">
                    <p
                      class="font-moderat_700 text-text14 xl:text-text16 text-[#141718] pt-4 pb-6 lg:pb-14"
                    >
                      Sub Total
                    </p>
                    <p
                      class="font-moderat_700 text-text18 xl:text-text20 text-[#151515]"
                    >
                      S/<span>38.00</span> 
                    </p>
                  </div>
                </div>
              </div>
            </div>

          </div>

          <div class="basis-5/12 flex flex-col justify-start gap-5">
            <h2
              class="font-moderat_700 text-text20 xl:text-text22 text-[#151515] pt-3"
            >
              Resumen de la compra
            </h2>

            <div>
              <div class="flex flex-col gap-5">
                <div class="w-full flex flex-col gap-5">
                  <div
                    class="flex items-center ps-4 border border-gray-200 rounded dark:border-gray-700"
                  >
                    <input
                      type="radio"
                      id="bordered-radio-1"
                      name="bordered-radio"
                      value=""
                      class="focus:ring-transparent w-5 h-5 cursor-pointer"
                    />
                    <label
                      for="bordered-radio-1"
                      class="w-full py-4 ms-2 text-text16 xl:text-text18 font-moderat_400 text-[#151515] flex justify-between items-center px-4"
                    >
                      <span>Envío gratis</span>
                      <span>s/ 0.00</span>
                    </label>
                  </div>
                  <div
                    class="flex items-center ps-4 border border-gray-200 rounded dark:border-gray-700"
                  >
                    <input
                      type="radio"
                      id="bordered-radio-2"
                      name="bordered-radio"
                      value=""
                      class="focus:ring-transparent w-5 h-5 cursor-pointer"
                    />
                    <label
                      for="bordered-radio-2"
                      class="w-full py-4 ms-2 text-text16 xl:text-text18 font-moderat_400 text-[#151515] flex justify-between items-center px-4"
                    >
                      <span>Envío express</span>
                      <span>s/ 15.00</span>
                    </label>
                  </div>

                  <div
                    class="flex items-center ps-4 border border-gray-200 rounded dark:border-gray-700"
                  >
                    <input
                      type="radio"
                      id="bordered-radio-3"
                      name="bordered-radio"
                      value=""
                      class="w-5 h-5 focus:ring-transparent cursor-pointer"
                    />
                    <label
                      for="bordered-radio-3"
                      class="w-full py-4 ms-2 text-text16 xl:text-text18 font-moderat_400 text-[#151515] flex justify-between items-center px-4"
                    >
                      <span>Recoger</span>
                      <span>s/ 21.00</span>
                    </label>
                  </div>
                </div>

                <div
                  class="text-[#151515] flex justify-between items-center text-text14 xl:text-text18"
                >
                  <p class="font-moderat_400">SubTotal</p>
                  <span class="font-moderat_700">s/ 114.00</span>
                </div>

                <div
                  class="text-[#151515] flex justify-between items-center text-text20 xl:text-text22"
                >
                  <p class="font-moderat_700">Total</p>
                  <span class="font-moderat_700">s/ 114.00</span>
                </div>

                <a
                  href="{{route('detallesPago')}}"
                  class="text-white bg-[#0051FF] w-full py-3 cursor-pointer font-moderat_700 text-text16 xl:text-text18 inline-block text-center hover:bg-sky-900 md:duration-300"
                >
                  Siguiente
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="bg-[#F3F3F3] w-11/12 mx-auto">

            <div class="flex flex-col md:flex-row justify-between items-center gap-5 pt-5 md:pt-10 pl-5 md:pl-10 pr-5 md:pr-10 mb-10">
                <div class="flex flex-col gap-6">
                    <div class="flex flex-col gap-3">
                        <p class="text-[#02173C] font-moderat_700 text-text32 leading-[38px]">¿Aún tienes alguna duda?</h2>
                        <p class="text-[#02173C] font-moderat_400 text-text18">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere.</p>
                    </div>
                   
                    <div class="flex justify-start items-center pb-8">
                        <a href="#" class="text-[#FFFFFF] font-moderat_700 text-text16 py-3 bg-[#001232] px-5 w-full text-center md:inline-flex md:w-auto">Ponerse en contacto</a>
                    </div>
                </div>

                <div>
                    <img src="{{asset('images/img/image_42.png')}}" alt="contacto">
                </div>
            </div>

        </section>
    </main>

  
@section('scripts_importados')
<script>


</script>
@stop

@stop