<x-app-layout title="Editar Producto">
  @section('css')
    <link rel="stylesheet" href="{{ asset('/css/vendor/dropzone.min.css') }}" />
  @endsection

  @section('js_vendor')
    <script src="{{ asset('/js/cs/scrollspy.js') }}"></script>
    <script src="{{ asset('/js/vendor/dropzone.min.js') }}"></script>
    <script src="{{ asset('/js/vendor/singleimageupload.js') }}"></script>
  @endsection

  @section('js_page')
    <script src="{{ asset('/js/cs/dropzone.templates.js') }}"></script>
    <script src="{{ asset('/js/forms/controls.dropzone.js') }}"></script>
  @endsection

  <style>
    .dropzone {
      min-height: 90px;
      border: 1px solid rgb(209 213 219 / 1) !important;
      background: var(--foreground) !important;
      padding: 14px !important;
      border-radius: 20px !important;
      color: var(--body) !important;
      height: auto;
      /* padding-right: initial !important;
      padding-bottom: initial !important; */
    }

    .dropzone .img-thumbnail {
      height: 58px;
      width: 100% !important;
      -o-object-fit: cover !important;
      object-fit: cover !important;
      padding: initial;
      width: 100%;
      height: 100%;
      filter: initial !important;
      transform: initial !important;
      border-radius: 20px;
      border-top-right-radius: initial;
      border-bottom-right-radius: initial;
      background-color: unset !important;
    }

    .dropzone .image-container {
      width: 30%;
    }

    .dropzone:hover .dz-message {
      color: var(--primary) !important;
    }

    .dropzone.dz-clickable .dz-message {
      position: absolute;
      margin: 0 auto;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: var(--body);
    }

    .dropzone.dz-clickable .dz-message span {
      top: 50px !important;
    }

    .dropzone .dz-preview.dz-image-preview,
    .dropzone .dz-preview.dz-file-preview {
      max-width: 100%;
      min-height: unset;
      border: 1px solid rgb(209 213 219 / 1) !important;
      border-radius: 20px !important;
      background: var(--foreground) !important;
      color: var(--body) !important;
      margin: 1.75rem;
      margin-left: initial !important;
      margin-top: initial !important;
    }

    .dropzone .dz-preview.dz-image-preview>div,
    .dropzone .dz-preview.dz-file-preview>div {
      position: relative;
    }

    .dropzone .dz-preview.dz-image-preview .dz-image,
    .dropzone .dz-preview.dz-file-preview .dz-image {
      height: 100%;
      width: 80px;
      float: left;
      border-radius: initial;
    }

    .dropzone .dz-preview.dz-image-preview .dz-image img,
    .dropzone .dz-preview.dz-file-preview .dz-image img {
      width: 100%;
    }

    .dropzone .dz-preview.dz-image-preview .preview-container,
    .dropzone .dz-preview.dz-file-preview .preview-container {
      transition: initial !important;
      -webkit-animation: initial !important;
      animation: initial !important;
      margin-left: 0;
      margin-top: 0;
      position: relative;
      width: 100%;
      height: 100%;
    }

    .dropzone .dz-preview.dz-image-preview .preview-container i,
    .dropzone .dz-preview.dz-file-preview .preview-container i {
      color: var(--primary);
      font-size: 20px;
      position: absolute;
      left: 50%;
      top: 29px;
      transform: translateX(-50%) translateY(-50%) !important;
      height: 22px;
    }

    .dropzone .dz-preview.dz-image-preview strong,
    .dropzone .dz-preview.dz-file-preview strong {
      font-weight: normal;
    }

    .dropzone .dz-preview.dz-image-preview .remove,
    .dropzone .dz-preview.dz-file-preview .remove {
      position: absolute;
      right: 8px;
      top: 8px;
      color: var(--muted) !important;
    }

    .dropzone .dz-preview.dz-image-preview .remove i,
    .dropzone .dz-preview.dz-file-preview .remove i {
      cursor: pointer;
    }

    .dropzone .dz-preview.dz-image-preview .remove:hover,
    .dropzone .dz-preview.dz-file-preview .remove:hover {
      color: var(--primary) !important;
    }

    .dropzone .dz-preview.dz-image-preview .dz-details,
    .dropzone .dz-preview.dz-file-preview .dz-details {
      position: static;
      display: block;
      opacity: 1;
      text-align: left;
      min-width: unset;
      z-index: initial;

      float: left;
      padding: 0.75rem 1rem;
      width: 75%;
    }

    .dropzone .dz-preview.dz-image-preview .dz-details .dz-size,
    .dropzone .dz-preview.dz-file-preview .dz-details .dz-size {
      margin-bottom: 0;
      font-size: 1em;
    }

    .dropzone .dz-preview.dz-image-preview .dz-details .dz-filename span,
    .dropzone .dz-preview.dz-file-preview .dz-details .dz-filename span {
      border: initial !important;
      background: transparent !important;
    }

    .dropzone .dz-preview.dz-image-preview .dz-error-mark,
    .dropzone .dz-preview.dz-image-preview .dz-success-mark,
    .dropzone .dz-preview.dz-file-preview .dz-error-mark,
    .dropzone .dz-preview.dz-file-preview .dz-success-mark {
      color: var(--primary) !important;
      margin-left: 0;
      margin-top: 0;
      bottom: initial;
      right: initial;
      top: 13px;
      left: 23px;
      padding: 7px 8px;
      background: var(--foreground);
      border-radius: var(--border-radius-xl);
      line-height: 1;
      position: absolute;
    }

    .dropzone .dz-preview.dz-image-preview .dz-error-mark i,
    .dropzone .dz-preview.dz-image-preview .dz-success-mark i,
    .dropzone .dz-preview.dz-file-preview .dz-error-mark i,
    .dropzone .dz-preview.dz-file-preview .dz-success-mark i {
      font-size: 18px !important;
      color: var(--primary) !important;
    }

    .dropzone .dz-preview.dz-image-preview .dz-error-mark i,
    .dropzone .dz-preview.dz-file-preview .dz-error-mark i {
      color: var(--primary) !important;
    }

    .dropzone .dz-preview.dz-image-preview .dz-progress,
    .dropzone .dz-preview.dz-file-preview .dz-progress {
      width: 100%;
      margin-left: 0;
      margin-top: 0;
      right: 0;
      height: 2px !important;
      left: 15px;
      margin-top: 5px;
      position: static;
    }

    .dropzone .dz-preview.dz-image-preview .dz-progress .dz-upload,
    .dropzone .dz-preview.dz-file-preview .dz-progress .dz-upload {
      width: 100%;
      background: rgb(30 168 231) !important;
    }

    .dropzone .dz-preview.dz-image-preview .dz-error-message,
    .dropzone .dz-preview.dz-file-preview .dz-error-message {
      background: var(--foreground) !important;
      border: 1px solid blue;
      top: 60px;
      color: var(--body);
      padding: calc(var(--card-spacing-xs) / 2) var(--card-spacing-xs);
      border-radius: var(--border-radius-md);
      font-size: 0.875em;
      display: block;
    }

    .dropzone .dz-preview.dz-image-preview .dz-error-message:after,
    .dropzone .dz-preview.dz-file-preview .dz-error-message:after {
      border-bottom: 6px solid blue !important;
    }

    .dropzone .dz-preview.dz-image-preview .dz-error-message:before,
    .dropzone .dz-preview.dz-file-preview .dz-error-message:before {
      content: " ";
      position: absolute;
      top: -5px;
      left: 64px;
      z-index: 1;
      border-left: 6px solid transparent;
      border-right: 6px solid transparent;
      border-bottom: 6px solid var(--foreground) !important;
    }

    .dropzone .dz-preview.dz-image-preview [data-dz-name],
    .dropzone .dz-preview.dz-file-preview [data-dz-name] {
      white-space: nowrap;
      text-overflow: ellipsis;
      width: calc(100% - 35px);
      display: inline-block;
      overflow: hidden;
    }

    .dropzone.dropzone-columns .dz-preview.dz-image-preview,
    .dropzone.dropzone-columns .dz-preview.dz-file-preview {
      margin-top: var(--bs-gutter-y) !important;
      margin-bottom: initial !important;
    }

    .dropzone:not(.dropzone-columns) .dz-preview.dz-image-preview,
    .dropzone:not(.dropzone-columns) .dz-preview.dz-file-preview {
      width: 100%;
    }

    .dropzone .dz-preview.dz-file-preview .img-thumbnail {
      display: none;
    }

    .dropzone .dz-error.dz-preview.dz-file-preview .preview-icon {
      display: none;
    }

    .dropzone .dz-error.dz-preview.dz-file-preview .dz-error-mark,
    .dropzone .dz-error.dz-preview.dz-file-preview .dz-success-mark {
      color: var(--primary) !important;
      right: 8px;
      left: initial;
      top: initial;
      bottom: 3px;
    }

    .dropzone .dz-preview.dz-image-preview .preview-icon {
      display: none;
    }

    .dropzone.dz-drag-hover {
      border-color: rgba(var(--primary-rgb), 1) !important;
    }

    .dropzone.dz-drag-hover .dz-message {
      color: var(--primary) !important;
      opacity: 1;
    }

    .dropzone.dropzone-top-label {
      padding: 2rem 0.5rem 0rem 1rem !important;
      min-height: 103px !important;
    }

    .form-floating .dropzone.dropzone-floating-label {
      padding: 1rem !important;
      min-height: 101px !important;
    }

    .form-floating .dropzone.dropzone-floating-label.dz-started {
      padding-top: 2rem !important;
      padding-bottom: 0 !important;
    }

    .form-floating .dropzone.dropzone-floating-label.dz-started~label {
      transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
      color: var(--muted);
    }

    .dropzone.dropzone-filled {
      border: 1px solid transparent !important;
      background: var(--background-light) !important;
      padding-left: 45px !important;
    }

    .dropzone.dropzone-filled .dz-message {
      top: initial;
      left: 45px;
      transform: initial;
      color: var(--muted) !important;
      font-weight: 300;
      top: 11px;
    }

    .dropzone.dropzone-filled+i {
      margin-top: 0;
      top: 14px;
    }

    .dropzone.dropzone-filled.dropzone.dz-drag-hover {
      background: var(--foreground) !important;
      border-color: rgba(var(--primary-rgb), 1) !important;
    }

    .dropzone .dz-preview:not(.dz-processing) .dz-progress {
      -webkit-animation: initial;
      animation: initial;
    }

    .dropzone.row {
      min-height: 210px;
    }

    .dropzone.row.border-0 {
      border: initial !important;
    }

    .dropzone.row.p-0 {
      padding: initial !important;
    }

    .dropzone.row .dz-preview.dz-image-preview.col.border-0,
    .dropzone.row .dz-preview.dz-file-preview.col.border-0 {
      border: initial !important;
    }

    .dropzone.row .dz-preview.dz-image-preview .dz-error-mark,
    .dropzone.row .dz-preview.dz-image-preview .dz-success-mark,
    .dropzone.row .dz-preview.dz-file-preview .dz-error-mark,
    .dropzone.row .dz-preview.dz-file-preview .dz-success-mark {
      left: -16px;
      margin-left: 50%;
      top: 20px;
      margin-top: 0;
    }

    .dropzone.row .dz-preview.dz-image-preview .remove,
    .dropzone.row .dz-preview.dz-file-preview .remove {
      bottom: 25px;
      top: initial;
      right: 20px;
      left: initial;
    }

    .dropzone.row .dz-preview.dz-image-preview .dz-error-message,
    .dropzone.row .dz-preview.dz-file-preview .dz-error-message {
      left: 50%;
      right: initial;
      transform: translateX(-50%);
    }
  </style>


  <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div
        class="col-span-full xl:col-span-8 bg-white dark:bg-slate-800 shadow-lg rounded-sm border border-slate-200 dark:border-slate-700">
        <header class="px-5 py-4 border-b border-slate-100 dark:border-slate-700">

          <h2 class="font-semibold text-slate-800 dark:text-slate-100 text-2xl tracking-tight">

            Edición de producto: {{ $product->producto }}
          </h2>
        </header>
        <div class="flex flex-col gap-2 p-3 ">
          <div class="flex gap-2 p-3 ">
            <div class="basis-0 md:basis-3/5">
              <div class="rounded shadow-lg p-4 px-4 ">


                <div id='general' class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5 ">

                  <div class="col-span-1 md:col-span-5 mt-2">

                    <label for="producto">Producto</label>

                    <div class="relative mb-2  mt-2">
                      <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg"
                          version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0"
                          y="0" viewBox="0 0 469.336 469.336" style="enable-background:new 0 0 512 512"
                          xml:space="preserve" class="">
                          <g>
                            <path
                              d="m456.836 76.168-64-64.054c-16.125-16.139-44.177-16.17-60.365.031L45.763 301.682a10.733 10.733 0 0 0-2.688 4.587L.409 455.73a10.682 10.682 0 0 0 10.261 13.606c.979 0 1.969-.136 2.927-.407l149.333-42.703a10.714 10.714 0 0 0 4.583-2.69l289.323-286.983c8.063-8.069 12.5-18.787 12.5-30.192s-4.437-22.124-12.5-30.193zM285.989 89.737l39.264 39.264-204.996 204.997-14.712-29.434a10.671 10.671 0 0 0-9.542-5.896H78.921L285.989 89.737zm-259.788 353.4L40.095 394.5l34.742 34.742-48.636 13.895zm123.135-35.177-51.035 14.579-51.503-51.503 14.579-51.035h28.031l18.385 36.771a10.671 10.671 0 0 0 4.771 4.771l36.771 18.385v28.032zm21.334-17.543v-17.082c0-4.042-2.281-7.729-5.896-9.542l-29.434-14.712 204.996-204.996 39.264 39.264-208.93 207.068zM441.784 121.72l-47.033 46.613-93.747-93.747 46.582-47.001c8.063-8.063 22.104-8.063 30.167 0l64 64c4.031 4.031 6.25 9.385 6.25 15.083s-2.219 11.052-6.219 15.052z"
                              fill="#9F9F9F" opacity="1" data-original="#000000" class=""></path>
                          </g>
                        </svg>
                      </div>
                      <input type="text" id="producto" name="producto" value="{{ $product->producto }}"
                        class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Producto">


                    </div>
                  </div>
                  <div class="md:col-span-5 mt-2">

                    <label for="extract">Extracto</label>

                    <div class="relative mb-2  mt-2">
                      <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg"
                          version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0"
                          y="0" viewBox="0 0 469.336 469.336" style="enable-background:new 0 0 512 512"
                          xml:space="preserve" class="">
                          <g>
                            <path
                              d="m456.836 76.168-64-64.054c-16.125-16.139-44.177-16.17-60.365.031L45.763 301.682a10.733 10.733 0 0 0-2.688 4.587L.409 455.73a10.682 10.682 0 0 0 10.261 13.606c.979 0 1.969-.136 2.927-.407l149.333-42.703a10.714 10.714 0 0 0 4.583-2.69l289.323-286.983c8.063-8.069 12.5-18.787 12.5-30.192s-4.437-22.124-12.5-30.193zM285.989 89.737l39.264 39.264-204.996 204.997-14.712-29.434a10.671 10.671 0 0 0-9.542-5.896H78.921L285.989 89.737zm-259.788 353.4L40.095 394.5l34.742 34.742-48.636 13.895zm123.135-35.177-51.035 14.579-51.503-51.503 14.579-51.035h28.031l18.385 36.771a10.671 10.671 0 0 0 4.771 4.771l36.771 18.385v28.032zm21.334-17.543v-17.082c0-4.042-2.281-7.729-5.896-9.542l-29.434-14.712 204.996-204.996 39.264 39.264-208.93 207.068zM441.784 121.72l-47.033 46.613-93.747-93.747 46.582-47.001c8.063-8.063 22.104-8.063 30.167 0l64 64c4.031 4.031 6.25 9.385 6.25 15.083s-2.219 11.052-6.219 15.052z"
                              fill="#9F9F9F" opacity="1" data-original="#000000" class=""></path>
                          </g>
                        </svg>
                      </div>
                      <input type="text" id="extract" name="extract" value="{{ $product->extract }}"
                        class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Extracto">


                    </div>
                  </div>
                  <div class="md:col-span-5">
                    <label for="description">Descripcion</label>
                    <div class="relative mb-2 mt-2">
                      <x-textarea name="description" value="{!! $product->description !!}" />

                    </div>
                  </div>




                  <div class="md:col-span-5">
                    <label for="imagen">Impagen Principal</label>
                    <div class="relative mb-2  mt-2">
                      <img src="{{ asset($product->imagen) }}" class="rounded-lg mb-2 w-52" alt="Imagen actual">
                      <input id="imagen" name="imagen"
                        class="p-2.5 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        aria-describedby="user_avatar_help" id="user_avatar" type="file">
                    </div>
                  </div>
                  <div class="md:col-span-5 mt-2">
                    <div class="flex justify-between gap-5">
                      @foreach ($product->galeria as $item)
                        <div id="portada-{{ $item->id }}">
                          <i onclick="borrarImg({{ $item->id }})" class=" w-5 cursor-pointer"
                            style="position: absolute;"><svg xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                              <path
                                d="M376.6 84.5c11.3-13.6 9.5-33.8-4.1-45.1s-33.8-9.5-45.1 4.1L192 206 56.6 43.5C45.3 29.9 25.1 28.1 11.5 39.4S-3.9 70.9 7.4 84.5L150.3 256 7.4 427.5c-11.3 13.6-9.5 33.8 4.1 45.1s33.8 9.5 45.1-4.1L192 306 327.4 468.5c11.3 13.6 31.5 15.4 45.1 4.1s15.4-31.5 4.1-45.1L233.7 256 376.6 84.5z" />
                            </svg></i>


                          <img src="{{ asset($item->imagen) }}" alt="" class="w-24">
                        </div>
                      @endforeach

                    </div>

                  </div>
                  <div class="md:col-span-5">
                    <label for="imagaleria">Galeria de imagenes</label>
                    <div class="dropzone border-gray-300 dropzoneSecond cursor-pointer" id="dropzoneServerFilesGallery"
                      name="imagaleria ">
                    </div>
                  </div>


                  <div class="">

                    <label for="destacar">Destacar
                    </label>

                    <div class="relative mb-2  mt-2">
                      <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">

                      </div>
                      <input type="checkbox" id="destacar" name="destacar"
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                        @if ($product->destacar) checked @endif>


                    </div>
                  </div>



                </div>


              </div>
            </div>
            <div class="basis-0 md:basis-2/5">
              <div class=" grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5 rounded shadow-lg p-4 px-4 ">
                <div class="md:col-span-5 flex justify-between gap-4">
                  <div class="w-full">
                    <label for="precio">Precio</label>
                    <div class="relative mb-2  mt-2">
                      <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg"
                          fill="none" width="512" height="512" x="0" viewBox="0 0 24 24" stroke-width="1.5"
                          stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 6v12m-3-2.818.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>

                      </div>
                      <input type="number" id="precio" name="precio" value="{{ $product->precio }}"
                        class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="precio">
                    </div>

                  </div>
                  <div class="w-full">
                    <label for="descuento">Descuento</label>
                    <div class="relative mb-2  mt-2">
                      <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg"
                          fill="none" width="512" height="512" x="0" viewBox="0 0 24 24" stroke-width="1.5"
                          stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 6v12m-3-2.818.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                      </div>
                      <input type="number" id="descuento" name="descuento" value="{{ $product->descuento }}"
                        class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="descuento">
                    </div>

                  </div>


                </div>
                <div class="md:col-span-5">

                </div>
                <div class="md:col-span-5">
                  <label for="costo_x_art">Costo por articulo</label>
                  <div class="relative mb-2  mt-2">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                      <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg"
                        fill="none" width="512" height="512" x="0" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                          d="M12 6v12m-3-2.818.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                      </svg>
                    </div>
                    <input type="number" id="costo_x_art" name="costo_x_art" value="{{ $product->costo_x_art }}"
                      class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                      placeholder="Costo por articulo">
                  </div>
                </div>

                <div class="md:col-span-5">
                  <label for="costo_x_art">Categoria</label>
                  <div class="relative mb-2  mt-2">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                      <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg"
                        fill="none" width="512" height="512" x="0" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                          d="M12 6v12m-3-2.818.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                      </svg>
                    </div>
                    <select name="categoria_id" id="categorias"
                      class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                      <option value="">Seleccionar Categoria </option>
                      @foreach ($categoria as $item)
                        <option value="{{ $item->id }}"
                          {{ $item->id == $product->categoria_id ? 'selected' : '' }}>{{ $item->name }}</option>
                      @endforeach

                    </select>
                  </div>
                </div>
                <div class="md:col-span-5">
                  <label for="costo_x_art">Sub Categoria</label>
                  <div class="relative mb-2  mt-2">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                      <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg"
                        fill="none" width="512" height="512" x="0" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                          d="M12 6v12m-3-2.818.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                      </svg>
                    </div>
                    <select id="subCategoria" name="sub_cat_id"
                      class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                      <div class="flex flex-col justify-start ">

                        @foreach ($allSubcategorias as $subCat)
                          @if ($product->sub_cat_id == $subCat->id)
                            <option selected value="{{ $subCat->id }}"
                              class="bg-[#0051FF] bg-opacity-25 w-full py-3  text-left px-4 text-white font-moderat_Bold hover:bg-[#3374FF] text-text16">

                              {{ $subCat->name }}</option>
                          @endif
                        @endforeach


                      </div>



                    </select>
                  </div>
                </div>
                <div class="md:col-span-5">
                  <label for="costo_x_art">Marcas</label>
                  <div class="relative mb-2  mt-2">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                      <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg"
                        fill="none" width="512" height="512" x="0" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                          d="M12 6v12m-3-2.818.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                      </svg>
                    </div>

                    <x-marcasSelect :data="$allMarcas" name="marca_id" value="{{ $product->marca_id }}"
                      id="selectMarcas" />
                  </div>
                </div>
                <div class="md:col-span-5 mt-2">
                  <div class=" flex items-end justify-between gap-2 ">
                    <label for="especificacion">Especificacion </label>
                    <button type="button" id="AddEspecifiacion"
                      class="text-blue-500 hover:underline focus:outline-none font-medium">
                      Agregar Especificacion
                    </button>
                  </div>
                  @foreach ($especificacion as $item)
                    <div class="flex gap-2">
                      <div class="relative mb-2  mt-2">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                          <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg"
                            version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512"
                            x="0" y="0" viewBox="0 0 469.336 469.336" style="enable-background:new 0 0 512 512"
                            xml:space="preserve" class="">
                            <g>
                              <path
                                d="m456.836 76.168-64-64.054c-16.125-16.139-44.177-16.17-60.365.031L45.763 301.682a10.733 10.733 0 0 0-2.688 4.587L.409 455.73a10.682 10.682 0 0 0 10.261 13.606c.979 0 1.969-.136 2.927-.407l149.333-42.703a10.714 10.714 0 0 0 4.583-2.69l289.323-286.983c8.063-8.069 12.5-18.787 12.5-30.192s-4.437-22.124-12.5-30.193zM285.989 89.737l39.264 39.264-204.996 204.997-14.712-29.434a10.671 10.671 0 0 0-9.542-5.896H78.921L285.989 89.737zm-259.788 353.4L40.095 394.5l34.742 34.742-48.636 13.895zm123.135-35.177-51.035 14.579-51.503-51.503 14.579-51.035h28.031l18.385 36.771a10.671 10.671 0 0 0 4.771 4.771l36.771 18.385v28.032zm21.334-17.543v-17.082c0-4.042-2.281-7.729-5.896-9.542l-29.434-14.712 204.996-204.996 39.264 39.264-208.93 207.068zM441.784 121.72l-47.033 46.613-93.747-93.747 46.582-47.001c8.063-8.063 22.104-8.063 30.167 0l64 64c4.031 4.031 6.25 9.385 6.25 15.083s-2.219 11.052-6.219 15.052z"
                                fill="#9F9F9F" opacity="1" data-original="#000000" class=""></path>
                            </g>
                          </svg>
                        </div>
                        <input type="text" id="tittle-{{ $item->id }}" name="tittle-{{ $item->id }}"
                          value="{{ $item->tittle }}"
                          class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                          placeholder="Tutulo">

                      </div>
                      <div class="relative mb-2  mt-2">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                          <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg"
                            version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512"
                            x="0" y="0" viewBox="0 0 469.336 469.336" style="enable-background:new 0 0 512 512"
                            xml:space="preserve" class="">
                            <g>
                              <path
                                d="m456.836 76.168-64-64.054c-16.125-16.139-44.177-16.17-60.365.031L45.763 301.682a10.733 10.733 0 0 0-2.688 4.587L.409 455.73a10.682 10.682 0 0 0 10.261 13.606c.979 0 1.969-.136 2.927-.407l149.333-42.703a10.714 10.714 0 0 0 4.583-2.69l289.323-286.983c8.063-8.069 12.5-18.787 12.5-30.192s-4.437-22.124-12.5-30.193zM285.989 89.737l39.264 39.264-204.996 204.997-14.712-29.434a10.671 10.671 0 0 0-9.542-5.896H78.921L285.989 89.737zm-259.788 353.4L40.095 394.5l34.742 34.742-48.636 13.895zm123.135-35.177-51.035 14.579-51.503-51.503 14.579-51.035h28.031l18.385 36.771a10.671 10.671 0 0 0 4.771 4.771l36.771 18.385v28.032zm21.334-17.543v-17.082c0-4.042-2.281-7.729-5.896-9.542l-29.434-14.712 204.996-204.996 39.264 39.264-208.93 207.068zM441.784 121.72l-47.033 46.613-93.747-93.747 46.582-47.001c8.063-8.063 22.104-8.063 30.167 0l64 64c4.031 4.031 6.25 9.385 6.25 15.083s-2.219 11.052-6.219 15.052z"
                                fill="#9F9F9F" opacity="1" data-original="#000000" class=""></path>
                            </g>
                          </svg>
                        </div>

                        <input type="text" id="specifications-{{ $item->id }}"
                          name="specifications-{{ $item->id }}" value="{{ $item->specifications }}"
                          class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                          placeholder="Valor">
                      </div>
                    </div>
                  @endforeach
                </div>

                <div class="md:col-span-5">
                  <label for="producto">Atributos</label>
                  <div class="flex gap-2 mt-2 relative mb-2 ">
                    @foreach ($atributos as $item)
                      <div href="#"
                        class="w-[300px] !important block p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">


                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                          {{ $item->titulo }}
                        </h5>
                        <p class="font-normal text-gray-700 dark:text-gray-400">
                          {{ $item->descripcion }}</p>
                        @foreach ($valorAtributo as $value)
                          @if ($value->attribute_id == $item->id)
                            @php
                              $atributesArray = json_decode($product->atributes, true);
                              $titulo = strtolower($item->titulo);
                              $valor = strtolower($value->valor);
                            @endphp
                            <div class="flex items-center mb-2">
                              <input type="checkbox" id="{{ $titulo }}:{{ $valor }}"
                                name="{{ $titulo }}:{{ $valor }}"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                @if (is_array($atributesArray) &&
                                        isset($atributesArray[$titulo]) &&
                                        in_array(strtolower($valor), $atributesArray[$titulo])) checked @endif>
                              <label for="{{ $titulo }}:{{ $valor }}"
                                class="ml-2">{{ $valor }}</label>
                            </div>
                          @endif
                        @endforeach
                        @if ($item->imagen)
                          <img src="{{ asset($item->imagen) }}" class="rounded-lg mb-2 w-1/2" alt="Imagen actual">
                        @endif

                      </div>
                    @endforeach
                  </div>
                </div>

              </div>
              <div class=" grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5 rounded shadow-lg p-4 px-4 ">
                <h4 class="font-semibold text-slate-800 dark:text-slate-100 text-xl tracking-tight">
                  Inventario</h4>
                <div class="md:col-span-5 flex justify-between gap-4">

                  <div class="w-full">
                    <label for="stock">Existencias

                    </label>

                    <div class="relative mb-2  mt-2">
                      <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg"
                          version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512"
                          x="0" y="0" viewBox="0 0 469.336 469.336" style="enable-background:new 0 0 512 512"
                          xml:space="preserve" class="">
                          <g>
                            <path
                              d="m456.836 76.168-64-64.054c-16.125-16.139-44.177-16.17-60.365.031L45.763 301.682a10.733 10.733 0 0 0-2.688 4.587L.409 455.73a10.682 10.682 0 0 0 10.261 13.606c.979 0 1.969-.136 2.927-.407l149.333-42.703a10.714 10.714 0 0 0 4.583-2.69l289.323-286.983c8.063-8.069 12.5-18.787 12.5-30.192s-4.437-22.124-12.5-30.193zM285.989 89.737l39.264 39.264-204.996 204.997-14.712-29.434a10.671 10.671 0 0 0-9.542-5.896H78.921L285.989 89.737zm-259.788 353.4L40.095 394.5l34.742 34.742-48.636 13.895zm123.135-35.177-51.035 14.579-51.503-51.503 14.579-51.035h28.031l18.385 36.771a10.671 10.671 0 0 0 4.771 4.771l36.771 18.385v28.032zm21.334-17.543v-17.082c0-4.042-2.281-7.729-5.896-9.542l-29.434-14.712 204.996-204.996 39.264 39.264-208.93 207.068zM441.784 121.72l-47.033 46.613-93.747-93.747 46.582-47.001c8.063-8.063 22.104-8.063 30.167 0l64 64c4.031 4.031 6.25 9.385 6.25 15.083s-2.219 11.052-6.219 15.052z"
                              fill="#9F9F9F" opacity="1" data-original="#000000" class=""></path>
                          </g>
                        </svg>
                      </div>
                      <input type="number" id="stock" name="stock" value="{{ $product->stock }}"
                        class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Product">


                    </div>
                  </div>
                  <div class="w-full">
                    <label for="peso">Peso

                    </label>

                    <div class="relative mb-2  mt-2">
                      <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg"
                          version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512"
                          x="0" y="0" viewBox="0 0 469.336 469.336" style="enable-background:new 0 0 512 512"
                          xml:space="preserve" class="">
                          <g>
                            <path
                              d="m456.836 76.168-64-64.054c-16.125-16.139-44.177-16.17-60.365.031L45.763 301.682a10.733 10.733 0 0 0-2.688 4.587L.409 455.73a10.682 10.682 0 0 0 10.261 13.606c.979 0 1.969-.136 2.927-.407l149.333-42.703a10.714 10.714 0 0 0 4.583-2.69l289.323-286.983c8.063-8.069 12.5-18.787 12.5-30.192s-4.437-22.124-12.5-30.193zM285.989 89.737l39.264 39.264-204.996 204.997-14.712-29.434a10.671 10.671 0 0 0-9.542-5.896H78.921L285.989 89.737zm-259.788 353.4L40.095 394.5l34.742 34.742-48.636 13.895zm123.135-35.177-51.035 14.579-51.503-51.503 14.579-51.035h28.031l18.385 36.771a10.671 10.671 0 0 0 4.771 4.771l36.771 18.385v28.032zm21.334-17.543v-17.082c0-4.042-2.281-7.729-5.896-9.542l-29.434-14.712 204.996-204.996 39.264 39.264-208.93 207.068zM441.784 121.72l-47.033 46.613-93.747-93.747 46.582-47.001c8.063-8.063 22.104-8.063 30.167 0l64 64c4.031 4.031 6.25 9.385 6.25 15.083s-2.219 11.052-6.219 15.052z"
                              fill="#9F9F9F" opacity="1" data-original="#000000" class=""></path>
                          </g>
                        </svg>
                      </div>
                      <input type="number" id="peso" name="peso" value="{{ $product->peso }}"
                        class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Peso">


                    </div>
                  </div>


                </div>
              </div>
              <div class="w-full">
                <label for="sku">SKU

                </label>

                <div class="relative mb-2  mt-2">
                  <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg"
                      version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0"
                      y="0" viewBox="0 0 469.336 469.336" style="enable-background:new 0 0 512 512"
                      xml:space="preserve" class="">
                      <g>
                        <path
                          d="m456.836 76.168-64-64.054c-16.125-16.139-44.177-16.17-60.365.031L45.763 301.682a10.733 10.733 0 0 0-2.688 4.587L.409 455.73a10.682 10.682 0 0 0 10.261 13.606c.979 0 1.969-.136 2.927-.407l149.333-42.703a10.714 10.714 0 0 0 4.583-2.69l289.323-286.983c8.063-8.069 12.5-18.787 12.5-30.192s-4.437-22.124-12.5-30.193zM285.989 89.737l39.264 39.264-204.996 204.997-14.712-29.434a10.671 10.671 0 0 0-9.542-5.896H78.921L285.989 89.737zm-259.788 353.4L40.095 394.5l34.742 34.742-48.636 13.895zm123.135-35.177-51.035 14.579-51.503-51.503 14.579-51.035h28.031l18.385 36.771a10.671 10.671 0 0 0 4.771 4.771l36.771 18.385v28.032zm21.334-17.543v-17.082c0-4.042-2.281-7.729-5.896-9.542l-29.434-14.712 204.996-204.996 39.264 39.264-208.93 207.068zM441.784 121.72l-47.033 46.613-93.747-93.747 46.582-47.001c8.063-8.063 22.104-8.063 30.167 0l64 64c4.031 4.031 6.25 9.385 6.25 15.083s-2.219 11.052-6.219 15.052z"
                          fill="#9F9F9F" opacity="1" data-original="#000000" class=""></path>
                      </g>
                    </svg>
                  </div>
                  <input type="text" id="sku" name="sku" value="{{ $product->sku }}"
                    class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="# de sku">


                </div>
              </div>



              <div class="col-span-1 md:col-span-5">
                <label for="tags_id">Tags</label>
                <select id="tags_id" name="tags_id[]" multiple
                  class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  @foreach ($allTags as $tag)
                    <option value="{{ $tag->id }}"
                      {{ in_array($tag->id, $product->tags->pluck('id')->toArray()) ? 'selected' : '' }}>
                      {{ $tag->name }}
                    </option>
                  @endforeach
                </select>
              </div>

            </div>
          </div>

          <div class="md:col-span-5 text-right mt-6 flex justify-between px-4 pb-4">
            <div class="inline-flex items-end">
              <a href="{{ URL::previous() }}"
                class="bg-red-500 hover:bg-red-700 text-white font-semibold py-2 px-4 rounded">Volver</a>
            </div>
            <div class="inline-flex items-end">
              <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded">
                Actualizar
              </button>
            </div>
          </div>
        </div>
      </div>

    </form>


  </div>
  <script>
    $('#tags_id').select2();
    // Obtener los enlaces de pestaña
    const generalTab = document.getElementById('general-tab');
    const attributesTab = document.getElementById('attributes-tab');

    // Obtener los contenedores de contenido
    const generalContent = document.getElementById('general');
    const attributesContent = document.getElementById('Attributes');

    // Agregar event listeners para los enlaces de pestaña
    generalTab.addEventListener('click', function(event) {
      generalTab.classList.add('active', 'dark:bg-slate-900')
      attributesTab.classList.remove('active', 'dark:bg-slate-900')
      // Ocultar el contenido de Attributes
      attributesContent.classList.add('hidden');
      // Mostrar el contenido de General
      generalContent.classList.remove('hidden');
    });

    attributesTab.addEventListener('click', function(event) {
      generalTab.classList.remove('active', 'dark:bg-slate-900')
      attributesTab.classList.add('active', 'dark:bg-slate-900')
      // Ocultar el contenido de General
      generalContent.classList.add('hidden');
      // Mostrar el contenido de Attributes
      attributesContent.classList.remove('hidden');
    });
  </script>

  <script>
    let editor = null
    $('document').ready(async function() {

      editor = await tinymce.init({
        selector: 'textarea#description',
        height: 500,
        plugins: [
          'advlist', 'autolink', 'lists', 'link', 'charmap', 'preview',
          'searchreplace', 'visualblocks', 'code', 'fullscreen',
          'insertdatetime', 'table'
        ],
        toolbar: 'undo redo | blocks | ' +
          'bold italic backcolor | alignleft aligncenter ' +
          'alignright alignjustify | bullist numlist outdent indent | ' +
          'removeformat | help',
        content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px;}'
      });

    })
  </script>
  <script>
    const pickr = Pickr.create({
      el: '#colorPicker', // Selector CSS del input
      theme: 'classic', // Tema de Pickr
      default: '#000000', // Color por defecto
      swatches: [ // Colores de muestra
        '#FF0000', '#00FF00', '#0000FF', '#FFFF00', '#00FFFF', '#FF00FF'
      ],
      components: {
        preview: true, // Mostrar vista previa
        opacity: true, // Habilitar control de opacidad
        hue: true, // Habilitar control de matiz
        interaction: {
          input: true, // Permitir entrada manual
          hex: true,
          save: true // Permitir guardar
        }
      }
    });
    pickr.on('save', (color, instance) => {

      document.getElementById('color').value = color.toHEXA().toString();

    })
  </script>
  <script>
    function toggleMenu() {
      console.log('cambiando toggle')
      var menuItems = document.getElementById('menu-items');
      var isExpanded = menuItems.classList.contains('hidden');
      menuItems.classList.toggle('hidden', !isExpanded);
      document.getElementById('menu-button').setAttribute('aria-expanded', !isExpanded);
    }
  </script>


  <script>
    $('document').ready(function() {
      let valorInput = 1

      $("#AddEspecifiacion").on('click', function(e) {
        e.preventDefault()
        valorInput++
        console.log('agregando especificacion')
        const addButton = document.getElementById("AddEspecifiacion");
        const divFlex = document.createElement("div");
        const dRelative = document.createElement("div");
        const dRelative2 = document.createElement("div");

        divFlex.classList.add('flex', 'gap-2')
        dRelative.classList.add('relative', 'mb-2', 'mt-2')
        dRelative2.classList.add('relative', 'mb-2', 'mt-2')

        const iconContainer = document.createElement("div");
        const icon = `<div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg"
                        version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0"
                        y="0" viewBox="0 0 469.336 469.336" style="enable-background:new 0 0 512 512"
                        xml:space="preserve" class="">
                        <g>
                            <path
                            d="m456.836 76.168-64-64.054c-16.125-16.139-44.177-16.17-60.365.031L45.763 301.682a10.733 10.733 0 0 0-2.688 4.587L.409 455.73a10.682 10.682 0 0 0 10.261 13.606c.979 0 1.969-.136 2.927-.407l149.333-42.703a10.714 10.714 0 0 0 4.583-2.69l289.323-286.983c8.063-8.069 12.5-18.787 12.5-30.192s-4.437-22.124-12.5-30.193zM285.989 89.737l39.264 39.264-204.996 204.997-14.712-29.434a10.671 10.671 0 0 0-9.542-5.896H78.921L285.989 89.737zm-259.788 353.4L40.095 394.5l34.742 34.742-48.636 13.895zm123.135-35.177-51.035 14.579-51.503-51.503 14.579-51.035h28.031l18.385 36.771a10.671 10.671 0 0 0 4.771 4.771l36.771 18.385v28.032zm21.334-17.543v-17.082c0-4.042-2.281-7.729-5.896-9.542l-29.434-14.712 204.996-204.996 39.264 39.264-208.93 207.068zM441.784 121.72l-47.033 46.613-93.747-93.747 46.582-47.001c8.063-8.063 22.104-8.063 30.167 0l64 64c4.031 4.031 6.25 9.385 6.25 15.083s-2.219 11.052-6.219 15.052z"
                            fill="#9F9F9F" opacity="1" data-original="#000000" class=""></path>
                        </g>
                        </svg>
                    </div>`
        iconContainer.innerHTML = icon;

        // Obtener el nodo del icono
        const iconNode = iconContainer.firstChild;



        const inputTittle = document.createElement("input");
        const inputValue = document.createElement("input");

        let inputT = agregarElementos(inputTittle, valorInput, 'tittle')
        let inputV = agregarElementos(inputValue, valorInput, 'specifications')


        dRelative.appendChild(inputT);
        dRelative2.appendChild(inputV);


        // Agregar el icono como primer hijo de dRelative
        dRelative.insertBefore(iconNode, inputT);

        // Clonar el nodo del icono para agregarlo como primer hijo de dRelative2
        const iconNodeCloned = iconNode.cloneNode(true);
        dRelative2.insertBefore(iconNodeCloned, inputV);


        divFlex.appendChild(dRelative);
        divFlex.appendChild(dRelative2);

        const parentContainer = addButton.parentElement
          .parentElement; // Obtener el contenedor padre
        parentContainer.insertBefore(divFlex, addButton.parentElement
          .nextSibling); // Insertar el input antes del siguiente elemento después del botón

      })
    })
  </script>
  <script>
    $("#categorias").on('change', function(e) {
      let categoria = $('#categorias').val();
      console.log(categoria)
      $.ajax({
        url: "{{ route('subcategoria.obtener') }}",
        dataType: "json",
        method: 'POST',
        data: {
          _token: $('input[name="_token"]').val(),
          id: categoria
        }
      }).done(function(res) {
        $('#subCategoria').empty();
        $('#subCategoria').append(
          '<option value="">Seleccionar Categoria</option>'
        )
        // $('#subCategoria').toggleClass('opacity-15')
        $.each(res.subCategoria, function(key, value) {
          $('#subCategoria').append(
            '<option value="' + value['id'] + '">' + value['name'] + '</option>'
          )
        });
      });
    })
    $("#subCategoria").on('change', function(e) {
      let subcategoria = $('#subCategoria').val();
      console.log(subcategoria)
      $.ajax({
        url: "{{ route('marcas.obtener') }}",
        dataType: "json",
        method: 'POST',
        data: {
          _token: $('input[name="_token"]').val(),
          id: subcategoria
        }
      }).done(function(res) {
        $('#selectMarcas').empty();
        $('#selectMarcas').append(
          '<option value="">Seleccionar Categoria</option>'
        )
        // $('#selectMarcas').toggleClass('bg-opacity-25')
        $.each(res.marcas, function(key, value) {
          $('#selectMarcas').append(
            '<option value="' + value['id'] + '">' + value['name'] + '</option>'
          )
        });
      });
    })
  </script>
  @include('_layout.scripts')
</x-app-layout>
