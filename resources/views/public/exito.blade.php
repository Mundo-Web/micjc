@extends('components.public.matrix')

@section('css_importados')
    <style>

    </style>

@stop


@section('content')
<main>
    <section class="mt-5 mb-10 w-11/12 mx-auto">
      <div
        class="flex flex-col lg:flex-row gap-32 md:gap-10"
      >
        <div class="md:basis-1/2 flex flex-col gap-10 basis-0">
            <div class="text-text14 xl:text-text16" data-aos="fade-up" data-aos-offset="150">
                <a href="" class="font-moderat_500 text-[#565656]">
                    Home
                </a>
                <span>></span>
                <a href="carrito.html" class="font-moderat_700 text-[#141718]">Carrito</a>
            </div>

            <div
            class="flex flex-col md:flex-row md:justify-between md:items-center lg:basis-7/12 w-full lg:w-auto text-text18" data-aos="fade-up" data-aos-offset="150">
            <p
                class="font-moderat_700 text-[#21201E] border-b-[1px] border-[#6C7275] py-4 basis-1/3 h-full text-center">
                <span class="flex items-center h-full justify-start">Carro de la compra</span>
            </p>

            <p
                class="font-moderat_700 text-[#21201E] border-b-[1px] border-[#6C7275] py-4 basis-1/3 h-full text-center">
                <span class="flex items-center h-full justify-start md:justify-center">Detalles de pago</span>
            </p>

            <p
                class="font-moderat_700 text-[#21201E] border-b-[1px] border-[#6C7275] py-4 basis-1/3 h-full text-center">
                <span class="flex items-center h-full justify-start md:justify-center">Orden completada</span>
            </p>
        </div>
        </div>
      </div>

      <div
        class="flex flex-col justify-start gap-5 md:gap-10 max-w-[700px] mx-auto pt-10 text-center"
      >
        <div class="flex flex-col gap-4 justify-center items-center">
          <p data-aos="fade-up" data-aos-offset="150" 
            class="text-[#6C7275] font-moderat_Medium text-text18 xl:text-text24 "
          >
            Gracias por tu compra &#127881;
          </p>
          <h2 data-aos="fade-up" data-aos-offset="150" 
            class="font-moderat_700 text-text40 md:text-text44 text-[#151515] leading-[56px] max-w-[600px]"
          >
            Tu orden ha sido recibida
          </h2>
          <p data-aos="fade-up" data-aos-offset="150" 
            class="font-moderat_Medium text-text16 md:text-text20 text-[#6C7275]"
          >
            Código de pedido
          </p>
          <p data-aos="fade-up" data-aos-offset="150" 
            class="font-moderat_700 text-text16 md:text-text20 text-[#141718]"
          >
            #0123_45678
          </p>
        </div>

        <div class="flex flex-col gap-5">
          <div data-aos="fade-up" data-aos-offset="150" 
            class="flex flex-col md:flex-row pb-8 border-b-[2px] border-[#E8ECEF] gap-5"
          >
            <div class="w-full basis-5/12">
              <p
                class="font-moderat_Bold text-text14 xl:text-text18 text-[#141718] text-left py-4"
              >
                Producto
              </p>

              <div class="flex justify-start md:justify-center items-center gap-5">
                    <div class="h-full w-full flex justify-center basis-1/3 md:basis-1/2 items-center bg-[#F3F3F3] py-8 px-3">
                        <img src="{{ asset('images/img/image_52.png') }}" alt="producto"
                            class="w-[75] h-[48px]" />
                    </div>

                    <div class="flex flex-col gap-2 basis-2/3 md:basis-1/2 md:flex-1 items-start">
                        <h3 class="font-moderat_700 text-text16 xl:text-text18 text-[#151515]">
                            Producto 1
                        </h3>
                        <p class="font-moderat_Regular text-text12 xl:text-text14 text-[#6C7275]">
                            Color: Black
                        </p>
                        <p class="font-moderat_Regular text-text12 xl:text-text14 text-[#6C7275]">
                            SKU: 0908824
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex gap-10 w-full text-center basis-7/12">
              <div class="flex-1">
                <p
                  class="font-moderat_Bold text-text14 md:text-text18 text-[#141718] pt-4 pb-6"
                >
                  Cantidad
                </p>

                <div class="flex justify-center text-[#151515] md:pt-8">
                  <div
                    class="w-8 h-8 flex justify-center items-center flex-1"
                  >
                    <span class="font-moderat_Bold text-text14 md:text-text18"
                      >2</span
                    >
                  </div>
                </div>
              </div>

              <div class="flex-1">
                <p
                  class="font-moderat_Bold text-text14 md:text-text18 text-[#141718] pt-4 pb-6"
                >
                  Precio
                </p>
                <p
                  class="font-moderat_Bold text-text14 md:text-text18 text-[#151515] md:pt-8"
                >
                  s/19.00
                </p>
              </div>

              <div class="flex-1">
                <p
                  class="font-moderat_Bold text-text14 md:text-text18 text-[#141718] pt-4 pb-6"
                >
                  Sub Total
                </p>
                <p
                  class="font-moderat_Bold text-text14 md:text-text18 text-[#151515] md:pt-8"
                >
                  s/38.00
                </p>
              </div>
            </div>
          </div>

          <div data-aos="fade-up" data-aos-offset="150" 
            class="flex flex-col md:flex-row pb-8 border-b-[2px] border-[#E8ECEF] gap-5"
          >
            <div class="w-full basis-5/12">
              <p
                class="font-moderat_Bold text-text14 xl:text-text18 text-[#141718] text-left py-4"
              >
                Producto
              </p>

              <div class="flex justify-start md:justify-center items-center gap-5">
                    <div class="h-full w-full flex justify-center basis-1/3 md:basis-1/2 items-center bg-[#F3F3F3] py-8 px-3">
                        <img src="{{ asset('images/img/image_52.png') }}" alt="producto"
                            class="w-[75] h-[48px]" />
                    </div>

                    <div class="flex flex-col gap-2 basis-2/3 md:basis-1/2 md:flex-1 items-start">
                        <h3 class="font-moderat_700 text-text16 xl:text-text18 text-[#151515]">
                            Producto 1
                        </h3>
                        <p class="font-moderat_Regular text-text12 xl:text-text14 text-[#6C7275]">
                            Color: Black
                        </p>
                        <p class="font-moderat_Regular text-text12 xl:text-text14 text-[#6C7275]">
                            SKU: 0908824
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex gap-10 w-full text-center basis-7/12">
              <div class="flex-1">
                <p
                  class="font-moderat_Bold text-text14 md:text-text18 text-[#141718] pt-4 pb-6"
                >
                  Cantidad
                </p>

                <div class="flex justify-center text-[#151515] md:pt-8">
                  <div
                    class="w-8 h-8 flex justify-center items-center flex-1"
                  >
                    <span class="font-moderat_Bold text-text14 md:text-text18"
                      >2</span
                    >
                  </div>
                </div>
              </div>

              <div class="flex-1">
                <p
                  class="font-moderat_Bold text-text14 md:text-text18 text-[#141718] pt-4 pb-6"
                >
                  Precio
                </p>
                <p
                  class="font-moderat_Bold text-text14 md:text-text18 text-[#151515] md:pt-8"
                >
                  s/19.00
                </p>
              </div>

              <div class="flex-1">
                <p
                  class="font-moderat_Bold text-text14 md:text-text18 text-[#141718] pt-4 pb-6"
                >
                  Sub Total
                </p>
                <p
                  class="font-moderat_Bold text-text14 md:text-text18 text-[#151515] md:pt-8"
                >
                  s/38.00
                </p>
              </div>
            </div>
          </div>

          <div data-aos="fade-up" data-aos-offset="150" 
            class="flex flex-col md:flex-row pb-8 border-b-[2px] border-[#E8ECEF] gap-5"
          >
            <div class="w-full basis-5/12">
              <p
                class="font-moderat_Bold text-text14 xl:text-text18 text-[#141718] text-left py-4"
              >
                Producto
              </p>

              <div class="flex justify-start md:justify-center items-center gap-5">
                    <div class="h-full w-full flex justify-center basis-1/3 md:basis-1/2 items-center bg-[#F3F3F3] py-8 px-3">
                        <img src="{{ asset('images/img/image_52.png') }}" alt="producto"
                            class="w-[75] h-[48px]" />
                    </div>

                    <div class="flex flex-col gap-2 basis-2/3 md:basis-1/2 md:flex-1 items-start">
                        <h3 class="font-moderat_700 text-text16 xl:text-text18 text-[#151515]">
                            Producto 1
                        </h3>
                        <p class="font-moderat_Regular text-text12 xl:text-text14 text-[#6C7275]">
                            Color: Black
                        </p>
                        <p class="font-moderat_Regular text-text12 xl:text-text14 text-[#6C7275]">
                            SKU: 0908824
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex gap-10 w-full text-center basis-7/12">
              <div class="flex-1">
                <p
                  class="font-moderat_Bold text-text14 md:text-text18 text-[#141718] pt-4 pb-6"
                >
                  Cantidad
                </p>

                <div class="flex justify-center text-[#151515] md:pt-8">
                  <div
                    class="w-8 h-8 flex justify-center items-center flex-1"
                  >
                    <span class="font-moderat_Bold text-text14 md:text-text18"
                      >2</span
                    >
                  </div>
                </div>
              </div>

              <div class="flex-1">
                <p
                  class="font-moderat_Bold text-text14 md:text-text18 text-[#141718] pt-4 pb-6"
                >
                  Precio
                </p>
                <p
                  class="font-moderat_Bold text-text14 md:text-text18 text-[#151515] md:pt-8"
                >
                  s/19.00
                </p>
              </div>

              <div class="flex-1">
                <p
                  class="font-moderat_Bold text-text14 md:text-text18 text-[#141718] pt-4 pb-6"
                >
                  Sub Total
                </p>
                <p
                  class="font-moderat_Bold text-text14 md:text-text18 text-[#151515] md:pt-8"
                >
                  s/38.00
                </p>
              </div>
            </div>
          </div>


          <div data-aos="fade-up" data-aos-offset="150" 
            class="flex flex-col md:flex-row pb-8 border-b-[2px] border-[#E8ECEF] gap-5"
          >
            <div class="w-full basis-5/12">
              <p
                class="font-moderat_Bold text-text14 xl:text-text18 text-[#141718] text-left py-4"
              >
                Producto
              </p>

              <div class="flex justify-start md:justify-center items-center gap-5">
                    <div class="h-full w-full flex justify-center basis-1/3 md:basis-1/2 items-center bg-[#F3F3F3] py-8 px-3">
                        <img src="{{ asset('images/img/image_52.png') }}" alt="producto"
                            class="w-[75] h-[48px]" />
                    </div>

                    <div class="flex flex-col gap-2 basis-2/3 md:basis-1/2 md:flex-1 items-start">
                        <h3 class="font-moderat_700 text-text16 xl:text-text18 text-[#151515]">
                            Producto 1
                        </h3>
                        <p class="font-moderat_Regular text-text12 xl:text-text14 text-[#6C7275]">
                            Color: Black
                        </p>
                        <p class="font-moderat_Regular text-text12 xl:text-text14 text-[#6C7275]">
                            SKU: 0908824
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex gap-10 w-full text-center basis-7/12">
              <div class="flex-1">
                <p
                  class="font-moderat_Bold text-text14 md:text-text18 text-[#141718] pt-4 pb-6"
                >
                  Cantidad
                </p>

                <div class="flex justify-center text-[#151515] md:pt-8">
                  <div
                    class="w-8 h-8 flex justify-center items-center flex-1"
                  >
                    <span class="font-moderat_Bold text-text14 md:text-text18"
                      >2</span
                    >
                  </div>
                </div>
              </div>

              <div class="flex-1">
                <p
                  class="font-moderat_Bold text-text14 md:text-text18 text-[#141718] pt-4 pb-6"
                >
                  Precio
                </p>
                <p
                  class="font-moderat_Bold text-text14 md:text-text18 text-[#151515] md:pt-8"
                >
                  s/19.00
                </p>
              </div>

              <div class="flex-1">
                <p
                  class="font-moderat_Bold text-text14 md:text-text18 text-[#141718] pt-4 pb-6"
                >
                  Sub Total
                </p>
                <p
                  class="font-moderat_Bold text-text14 md:text-text18 text-[#151515] md:pt-8"
                >
                  s/38.00
                </p>
              </div>
            </div>
          </div>


          <div data-aos="fade-up" data-aos-offset="150" 
            class="flex flex-col md:flex-row pb-8 border-b-[2px] border-[#E8ECEF] gap-5"
          >
            <div class="w-full basis-5/12">
              <p
                class="font-moderat_Bold text-text14 xl:text-text18 text-[#141718] text-left py-4"
              >
                Producto
              </p>

              <div class="flex justify-start md:justify-center items-center gap-5">
                    <div class="h-full w-full flex justify-center basis-1/3 md:basis-1/2 items-center bg-[#F3F3F3] py-8 px-3">
                        <img src="{{ asset('images/img/image_52.png') }}" alt="producto"
                            class="w-[75] h-[48px]" />
                    </div>

                    <div class="flex flex-col gap-2 basis-2/3 md:basis-1/2 md:flex-1 items-start">
                        <h3 class="font-moderat_700 text-text16 xl:text-text18 text-[#151515]">
                            Producto 1
                        </h3>
                        <p class="font-moderat_Regular text-text12 xl:text-text14 text-[#6C7275]">
                            Color: Black
                        </p>
                        <p class="font-moderat_Regular text-text12 xl:text-text14 text-[#6C7275]">
                            SKU: 0908824
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex gap-10 w-full text-center basis-7/12">
              <div class="flex-1">
                <p
                  class="font-moderat_Bold text-text14 md:text-text18 text-[#141718] pt-4 pb-6"
                >
                  Cantidad
                </p>

                <div class="flex justify-center text-[#151515] md:pt-8">
                  <div
                    class="w-8 h-8 flex justify-center items-center flex-1"
                  >
                    <span class="font-moderat_Bold text-text14 md:text-text18"
                      >2</span
                    >
                  </div>
                </div>
              </div>

              <div class="flex-1">
                <p
                  class="font-moderat_Bold text-text14 md:text-text18 text-[#141718] pt-4 pb-6"
                >
                  Precio
                </p>
                <p
                  class="font-moderat_Bold text-text14 md:text-text18 text-[#151515] md:pt-8"
                >
                  s/19.00
                </p>
              </div>

              <div class="flex-1">
                <p
                  class="font-moderat_Bold text-text14 md:text-text18 text-[#141718] pt-4 pb-6"
                >
                  Sub Total
                </p>
                <p
                  class="font-moderat_Bold text-text14 md:text-text18 text-[#151515] md:pt-8"
                >
                  s/38.00
                </p>
              </div>
            </div>
          </div>

        <div class="flex flex-col gap-5 pt-8 pb-5 md:pb-10">
          <div data-aos="fade-up" data-aos-offset="150">
            <a
              href="catalogo.html"
              class="text-white bg-[#0051FF] w-full py-3 cursor-pointer font-moderat_Bold text-text18 md:text-text20 inline-block text-center"
              >Seguir comprando</a
            >
          </div>

          <div data-aos="fade-up" data-aos-offset="150">
            <a
              href="{{route('historial')}}"
              class="text-white bg-[#001232] w-full py-3 cursor-pointer font-moderat_Bold text-text18 md:text-text20 inline-block text-center border-[1.5px] border-[#151515]"
              >Historial de compras</a
            >
          </div>
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
