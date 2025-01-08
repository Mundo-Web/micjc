let articulosCarrito = [];

function mostrarTotalItems() {
  let articulos = Local.get('carrito')
  let contarArticulos = articulos.reduce((total, articulo) => {
    return total + articulo.cantidad;
  }, 0);

  $('#itemsCount').text(contarArticulos)
}
$(document).ready(function () {
  mostrarTotalItems()
})




function calcularTotal() {
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

  $('#itemsTotal').text(`S/. ${suma.toFixed(2)} `)

}

function deleteOnCarBtn(id, operacion) {
  const prodRepetido = articulosCarrito.map(item => {
    if (item.id === id && item.cantidad > 0) {
      item.cantidad -= Number(1);
      if (item.cantidad == 0) return null;
      return item; // retorna el objeto actualizado 
    } else {
      return item; // retorna los objetos que no son duplicados 
    }

  }).filter(Boolean);
  Local.set('carrito', articulosCarrito)
  limpiarHTML()
  PintarCarrito()


}

function addOnCarBtn(id, operacion) {



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
  limpiarHTML()
  PintarCarrito()


}

function deleteItem(id) {


  articulosCarrito = articulosCarrito.filter(objeto => {
    return !(objeto.id === id);

  });

  Local.set('carrito', articulosCarrito)
  limpiarHTML()
  PintarCarrito()
  pintarCantidad()
}


let url = window.location.href;

$(document).ready(function () {
  articulosCarrito = Local.get('carrito') || [];

  PintarCarrito();
});

function limpiarHTML() {
  //forma lenta 
  /* contenedorCarrito.innerHTML=''; */
  $('#itemsCarrito').html('')


}



function PintarCarrito() {

  let itemsCarrito = $('#itemsCarrito')

  let articulosCarrito = (Local.get('carrito') ?? []).filter(x => x.cantidad > 0);
  Local.set('carrito', articulosCarrito);

  itemsCarrito.html('');

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
                      <span  class="font-semibold text-[12px]">${element.cantidad}</span>
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






$('#btnAgregarCarrito').on('click', function (e) {
  let url = window.location.href;
  let partesURl = url.split('/')
  let item = partesURl[partesURl.length - 1]
  let cantidad = Number($('#cantidadInput').val())
  item = item.replace('#', '')



  // id='nodescuento'

  console.log('agregando')
  $.ajax({

    url: "/carrito/buscarProducto",
    method: 'POST',
    data: {
      _token: $('input[name="_token"]').val(),
      id: item,
      cantidad,


    },
    success: function (success) {


      let {
        producto,
        id,
        descuento,
        precio,
        imagen,

      } = success.data

      let cantidad = Number(success.cantidad)
      let detalleProducto = {
        id,
        producto,
        descuento,
        precio,
        imagen,
        cantidad,

      }



      // validar si es un color diferente y pintarlo 
      let existeArticulo = articulosCarrito.some(item => item.id === detalleProducto.id
      )
      if (existeArticulo) {
        //sumar al articulo actual 
        const prodRepetido = articulosCarrito.map(item => {
          if (item.id === detalleProducto.id) {
            item.cantidad += Number(detalleProducto.cantidad);
            return item; // retorna el objeto actualizado 
          } else {
            return item; // retorna los objetos que no son duplicados 
          }

        });
      } else {
        articulosCarrito = [...articulosCarrito, detalleProducto]

      }

      Local.set('carrito', articulosCarrito)
      let itemsCarrito = $('#itemsCarrito')
      let ItemssubTotal = $('#ItemssubTotal')
      let itemsTotal = $('#itemsTotal')
      limpiarHTML()
      PintarCarrito()
      mostrarTotalItems()

      //actualizar contador de articulos carrito
      pintarCantidad()

      Swal.fire({

        icon: "success",
        title: `Producto agregado correctamente`,
        showConfirmButton: true


      });
    },
    error: function (error) {
      console.log(error)
    }

  })



  // articulosCarrito = {...articulosCarrito , detalleProducto }
})



function pintarCantidad() {
  let carritoCantidad = Local.get('carrito')


  if (typeof carritoCantidad !== 'undefined' && carritoCantidad !== null) {
    // La variable carritoCantidad está definida y no es null
    let total = carritoCantidad.length
    if (total == 0) {

      $('#imgCantidad').attr('hidden', true);


    } else {
      $('#imgCantidad').attr('hidden', false);

      $('#spanCantidad').text(total)

    }


  } else {

    $('#imgCantidad').attr('hidden', true);
  }

}
pintarCantidad()

