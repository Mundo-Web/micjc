@extends('components.public.matrix')

@section('css_importados')
    {{--     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css"> --}}

    <style>

    </style>

@stop


@section('content')

<main>
    <section>
        <div class="flex flex-col lg:flex-row">
            <div class="hidden lg:block lg:basis-5/12">
                <img src="{{asset('images/img/image_54.png')}}" alt="micjc" class="w-full" >
            </div>

            <div class="w-11/12 lg:max-w-[500px] my-auto flex flex-col gap-10 lg:basis-7/12 mx-auto pb-16">
                <div class="flex flex-col gap-3">
                    <p class="font-moderat_500 text-[#0051FF] text-text16 md:text-text18">Hola ...</p>
                    <p class="font-moderat_700 text-text36 text-[#111111] leading-[36px] w-full md:w-2/3">Bienvenido de nuevo</p>
                    <p class="font-moderat_400 text-text14 md:text-text16">Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                </div>
                

                <div>
                    <form action="" id="formCrearCuenta" class="flex flex-col gap-5">
                        <div>
                            <label for="email" class="font-moderat_400 text-text14 md:text-text16 text-[#111111]">Email</label>
                            <div class="relative w-full">
                                <!-- Input -->
                                <input
                                  id="email"
                                  type="email"
                                  {{-- placeholder="Contraseña" --}}
                                  class="w-full py-3 md:py-5 pl-4 pr-12 focus:outline-none placeholder-gray-400 font-moderat_500 text-text16 xl:text-text18 border-b-[1.5px] border-gray-200"
                                />
                                <!-- Imagen -->
                                <img
                                  {{-- onclick="mostrarContrasena()" --}}
                                  src="{{asset('images/svg/image_43.svg')}}"
                                  alt="email"
                                  class="absolute right-4 top-1/2 transform -translate-y-1/2 cursor-pointer email-icon"
                                />
                            </div>
                        </div>

                        <div>
                            <label for="full_name" class="font-moderat_400 text-text14 md:text-text16 text-[#111111]">Contraseña</label>
                            <div class="relative w-full">
                                <!-- Input -->
                                <input
                                  id="password"
                                  type="text"
                                  {{-- placeholder="Contraseña" --}}
                                  class="w-full py-3 md:py-5 pl-4 pr-12 focus:outline-none placeholder-gray-400 font-moderat_500 text-text16 xl:text-text18 border-b-[1.5px] border-gray-200"
                                />
                                <!-- Imagen -->
                                <img
                                  {{-- onclick="mostrarContrasena()" --}}
                                  src="{{asset('images/svg/image_45.svg')}}"
                                  alt="password"
                                  class="absolute right-4 top-1/2 transform -translate-y-1/2 cursor-pointer password-icon"
                                />

                               
                            </div>
                        </div>

                        <div class="flex justify-between items-center">

                            <div>
                                <input type="checkbox" id="guardarDatos">
                                <label for="guardarDatos" class="font-moderat_700 text-text12 md:text-text14 text-[#565656]">Guardar mis datos</label>
                            </div>

                            <div class="flex justify-start items-center gap-2">
                                <img src="{{asset('images/svg/image_49.svg')}}" alt="">
                               <a href="" class="text-[#0051FF] font-moderat_700 text-text12 md:text-text14">Olvide mi contraseña</a>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="flex flex-col gap-5">
                    <a href="" class="bg-[#0051FF] text-white font-moderat_700 py-4 text-center text-text14 md:text-text18">
                        Crear cuenta
                    </a>
                    <a href="" class="text-[#111111] font-moderat_700 py-4 text-center text-text14 md:text-text18 flex items-center justify-center gap-2 lg:gap-3 border-[#111111] border-2">
                        <div>
                            <img src="{{asset('images/svg/image_37.svg')}}" alt="">
                        </div>
                        <span>Ingresar con mi cuenta de Google</span>
                    </a>
                    <a href="" class="text-[#111111] font-moderat_700 py-4 text-center text-text14 md:text-text18 flex items-center justify-center gap-2 lg:gap-3 border-[#111111] border-2">
                        <div>
                            <img src="{{asset('images/svg/image_38.svg')}}" alt="">
                        </div>
                        <span>Ingresar con mi cuenta de Facebook</span>
                    </a>
                </div>

                <div>
                    <p class="text-[#111111] font-moderat_500 text-text14">Eres nuevo? <a href="" class="text-[#0051FF] underline">Regístrate como persona</a> o <a href="" class="text-[#0051FF] underline">Regístrate como Coach/Mentor</a></p>
                </div>

            </div>
        </div>
    </section>

</main>




@section('scripts_importados')
<script>

    const emailInput = document.getElementById('email');
    const emailIcon = document.querySelector('.email-icon');

    const passwordInput = document.getElementById('password');
    const passwordIcon = document.querySelector('.password-icon');

    
    passwordInput.addEventListener('focus', () => {
        passwordIcon.src = "{{asset('images/svg/image_46.svg')}}"; 
    });
    passwordInput.addEventListener('blur', () => {
        passwordIcon.src = "{{asset('images/svg/image_45.svg')}}"; 
    });

   
    emailInput.addEventListener('focus', () => {
        emailIcon.src = "{{asset('images/svg/image_44.svg')}}"; 
    });
    emailInput.addEventListener('blur', () => {
        emailIcon.src = "{{asset('images/svg/image_43.svg')}}"; 
    });


</script>

@stop

@stop
