<select id="{{ $id }}" name="{{ $name }}"
  class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

  <div class="flex flex-col justify-start ">
    @if (count($data) > 0)

      @foreach ($data as $marca)
        @if ($value == $marca->id)
          <option id={{ $marca->id }} selected
            class="bg-[#0051FF] bg-opacity-25 w-full py-3  text-left px-4 text-white font-moderat_Bold hover:bg-[#3374FF] text-text16">
            {{ $marca->name }}</option>
        @endif
      @endforeach
    @else
      <option
        class="bg-[#0051FF] bg-opacity-25 w-full py-3  text-left px-4 text-white font-moderat_Bold hover:bg-[#3374FF] text-text16">
        Seleccione una marca</option>
    @endif


  </div>

</select>
