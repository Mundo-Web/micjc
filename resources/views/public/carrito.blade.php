@extends('components.public.matrix')

@section('css_importados')

@stop


@section('content')


  <main>
    <section class="w-11/12 mx-auto mt-8 mb-16 flex flex-col gap-5">
      <div class="text-text14 xl:text-text16">
        <a href="" class="font-moderat_400 text-[#565656]">
          Home
        </a>
        <span>></span>
        <a href="/carrito" class="font-moderat_700 text-[#141718]">Carrito</a>
      </div>
      {{-- <div class="flex md:gap-20">
        <div
          class="flex flex-col md:flex-row md:justify-between md:items-center md:basis-7/12 w-full md:w-auto text-text18">
          <p class="font-moderat_700 text-[#21201E] border-b-[1px] border-[#6C7275] py-4 basis-1/3 h-full text-center">
            <span class="flex items-center h-full justify-start">Carro de la compra</span>
          </p>

          <p
            class="font-moderat_700 text-[#C8C8C8] border-b-[1px] border-[#6C7275] py-4 basis-1/3 h-full text-center flex justify-start md:justify-center items-center">
            <span class="flex items-center h-full">Detalles de pago</span>
          </p>

          <p class="font-moderat_700 text-[#C8C8C8] border-b-[1px] border-[#6C7275] py-4 basis-1/3 h-full text-center">
            <span class="flex items-center h-full justify-start md:justify-end">Orden completada</span>
          </p>
        </div>
        <div class="md:basis-5/12"></div>
      </div> --}}
      {{-- <div class="flex flex-col font-moderat_700">
        <label for="email" class=" font-medium text-[12px] text-[#6C7275]">E-mail</label>

        <input id="email" type="email" placeholder="Correo electrónico" required name="email" value=""
          class=" py-3 px-4 focus:outline-none placeholder-gray-400 font-normal text-[16px] border-[1.5px] border-gray-200 rounded-xl text-[#6C7275]" />


      </div>
      <h2 class="font-moderat_700 font-semibold text-[20px] text-[#151515]" hidden>
        Dirección de envío
      </h2> --}}
      {{-- <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5" hidden>


        <div class="md:col-span-1">
          <label for="costo_x_art" class="font-moderat_700">Departamento</label>
          <div class="relative mb-2  mt-2">
            <select name="departamento_id" id="departamento_id"
              class="selectpicker font-moderat_700 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
              <option value="">Seleccionar Departamento </option>
              @foreach ($departments as $item)
                <option value="{{ $item->id }}">{{ $item->description }}</option>
              @endforeach

            </select>
          </div>
        </div>

        <div class="md:col-span-1 " id="cont_provincia">

          <label for="costo_x_art" class="font-moderat_700">Provincias</label>
          <div class="font-moderat_700 relative mb-2  mt-2">
            <select name="provincia_id" id="provincia_id"
              class=" selectpicker mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
              <option value="">Seleccionar Provincia </option>
            </select>
          </div>
        </div>

        <div class="md:col-span-1 " id="cont_distrito">
          <label for="costo_x_art" class="font-moderat_700">Distrito</label>
          <div class="font-moderat_700 relative mb-2  mt-2">
            <select name="distrito_id" id="distrito_id"
              class="selectpicker mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
              <option value="">Seleccionar Distrito </option>

            </select>
          </div>
        </div>





      </div> --}}
      <div class="flex flex-col md:flex-row gap-10 md:gap-20">
        <div class="basis-7/12 flex flex-col" id="itemsCarritocheck">




        </div>

        <div class="basis-5/12 flex flex-col justify-start gap-5">
          <h2 class="font-moderat_700 text-text20 xl:text-text22 text-[#151515] pt-3">
            Resumen de la compra
          </h2>

          <div>
            <div class="flex flex-col gap-5">
              <div class="w-full flex flex-col gap-5" id="contenedorEnvios" hidden>

                <span class="font-bold "> Seleccione una opcion para el envio </span>
                {{-- <div class="flex items-center ps-4 border border-gray-200 rounded dark:border-gray-700">
                  <input type="radio" id="bordered-radio-2" name="bordered-radio" value="15"
                    class="background-radius w-5 h-5" />
                  <label for="bordered-radio-2"
                    class="w-full py-4 ms-2 text-[16px] font-normal text-[#151515] flex justify-between items-center px-4">
                    <span>Envío express</span>
                    <span>s/ 15.00</span>
                  </label>
                </div> --}}


              </div>

              <div class="text-[#151515] flex justify-between items-center">
                <p class="font-normal text-[14px]">SubTotal</p>
                <span id="itemSubtotal" class="font-semibold text-[14px]">s/ 0.00</span>
              </div>

              <div class="text-[#151515] flex justify-between items-center">
                <p class="font-semibold text-[20px]">Total</p>
                <span id="itemsTotalCheck" class="font-semibold text-[20px]">s/ 0.00</span>
              </div>

              <button id="btnSiguiente" data-aos="fade-up" data-aos-offset="150" href="{{ route('detallesPago') }}"
                class="text-white bg-[#0051FF] w-full py-3 cursor-pointer font-moderat_Bold text-text16 xl:text-text18 inline-block text-center hover:bg-sky-900 md:duration-300 mt-5">
                Siguiente
              </button>
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

  <script>
    var appUrl = '{{ env('APP_URL') }}';

    function pintarCarritoCheckout(carritoItems) {

      let itemsCarrito = $('#itemsCarritocheck')

      carritoItems.forEach(element => {
        let plantilla = `
        <div data-aos="fade-up" data-aos-offset="150">
            <div class="flex flex-col lg:flex-row pb-5 border-b-[2px] border-[#E8ECEF] gap-5">
              <div class="w-full basis-5/12">
                <p class="font-moderat_Bold text-text14 xl:text-text16 text-[#141718] text-left py-4">
                  Producto
                </p>

                <div class="flex justify-start items-center gap-5 w-full">
                  <img src="${appUrl}/${element.imagen}" alt="producto" class="h-24 object-cover" />
                  
                  <div class="flex flex-col justify-start items-start w-full gap-1 md:gap-2">
                    <h3 class="font-moderat_700 text-text14 xl:text-text16 text-[#151515]">
                       ${element.producto} 
                    </h3>
                    
                    <div
                      class="font-moderat_Medium text-text12 xl:text-text14 text-[#6C7275] flex justify-between items-center gap-10 w-full md:w-auto">
                      <p>Eliminar</p>
                      <button class="cursor-pointer" onClick="(deleteItem2(${element.id}))">
                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none"
                          xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M0.529247 0.529247C0.789596 0.268897 1.21171 0.268897 1.47206 0.529247L5.00065 4.05784L8.52925 0.529247C8.7896 0.268897 9.21171 0.268897 9.47206 0.529247C9.73241 0.789596 9.73241 1.21171 9.47206 1.47206L5.94346 5.00065L9.47206 8.52925C9.73241 8.7896 9.73241 9.21171 9.47206 9.47206C9.21171 9.73241 8.7896 9.73241 8.52925 9.47206L5.00065 5.94346L1.47206 9.47206C1.21171 9.73241 0.789596 9.73241 0.529247 9.47206C0.268897 9.21171 0.268897 8.7896 0.529247 8.52925L4.05784 5.00065L0.529247 1.47206C0.268897 1.21171 0.268897 0.789596 0.529247 0.529247Z"
                            fill="#6C7275" />
                        </svg>
                      </butoon>
                    </div>
                  </div>
                </div>
              </div>
              <div class="flex gap-5 w-full text-center basis-7/12">
                <div class="flex w-20 justify-center text-[#151515] border-[1px] border-[#6C7275] rounded-md" style="
                        align-items: center;
                        height: 40px;
                        margin-top: 24%;
                      ">
                    <button type="button" onClick="(deleteOnCarBtn2(${element.id}, '-'))" class="  w-8 h-8 flex justify-center items-center ">
                      <span  class="text-[20px]">-</span>
                    </button>
                    <div class="w-8 h-8 flex justify-center items-center">
                      <span  class="font-semibold text-[12px]">${element.cantidad }</span>
                    </div>
                    <button type="button" onClick="(addOnCarBtn2(${element.id}, '+'))" class="  w-8 h-8 flex justify-center items-center ">
                      <span class="text-[20px]">+</span>
                    </button>
                  </div>

                <div class="flex-1">
                  <p class="font-moderat_Bold text-text14 xl:text-text16 text-[#141718] pt-4 pb-6 lg:pb-14">
                    Precio
                  </p>
                  <p class="font-moderat_Bold text-text18 xl:text-text20 text-[#151515]">
                    S/<span>${Number(element.precio).toFixed(2)}</span>
                  </p>
                </div>

                <div class="flex-1">
                  <p class="font-moderat_Bold text-text14 xl:text-text16 text-[#141718] pt-4 pb-6 lg:pb-14">
                    Sub Total
                  </p>
                  <p class="font-moderat_Bold text-text18 xl:text-text20 text-[#151515]">
                    S/<span>${Number(element.cantidad * element.precio).toFixed(2)}</span>
                  </p>
                </div>
              </div>
            </div>
          </div>
        
        `

        itemsCarrito.append(plantilla)

      });
    }
    $(document).ready(function() {


      $('.selectpicker').select2();

      let carrito = Local.get('carrito')

      pintarCarritoCheckout(carrito)
      $("#departamento_id").change(function() {
        //ni bien cambie el departamento capturamos
        //el valor del ID del valor seleccionado 
        departamento_id = $('#departamento_id').val();

        //ejecutamos el ajax
        $.ajax({
          url: "{{ route('prices.getProvincias') }}",
          dataType: "json",
          method: 'POST',
          data: {
            _token: $('input[name="_token"]').val(),
            id: departamento_id
          }
        }).done(function(res) {
          $('#provincia_id').empty();
          $('#provincia_id').append(
            '<option value="">Seleccionar Provincia</option>'
          )
          // $('#cont_provincia').toggleClass('opacity-15')
          $.each(res, function(key, value) {
            $('#provincia_id').append(
              '<option value="' + value['id'] + '">' + value['description'] + '</option>'
            )
          });
        });
      });


      $("#provincia_id").change(function() {
        //ni bien cambie el departamento capturamos
        //el valor del ID del valor seleccionado 
        provincia_id = $('#provincia_id').val();

        //ejecutamos el ajax
        $.ajax({
          url: "{{ route('prices.getDistrito') }}",
          dataType: "json",
          method: 'POST',
          data: {
            _token: $('input[name="_token"]').val(),
            id: provincia_id
          }
        }).done(function(res) {
          $('#distrito_id').empty();
          $('#distrito_id').append(
            '<option value="">Seleccionar Distrito</option>'
          )
          // $('#cont_distrito').toggleClass('opacity-15')
          $.each(res, function(key, value) {
            $('#distrito_id').append(
              '<option value="' + value['id'] + '">' + value['description'] + '</option>'
            )
          });
        });
      });

      $("#distrito_id").change(function() {
        console.log('eligio el distrito');

        let distrito_id = $('#distrito_id').val()

        $.ajax({
          url: "{{ route('prices.calculeEnvio') }}",
          dataType: "json",
          method: 'POST',
          data: {
            _token: $('input[name="_token"]').val(),
            id: distrito_id
          },
          success: function(response) {
            console.log(response.LocalidadParaEnvio)
            let EnviosDisponibles = response.LocalidadParaEnvio
            let htmlContent = ''
            let entrgaLocal = `<div class="flex items-center ps-4 border border-gray-200 rounded dark:border-gray-700">
                      <input type="radio" id="bordered-radio-2" name="bordered-radio" value="0.00"
                          class="background-radius w-5 h-5" />
                      <label for="bordered-radio-2"
                          class="w-full py-4 ms-2 text-[16px] font-normal text-[#151515] flex justify-between items-center px-4">
                          <span> Recojo en tienda </span>
                          <span>S/ 00.00</span>
                      </label>
                  </div>`

            let isLocal = false

            EnviosDisponibles.forEach(envio => {
              if (envio.local == 1) {
                isLocal = true
                entrgaLocal += `
                    <div class="flex items-center ps-4 border border-gray-200 rounded dark:border-gray-700">
                            <input type="radio" id="bordered-radio-2" name="bordered-radio" value="${envio.price}"
                                class="background-radius w-5 h-5"/>
                            <label for="bordered-radio-2"
                                class="w-full py-4 ms-2 text-[16px] font-normal text-[#151515] flex justify-between items-center px-4">
                                <span>${envio.local == 1 ? 'Entrega local': 'Envio Courier'}</span>
                                <span>S/ ${envio.price}</span>
                            </label>
                        </div>
                  `

              } else {
                htmlContent += `
                  <div class="flex items-center ps-4 border border-gray-200 rounded dark:border-gray-700">
                          <input type="radio" id="bordered-radio-2" name="bordered-radio" value="${envio.price}"
                              class="background-radius w-5 h-5"/>
                          <label for="bordered-radio-2"
                              class="w-full py-4 ms-2 text-[16px] font-normal text-[#151515] flex justify-between items-center px-4">
                              <span>${envio.local == 1 ? 'Entrega local': 'Envio Courier'}</span>
                              <span>S/ ${envio.price}</span>
                          </label>
                      </div>
                `
              }


            })


            if (isLocal) {
              $('#contenedorEnvios').html(entrgaLocal);
            } else {
              $('#contenedorEnvios').html(htmlContent);

            }

          }
        })
      });
    })
  </script>


  <script src="{{ asset('js/carrito.js') }}?v=totalcount.fixed"></script>
@section('scripts_importados')
  <script>
    function PintarCarrito() {

      let itemsCarrito = $('#itemsCarrito')

      articulosCarrito.forEach(element => {
        let plantilla = `<div class="flex justify-between border-b-[1px] py-1">
              <div class="flex flex-row justify-center items-center gap-2">
                
                <div class="bg-[#F3F5F7] rounded-md p-1 min-w-20">
                  
                  <img src="${appUrl}/${element.imagen}" alt="producto" class="w-20" />

                </div>

                <div class="flex flex-col gap-1 py-2">
                  <h3 class="font-semibold font-Montserrat_Regular text-[12px] uppercase text-[#151515] line-clamp-2 max-w-40">
                    ${element.producto} 
                  </h3>
                 
                  <div class="flex w-20 justify-center text-[#151515] border-[1px] border-[#6C7275] rounded-md">
                    <button type="button" onClick="(deleteOnCarBtn(${element.id}, '-'))" class="  w-8 h-8 flex justify-center items-center ">
                      <span  class="text-[20px]">-</span>
                    </button>
                    <div class="w-8 h-8 flex justify-center items-center">
                      <span  class="font-semibold text-[12px]">${element.cantidad }</span>
                    </div>
                    <button type="button" onClick="(addOnCarBtn(${element.id}, '+'))" class="  w-8 h-8 flex justify-center items-center ">
                      <span class="text-[20px]">+</span>
                    </button>
                  </div>
                </div>
              </div>

              <div class="flex flex-col justify-center py-2 gap-2 items-center pr-2 min-w-20">
                <p class="font-semibold font-Montserrat_Regular text-[14px] text-[#151515]">
                  S/ ${Number(element.descuento) !== 0 ? element.descuento : element.precio}
                </p>
                <div class="flex items-center">
                  <button type="button" onClick="(deleteItem(${element.id}, '${element.talla}'))" class="  w-8 h-8 flex justify-center items-center ">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                  </svg>
                  </button>
  
                </div>
              </div>
            </div>`

        itemsCarrito.append(plantilla)

      });

      calcularTotal()
      mostrarTotalItems()
    }

    var checkedRadio = false;
    $("#btnSiguiente").on('click', function(e) {



      // let email = $('#email').val()
      // if (email == '' || email == null) {
      //   e.preventDefault()
      //   Swal.fire({
      //     icon: "warning",
      //     title: "Opss ",
      //     text: 'Recuerde ingresar un correo'
      //   });
      //   return
      // }
      // if (!checkedRadio) {
      //   e.preventDefault()
      //   Swal.fire({
      //     icon: "warning",
      //     title: "Opss ",
      //     text: 'Recuerde elegir un metodo de envio'
      //   });
      //   return
      // }
      // $(this).addClass('opacity-50 cursor-not-allowed').prop('disabled', true);
      let totalCarrito = calcularTotal2()

      $.ajax({
        url: '{{ route('procesar.carrito') }}',
        method: 'POST',
        data: {
          _token: $('input[name="_token"]').val(),
          carrito: Local.get('carrito'),
          // email,
          // distrito: $('#distrito_id').val(),
          // departamento: $('#departamento_id').val(),
          // provincia: $('#provincia_id').val(),
          total: JSON.stringify(totalCarrito)
        },
        success: function(response) {
          Swal.close();
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
              `/detallesPago?codigoCompra=${response.codigoOrden}&first=${response.primeraVez}`
          }, 2000);
        },
        error: function(response) {

          $("#btnSiguiente").removeClass('opacity-50 cursor-not-allowed').prop('disabled', false);
          const customMessages = response.responseJSON.message?.validator?.customMessages;

          if (!customMessages) {
            Swal.close();
            Swal.fire({
              title: `Opps!!`,
              text: response.responseJSON.errors,
              icon: "error",
            });
          }
          return
          const messages = Object.keys(customMessages).map(key => customMessages[key]);
          Swal.close();
          Swal.fire({
            title: `Opps!!`,
            text: messages,
            icon: "error",
          });
        }
      });


    })

    function deleteOnCarBtn2(id, operacion) {
      const prodRepetido = articulosCarrito.map(item => {
        if (item.id === id && item.cantidad > 0) {
          item.cantidad -= Number(1);
          return item; // retorna el objeto actualizado 
        } else {
          return item; // retorna los objetos que no son duplicados 
        }

      });
      Local.set('carrito', articulosCarrito)
      limpiarcheckout2()
      PintarCarrito()
      pintarCarritoCheckout(articulosCarrito)
      calcularTotal2()


    }

    function deleteItem2(id) {


      articulosCarrito = articulosCarrito.filter(objeto => {
        return !(objeto.id === id);

      });

      Local.set('carrito', articulosCarrito)
      limpiarcheckout2()
      PintarCarrito()
      pintarCarritoCheckout(articulosCarrito)
      calcularTotal2()

    }

    function addOnCarBtn2(id, operacion) {



      const prodRepetido = articulosCarrito.map(item => {
        if (item.id === id) {
          item.cantidad += Number(1);
          return item; // retorna el objeto actualizado 
        } else {
          return item; // retorna los objetos que no son duplicados 
        }

      });
      Local.set('carrito', articulosCarrito)
      // localStorage.setItem('carrito', JSON.stringify(articulosCarrito));
      limpiarcheckout2()
      PintarCarrito()
      pintarCarritoCheckout(articulosCarrito)
      calcularTotal2()



    }

    function limpiarcheckout2() {
      $('#itemsCarritocheck').html('')
    }

    function calcularTotal2() {
      console.log('calculando total2 ')
      let articulos = Local.get('carrito')
      let total = articulos.map(item => {
        let monto
        if (Number(item.descuento) !== 0) {
          monto = item.cantidad * Number(item.descuento)
        } else {
          monto = item.cantidad * Number(item.precio)

        }
        return monto

      })
      const suma = total.reduce((total, elemento) => total + elemento, 0);

      $('#itemSubtotal').text(`S/. ${suma.toFixed(2)} `)
      const opciones = document.getElementsByName('bordered-radio');

      // Iterar sobre los radio buttons para encontrar el que está seleccionado
      let valorSeleccionado = 0;
      // opciones.forEach(opcion => {
      //   if (opcion.checked) {
      //     valorSeleccionado = opcion.value;
      //   }
      // });

      // El valor de valorSeleccionado es el valor del radio button seleccionado


      total = Number(suma) + Number(valorSeleccionado)

      let carrito = Local.get('carrito')
      // carrito = [...carrito, carrito.total]
      Local.set("carrito", carrito)

      $('#itemsTotalCheck').text(`S/. ${total.toFixed(2)} `)
      return {
        total,
        suma
      }

    }

    calcularTotal2()

    $(document).on('click', 'input[type="radio"][name="bordered-radio"]', function() {
      // Obtener el valor del radio button seleccionado
      const valorSeleccionado = $(this).val();


      articulosCarrito = Local.get('carrito')
      console.log(articulosCarrito)
      let carritoCheck = articulosCarrito.map(item => {
        let obj = {
          id: item.id,
          producto: item.producto,
          descuento: item.descuento,
          precio: item.precio,
          imagen: item.imagen,
          cantidad: item.cantidad,

          tipo_envio: Number(valorSeleccionado),

        };
        return obj
      })

      Local.set("carrito", carritoCheck)
      checkedRadio = true

      // Hacer algo con el valor seleccionado, por ejemplo, imprimirlo en la consola
      $('#itemsCarrito').html('')
      PintarCarrito()
      calcularTotal2()
    });
  </script>
@stop

@stop
