<div class="{{ $class }}">
  <input type="text" placeholder="Buscar producto" id="inputHeader" autocomplete="off"
    class="placeholder:text-[#CCCCCC] text-center w-full border-none outline-none focus:outline-none pl-5 pr-4 py-2 rounded-lg" />
  <div class="absolute inset-y-0 left-[25%] sm:left-[35%] lg:left-0 flex items-center pl-3">
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path
        d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z"
        stroke="#CCCCCC" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
      <path d="M21.0004 21.0004L16.6504 16.6504" stroke="#CCCCCC" stroke-width="1.33333" stroke-linecap="round"
        stroke-linejoin="round" />
    </svg>
  </div>
  <div id="resultadoBusqueda"
    class=" absolute rounded-2xl top-11 left-0 w-full group z-60 overflow-y-scroll max-h-60 hidden animate-fade-up bg-white">

  </div>
</div>

<script>
  let timerInput

  $('#resultadoBusqueda').on('mouseleave', function() {
    $('#resultadoBusqueda').addClass('animate-alternate-reverse animate-delay-1000');

    // Puedes ejecutar aquí cualquier acción adicional que desees realizar
  });
  $("#inputHeader").on('keyup', function(e) {

    clearTimeout(timerInput);
    let parent = document.getElementById('resultadoBusqueda')
    parent.classList.remove("animate-alternate-reverse");
    parent.classList.remove("animate-delay-1000");
    parent.classList.add("hidden");



    let valorInput = e.target.value

    timerInput = setTimeout(() => {
      $.ajax({

        url: "{{ route('buscarProductos') }}",
        method: 'POST',
        data: {
          valorInput
        },


        success: function(success) {



          $('#resultadoBusqueda').removeClass('hidden');

          let container2 = document.createElement('div');
          container2.id = "listContainer"
          container2.className = "flex flex-col justify-start z-[100]";

          // Agregar enlaces a container2
          success.data.forEach(element => {
            // $('#resultadoBusqueda').removeClass('animate-reverse');

            let link = document.createElement('a');
            link.href = `/producto/${element.id}`;
            link.className =
              "bg-[#0051FF] bg-opacity-25 w-full py-3 text-left px-4 text-white font-moderat_Bold hover:bg-[#3374FF] text-text16";
            link.textContent = element.producto;
            container2.appendChild(link);
          });

          // Insertar container2 dentro de container1
          //   container1.appendChild(container2);

          // Actualizar el contenido del contenedor con id="resultadoBusqueda"
          //   $('#resultadoBusqueda').appendChild(container1);

          //   console.log(container1)
          $('#resultadoBusqueda').html('')
          parent.appendChild(container2);


        },
        error: function(error) {
          console.log(error)
        }

      })
    }, 1000);


  })
</script>
