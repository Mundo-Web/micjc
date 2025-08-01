<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  
  <!-- SEO Metadata -->
  <title>@yield('title', $general->meta_title ?? config('app.name', 'Laravel'))</title>
  <meta name="description" content="@yield('meta_description', $general->meta_description ?? '')">
  <meta name="keywords" content="@yield('meta_keywords', $general->meta_keywords ?? '')">
  
  <!-- Canonical URL -->
  @if(!empty($general->canonical_url))
  <link rel="canonical" href="{{ $general->canonical_url }}">
  @endif
  
  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:title" content="@yield('og_title', $general->og_title ?? $general->meta_title ?? config('app.name', 'Laravel'))">
  <meta property="og:description" content="@yield('og_description', $general->og_description ?? $general->meta_description ?? '')">
  @if(!empty($general->og_image))
  <meta property="og:image" content="{{ url($general->og_image) }}">
  @endif
  
  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="{{ url()->current() }}">
  <meta property="twitter:title" content="@yield('twitter_title', $general->og_title ?? $general->meta_title ?? config('app.name', 'Laravel'))">
  <meta property="twitter:description" content="@yield('twitter_description', $general->og_description ?? $general->meta_description ?? '')">
  @if(!empty($general->og_image))
  <meta property="twitter:image" content="{{ url($general->og_image) }}">
  @endif

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  {{-- colocar favicon --}}
  <link rel="icon" type="image/svg+xml" href="{{ asset('images/svg/favicon.svg') }}">


  {{--  <link rel="stylesheet" href="{{ asset('css/styles.css') }}" /> --}}

  {{-- Aqui van los CSS --}}
  @yield('css_importados')

  {{-- Swipper --}}
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />

  {{-- Alpine --}}
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

  {{-- Sweet Alert --}}
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

  <script src="/js/tippy.all.min.js"></script>
  <script src="/js/cookies.extend.js"></script>

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <style>
    @view-transition {
      navigation: auto;
    }

    @font-face {
      font-family: "moderat-700";
      src: url({{ asset('fonts/Moderat-Mono-Bold.woff') }}) format("woff");
    }

    @font-face {
      font-family: "moderat-500";
      src: url({{ asset('fonts/Moderat-Mono-Medium.woff') }}) format("woff");
    }

    @font-face {
      font-family: "moderat-400";
      src: url({{ asset('fonts/Moderat-Mono-Regular.woff') }}) format("woff");
    }

    @font-face {
      font-family: "moderat-300";
      src: url({{ asset('fonts/Moderat-Mono-Light.woff') }}) format("woff");
    }

    @font-face {
      font-family: "moderat-italic";
      src: url({{ asset('fonts/Moderat-Medium-Italic.woff') }}) format("woff");
    }

    @font-face {
      font-family: "moderat-Medium";
      src: url({{ asset('fonts/Moderat-Medium.woff') }}) format("woff");
    }

    @font-face {
      font-family: "moderat-Regular";
      src: url({{ asset('fonts/Moderat-Regular.woff') }}) format("woff");
    }

    @font-face {
      font-family: "moderat-Bold";
      src: url({{ asset('fonts/moderat-Bold.woff') }}) format("woff");
    }

    /* ----------------- */
    @font-face {
      font-family: "Montserrat-Bold";
      src: url({{ asset('fonts/Montserrat-Bold.woff') }}) format("woff");
    }

    @font-face {
      font-family: "Montserrat-SemiBold";
      src: url({{ asset('fonts/Montserrat-SemiBold.woff') }}) format("woff");
    }

    @font-face {
      font-family: "Montserrat-Medium";
      src: url({{ asset('fonts/Montserrat-Medium.woff') }}) format("woff");
    }

    @font-face {
      font-family: "Montserrat-Regular";
      src: url({{ asset('fonts/Montserrat-Regular.woff') }}) format("woff");
    }

    @font-face {
      font-family: "Montserrat-Light";
      src: url({{ asset('fonts/Montserrat-Light.woff') }}) format("woff");
    }

    @font-face {
      font-family: "Montserrat-Black";
      src: url({{ asset('fonts/Montserrat-Black.woff') }}) format("woff");
    }

    /* @media (max-width: 400px) {
      #cart-modal {
        width: 302px !important;
        right: 25% !important;
        top: 5px !important;
       
      }
    }

    @media (min-width: 400px) and (max-width: 700px) {
      #cart-modal {
        width: 302px !important;
        right: 16% !important;
        top: 5px;
        
      }
    } */
  </style>

</head>

<body>
  <div></div>
  @include('components.public.header')

  <div class="main pt-40">
    {{-- Aqui va el contenido de cada pagina --}}
    @yield('content')

  </div>



  @include('components.public.footer')



  @yield('scripts_importados')
  {{-- @vite(['resources/js/functions.js']) --}}
  {{-- <script src="{{ asset('js/functions.js') }}"></script> --}}
  <script>
    const addToCart = document.querySelector('.bag__carrito');
    /* const closeModal = document.querySelector(".jsModalClose"); */

    addToCart.addEventListener("click", (event) => {
      const modal = document.getElementById('jsModalCarrito');
      modal.classList.add("active");
    });

    //CERRAMOS MODAL CUANDO HACEMOS CLICK FUERA DEL CONTENDINO DEL MODAL
    window.onclick = (event) => {
      const modal = document.querySelector(".modal.active");

      if (event.target == modal) {
        modal.classList.remove("active");
      }
    };
  </script>
  <script>
    function alerta(message) {
      Swal.fire({
        title: message,
        icon: "error",
      });
    }

    function validarEmail(value) {
      // const regex =
      //   /^(([^<>()\[\]\\.,;:\s@”]+(\.[^<>()\[\]\\.,;:\s@”]+)*)|(“.+”))@((\[[0–9]{1,3}\.[0–9]{1,3}\.[0–9]{1,3}\.[0–9]{1,3}])|(([a-zA-Z\-0–9]+\.)+[a-zA-Z]{2,}))$/

      // if (!regex.test(value)) {
      //   alerta("Por favor, asegúrate de ingresar una dirección de correo electrónico válida");
      //   return false;
      // }
      return true;
    }


    $('#formInscripcion').submit(function(e) {

      e.preventDefault();

      Swal.fire({

        title: 'Procesando información',
        html: `Registrando... 
          <div class="max-w-2xl mx-auto overflow-hidden flex justify-center items-center mt-4">
              <div role="status">
              <svg aria-hidden="true" class="w-8 h-8 text-blue-600 animate-spin dark:text-gray-600 " viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
              </svg>

              </div>
          </div>
        `,
        allowOutsideClick: false,
        onBeforeOpen: () => {
          Swal.showLoading();
        }
      });


      if (!validarEmail($('#email').val())) {
        return;
      };
      $.ajax({
        url: '{{ route('guardarUserNewsLetter') }}',
        method: 'POST',
        data: $(this).serialize(),
        success: function(response) {
          Swal.close();
          Swal.fire({
            title: response.message,
            icon: "success",
          });
          $('#formInscripcion')[0].reset();
        },
        error: function(response) {
          let message = ''

          let isDuplicado = response.responseJSON.message.includes('Duplicate entry')
          console.log(isDuplicado)

          if (isDuplicado) {
            message =
              'El correo que ha ingresado ya existe. Utilice  otra direccion de correo'
          } else {
            message = response.responseJSON.message
          }
          Swal.close();
          Swal.fire({
            title: message,
            icon: "error",
          });
        }
      });

    })
  </script>

</body>

</html>
