<div class="bg-white py-5 md:py-0" data-aos="fade-up" data-aos-offset="150">
  <div class="w-11/12 md:w-full mx-auto">
    <div class="basis-5/12 flex flex-col gap-5">
      <div class="flex flex-col gap-5">
        <div class="rounded-full w-24 h-24 bg-[#E9EDEF] flex justify-center items-center relative">
          <p class="text-[#111111] text-text32 md:text-text36 font-moderat_700">
            <img class="w-full h-full rounded-full" src="{{ Auth::user()->profile_photo_url }}"
              alt="{{ Auth::user()->name }}" />
          </p>
          <label for="upload_image"
            class="bg-[#0051FF] rounded-full w-7 h-7 flex justify-center items-center absolute bottom-0 right-0 cursor-pointer">
            <img src="{{ asset('images/svg/image_32.svg') }}" alt="upload photo" />
          </label>
          <form action="{{ route('cambiofoto') }}" id="avatarform" method="POST" enctype='multipart/form-data'>
            @csrf
            <input type="hidden" name="name" value="{{ $user->id }}">
            <input type="file" id="upload_image" name="imageuser" accept="image/*" class="hidden" />
          </form>
        </div>

        <div class="text-[#111111]">
          <p class="font-moderat_700 text-text24 xl:text-text28">
            {{ $userDetail->nombre }} {{ $userDetail->apellidos }}
          </p>

          <p class="font-moderat_Medium text-text12 md:text-text16 text-[#8896A8]">
            {{ $userDetail->email }}
          </p>
        </div>
      </div>
      <div class="flex flex-col gap-4">
        <div
          class="text-textBlack py-3 px-5 rounded-2xl cursor-pointer border-none md:w-80 flex justify-between items-center w-full  @if (in_array(Request::segment(1), ['micuenta'])) {{ 'bg-[#0051FF]', 'text-textWhite' }} @endif">
          <a href="{{ route('miCuenta') }}"
            class="font-moderat_Bold text-text16 md:text-text18 text-[#565656] @if (in_array(Request::segment(1), ['micuenta'])) {{ ' text-white' }} @endif"">
            Mi cuenta
          </a>
          <span>
            <svg width="20" height="20" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M0.332031 6.50048C0.332031 2.93378 3.3187 0.0390626 6.9987 0.0390628C10.6787 0.039063 13.6654 2.93378 13.6654 6.50048C13.6654 10.0672 10.6787 12.9619 6.9987 12.9619C3.3187 12.9619 0.332031 10.0672 0.332031 6.50048ZM8.76536 6.27433L6.90536 4.47159C6.69203 4.26483 6.33203 4.40698 6.33203 4.69774L6.33203 8.30967C6.33203 8.60044 6.69203 8.74259 6.8987 8.53582L8.7587 6.73309C8.89203 6.60386 8.89203 6.39709 8.76536 6.27433Z"
                fill="#E9EDEF" />
            </svg>
          </span>
        </div>
        <div
          class=" text-textBlack py-3 px-5 rounded-2xl cursor-pointer border-none md:w-80 flex justify-between items-center w-full  @if (in_array(Request::segment(1), ['miDireccion'])) {{ 'bg-[#0051FF]', 'text-textWhite' }} @endif"
          py-3 px-5 cursor-pointer border-none md:w-80 w-full flex justify-between items-center">
          <a href="{{ route('miDireccion') }}"
            class="font-moderat_Bold text-text16 md:text-text18 text-[#565656] @if (in_array(Request::segment(1), ['miDireccion'])) {{ ' text-white' }} @endif">
            Dirección
          </a>
          <span>
            <svg width="20" height="20" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M0.332031 6.50048C0.332031 2.93378 3.3187 0.0390626 6.9987 0.0390628C10.6787 0.039063 13.6654 2.93378 13.6654 6.50048C13.6654 10.0672 10.6787 12.9619 6.9987 12.9619C3.3187 12.9619 0.332031 10.0672 0.332031 6.50048ZM8.76536 6.27433L6.90536 4.47159C6.69203 4.26483 6.33203 4.40698 6.33203 4.69774L6.33203 8.30967C6.33203 8.60044 6.69203 8.74259 6.8987 8.53582L8.7587 6.73309C8.89203 6.60386 8.89203 6.39709 8.76536 6.27433Z"
                fill="#E9EDEF" />
            </svg>
          </span>
        </div>
        <div
          class="text-textBlack py-3 px-5 rounded-2xl cursor-pointer border-none md:w-80 flex justify-between items-center w-full @if (in_array(Request::segment(1), ['historial'])) {{ 'bg-[#0051FF]', 'text-textWhite' }} @endif">
          <a href="{{ route('historial') }}"
            class="font-moderat_Bold text-text16 md:text-text18 text-[#565656] @if (in_array(Request::segment(1), ['historial'])) {{ ' text-white' }} @endif"">
            Historial de pedidos
          </a>
          <span>
            <svg width="20" height="20" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M0.332031 6.50048C0.332031 2.93378 3.3187 0.0390626 6.9987 0.0390628C10.6787 0.039063 13.6654 2.93378 13.6654 6.50048C13.6654 10.0672 10.6787 12.9619 6.9987 12.9619C3.3187 12.9619 0.332031 10.0672 0.332031 6.50048ZM8.76536 6.27433L6.90536 4.47159C6.69203 4.26483 6.33203 4.40698 6.33203 4.69774L6.33203 8.30967C6.33203 8.60044 6.69203 8.74259 6.8987 8.53582L8.7587 6.73309C8.89203 6.60386 8.89203 6.39709 8.76536 6.27433Z"
                fill="#E9EDEF" />
            </svg>
          </span>
        </div>

        <form method="POST" action="{{ route('logout') }}" x-data>
          @csrf

          <a class="bg-[#F3F5F7] text-[#151515] font-moderat_Bold text-text16 md:text-text18 py-3 px-4 flex justify-between items-center md:w-80 mt-0 md:mt-[200px] w-full"
            href="{{ route('logout') }}" @click.prevent="$root.submit();" @focus="open = true"
            @focusout="open = false">
            Cerrar Sesión
            <img src="{{ asset('images/svg/image_33.svg') }}" alt="cerrar" />
          </a>
        </form>


      </div>
    </div>
  </div>
</div>

<script>
  $("#upload_image").change(function() {

    const file = this.files[0];

    if (file) {
      const formData = new FormData();
      formData.append('image', file);
      formData.append('_token', $('#avatarform input[name="_token"]').val());
      formData.append('id', $('#avatarform input[name="name"]').val());
      $.ajax({

        url: "{{ route('cambiofoto') }}",
        method: 'POST',
        data: formData,
        processData: false,
        contentType: false,

        success: function(success) {
          window.location.href = window.location.href;

        },
        error: function(error) {
          console.log(error)
        }

      })
    }

  });
</script>

<script>
  var appUrl = '{{ env('APP_URL') }}';
</script>
<script src="{{ asset('js/carrito.js') }}"></script>
