<header class="{{-- z-[600] relative --}}">

    <div class="bg-[#0051FF] py-5">
        <div class="flex justify-between items-center w-11/12 mx-auto text-white">
            <div>
                <p class="text-text12 md:text-text14 font-moderat_500">Grandes dispositivos para grandes decisiones</p>
            </div>
            <div class="flex justify-center items-center gap-2">
                <div class="flex justify-center items-center gap-2">
                  <a href="#"><img src="{{ asset('images/svg/image_1.svg') }}" alt="facebook" class="cursor-pointer"></a>
                    <a href="#"><img src="{{ asset('images/svg/image_2.svg') }}" alt="instagram" class="cursor-pointer"></a>
                    
                </div>
                <p class="font-moderat_500 text-text12 md:text-text14">MIC&JC</p>
            </div>
        </div>
    </div>

    <div class="w-11/12 mx-auto py-5">
        <div class="grid grid-rows-3 grid-cols-2 xl:grid-cols-12 xl:grid-rows-1">

            <div class="flex justify-start items-center row-span-1 col-span-1 xl:row-span-1 xl:col-span-1 2xl:col-span-1 order-1 xl:order-1">
                <a href="{{route('index')}}"><img src="{{asset('images/svg/image_3.svg')}}" alt="MICJC"></a>
            </div>

            <div class="flex justify-between lg:justify-center lg:gap-10 items-center row-span-1 col-span-2 xl:row-span-1 xl:col-span-7 2xl:col-span-8  order-3 xl:order-2 text-text16 md:text-text20 font-moderat_500">
                <a href="#" class="enlaces__after text-[#0051FF]">Inicio</a>
                <a href="{{route('producto')}}" class="text-[#000000]">Productos</a>
                <a href="{{route('blog')}}" class="text-[#000000]">Blog</a>
                <a href="{{route('contacto')}}" class="text-[#000000]">Contáctanos</a>
            </div>

            <div class="flex justify-center items-center row-span-1 col-span-2 xl:row-span-1 xl:col-span-2 2xl:col-span-2 order-4 xl:order-3">
                <form action="" class="w-full">
                    <div class="relative w-full border-2 border-[#CCCCCC] rounded-lg flex justify-center items-center">
                        <input type="text" placeholder="Buscar producto" class="placeholder:text-[#CCCCCC] text-center w-full border-none outline-none focus:outline-none pl-10 pr-4 py-2 rounded-lg" />
                        <div class="absolute inset-y-0 left-[25%] sm:left-[35%] lg:left-0 flex items-center pl-3">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z" stroke="#CCCCCC" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M21.0004 21.0004L16.6504 16.6504" stroke="#CCCCCC" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>                               
                        </div>
                    </div>
                </form>
            </div>

            <div class="flex justify-end items-center gap-5 row-span-1 col-span-1 xl:row-span-1 xl:col-span-2 2xl:col-span-1 order-2 xl:order-4">
              <a href="{{route('miCuenta')}}"><img src="{{asset('images/svg/image_4.svg')}}" alt="user"></a>
                <img src="{{asset('images/svg/image_5.svg')}}" alt="bag" class="bag__carrito cursor-pointer">
                <div class="flex justify-center items-center font-moderat_700 relative ">
                    <img src="{{asset('images/svg/image_10.svg')}}" alt="bag">
                    <span class="text-white absolute">2</span>
                </div>
            </div>
        </div>
    </div>

    <div class="flex justify-end w-11/12 mx-auto z-10">
        <div class="fixed bottom-6 sm:bottom-[2rem] lg:bottom-[4rem] z-20">
            <a target="_blank" href="https://api.whatsapp.com/send?phone=9999&text='texto'" rel="noopener">
                <img src="{{ asset('images/svg/image_11.svg') }}" alt="whatsapp" class="w-20 h-20 md:w-full md:h-full">
            </a>
        </div>
    </div>

    {{-- Modal carrito --}}
    <div class="modal" id="jsModalCarrito">
        <div class="modal__container">
          {{-- <button
            type="button"
            class="modal__close fa-solid fa-xmark jsModalClose"
          ></button> --}}

          <div class="modal__info flex flex-col justify-between">

              <div class="modal__header">
                <p class="font-moderat_Medium text-text28">Carrito</p>
              </div>
  
              <div class="modal__body">
                <div class="modal__list">
  
                  <div class="flex justify-between border-b-[1px] pb-5">
                    <div class="flex justify-center items-center gap-5">
                      <div class="rounded-md p-4">
                        <img
                          src="{{asset('images/img/image_57.png')}}"
                          alt="producto"
                          class="w-24"
                        />
                      </div>
                      <div class="flex flex-col gap-3 py-2">
                        <h3
                          class="font-moderat_Bold text-text14 xl:text-text18 text-[#151515]"
                        >
                          Producto 1
                        </h3>
                        <p
                          class="font-moderat_Regular text-[12px] xl:text-text16 text-[#6C7275]"
                        >
                          Color: Black
                        </p>
                        <div
                          class="flex justify-center text-[#151515]"
                        >
                          <div>
                              <input type="number"
                                  class="border-2 rounded-lg w-16 h-8 text-text16 font-moderat_Regular"
                                  value="01" step="1">
                          </div>
  
                        </div>
                      </div>
                    </div>
                    <div
                      class="flex flex-col justify-start py-2 gap-5 items-center pr-2"
                    >
                      <p
                        class="font-moderat_Bold text-[14px] xl:text-text18 text-[#151515]"
                      >
                        s/ 19.19
                      </p>
                      <div>
                        <a href="#">
                          <img
                            src="{{asset('images/svg/image_54.svg')}}"
                            alt="close"
                          />
                        </a>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            
            
            <div class="modal__footer">
              <div class="flex flex-col gap-2 pt-36">
                <div
                  class="text-[#141718] flex justify-between items-center"
                >
                  <p class="font-moderat_Regular text-[16px]">Subtotal</p>
                  <p class="font-moderat_Bold text-[16px]">s/ 99.00</p>
                </div>

                <div
                  class="text-[#141718] font-moderat_Medium text-[20px] flex justify-between items-center"
                >
                  <p>Total</p>
                  <p>s/ 234.00</p>
                </div>
                <div>
                  <a
                    href="{{route('carrito')}}"
                    class="font-moderat_Bold text-base bg-[#0051FF] py-3 px-5 text-white cursor-pointer w-full inline-block text-center"
                  >
                    Checkout
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div> 

      
</header>
