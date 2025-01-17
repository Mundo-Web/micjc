<div class="{{ $class }}">
  <input type="text" placeholder="Buscar producto" id="inputHeader" autocomplete="off"
    class="placeholder:text-[#CCCCCC] font-moderat_400 text-center text-[#CCCCCC] w-full border-none outline-none focus:outline-none pl-5 pr-4 py-2 rounded-2xl focus:border-[#CCCCCC] focus:ring-[#CCCCCC]" />
  <div class="absolute inset-y-0 left-5 sm:left-[35%] lg:left-0 flex items-center pl-3">
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path
        d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z"
        stroke="#CCCCCC" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
      <path d="M21.0004 21.0004L16.6504 16.6504" stroke="#CCCCCC" stroke-width="1.33333" stroke-linecap="round"
        stroke-linejoin="round" />
    </svg>
  </div>
  <div id="resultadoBusqueda"
    class=" absolute rounded-2xl top-14 left-0 w-full group z-60 overflow-y-scroll max-h-80 hidden animate-fade-up bg-white shadow">

  </div>
</div>

<script>
  let timerInput;
  let controller = new AbortController(); // Controlador para abortar la solicitud
  let skip = 0; // Inicializar skip

  function buscarProductos(valorInput, take = 10, skip = 0) {
    controller.abort(); // Abortamos la solicitud anterior si existe
    if (valorInput.length == 0) return
    controller = new AbortController(); // Creamos un nuevo controlador

    fetch("{{ route('buscarProductos') }}", {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          'X-CSRF-TOKEN': '{{ csrf_token() }}' // Asegúrate de incluir el token CSRF
        },
        body: JSON.stringify({
          valorInput,
          take,
          skip
        }),
        signal: controller.signal // Añadimos la señal del controlador
      })
      .then(response => response.json())
      .then(success => {
        $('#resultadoBusqueda').removeClass('hidden');

        let container2 = document.createElement('div');
        container2.id = "listContainer";
        container2.className = "flex flex-col justify-start z-[100]";

        // Verificar si hay resultados
        if (success.data.length === 0) {
          if (skip === 0) {
            // Mensaje para la primera búsqueda vacía
            container2.innerHTML = '<p class="text-center text-gray-500 py-2 px-4">No hay resultados.</p>';
          } else {
            // Mensaje para el scroll loading sin más resultados
            container2.innerHTML =
              '<p class="text-center text-gray-500 py-2 px-4">No se encontraron más resultados.</p>';
          }
        } else {
          // Agregar enlaces a container2
          success.data.forEach(element => {
            let link = $('<a>', {
              href: `/producto/${element.id}`,
              class: "bg-white w-full py-3 text-left px-4 text-opacity-80 hover:text-white hover:bg-[#3374FF] text-text16 border-b",
            }).html(`<div class="flex gap-4">
              <img src="/${element.imagen}" class="w-12 h-12 object-cover object-center rounded shadow"/>
              <div>
                <p class="line-clamp-1 text-ellipsis font-Montserrat_Bold">${element.producto}</p>
                <span class="font-extraligth font-Montserrat_Normal">S/. ${element.precio}</span>
              </div>
            <div>`);

            $(container2).append(link);
          });
        }

        // Si skip es 0, limpiar el contenedor, de lo contrario, agregar los nuevos resultados
        if (skip === 0) {
          $('#resultadoBusqueda').html(container2); // Limpiar y agregar nuevos resultados
        } else {
          $('#resultadoBusqueda').append(container2); // Agregar nuevos resultados
        }

        let parent = document.getElementById('resultadoBusqueda');
        if (parent) {
          parent.appendChild(container2);
        } else {
          console.error("El elemento 'resultadoBusqueda' no se encontró en el DOM.");
        }
      })
      .catch(error => {
        console.log(error);
      });
  }

  function showResults(e) {
    clearTimeout(timerInput);
    let valorInput = e.target.value;
    let parent = document.getElementById('resultadoBusqueda');
    parent.classList.remove("animate-alternate-reverse");
    parent.classList.remove("animate-delay-100");
    parent.classList.add("hidden");

    skip = 0; // Reiniciar skip al realizar una nueva búsqueda
    buscarProductos(valorInput, 10, skip);
  }

  $("#inputHeader").on('keyup', showResults);
  $('#inputHeader').on('focus', showResults);

  $('#resultadoBusqueda').on('scroll', function() {
    let scrollTop = $(this).scrollTop();
    let scrollHeight = $(this)[0].scrollHeight;
    let offsetHeight = $(this).outerHeight();

    // Verificar si se ha llegado al final del contenedor
    if (scrollTop + offsetHeight >= scrollHeight) {
      skip += 10; // Incrementar skip para cargar más productos
      let valorInput = $("#inputHeader").val(); // Obtener el valor actual del input
      buscarProductos(valorInput, 10, skip); // Llamar a la función para cargar más productos
    }
  });

  $(document).on('click', function(event) {
    if (!$(event.target).closest('#resultadoBusqueda, #inputHeader').length) {
      $('#resultadoBusqueda').addClass('animate-alternate-reverse animate-delay-100');
    }
  });
</script>
