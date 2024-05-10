<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

   {{--  <link rel="stylesheet" href="{{ asset('css/styles.css') }}" /> --}}

    {{-- Aqui van los CSS --}}
    @yield('css_importados')

    {{-- Swipper --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    {{-- Alpine --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    {{-- Sweet Alert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>


    <style>
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
            src: url({{ asset('fonts/Moderat-Bold.woff') }}) format("woff");
        }
    </style>

</head>

<body>
    <div></div>
    @include('components.public.header')

    <div class="main">
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

</body>

</html>
