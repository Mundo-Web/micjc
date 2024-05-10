@extends('components.public.matrix')

@section('css_importados')
    {{--     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css"> --}}

    <style>

    </style>

@stop


@section('content')
    <main>

        {{--  --}}
        <section class="mt-12 mb-0 md:mt-8 md:mb-10">
            <div class="flex flex-col w-11/12 mx-auto">
                <div class="flex flex-col gap-10 my-5">
                    <div class="flex gap-1 text-text14 xl:text-text18">
                        <a href="index.html" class="font-moderat_500 text-[#565656]">Home</a>
                        <span>></span>
                        <a href="#" class="font-moderat_700 text-[#111111]">Mi cuenta</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="my-8 md:my-16">
            <div class="flex flex-col gap-12 md:flex-row md:gap-28 w-full md:w-11/12 mx-auto">
                <div class="bg-white py-5 md:py-0">
                    <div class="w-11/12 md:w-full mx-auto">
                        <div class="basis-5/12 flex flex-col gap-5">
                            <div class="flex flex-col gap-5">
                                <div class="rounded-full w-24 h-24 bg-[#E9EDEF] flex justify-center items-center relative">
                                    <p class="text-[#111111] text-text32 xl:text-text36 font-moderat_700">
                                        FB
                                    </p>
                                    <label for="upload_image"
                                        class="bg-[#0051FF] rounded-full w-7 h-7 flex justify-center items-center absolute bottom-0 right-0 cursor-pointer">
                                        <img src="{{ asset('images/svg/image_32.svg') }}" alt="upload photo" />
                                    </label>
                                    <input type="file" id="upload_image" name="imagen" accept="image/*"
                                        class="hidden" />
                                </div>

                                <div class="text-[#111111]">
                                    <p class="font-moderat_700 text-text24 xl:text-text28">
                                        Ademir Neyra
                                    </p>

                                    <p class="font-moderat_500 text-text12 xl:text-text16 text-[#8896A8]">
                                        ademirneyra@gmail.com
                                    </p>
                                </div>
                            </div>
                            <div class="flex flex-col gap-4">
                                <div
                                    class="text-textBlack py-3 px-5 rounded-2xl cursor-pointer border-none md:w-80 flex justify-between items-center w-full">
                                    <a href="historial.html"
                                        class="font-moderat_700 text-text16 xl:text-text18 text-[#565656]">
                                        Mi cuenta
                                    </a>
                                    <span>
                                        <svg width="20" height="20" viewBox="0 0 14 13" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M0.332031 6.50048C0.332031 2.93378 3.3187 0.0390626 6.9987 0.0390628C10.6787 0.039063 13.6654 2.93378 13.6654 6.50048C13.6654 10.0672 10.6787 12.9619 6.9987 12.9619C3.3187 12.9619 0.332031 10.0672 0.332031 6.50048ZM8.76536 6.27433L6.90536 4.47159C6.69203 4.26483 6.33203 4.40698 6.33203 4.69774L6.33203 8.30967C6.33203 8.60044 6.69203 8.74259 6.8987 8.53582L8.7587 6.73309C8.89203 6.60386 8.89203 6.39709 8.76536 6.27433Z"
                                                fill="#E9EDEF" />
                                        </svg>
                                    </span>
                                </div>
                                <div
                                    class="text-textWhite bg-[#0051FF] py-3 px-5 cursor-pointer border-none md:w-80 w-full flex justify-between items-center">
                                    <a href="miCuenta.html" class="font-moderat_700 text-text16 xl:text-text18 text-white">
                                        Dirección
                                    </a>
                                    <span>
                                        <svg width="20" height="20" viewBox="0 0 14 13" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M0.332031 6.50048C0.332031 2.93378 3.3187 0.0390626 6.9987 0.0390628C10.6787 0.039063 13.6654 2.93378 13.6654 6.50048C13.6654 10.0672 10.6787 12.9619 6.9987 12.9619C3.3187 12.9619 0.332031 10.0672 0.332031 6.50048ZM8.76536 6.27433L6.90536 4.47159C6.69203 4.26483 6.33203 4.40698 6.33203 4.69774L6.33203 8.30967C6.33203 8.60044 6.69203 8.74259 6.8987 8.53582L8.7587 6.73309C8.89203 6.60386 8.89203 6.39709 8.76536 6.27433Z"
                                                fill="#FFFFFF" />
                                        </svg>
                                    </span>
                                </div>
                                <div
                                    class="text-textBlack py-3 px-5 rounded-2xl cursor-pointer border-none md:w-80 flex justify-between items-center w-full">
                                    <a href="historial.html"
                                        class="font-moderat_700 text-text16 xl:text-text18 text-[#565656]">
                                        Historial de pedidos
                                    </a>
                                    <span>
                                        <svg width="20" height="20" viewBox="0 0 14 13" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M0.332031 6.50048C0.332031 2.93378 3.3187 0.0390626 6.9987 0.0390628C10.6787 0.039063 13.6654 2.93378 13.6654 6.50048C13.6654 10.0672 10.6787 12.9619 6.9987 12.9619C3.3187 12.9619 0.332031 10.0672 0.332031 6.50048ZM8.76536 6.27433L6.90536 4.47159C6.69203 4.26483 6.33203 4.40698 6.33203 4.69774L6.33203 8.30967C6.33203 8.60044 6.69203 8.74259 6.8987 8.53582L8.7587 6.73309C8.89203 6.60386 8.89203 6.39709 8.76536 6.27433Z"
                                                fill="#E9EDEF" />
                                        </svg>
                                    </span>
                                </div>

                                <a href="#"
                                    class="bg-[#F3F5F7] text-[#151515] font-moderat_700 text-text16 xl:text-text18 py-3 px-4 flex justify-between items-center md:w-80 mt-0 md:mt-[200px] w-full">
                                    <span>Cerrar Sesión</span>
                                    <img src="{{ asset('images/svg/image_33.svg') }}" alt="cerrar" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="basis-7/12 font-poppins w-11/12 md:w-full mx-auto">
                    <h2 class="text-[#151515] font-moderat_700 text-text20 xl:text-text22 mb-5">
                        Mis direcciones
                    </h2>
                    <div class="flex flex-col gap-5 lg:flex-row lg:gap-10">
                        <div class="basis-1/2 border-2 border-[#6C7275] rounded-lg p-2 flex flex-col gap-1">
                            <div class="flex justify-between items-center">
                                <p class="font-boldDisplay text-text16 xl:text-text20 text-[#000000]">
                                    Dirección de Envío
                                </p>

                                {{-- apertura del modal --}}
                                <label for="tw-modal"
                                    class="flex justify-between items-center gap-1 cursor-pointer rounded text-white ">
                                    <img src="{{ asset('images/svg/image_34.svg') }}" alt="editar" />
                                    <span class="font-moderat_700 text-text16 xl:text-text18 text-[#0051FF]">
                                        Editar
                                    </span>
                                </label>
                                {{-- ------- --}}


                            </div>

                            <p class="font-moderat_500 text-text14 xl:text-text16 text-[#111111]">
                                Calle. Las Brisas 212
                            </p>
                            <p class="font-moderat_400 text-text14 xl:text-text16 text-[#111111]">
                                La Victoria
                            </p>
                            <p class="font-moderat_400 text-text14 xl:text-text16 text-[#111111]">
                                Lima - Perú
                            </p>
                        </div>

                        <div class="basis-1/2 border-2 border-[#6C7275] rounded-lg p-2 flex flex-col gap-1">
                            <div class="flex justify-between items-center">
                                <p class="font-boldDisplay text-text16 xl:text-text20 text-[#000000]">
                                    Dirección de Envío
                                </p>
                                {{-- apertura del modal --}}
                                <label for="tw-modal"
                                    class="flex justify-between items-center gap-1 cursor-pointer rounded text-white ">
                                    <img src="{{ asset('images/svg/image_34.svg') }}" alt="editar" />
                                    <span class="font-moderat_700 text-text16 xl:text-text18 text-[#0051FF]">
                                        Editar
                                    </span>
                                </label>
                                {{-- ------- --}}
                            </div>

                            <p class="font-moderat_400 text-text14 xl:text-text16 text-[#111111]">
                                Calle. Las Brisas 212
                            </p>
                            <p class="font-moderat_400 text-text14 xl:text-text16 text-[#111111]">
                                La Victoria
                            </p>
                            <p class="font-moderat_400 text-text14 xl:text-text16 text-[#111111]">
                                Lima - Perú
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>



    {{-- modal editar --}}

    <div class="relative flex z-[500] flex-col items-center justify-center overflow-hidden bg-gray-50">
        <div>
            <input type="checkbox" id="tw-modal" class="peer fixed appearance-none opacity-0">
            <label for="tw-modal"
                class="pointer-events-none invisible fixed inset-0 flex cursor-pointer items-center justify-center overflow-hidden overscroll-contain bg-slate-700/30 opacity-0 transition-all duration-200 ease-in-out peer-checked:pointer-events-auto peer-checked:visible peer-checked:opacity-100 {{-- peer-checked:[&>*]:translate-y-0  --}}{{-- peer-checked::[&>*]:scale-100 --}}">

                <label
                    class="max-h-[calc(100vh-5em)] h-fit max-w-lg {{-- scale-90 --}} overflow-y-auto overscroll-y-contain rounded-md bg-white p-6 text-black shadow-2xl transition">

                    <div class="w-full flex flex-col justify-center h-[500px] md:h-[700px]">
                        <div class="flex flex-col gap-5 w-full">
                            <div class="flex justify-between items-center w-full">
                                <h2 class="font-boldDisplay text-text20 xl:text-text24 text-[#151515]">
                                    Dirección de envío
                                </h2>

                                <label for="tw-modal" class="peer-checked:visible cursor-pointer">
                                    <img src="{{ asset('images/svg/image_35.svg') }}" alt="close" />
                                </label>
                            </div>

                            <div class="overflow-y-scroll h-[400px] md:h-auto md:overflow-auto flex flex-col gap-10">
                                <div class="flex flex-col gap-5">
                                    <div class="flex flex-col gap-5">
                                        <div class="flex flex-col gap-2">
                                            <p
                                                class="font-mediumDisplay text-text12 xl:text-text16 text-[#6C7275]">Departamento
                                              </p>
                                            <div>
                                                <!-- combo -->
                                                <div class="dropdown w-full">
                                                  <label
                                                      class="input-box focus:outline-none font-regularDisplay text-text16 xl:text-text20 mr-20 text-[#6C7275] border-[1.5px] border-gray-200  py-6 px-4">
                                                      Selecciona un departamento
                                                  </label>
                                                  <div class="list overflow-y-scroll h-[200px] scroll-departamento">
                                                      <div class="w-full">
                                                          <!-- Ejemplo de explicacion para la obtencion del combo -->
                                                          <input type="radio" name="drop1" id="id1"
                                                              depa-atributo="1" class="radio Arequipa" />

                                                          <label for="id1"
                                                              class="font-regularDisplay text-text18 xl:text-text22 hover:font-bold md:duration-100 hover:text-white departamento">
                                                              Arequipa
                                                          </label>
                                                      </div>

                                                      <div class="w-full">
                                                                <input type="radio" name="drop1" id="id2"
                                                                    depa-atributo="2" class="radio Lima" />
                                                                <label for="id2"
                                                                    class="font-regularDisplay text-text18 xl:text-text22 hover:font-bold md:duration-100 hover:text-white departamento">
                                                                    Lima
                                                                </label>
                                                            </div>

                            
                                                  </div>
                                              </div>
                                            </div>
                                        </div>


                                        <div class="flex flex-col gap-2 z-[40]">
                                          <p class="font-moderat_500 text-text12  text-[#565656]">
                                              Provincia
                                          </p>

                                          <div>
                                              <!-- combo -->
                                              <div class="dropdown-provincia w-full">
                                                  <div
                                                      class="input-box-provincia focus:outline-none font-regularDisplay text-text16 xl:text-text20 mr-20 text-[#6C7275] border-[1.5px] border-gray-200 py-6 px-4">
                                                      Selecciona una provincia
                                                  </div>
                                                  <div
                                                      class="list-provincia overflow-y-scroll h-[200px] scroll-provincia">
                                                      <div class="w-full">
                                                          <input type="radio" name="drop2" id="id7"
                                                              class="radio-provincia" />

                                                          <label for="id7"
                                                              class="font-regularDisplay text-text18 xl:text-text22 hover:font-bold md:duration-100 hover:text-white provincia">
                                                              Provincia 1
                                                          </label>
                                                      </div>

                                                  </div>
                                              </div>
                                          </div>
                                      </div>



                                        <div class="flex flex-col gap-2">
                                            <label for="nombre_calle"
                                                class="font-mediumDisplay text-text12 xl:text-text16 text-[#6C7275]">Avenida
                                                / Calle / Jirón</label>
                                            <input id="nombre_calle" type="text"
                                                placeholder="Ingresa el nombre de la calle"
                                                class="w-full py-3 px-4 focus:outline-none placeholder-gray-400 font-regularDisplay text-text16 xl:text-text20 border-[1.5px] border-gray-200 rounded-xl" />
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex flex-col md:flex-row gap-5">
                                            <div class="basis-1/2 flex flex-col gap-2">
                                                <label for="numero_calle"
                                                    class="font-mediumDisplay text-text12 xl:text-text16 text-[#6C7275]">Número</label>
                                                <input id="numero_calle" type="text"
                                                    placeholder="Ingresa el número de la callle"
                                                    class="w-full py-3 px-4 focus:outline-none placeholder-gray-400 font-regularDisplay text-text16 xl:text-text20 border-[1.5px] border-gray-200 rounded-xl" />
                                            </div>

                                            <div class="basis-1/2 flex flex-col gap-2">
                                                <label for="direccion"
                                                    class="font-mediumDisplay text-text12 xl:text-text16 text-[#6C7275]">Dpto./
                                                    Interior/ Piso/ Lote/ Bloque
                                                    (opcional)</label>
                                                <input id="direccion" type="text" placeholder="Ejem. Casa 3, Dpto 101"
                                                    class="w-full py-3 px-4 focus:outline-none placeholder-gray-400 font-regularDisplay text-text16 xl:text-text20 border-[1.5px] border-gray-200 rounded-xl" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex flex-col md:flex-row gap-5 w-full">
                                    <input type="submit" value="Guardar cambios"
                                        class="text-white bg-bgBlack py-3 rounded-2xl cursor-pointer border-2 font-boldDisplay text-text16 xl:text-text20 text-center border-none inline-block w-full" />

                                    <a href="#"
                                        class="modal__close-mostrar text-[#151515] py-3 rounded-2xl cursor-pointer font-boldDisplay text-text16 xl:text-text20 text-center inline-block border-[1px] border-[#151515] w-full">Cancelar</a>
                                </div>
                            </div>
                        </div>
                    </div>


                </label>

            </label>


        </div>

    </div>





@section('scripts_importados')
    <script>
        /* departamento */
        var input = document.querySelector(".input-box");
        
        input.onclick = function() {
            console.log(input)
       /*      console.log(this) */
            this.classList.toggle("open");
            let list = this.nextElementSibling;
            if (list.style.maxHeight) {
                list.style.maxHeight = null;
                list.style.boxShadow = null;
            } else {
                list.style.maxHeight = list.scrollHeight + "px";
                list.style.boxShadow =
                    "0 1px 2px 0 rgba(0, 0, 0, 0.15),0 1px 3px 1px rgba(0, 0, 0, 0.1)";
            }
        };

        var rad = document.querySelectorAll(".radio");
        rad.forEach((item) => {
            item.addEventListener("change", () => {
                console.log("change");
                input.innerHTML = item.nextElementSibling.innerHTML;
                input.click();
            });
        });

        /* provincia */

        var inputProvincia = document.querySelector(".input-box-provincia");
        
        inputProvincia.onclick = function() {
            console.log(inputProvincia)
        /*     console.log(this) */
            inputProvincia.classList.toggle("open-provincia");
            let listProvincia = this.nextElementSibling;
            if (listProvincia.style.maxHeight) {
                listProvincia.style.maxHeight = null;
                listProvincia.style.boxShadow = null;
            } else {
                listProvincia.style.maxHeight = listProvincia.scrollHeight + "px";
                listProvincia.style.boxShadow =
                    "0 1px 2px 0 rgba(0, 0, 0, 0.15),0 1px 3px 1px rgba(0, 0, 0, 0.1)";
            }
        };

        var radProvincia = document.querySelectorAll(".radio-provincia");
        radProvincia.forEach((item) => {
            item.addEventListener("change", () => {
                inputProvincia.innerHTML = item.nextElementSibling.innerHTML;
                inputProvincia.click();
            });
        });

        /* distrito */

        
       
    </script>

@stop

@stop
