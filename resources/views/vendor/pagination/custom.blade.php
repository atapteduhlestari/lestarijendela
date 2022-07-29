@if ($paginator->hasPages())
    <ul class="pager">
        <div class="flex-c-m flex-w w-full p-t-38">
            @if (!$paginator->onFirstPage())
                <li>
                    <a class="flex-c-m how-pagination1 trans-04 m-all-7" href="{{ $paginator->previousPageUrl() }}"
                        rel="prev">
                        <i class="zmdi zmdi-arrow-left"></i>
                    </a>
                </li>
                {{-- @else
                <li class="disabled flex-c-m how-pagination1 trans-04 m-all-7">
                    <span>←</span>
                </li> --}}
            @endif
            @foreach ($elements as $element)
                @if (is_string($element))
                    <li class="disabled flex-c-m how-pagination1 trans-04 m-all-7"><span>{{ $element }}</span></li>
                @endif
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="flex-c-m how-pagination1 trans-04 m-all-7 active-pagination1">
                                <span>{{ $page }}</span>
                            </li>
                        @else
                            <li>
                                <a class="flex-c-m how-pagination1 trans-04 m-all-7"
                                    href="{{ $url }}">{{ $page }}
                                </a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach
            @if ($paginator->hasMorePages())
                <li>
                    <a class="flex-c-m how-pagination1 trans-04 m-all-7" href="{{ $paginator->nextPageUrl() }}"
                        rel="next">
                        <i class="zmdi zmdi-arrow-right"></i>
                    </a>
                </li>
                {{-- @else
                <li class="flex-c-m how-pagination1 trans-04 m-all-7" sty><span>→</span></li> --}}
            @endif
        </div>
    </ul>
@endif
