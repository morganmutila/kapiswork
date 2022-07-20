<section class="fixed bottom-0 border-t w-full bg-white md:hidden">
    <nav class="px-8 pt-1 pb-2 flex items-center justify-between" role="navigation">
        <a href="{{route('home')}}" class="inline-flex flex-col justify-center items-center hover:text-black px-2
            {{ request()->routeIs('home') ? ' text-primary ' : ' text-gray-600 ' }}">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
            </div>
            <span class="text-xs">Home</span>
        </a>

        <a href="{{route('signup')}}" class="inline-flex flex-col justify-center items-center text-gray-500 hover:text-black px-2
            {{ request()->routeIs('signup') ? ' text-primary ' : ' text-gray-600 ' }}">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
            <span class="text-xs">Search</span>
        </a>

        <a href="{{route('login')}}" class="inline-flex flex-col justify-center items-center text-gray-500 hover:text-black px-2
            {{ request()->routeIs('login') ? ' text-primary ' : ' text-gray-600 ' }}">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
            </div>
            <span class="text-xs">Piecework</span>
        </a>

        <a href="{{route('login')}}" class="inline-flex flex-col justify-center items-center text-gray-500 hover:text-black px-2
            {{ request()->routeIs('login') ? ' text-primary ' : ' text-gray-600 ' }}">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
            <span class="text-xs">Account</span>
        </a>
    </nav>
</section>
