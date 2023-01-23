@if ($paginator->hasPages())
  <div class="nk-block-between-md g-3">
    <div class="g">
      <ul class="pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
          <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
            <span class="page-link" aria-hidden="true">&lsaquo;</span>
          </li>
        @else
          <li class="page-item">
            <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev"
              aria-label="@lang('pagination.previous')">&lsaquo;</a>
          </li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
          {{-- "Three Dots" Separator --}}
          @if (is_string($element))
            <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
          @endif

          {{-- Array Of Links --}}
          @if (is_array($element))
            @foreach ($element as $page => $url)
              @if ($page == $paginator->currentPage())
                <li class="page-item active" aria-current="page"><span class="page-link">{{ $page }}</span></li>
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
              aria-label="@lang('pagination.next')">&rsaquo;</a>
          </li>
        @else
          <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
            <span class="page-link" aria-hidden="true">&rsaquo;</span>
          </li>
        @endif
      </ul>
    </div>

    <div class="g">
      <div class="pagination-goto d-flex justify-content-center justify-content-md-start gx-3">
        <div>Page</div>
        <div>
          <select id="select_page" class="form-select js-select2" data-search="on" data-dropdown="xs center">
            @for ($i = 1; $i <= (int) ceil($paginator->total() / $paginator->perPage()); $i++)
              <option value="{{ url('products') }}?page={{ $i }}"
                {{ $paginator->currentPage() == $i ? 'selected="selected"' : '' }}>{{ $i }}</option>
            @endfor
          </select>
        </div>
        <div>OF {{ (int) ceil($paginator->total() / $paginator->perPage()) }}</div>
      </div>
    </div><!-- .pagination-goto -->
  </div><!-- .nk-block-between -->
@endif
