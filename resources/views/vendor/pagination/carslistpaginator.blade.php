@if ($paginator->hasPages())
    <nav class="d-flex justify-content-between mt-3" aria-label="Page navigation">
        <ul class="pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
        <li class="disabled page-item" aria-disabled="true" aria-label="@lang('pagination.previous')">
            <a class="page-link" href="javascript:;"><i class="bx bx-chevron-left"></i> Prev</a>
        </li>
        @else
            <li  class="page-item">
                <a href="{{ $paginator->previousPageUrl() }}" class="page-link" rel="prev" aria-label="@lang('pagination.previous')"><i class="bx bx-chevron-left"></i> Prev</a>
            </li>
        @endif

        </ul>

        {{-- <ul class="pagination">
        <li class="page-item"><a class="page-link" href="javascript:;"><i class="bx bx-chevron-left"></i> Prev</a>
        </li>
        </ul> --}}
        <ul class="pagination">

        @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="disabled page-item d-none d-sm-block" aria-disabled="true"><a class="page-link" href="">{{ $element }}</a></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="active page-item d-none d-sm-block" aria-current="page"><span class="page-link">{{ $page }}</span></li>
                        @else
                            <li class="page-item d-none d-sm-block"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
        @endforeach
        </ul>


        <ul class="pagination">
            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item"> 
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">Next <i class="bx bx-chevron-right"></i></a>
                </li>
            @else
                <li class="disabled page-item" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span class="page-link" aria-hidden="true">Next <i class="bx bx-chevron-right"></i></span>
                </li>
            @endif

        </ul>
    </nav>
@endif

