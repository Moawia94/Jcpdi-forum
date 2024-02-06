<nav class="w-full z-40 top-0  ">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="/svg/logo.svg" class="h-12" alt="JCPDI FORUM Logo">
        </a>
        <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
            <!-- dark mode toogle -->
        <div class="sm:hidden md:flex md:flex-1 md:justify-end lg:flex lg:flex-1 lg:justify-end">
            <ul>
                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                <a class="@if(app()->getLocale() == $localeCode) text-primary dark:text-primary font-bold @endif hover:text-primary px-1 text-black dark:text-white text-xs dark:hover:text-primary"
                    rel="alternate" hreflang="{{ $localeCode }}"
                    href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                    {{ $properties['native'] }}
                </a>
                @endforeach
            </ul>
        </div>
        <!-- end -->
            <button data-collapse-toggle="navbar-sticky" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul
                class="flex flex-col p-4 md:p-0 mt-4 font-medium border   md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 ">
                <li>
                    <a href="#"
                        class="block py-2 px-3 text-white  md:p-0"
                        aria-current="page">{!!__('header.home') !!} </a>
                </li>
                <li>
                    <a href="#"
                        class="block py-2 px-3 text-white md:p-0 ">
                    {!!__('header.goals') !!}
                    </a>
                </li>
                <li>
                    <a href="#"
                    class="block py-2 px-3 text-white md:p-0 ">
                    {!!__('header.Meeting') !!}
                </a>
                </li>

            </ul>
        </div>
    </div>
</nav>
