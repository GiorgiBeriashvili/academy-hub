@if($academies->total() > 0 && $academies->currentPage() <= $academies->lastPage())
    <nav aria-label="Page navigation example">
        <ul class="pagination text-center">
            <!-- Previous page -->
            <li class="page-item @if($academies->currentPage() === 1) disabled @endif">
                <a href="{{ route('academies', ['page' => $academies->currentPage() - 1]) }}" class="page-link">
                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                    <span class="sr-only">Previous</span> <!-- sr-only = only for screen readers -->
                </a>
            </li>

            @if($academies->lastPage() > 5)
                @if($academies->currentPage() === 1)
                    <li class="page-item active"><a href="{{ route('academies', ['page' => 1]) }}" class="page-link">{{ $academies->currentPage() }}</a></li>
                    <li class="page-item"><a href="{{ route('academies', ['page' => 2]) }}" class="page-link">2</a></li>
                    <li class="page-item ellipsis"></li>
                    <li class="page-item"><a href="{{ route('academies', ['page' => $academies->lastPage()]) }}" class="page-link">{{ $academies->lastPage() }}</a></li>
                @elseif($academies->currentPage() === $academies->lastPage())
                    <li class="page-item"><a href="{{ route('academies', ['page' => 1]) }}" class="page-link">1</a></li>
                    <li class="page-item ellipsis"></li>
                    <li class="page-item"><a href="{{ route('academies', ['page' => $academies->lastPage() - 1]) }}" class="page-link">{{ $academies->lastPage() - 1 }}</a></li>
                    <li class="page-item active"><a href="{{ route('academies', ['page' => $academies->lastPage()]) }}" class="page-link">{{ $academies->lastPage() }}</a></li>
                @elseif($academies->currentPage() === 2)
                    <li class="page-item"><a href="{{ route('academies', ['page' => 1]) }}" class="page-link">1</a></li>
                    <li class="page-item active"><a href="{{ route('academies', ['page' => $academies->currentPage()]) }}" class="page-link">{{ $academies->currentPage() }}</a></li>
                    <li class="page-item"><a href="{{ route('academies', ['page' => 3]) }}" class="page-link">3</a></li>
                    <li class="page-item ellipsis"></li>
                    <li class="page-item"><a href="{{ route('academies', ['page' => $academies->lastPage()]) }}" class="page-link">{{ $academies->lastPage() }}</a></li>
                @elseif($academies->lastPage() - $academies->currentPage() === 1)
                    <li class="page-item"><a href="{{ route('academies', ['page' => 1]) }}" class="page-link">1</a></li>
                    <li class="page-item ellipsis"></li>
                    <li class="page-item"><a href="{{ route('academies', ['page' => $academies->currentPage() - 1]) }}" class="page-link">{{ $academies->currentPage() - 1 }}</a></li>
                    <li class="page-item active"><a href="{{ route('academies', ['page' => $academies->currentPage()]) }}" class="page-link">{{ $academies->currentPage() }}</a></li>
                    <li class="page-item"><a href="{{ route('academies', ['page' => $academies->lastPage()]) }}" class="page-link">{{ $academies->lastPage() }}</a></li>
                @elseif($academies->currentPage() === 3)
                    <li class="page-item"><a href="{{ route('academies', ['page' => 1]) }}" class="page-link">1</a></li>
                    <li class="page-item"><a href="{{ route('academies', ['page' => 2]) }}" class="page-link">2</a></li>
                    <li class="page-item active"><a href="{{ route('academies', ['page' => $academies->currentPage()]) }}" class="page-link">{{ $academies->currentPage() }}</a></li>
                    <li class="page-item"><a href="{{ route('academies', ['page' => 4]) }}" class="page-link">4</a></li>
                    <li class="page-item ellipsis"></li>
                    <li class="page-item"><a href="{{ route('academies', ['page' => $academies->lastPage()]) }}" class="page-link">{{ $academies->lastPage() }}</a></li>
                @elseif($academies->lastPage() - $academies->currentPage() === 2)
                    <li class="page-item"><a href="{{ route('academies', ['page' => 1]) }}" class="page-link">1</a></li>
                    <li class="page-item ellipsis"></li>
                    <li class="page-item"><a href="{{ route('academies', ['page' => $academies->currentPage() - 1]) }}" class="page-link">{{ $academies->currentPage() - 1 }}</a></li>
                    <li class="page-item active"><a href="{{ route('academies', ['page' => $academies->currentPage()]) }}" class="page-link">{{ $academies->currentPage() }}</a></li>
                    <li class="page-item"><a href="{{ route('academies', ['page' => $academies->currentPage() + 1]) }}" class="page-link">{{ $academies->currentPage() + 1 }}</a></li>
                    <li class="page-item"><a href="{{ route('academies', ['page' => $academies->lastPage()]) }}" class="page-link">{{ $academies->lastPage() }}</a></li>
                @elseif($academies->currentPage() > 3 || $academies->lastPage() - $academies->currentPage() > 3)
                    <li class="page-item"><a href="{{ route('academies', ['page' => 1]) }}" class="page-link">1</a></li>
                    <li class="page-item ellipsis"></li>
                    <li class="page-item"><a href="{{ route('academies', ['page' => $academies->currentPage() - 1]) }}" class="page-link">{{ $academies->currentPage() - 1 }}</a></li>
                    <li class="page-item active"><a href="{{ route('academies', ['page' => $academies->currentPage()]) }}" class="page-link">{{ $academies->currentPage() }}</a></li>
                    <li class="page-item"><a href="{{ route('academies', ['page' => $academies->currentPage() + 1]) }}" class="page-link">{{ $academies->currentPage() + 1 }}</a></li>
                    <li class="page-item ellipsis"></li>
                    <li class="page-item"><a href="{{ route('academies', ['page' => $academies->lastPage()]) }}" class="page-link">{{ $academies->lastPage() }}</a></li>
                @endif
            @elseif($academies->lastPage() === 5)
                @if($academies->currentPage() === 1)
                    <li class="page-item active"><a href="{{ route('academies', ['page' => $academies->currentPage()]) }}" class="page-link">{{ $academies->currentPage() }}</a></li>
                    <li class="page-item"><a href="{{ route('academies', ['page' => 2]) }}" class="page-link">2</a></li>
                    <li class="page-item ellipsis"></li>
                    <li class="page-item"><a href="{{ route('academies', ['page' => $academies->lastPage()]) }}" class="page-link">{{ $academies->lastPage() }}</a></li>
                @elseif($academies->currentPage() === $academies->lastPage())
                    <li class="page-item"><a href="{{ route('academies', ['page' => 1]) }}" class="page-link">1</a></li>
                    <li class="page-item ellipsis"></li>
                    <li class="page-item"><a href="{{ route('academies', ['page' => $academies->lastPage() - 1]) }}" class="page-link">{{ $academies->lastPage() - 1 }}</a></li>
                    <li class="page-item active"><a href="{{ route('academies', ['page' => $academies->lastPage()]) }}" class="page-link">{{ $academies->lastPage() }}</a></li>
                @elseif($academies->currentPage() === 2)
                    <li class="page-item"><a href="{{ route('academies', ['page' => 1]) }}" class="page-link">1</a></li>
                    <li class="page-item active"><a href="{{ route('academies', ['page' => $academies->currentPage()]) }}" class="page-link">{{ $academies->currentPage() }}</a></li>
                    <li class="page-item"><a href="{{ route('academies', ['page' => 3]) }}" class="page-link">3</a></li>
                    <li class="page-item ellipsis"></li>
                    <li class="page-item"><a href="{{ route('academies', ['page' => $academies->lastPage()]) }}" class="page-link">{{ $academies->lastPage() }}</a></li>
                @elseif($academies->lastPage() - $academies->currentPage() === 1)
                    <li class="page-item"><a href="{{ route('academies', ['page' => 1]) }}" class="page-link">1</a></li>
                    <li class="page-item ellipsis"></li>
                    <li class="page-item"><a href="{{ route('academies', ['page' => $academies->currentPage() - 1]) }}" class="page-link">{{ $academies->currentPage() - 1 }}</a></li>
                    <li class="page-item active"><a href="{{ route('academies', ['page' => $academies->currentPage()]) }}" class="page-link">{{ $academies->currentPage() }}</a></li>
                    <li class="page-item"><a href="{{ route('academies', ['page' => $academies->lastPage()]) }}" class="page-link">{{ $academies->lastPage() }}</a></li>
                @elseif($academies->currentPage() === 3)
                    <li class="page-item"><a href="{{ route('academies', ['page' => 1]) }}" class="page-link">1</a></li>
                    <li class="page-item"><a href="{{ route('academies', ['page' => 2]) }}" class="page-link">2</a></li>
                    <li class="page-item active"><a href="{{ route('academies', ['page' => $academies->currentPage()]) }}" class="page-link">{{ $academies->currentPage() }}</a></li>
                    <li class="page-item"><a href="{{ route('academies', ['page' => 4]) }}" class="page-link">4</a></li>
                    <li class="page-item"><a href="{{ route('academies', ['page' => 5]) }}" class="page-link">5</a></li>
                @endif
            @elseif($academies->lastPage() === 4)
                @if($academies->currentPage() === 1)
                    <li class="page-item active"><a href="{{ route('academies', ['page' => $academies->currentPage()]) }}" class="page-link">{{ $academies->currentPage() }}</a></li>
                    <li class="page-item"><a href="{{ route('academies', ['page' => 2]) }}" class="page-link">2</a></li>
                    <li class="page-item ellipsis"></li>
                    <li class="page-item"><a href="{{ route('academies', ['page' => $academies->lastPage()]) }}" class="page-link">{{ $academies->lastPage() }}</a></li>
                @elseif($academies->currentPage() === $academies->lastPage())
                    <li class="page-item"><a href="{{ route('academies', ['page' => 1]) }}" class="page-link">1</a></li>
                    <li class="page-item ellipsis"></li>
                    <li class="page-item"><a href="{{ route('academies', ['page' => $academies->lastPage() - 1]) }}" class="page-link">{{ $academies->lastPage() - 1 }}</a></li>
                    <li class="page-item active"><a href="{{ route('academies', ['page' => $academies->lastPage()]) }}" class="page-link">{{ $academies->lastPage() }}</a></li>
                @elseif($academies->currentPage() === 2)
                    <li class="page-item"><a href="{{ route('academies', ['page' => 1]) }}" class="page-link">1</a></li>
                    <li class="page-item active"><a href="{{ route('academies', ['page' => $academies->currentPage()]) }}" class="page-link">{{ $academies->currentPage() }}</a></li>
                    <li class="page-item"><a href="{{ route('academies', ['page' => 3]) }}" class="page-link">3</a></li>
                    <li class="page-item ellipsis"></li>
                    <li class="page-item"><a href="{{ route('academies', ['page' => $academies->lastPage()]) }}" class="page-link">{{ $academies->lastPage() }}</a></li>
                @elseif($academies->lastPage() - $academies->currentPage() === 1)
                    <li class="page-item"><a href="{{ route('academies', ['page' => 1]) }}" class="page-link">1</a></li>
                    <li class="page-item ellipsis"></li>
                    <li class="page-item"><a href="{{ route('academies', ['page' => $academies->currentPage() - 1]) }}" class="page-link">{{ $academies->currentPage() - 1 }}</a></li>
                    <li class="page-item active"><a href="{{ route('academies', ['page' => $academies->currentPage()]) }}" class="page-link">{{ $academies->currentPage() }}</a></li>
                    <li class="page-item"><a href="{{ route('academies', ['page' => $academies->lastPage()]) }}" class="page-link">{{ $academies->lastPage() }}</a></li>
                @endif
            @elseif($academies->lastPage() === 3)
                @if($academies->currentPage() === 1)
                    <li class="page-item active"><a href="{{ route('academies', ['page' => $academies->currentPage()]) }}" class="page-link">{{ $academies->currentPage() }}</a></li>
                    <li class="page-item"><a href="{{ route('academies', ['page' => 2]) }}" class="page-link">2</a></li>
                    <li class="page-item"><a href="{{ route('academies', ['page' => $academies->lastPage()]) }}" class="page-link">{{ $academies->lastPage() }}</a></li>
                @elseif($academies->currentPage() === $academies->lastPage())
                    <li class="page-item"><a href="{{ route('academies', ['page' => 1]) }}" class="page-link">1</a></li>
                    <li class="page-item"><a href="{{ route('academies', ['page' => $academies->lastPage() - 1]) }}" class="page-link">{{ $academies->lastPage() - 1 }}</a></li>
                    <li class="page-item active"><a href="{{ route('academies', ['page' => $academies->lastPage()]) }}" class="page-link">{{ $academies->lastPage() }}</a></li>
                @elseif($academies->currentPage() === 2)
                    <li class="page-item"><a href="{{ route('academies', ['page' => 1]) }}" class="page-link">1</a></li>
                    <li class="page-item active"><a href="{{ route('academies', ['page' => $academies->currentPage()]) }}" class="page-link">{{ $academies->currentPage() }}</a></li>
                    <li class="page-item"><a href="{{ route('academies', ['page' => $academies->lastPage()]) }}" class="page-link">{{ $academies->lastPage() }}</a></li>
                @elseif($academies->lastPage() - $academies->currentPage() === 1)
                    <li class="page-item"><a href="{{ route('academies', ['page' => 1]) }}" class="page-link">1</a></li>
                    <li class="page-item active"><a href="{{ route('academies', ['page' => $academies->currentPage()]) }}" class="page-link">{{ $academies->currentPage() }}</a></li>
                    <li class="page-item"><a href="{{ route('academies', ['page' => $academies->lastPage()]) }}" class="page-link">{{ $academies->lastPage() }}</a></li>
                @endif
            @elseif($academies->lastPage() === 2)
                @if($academies->currentPage() === 1)
                    <li class="page-item active"><a href="{{ route('academies', ['page' => $academies->currentPage()]) }}" class="page-link">{{ $academies->currentPage() }}</a></li>
                    <li class="page-item"><a href="{{ route('academies', ['page' => $academies->lastPage()]) }}" class="page-link">{{ $academies->lastPage() }}</a></li>
                @elseif($academies->currentPage() === $academies->lastPage())
                    <li class="page-item"><a href="{{ route('academies', ['page' => 1]) }}" class="page-link">1</a></li>
                    <li class="page-item active"><a href="{{ route('academies', ['page' => $academies->lastPage()]) }}" class="page-link">{{ $academies->lastPage() }}</a></li>
                @endif
            @elseif($academies->lastPage() === 1)
                <li class="page-item active"><a href="{{ route('academies', ['page' => $academies->currentPage()]) }}" class="page-link">{{ $academies->currentPage() }}</a></li>
        @endif

        <!-- Next page -->
            <li class="page-item @if($academies->currentPage() === $academies->lastPage()) disabled @endif">
                <a href="{{ route('academies', ['page' => $academies->currentPage() + 1]) }}" class="page-link">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                    <span class="sr-only">Next</span> <!-- sr-only = only for screen readers -->
                </a>
            </li>
        </ul>
    </nav>
@elseif($academies->total() === 0)
    {{ view('errors.404') }}
@else
    <script>window.location = '{{ route('academies', ['page' => $academies->lastPage()]) }}';</script>

    {{-- If JavaScript is disabled --}}
    {{ view('errors.404') }}
@endif
