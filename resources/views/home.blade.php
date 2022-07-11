<x-layout>

    <section class="container mx-auto md:max-w-6xl mx-auto px-4 py-8 sm:px-6 lg:px-8">
        <h1 class="text-xl lg:text-4xl mb-10">Some piece work for you</h1>
        <div class="space-y-6 flex flex-col  w-8/12">
            @foreach($works as $work)
                <div class="border rounded bg-white border p-4 flex flex-row">
                    <div class="flex w-10/12 flex-col">
                        <div class="flex space-x-4 items-center">
                            <h2 class="font-bold">{{ $work['title'] }}</h2>
                            <span class="text-sm">{{ $work['duration'] }}</span>
                        </div>
                        <div>
                            <p class="my-2">{{ $work['description'] }}</p>
                            <p class="font-bold">{{ $work['location'] }}</p>
                            {{-- <p><a href="tel:{{ $work['contact'] }}">{{ $work['contact'] }}</a></p> --}}
                        </div>
                    </div>
                    <div class="w-2/12 flex items-center justify-center px-3">
                        <span class="font-bold">K250</span>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

</x-layout>
