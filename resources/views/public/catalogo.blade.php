@extends('components.public.matrix')

@section('css_importados')

<style>
    .fondo__catalogo-desktop {
        background-image: none;
        background-position: center;
        background-repeat:  no-repeat;
        background-size: cover;
        background-image: url({{asset('images/img/image_34.png')}});
    }

    @media (min-width:768px){
        .fondo__catalogo-desktop {
            background-image: url({{asset('images/img/image_33.png')}});
        }
    }
</style>

@stop


@section('content')
<main>
    <section class="w-11/12 mx-auto pb-16">
        <div class="bg-[#0051FF] py-5 fondo__catalogo-desktop" {{-- style="background-image: url({{asset('images/img/image_16.png')}}); background-repeat: no-repeat; background-size:cover;" --}}>
            <div class="grid grid-cols-1 lg:grid-cols-2">
                <div class="flex flex-col justify-center gap-5 order-1 lg:order-2 px-5 md:z-50 lg:-mx-[100px] w-full lg:w-11/12">
                    <p class="text-white text-text18 md:text-text20 font-moderat_700 blobk md:hidden">Accesorios</p>
                    <h1 class="text-text40 md:text-text48 font-moderat_700 text-white leading-[56px] md:leading-tight">Catálogo</h1>
                    <p class="text-white text-text14 font-moderat_400 w-full lg:w-5/6">Productos digitales</p>
                    
                    <div class="flex md:hidden justify-start items-center">
                        <a href="#" class="flex justify-center items-center gap-2">
                            <span class="text-white text-text16 font-moderat_700">Ver productos</span>
                            <div>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 12H19" stroke="white" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M12 5L19 12L12 19" stroke="white" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>    
                            </div>
                        </a>
                    </div>
                </div>                          
                
                <div class="flex justify-end md:justify-end  items-center py-10 order-2 lg:order-1 relative lg:z-10 pr-5" {{-- style="background-image: url({{asset('images/img/image_3.png')}}); background-repeat: no-repeat; background-size:cover;" --}}>
                    <img src="{{asset('images/svg/image_18.svg')}}" alt="impresora" class="w-[200px] h-[200px] md:w-[450px] md:h-[450px]">
                    <img src="{{asset('images/img/image_15.png')}}" alt="impresora" class="block md:hidden absolute mt-12 mr-16">
                    <img src="{{asset('images/img/image_4.png')}}" alt="impresora" class="hidden md:block absolute mr-24">
                </div>                         
            </div>                       
        </div>
    </section>

    <section class="w-11/12 md:w-10/12 mx-auto">
        <div class="grid grid-cols-2 lg:grid-cols-4 pb-24">
            <div class="col-span-2 row-span-1 order-1 lg:order-1 lg:col-span-2 lg:row-span-1 font-moderat_500 text-text16 md:text-text18 flex justify-start items-center gap-5 py-10">
                <a href="#" class="text-[#0711E5]">Todos</a>
                <a href="#" class="text-[#111111]">Tintas</a>
                <a href="#" class="text-[#111111]">Toners</a>
                <a href="#" class="text-[#111111]">Impresoras</a>
                <a href="#" class="text-[#111111]">Laptops</a>
            </div>
            <div class="col-span-2 row-span-1 order-4 lg:order-2 lg:col-span-2 lg:row-span-1 flex justify-end items-center py-10">
                <p>pagination</p>
            </div>
    
            <div class="col-span-2 row-span-1 order-2 lg:order-3 lg:col-span-4 lg:row-span-1 flex justify-start items-center gap-5 font-moderat_500 text-text16 md:text-text18 py-10">
                <a href="#" class="text-[#0711E5]">Sub Categorías</a>
                <a href="#" class="text-[#111111]">Marcas</a>
            </div>
    
            <div class="col-span-2 row-span-1 order-3 lg:order-4 lg:col-span-4">
                <div class="grid grid-cols-2 lg:grid-cols-4 gap-5 md:gap-10">
                    <div class="flex flex-col gap-5">
                        <div class="bg-[#F3F3F3] flex flex-col justify-center pt-5 gap-20 relative">
                            <div class="flex justify-start items-center absolute top-[5%] left-[5%]">
                                <span class="font-space_grotesk font-medium text-text10 md:text-text20 bg-[#0051FF] text-white py-1 px-2">
                                    Lanzamiento</span>
                            </div>
                            <div class="flex justify-center items-center py-10 md:py-20">
                                <img src="{{asset('images/img/image_17.png')}}" alt="impresora" class="w-[120px] h-[90px] md:w-auto md:h-auto">
                            </div>
                        </div>
    
                        <div class="flex flex-col gap-6">
                            <div class="flex flex-col gap-3">
                                <h3 class="font-moderat_500 text-text12 md:text-text20 text-[#1F1F1F]">Tintas</h3>
                                <h2 class="font-moderat_700 text-text16 md:text-text28 text-[#111111]">Tintas HP</h2>
                                <p class="font-moderat_400 text-text12 md:text-text20 text-[#565656]">Praesent non euismod arcu, eu dignissim erat. Aliquam erat volutpat...</p>
                                <div class="flex justify-start items-center gap-2 md:gap-4">
                                    <div class="rounded-full bg-[#00AEEF] w-4 h-4 md:w-6 md:h-6"></div>
                                    <div class="rounded-full bg-[#EC008C] w-4 h-4 md:w-6 md:h-6"></div>
                                    <div class="rounded-full bg-[#FFF200] w-4 h-4 md:w-6 md:h-6"></div>
                                    <div class="rounded-full bg-[#000000] w-4 h-4 md:w-6 md:h-6"></div>
                                </div>
                            </div>
                            <p class="text-[#111111] text-text16 md:text-text28 font-space_grotesk font-bold md:font-medium">S/ 899.99</p>
                        </div>
                    </div>

                    <div class="flex flex-col gap-5">
                        <div class="bg-[#F3F3F3] flex flex-col justify-center pt-5 gap-20 relative">
                            <div class="flex justify-start items-center absolute top-[5%] left-[5%]">
                                <span class="font-space_grotesk font-medium text-text10 md:text-text20 bg-[#0051FF] text-white py-1 px-2">-20%</span>
                            </div>
                            <div class="flex justify-center items-center py-10 md:py-20">
                                <img src="{{asset('images/img/image_17.png')}}" alt="impresora" class="w-[120px] h-[90px] md:w-auto md:h-auto">
                            </div>
                        </div>
    
                        <div class="flex flex-col gap-6">
                            <div class="flex flex-col gap-3">
                                <h3 class="font-moderat_500 text-text12 md:text-text20 text-[#1F1F1F]">Tintas</h3>
                                <h2 class="font-moderat_700 text-text16 md:text-text28 text-[#111111]">Tintas HP</h2>
                                <p class="font-moderat_400 text-text12 md:text-text20 text-[#565656]">Praesent non euismod arcu, eu dignissim erat. Aliquam erat volutpat...</p>
                                <div class="flex justify-start items-center gap-2 md:gap-4">
                                    <div class="rounded-full bg-[#00AEEF] w-4 h-4 md:w-6 md:h-6"></div>
                                    <div class="rounded-full bg-[#EC008C] w-4 h-4 md:w-6 md:h-6"></div>
                                    <div class="rounded-full bg-[#FFF200] w-4 h-4 md:w-6 md:h-6"></div>
                                    <div class="rounded-full bg-[#000000] w-4 h-4 md:w-6 md:h-6"></div>
                                </div>
                            </div>
                            <p class="text-[#111111] text-text16 md:text-text28 font-space_grotesk font-bold md:font-medium">S/ 899.99</p>
                        </div>
                    </div>

                    <div class="flex flex-col gap-5">
                        <div class="bg-[#F3F3F3] flex flex-col justify-center pt-5 gap-20 relative">
                            <div class="flex justify-start items-center absolute top-[5%] left-[5%]">
                                <span class="font-space_grotesk font-medium text-text10 md:text-text20 bg-[#0051FF] text-white py-1 px-2">-20%</span>
                            </div>
                            <div class="flex justify-center items-center py-10 md:py-20">
                                <img src="{{asset('images/img/image_17.png')}}" alt="impresora" class="w-[120px] h-[90px] md:w-auto md:h-auto">
                            </div>
                        </div>
    
                        <div class="flex flex-col gap-6">
                            <div class="flex flex-col gap-3">
                                <h3 class="font-moderat_500 text-text12 md:text-text20 text-[#1F1F1F]">Tintas</h3>
                                <h2 class="font-moderat_700 text-text16 md:text-text28 text-[#111111]">Tintas HP</h2>
                                <p class="font-moderat_400 text-text12 md:text-text20 text-[#565656]">Praesent non euismod arcu, eu dignissim erat. Aliquam erat volutpat...</p>
                                <div class="flex justify-start items-center gap-2 md:gap-4">
                                    <div class="rounded-full bg-[#00AEEF] w-4 h-4 md:w-6 md:h-6"></div>
                                    <div class="rounded-full bg-[#EC008C] w-4 h-4 md:w-6 md:h-6"></div>
                                    <div class="rounded-full bg-[#FFF200] w-4 h-4 md:w-6 md:h-6"></div>
                                    <div class="rounded-full bg-[#000000] w-4 h-4 md:w-6 md:h-6"></div>
                                </div>
                            </div>
                            <p class="text-[#111111] text-text16 md:text-text28 font-space_grotesk font-bold md:font-medium">S/ 899.99</p>
                        </div>
                    </div>

                    <div class="flex flex-col gap-5">
                        <div class="bg-[#F3F3F3] flex flex-col justify-center pt-5 gap-20 relative">
                            <div class="flex justify-start items-center absolute top-[5%] left-[5%]">
                                <span class="font-space_grotesk font-medium text-text10 md:text-text20 bg-[#0051FF] text-white py-1 px-2">-20%</span>
                            </div>
                            <div class="flex justify-center items-center py-10 md:py-20">
                                <img src="{{asset('images/img/image_17.png')}}" alt="impresora" class="w-[120px] h-[90px] md:w-auto md:h-auto">
                            </div>
                        </div>
    
                        <div class="flex flex-col gap-6">
                            <div class="flex flex-col gap-3">
                                <h3 class="font-moderat_500 text-text12 md:text-text20 text-[#1F1F1F]">Tintas</h3>
                                <h2 class="font-moderat_700 text-text16 md:text-text28 text-[#111111]">Tintas HP</h2>
                                <p class="font-moderat_400 text-text12 md:text-text20 text-[#565656]">Praesent non euismod arcu, eu dignissim erat. Aliquam erat volutpat...</p>
                                <div class="flex justify-start items-center gap-2 md:gap-4">
                                    <div class="rounded-full bg-[#00AEEF] w-4 h-4 md:w-6 md:h-6"></div>
                                    <div class="rounded-full bg-[#EC008C] w-4 h-4 md:w-6 md:h-6"></div>
                                    <div class="rounded-full bg-[#FFF200] w-4 h-4 md:w-6 md:h-6"></div>
                                    <div class="rounded-full bg-[#000000] w-4 h-4 md:w-6 md:h-6"></div>
                                </div>
                            </div>
                            <p class="text-[#111111] text-text16 md:text-text28 font-space_grotesk font-bold md:font-medium">S/ 899.99</p>
                        </div>
                    </div>

                    <div class="flex flex-col gap-5">
                        <div class="bg-[#F3F3F3] flex flex-col justify-center pt-5 gap-20 relative">
                            <div class="flex justify-start items-center absolute top-[5%] left-[5%]">
                                <span class="font-space_grotesk font-medium text-text10 md:text-text20 bg-[#0051FF] text-white py-1 px-2">-20%</span>
                            </div>
                            <div class="flex justify-center items-center py-10 md:py-20">
                                <img src="{{asset('images/img/image_17.png')}}" alt="impresora" class="w-[120px] h-[90px] md:w-auto md:h-auto">
                            </div>
                        </div>
    
                        <div class="flex flex-col gap-6">
                            <div class="flex flex-col gap-3">
                                <h3 class="font-moderat_500 text-text12 md:text-text20 text-[#1F1F1F]">Tintas</h3>
                                <h2 class="font-moderat_700 text-text16 md:text-text28 text-[#111111]">Tintas HP</h2>
                                <p class="font-moderat_400 text-text12 md:text-text20 text-[#565656]">Praesent non euismod arcu, eu dignissim erat. Aliquam erat volutpat...</p>
                                <div class="flex justify-start items-center gap-2 md:gap-4">
                                    <div class="rounded-full bg-[#00AEEF] w-4 h-4 md:w-6 md:h-6"></div>
                                    <div class="rounded-full bg-[#EC008C] w-4 h-4 md:w-6 md:h-6"></div>
                                    <div class="rounded-full bg-[#FFF200] w-4 h-4 md:w-6 md:h-6"></div>
                                    <div class="rounded-full bg-[#000000] w-4 h-4 md:w-6 md:h-6"></div>
                                </div>
                            </div>
                            <p class="text-[#111111] text-text16 md:text-text28 font-space_grotesk font-bold md:font-medium">S/ 899.99</p>
                        </div>
                    </div>

                    <div class="flex flex-col gap-5">
                        <div class="bg-[#F3F3F3] flex flex-col justify-center pt-5 gap-20 relative">
                            <div class="flex justify-start items-center absolute top-[5%] left-[5%]">
                                <span class="font-space_grotesk font-medium text-text10 md:text-text20 bg-[#0051FF] text-white py-1 px-2">-20%</span>
                            </div>
                            <div class="flex justify-center items-center py-10 md:py-20">
                                <img src="{{asset('images/img/image_17.png')}}" alt="impresora" class="w-[120px] h-[90px] md:w-auto md:h-auto">
                            </div>
                        </div>
    
                        <div class="flex flex-col gap-6">
                            <div class="flex flex-col gap-3">
                                <h3 class="font-moderat_500 text-text12 md:text-text20 text-[#1F1F1F]">Tintas</h3>
                                <h2 class="font-moderat_700 text-text16 md:text-text28 text-[#111111]">Tintas HP</h2>
                                <p class="font-moderat_400 text-text12 md:text-text20 text-[#565656]">Praesent non euismod arcu, eu dignissim erat. Aliquam erat volutpat...</p>
                                <div class="flex justify-start items-center gap-2 md:gap-4">
                                    <div class="rounded-full bg-[#00AEEF] w-4 h-4 md:w-6 md:h-6"></div>
                                    <div class="rounded-full bg-[#EC008C] w-4 h-4 md:w-6 md:h-6"></div>
                                    <div class="rounded-full bg-[#FFF200] w-4 h-4 md:w-6 md:h-6"></div>
                                    <div class="rounded-full bg-[#000000] w-4 h-4 md:w-6 md:h-6"></div>
                                </div>
                            </div>
                            <p class="text-[#111111] text-text16 md:text-text28 font-space_grotesk font-bold md:font-medium">S/ 899.99</p>
                        </div>
                    </div>

                    <div class="flex flex-col gap-5">
                        <div class="bg-[#F3F3F3] flex flex-col justify-center pt-5 gap-20 relative">
                            <div class="flex justify-start items-center absolute top-[5%] left-[5%]">
                                <span class="font-space_grotesk font-medium text-text10 md:text-text20 bg-[#0051FF] text-white py-1 px-2">-20%</span>
                            </div>
                            <div class="flex justify-center items-center py-10 md:py-20">
                                <img src="{{asset('images/img/image_17.png')}}" alt="impresora" class="w-[120px] h-[90px] md:w-auto md:h-auto">
                            </div>
                        </div>
    
                        <div class="flex flex-col gap-6">
                            <div class="flex flex-col gap-3">
                                <h3 class="font-moderat_500 text-text12 md:text-text20 text-[#1F1F1F]">Tintas</h3>
                                <h2 class="font-moderat_700 text-text16 md:text-text28 text-[#111111]">Tintas HP</h2>
                                <p class="font-moderat_400 text-text12 md:text-text20 text-[#565656]">Praesent non euismod arcu, eu dignissim erat. Aliquam erat volutpat...</p>
                                <div class="flex justify-start items-center gap-2 md:gap-4">
                                    <div class="rounded-full bg-[#00AEEF] w-4 h-4 md:w-6 md:h-6"></div>
                                    <div class="rounded-full bg-[#EC008C] w-4 h-4 md:w-6 md:h-6"></div>
                                    <div class="rounded-full bg-[#FFF200] w-4 h-4 md:w-6 md:h-6"></div>
                                    <div class="rounded-full bg-[#000000] w-4 h-4 md:w-6 md:h-6"></div>
                                </div>
                            </div>
                            <p class="text-[#111111] text-text16 md:text-text28 font-space_grotesk font-bold md:font-medium">S/ 899.99</p>
                        </div>
                    </div>

                    <div class="flex flex-col gap-5">
                        <div class="bg-[#F3F3F3] flex flex-col justify-center pt-5 gap-20 relative">
                            <div class="flex justify-start items-center absolute top-[5%] left-[5%]">
                                <span class="font-space_grotesk font-medium text-text10 md:text-text20 bg-[#0051FF] text-white py-1 px-2">-20%</span>
                            </div>
                            <div class="flex justify-center items-center py-10 md:py-20">
                                <img src="{{asset('images/img/image_17.png')}}" alt="impresora" class="w-[120px] h-[90px] md:w-auto md:h-auto">
                            </div>
                        </div>
    
                        <div class="flex flex-col gap-6">
                            <div class="flex flex-col gap-3">
                                <h3 class="font-moderat_500 text-text12 md:text-text20 text-[#1F1F1F]">Tintas</h3>
                                <h2 class="font-moderat_700 text-text16 md:text-text28 text-[#111111]">Tintas HP</h2>
                                <p class="font-moderat_400 text-text12 md:text-text20 text-[#565656]">Praesent non euismod arcu, eu dignissim erat. Aliquam erat volutpat...</p>
                                <div class="flex justify-start items-center gap-2 md:gap-4">
                                    <div class="rounded-full bg-[#00AEEF] w-4 h-4 md:w-6 md:h-6"></div>
                                    <div class="rounded-full bg-[#EC008C] w-4 h-4 md:w-6 md:h-6"></div>
                                    <div class="rounded-full bg-[#FFF200] w-4 h-4 md:w-6 md:h-6"></div>
                                    <div class="rounded-full bg-[#000000] w-4 h-4 md:w-6 md:h-6"></div>
                                </div>
                            </div>
                            <p class="text-[#111111] text-text16 md:text-text28 font-space_grotesk font-bold md:font-medium">S/ 899.99</p>
                        </div>
                    </div>

                    <div class="flex flex-col gap-5">
                        <div class="bg-[#F3F3F3] flex flex-col justify-center pt-5 gap-20 relative">
                            <div class="flex justify-start items-center absolute top-[5%] left-[5%]">
                                <span class="font-space_grotesk font-medium text-text10 md:text-text20 bg-[#0051FF] text-white py-1 px-2">-20%</span>
                            </div>
                            <div class="flex justify-center items-center py-10 md:py-20">
                                <img src="{{asset('images/img/image_17.png')}}" alt="impresora" class="w-[120px] h-[90px] md:w-auto md:h-auto">
                            </div>
                        </div>
    
                        <div class="flex flex-col gap-6">
                            <div class="flex flex-col gap-3">
                                <h3 class="font-moderat_500 text-text12 md:text-text20 text-[#1F1F1F]">Tintas</h3>
                                <h2 class="font-moderat_700 text-text16 md:text-text28 text-[#111111]">Tintas HP</h2>
                                <p class="font-moderat_400 text-text12 md:text-text20 text-[#565656]">Praesent non euismod arcu, eu dignissim erat. Aliquam erat volutpat...</p>
                                <div class="flex justify-start items-center gap-2 md:gap-4">
                                    <div class="rounded-full bg-[#00AEEF] w-4 h-4 md:w-6 md:h-6"></div>
                                    <div class="rounded-full bg-[#EC008C] w-4 h-4 md:w-6 md:h-6"></div>
                                    <div class="rounded-full bg-[#FFF200] w-4 h-4 md:w-6 md:h-6"></div>
                                    <div class="rounded-full bg-[#000000] w-4 h-4 md:w-6 md:h-6"></div>
                                </div>
                            </div>
                            <p class="text-[#111111] text-text16 md:text-text28 font-space_grotesk font-bold md:font-medium">S/ 899.99</p>
                        </div>
                    </div>

                    <div class="flex flex-col gap-5">
                        <div class="bg-[#F3F3F3] flex flex-col justify-center pt-5 gap-20 relative">
                            <div class="flex justify-start items-center absolute top-[5%] left-[5%]">
                                <span class="font-space_grotesk font-medium text-text10 md:text-text20 bg-[#0051FF] text-white py-1 px-2">-20%</span>
                            </div>
                            <div class="flex justify-center items-center py-10 md:py-20">
                                <img src="{{asset('images/img/image_17.png')}}" alt="impresora" class="w-[120px] h-[90px] md:w-auto md:h-auto">
                            </div>
                        </div>
    
                        <div class="flex flex-col gap-6">
                            <div class="flex flex-col gap-3">
                                <h3 class="font-moderat_500 text-text12 md:text-text20 text-[#1F1F1F]">Tintas</h3>
                                <h2 class="font-moderat_700 text-text16 md:text-text28 text-[#111111]">Tintas HP</h2>
                                <p class="font-moderat_400 text-text12 md:text-text20 text-[#565656]">Praesent non euismod arcu, eu dignissim erat. Aliquam erat volutpat...</p>
                                <div class="flex justify-start items-center gap-2 md:gap-4">
                                    <div class="rounded-full bg-[#00AEEF] w-4 h-4 md:w-6 md:h-6"></div>
                                    <div class="rounded-full bg-[#EC008C] w-4 h-4 md:w-6 md:h-6"></div>
                                    <div class="rounded-full bg-[#FFF200] w-4 h-4 md:w-6 md:h-6"></div>
                                    <div class="rounded-full bg-[#000000] w-4 h-4 md:w-6 md:h-6"></div>
                                </div>
                            </div>
                            <p class="text-[#111111] text-text16 md:text-text28 font-space_grotesk font-bold md:font-medium">S/ 899.99</p>
                        </div>
                    </div>

                    <div class="flex flex-col gap-5">
                        <div class="bg-[#F3F3F3] flex flex-col justify-center pt-5 gap-20 relative">
                            <div class="flex justify-start items-center absolute top-[5%] left-[5%]">
                                <span class="font-space_grotesk font-medium text-text10 md:text-text20 bg-[#0051FF] text-white py-1 px-2">-20%</span>
                            </div>
                            <div class="flex justify-center items-center py-10 md:py-20">
                                <img src="{{asset('images/img/image_17.png')}}" alt="impresora" class="w-[120px] h-[90px] md:w-auto md:h-auto">
                            </div>
                        </div>
    
                        <div class="flex flex-col gap-6">
                            <div class="flex flex-col gap-3">
                                <h3 class="font-moderat_500 text-text12 md:text-text20 text-[#1F1F1F]">Tintas</h3>
                                <h2 class="font-moderat_700 text-text16 md:text-text28 text-[#111111]">Tintas HP</h2>
                                <p class="font-moderat_400 text-text12 md:text-text20 text-[#565656]">Praesent non euismod arcu, eu dignissim erat. Aliquam erat volutpat...</p>
                                <div class="flex justify-start items-center gap-2 md:gap-4">
                                    <div class="rounded-full bg-[#00AEEF] w-4 h-4 md:w-6 md:h-6"></div>
                                    <div class="rounded-full bg-[#EC008C] w-4 h-4 md:w-6 md:h-6"></div>
                                    <div class="rounded-full bg-[#FFF200] w-4 h-4 md:w-6 md:h-6"></div>
                                    <div class="rounded-full bg-[#000000] w-4 h-4 md:w-6 md:h-6"></div>
                                </div>
                            </div>
                            <p class="text-[#111111] text-text16 md:text-text28 font-space_grotesk font-bold md:font-medium">S/ 899.99</p>
                        </div>
                    </div>

                    <div class="flex flex-col gap-5">
                        <div class="bg-[#F3F3F3] flex flex-col justify-center pt-5 gap-20 relative">
                            <div class="flex justify-start items-center absolute top-[5%] left-[5%]">
                                <span class="font-space_grotesk font-medium text-text10 md:text-text20 bg-[#0051FF] text-white py-1 px-2">-20%</span>
                            </div>
                            <div class="flex justify-center items-center py-10 md:py-20">
                                <img src="{{asset('images/img/image_17.png')}}" alt="impresora" class="w-[120px] h-[90px] md:w-auto md:h-auto">
                            </div>
                        </div>
    
                        <div class="flex flex-col gap-6">
                            <div class="flex flex-col gap-3">
                                <h3 class="font-moderat_500 text-text12 md:text-text20 text-[#1F1F1F]">Tintas</h3>
                                <h2 class="font-moderat_700 text-text16 md:text-text28 text-[#111111]">Tintas HP</h2>
                                <p class="font-moderat_400 text-text12 md:text-text20 text-[#565656]">Praesent non euismod arcu, eu dignissim erat. Aliquam erat volutpat...</p>
                                <div class="flex justify-start items-center gap-2 md:gap-4">
                                    <div class="rounded-full bg-[#00AEEF] w-4 h-4 md:w-6 md:h-6"></div>
                                    <div class="rounded-full bg-[#EC008C] w-4 h-4 md:w-6 md:h-6"></div>
                                    <div class="rounded-full bg-[#FFF200] w-4 h-4 md:w-6 md:h-6"></div>
                                    <div class="rounded-full bg-[#000000] w-4 h-4 md:w-6 md:h-6"></div>
                                </div>
                            </div>
                            <p class="text-[#111111] text-text16 md:text-text28 font-space_grotesk font-bold md:font-medium">S/ 899.99</p>
                        </div>
                    </div>

                    <div class="flex flex-col gap-5">
                        <div class="bg-[#F3F3F3] flex flex-col justify-center pt-5 gap-20 relative">
                            <div class="flex justify-start items-center absolute top-[5%] left-[5%]">
                                <span class="font-space_grotesk font-medium text-text10 md:text-text20 bg-[#0051FF] text-white py-1 px-2">-20%</span>
                            </div>
                            <div class="flex justify-center items-center py-10 md:py-20">
                                <img src="{{asset('images/img/image_17.png')}}" alt="impresora" class="w-[120px] h-[90px] md:w-auto md:h-auto">
                            </div>
                        </div>
    
                        <div class="flex flex-col gap-6">
                            <div class="flex flex-col gap-3">
                                <h3 class="font-moderat_500 text-text12 md:text-text20 text-[#1F1F1F]">Tintas</h3>
                                <h2 class="font-moderat_700 text-text16 md:text-text28 text-[#111111]">Tintas HP</h2>
                                <p class="font-moderat_400 text-text12 md:text-text20 text-[#565656]">Praesent non euismod arcu, eu dignissim erat. Aliquam erat volutpat...</p>
                                <div class="flex justify-start items-center gap-2 md:gap-4">
                                    <div class="rounded-full bg-[#00AEEF] w-4 h-4 md:w-6 md:h-6"></div>
                                    <div class="rounded-full bg-[#EC008C] w-4 h-4 md:w-6 md:h-6"></div>
                                    <div class="rounded-full bg-[#FFF200] w-4 h-4 md:w-6 md:h-6"></div>
                                    <div class="rounded-full bg-[#000000] w-4 h-4 md:w-6 md:h-6"></div>
                                </div>
                            </div>
                            <p class="text-[#111111] text-text16 md:text-text28 font-space_grotesk font-bold md:font-medium">S/ 899.99</p>
                        </div>
                    </div>

                    <div class="flex flex-col gap-5">
                        <div class="bg-[#F3F3F3] flex flex-col justify-center pt-5 gap-20 relative">
                            <div class="flex justify-start items-center absolute top-[5%] left-[5%]">
                                <span class="font-space_grotesk font-medium text-text10 md:text-text20 bg-[#0051FF] text-white py-1 px-2">-20%</span>
                            </div>
                            <div class="flex justify-center items-center py-10 md:py-20">
                                <img src="{{asset('images/img/image_17.png')}}" alt="impresora" class="w-[120px] h-[90px] md:w-auto md:h-auto">
                            </div>
                        </div>
    
                        <div class="flex flex-col gap-6">
                            <div class="flex flex-col gap-3">
                                <h3 class="font-moderat_500 text-text12 md:text-text20 text-[#1F1F1F]">Tintas</h3>
                                <h2 class="font-moderat_700 text-text16 md:text-text28 text-[#111111]">Tintas HP</h2>
                                <p class="font-moderat_400 text-text12 md:text-text20 text-[#565656]">Praesent non euismod arcu, eu dignissim erat. Aliquam erat volutpat...</p>
                                <div class="flex justify-start items-center gap-2 md:gap-4">
                                    <div class="rounded-full bg-[#00AEEF] w-4 h-4 md:w-6 md:h-6"></div>
                                    <div class="rounded-full bg-[#EC008C] w-4 h-4 md:w-6 md:h-6"></div>
                                    <div class="rounded-full bg-[#FFF200] w-4 h-4 md:w-6 md:h-6"></div>
                                    <div class="rounded-full bg-[#000000] w-4 h-4 md:w-6 md:h-6"></div>
                                </div>
                            </div>
                            <p class="text-[#111111] text-text16 md:text-text28 font-space_grotesk font-bold md:font-medium">S/ 899.99</p>
                        </div>
                    </div>

                    <div class="flex flex-col gap-5">
                        <div class="bg-[#F3F3F3] flex flex-col justify-center pt-5 gap-20 relative">
                            <div class="flex justify-start items-center absolute top-[5%] left-[5%]">
                                <span class="font-space_grotesk font-medium text-text10 md:text-text20 bg-[#0051FF] text-white py-1 px-2">-20%</span>
                            </div>
                            <div class="flex justify-center items-center py-10 md:py-20">
                                <img src="{{asset('images/img/image_17.png')}}" alt="impresora" class="w-[120px] h-[90px] md:w-auto md:h-auto">
                            </div>
                        </div>
    
                        <div class="flex flex-col gap-6">
                            <div class="flex flex-col gap-3">
                                <h3 class="font-moderat_500 text-text12 md:text-text20 text-[#1F1F1F]">Tintas</h3>
                                <h2 class="font-moderat_700 text-text16 md:text-text28 text-[#111111]">Tintas HP</h2>
                                <p class="font-moderat_400 text-text12 md:text-text20 text-[#565656]">Praesent non euismod arcu, eu dignissim erat. Aliquam erat volutpat...</p>
                                <div class="flex justify-start items-center gap-2 md:gap-4">
                                    <div class="rounded-full bg-[#00AEEF] w-4 h-4 md:w-6 md:h-6"></div>
                                    <div class="rounded-full bg-[#EC008C] w-4 h-4 md:w-6 md:h-6"></div>
                                    <div class="rounded-full bg-[#FFF200] w-4 h-4 md:w-6 md:h-6"></div>
                                    <div class="rounded-full bg-[#000000] w-4 h-4 md:w-6 md:h-6"></div>
                                </div>
                            </div>
                            <p class="text-[#111111] text-text16 md:text-text28 font-space_grotesk font-bold md:font-medium">S/ 899.99</p>
                        </div>
                    </div>

                    <div class="flex flex-col gap-5">
                        <div class="bg-[#F3F3F3] flex flex-col justify-center pt-5 gap-20 relative">
                            <div class="flex justify-start items-center absolute top-[5%] left-[5%]">
                                <span class="font-space_grotesk font-medium text-text10 md:text-text20 bg-[#0051FF] text-white py-1 px-2">-20%</span>
                            </div>
                            <div class="flex justify-center items-center py-10 md:py-20">
                                <img src="{{asset('images/img/image_17.png')}}" alt="impresora" class="w-[120px] h-[90px] md:w-auto md:h-auto">
                            </div>
                        </div>
    
                        <div class="flex flex-col gap-6">
                            <div class="flex flex-col gap-3">
                                <h3 class="font-moderat_500 text-text12 md:text-text20 text-[#1F1F1F]">Tintas</h3>
                                <h2 class="font-moderat_700 text-text16 md:text-text28 text-[#111111]">Tintas HP</h2>
                                <p class="font-moderat_400 text-text12 md:text-text20 text-[#565656]">Praesent non euismod arcu, eu dignissim erat. Aliquam erat volutpat...</p>
                                <div class="flex justify-start items-center gap-2 md:gap-4">
                                    <div class="rounded-full bg-[#00AEEF] w-4 h-4 md:w-6 md:h-6"></div>
                                    <div class="rounded-full bg-[#EC008C] w-4 h-4 md:w-6 md:h-6"></div>
                                    <div class="rounded-full bg-[#FFF200] w-4 h-4 md:w-6 md:h-6"></div>
                                    <div class="rounded-full bg-[#000000] w-4 h-4 md:w-6 md:h-6"></div>
                                </div>
                            </div>
                            <p class="text-[#111111] text-text16 md:text-text28 font-space_grotesk font-bold md:font-medium">S/ 899.99</p>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </section>
</main>


@section('scripts_importados')
    <script>
        
    </script>
@stop

@stop
