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

    div:where(.swal2-container) {
      z-index: 9999999999 !important;
    }

    .select2.select2-container {
      width: 100% !important;
    }
  </style>

@stop


@section('content')

  <main>
    <form id="paymentForm" class="w-11/12 mx-auto mt-5 mb-10 flex flex-col gap-10">
      <div class="text-text14 md:text-text16" data-aos="fade-up" data-aos-offset="150">
        <a href="" class="font-moderat_500 text-[#565656]">
          Home
        </a>
        <span>></span>
        <a href="/carrito" class="font-moderat_700 text-[#141718]">Carrito</a>
      </div>
      <div class="flex lg:gap-44" data-aos="fade-up" data-aos-offset="150">
        <div
          class="flex flex-col md:flex-row md:justify-between md:items-center lg:basis-7/12 w-full lg:w-auto text-text18 ">
          <p class="font-moderat_700 text-[#21201E] border-b-[1px] border-[#6C7275] py-4 basis-1/3 h-full text-center">
            <span class="flex items-center h-full justify-start">Carro de la compra</span>
          </p>

          <p class="font-moderat_700 text-[#21201E] border-b-[1px] border-[#6C7275] py-4 basis-1/3 h-full text-center">
            <span class="flex items-center h-full justify-start md:justify-center">Detalles de pago</span>
          </p>

          <p class="font-moderat_700 text-[#C8C8C8] border-b-[1px] border-[#6C7275] py-4 basis-1/3 h-full text-center">
            <span class="flex items-center h-full justify-start md:justify-end">Orden completada</span>
          </p>
        </div>
        <div class="lg:basis-5/12"></div>
      </div>

      <div class="flex flex-col lg:flex-row lg:gap-20">
        <div class="basis-7/12 flex flex-col gap-10 ">
          <div class="flex flex-col gap-5">
            <div>
              <div>
                <div class="flex flex-col gap-8">

                  <div class="flex flex-col gap-5 pb-10 border-b-2 border-[#565656]" data-aos="fade-up"
                    data-aos-offset="150">
                    <h2 class="font-moderat_700 text-text20 xl:text-text22 text-[#151515]">
                      Información del contacto
                    </h2>

                    <div class="flex flex-col gap-5">
                      <div class="flex flex-col md:flex-row gap-5">
                        <div class="basis-1/2 flex flex-col gap-2" data-aos="fade-up" data-aos-offset="150">
                          <label for="nombre"
                            class="font-moderat_Medium text-text12 md:text-text14 text-[#565656]">Nombre</label>
                          <input id="nombre" type="text" placeholder="Nombre" name="nombre" required
                            value="{{ $detalleUsuario[0]->nombre ?? '' }}"
                            class="w-full py-3 px-4 focus:outline-none placeholder-gray-400 font-moderat_Regular text-text16 xl:text-text18 border-[1.5px] border-gray-200 text-[#565656] outline-none " />
                        </div>

                        <div class="basis-1/2 flex flex-col gap-2" data-aos="fade-up" data-aos-offset="150">
                          <label for="apellidos"
                            class="font-moderat_Medium text-text12 md:text-text14 text-[#565656]">Apellido</label>
                          <input id="apellidos" type="text" placeholder="Apellido" name="apellidos" required
                            value="{{ $detalleUsuario[0]->apellidos ?? '' }}"
                            class="w-full py-3 px-4 focus:outline-none placeholder-gray-400 font-moderat_Regular text-text16 xl:text-text18 border-[1.5px] border-gray-200 text-[#565656]" />
                        </div>
                      </div>

                      <div class="flex flex-col gap-2" data-aos="fade-up" data-aos-offset="150">
                        <label for="email"
                          class="font-moderat_Medium text-text12 md:text-text14  text-[#565656]">E-mail</label>
                        <input id="email" type="email" name='email' placeholder="Correo electrónico" required
                          value="{{ $detalleUsuario[0]->email ?? '' }}"
                          class="w-full py-3 px-4 focus:outline-none placeholder-gray-400 font-moderat_Regular text-text16 xl:text-text18 border-[1.5px] border-gray-200 text-[#565656]" />
                      </div>

                      <div class="flex flex-col gap-2" data-aos="fade-up" data-aos-offset="150">
                        <label for="celular"
                          class="font-moderat_Medium text-text12 md:text-text14  text-[#565656]">Celular</label>
                        <input id="celular" name="phone" type="tel" placeholder="(+51) 000 000 000" required
                          value="{{ $detalleUsuario[0]->phone ?? '' }}"
                          class="w-full py-3 px-4 focus:outline-none placeholder-gray-400 font-moderat_Regular text-text16 xl:text-text18 border-[1.5px] border-gray-200 text-[#565656]" />
                      </div>
                    </div>
                  </div>

                  <div class="flex flex-col gap-5 pb-10 border-b-2 border-[#565656]" data-aos="fade-up"
                    data-aos-offset="150">
                    <h2 class="font-semibold text-[20px] text-[#151515]">
                      Dirección de envío
                    </h2>
                    <ul class="grid w-full gap-6 md:grid-cols-3">
                      <li>
                        <input type="radio" name="envio" id="recoger-option" value="recoger" class="hidden peer"
                          required @if (!$hasDefaultAddress) checked @endif>
                        <label for="recoger-option"
                          class="border inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border-3 border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-[#006BF6] hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                          <div class="block">
                            <svg class="w-6 h-6 mb-2 text-gray-800 dark:text-white" aria-hidden="true"
                              xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                              viewBox="0 0 24 24">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 10V6a3 3 0 0 1 3-3v0a3 3 0 0 1 3 3v4m3-2 .917 11.923A1 1 0 0 1 17.92 21H6.08a1 1 0 0 1-.997-1.077L6 8h12Z">
                              </path>
                            </svg>

                            <div class="w-full text-lg font-semibold">Recojo en tienda</div>
                            <div class="w-full text-sm">Envio gratis</div>
                          </div>
                        </label>
                      </li>
                      <li>
                        <input type="radio" name="envio" id="express-option" value="express" class="hidden peer"
                          @if ($hasDefaultAddress) checked @endif>
                        <label for="express-option"
                          class="border inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border-3 border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-[#006BF6] hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                          <div class="block">
                            <svg class="w-6 h-6 mb-2 text-gray-800 dark:text-white" aria-hidden="true"
                              xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                              viewBox="0 0 24 24">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2"
                                d="M10 21v-9m3-4H7.5a2.5 2.5 0 1 1 0-5c1.5 0 2.875 1.25 3.875 2.5M14 21v-9m-9 0h14v8a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1v-8ZM4 8h16a1 1 0 0 1 1 1v3H3V9a1 1 0 0 1 1-1Zm12.155-5c-3 0-5.5 5-5.5 5h5.5a2.5 2.5 0 0 0 0-5Z">
                              </path>
                            </svg>

                            <div class="w-full text-lg font-semibold">Delivery</div>
                            <div class="w-full text-sm">Sujeto a evaluacion</div>
                          </div>
                        </label>
                      </li>
                    </ul>
                    <div id="direccionContainer" class="flex flex-col gap-5">
                      <div class="flex flex-col gap-5">
                        @if (count($addresses) > 0)
                          <div class="flex flex-col gap-5 md:flex-row">
                            <div class="basis-2/3 flex flex-col gap-2 z-[45]">
                              <label class="font-medium text-[12px] text-[#6C7275]">Tu lista de direcciones<span
                                  class="text-red-500">*</span></label>
                              <div class="w-full">
                                <div class="dropdown w-full">
                                  <select id="addresses"
                                    class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 select2-hidden-accessible"
                                    data-address>
                                    <option value>Agregar una nueva direccion</option>
                                    @foreach ($addresses as $address)
                                      <option value="{{ $address->id }}" data="{{ $address }}"
                                        @if ($address->isDefault) selected @endif></option>
                                    @endforeach
                                  </select>
                                </div>
                              </div>
                            </div>
                          </div>
                        @endif
                        <div data-show="new" class="flex flex-col gap-5 md:flex-row">
                          @if ($departments->count() > 0)
                            <div class="basis-1/3 flex flex-col gap-2 z-[45]">
                              <label class="font-medium text-[12px] text-[#6C7275]">Departamento <span
                                  class="text-red-500">*</span></label>

                              <div>
                                <!-- combo -->
                                <div class="dropdown w-full">
                                  <select name="departamento_id" id="departamento_id"
                                    class="selectpicker mt-1 h-4 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 select2-hidden-accessible"
                                    data-address>
                                    <option value="" data-select2-id="select2-data-2-4o85">Seleccione un
                                      departamento</option>
                                    @foreach ($departments as $department)
                                      <option value="{{ $department->id }}">{{ $department->description }}</option>
                                    @endforeach
                                  </select>
                                </div>
                              </div>



                            </div>

                            <div class="basis-1/3 flex flex-col gap-2 z-[40]">
                              <label class="font-medium text-[12px] text-[#6C7275]">
                                Provincia <span class="text-red-500">*</span>
                              </label>

                              <div>
                                <!-- combo -->
                                <div class="dropdown-provincia w-full">
                                  <select name="provincia_id" id="provincia_id"
                                    class="selectpicker mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 select2-hidden-accessible"
                                    data-address>
                                    <option value="" data-select2-id="select2-data-4-gokf">Seleccione una
                                      provincia
                                    </option>

                                  </select>
                                </div>
                              </div>
                            </div>

                            <div class="basis-1/3 flex flex-col gap-2 z-[30]">
                              <label class="font-medium text-[12px] text-[#6C7275]">
                                Distrito <span class="text-red-500">*</span>
                              </label>

                              <div>
                                <!-- combo -->
                                <div class="dropdown-distrito w-full">
                                  <select name="distrito_id" id="distrito_id"
                                    class="selectpicker mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 select2-hidden-accessible"
                                    data-address>
                                    <option value="" data-select2-id="select2-data-6-ihrp">Seleccione un distrito
                                    </option>
                                  </select>
                                </div>
                              </div>
                            </div>
                          @else
                            <div><span> ** Configure los "Costos de Envio" para que pueda visualizar esta lista
                                **</span>
                            </div>
                          @endif

                        </div>

                        <div data-show="new" class="flex flex-col gap-2">
                          <label for="nombre_calle" class="font-medium text-[12px] text-[#6C7275]">Avenida / Calle /
                            Jirón <span class="text-red-500">*</span></label>

                          <input id="nombre_calle" type="text" name="dir_av_calle"
                            placeholder="Ingresa el nombre de la calle"
                            class="w-full py-3 px-4 focus:outline-none placeholder-gray-400 font-normal text-[16px] border-[1.5px] border-gray-200 rounded-xl text-[#6C7275]"
                            data-address>
                        </div>
                      </div>
                      <div>
                        <div data-show="new" class="flex flex-col md:flex-row gap-5">
                          <div class="basis-1/2 flex flex-col gap-2">
                            <label for="numero_calle" class="font-medium text-[12px] text-[#6C7275]">Número <span
                                class="text-red-500">*</span></label>
                            <input id="numero_calle" name="dir_numero" type="text"
                              placeholder="Ingresa el número de la callle"
                              class="w-full py-3 px-4 focus:outline-none placeholder-gray-400 font-normal text-[16px] border-[1.5px] border-gray-200 rounded-xl text-[#6C7275]"
                              data-address>
                          </div>

                          <div class="basis-1/2 flex flex-col gap-2">
                            <label for="direccion" class="font-medium text-[12px] text-[#6C7275]">Dpto./ Interior/
                              Piso/
                              Lote/ Bloque
                              (opcional)</label>
                            <input id="direccion" type="text" name="dir_bloq_lote"
                              placeholder="Ejem. Casa 3, Dpto 101"
                              class="w-full py-3 px-4 focus:outline-none placeholder-gray-400 font-normal text-[16px] border-[1.5px] border-gray-200 rounded-xl text-[#6C7275]">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>


                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="basis-5/12 flex flex-col justify-start gap-0 pt-5 md:pt-0" data-aos="fade-up"
          data-aos-offset="150">
          <h2 class="font-moderat_700 text-text28 xl:text-text30 text-[#151515]">
            Resumen del pedido
          </h2>
          <div class="p-4 pb-0">
            <hr>
          </div>
          <div class="p-4">
            <label for="tipo-comprobante" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipo de
              comprobante</label>
            <select id="tipo-comprobante" name="comprobante"
              class="selectpicker bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
              <option value="nota_venta">Nota de venta</option>
              <option value="boleta">Boleta</option>
              <option value="factura">Factura</option>
            </select>
          </div>
          <div class="p-4 grid grid-cols-4" id="ElementosFacturacion">


          </div>
          <div class="p-4 py-0">
            <hr>
          </div>

          <div>
            {{--  <div class="flex flex-col gap-10" id="itemsCarritocheck">

            </div> --}}

            <div class="flex flex-col gap-5 mt-10">
              <div
                class="text-[#141718] flex justify-between items-center border-b-[1px] border-[#E8ECEF] pb-5 text-text16 md:text-text18"
                data-aos="fade-up" data-aos-offset="150">
                <p class="font-moderat_Regular">Envío</p>
                <p class="font-moderat_Bold" id='precioEnvio'> Gratis</p>
              </div>

              <div
                class="text-[#141718] flex justify-between items-center border-b-[1px] border-[#E8ECEF] pb-5 text-text16 md:text-text18"
                data-aos="fade-up" data-aos-offset="150">
                <p class="font-moderat_Regular">Subtotal</p>
                <p class="font-moderat_Bold" id="subtotalDetalle">s/ 99.00</p>
              </div>

              <div
                class="text-[#141718] font-moderat_Medium text-text20 xl:text-text22 flex justify-between items-center pb-5"
                data-aos="fade-up" data-aos-offset="150">
                <p>Total</p>
                <p id="totalDetalle">S/. 0</p>
              </div>
            </div>
          </div>

          <div data-aos="fade-up" data-aos-offset="150">
            <button id="btnPagar"
              class="text-white bg-[#0051FF] w-full py-3 cursor-pointer border-2 font-moderat_Bold text-text16 xl:text-text18 inline-block text-center border-none">
              Pagar
            </button>
          </div>
        </div>
      </div>
    </form>


    <section class="bg-[#F3F3F3] w-11/12 mx-auto">

      <section class="bg-[#F3F3F3] w-11/12 mx-auto">

        <div
          class="flex flex-col md:flex-row justify-between items-center gap-5 pt-5 md:pt-10 pl-5 md:pl-10 pr-5 md:pr-10 mb-20">
          <div class="flex flex-col gap-6" data-aos="fade-up" data-aos-offset="150">
            <div class="flex flex-col gap-3">
              <p class="text-[#02173C] font-moderat_700 text-text32 leading-[38px]">¿Aún tienes alguna duda?</p>
              <p class="text-[#02173C] font-moderat_Regular text-text18">Estamos aquí para ayudarte. Si tienes alguna
                pregunta sobre nuestros productos o servicios, no dudes en ponerte en contacto con nosotros. Estaremos
                encantados de asistirte.</p>
            </div>

            <div class="flex justify-start items-center pb-8">
              <a href="/contacto"
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
  <script src="https://checkout.culqi.com/js/v4"></script>
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

  <script>
    var appUrl = '{{ env('APP_URL') }}';

    function pintarCarritoCheckout(carritoItems) {

      let itemsCarrito = $('#itemsCarritocheck')

      carritoItems.forEach(element => {
        let plantilla = `

				<div class="flex justify-between border-b-[1px] border-[#E8ECEF] pb-5" data-aos="fade-up"
                data-aos-offset="150">
                <div class="flex justify-center items-center gap-5">
                  <div class="h-full w-full flex justify-center flex-1 items-center bg-[#F3F3F3] px-5">
                    <img src="${appUrl}/${element.imagen}" alt="producto" class="w-[75] h-[48px]" />
                  </div>

                  <div class="flex flex-col gap-2">
                    <h3 class="font-moderat_700 text-text16 xl:text-text18 text-[#151515]">
                      Producto 1
                    </h3>
                    
                    <div>

                      <div>
                        <input type="number" disabled class="border-2 rounded-lg w-16 h-8 text-text16 font-moderat_Regular"
                          value="${element.cantidad }" step="1">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="flex flex-col justify-start gap-5 items-center">
                  <p class="font-moderat_Bold text-text14 xl:text-text16 text-[#151515]">
                    S/ ${element.cantidad * element.precio}
                  </p>
                </div>
              </div>
						
	
				`

        itemsCarrito.append(plantilla)

      });
    }

    $(document).ready(function() {
      let carritoChec = Local.get('carrito')
      console.log(carritoChec)

      pintarCarritoCheckout(carritoChec)
      calcularTotal2()
    })

    function calcularTotal2() {
      console.log('calculando total2 ')

      let valorEnvioObtenido = false
      let articulos = Local.get('carrito')
      let valorSeleccionado = 0;

      let total = articulos.map(item => {
        let monto
        if (!valorEnvioObtenido) {
          valorEnvioObtenido = true
          valorSeleccionado = item.tipo_envio
        }
        if (Number(item.descuento) !== 0) {
          monto = item.cantidad * Number(item.descuento)
        } else {
          monto = item.cantidad * Number(item.precio)

        }
        return monto

      })
      const suma = total.reduce((total, elemento) => total + elemento, 0);

      $('#subtotalDetalle').text(`S/. ${suma.toFixed(2)} `)
      const opciones = document.getElementsByName('bordered-radio');

      // Iterar sobre los radio buttons para encontrar el que está seleccionado

      $("#MontoEnvio").text('S/. ' + valorSeleccionado)

      // El valor de valorSeleccionado es el valor del radio button seleccionado


      total = Number(suma) + (Number(valorSeleccionado) || 0)

      let carrito = Local.get('carrito')
      // carrito = [...carrito, carrito.total]
      Local.set("carrito", carrito)

      $('#totalDetalle').text(`S/. ${total.toFixed(2)} `)
      return {
        total,
        suma
      }

    }
  </script>
  {{--  <script>
    $('#pagarProductos').on('click', function(e) {
      console.log('pagando servicio');
      e.preventDefault()

      let url = window.location.href;
      const urlObj = new URL(url);
      const params = urlObj.searchParams;

      let firstPurchase = params.get('first');
      let formDataArray = $('#formHome').serializeArray();
      console.log(formDataArray);
      let mensaje = 'El campo';
      let mensajeFinal = ' No pueden estar vacios';
      let hasEmptyFields = false;

      console.log(firstPurchase);

      if (firstPurchase === 'false') {
        console.log('no es primera compra debe llenar todos los datos');
        formDataArray.forEach(function(item) {
          if (item.value.trim() === '') {
            switch (item.name) {
              case 'nombre':
                mensaje += ' Nombre,';
                hasEmptyFields = true;
                break;
              case 'apellidos':
                mensaje += ' Apellido,';
                hasEmptyFields = true;
                break;
              case 'email':
                mensaje += ' Email,';
                hasEmptyFields = true;
                break;
              case 'phone':
                mensaje += ' Celular,';
                hasEmptyFields = true;
                break;
              case 'dir_av_calle':
                mensaje += ' Avenida/Calle,';
                hasEmptyFields = true;
                break;
              case 'dir_numero':
                mensaje += ' Numero,';
                hasEmptyFields = true;
                break;
            }
          }
        });

        if (!hasEmptyFields) {
          $('#contenedorIzypay').show();
        } else {
          Swal.fire({
            icon: "warning",
            title: "Opss ",
            text: `${mensaje}${mensajeFinal}`
          });
          hasEmptyFields = false;
          return; // Añade un return para detener la ejecución si hay campos vacíos
        }
      } else {
        formDataArray.forEach(function(item) {
          if (item.value.trim() === '') {
            switch (item.name) {
              case 'dir_av_calle':
                mensaje += ' Avenida/Calle,';
                hasEmptyFields = true;
                break;
              case 'dir_numero':
                mensaje += ' Numero,';
                hasEmptyFields = true;
                break;
            }
          }
        });

        if (!hasEmptyFields) {
          $('#contenedorIzypay').show();
        } else {
          Swal.fire({
            icon: "warning",
            title: "Opss ",
            text: `${mensaje}${mensajeFinal}`
          });
          hasEmptyFields = false;
          return; // Añade un return para detener la ejecución si hay campos vacíos
        }
      }

      // Generar el objeto formDataObject solo una vez después de las validaciones
      let formDataObject = {};
      formDataArray.forEach(function(item) {
        formDataObject[item.name] = item.value;
      });

      $.ajax({
        url: '{{ route('procesar.pago') }}',
        method: 'POST',
        data: JSON.stringify({
          data: formDataObject,
          codigoCompra: {{ $codigoCompra }}
        }),
        contentType: 'application/json', // Asegura que se envía como JSON
        success: function(response) {
          console.log(response);
          // Limpiar carrito de compra
          Swal.fire({
            title: `Exito!!`,
            text: `Informacion procesada correctamente`,
            icon: "success",
            timer: 2000,
            timerProgressBar: true,
            didOpen: () => {
              Swal.showLoading();
              const timer = Swal.getPopup().querySelector("b");
              timerInterval = setInterval(() => {
                timer.textContent = `${Swal.getTimerLeft()}`;
              }, 100);
            },
            willClose: () => {
              clearInterval(timerInterval);
            }
          });
          //limpiar carrito de compra
          // Local.delete('carrito')

          setTimeout(function() {
            console.log('compra realizada con exito')
            // window.location.href = `/exito?codigoCompra=${response.codigoCompra}`
          }, 2000);
          codigoCompra
        },
        error: function(error) {
          console.log(error);
          Swal.fire({
            title: `Opps!!`,
            text: `${error.responseJSON.errors}`,
            icon: "error",
          })
        }
      });

    })
  </script> --}}

  <script>
    $('#direccionContainer').fadeOut(0)
    const hasDefaultAddress = {{ $hasDefaultAddress ? 'true' : 'false' }};
    Culqi.publicKey = "{{ $culqi_public_key }}";

    const culqi = async () => {
      try {
        const carrito = Local.get('carrito') ?? []
        if (Culqi.token) {
          const body = {
            _token: $('[name="_token"]').val(),
            cart: carrito.map((x) => ({
              id: x.id,
              quantity: x.cantidad,
              isCombo: x.isCombo || false
            })),
            contact: {
              name: $('#nombre').val(),
              lastname: $('#apellidos').val(),
              email: $('#email').val(),
              phone: $('#celular').val(),
              doc_number: $('#DNI').val() || $('#RUC').val(),
              doc_type: $('#tipo-comprobante').val() ?? 'nota_venta',
              razon_fact: $('#razonFact').val(),
              direccion_fact: $('#direccionFact').val(),


            },
            address: null,
            saveAddress: !Boolean($('#addresses').val()),
            culqi: Culqi.token,
            tipo_comprobante: $('#tipo-comprobante').val()
          }
          if ($('[name="envio"]:checked').val() == 'express') {
            body.address = {
              id: $('#distrito_id option:selected').attr('price-id'),
              city: $('#distrito_id option:selected').text(),
              street: $('#nombre_calle').val(),
              number: $('#numero_calle').val(),
              description: $('#direccion').val()
            }
          }

          const res = await fetch("{{ route('payment.culqi') }}", {
            method: 'POST',
            headers: {
              'Content-type': 'application/json'
            },
            body: JSON.stringify(body)
          })
          const data = await res.json()
          if (!res.ok) throw new Error(data?.message ?? 'Ocurrio un error inesperado al generar el cargo')

          /* Swal.fire({
            title: `Bien!!`,
            text: `Se ha generado el cargo por S/. ${data.data.amount.toFixed(2)}`,
            icon: "success",
          }); */

          Local.delete('carrito')

          location.href = `/exito?codigoCompra=${data.data.reference_code}`

        } else if (Culqi.order) { // ¡Objeto Order creado exitosamente!
          const order = Culqi.order;
          console.log('Se ha creado el objeto Order: ', order);

        } else {
          // Mostramos JSON de objeto error en consola
          console.log('Error : ', Culqi.error);
          throw new Error(Culqi.error.message);
        }
      } catch (error) {
        Swal.fire({
          title: `Error!!`,
          text: error.message,
          icon: "error",
        });
      }
    }

    const getTotalPrice = () => {
      const carrito = Local.get('carrito') ?? []
      const productPrice = carrito.reduce((total, x) => {
        let price = Number(x.precio) * x.cantidad
        if (Number(x.descuento)) {
          price = Number(x.descuento) * x.cantidad
        }
        total += price
        return total
      }, 0)
      return productPrice
    }

    const getCostoEnvio = () => {
      console.log('getcostoEnvio', $('[name="envio"]:checked').val());

      if ($('[name="envio"]:checked').val() == 'recoger') return 0
      const priceStr = $('#distrito_id option:selected').attr('data-price')
      const price = Number(priceStr) || 0
      return price
    }

    $(document).on('change', '#tipo-comprobante', function() {
      console.log('cambio', $(this).val())

      let tipoComrobante = $(this).val()

      // ElementosFacturacion
      if (tipoComrobante == 'boleta') {
        $("#ElementosFacturacion").html('')
        $('#ElementosFacturacion').html(`
          <div class="col-span-2 mb-2">
            <label for="nombre" class="font-medium text-[12px] text-[#6C7275]">DNI<span class="text-red-500">*</span></label>
            <input maxlength="8" id="DNI" type="number"  placeholder="DNI" name="DNI" value="" class="w-full py-2 px-4 focus:outline-none placeholder-gray-400 font-normal text-[16px] border-[1.5px] border-gray-200 rounded-xl text-[#6C7275]" >

            
          </div>
          <div class="col-span-4 mb-2">
            <label for="nombre" class="font-medium text-[12px] text-[#6C7275]">Razon Social<span class="text-red-500">*</span></label>
            <input  id="razonFact" type="text"  placeholder="Razon Social" name="razon_fact" value="" class="w-full py-2 px-4 focus:outline-none placeholder-gray-400 font-normal text-[16px] border-[1.5px] border-gray-200 rounded-xl text-[#6C7275]" >

            
          </div>
          <div class="col-span-4 mb-2">
            <label for="nombre" class="font-medium text-[12px] text-[#6C7275]">Direccion Facturacion<span class="text-red-500">*</span></label>
            <input  id="direccionFact" type="text"  placeholder="Direccion Boleta" name="direccion_fact" value="" class="w-full py-2 px-4 focus:outline-none placeholder-gray-400 font-normal text-[16px] border-[1.5px] border-gray-200 rounded-xl text-[#6C7275]" >

            
          </div>
        `)
      } else if (tipoComrobante == 'factura') {
        $("#ElementosFacturacion").html('')
        $('#ElementosFacturacion').html(`
          <div class="col-span-2 mb-2">
            <label for="ruc" class="font-medium text-[12px] text-[#6C7275]">RUC <span class="text-red-500">*</span></label>
            <input maxlength="11" id="RUC" type="number" placeholder="RUC" name="RUC" value="" class="w-full py-2 px-4 focus:outline-none placeholder-gray-400 font-normal text-[16px] border-[1.5px] border-gray-200 rounded-xl text-[#6C7275]" >
          </div>
          <div class="col-span-4 mb-2">
            <label for="nombre" class="font-medium text-[12px] text-[#6C7275]">Razon Social<span class="text-red-500">*</span></label>
            <input  id="razonFact" type="text"  placeholder="Ingrese Razon Social" name="razon_fact" value="" class="w-full py-2 px-4 focus:outline-none placeholder-gray-400 font-normal text-[16px] border-[1.5px] border-gray-200 rounded-xl text-[#6C7275]" >

            
          </div>
          <div class="col-span-4 mb-2">
            <label for="nombre" class="font-medium text-[12px] text-[#6C7275]">Direccion Facturacion<span class="text-red-500">*</span></label>
            <input  id="direccionFact" type="text"  placeholder="Direccion Facturacion" name="direccion_fact" value="" class="w-full py-2 px-4 focus:outline-none placeholder-gray-400 font-normal text-[16px] border-[1.5px] border-gray-200 rounded-xl text-[#6C7275]" >

            
          </div>
          
        `)
      } else {
        $("#ElementosFacturacion").html('')
      }


    })

    $(document).on('keydown', '#DNI, #RUC', function(e) {
      const controlKeys = ['Backspace', 'Delete', 'Tab', 'ArrowLeft', 'ArrowRight', 'Home', 'End'];
      if (controlKeys.includes(e.key)) {
        return;
      }

      if (e.key === '.' || e.key === ',') {
        e.preventDefault();
      }
      console.log($(this.id))
      if (this.id == 'DNI' && $(this).val().length > 7) {
        e.preventDefault();
      } else if (this.id == 'RUC' && $(this).val().length > 10) {
        e.preventDefault();
      }

    });
    $('#paymentForm').on('submit', function(e) {
      e.preventDefault();

      const precioProductos = getTotalPrice()
      const precioEnvio = getCostoEnvio()


      let existeRuc = $('#RUC').length == '' ? false : true
      let ExisteDni = $('#DNI').length == '' ? false : true
      let razonFact = $('#razonFact').length == '' ? false : true
      let direccionFact = $('#direccionFact').length == '' ? false : true

      if (ExisteDni) {
        if ($('#tipo-comprobante').val() == 'boleta' && ($('#DNI').val() == '' || $('#DNI').val().length !== 8)) {
          Swal.fire({
            title: `Error!!`,
            text: 'Ingrese su DNI Completo',
            icon: "error",
          });
          return
        }

      }
      if (existeRuc) {
        if ($('#tipo-comprobante').val() == 'factura' && ($('#RUC').val() == '' || $('#RUC').val().length !== 11)) {
          Swal.fire({
            title: `Error!!`,
            text: 'Ingrese su Ruc Completo',
            icon: "error",
          });
          return
        }

      }

      if (razonFact) {
        if ($('#razonFact').val() == '') {
          Swal.fire({
            title: `Error!!`,
            text: 'Ingrese su Razon Social',
            icon: "error",
          });
          return
        }

      }
      if (direccionFact) {
        if ($('#direccionFact').val() == '') {
          Swal.fire({
            title: `Error!!`,
            text: 'Ingrese su Direccion de Facturacion',
            icon: "error",
          });
          return
        }
      }
      const paymentMethods = { // las opciones se ordenan según se configuren
        tarjeta: true,
        yape: true,
        billetera: true,
        bancaMovil: true,
        agente: true,
        cuotealo: true,
      }


      Culqi.settings({
        title: 'Boost .its more',
        currency: 'PEN',
        amount: Math.round((precioProductos + precioEnvio) * 100),
      });
      Culqi.options({
        paymentMethods: paymentMethods,
        paymentMethodsSort: Object.keys(paymentMethods),
        style: {
          logo: `${location.origin}/images/svg/favicon.svg`,
          bannerColor: '#272727'

        }
      })
      Culqi.open();
    })

    $('[name="envio"]').on('click', () => {
      const value = $('[name="envio"]:checked').val()
      if (value == 'express') {
        $('#direccionContainer').fadeIn(125)
        if ($('#distrito_id').val()) {
          $('#distrito_id').trigger('change')
        } else {
          $('#precioEnvio').text(`Evaluando`)
        }
        $('[data-address]').prop('required', true)
        // $('#addresses').prop('required', false)
        $('#addresses').removeAttr('required');
      } else {
        $('#direccionContainer').fadeOut(125)
        $('#precioEnvio').text('Gratis')
        $('[data-address]').prop('required', false)

      }
      calcularTotal()
    })

    const provinces = @json($provinces);
    const districts = @json($districts);

    const addressTemplate = ({
      id,
      text,
      element
    }) => {
      if (!id) return text

      const data = JSON.parse(element.getAttribute('data'))
      let price = 'Gratis'
      let className = 'bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-300'
      if (data.price.price > 0) {
        price = `S/. ${data.price.price.toFixed(2)}`
        className = 'bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-300'
      }
      return $(`<div class="relative">
        <b class="block">
          ${data.price.district.province.department.description},
          ${data.price.district.province.description},
          ${data.price.district.description}
        </b>
        ${data.street} #${data.number}
        <span class="absolute right-2 top-[50%] translate-y-[-50%] w-max block mx-auto text-xs font-medium px-2.5 py-0.5 mb-1 rounded-full ${className}">
          ${price}  
        </span>
      </div>`)
    }

    $('#addresses').select2({
      templateResult: addressTemplate,
      templateSelection: addressTemplate
    })
    $('#departamento_id').select2()
    $('#provincia_id').select2()
    $('#distrito_id').select2()

    $('.selectpicker').select2()

    $('#addresses').on('change', function() {
      const address = $(this).val()
      if (!address) {
        $('[data-show="new"]').fadeIn()
        $('#departamento_id')
          .val(null)
          .trigger('change')
        $('#nombre_calle').val(null)
        $('#numero_calle').val(null)
        $('#direccion').val(null)
        return
      }
      const data = JSON.parse($(this).find('option:selected').attr('data'))
      $('[data-show="new"]').fadeOut()
      $('#departamento_id')
        .val(data.price.district.province.department.id)
        .trigger('change')
      $('#provincia_id')
        .val(data.price.district.province.id)
        .trigger('change')
      $('#distrito_id')
        .val(data.price.district.id)
        .trigger('change')
      $('#nombre_calle').val(data.street)
      $('#numero_calle').val(data.number)
      $('#direccion').val(data.description)
    })

    $('#departamento_id').on('change', function() {
      $('#provincia_id').html('<option value>Seleccione una provincia</option>')
      $('#distrito_id').html('<option value>Seleccione un distrito</option>')
      $('#precioEnvio').text(`Evaluando`)
      provinces.filter(x => x.department_id == this.value).forEach((province) => {
        const option = $('<option>', {
          value: province.id,
          text: province.description
        })
        $('#provincia_id').append(option)
      })
      $('#provincia_id').select2()
      calcularTotal()
    })
    $(document).on('change', '#addresses', function() {
      console.log('change', $(this).val())
    })

    $('#provincia_id').on('change', function() {
      $('#distrito_id').html('<option value>Seleccione un distrito</option>')
      $('#precioEnvio').text(`Evaluando`)
      districts.filter(x => x.province_id == this.value).forEach((district) => {
        const option = $('<option>', {
          value: district.id,
          text: district.description,
          'data-price': district.price,
          'price-id': district.price_id
        })
        $('#distrito_id').append(option)
      })
      $('#distrito_id').select2()
      calcularTotal()
    })

    $('#distrito_id').on('change', function() {
      const priceStr = $('#distrito_id option:selected').attr('data-price')
      const price = Number(priceStr) || 0
      if (price == 0) {
        $('#precioEnvio').text('Gratis')
      } else {
        $('#precioEnvio').text(`S/. ${price.toFixed(2)}`)
      }
      calcularTotal()
    })

    if (hasDefaultAddress) {
      $('#express-option').trigger('click')
      $('#addresses').trigger('change')
    }

    function calcularTotal() {
      const precioProductos = getTotalPrice()
      $('#itemSubtotal').text(`S/. ${precioProductos.toFixed(2)}`)
      const precioEnvio = getCostoEnvio()
      const total = Number(precioProductos) + (Number(precioEnvio) || 0)

      $('#itemTotal').text(`S/. ${total.toFixed(2)} `)
      $('#itemsTotal').text(`S/. ${total.toFixed(2)} `)
      $('#totalDetalle').text(`S/. ${total.toFixed(2)} `)
    }
  </script>


@stop

@stop
