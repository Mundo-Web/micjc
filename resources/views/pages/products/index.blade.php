<x-app-layout>
  <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">

    <section class="py-4 border-b border-slate-100 dark:border-slate-700">
      <div class="flex justify-between items-center">
        <a href="{{ route('products.create') }}"
          class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded text-sm">
          Agregar producto
        </a>
        
        <!-- Filtro de búsqueda -->
        <div class="flex items-center space-x-2">
          <form method="GET" action="{{ route('products.index') }}" class="flex items-center space-x-2">
            <input type="text" 
                   name="search" 
                   value="{{ request('search') }}"
                   placeholder="Buscar productos..." 
                   class="px-3 py-2 border border-gray-300 rounded-lg text-sm focus:ring-blue-500 focus:border-blue-500">
            <button type="submit" 
                    class="bg-gray-500 hover:bg-gray-700 text-white font-semibold py-2 px-4 rounded text-sm">
              Buscar
            </button>
            @if(request('search'))
              <a href="{{ route('products.index') }}" 
                 class="bg-gray-300 hover:bg-gray-400 text-gray-700 font-semibold py-2 px-4 rounded text-sm">
                Limpiar
              </a>
            @endif
          </form>
        </div>
      </div>
    </section>


    <div
      class="col-span-full xl:col-span-8 bg-white dark:bg-slate-800 shadow-lg rounded-sm border border-slate-200 dark:border-slate-700">


      <header class="px-5 py-4 border-b border-slate-100 dark:border-slate-700">
        <div class="flex justify-between items-center">
          <h2 class="font-semibold text-slate-800 dark:text-slate-100 text-2xl tracking-tight">
            Productos 
            @if(request('search'))
              <span class="text-sm text-gray-500">(Filtrando por: "{{ request('search') }}")</span>
            @endif
          </h2>
          <span class="text-sm text-gray-500">
            Total: {{ $products->total() }} productos
            @if($products->hasPages())
              | Página {{ $products->currentPage() }} de {{ $products->lastPage() }}
            @endif
          </span>
        </div>
      </header>
      <div class="p-3">

        <!-- Table -->
        <div class="overflow-x-auto">

          <table id="tabladatos" class="display text-lg" style="width:100%">
            <thead>
              <tr>
                <th>Producto</th>
                <th>Extracto</th>

                <th>Precio</th>


                <th>Stock</th>

                <th>Imagen</th>
                <th>Cyber</th>
                <th>Destacar</th>
                <th>Liquidacion</th>
                <th>Visible</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>

              @foreach ($products as $item)
                <tr>
                  <td>{{ $item->producto }}</td>
                  <td>{{ $item->extract }}</td>

                  <td>{{ $item->precio }}</td>


                  <td>{{ $item->stock }}</td>

                  <td class="px-3 py-2"><img class="w-20" src="{{ asset($item->imagen) }}" alt=""></td>

                  <td>
                    <form method="POST" action="">
                      @csrf
                      <input type="checkbox" id="hs-basic-usage"
                        class="check_v btn_swithc relative w-[3.25rem] h-7 p-px bg-gray-100 border-transparent text-transparent 
                              rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:ring-transparent disabled:opacity-50 disabled:pointer-events-none 
                              checked:bg-none checked:text-blue-600 checked:border-blue-600 focus:checked:border-blue-600 dark:bg-gray-800 dark:border-gray-700 
                              dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-600 before:inline-block before:size-6
                              before:bg-white checked:before:bg-blue-200 before:translate-x-0 checked:before:translate-x-full before:rounded-full before:shadow 
                              before:transform before:ring-0 before:transition before:ease-in-out before:duration-200 dark:before:bg-gray-400 dark:checked:before:bg-blue-200"
                        id='{{ 'v_' . $item->id }}' data-field='cyber' data-idService='{{ $item->id }}'
                        data-titleService='{{ $item->producto }}' {{ $item->cyber == 1 ? 'checked' : '' }}>
                      <label for="{{ 'v_' . $item->id }}"></label>
                    </form>



                  </td>

                  <td>
                    <form method="POST" action="">
                      @csrf
                      <input type="checkbox" id="hs-basic-usage"
                        class="check_v btn_swithc relative w-[3.25rem] h-7 p-px bg-gray-100 border-transparent text-transparent 
                              rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:ring-transparent disabled:opacity-50 disabled:pointer-events-none 
                              checked:bg-none checked:text-blue-600 checked:border-blue-600 focus:checked:border-blue-600 dark:bg-gray-800 dark:border-gray-700 
                              dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-600 before:inline-block before:size-6
                              before:bg-white checked:before:bg-blue-200 before:translate-x-0 checked:before:translate-x-full before:rounded-full before:shadow 
                              before:transform before:ring-0 before:transition before:ease-in-out before:duration-200 dark:before:bg-gray-400 dark:checked:before:bg-blue-200"
                        id='{{ 'v_' . $item->id }}' data-field='destacar' data-idService='{{ $item->id }}'
                        data-titleService='{{ $item->producto }}' {{ $item->destacar == 1 ? 'checked' : '' }}>
                      <label for="{{ 'v_' . $item->id }}"></label>
                    </form>



                  </td>
                  <td>
                    <form method="POST" action="">
                      @csrf
                      <input type="checkbox" id="hs-basic-usage"
                        class="check_v btn_swithc relative w-[3.25rem] h-7 p-px bg-gray-100 border-transparent text-transparent 
                              rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:ring-transparent disabled:opacity-50 disabled:pointer-events-none 
                              checked:bg-none checked:text-blue-600 checked:border-blue-600 focus:checked:border-blue-600 dark:bg-gray-800 dark:border-gray-700 
                              dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-600 before:inline-block before:size-6
                              before:bg-white checked:before:bg-blue-200 before:translate-x-0 checked:before:translate-x-full before:rounded-full before:shadow 
                              before:transform before:ring-0 before:transition before:ease-in-out before:duration-200 dark:before:bg-gray-400 dark:checked:before:bg-blue-200"
                        id='{{ 'v_' . $item->id }}' data-field='liquidacion' data-idService='{{ $item->id }}'
                        data-titleService='{{ $item->producto }}' {{ $item->liquidacion == 1 ? 'checked' : '' }}>
                      <label for="{{ 'v_' . $item->id }}"></label>
                    </form>



                  </td>


                  <td>
                    <form method="POST" action="">
                      @csrf
                      <input type="checkbox" id="switch_visible"
                        class="check_v btn_swithc relative w-[3.25rem] h-7 p-px bg-gray-100 border-transparent text-transparent 
                              rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:ring-transparent disabled:opacity-50 disabled:pointer-events-none 
                              checked:bg-none checked:text-blue-600 checked:border-blue-600 focus:checked:border-blue-600 dark:bg-gray-800 dark:border-gray-700 
                              dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-600 before:inline-block before:size-6
                              before:bg-white checked:before:bg-blue-200 before:translate-x-0 checked:before:translate-x-full before:rounded-full before:shadow 
                              before:transform before:ring-0 before:transition before:ease-in-out before:duration-200 dark:before:bg-gray-400 dark:checked:before:bg-blue-200"
                        id='{{ 'v_' . $item->id }}' data-field='visible' data-idService='{{ $item->id }}'
                        data-titleService='{{ $item->producto }}' {{ $item->visible == 1 ? 'checked' : '' }}>
                      <label for="{{ 'v_' . $item->id }}"></label>
                    </form>



                  </td>

                  <td class="flex justify-center items-center gap-5 text-center sm:text-right">

                    <a href="{{ route('products.edit', $item->id) }}"
                      class="bg-yellow-400 px-3 py-2 rounded text-white  "><i
                        class="fa-regular fa-pen-to-square"></i></a>

                    <form action="" method="POST">
                      @csrf
                      <a data-idService='{{ $item->id }}'
                        class="btn_delete bg-red-600 px-3 py-2 rounded text-white cursor-pointer"><i
                          class="fa-regular fa-trash-can"></i></a>
                    </form>

                  </td>
                </tr>
              @endforeach

            </tbody>
            <tfoot>
              <tr>
                <th>Producto</th>
                <th>Extracto</th>

                <th>Precio</th>


                <th>Stock</th>

                <th>Imagen</th>
                <th>Cyber</th>
                <th>Destacar</th>
                <th>Liquidacion</th>
                <th>Visible</th>
                <th>Acciones</th>
              </tr>
            </tfoot>
          </table>

        </div>
        
        <!-- Paginación -->
        <div class="mt-4 px-5 py-4">
          {{ $products->links() }}
        </div>
      </div>
    </div>

  </div>



</x-app-layout>
<script>
  $('document').ready(function() {

<script>
  $('document').ready(function() {

    new DataTable('#tabladatos', {
      // Deshabilitar la paginación de DataTable para usar la de Laravel
      paging: false,
      // Deshabilitar la información de registros
      info: false,
      // Deshabilitar la búsqueda de DataTable porque usamos la del servidor
      searching: false,
      // Mantener el ordenamiento local
      ordering: true,
      // Optimizaciones para rendimiento
      deferRender: true,
      processing: false,
      // Configuración de columnas
      columnDefs: [
        { 
          targets: [4, 5, 6, 7, 8, 9], // Columnas de imagen y switches
          orderable: false 
        }
      ],
      // Configuración de idioma
      language: {
        emptyTable: "No hay productos disponibles",
        zeroRecords: "No se encontraron productos que coincidan",
        orderBy: "Ordenar por:",
      }
    });

    $(document).on("change", '.btn_swithc', function() {



      let status = 0;
      let id = $(this).attr('data-idService');
      let titleService = $(this).attr('data-titleService');
      let field = $(this).attr('data-field');

      if ($(this).is(':checked')) {
        status = 1;
      } else {
        status = 0;
      }

      console.log(titleService)

      $.ajax({
        url: "{{ route('products.updateVisible') }}",
        method: 'POST',
        data: {
          _token: $('input[name="_token"]').val(),
          status: status,
          id: id,
          field: field,
          titleService
        }
      }).done(function(res) {

        Swal.fire({
          position: "top-end",
          icon: "success",
          title: titleService + " a sido modificado",
          showConfirmButton: false,
          timer: 1500

        });

      })
    });

    $(document).on('click', '.btn_delete', function(e) {
      e.preventDefault()

      let id = $(this).attr('data-idService');

      Swal.fire({
        title: "Seguro que deseas eliminar?",
        text: "Vas a eliminar un Logo",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Si, borrar!",
        cancelButtonText: "Cancelar"
      }).then((result) => {
        if (result.isConfirmed) {

          $.ajax({

            url: `{{ route('products.borrar') }}`,
            method: 'POST',
            data: {
              _token: $('input[name="_token"]').val(),
              id: id,

            }

          }).done(function(res) {

            Swal.fire({
              title: res.message,
              icon: "success"
            });

            location.reload();

          })


        }
      });

    });

  })
</script>
