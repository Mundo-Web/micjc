@extends('components.public.matrix')

@section('css_importados')

@stop


@section('content')
<main>
    <section>
        <p>Colocar background</p>
    </section>

    <section class="w-11/12 md:w-10/12 mx-auto">
        <div class="grid grid-cols-2 lg:grid-cols-4 pb-12">
            <div class="col-span-2 row-span-1 order-1 lg:order-1 lg:col-span-2 lg:row-span-1 font-moderat_500 text-text16 md:text-text18 flex justify-start items-center gap-5">
                <a href="#" class="text-[#0711E5]">Todos</a>
                <a href="#" class="text-[#111111]">Tintas</a>
                <a href="#" class="text-[#111111]">Toners</a>
                <a href="#" class="text-[#111111]">Impresoras</a>
                <a href="#" class="text-[#111111]">Laptops</a>
            </div>
            <div class="col-span-2 row-span-1 order-4 lg:order-2 lg:col-span-2 lg:row-span-1 flex justify-end items-center">
                <p>pagination</p>
            </div>
    
            <div class="col-span-2 row-span-1 order-2 lg:order-3 lg:col-span-4 lg:row-span-1 flex justify-start items-center gap-5 font-moderat_500 text-text16 md:text-text18">
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
    
                        <div class="flex flex-col gap-5">
                            <h3 class="font-moderat_500 text-text12 md:text-text20 text-[#1F1F1F]">Tintas</h3>
                            <h2 class="font-moderat_700 text-text16 md:text-text28 text-[#111111]">Tintas HP</h2>
                            <p class="font-moderat_400 text-text12 md:text-text20 text-[#565656]">Praesent non euismod arcu, eu dignissim erat. Aliquam erat volutpat...</p>
                            <div class="flex justify-start items-center gap-2 md:gap-4">
                                <div class="rounded-full bg-[#00AEEF] w-4 h-4 md:w-6 md:h-6"></div>
                                <div class="rounded-full bg-[#EC008C] w-4 h-4 md:w-6 md:h-6"></div>
                                <div class="rounded-full bg-[#FFF200] w-4 h-4 md:w-6 md:h-6"></div>
                                <div class="rounded-full bg-[#000000] w-4 h-4 md:w-6 md:h-6"></div>
                            </div>
                            <p class="text-[#111111] text-text16 md:text-text28 font-space_grotesk font-medium">S/ 899.99</p>
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
    
                        <div class="flex flex-col gap-5">
                            <h3 class="font-moderat_500 text-text12 md:text-text20 text-[#1F1F1F]">Tintas</h3>
                            <h2 class="font-moderat_700 text-text16 md:text-text28 text-[#111111]">Tintas HP</h2>
                            <p class="font-moderat_400 text-text12 md:text-text20 text-[#565656]">Praesent non euismod arcu, eu dignissim erat. Aliquam erat volutpat...</p>
                            <div class="flex justify-start items-center gap-2 md:gap-4">
                                <div class="rounded-full bg-[#00AEEF] w-4 h-4 md:w-6 md:h-6"></div>
                                <div class="rounded-full bg-[#EC008C] w-4 h-4 md:w-6 md:h-6"></div>
                                <div class="rounded-full bg-[#FFF200] w-4 h-4 md:w-6 md:h-6"></div>
                                <div class="rounded-full bg-[#000000] w-4 h-4 md:w-6 md:h-6"></div>
                            </div>
                            <p class="text-[#111111] text-text16 md:text-text28 font-space_grotesk font-medium">S/ 899.99</p>
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
    
                        <div class="flex flex-col gap-5">
                            <h3 class="font-moderat_500 text-text12 md:text-text20 text-[#1F1F1F]">Tintas</h3>
                            <h2 class="font-moderat_700 text-text16 md:text-text28 text-[#111111]">Tintas HP</h2>
                            <p class="font-moderat_400 text-text12 md:text-text20 text-[#565656]">Praesent non euismod arcu, eu dignissim erat. Aliquam erat volutpat...</p>
                            <div class="flex justify-start items-center gap-2 md:gap-4">
                                <div class="rounded-full bg-[#00AEEF] w-4 h-4 md:w-6 md:h-6"></div>
                                <div class="rounded-full bg-[#EC008C] w-4 h-4 md:w-6 md:h-6"></div>
                                <div class="rounded-full bg-[#FFF200] w-4 h-4 md:w-6 md:h-6"></div>
                                <div class="rounded-full bg-[#000000] w-4 h-4 md:w-6 md:h-6"></div>
                            </div>
                            <p class="text-[#111111] text-text16 md:text-text28 font-space_grotesk font-medium">S/ 899.99</p>
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
    
                        <div class="flex flex-col gap-5">
                            <h3 class="font-moderat_500 text-text12 md:text-text20 text-[#1F1F1F]">Tintas</h3>
                            <h2 class="font-moderat_700 text-text16 md:text-text28 text-[#111111]">Tintas HP</h2>
                            <p class="font-moderat_400 text-text12 md:text-text20 text-[#565656]">Praesent non euismod arcu, eu dignissim erat. Aliquam erat volutpat...</p>
                            <div class="flex justify-start items-center gap-2 md:gap-4">
                                <div class="rounded-full bg-[#00AEEF] w-4 h-4 md:w-6 md:h-6"></div>
                                <div class="rounded-full bg-[#EC008C] w-4 h-4 md:w-6 md:h-6"></div>
                                <div class="rounded-full bg-[#FFF200] w-4 h-4 md:w-6 md:h-6"></div>
                                <div class="rounded-full bg-[#000000] w-4 h-4 md:w-6 md:h-6"></div>
                            </div>
                            <p class="text-[#111111] text-text16 md:text-text28 font-space_grotesk font-medium">S/ 899.99</p>
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
    
                        <div class="flex flex-col gap-5">
                            <h3 class="font-moderat_500 text-text12 md:text-text20 text-[#1F1F1F]">Tintas</h3>
                            <h2 class="font-moderat_700 text-text16 md:text-text28 text-[#111111]">Tintas HP</h2>
                            <p class="font-moderat_400 text-text12 md:text-text20 text-[#565656]">Praesent non euismod arcu, eu dignissim erat. Aliquam erat volutpat...</p>
                            <div class="flex justify-start items-center gap-2 md:gap-4">
                                <div class="rounded-full bg-[#00AEEF] w-4 h-4 md:w-6 md:h-6"></div>
                                <div class="rounded-full bg-[#EC008C] w-4 h-4 md:w-6 md:h-6"></div>
                                <div class="rounded-full bg-[#FFF200] w-4 h-4 md:w-6 md:h-6"></div>
                                <div class="rounded-full bg-[#000000] w-4 h-4 md:w-6 md:h-6"></div>
                            </div>
                            <p class="text-[#111111] text-text16 md:text-text28 font-space_grotesk font-medium">S/ 899.99</p>
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
    
                        <div class="flex flex-col gap-5">
                            <h3 class="font-moderat_500 text-text12 md:text-text20 text-[#1F1F1F]">Tintas</h3>
                            <h2 class="font-moderat_700 text-text16 md:text-text28 text-[#111111]">Tintas HP</h2>
                            <p class="font-moderat_400 text-text12 md:text-text20 text-[#565656]">Praesent non euismod arcu, eu dignissim erat. Aliquam erat volutpat...</p>
                            <div class="flex justify-start items-center gap-2 md:gap-4">
                                <div class="rounded-full bg-[#00AEEF] w-4 h-4 md:w-6 md:h-6"></div>
                                <div class="rounded-full bg-[#EC008C] w-4 h-4 md:w-6 md:h-6"></div>
                                <div class="rounded-full bg-[#FFF200] w-4 h-4 md:w-6 md:h-6"></div>
                                <div class="rounded-full bg-[#000000] w-4 h-4 md:w-6 md:h-6"></div>
                            </div>
                            <p class="text-[#111111] text-text16 md:text-text28 font-space_grotesk font-medium">S/ 899.99</p>
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
    
                        <div class="flex flex-col gap-5">
                            <h3 class="font-moderat_500 text-text12 md:text-text20 text-[#1F1F1F]">Tintas</h3>
                            <h2 class="font-moderat_700 text-text16 md:text-text28 text-[#111111]">Tintas HP</h2>
                            <p class="font-moderat_400 text-text12 md:text-text20 text-[#565656]">Praesent non euismod arcu, eu dignissim erat. Aliquam erat volutpat...</p>
                            <div class="flex justify-start items-center gap-2 md:gap-4">
                                <div class="rounded-full bg-[#00AEEF] w-4 h-4 md:w-6 md:h-6"></div>
                                <div class="rounded-full bg-[#EC008C] w-4 h-4 md:w-6 md:h-6"></div>
                                <div class="rounded-full bg-[#FFF200] w-4 h-4 md:w-6 md:h-6"></div>
                                <div class="rounded-full bg-[#000000] w-4 h-4 md:w-6 md:h-6"></div>
                            </div>
                            <p class="text-[#111111] text-text16 md:text-text28 font-space_grotesk font-medium">S/ 899.99</p>
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
    
                        <div class="flex flex-col gap-5">
                            <h3 class="font-moderat_500 text-text12 md:text-text20 text-[#1F1F1F]">Tintas</h3>
                            <h2 class="font-moderat_700 text-text16 md:text-text28 text-[#111111]">Tintas HP</h2>
                            <p class="font-moderat_400 text-text12 md:text-text20 text-[#565656]">Praesent non euismod arcu, eu dignissim erat. Aliquam erat volutpat...</p>
                            <div class="flex justify-start items-center gap-2 md:gap-4">
                                <div class="rounded-full bg-[#00AEEF] w-4 h-4 md:w-6 md:h-6"></div>
                                <div class="rounded-full bg-[#EC008C] w-4 h-4 md:w-6 md:h-6"></div>
                                <div class="rounded-full bg-[#FFF200] w-4 h-4 md:w-6 md:h-6"></div>
                                <div class="rounded-full bg-[#000000] w-4 h-4 md:w-6 md:h-6"></div>
                            </div>
                            <p class="text-[#111111] text-text16 md:text-text28 font-space_grotesk font-medium">S/ 899.99</p>
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
    
                        <div class="flex flex-col gap-5">
                            <h3 class="font-moderat_500 text-text12 md:text-text20 text-[#1F1F1F]">Tintas</h3>
                            <h2 class="font-moderat_700 text-text16 md:text-text28 text-[#111111]">Tintas HP</h2>
                            <p class="font-moderat_400 text-text12 md:text-text20 text-[#565656]">Praesent non euismod arcu, eu dignissim erat. Aliquam erat volutpat...</p>
                            <div class="flex justify-start items-center gap-2 md:gap-4">
                                <div class="rounded-full bg-[#00AEEF] w-4 h-4 md:w-6 md:h-6"></div>
                                <div class="rounded-full bg-[#EC008C] w-4 h-4 md:w-6 md:h-6"></div>
                                <div class="rounded-full bg-[#FFF200] w-4 h-4 md:w-6 md:h-6"></div>
                                <div class="rounded-full bg-[#000000] w-4 h-4 md:w-6 md:h-6"></div>
                            </div>
                            <p class="text-[#111111] text-text16 md:text-text28 font-space_grotesk font-medium">S/ 899.99</p>
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
    
                        <div class="flex flex-col gap-5">
                            <h3 class="font-moderat_500 text-text12 md:text-text20 text-[#1F1F1F]">Tintas</h3>
                            <h2 class="font-moderat_700 text-text16 md:text-text28 text-[#111111]">Tintas HP</h2>
                            <p class="font-moderat_400 text-text12 md:text-text20 text-[#565656]">Praesent non euismod arcu, eu dignissim erat. Aliquam erat volutpat...</p>
                            <div class="flex justify-start items-center gap-2 md:gap-4">
                                <div class="rounded-full bg-[#00AEEF] w-4 h-4 md:w-6 md:h-6"></div>
                                <div class="rounded-full bg-[#EC008C] w-4 h-4 md:w-6 md:h-6"></div>
                                <div class="rounded-full bg-[#FFF200] w-4 h-4 md:w-6 md:h-6"></div>
                                <div class="rounded-full bg-[#000000] w-4 h-4 md:w-6 md:h-6"></div>
                            </div>
                            <p class="text-[#111111] text-text16 md:text-text28 font-space_grotesk font-medium">S/ 899.99</p>
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
    
                        <div class="flex flex-col gap-5">
                            <h3 class="font-moderat_500 text-text12 md:text-text20 text-[#1F1F1F]">Tintas</h3>
                            <h2 class="font-moderat_700 text-text16 md:text-text28 text-[#111111]">Tintas HP</h2>
                            <p class="font-moderat_400 text-text12 md:text-text20 text-[#565656]">Praesent non euismod arcu, eu dignissim erat. Aliquam erat volutpat...</p>
                            <div class="flex justify-start items-center gap-2 md:gap-4">
                                <div class="rounded-full bg-[#00AEEF] w-4 h-4 md:w-6 md:h-6"></div>
                                <div class="rounded-full bg-[#EC008C] w-4 h-4 md:w-6 md:h-6"></div>
                                <div class="rounded-full bg-[#FFF200] w-4 h-4 md:w-6 md:h-6"></div>
                                <div class="rounded-full bg-[#000000] w-4 h-4 md:w-6 md:h-6"></div>
                            </div>
                            <p class="text-[#111111] text-text16 md:text-text28 font-space_grotesk font-medium">S/ 899.99</p>
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
    
                        <div class="flex flex-col gap-5">
                            <h3 class="font-moderat_500 text-text12 md:text-text20 text-[#1F1F1F]">Tintas</h3>
                            <h2 class="font-moderat_700 text-text16 md:text-text28 text-[#111111]">Tintas HP</h2>
                            <p class="font-moderat_400 text-text12 md:text-text20 text-[#565656]">Praesent non euismod arcu, eu dignissim erat. Aliquam erat volutpat...</p>
                            <div class="flex justify-start items-center gap-2 md:gap-4">
                                <div class="rounded-full bg-[#00AEEF] w-4 h-4 md:w-6 md:h-6"></div>
                                <div class="rounded-full bg-[#EC008C] w-4 h-4 md:w-6 md:h-6"></div>
                                <div class="rounded-full bg-[#FFF200] w-4 h-4 md:w-6 md:h-6"></div>
                                <div class="rounded-full bg-[#000000] w-4 h-4 md:w-6 md:h-6"></div>
                            </div>
                            <p class="text-[#111111] text-text16 md:text-text28 font-space_grotesk font-medium">S/ 899.99</p>
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
    
                        <div class="flex flex-col gap-5">
                            <h3 class="font-moderat_500 text-text12 md:text-text20 text-[#1F1F1F]">Tintas</h3>
                            <h2 class="font-moderat_700 text-text16 md:text-text28 text-[#111111]">Tintas HP</h2>
                            <p class="font-moderat_400 text-text12 md:text-text20 text-[#565656]">Praesent non euismod arcu, eu dignissim erat. Aliquam erat volutpat...</p>
                            <div class="flex justify-start items-center gap-2 md:gap-4">
                                <div class="rounded-full bg-[#00AEEF] w-4 h-4 md:w-6 md:h-6"></div>
                                <div class="rounded-full bg-[#EC008C] w-4 h-4 md:w-6 md:h-6"></div>
                                <div class="rounded-full bg-[#FFF200] w-4 h-4 md:w-6 md:h-6"></div>
                                <div class="rounded-full bg-[#000000] w-4 h-4 md:w-6 md:h-6"></div>
                            </div>
                            <p class="text-[#111111] text-text16 md:text-text28 font-space_grotesk font-medium">S/ 899.99</p>
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
    
                        <div class="flex flex-col gap-5">
                            <h3 class="font-moderat_500 text-text12 md:text-text20 text-[#1F1F1F]">Tintas</h3>
                            <h2 class="font-moderat_700 text-text16 md:text-text28 text-[#111111]">Tintas HP</h2>
                            <p class="font-moderat_400 text-text12 md:text-text20 text-[#565656]">Praesent non euismod arcu, eu dignissim erat. Aliquam erat volutpat...</p>
                            <div class="flex justify-start items-center gap-2 md:gap-4">
                                <div class="rounded-full bg-[#00AEEF] w-4 h-4 md:w-6 md:h-6"></div>
                                <div class="rounded-full bg-[#EC008C] w-4 h-4 md:w-6 md:h-6"></div>
                                <div class="rounded-full bg-[#FFF200] w-4 h-4 md:w-6 md:h-6"></div>
                                <div class="rounded-full bg-[#000000] w-4 h-4 md:w-6 md:h-6"></div>
                            </div>
                            <p class="text-[#111111] text-text16 md:text-text28 font-space_grotesk font-medium">S/ 899.99</p>
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
    
                        <div class="flex flex-col gap-5">
                            <h3 class="font-moderat_500 text-text12 md:text-text20 text-[#1F1F1F]">Tintas</h3>
                            <h2 class="font-moderat_700 text-text16 md:text-text28 text-[#111111]">Tintas HP</h2>
                            <p class="font-moderat_400 text-text12 md:text-text20 text-[#565656]">Praesent non euismod arcu, eu dignissim erat. Aliquam erat volutpat...</p>
                            <div class="flex justify-start items-center gap-2 md:gap-4">
                                <div class="rounded-full bg-[#00AEEF] w-4 h-4 md:w-6 md:h-6"></div>
                                <div class="rounded-full bg-[#EC008C] w-4 h-4 md:w-6 md:h-6"></div>
                                <div class="rounded-full bg-[#FFF200] w-4 h-4 md:w-6 md:h-6"></div>
                                <div class="rounded-full bg-[#000000] w-4 h-4 md:w-6 md:h-6"></div>
                            </div>
                            <p class="text-[#111111] text-text16 md:text-text28 font-space_grotesk font-medium">S/ 899.99</p>
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
    
                        <div class="flex flex-col gap-5">
                            <h3 class="font-moderat_500 text-text12 md:text-text20 text-[#1F1F1F]">Tintas</h3>
                            <h2 class="font-moderat_700 text-text16 md:text-text28 text-[#111111]">Tintas HP</h2>
                            <p class="font-moderat_400 text-text12 md:text-text20 text-[#565656]">Praesent non euismod arcu, eu dignissim erat. Aliquam erat volutpat...</p>
                            <div class="flex justify-start items-center gap-2 md:gap-4">
                                <div class="rounded-full bg-[#00AEEF] w-4 h-4 md:w-6 md:h-6"></div>
                                <div class="rounded-full bg-[#EC008C] w-4 h-4 md:w-6 md:h-6"></div>
                                <div class="rounded-full bg-[#FFF200] w-4 h-4 md:w-6 md:h-6"></div>
                                <div class="rounded-full bg-[#000000] w-4 h-4 md:w-6 md:h-6"></div>
                            </div>
                            <p class="text-[#111111] text-text16 md:text-text28 font-space_grotesk font-medium">S/ 899.99</p>
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
