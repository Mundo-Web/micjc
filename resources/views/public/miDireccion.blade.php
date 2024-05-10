@extends('components.public.matrix')

@section('css_importados')
    {{--     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css"> --}}

    <style>
        .input-box::before,
        .input-box-provincia::before,
        .input-box-distrito::before {
            background-image: url({{ asset('images/svg/image_31.svg') }});
        }
    </style>

@stop


@section('content')
    <main>

        {{--  --}}
        <section class="mb-0 md:mt-8 md:mb-10 hidden md:block">
            <div class="flex flex-col w-11/12 mx-auto" data-aos="fade-up" data-aos-offset="150">
                <div class="flex flex-col gap-10 my-5">
                    <div class="flex gap-1 text-text14 md:text-text18">
                        <a href="index.html" class="font-moderat_500 text-[#565656]">Home</a>
                        <span>></span>
                        <a href="#" class="font-moderat_700 text-[#111111]">Mi cuenta</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="mb-8 md:my-16">
            <div class="flex flex-col  gap-8 md:flex-row md:gap-28 w-full md:w-11/12 mx-auto">
                <div class="bg-white py-5 md:py-0" data-aos="fade-up" data-aos-offset="150">
                    <div class="w-11/12 md:w-full mx-auto">
                        <div class="basis-5/12 flex flex-col gap-5">
                            <div class="flex flex-col gap-5">
                                <div class="rounded-full w-24 h-24 bg-[#E9EDEF] flex justify-center items-center relative">
                                    <p class="text-[#111111] text-text32 md:text-text36 font-moderat_700">
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

                                    <p class="font-moderat_Medium text-text12 md:text-text16 text-[#8896A8]">
                                        ademirneyra@gmail.com
                                    </p>
                                </div>
                            </div>
                            <div class="flex flex-col gap-4">
                                <div
                                    class="text-textBlack py-3 px-5 rounded-2xl cursor-pointer border-none md:w-80 flex justify-between items-center w-full">
                                    <a href="{{route('miCuenta')}}"
                                        class="font-moderat_Bold text-text16 md:text-text18 text-[#565656]">
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
                                    <a href="{{route('miDireccion')}}" class="font-moderat_Bold text-text16 md:text-text18 text-white">
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
                                    <a href="{{route('historial')}}"
                                        class="font-moderat_Bold text-text16 md:text-text18 text-[#565656]">
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
                                    class="bg-[#F3F5F7] text-[#151515] font-moderat_Bold text-text16 md:text-text18 py-3 px-4 flex justify-between items-center md:w-80 mt-0 md:mt-[200px] w-full">
                                    <span>Cerrar Sesión</span>
                                    <img src="{{ asset('images/svg/image_33.svg') }}" alt="cerrar" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="basis-7/12 font-poppins w-11/12 md:w-full mx-auto" data-aos="fade-up" data-aos-offset="150">
                    <h2 class="text-[#151515] font-moderat_700 text-text20 xl:text-text22 mb-5">
                        Mis direcciones
                    </h2>
                    <div class="flex flex-col gap-5 lg:flex-row lg:gap-10">
                        <div class="basis-1/2 border-2 border-[#6C7275] rounded-lg p-2 flex flex-col gap-1"
                            data-aos="fade-up" data-aos-offset="150">
                            <div class="flex justify-between items-center">
                                <p class="font-moderat_Bold text-text16 md:text-text20 text-[#000000]">
                                    Dirección de Envío
                                </p>

                                {{-- apertura del modal --}}
                                <button {{--  id="open-modal-btn" --}} class="px-4 flex gap-2 items-center open-modal-btn">
                                    <img src="{{ asset('images/svg/image_34.svg') }}" alt="editar" />
                                    <span class="font-moderat_Bold text-text16 md:text-text18 text-[#0051FF]">
                                        Editar
                                    </span>
                                </button>
                                {{-- ------- --}}


                            </div>

                            <p class="font-moderat_Regular text-text14 xl:text-text16 text-[#111111]">
                                Calle. Las Brisas 212
                            </p>
                            <p class="font-moderat_Regular text-text14 xl:text-text16 text-[#111111]">
                                La Victoria
                            </p>
                            <p class="font-moderat_Regular text-text14 xl:text-text16 text-[#111111]">
                                Lima - Perú
                            </p>
                        </div>

                        <div class="basis-1/2 border-2 border-[#6C7275] rounded-lg p-2 flex flex-col gap-1"
                            data-aos="fade-up" data-aos-offset="150">
                            <div class="flex justify-between items-center">
                                <p class="font-moderat_Bold text-text16 md:text-text20 text-[#000000]">
                                    Dirección de Envío
                                </p>
                                {{-- apertura del modal --}}
                                <button {{-- id="open-modal-btn" --}} class="px-4 flex gap-2 items-center open-modal-btn">
                                    <img src="{{ asset('images/svg/image_34.svg') }}" alt="editar" />
                                    <span class="font-moderat_Bold text-text16 md:text-text18 text-[#0051FF]">
                                        Editar
                                    </span>
                                </button>
                                {{-- ------- --}}
                            </div>

                            <p class="font-moderat_Regular text-text14 md:text-text16 text-[#111111]">
                                Calle. Las Brisas 212
                            </p>
                            <p class="font-moderat_Regular text-text14 md:text-text16 text-[#111111]">
                                La Victoria
                            </p>
                            <p class="font-moderat_Regular text-text14 md:text-text16 text-[#111111]">
                                Lima - Perú
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-[#F3F3F3] w-11/12 mx-auto">

            <div
                class="flex flex-col md:flex-row justify-between items-center gap-5 pt-5 md:pt-10 pl-5 md:pl-10 pr-5 md:pr-10 mb-20">
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

        <div>

            <div class="fixed z-[500] inset-0 hidden  modal-wrapper">
                <div
                    class="flex items-center justify-center  min-h-screen bg-opacity-75 transition-all backdrop-filter backdrop-blur-sm px-5 md:px-0">

                    <div
                        class="flex flex-col items-center  contenedor  bg-white p-5 lg:py-10 lg:px-5 w-auto  mx-auto shadow-xl rounded-xl">
                        <div class="">
                            <div class="flex justify-end items-end w-full pr-5 py-5">
                                <button class="close-modal-btn">
                                    <img src="{{ asset('images/svg/image_51.svg') }}" alt="close">
                                </button>
                            </div>

                            <div
                                class="flex flex-col gap-5 overflow-y-scroll h-[400px] lg:h-[500px] max-w-[600px] scroll-direccion px-5">
                                <h2 class="font-moderat_700 text-text20 xl:text-text22 text-[#151515]">
                                    Dirección de envío
                                </h2>
                                <div class="flex flex-col gap-5">
                                    <div class="flex flex-col gap-5">
                                        <div class="flex flex-col gap-2 z-[45]" data-aos="fade-up" data-aos-offset="150">
                                            <label
                                                class="font-moderat_Medium text-text12 md:text-text14  text-[#565656]">Departamento</label>

                                            <div>
                                                <!-- combo -->
                                                <div class="dropdown w-full">
                                                    <div
                                                        class="input-box focus:outline-none font-moderat_Regular text-text14 md:text-text18 mr-20 text-[#6C7275] border-[1.5px] border-gray-200  py-6 px-4">
                                                        Selecciona un departamento
                                                    </div>
                                                    <div class="list overflow-y-scroll h-[200px] scroll-departamento">
                                                        <div class="w-full">
                                                            <!-- Ejemplo de explicacion para la obtencion del combo -->
                                                            <input type="radio" name="drop1" id="id1"
                                                                depa-atributo="1" class="radio Arequipa" />

                                                            <label for="id1"
                                                                class="font-moderat_Regular text-text16 md:text-text18 md:duration-100 hover:text-white departamento">
                                                                Arequipa
                                                            </label>
                                                        </div>

                                                        <div class="w-full">
                                                            <input type="radio" name="drop1" id="id2"
                                                                depa-atributo="2" class="radio Lima" />
                                                            <label for="id2"
                                                                class="font-moderat_Regular text-text16 md:text-text18 md:duration-100 hover:text-white departamento">
                                                                Lima
                                                            </label>
                                                        </div>

                                                        <div class="w-full">
                                                            <input type="radio" name="drop1" id="id3"
                                                                depa-atributo="3" class="radio Huancavelica" />
                                                            <label for="id3"
                                                                class="font-moderat_Regular text-text16 md:text-text18 md:duration-100 hover:text-white departamento">
                                                                Huancavelica
                                                            </label>
                                                        </div>

                                                        <div class="w-full">
                                                            <input type="radio" name="drop1" id="id4"
                                                                depa-atributo="4" class="radio Trujillo" />
                                                            <label for="id4"
                                                                class="font-moderat_Regular text-text16 md:text-text18 md:duration-100 hover:text-white departamento">
                                                                Trujillo
                                                            </label>
                                                        </div>

                                                        <div class="w-full">
                                                            <input type="radio" name="drop1" id="id5"
                                                                depa-atributo="5" class="radio Huanuco" />
                                                            <label for="id5"
                                                                class="font-moderat_Regular text-text16 md:text-text18 md:duration-100 hover:text-white departamento">
                                                                Huanuco
                                                            </label>
                                                        </div>

                                                        <div class="w-full">
                                                            <input type="radio" name="drop1" id="id6"
                                                                depa-atributo="6" class="radio Tumbes" />
                                                            <label for="id6"
                                                                class="font-moderat_Regular text-text16 md:text-text18 md:duration-100 hover:text-white departamento">
                                                                Tumbes
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="flex flex-col gap-2 z-[40]" data-aos="fade-up" data-aos-offset="150">
                                            <label class="font-moderat_Medium text-text12 md:text-text14 text-[#565656]">
                                                Provincia
                                            </label>

                                            <div>
                                                <!-- combo -->
                                                <div class="dropdown-provincia w-full">
                                                    <div
                                                        class="input-box-provincia focus:outline-none font-moderat_Regular text-text14 md:text-text18 mr-20 text-[#6C7275] border-[1.5px] border-gray-200 py-6 px-4">
                                                        Selecciona una provincia
                                                    </div>
                                                    <div
                                                        class="list-provincia overflow-y-scroll h-[200px] scroll-provincia">
                                                        <div class="w-full">
                                                            <input type="radio" name="drop2" id="id7"
                                                                class="radio-provincia" />

                                                            <label for="id7"
                                                                class="font-moderat_Regular text-text16 md:text-text18 md:duration-100 hover:text-white provincia">
                                                                Provincia 1
                                                            </label>
                                                        </div>

                                                        <div class="w-full">
                                                            <input type="radio" name="drop2" id="id8"
                                                                class="radio-provincia" />

                                                            <label for="id8"
                                                                class="font-moderat_Regular text-text16 md:text-text18 md:duration-100 hover:text-white provincia">
                                                                Provincia 2
                                                            </label>
                                                        </div>

                                                        <div class="w-full">
                                                            <input type="radio" name="drop2" id="id9"
                                                                class="radio-provincia" />

                                                            <label for="id9"
                                                                class="font-moderat_Regular text-text16 md:text-text18 md:duration-100 hover:text-white provincia">
                                                                Provincia 3
                                                            </label>
                                                        </div>

                                                        <div class="w-full">
                                                            <input type="radio" name="drop2" id="id10"
                                                                class="radio-provincia" />

                                                            <label for="id10"
                                                                class="font-moderat_Regular text-text16 md:text-text18 md:duration-100 hover:text-white provincia">
                                                                Provincia 4
                                                            </label>
                                                        </div>

                                                        <div class="w-full">
                                                            <input type="radio" name="drop2" id="id11"
                                                                class="radio-provincia" />

                                                            <label for="id11"
                                                                class="font-moderat_Regular text-text16 md:text-text18 md:duration-100 hover:text-white provincia">
                                                                Provincia 5
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="flex flex-col gap-2 z-[30]" data-aos="fade-up" data-aos-offset="150">
                                            <label class="font-moderat_Medium text-text12 md:text-text14 text-[#565656]">
                                                Distrito
                                            </label>

                                            <div>
                                                <!-- combo -->
                                                <div class="dropdown-distrito w-full">
                                                    <div
                                                        class="input-box-distrito focus:outline-none font-moderat_Regular text-text14 md:text-text18 mr-20 text-[#6C7275] border-[1.5px] border-gray-200 py-6 px-4">
                                                        Selecciona un distrito
                                                    </div>
                                                    <div class="list-distrito overflow-y-scroll h-[200px] scroll-distrito">
                                                        <div class="w-full">
                                                            <input type="radio" name="drop3" id="id12"
                                                                class="radio-distrito" />

                                                            <label for="id12"
                                                                class="font-moderat_Regular text-text16 md:text-text18 md:duration-100 hover:text-white distrito">
                                                                Distrito 1
                                                            </label>
                                                        </div>

                                                        <div class="w-full">
                                                            <input type="radio" name="drop3" id="id13"
                                                                class="radio-distrito" />

                                                            <label for="id13"
                                                                class="font-moderat_Regular text-text16 md:text-text18 md:duration-100 hover:text-white distrito">
                                                                Distrito 2
                                                            </label>
                                                        </div>

                                                        <div class="w-full">
                                                            <input type="radio" name="drop3" id="id14"
                                                                class="radio-distrito" />

                                                            <label for="id14"
                                                                class="font-moderat_Regular text-text16 md:text-text18 md:duration-100 hover:text-white distrito">
                                                                Distrito 3
                                                            </label>
                                                        </div>

                                                        <div class="w-full">
                                                            <input type="radio" name="drop3" id="id15"
                                                                class="radio-distrito" />

                                                            <label for="id15"
                                                                class="font-moderat_Regular text-text16 md:text-text18 md:duration-100 hover:text-white distrito">
                                                                Distrito 4
                                                            </label>
                                                        </div>

                                                        <div class="w-full">
                                                            <input type="radio" name="drop3" id="id16"
                                                                class="radio-distrito" />

                                                            <label for="id16"
                                                                class="font-moderat_Regular text-text16 md:text-text18 md:duration-100 hover:text-white distrito">
                                                                Distrito 5
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="flex flex-col gap-2" data-aos="fade-up" data-aos-offset="150">
                                            <label for="nombre_calle"
                                                class="font-moderat_Medium text-text12 md:text-text14  text-[#565656]">Avenida
                                                / Calle /
                                                Jirón</label>

                                            <input id="nombre_calle" type="text"
                                                placeholder="Ingresa el nombre de la calle"
                                                class="w-full py-3 px-4 focus:outline-none placeholder-gray-400 font-moderat_Regular text-text16 md:text-text18 border-[1px] border-gray-200 text-[#6C7275] focus:ring-0  focus:border-black" />
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex flex-col md:flex-row gap-5">
                                            <div class="basis-1/2 flex flex-col gap-2">
                                                <label for="numero_calle"
                                                    class="font-moderat_Medium text-text12 md:text-text14  text-[#565656]">Número
                                                </label>

                                                <input id="numero_calle" type="text"
                                                    placeholder="Ingresa el número de la calle"
                                                    class="w-full py-3 px-4 focus:outline-none placeholder-gray-400 font-moderat_Regular text-text16 md:text-text18 border-[1px] border-gray-200 text-[#6C7275] focus:ring-0  focus:border-black" />
                                            </div>

                                            <div class="basis-1/2 flex flex-col gap-2">
                                                <label for="direccion"
                                                    class="font-moderat_Medium text-text12 md:text-text14  text-[#565656]">Dpto./
                                                    Interior/ Piso/ Lote/ Bloque
                                                    (opcional)</label>

                                                <input id="direccion" type="text" placeholder="Ejem. Casa 3, Dpto 101"
                                                    class="w-full py-3 px-4 focus:outline-none placeholder-gray-400 font-moderat_Regular text-text16 md:text-text18 border-[1px] border-gray-200 text-[#6C7275] focus:ring-0  focus:border-black" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>


                </div>
            </div>
    </main>



    {{-- modal editar --}}











@section('scripts_importados')
    <script>
        const body = document.body;
        const openModalBtn = document.querySelectorAll(".open-modal-btn");
        const closeModalBtn = document.querySelector(".close-modal-btn");
        const modalWrapper = document.querySelector(".modal-wrapper");

        openModalBtn.forEach(openModal => {
            openModal.addEventListener("click", (e) => {
                /* body.classList.add('overflow-hidden'); */
                modalWrapper.classList.remove('hidden');
            })
        });

        closeModalBtn.addEventListener("click", (e) => {
            /* body.classList.remove('overflow-hidden'); */
            modalWrapper.classList.add('hidden');
        })
    </script>

    <script>
        /* departamento */
        var input = document.querySelector(".input-box");

        input.onclick = function() {
            console.log("click");
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
            this.classList.toggle("open-provincia");
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

        var inputDistrito = document.querySelector(".input-box-distrito");
        inputDistrito.onclick = function() {
            this.classList.toggle("open-distrito");
            let listDistrito = this.nextElementSibling;
            if (listDistrito.style.maxHeight) {
                listDistrito.style.maxHeight = null;
                listDistrito.style.boxShadow = null;
            } else {
                listDistrito.style.maxHeight = listDistrito.scrollHeight + "px";
                listDistrito.style.boxShadow =
                    "0 1px 2px 0 rgba(0, 0, 0, 0.15),0 1px 3px 1px rgba(0, 0, 0, 0.1)";
            }
        };

        var radDistrito = document.querySelectorAll(".radio-distrito");
        radDistrito.forEach((item) => {
            item.addEventListener("change", () => {
                inputDistrito.innerHTML = item.nextElementSibling.innerHTML;
                inputDistrito.click();
            });
        });
    </script>
@stop

@stop
