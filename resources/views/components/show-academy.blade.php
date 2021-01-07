<x-layout>
    <div class="content-wrapper">
        <div class="m-auto">
            <div class="card p-0 h-full shadow">
                <img src="{{ $academy->logo ?? asset('placeholder-image.png') }}" class="img-fluid rounded-top w-600 h-350 m-auto p-20 d-block" alt="Academy's logo"
                     onclick="enhanceImage('{{ $academy->id }}', '{{ $academy->logo ?? asset('placeholder-image.png') }}');" style="cursor: pointer;">
                <!-- Nested content container inside card -->
                <div class="content h-full">
                    <div>
                        @if($academy->verified) <i class="fa fa-check-circle text-success"></i> @endif
                        <h2 class="content-title d-flex justify-content-between font-size-16 font-weight-bolder p-0 m-0 d-inline-flex">
                            {{ $academy->name }}
                        </h2>
                    </div>
                    <a href="{{ \App\Repositories\Constants::searcher.$academy->getLocation() }}" class="font-weight-semi-bold font-size-12 hyperlink-underline d-block">{{ $academy->country }}, {{ $academy->city }}</a>
                    <span class="d-block text-muted"><i class="fa fa-calendar mt-5 text-light-dm text-dark-lm" aria-hidden="true" style="margin-left: 1px;"></i>&nbsp;&nbsp;{{ $academy->date_of_establishment }}</span>
                    <div style="margin-top: 2px;">
                        <li class="fa fa-link text-light-dm text-dark-lm align-text-top"></li> &nbsp;
                        <a class="text-monospace m-0 p-0 d-inline-block">{{ $academy->website }}</a>
                    </div>
                    <div>
                        <i class="fa fa-tags text-dark-lm text-light-dm"></i> &nbsp;

                        <!-- Badge group -->
                        @if(count($academy->tags))
                            <span class="badge-group align-text-bottom" role="group" aria-label="Tag badges">
                                        @foreach($academy->tags->slice(0, 3)->all() as $tag) <a href="#" class="badge badge-success text-light-dm text-dark-lm bg-transparent">#{{ $tag->name }}</a> @endforeach
                                        <span class="badge badge-pill badge-success text-light-dm text-dark-lm bg-transparent"><li class="fa fa-tag d-inline align-text-bottom"></li></span>
                                    </span>
                        @else
                            <span class="text-muted font-size-12 font-italic font-weight-lighter">Untagged...</span>
                        @endif
                    </div>
                </div>
                <div class="content">
                    <span class="text-muted font-size-20 font-weight-lighter">&quot;<span class="font-italic">{{ $academy->motto }}</span>&quot;</span>
                    <p class="font-weight-lighter">{{ $academy->description }}</p>
                </div>
            </div>
        </div>
    </div>
</x-layout>
