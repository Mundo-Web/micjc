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
    <section class="w-11/12 mx-auto mt-5 mb-10 flex flex-col gap-10">
      <div class="text-text14 md:text-text16" data-aos="fade-up" data-aos-offset="150">
        <a href="" class="font-moderat_500 text-[#565656]">
          Home
        </a>
        <span>></span>
        <a href="carrito.html" class="font-moderat_700 text-[#141718]">Carrito</a>
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

      <div class="flex flex-col lg:flex-row lg:gap-44">
        <div class="basis-7/12 flex flex-col gap-10 ">
          <div class="flex flex-col gap-5">
            <div>
              <form id="formHome">
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
                          <input id="nombre" type="text" placeholder="Nombre" name="nombre"
                            value="{{ $detalleUsuario[0]->nombre ?? '' }}"
                            class="w-full py-3 px-4 focus:outline-none placeholder-gray-400 font-moderat_Regular text-text16 xl:text-text18 border-[1.5px] border-gray-200 text-[#565656] outline-none " />
                        </div>

                        <div class="basis-1/2 flex flex-col gap-2" data-aos="fade-up" data-aos-offset="150">
                          <label for="apellidos"
                            class="font-moderat_Medium text-text12 md:text-text14 text-[#565656]">Apellido</label>
                          <input id="apellido" type="text" placeholder="Apellido" name="apellidos"
                            value="{{ $detalleUsuario[0]->apellidos ?? '' }}"
                            class="w-full py-3 px-4 focus:outline-none placeholder-gray-400 font-moderat_Regular text-text16 xl:text-text18 border-[1.5px] border-gray-200 text-[#565656]" />
                        </div>
                      </div>

                      <div class="flex flex-col gap-2" data-aos="fade-up" data-aos-offset="150">
                        <label for="email"
                          class="font-moderat_Medium text-text12 md:text-text14  text-[#565656]">E-mail</label>
                        <input id="email" type="email" name='email' placeholder="Correo electrónico"
                          value="{{ $detalleUsuario[0]->email ?? '' }}"
                          class="w-full py-3 px-4 focus:outline-none placeholder-gray-400 font-moderat_Regular text-text16 xl:text-text18 border-[1.5px] border-gray-200 text-[#565656]" />
                      </div>

                      <div class="flex flex-col gap-2" data-aos="fade-up" data-aos-offset="150">
                        <label for="celular"
                          class="font-moderat_Medium text-text12 md:text-text14  text-[#565656]">Celular</label>
                        <input id="celular" name="phone" type="tel" placeholder="(+51) 000 000 000"
                          value="{{ $detalleUsuario[0]->phone ?? '' }}"
                          class="w-full py-3 px-4 focus:outline-none placeholder-gray-400 font-moderat_Regular text-text16 xl:text-text18 border-[1.5px] border-gray-200 text-[#565656]" />
                      </div>
                    </div>
                  </div>

                  <div class="flex flex-col gap-5 pb-10 border-b-2 border-[#565656]" data-aos="fade-up"
                    data-aos-offset="150">
                    <h2 class="font-moderat_700 text-text20 xl:text-text22 text-[#151515]">
                      Dirección de envío
                    </h2>
                    <div class="flex flex-col gap-5">
                      <div class="flex flex-col gap-5">
                        <div class="flex flex-col gap-2 z-[45]" data-aos="fade-up" data-aos-offset="150">
                          <label
                            class="font-moderat_Medium text-text12 md:text-text14  text-[#565656]">Departamento</label>


                          <!-- combo -->


                          <select disabled
                            class=" font-moderat_Regular text-text16 md:text-text18 mr-20 text-[#6C7275] border-[1.5px] border-gray-200  py-3 px-4"
                            name="" id="">
                            <option value="">selecciona un Departamento</option>
                            @foreach ($departamento as $item)
                              @if ($addresDetail->departamento_id == $item->id)
                                <option value="{{ $item->id }} " selected>
                                  {{ $item->description }}
                                </option>
                              @endif
                            @endforeach
                          </select>



                        </div>

                        <div class="flex flex-col gap-2 z-[40]" data-aos="fade-up" data-aos-offset="150">
                          <label class="font-moderat_Medium text-text12 md:text-text14 text-[#565656]">
                            Provincia
                          </label>
                          <select disabled
                            class=" font-moderat_Regular text-text16 md:text-text18 mr-20 text-[#6C7275] border-[1.5px] border-gray-200  py-3 px-4"
                            name="" id="">
                            <option value="">selecciona una Provincia</option>
                            @foreach ($provincias as $item)
                              @if ($addresDetail->provincia_id == $item->id)
                                <option value="{{ $item->id }} " selected>
                                  {{ $item->description }}
                                </option>
                              @endif
                            @endforeach
                          </select>
                        </div>

                        <div class="flex flex-col gap-2 z-[30]" data-aos="fade-up" data-aos-offset="150">
                          <label class="font-moderat_Medium text-text12 md:text-text14 text-[#565656]">
                            Distrito
                          </label>

                          <select disabled
                            class=" font-moderat_Regular text-text16 md:text-text18 mr-20 text-[#6C7275] border-[1.5px] border-gray-200  py-3 px-4"
                            name="" id="">
                            <option value="">selecciona un distrito</option>
                            @foreach ($distritos as $item)
                              @if ($addresDetail->distrito_id == $item->id)
                                <option value="{{ $item->id }} " selected>
                                  {{ $item->description }}
                                </option>
                              @endif
                            @endforeach
                          </select>
                        </div>

                        <div class="flex flex-col gap-2" data-aos="fade-up" data-aos-offset="150">
                          <label for="nombre_calle"
                            class="font-moderat_Medium text-text12 md:text-text14  text-[#565656]">Avenida / Calle /
                            Jirón</label>

                          <input id="nombre_calle" name="dir_av_calle" type="text"
                            placeholder="Ingresa el nombre de la calle"
                            class="w-full py-3 px-4 focus:outline-none placeholder-gray-400 font-moderat_Regular text-text16 md:text-text18 border-[1.5px] border-gray-200 text-[#565656]"
                            value="{{ $addresDetail->dir_av_calle ?? '' }}" />
                        </div>
                      </div>
                      <div>
                        <div class="flex flex-col md:flex-row gap-5" data-aos="fade-up" data-aos-offset="150">
                          <div class="basis-1/2 flex flex-col gap-2">
                            <label for="numero_calle"
                              class="font-moderat_Medium text-text12 md:text-text14  text-[#565656]">Número
                            </label>

                            <input id="numero_calle" name="dir_numero" type="text"
                              placeholder="Ingresa el número de la calle"
                              class="w-full py-3 px-4 focus:outline-none placeholder-gray-400 font-moderat_Regular text-text16 md:text-text18 border-[1.5px] border-gray-200 text-[#565656]"
                              value="{{ $addresDetail->dir_numero ?? '' }}" />
                          </div>

                          <div class="basis-1/2 flex flex-col gap-2" data-aos="fade-up" data-aos-offset="150">
                            <label for="direccion"
                              class="font-moderat_Medium text-text12 md:text-text14  text-[#565656]">Dpto./
                              Interior/ Piso/ Lote/ Bloque
                              (opcional)</label>

                            <input id="direccion" type="text" name="dir_bloq_lote"
                              placeholder="Ejem. Casa 3, Dpto 101"
                              class="w-full py-3 px-4 focus:outline-none placeholder-gray-400 font-moderat_Regular text-text16 md:text-text18 border-[1.5px] border-gray-200 text-[#565656]"
                              value="{{ $addresDetail->dir_bloq_lote ?? '' }}" />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="flex flex-col gap-5 pb-10" data-aos="fade-up" data-aos-offset="150">
                    <h2 class="font-moderat_700 text-text20 xl:text-text22 text-[#151515]">
                      Método de pago
                    </h2>
                    <div class="w-full flex flex-col gap-5 border-dashed pb-10 border-b-2 border-[#E8ECEF]">
                      <div class="flex items-center ps-4 border border-gray-200" data-aos="fade-up"
                        data-aos-offset="150">
                        <input type="radio" id="bordered-radio-tarjeta" name="bordered-radio-tarjetas"
                          value="credit" class="focus:ring-transparent w-5 h-5 cursor-pointer  cuentas" />
                        <label for="bordered-radio-tarjeta"
                          class="w-full py-4 ms-2 text-text16 md:text-text18 font-moderat_Regular text-[#6C7275] flex justify-between items-center px-4">
                          <span>Tarjeta de crédito</span>
                        </label>
                      </div>

                      <div class="flex items-center ps-4 border border-gray-200" data-aos="fade-up"
                        data-aos-offset="150">
                        <input type="radio" id="bordered-radio-debito" name="bordered-radio-tarjetas" value="debit"
                          class="focus:ring-transparent w-5 h-5 cursor-pointer cuentas" />
                        <label for="bordered-radio-debito"
                          class="w-full py-4 ms-2 text-text16 md:text-text18 font-moderat_Regular text-[#6C7275] flex justify-between items-center px-4">
                          <span>Tarjeta de Débito</span>
                        </label>
                      </div>

                      <div class="flex items-center ps-4 border border-gray-200" data-aos="fade-up"
                        data-aos-offset="150">
                        <input type="radio" id="bordered-radio-cuenta" name="bordered-radio-tarjetas"
                          value="transfer" class="focus:ring-transparent w-5 h-5 cursor-pointer cuentas inputVoucher" />
                        <label for="bordered-radio-cuenta"
                          class="w-full py-4 ms-2 text-text16 md:text-text18 font-moderat_Regular text-[#6C7275] flex justify-between items-center px-4">
                          <span>Depósito a cuenta</span>
                        </label>
                      </div>

                      <div class="deposito__cuenta hidden">
                        <div class="flex justify-between items-center text-[#6C7275] px-16 voucher">
                          <div>
                            <p class="font-moderat_Medium">Banco - Interbank</p>
                            <p class="font-moderat_Regular">
                              N. Cuenta Corriente
                            </p>
                            <p class="font-moderat_Regular">4394564564687656</p>
                          </div>

                          <div>
                            <label for="upload" class="font-moderat_Bold text-text12 cursor-pointer">Envía tu
                              comprobante</label>
                            <input type="file" class="hidden" id="upload" />
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="pt-5">
                      <div class="flex flex-col gap-5">
                        <div class="flex flex-col gap-2" data-aos="fade-up" data-aos-offset="150">
                          <label for="nombre_tarjeta"
                            class="font-moderat_Medium text-text12 md:text-text14 text-[#6C7275]">Nombre
                            de la tarjeta</label>
                          <input id="nombre_tarjeta" type="text" placeholder="Nombre"
                            class="w-full py-3 px-4 focus:outline-none placeholder-gray-400 font-moderat_Regular text-text16 md:text-text18 border-[1.5px] border-gray-200" />
                        </div>

                        <div class="flex flex-col gap-2" data-aos="fade-up" data-aos-offset="150">
                          <label for="numero_tarjeta"
                            class="font-moderat_Medium text-text12 md:text-text14 text-[#6C7275]">Número
                            de tarjeta</label>
                          <input id="numero_tarjeta" type="text" placeholder="1234 12345 1234"
                            class="w-full py-3 px-4 focus:outline-none placeholder-gray-400 font-moderat_Regular text-text16 md:text-text18 border-[1.5px] border-gray-200" />
                        </div>

                        <div class="flex flex-col md:flex-row gap-5" data-aos="fade-up" data-aos-offset="150">
                          <div class="basis-1/2 flex flex-col gap-2">
                            <label for="fecha_caducidad"
                              class="font-moderat_Medium text-text12 md:text-text14 text-[#6C7275]">Fecha
                              de caducidad</label>
                            <input id="fecha_caducidad" type="text" placeholder="MM/AA"
                              class="w-full py-3 px-4 focus:outline-none placeholder-gray-400 font-moderat_Regular text-text16 md:text-text18 border-[1.5px] border-gray-200" />
                          </div>

                          <div class="basis-1/2 flex flex-col gap-2">
                            <label for="CVC"
                              class="font-moderat_Medium text-text12 md:text-text14 text-[#6C7275]">CVC</label>
                            <input id="CVC" type="text" placeholder="Código CVC"
                              class="w-full py-3 px-4 focus:outline-none placeholder-gray-400 font-moderat_Regular text-text16 md:text-text18 border-[1.5px] border-gray-200" />
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="pt-10" data-aos="fade-up" data-aos-offset="150">
                      <button id="pagarProductos"
                        class="text-white bg-[#0051FF] w-full py-3 cursor-pointer border-2 font-moderat_Bold text-text16 xl:text-text18 inline-block text-center border-none">
                        Pagar
                      </button>
                    </div>
                  </div>
                </div>
              </form>

            </div>
          </div>
        </div>

        <div class="basis-5/12 flex flex-col justify-start gap-10 pt-5 md:pt-0" data-aos="fade-up"
          data-aos-offset="150">
          <h2 class="font-moderat_700 text-text28 xl:text-text30 text-[#151515]">
            Resumen del pedido
          </h2>

          <div>
            <div class="flex flex-col gap-10" id="itemsCarritocheck">

            </div>

            <div class="flex flex-col gap-5 mt-10">
              <div
                class="text-[#141718] flex justify-between items-center border-b-[1px] border-[#E8ECEF] pb-5 text-text16 md:text-text18"
                data-aos="fade-up" data-aos-offset="150">
                <p class="font-moderat_Regular">Envío</p>
                <p class="font-moderat_Bold" id='MontoEnvio'></p>
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
                <p id="totalDetalle">s/ 234.00</p>
              </div>
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

      $('#subtotalDetalle').text(`S/. ${suma} `)
      const opciones = document.getElementsByName('bordered-radio');

      // Iterar sobre los radio buttons para encontrar el que está seleccionado

      $("#MontoEnvio").text('S/. ' + valorSeleccionado)

      // El valor de valorSeleccionado es el valor del radio button seleccionado


      total = Number(suma) + Number(valorSeleccionado)

      let carrito = Local.get('carrito')
      // carrito = [...carrito, carrito.total]
      Local.set("carrito", carrito)

      $('#totalDetalle').text(`S/. ${total} `)
      return {
        total,
        suma
      }

    }
  </script>
  <script>
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

            window.location.href =
              `/exito?codigoCompra=${response.codigoCompra}`
          }, 2000);
          codigoCompra
        },
        error: function(error) {
          console.log(error);
        }
      });

    })
  </script>


@stop

@stop
