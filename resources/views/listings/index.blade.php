<x-layout>
    <section class="container mx-auto px-5 py-12">
           <div class="mb-6">
                <div class="flex justify-center align-center space-x-4">
                    @foreach($tags as $tag)
                        <a href="{{ route('listings.index', ['tag' => $tag->slug]) }}"
                            class="inline-block border rounded-lg text-gray-600 bg-gray-100 px-1 py-0.5"
                        >{{ $tag->name }}</a>
                    @endforeach
                </div>
           </div>
    </section>

    <section class="container mx-auto md:max-w-6xl mx-auto px-4 py-8 sm:px-6 lg:px-8">
        <h1 class="text-xl mb-8">All piece work ({{ $listings->count() }})</h1>
        <div class="space-y-6 flex flex-col lg:w-8/12">
            @foreach($listings as $listing)
                <div class="rounded bg-white p-2 flex flex-row">
                    <div class="flex flex-col">
                        <h2 class="font-bold">{{ $listing->title }}

                        </h2>
                        <div class="">{{ $listing->location }}</div>

                        <div class="flex items-center align-center space-x-4 py-2">
                            <span class="font-semibold bg-gray-100 p-1 text-gray-800 py-0">{{ $listing->wage }}</span>
                            @if($listing->urgent == 1)
                                <span class="text-sm text-red-500">Urgent</span>
                            @endif

                            @if($listing->number_of_workers > 1)
                                <span class="text-sm text-gray-500">Hiring {{ $listing->number_of_workers }}</span>
                            @endif

                            <span class="text-sm text-gray-500">{{ $listing->work_type->type }}</span>


                        </div>
                        <div>
                            {{-- <div class="my-2 text-gray-700 text-sm hidden">{!! $listing->description !!}</div> --}}
                            <p class="text-sm text-gray-500">{{ $listing->created_at->diffForHumans()  }}</p>
                            {{-- <p><a href="tel:{{ $listing->contact }}">{{ $listing->contact }}</a></p> --}}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

</x-layout>
