<!-- @if ($paginator->hasPages())
    <nav class="d-flex justify-items-center justify-content-between">
        <div class="d-flex justify-content-between flex-fill d-sm-none">
            <ul class="pagination">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <li class="page-item disabled" aria-disabled="true">
                        <span class="page-link">@lang('pagination.previous')</span>
                    </li>
                @else
                    <li class="page-item">
                        <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">@lang('pagination.previous')</a>
                    </li>
                @endif

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <li class="page-item">
                        <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">@lang('pagination.next')</a>
                    </li>
                @else
                    <li class="page-item disabled" aria-disabled="true">
                        <span class="page-link">@lang('pagination.next')</span>
                    </li>
                @endif
            </ul>
        </div>

        <div class="d-none flex-sm-fill d-sm-flex align-items-sm-center justify-content-sm-between">
            <div>
                <p class="small text-muted">
                    {!! __('Showing') !!}
                    <span class="fw-semibold">{{ $paginator->firstItem() }}</span>
                    {!! __('to') !!}
                    <span class="fw-semibold">{{ $paginator->lastItem() }}</span>
                    {!! __('of') !!}
                    <span class="fw-semibold">{{ $paginator->total() }}</span>
                    {!! __('results') !!}
                </p>
            </div>

            <div>
                <ul class="pagination">
                    {{-- Previous Page Link --}}
                    @if ($paginator->onFirstPage())
                        <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                            <span class="page-link" aria-hidden="true">&lsaquo;</span>
                        </li>
                    @else
                        <li class="page-item">
                            <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
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
                            <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
                        </li>
                    @else
                        <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                            <span class="page-link" aria-hidden="true">&rsaquo;</span>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
@endif -->


@if (true)
    <div class="d-flex flex-wrap justify-content-between align-items-center mt-4 pagination-wrap w-100">

        <p class="mb-0">
            Page: {{ $paginator->currentPage() }} of {{ $paginator->lastPage() }}
        </p>

        <div class="d-flex align-items-center gap-2">
            <span>Page Size:</span>
            <select class="form-select form-select-sm w-auto py-2" onchange="changePageSize(this)">
                <option value="10" {{ request('per_page') == 10 ? 'selected' : '' }}>10</option>
                <option value="25" {{ request('per_page') == 25 ? 'selected' : '' }}>25</option>
                <option value="50" {{ request('per_page') == 50 ? 'selected' : '' }}>50</option>
            </select>
        </div>

        <div class="d-flex gap-2 last-point-view">

            @if ($paginator->onFirstPage())
                <button class="btn btn-sm btn-outline-secondary" disabled>
                    <i class="ri-arrow-left-double-line"></i>
                </button>
            @else
                <a class="btn btn-sm btn-outline-secondary" href="{{ $paginator->url(1) }}">
                    <i class="ri-arrow-left-double-line"></i>
                </a>
            @endif

            @if ($paginator->onFirstPage())
                <button class="btn btn-sm btn-outline-secondary" disabled>
                    <i class="ri-arrow-left-s-line"></i>
                </button>
            @else
                <a class="btn btn-sm btn-outline-secondary" href="{{ $paginator->previousPageUrl() }}">
                    <i class="ri-arrow-left-s-line"></i>
                </a>
            @endif

            <button class="btn btn-sm btn-outline-secondary active">
                {{ $paginator->currentPage() }}
            </button>

            @if ($paginator->hasMorePages())
                <a class="btn btn-sm btn-outline-secondary" href="{{ $paginator->nextPageUrl() }}">
                    <i class="ri-arrow-right-s-line"></i>
                </a>
            @else
                <button class="btn btn-sm btn-outline-secondary" disabled>
                    <i class="ri-arrow-right-s-line"></i>
                </button>
            @endif

            @if ($paginator->hasMorePages())
                <a class="btn btn-sm btn-outline-secondary" href="{{ $paginator->url($paginator->lastPage()) }}">
                    <i class="ri-arrow-right-double-line"></i>
                </a>
            @else
                <button class="btn btn-sm btn-outline-secondary" disabled>
                    <i class="ri-arrow-right-double-line"></i>
                </button>
            @endif

        </div>


        <!-- <div class="d-flex gap-2 last-point-view">

                @if ($paginator->onFirstPage())
                    <button class="btn btn-sm btn-outline-secondary" disabled>
                        <i class="ri-arrow-left-double-line"></i>
                    </button>
                @else
                    <a class="btn btn-sm btn-outline-secondary" href="{{ $paginator->url(1) }}">
                        <i class="ri-arrow-left-double-line"></i>
                    </a>
                @endif

                @if ($paginator->onFirstPage())
                    <button class="btn btn-sm btn-outline-secondary" disabled>
                        <i class="ri-arrow-left-s-line"></i>
                    </button>
                @else
                    <a class="btn btn-sm btn-outline-secondary" href="{{ $paginator->previousPageUrl() }}">
                        <i class="ri-arrow-left-s-line"></i>
                    </a>
                @endif

                @foreach ($elements as $element)
                    @if (is_string($element))
                        <button class="btn btn-sm btn-outline-secondary disabled">{{ $element }}</button>
                    @endif

                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <button class="btn btn-sm btn-outline-secondary active">{{ $page }}</button>
                            @else
                                <a class="btn btn-sm btn-outline-secondary" href="{{ $url }}">{{ $page }}</a>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                @if ($paginator->hasMorePages())
                    <a class="btn btn-sm btn-outline-secondary" href="{{ $paginator->nextPageUrl() }}">
                        <i class="ri-arrow-right-s-line"></i>
                    </a>
                @else
                    <button class="btn btn-sm btn-outline-secondary" disabled>
                        <i class="ri-arrow-right-s-line"></i>
                    </button>
                @endif

                @if ($paginator->hasMorePages())
                    <a class="btn btn-sm btn-outline-secondary" href="{{ $paginator->url($paginator->lastPage()) }}">
                        <i class="ri-arrow-right-double-line"></i>
                    </a>
                @else
                    <button class="btn btn-sm btn-outline-secondary" disabled>
                        <i class="ri-arrow-right-double-line"></i>
                    </button>
                @endif
            </div> -->
    </div>

    <script>
        function changePageSize(select) {
            const perPage = select.value;
            const url = new URL(window.location.href);
            url.searchParams.set('per_page', perPage);
            url.searchParams.set('page', 1);
            window.location.href = url.toString();
        }
    </script>
@endif