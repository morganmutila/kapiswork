<x-layout>
    <section class="container mx-auto px-5 py-12 hidden">
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

    <section class="py-24 hidden md:block max-w-full px-20 text-center bg-slate-900">
        <h1 class="font-bold text-4xl mb-10 text-white">Piecework at your fingertips</h1>
        <p class="leading-5 text-gray-300">Need a quick job? Find some piecework here</p>
    </section>

    <section class="container mx-auto md:max-w-5xl py-8 sm:px-6 lg:px-8">
        <div class="flex flex-col mb-4 mx-4">
            <h1 class="text-lg font-bold">All piece work</h1>
            <span class="text-slate-500 text-sm">{{ $jobs }} piece work available</span>
        </div>
        <div class="grid grid-cols-1">
            @foreach($listings as $listing)
                <div class="bg-white py-2 px-4 border-b">
                    <div class="flex flex-col">
                        <h2 class="font-bold">{{ $listing->title }}</h2>
                        <div class="text-gray-600">{{ $listing->location }}</div>

                        <div class="flex items-center flex-wrap space-x-4">
                            <span class="text-sm text-gray-800 font-sans">{{ $listing->wage }}</span>
                            @if($listing->urgent == 1)
                                <span class="text-xs bg-red-400 rounded font-bold px-1 text-white">Urgent</span>
                            @endif

                            @if($listing->number_of_workers > 1)
                                <div class="inline-flex items-center space-x-1">
                                    <span class="text-gray-400">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                          <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                    <span class="text-sm text-slate-400">Hiring: {{ $listing->number_of_workers }}</span>
                                </div>
                            @endif

                            <span class="text-sm text-gray-500">{{ $listing->work_type->type }}</span>

                        </div>
                        <div class="flex align-center py-4 hidden">
                            @foreach($listing->tags as $tag)
                                <a href="{{ route('listings.index', ['tag' => $tag->slug]) }}"
                                    class="inline-block border border-green-200 mr-2 text-sm text-green-600 px-1 py-0.5"
                                >{{ $tag->name }}</a>
                            @endforeach
                        </div>
                        <div class="mt-2 flex items-center space-x-1">
{{--                            <span class="text-slate-400">--}}
{{--                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">--}}
{{--                                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />--}}
{{--                                </svg>--}}
{{--                            </span>--}}
                            <time class="text-xs text-gray-500">{{ $listing->created_at->diffForHumans() }}</time>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <section class="py-8 pt-6 max-w-6xl">
        {{ $listings->links(); }}
    </section>

</x-layout>
