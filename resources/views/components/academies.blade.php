<x-layout>
    @if((int) request('page') < 1)<script>window.location = '{{ route('academies', ['page' => 1]) }}';</script>@endif

    <div class="content-wrapper d-flex flex-column justify-content-center">
        <!-- Equal in-between spacing with cards -->
        <div class="d-flex justify-content-center align-items-center">
            @foreach($academies as $academy)
                <div class="col-3">
                    <div class="card p-0"> <!-- p-0 = padding: 0 -->
                        <img src="{{ $academy->logo }}" class="img-fluid rounded-top w-full h-200" alt="..."> <!-- rounded-top = rounded corners on the top -->
                        <!-- Nested content container inside card -->
                        <div class="content h-auto">
                            <h2 class="content-title">
                                {{ $academy->name }}
                            </h2>
                            <p class="text-muted">
                                {{ \Illuminate\Support\Str::limit($academy->description, 100, '...') }}
                            </p>
                            <div class="text-right"> <!-- text-right = text-align: right -->
                                <a href="{{ route('academies.show', ['academy' => $academy]) }}" class="btn">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <x-pagination :academies="$academies" />
    </div>
</x-layout>
