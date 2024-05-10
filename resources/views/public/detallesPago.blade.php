@extends('components.public.matrix')

@section('css_importados')
{{--     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css"> --}}

    <style>
        .input-box::before,
        .input-box-provincia::before, .input-box-distrito::before {
            background-image: url({{ asset('images/svg/image_31.svg') }});
        }
    </style>

@stop


@section('content')

    <main>
        <section class="w-11/12 mx-auto my-12 flex flex-col gap-10">
            <div class="text-text14 xl:text-text16">
                <a href="" class="font-moderat_400 text-[#565656]">
                    Home
                </a>
                <span>/</span>
                <a href="carrito.html" class="font-moderat_700 text-[#141718]">Carrito</a>
            </div>
            <div class="flex lg:gap-44 ">
                <div
                    class="flex flex-col md:flex-row md:justify-between md:items-center lg:basis-7/12 w-full lg:w-auto text-text18 ">
                    <p
                        class="font-moderat_700 text-[#21201E] border-b-[1px] border-[#6C7275] py-4 basis-1/3 h-full text-center">
                        <span class="flex items-center h-full justify-start">Carro de la compra</span>
                    </p>

                    <p
                        class="font-moderat_700 text-[#21201E] border-b-[1px] border-[#6C7275] py-4 basis-1/3 h-full text-center">
                        <span class="flex items-center h-full justify-start md:justify-center">Detalles de pago</span>
                    </p>

                    <p
                        class="font-moderat_700 text-[#C8C8C8] border-b-[1px] border-[#6C7275] py-4 basis-1/3 h-full text-center">
                        <span class="flex items-center h-full justify-start md:justify-end">Orden completada</span>
                    </p>
                </div>
                <div class="lg:basis-5/12"></div>
            </div>

            <div class="flex flex-col lg:flex-row lg:gap-44">
                <div class="basis-7/12 flex flex-col gap-10 ">
                    <div class="flex flex-col gap-5">
                        <div>
                            <div class="flex flex-col gap-8">
                                <div class="flex flex-col gap-5 pb-10 border-b-2 border-[#565656]">
                                    <h2 class="font-moderat_700 text-text20 xl:text-text22 text-[#151515]">
                                        Información del contacto
                                    </h2>

                                    <div class="flex flex-col gap-5">
                                        <div class="flex flex-col md:flex-row gap-5">
                                            <div class="basis-1/2 flex flex-col gap-2">
                                                <label for="nombre"
                                                    class="font-moderat_500 text-text12 text-[#565656]">Nombre</label>
                                                <input id="nombre" type="text" placeholder="Nombre"
                                                    class="w-full py-3 px-4 focus:outline-none placeholder-gray-400 font-moderat_400 text-text16 xl:text-text18 border-[1.5px] border-gray-200 text-[#565656] outline-none " />
                                            </div>

                                            <div class="basis-1/2 flex flex-col gap-2">
                                                <label for="apellido"
                                                    class="font-moderat_500 text-text12 text-[#565656]">Apellido</label>
                                                <input id="apellido" type="text" placeholder="Apellido"
                                                    class="w-full py-3 px-4 focus:outline-none placeholder-gray-400 font-moderat_400 text-text16 xl:text-text18 border-[1.5px] border-gray-200 text-[#565656]" />
                                            </div>
                                        </div>

                                        <div class="flex flex-col gap-2">
                                            <label for="email"
                                                class="font-moderat_500 text-text12  text-[#565656]">E-mail</label>
                                            <input id="email" type="email" placeholder="Correo electrónico"
                                                class="w-full py-3 px-4 focus:outline-none placeholder-gray-400 font-moderat_400 text-text16 xl:text-text18 border-[1.5px] border-gray-200 text-[#565656]" />
                                        </div>

                                        <div class="flex flex-col gap-2">
                                            <label for="celular"
                                                class="font-moderat_500 text-text12  text-[#565656]">Celular</label>
                                            <input id="celular" type="tel" placeholder="(+51) 000 000 000"
                                                class="w-full py-3 px-4 focus:outline-none placeholder-gray-400 font-moderat_400 text-text16 xl:text-text18 border-[1.5px] border-gray-200 text-[#565656]" />
                                        </div>
                                    </div>
                                </div>

                                <div class="flex flex-col gap-5 pb-10 border-b-2 border-[#565656]">
                                    <h2 class="font-moderat_700 text-text20 xl:text-text22 text-[#151515]">
                                        Dirección de envío
                                    </h2>
                                    <div class="flex flex-col gap-5">
                                        <div class="flex flex-col gap-5">
                                            <div class="flex flex-col gap-2 z-[45]">
                                                <label
                                                    class="font-moderat_500 text-text12  text-[#565656]">Departamento</label>

                                                <div>
                                                    <!-- combo -->
                                                    <div class="dropdown w-full">
                                                        <div
                                                            class="input-box focus:outline-none font-regularDisplay text-text16 xl:text-text20 mr-20 text-[#6C7275] border-[1.5px] border-gray-200  py-6 px-4">
                                                            Selecciona un departamento
                                                        </div>
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

                                                            <div class="w-full">
                                                                <input type="radio" name="drop1" id="id3"
                                                                    depa-atributo="3" class="radio Huancavelica" />
                                                                <label for="id3"
                                                                    class="font-regularDisplay text-text18 xl:text-text22 hover:font-bold md:duration-100 hover:text-white departamento">
                                                                    Huancavelica
                                                                </label>
                                                            </div>

                                                            <div class="w-full">
                                                                <input type="radio" name="drop1" id="id4"
                                                                    depa-atributo="4" class="radio Trujillo" />
                                                                <label for="id4"
                                                                    class="font-regularDisplay text-text18 xl:text-text22 hover:font-bold md:duration-100 hover:text-white departamento">
                                                                    Trujillo
                                                                </label>
                                                            </div>

                                                            <div class="w-full">
                                                                <input type="radio" name="drop1" id="id5"
                                                                    depa-atributo="5" class="radio Huanuco" />
                                                                <label for="id5"
                                                                    class="font-regularDisplay text-text18 xl:text-text22 hover:font-bold md:duration-100 hover:text-white departamento">
                                                                    Huanuco
                                                                </label>
                                                            </div>

                                                            <div class="w-full">
                                                                <input type="radio" name="drop1" id="id6"
                                                                    depa-atributo="6" class="radio Tumbes" />
                                                                <label for="id6"
                                                                    class="font-regularDisplay text-text18 xl:text-text22 hover:font-bold md:duration-100 hover:text-white departamento">
                                                                    Tumbes
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="flex flex-col gap-2 z-[40]">
                                                <label class="font-moderat_500 text-text12  text-[#565656]">
                                                    Provincia
                                                </label>

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

                                                            <div class="w-full">
                                                                <input type="radio" name="drop2" id="id8"
                                                                    class="radio-provincia" />

                                                                <label for="id8"
                                                                    class="font-regularDisplay text-text18 xl:text-text22 hover:font-bold md:duration-100 hover:text-white provincia">
                                                                    Provincia 2
                                                                </label>
                                                            </div>

                                                            <div class="w-full">
                                                                <input type="radio" name="drop2" id="id9"
                                                                    class="radio-provincia" />

                                                                <label for="id9"
                                                                    class="font-regularDisplay text-text18 xl:text-text22 hover:font-bold md:duration-100 hover:text-white provincia">
                                                                    Provincia 3
                                                                </label>
                                                            </div>

                                                            <div class="w-full">
                                                                <input type="radio" name="drop2" id="id10"
                                                                    class="radio-provincia" />

                                                                <label for="id10"
                                                                    class="font-regularDisplay text-text18 xl:text-text22 hover:font-bold md:duration-100 hover:text-white provincia">
                                                                    Provincia 4
                                                                </label>
                                                            </div>

                                                            <div class="w-full">
                                                                <input type="radio" name="drop2" id="id11"
                                                                    class="radio-provincia" />

                                                                <label for="id11"
                                                                    class="font-regularDisplay text-text18 xl:text-text22 hover:font-bold md:duration-100 hover:text-white provincia">
                                                                    Provincia 5
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="flex flex-col gap-2 z-[30]">
                                                <label class="font-moderat_500 text-text12  text-[#565656]">
                                                    Distrito
                                                </label>

                                                <div>
                                                    <!-- combo -->
                                                    <div class="dropdown-distrito w-full">
                                                        <div
                                                            class="input-box-distrito focus:outline-none font-regularDisplay text-text16 xl:text-text20 mr-20 text-[#6C7275] border-[1.5px] border-gray-200 py-6 px-4">
                                                            Selecciona un distrito
                                                        </div>
                                                        <div
                                                            class="list-distrito overflow-y-scroll h-[200px] scroll-distrito">
                                                            <div class="w-full">
                                                                <input type="radio" name="drop3" id="id12"
                                                                    class="radio-distrito" />

                                                                <label for="id12"
                                                                    class="font-regularDisplay text-text18 xl:text-text22 hover:font-bold md:duration-100 hover:text-white distrito">
                                                                    Distrito 1
                                                                </label>
                                                            </div>

                                                            <div class="w-full">
                                                                <input type="radio" name="drop3" id="id13"
                                                                    class="radio-distrito" />

                                                                <label for="id13"
                                                                    class="font-regularDisplay text-text18 xl:text-text22 hover:font-bold md:duration-100 hover:text-white distrito">
                                                                    Distrito 2
                                                                </label>
                                                            </div>

                                                            <div class="w-full">
                                                                <input type="radio" name="drop3" id="id14"
                                                                    class="radio-distrito" />

                                                                <label for="id14"
                                                                    class="font-regularDisplay text-text18 xl:text-text22 hover:font-bold md:duration-100 hover:text-white distrito">
                                                                    Distrito 3
                                                                </label>
                                                            </div>

                                                            <div class="w-full">
                                                                <input type="radio" name="drop3" id="id15"
                                                                    class="radio-distrito" />

                                                                <label for="id15"
                                                                    class="font-regularDisplay text-text18 xl:text-text22 hover:font-bold md:duration-100 hover:text-white distrito">
                                                                    Distrito 4
                                                                </label>
                                                            </div>

                                                            <div class="w-full">
                                                                <input type="radio" name="drop3" id="id16"
                                                                    class="radio-distrito" />

                                                                <label for="id16"
                                                                    class="font-regularDisplay text-text18 xl:text-text22 hover:font-bold md:duration-100 hover:text-white distrito">
                                                                    Distrito 5
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="flex flex-col gap-2">
                                                <label for="nombre_calle"
                                                    class="font-moderat_500 text-text12  text-[#565656]">Avenida / Calle /
                                                    Jirón</label>

                                                <input id="nombre_calle" type="text"
                                                    placeholder="Ingresa el nombre de la calle"
                                                    class="w-full py-3 px-4 focus:outline-none placeholder-gray-400 font-moderat_400 text-text16 xl:text-text18 border-[1.5px] border-gray-200 text-[#565656]" />
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex flex-col md:flex-row gap-5">
                                                <div class="basis-1/2 flex flex-col gap-2">
                                                    <label for="numero_calle"
                                                        class="font-moderat_500 text-text12  text-[#565656]">Número
                                                    </label>

                                                    <input id="numero_calle" type="text"
                                                        placeholder="Ingresa el número de la calle"
                                                        class="w-full py-3 px-4 focus:outline-none placeholder-gray-400 font-moderat_400 text-text16 xl:text-text18 border-[1.5px] border-gray-200 text-[#565656]" />
                                                </div>

                                                <div class="basis-1/2 flex flex-col gap-2">
                                                    <label for="direccion"
                                                        class="font-moderat_500 text-text12  text-[#565656]">Dpto./
                                                        Interior/ Piso/ Lote/ Bloque
                                                        (opcional)</label>

                                                    <input id="direccion" type="text"
                                                        placeholder="Ejem. Casa 3, Dpto 101"
                                                        class="w-full py-3 px-4 focus:outline-none placeholder-gray-400 font-moderat_400 text-text16 xl:text-text18 border-[1.5px] border-gray-200 text-[#565656]" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex flex-col gap-5 pb-10">
                                    <h2 class="font-moderat_700 text-text20 xl:text-text22 text-[#151515]">
                                        Método de pago
                                    </h2>
                                    <div
                                        class="w-full flex flex-col gap-5 border-dashed pb-10 border-b-2 border-[#E8ECEF]">
                                        <div class="flex items-center ps-4 border border-gray-200">
                                            <input type="radio" id="bordered-radio-tarjeta"
                                                name="bordered-radio-tarjetas" value=""
                                                class="focus:ring-transparent w-5 h-5 cursor-pointer  cuentas" />
                                            <label for="bordered-radio-tarjeta"
                                                class="w-full py-4 ms-2 text-text16 xl:text-text18 font-moderat_400 text-[#6C7275] flex justify-between items-center px-4">
                                                <span>Tarjeta de crédito</span>
                                            </label>
                                        </div>

                                        <div class="flex items-center ps-4 border border-gray-200">
                                            <input type="radio" id="bordered-radio-debito"
                                                name="bordered-radio-tarjetas" value=""
                                                class="focus:ring-transparent w-5 h-5 cursor-pointer cuentas" />
                                            <label for="bordered-radio-debito"
                                                class="w-full py-4 ms-2 text-text16 xl:text-text18 font-moderat_400 text-[#6C7275] flex justify-between items-center px-4">
                                                <span>Tarjeta de Débito</span>
                                            </label>
                                        </div>

                                        <div class="flex items-center ps-4 border border-gray-200">
                                            <input type="radio" id="bordered-radio-cuenta"
                                                name="bordered-radio-tarjetas" value=""
                                                class="focus:ring-transparent w-5 h-5 cursor-pointer cuentas inputVoucher" />
                                            <label for="bordered-radio-cuenta"
                                                class="w-full py-4 ms-2 text-text16 xl:text-text18 font-moderat_400 text-[#6C7275] flex justify-between items-center px-4">
                                                <span>Depósito a cuenta</span>
                                            </label>
                                        </div>

                                        <div class="deposito__cuenta hidden">
                                            <div class="flex justify-between items-center text-[#6C7275] px-16 voucher">
                                                <div>
                                                    <p class="font-moderat_500">Banco - Interbank</p>
                                                    <p class="font-moderat_400">
                                                        N. Cuenta Corriente
                                                    </p>
                                                    <p class="font-moderat_400">4394564564687656</p>
                                                </div>

                                                <div>
                                                    <label for="upload"
                                                        class="font-moderat_700 text-text12 cursor-pointer">Envía tu
                                                        comprobante</label>
                                                    <input type="file" class="hidden" id="upload" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="pt-5">
                                        <div class="flex flex-col gap-5">
                                            <div class="flex flex-col gap-2">
                                                <label for="nombre_tarjeta"
                                                    class="font-moderat_500 text-text12 xl:text-text14 text-[#6C7275]">Nombre
                                                    de la tarjeta</label>
                                                <input id="nombre_tarjeta" type="text" placeholder="Nombre"
                                                    class="w-full py-3 px-4 focus:outline-none placeholder-gray-400 font-moderat_400 text-text16 xl:text-text18 border-[1.5px] border-gray-200" />
                                            </div>

                                            <div class="flex flex-col gap-2">
                                                <label for="numero_tarjeta"
                                                    class="font-moderat_500 text-text12 xl:text-text14 text-[#6C7275]">Número
                                                    de tarjeta</label>
                                                <input id="numero_tarjeta" type="text" placeholder="1234 12345 1234"
                                                    class="w-full py-3 px-4 focus:outline-none placeholder-gray-400 font-moderat_400 text-text16 xl:text-text18 border-[1.5px] border-gray-200" />
                                            </div>

                                            <div class="flex flex-col md:flex-row gap-5">
                                                <div class="basis-1/2 flex flex-col gap-2">
                                                    <label for="fecha_caducidad"
                                                        class="font-moderat_500 text-text12 xl:text-text14 text-[#6C7275]">Fecha
                                                        de caducidad</label>
                                                    <input id="fecha_caducidad" type="text" placeholder="MM/AA"
                                                        class="w-full py-3 px-4 focus:outline-none placeholder-gray-400 font-moderat_400 text-text16 xl:text-text18 border-[1.5px] border-gray-200" />
                                                </div>

                                                <div class="basis-1/2 flex flex-col gap-2">
                                                    <label for="CVC"
                                                        class="font-moderat_500 text-text12 xl:text-text14 text-[#6C7275]">CVC</label>
                                                    <input id="CVC" type="text" placeholder="Código CVC"
                                                        class="w-full py-3 px-4 focus:outline-none placeholder-gray-400 font-moderat_400 text-text16 xl:text-text18 border-[1.5px] border-gray-200" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="pt-10">
                                        <a href="mensajeExito.html"
                                            class="text-white bg-[#0051FF] w-full py-3 cursor-pointer border-2 font-moderat_700 text-text16 xl:text-text18 inline-block text-center border-none">Pagar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="basis-5/12 flex flex-col justify-start gap-10 pt-10 md:pt-0 ">
                    <h2 class="font-moderat_700 text-text28 xl:text-text30 text-[#151515] px-4">
                        Resumen del pedido
                    </h2>

                    <div class="p-4">
                        <div class="flex flex-col gap-10">
                            <div class="flex justify-between border-b-[1px] border-[#E8ECEF] pb-5">
                                <div class="flex justify-center items-center gap-5">
                                    <div class="h-full w-full flex justify-center flex-1 items-center bg-[#F3F3F3] px-5">
                                        <img src="{{ asset('images/img/image_52.png') }}" alt="producto"
                                            class="w-[75] h-[48px]" />
                                    </div>

                                    <div class="flex flex-col gap-2">
                                        <h3 class="font-moderat_700 text-text16 xl:text-text18 text-[#151515]">
                                            Producto 1
                                        </h3>
                                        <p class="font-moderat_400 text-text12 xl:text-text14 text-[#6C7275]">
                                            Color: Black
                                        </p>
                                        <div>

                                            <div>
                                                <input type="number"
                                                    class="border-2 rounded-lg w-16 h-8 font-moderat_400 text-text16"
                                                    value="01" step="1">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-col justify-start gap-5 items-center">
                                    <p class="font-moderat_700 text-text14 xl:text-text16 text-[#151515]">
                                        s/ 19.19
                                    </p>
                                </div>
                            </div>

                            <div class="flex justify-between border-b-[1px] border-[#E8ECEF] pb-5">
                                <div class="flex justify-center items-center gap-5">
                                    <div class="h-full w-full flex justify-center flex-1 items-center bg-[#F3F3F3] px-5">
                                        <img src="{{ asset('images/img/image_52.png') }}" alt="producto"
                                            class="w-[75] h-[48px]" />
                                    </div>

                                    <div class="flex flex-col gap-2 flex-2">
                                        <h3 class="font-moderat_700 text-text16 xl:text-text18 text-[#151515]">
                                            Producto 1
                                        </h3>
                                        <p class="font-moderat_400 text-text12 xl:text-text14 text-[#6C7275]">
                                            Color: Black
                                        </p>
                                        <div>

                                            <div>
                                                <input type="number"
                                                    class="border-2 rounded-lg w-16 h-8 font-moderat_400 text-text16"
                                                    value="01" step="1">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-col justify-start gap-5 items-center">
                                    <p class="font-moderat_700 text-text14 xl:text-text16 text-[#151515]">
                                        s/ 19.19
                                    </p>
                                </div>
                            </div>

                            <div class="flex justify-between border-b-[1px] border-[#E8ECEF] pb-5">
                                <div class="flex justify-center items-center gap-5">
                                    <div class="h-full w-full flex justify-center flex-1 items-center bg-[#F3F3F3] px-5">
                                        <img src="{{ asset('images/img/image_52.png') }}" alt="producto"
                                            class="w-[75] h-[48px]" />
                                    </div>

                                    <div class="flex flex-col gap-2 flex-2">
                                        <h3 class="font-moderat_700 text-text16 xl:text-text18 text-[#151515]">
                                            Producto 1
                                        </h3>
                                        <p class="font-moderat_400 text-text12 xl:text-text14 text-[#6C7275]">
                                            Color: Black
                                        </p>
                                        <div>

                                            <div>
                                                <input type="number"
                                                    class="border-2 rounded-lg w-16 h-8 font-moderat_400 text-text16"
                                                    value="01" step="1">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-col justify-start gap-5 items-center">
                                    <p class="font-moderat_700 text-text14 xl:text-text16 text-[#151515]">
                                        s/ 19.19
                                    </p>
                                </div>
                            </div>

                            <div class="flex justify-between border-b-[1px] border-[#E8ECEF] pb-5">
                                <div class="flex justify-center items-center gap-5">
                                    <div class="h-full w-full flex justify-center flex-1 items-center bg-[#F3F3F3] px-5">
                                        <img src="{{ asset('images/img/image_52.png') }}" alt="producto"
                                            class="w-[75] h-[48px]" />
                                    </div>

                                    <div class="flex flex-col gap-2 flex-2">
                                        <h3 class="font-moderat_700 text-text16 xl:text-text18 text-[#151515]">
                                            Producto 1
                                        </h3>
                                        <p class="font-moderat_400 text-text12 xl:text-text14 text-[#6C7275]">
                                            Color: Black
                                        </p>
                                        <div>
                                            <div>
                                                <input type="number"
                                                    class="border-2 rounded-lg w-16 h-8 font-moderat_400 text-text16"
                                                    value="01" step="1">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-col justify-start gap-5 items-center">
                                    <p class="font-moderat_700 text-text14 xl:text-text16 text-[#151515]">
                                        s/ 19.19
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-col gap-5 mt-10">
                            <div
                                class="text-[#141718] flex justify-between items-center border-b-[1px] border-[#E8ECEF] pb-5 text-text16 xl:text-text18">
                                <p class="font-moderat_400">Envío</p>
                                <p class="font-moderat_700">Gratis</p>
                            </div>

                            <div
                                class="text-[#141718] flex justify-between items-center border-b-[1px] border-[#E8ECEF] pb-5 text-text16 xl:text-text18">
                                <p class="font-moderat_400">Subtotal</p>
                                <p class="font-moderat_700">s/ 99.00</p>
                            </div>

                            <div
                                class="text-[#141718] font-moderat_500 text-text20 xl:text-text22 flex justify-between items-center border-b-[1px] border-[#E8ECEF] pb-5">
                                <p>Total</p>
                                <p>s/ 234.00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="bg-[#F3F3F3] w-11/12 mx-auto">

            <div
                class="flex flex-col md:flex-row justify-between items-center gap-5 pt-5 md:pt-10 pl-5 md:pl-10 pr-5 md:pr-10 mb-10">
                <div class="flex flex-col gap-6">
                    <div class="flex flex-col gap-3">
                        <p class="text-[#02173C] font-moderat_700 text-text32 leading-[38px]">¿Aún tienes alguna duda?</h2>
                        <p class="text-[#02173C] font-moderat_400 text-text18">Vestibulum ante ipsum primis in faucibus
                            orci luctus et ultrices posuere.</p>
                    </div>

                    <div class="flex justify-start items-center pb-8">
                        <a href="#"
                            class="text-[#FFFFFF] font-moderat_700 text-text16 py-3 bg-[#001232] px-5 w-full text-center md:inline-flex md:w-auto">Ponerse
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
        // Obtener el elemento input
        const cuentas = document.querySelectorAll(".cuentas");
        const depositoCuenta = document.querySelector(".deposito__cuenta");
        const radioInputTarjeta = document.querySelector(".inputVoucher");

        cuentas.forEach((cuenta) => {
            cuenta.addEventListener("click", (e) => {
                const padre = e.target.parentNode;
                if (e.target.checked) {
                    // Aplicar clase al padre del input radio seleccionado
                    padre.classList.add("bg__metodo-pago");
                    padre.classList.remove('border-gray-200')
                    // Iterar sobre los demás inputs radio y quitar la clase del padre
                    cuentas.forEach(item => {
                        if (item !== e.target) {
                            item.parentNode.classList.remove('bg__metodo-pago', 'border-gray-200');
                        }
                    });

                }
            });
        });


        cuentas.forEach((cuenta) => {
            cuenta.addEventListener("click", (e) => {
                if (e.target.classList.contains("inputVoucher")) {
                    depositoCuenta.classList.remove("hidden");
                } else {
                    depositoCuenta.classList.add("hidden");
                }
            });
        });
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
