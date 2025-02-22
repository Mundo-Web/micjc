@if ($paginator->hasPages())
  <div class="flex flex-col sm:items-center sm:justify-between w-full">
    <nav class="flex justify-center mb-4 sm:mb-0 sm:order-1 w-full  overflow-x-auto" role="navigation"
      aria-label="{!! __('Pagination Navigation') !!}">
      {{-- Previous Page Link --}}
      <div class="mr-2">
        @if ($paginator->onFirstPage())
          <span
            class="inline-flex items-center justify-center rounded leading-5 px-2 py-1.5 bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-slate-300 dark:text-slate-600">
            <span class="sr-only">{!! __('pagination.previous') !!}</span><wbr />
            <svg class="h-4 w-4 fill-current" viewBox="0 0 16 16">
              <path d="M9.4 13.4l1.4-1.4-4-4 4-4-1.4-1.4L4 8z" />
            </svg>
          </span>
        @else
          <a href="{{ $paginator->previousPageUrl() }}"
            class="inline-flex items-center justify-center rounded leading-5 px-2 py-1.5 bg-white dark:bg-slate-800 hover:bg-[#EB5D2C] dark:hover:bg-[#EB5D2C] border border-slate-200 dark:border-slate-700 text-slate-600 dark:text-slate-300 hover:text-white shadow-sm">
            <span class="sr-only">{!! __('pagination.previous') !!}</span><wbr />
            <svg class="h-4 w-4 fill-current" viewBox="0 0 16 16">
              <path d="M9.4 13.4l1.4-1.4-4-4 4-4-1.4-1.4L4 8z" />
            </svg>
          </a>
        @endif
      </div>

      {{-- Pagination Elements --}}
      <ul class="inline-flex text-sm font-medium -space-x-px shadow-sm">
        @foreach ($elements as $key => $element)
          {{-- "Three Dots" Separator --}}
          @if (is_string($element))
            <li aria-disabled="true">
              <span
                class="inline-flex items-center justify-center leading-5 px-3 py-1.5 bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-slate-400 dark:text-slate-500">{{ $element }}</span>
            </li>
          @endif

          {{-- Array Of Links --}}
          @if (is_array($element))
            @php
              $counter = 0;
            @endphp
            @foreach ($element as $page => $url)
              @php
                if ($counter < 2) {
                    $counter++;
                } else {
                    continue;
                }
              @endphp
              @if ($page == $paginator->currentPage())
                <li aria-current="page">
                  <span
                    class="inline-flex items-center justify-center leading-5 px-3 py-1.5 bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-black @if ($page === 1) {{ 'rounded-l' }}@elseif($page === $paginator->lastPage()){{ 'rounded-r' }} @endif">{{ $page }}</span>
                </li>
              @else
                <li>
                  <a href="{{ $url }}"
                    class="inline-flex items-center justify-center leading-5 px-3 py-1.5 bg-white dark:bg-slate-800 hover:bg-[#EB5D2C] dark:hover:bg-[#EB5D2C] border border-slate-200 dark:border-slate-700 text-slate-600 dark:text-slate-300 hover:text-white @if ($page === 1) {{ 'rounded-l' }}@elseif($page === $paginator->lastPage()){{ 'rounded-r' }} @endif">{{ $page }}</a>
                </li>
              @endif
            @endforeach
          @endif
        @endforeach
      </ul>

      {{-- Next Page Link --}}
      <div class="ml-2">
        @if ($paginator->hasMorePages())
          <a href="{{ $paginator->nextPageUrl() }}"
            class="inline-flex items-center justify-center rounded leading-5 px-2 py-1.5 bg-white dark:bg-slate-800 hover:bg-red-500 dark:hover:bg-red-500 border border-slate-200 dark:border-slate-700 text-slate-600 dark:text-slate-300 hover:text-white shadow-sm">
            <span class="sr-only">{!! __('pagination.next') !!}</span><wbr />
            <svg class="h-4 w-4 fill-current" viewBox="0 0 16 16">
              <path d="M6.6 13.4L5.2 12l4-4-4-4 1.4-1.4L12 8z" />
            </svg>
          </a>
        @else
          <span
            class="inline-flex items-center justify-center rounded leading-5 px-2 py-1.5 bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-slate-300 dark:text-slate-600">
            <span class="sr-only">{!! __('pagination.next') !!}</span><wbr />
            <svg class="h-4 w-4 fill-current" viewBox="0 0 16 16">
              <path d="M6.6 13.4L5.2 12l4-4-4-4 1.4-1.4L12 8z" />
            </svg>
          </span>
        @endif
      </div>
    </nav>

    <div class="text-sm text-slate-500 dark:text-slate-400 text-center sm:text-left mr-6">
      {!! __('Mostrar') !!}
      @if ($paginator->firstItem())
        <span class="font-medium text-slate-600 dark:text-slate-300">{{ $paginator->firstItem() }}</span>
        {!! __('a') !!}
        <span class="font-medium text-slate-600 dark:text-slate-300">{{ $paginator->lastItem() }}</span>
      @else
        {{ $paginator->count() }}
      @endif
      {!! __('de') !!}
      <span class="font-medium text-slate-600 dark:text-slate-300">{{ $paginator->total() }}</span>
      {!! __('resultados') !!}
    </div>
  </div>
@endif
