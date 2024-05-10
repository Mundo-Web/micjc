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
                <img src="{{asset('images/img/image_55.png')}}" alt="micjc" class="w-full" >
            </div>

            <div class="w-11/12 lg:max-w-[500px] my-auto flex flex-col gap-10 lg:basis-7/12 mx-auto pb-16">
                <div class="flex flex-col gap-3">
                    <p class="font-moderat_500 text-[#0051FF] text-text16 md:text-text18">Restaura</p>
                    <p class="font-moderat_700 text-text36 text-[#111111] leading-[36px] w-full md:w-2/3">Ops, olvidé mi contraseña</p>
                    <p class="font-moderat_Regular text-text14 md:text-text16">Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                </div>
                

                <div>
                    <form action="" id="formCrearCuenta" class="flex flex-col gap-5">
                        <div class="flex flex-col gap-2">
                            <label for="email" class="font-moderat_Regular text-text14 md:text-text16 text-[#111111]">Email</label>
                            <div class="relative w-full" data-aos="fade-up" data-aos-offset="150">
                                <!-- Input -->
                                <input
                                  id="email"
                                  type="email"
                                  {{-- placeholder="Contraseña" --}}
                                  class="w-full py-3 px-4 focus:outline-none placeholder-gray-400 font-moderat_Regular text-text16 md:text-text18 border-[1px] border-gray-200 text-[#6C7275] focus:ring-0  focus:border-black"
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

                    </form>
                </div>

                <div class="flex flex-col gap-5" data-aos="fade-up" data-aos-offset="150">
                    <a href="" class="bg-[#0051FF] text-white font-moderat_Bold py-4 text-center text-text16 md:text-text18">
                        Enviar
                    </a>
                    
                </div>


            </div>
        </div>
    </section>

</main>




@section('scripts_importados')
<script>

    const emailInput = document.getElementById('email');
    const emailIcon = document.querySelector('.email-icon');


    emailInput.addEventListener('focus', () => {
        emailIcon.src = "{{asset('images/svg/image_44.svg')}}"; 
    });
    emailInput.addEventListener('blur', () => {
        emailIcon.src = "{{asset('images/svg/image_43.svg')}}"; 
    });


</script>

@stop

@stop
