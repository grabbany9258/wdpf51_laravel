@if ($paginator->hasPages())
  <div class="nk-block-between-md g-3">
    <div class="g">
      <ul class="pagination justify-content-center justify-content-md-start">

        @if ($paginator->onFirstPage())
          <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
            <a class="page-link" href="#"><em class="icon ni ni-chevrons-left"></em></a>
          </li>
        @else
          <li class="page-item">
            <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev"
              aria-label="@lang('pagination.previous')"><em class="icon ni ni-chevrons-left"></em></a>
          </li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
          {{-- "Three Dots" Separator --}}
          @if (is_string($element))
            <li class="page-item" aria-disabled="true"><span class="page-link"><em
                  class="icon ni ni-more-h"></em></span>
            </li>
          @endif

          {{-- Array Of Links --}}
          @if (is_array($element))
            @foreach ($element as $page => $url)
              @if ($page == $paginator->currentPage())
                <li class="page-item active" aria-current="page"
                  style="color: var(--bs-pagination-active-color);
                background-color: var(--bs-pagination-active-bg)><span class="page-link">
                  {{ $page }}</span></li>
              @else
                <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
              @endif
            @endforeach
          @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
          <li class="page-item">
            <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next"
              aria-label="@lang('pagination.next')"><em class="icon ni ni-chevrons-right"></em></a>
          </li>
        @else
          <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
            <span class="page-link" aria-hidden="true"><em class="icon ni ni-chevrons-right"></em></span>
          </li>
        @endif

      </ul>
    </div>
  </div>
@endif
