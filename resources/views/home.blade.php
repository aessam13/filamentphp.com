<x-layouts.app previewify="757" :previewify-data="[
    'title' => 'The elegant TALLkit for Laravel artisans.',
    'subtitle' => 'Rapidly build TALL stack apps, designed for humans.',
    'code' => 'composer require filament/filament',
]">
    <header class="max-w-7xl text-center mx-auto py-12 px-8 md:py-24">
        <h1 class="text-4xl font-heading md:text-6xl">
            <span class="block text-gray-800 xl:inline">
                Laravel development.
            </span>

            <span class="inline-block mt-3 italic text-primary-500 relative md:mt-6 xl:mt-0 xl:inline">
                <span class="absolute opacity-[10%] left-[-1px]" aria-hidden="true">Accelerated</span>
                <span class="absolute opacity-[10%] left-[-2px]" aria-hidden="true">Accelerated</span>
                <span class="absolute opacity-[9%] left-[-3px]" aria-hidden="true">Accelerated</span>
                <span class="absolute opacity-[9%] left-[-4px]" aria-hidden="true">Accelerated</span>
                <span class="absolute opacity-[8%] left-[-5px]" aria-hidden="true">Accelerated</span>
                <span class="absolute opacity-[8%] left-[-6px]" aria-hidden="true">Accelerated</span>
                <span>Accelerated.</span>
            </span>
        </h1>

        <h3 class="mt-8 text-gray-600 font-medium text-xl md:text-3xl">
            Stop rebuilding the same UI over and <span class="bg-gradient-to-r from-gray-700 to-transparent text-transparent bg-clip-text">over <span aria-hidden="true">and over and over an</span></span>
        </h3>

        <div class="flex justify-center items-center flex-wrap gap-4 mt-4 md:mt-8">
            <a
                href="{{ route('docs') }}"
                class="inline-flex items-center font-medium text-lg px-4 py-2 rounded-lg bg-primary-500 text-white transition hover:text-primary-50 hover:scale-105"
            >
                <x-heroicon-o-academic-cap class="w-6 h-6 mr-3" />

                Visit the documentation
            </a>

            <a
                href="{{ route('discord') }}"
                target="_blank"
                class="inline-flex items-center font-medium text-lg px-4 py-2 rounded-lg bg-gray-900 text-white transition hover:text-primary-100 hover:scale-105"
            >
                <svg class="w-5 mr-3" fill="none" viewBox="0 0 71 55" aria-hidden="true">
                    <g clip-path="url(#clip0)">
                        <path d="M60.1045 4.8978C55.5792 2.8214 50.7265 1.2916 45.6527 0.41542C45.5603 0.39851 45.468 0.440769 45.4204 0.525289C44.7963 1.6353 44.105 3.0834 43.6209 4.2216C38.1637 3.4046 32.7345 3.4046 27.3892 4.2216C26.905 3.0581 26.1886 1.6353 25.5617 0.525289C25.5141 0.443589 25.4218 0.40133 25.3294 0.41542C20.2584 1.2888 15.4057 2.8186 10.8776 4.8978C10.8384 4.9147 10.8048 4.9429 10.7825 4.9795C1.57795 18.7309 -0.943561 32.1443 0.293408 45.3914C0.299005 45.4562 0.335386 45.5182 0.385761 45.5576C6.45866 50.0174 12.3413 52.7249 18.1147 54.5195C18.2071 54.5477 18.305 54.5139 18.3638 54.4378C19.7295 52.5728 20.9469 50.6063 21.9907 48.5383C22.0523 48.4172 21.9935 48.2735 21.8676 48.2256C19.9366 47.4931 18.0979 46.6 16.3292 45.5858C16.1893 45.5041 16.1781 45.304 16.3068 45.2082C16.679 44.9293 17.0513 44.6391 17.4067 44.3461C17.471 44.2926 17.5606 44.2813 17.6362 44.3151C29.2558 49.6202 41.8354 49.6202 53.3179 44.3151C53.3935 44.2785 53.4831 44.2898 53.5502 44.3433C53.9057 44.6363 54.2779 44.9293 54.6529 45.2082C54.7816 45.304 54.7732 45.5041 54.6333 45.5858C52.8646 46.6197 51.0259 47.4931 49.0921 48.2228C48.9662 48.2707 48.9102 48.4172 48.9718 48.5383C50.038 50.6034 51.2554 52.5699 52.5959 54.435C52.6519 54.5139 52.7526 54.5477 52.845 54.5195C58.6464 52.7249 64.529 50.0174 70.6019 45.5576C70.6551 45.5182 70.6887 45.459 70.6943 45.3942C72.1747 30.0791 68.2147 16.7757 60.1968 4.9823C60.1772 4.9429 60.1437 4.9147 60.1045 4.8978ZM23.7259 37.3253C20.2276 37.3253 17.3451 34.1136 17.3451 30.1693C17.3451 26.225 20.1717 23.0133 23.7259 23.0133C27.308 23.0133 30.1626 26.2532 30.1066 30.1693C30.1066 34.1136 27.28 37.3253 23.7259 37.3253ZM47.3178 37.3253C43.8196 37.3253 40.9371 34.1136 40.9371 30.1693C40.9371 26.225 43.7636 23.0133 47.3178 23.0133C50.9 23.0133 53.7545 26.2532 53.6986 30.1693C53.6986 34.1136 50.9 37.3253 47.3178 37.3253Z" fill="currentColor"/>
                    </g>
                </svg>

                <span>
                    Join our community
                </span>
            </a>
        </div>

        <div x-data="{ theme: $persist('dark') }" class="relative -mx-4 sm:mx-auto mt-12 max-w-6xl mx-auto transition hover:scale-[1.02] md:mt-28">
            <div
                class="relative group cursor-pointer shadow-2xl ring-1 ring-white/10 shadow-primary-500/30 transition rounded-2xl overflow-hidden"
                x-bind:class="theme === 'dark' ? 'bg-gray-900' : 'bg-gray-100'"
            >
                <div
                    class="rounded-t-2xl flex justify-between items-center space-x-4 py-1 px-5 transition"
                    x-bind:class="theme === 'dark' ? 'bg-gray-900 border-b border-gray-700' : 'bg-white  border-b border-gray-200'"
                >
                    <div class="py-4 space-x-2 flex">
                        <div class="w-3 h-3 rounded-full bg-red-500"></div>
                        <div class="w-3 h-3 rounded-full bg-primary-300"></div>
                        <div class="w-3 h-3 rounded-full bg-success-400"></div>
                    </div>

                    <button
                        role="switch"
                        aria-checked="false"
                        x-on:click="theme = theme === 'light' ? 'dark' : 'light'"
                        x-bind:class="{
                            'bg-primary-600': theme === 'light',
                            'dark:bg-white/10': theme === 'dark',
                        }"
                        type="button"
                        class="relative inline-flex shrink-0 p-0.5 w-14 rounded-xl border-2 border-transparent cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:border-primary-500 focus:ring-2 focus:ring-primary-500 border-gray-300"
                    >
                        <span
                            x-bind:class="{
                                'translate-x-6 rtl:-translate-x-6': theme === 'light',
                                'translate-x-0': theme === 'dark',
                            }"
                            class="pointer-events-none relative inline-block h-6 w-6 px-2 rounded-lg bg-white shadow transform ring-0 ease-in-out transition duration-200"
                        >
                            <span
                                class="absolute inset-0 h-full w-full flex items-center justify-center transition-opacity"
                                aria-hidden="true"
                                :class="{
                                    'opacity-0 ease-out duration-100': theme === 'light',
                                    'opacity-100 ease-in duration-200': theme === 'dark',
                                }"
                            >
                                <x-heroicon-s-moon class="h-4 w-4 text-gray-400" />
                            </span>

                            <span
                                class="absolute inset-0 h-full w-full flex items-center justify-center transition-opacity"
                                aria-hidden="true"
                                :class="{
                                    'opacity-100 ease-in duration-200': theme === 'light',
                                    'opacity-0 ease-out duration-100': theme === 'dark',
                                }"
                            >
                                <x-heroicon-s-sun class="h-4 w-4 text-primary-600" />
                            </span>
                        </span>
                    </button>
                </div>

                <a href="https://demo.filamentphp.com" target="_blank" class="flex w-full rounded-b-2xl overflow-hidden max-h-[150px] sm:max-h-[300px] md:max-h-[400px] lg:max-h-[500px]">
                    <div class="relative overflow-hidden max-h-full">
                        <img
                            src="/images/home/demo-light-sidebar.jpg"
                            aria-hidden="true"
                        />

                        <img
                            src="/images/home/demo-dark-sidebar.jpg"
                            aria-hidden="true"
                            x-bind:class="{
                                'opacity-0': theme === 'light',
                            }"
                            class="absolute top-0 transition"
                        />
                    </div>

                    <div class="relative overflow-y-auto max-h-full">
                        <img
                            src="/images/home/demo-light-content.jpg"
                            alt="Screenshot of the admin panel demo"
                        />

                        <img
                            src="/images/home/demo-dark-content.jpg"
                            aria-hidden="true"
                            alt="Screenshot of the admin panel demo"
                            x-bind:class="{
                                'opacity-0': theme === 'light',
                            }"
                            class="absolute top-0 transition"
                        />
                    </div>
                </a>

                <div class="absolute inset-0 flex items-center justify-center transition backdrop-blur-sm bg-white/20 group-hover:opacity-0 group-hover:hidden rounded-2xl">
                    <div class="flex items-center bg-gray-900 py-2 px-4 rounded-lg font-medium sm:text-xl text-white">
                        <x-heroicon-o-play class="w-5 h-5 sm:w-6 sm:h-6 mr-2" />

                        Try our admin panel
                    </div>
                </div>
            </div>

            <div class="hidden absolute -top-[4.5rem] right-16 md:flex">
                <div class="relative">
                    <span class="absolute font-medium top-1.5 text-lg right-[4.5rem] whitespace-nowrap">
                        it's open source
                    </span>

                    <img src="/images/arrow-turn.svg" class="h-20 -scale-x-100 -rotate-90" />
                </div>
            </div>
        </div>
    </header>

    <section class="bg-gray-900 bg-cover bg-center -mt-[8rem] md:-mt-[20rem] pt-[8rem] md:pt-[16rem] lg:-mt-[24rem]" style="background-image: url(/images/backgrounds/meteor.svg)">
        <div class="max-w-7xl text-center mx-auto px-8">
            <div class="max-w-6xl mx-auto py-16 space-y-16 lg:py-32">
                <div class="space-y-4">
                    <h3 class="font-heading text-gray-200 text-4xl">
                        <span class="block sm:inline">
                            Built with the
                        </span>

                        <span class="block text-primary-400 sm:inline">
                            TALL stack
                        </span>
                    </h3>

                    <p class="text-gray-400">
                        /tɔːl stæk/
                    </p>

                    <h4 class="text-gray-200 text-xl max-w-2xl mx-auto">
                        A set of frameworks that combine to form dynamic, maintainable, full-stack applications with little effort.
                    </h4>
                </div>

                <div class="grid rounded-xl overflow-hidden -mx-4 sm:mx-auto sm:grid-cols-2 lg:grid-cols-4">
                    <a
                        href="https://tailwindcss.com"
                        target="_blank"
                        class="relative flex items-center justify-center bg-white p-8 border-b-4 lg:border-b-0 lg:border-r-4"
                    >
                        <img
                            src="/images/tailwind.svg"
                            alt="Tailwind CSS"
                            class="w-full max-h-12 transition hover:scale-105"
                        />

                        <div class="absolute z-10 rotate-90 -bottom-6 lg:bottom-auto lg:-right-6 lg:rotate-0">
                            <img src="/images/puzzle-join.svg" class="w-6 h-6" />
                        </div>
                    </a>

                    <a
                        href="https://alpinejs.dev"
                        target="_blank"
                        class="relative flex items-center justify-center bg-white p-8 border-b-4 sm:border-l-4 lg:border-b-0 lg:border-l-0 lg:border-r-4"
                    >
                        <img
                            src="/images/alpine.svg"
                            alt="Alpine.js"
                            class="w-full max-h-12 transition hover:scale-105"
                        />

                        <div class="absolute z-10 rotate-90 -bottom-6 sm:bottom-auto sm:-left-6 sm:-rotate-180 lg:left-auto lg:-right-6 lg:rotate-0">
                            <img src="/images/puzzle-join.svg" class="w-6 h-6" />
                        </div>
                    </a>

                    <a
                        href="https://laravel.com"
                        target="_blank"
                        class="relative flex items-center justify-center bg-white p-8 border-b-4 sm:border-b-0 lg:border-r-4"
                    >
                        <img
                            src="/images/laravel.svg"
                            alt="Laravel"
                            class="w-full max-h-12 transition hover:scale-105"
                        />

                        <div class="absolute z-10 rotate-90 -bottom-6 sm:bottom-auto sm:-right-6 sm:rotate-0">
                            <img src="/images/puzzle-join.svg" class="w-6 h-6" />
                        </div>
                    </a>

                    <a
                        href="https://laravel-livewire.com"
                        target="_blank"
                        class="relative flex items-center justify-center bg-white p-8 sm:border-l-4 lg:border-l-0"
                    >
                        <img
                            src="/images/livewire.svg"
                            alt="Livewire"
                            class="w-full max-h-12 transition hover:scale-105"
                        />

                        <div class="hidden absolute z-10 -rotate-90 -top-6 sm:block lg:hidden">
                            <img src="/images/puzzle-join.svg" class="w-6 h-6" />
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="max-w-8xl relative mx-auto px-8 py-16">
            <div class="text-center">
                <h2 class="font-heading text-gray-800 text-4xl">
                    What is Filament?
                </h2>

                <div class="mx-auto max-w-5xl">
                    <p class="mt-8 text-gray-600 font-medium text-xl">
                        Filament is a collection of packages: <mark class="highlight">UI components</mark> that you can install into your Laravel app.
                    </p>

                    <p class="mt-4 text-gray-600 font-medium text-xl">
                        The <mark class="highlight">admin panel</mark> combines those components into one intuitive interface to <mark class="highlight">manage your app's data</mark>, but each package can be used individually in your own <mark class="highlight">TALL stack</mark> app if you wish.
                    </p>
                </div>
            </div>

            <div class="mt-16 grid grid-cols-1 gap-8 lg:grid-cols-3">
                <div class="col-span-1 lg:col-span-3 p-1 bg-gradient-to-b from-rose-500 to-amber-300 rounded-2xl">
                    <div class="gap-8 items-center justify-between rounded-xl p-6 bg-white/70 lg:flex lg:p-12">
                        <div class="flex-shrink-0">
                            <h3 class="font-heading text-gray-800 text-4xl">
                                <span>
                                    Admin Panel
                                </span>

                                <span class="font-sans text-medium text-xl text-rose-600">
                                    v2
                                </span>
                            </h3>

                            <div class="mt-4 text-lg max-w-lg text-gray-700">
                                <p>
                                    A fully-featured Laravel admin panel.
                                </p>

                                <p class="mt-3">
                                    Build complex and interactive tables, complete with sort, search and filter functionalities, easily.
                                </p>

                                <p class="mt-3">
                                    Craft intuitive forms using a wide range of field types, using our simple, class-based form builder.
                                </p>
                            </div>

                            <x-composer-command package="filament/filament" class="mt-8 hidden xl:block" />

                            <div class="mt-8">
                                <a href="https://demo.filamentphp.com" target="_blank" class="block text-gray-800 transition hover:text-primary-600 font-medium text-lg">
                                    Demo &rarr;
                                </a>

                                <a href="/docs/admin" class="block text-gray-800 transition hover:text-primary-600 font-medium text-lg">
                                    Documentation &rarr;
                                </a>
                            </div>
                        </div>

                        <div class="hidden lg:block lg:-mr-16 2xl:-mr-24">
                            <img
                                src="/images/admin/form.jpg"
                                class="w-full rounded-2xl ring-1 ring-white/10 shadow-2xl"
                            />
                        </div>
                    </div>
                </div>

                <div class="col-span-1 p-1 bg-amber-300 rounded-2xl">
                    <div class="rounded-xl bg-white/70 h-full p-6">
                        <h3 class="font-heading text-gray-800 text-3xl">
                            <span>
                                Form builder
                            </span>

                            <span class="font-sans text-medium text-xl text-primary-600">
                                v2
                            </span>
                        </h3>

                        <div class="mt-4 text-gray-700">
                            <p>
                                An intuitive Laravel form builder.
                            </p>

                            <p class="mt-3">
                                Generate date pickers, searchable select menus, rich text editors and file upload fields with just one line of PHP.
                            </p>
                        </div>

                        <x-composer-command package="filament/forms" class="mt-8 hidden xl:block" />

                        <div class="mt-8">
                            <a href="/docs/forms" class="block text-gray-800 transition hover:text-primary-600 font-medium">
                                Documentation &rarr;
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-span-1 p-1 bg-amber-300 rounded-2xl">
                    <div class="rounded-xl bg-white/70 h-full p-6">
                        <h3 class="font-heading text-gray-800 text-3xl">
                            <span>
                                Table builder
                            </span>

                            <span class="font-sans text-medium text-xl text-primary-600">
                                v2
                            </span>
                        </h3>

                        <div class="mt-4 text-gray-700">
                            <p>
                                An interactive Laravel table builder.
                            </p>

                            <p class="mt-3">
                                Build custom datatables, complete with sort, search and filter functionalities, with a simple PHP interface.
                            </p>
                        </div>

                        <x-composer-command package="filament/tables" class="mt-8 hidden xl:block" />

                        <div class="mt-8">
                            <a href="/docs/tables" class="block text-gray-800 transition hover:text-primary-600 font-medium">
                                Documentation &rarr;
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-span-1 p-1 bg-amber-300 rounded-2xl">
                    <div class="rounded-xl bg-white/70 h-full p-6">
                        <h3 class="font-heading text-gray-800 text-3xl">
                            <span>
                                Notifications
                            </span>

                            <span class="font-sans text-medium text-xl text-primary-600">
                                v2
                            </span>
                        </h3>

                        <div class="mt-4 text-gray-700">
                            <p>
                                Powerful Laravel notifications.
                            </p>

                            <p class="mt-3">
                                Send beautiful notifications, with animations and the full power of Livewire, using a fluent PHP interface.
                            </p>
                        </div>

                        <x-composer-command package="filament/notifications" class="mt-8 hidden xl:block" />

                        <div class="mt-8">
                            <a href="/docs/notifications" class="block text-gray-800 transition hover:text-primary-600 font-medium">
                                Documentation &rarr;
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-sponsor-banner>
        <x-slot name="logos">
            <a
                class="flex items-center justify-center text-rose-50"
                href="https://codecourse.com"
                target="_blank"
                title="Codecourse"
            >
                <svg class="w-auto h-7 fill-current" viewBox="0 0 725 117">
                    <path d="M110.276 31.3396C109.356 36.1361 106.794 40.4621 103.029 43.5732C99.2641 46.6843 94.5328 48.3859 89.6489 48.3853C88.5004 48.3788 87.3543 48.2791 86.222 48.087C87.4832 51.4287 88.1282 54.9715 88.1256 58.5433C88.1256 74.9116 74.8554 88.1806 58.4871 88.1806C54.5943 88.1857 50.7389 87.4215 47.1424 85.9318C43.5459 84.4422 40.2792 82.2565 37.5301 79.5003L17.1218 99.9075C22.5479 105.348 28.9957 109.662 36.0945 112.603C43.1934 115.543 50.8034 117.052 58.4871 117.042C90.7967 117.042 116.987 90.8505 116.987 58.5421C116.998 49.0635 114.694 39.7256 110.276 31.3396Z" />
                    <path d="M58.4871 0.0421176C26.1787 0.0421176 -0.0128761 26.2326 -0.0128761 58.5421C-0.0229374 68.0203 2.28078 77.3576 6.69824 85.7434C7.61797 80.9468 10.1808 76.6206 13.9458 73.5095C17.7108 70.3984 22.4424 68.6969 27.3265 68.6977C28.4747 68.7046 29.6203 68.8048 30.7523 68.9972C29.4921 65.6556 28.8475 62.1134 28.8499 58.5421C28.8499 42.1738 42.1188 28.9048 58.4871 28.9048C62.3797 28.8999 66.2349 29.6642 69.8312 31.1538C73.4276 32.6434 76.694 34.8291 79.443 37.5851L99.8536 17.1756C94.4271 11.7355 87.9791 7.42131 80.8801 4.48099C73.7811 1.54066 66.171 0.0321427 58.4871 0.0421176Z" />
                    <path d="M99.8537 17.1756C91.728 9.05814 78.9867 5.71428 69.333 5.71428C55.9635 5.71428 28.851 14.2377 28.851 58.5421C28.8499 42.1738 42.12 28.899 58.4871 28.899C62.3801 28.8949 66.2356 29.6601 69.8319 31.1507C73.4282 32.6414 76.6945 34.8281 79.443 37.5851C82.1495 40.2917 85.8203 41.8123 89.6479 41.8124C93.4756 41.8125 97.1465 40.2921 99.8531 37.5857C102.56 34.8792 104.08 31.2084 104.08 27.3808C104.081 23.5531 102.56 19.8822 99.8537 17.1756Z" />
                    <path d="M17.1218 99.9075C25.2381 108.02 37.9829 111.365 47.6366 111.365C61.0073 111.365 88.1186 102.841 88.1186 58.5374C88.1186 74.9057 74.8484 88.1747 58.4801 88.1747C54.5873 88.1798 50.7319 87.4156 47.1354 85.926C43.5389 84.4363 40.2722 82.2506 37.5231 79.4945C34.8068 76.8346 31.1505 75.3541 27.3488 75.3746C23.5471 75.3951 19.9071 76.9149 17.2196 79.604C14.5322 82.293 13.0144 85.9339 12.996 89.7356C12.9777 93.5373 14.4604 97.1927 17.1218 99.9075Z" />
                    <path d="M149 59.0227C149 43.8416 160.802 33.0464 175.356 33.0464C181.004 33.0031 186.52 34.7421 191.105 38.0119C191.942 38.599 192.625 39.3769 193.096 40.2801C193.567 41.1833 193.812 42.1855 193.811 43.2022C193.796 44.4078 193.443 45.5856 192.791 46.6036C192.139 47.6215 191.214 48.4395 190.12 48.9658C189.025 49.4922 187.805 49.7061 186.595 49.5836C185.385 49.4612 184.233 49.0072 183.268 48.2725C181.001 46.5452 178.216 45.6185 175.356 45.6399C168.729 45.6399 163.357 51.1998 163.357 59.0227C163.357 66.8456 168.729 72.3905 175.356 72.3905C178.218 72.4061 181.003 71.4724 183.268 69.7379C184.423 68.8811 185.827 68.4184 187.27 68.4191C188.644 68.4048 189.986 68.8244 191.104 69.6171C192.221 70.4098 193.055 71.5345 193.484 72.8282C193.913 74.1219 193.916 75.5175 193.492 76.8129C193.068 78.1083 192.239 79.2363 191.125 80.0335C186.534 83.3073 181.011 85.0465 175.356 84.999C160.802 84.999 149 74.1888 149 59.0227ZM198.291 59.0227C198.291 43.8416 210.093 33.0464 224.647 33.0464C239.201 33.0464 251.009 43.8566 251.009 59.0227C251.009 74.1888 239.206 84.999 224.647 84.999C210.088 84.999 198.291 74.1888 198.291 59.0227ZM236.651 59.0227C236.651 51.2198 231.279 45.6599 224.647 45.6599C218.015 45.6599 212.648 51.1998 212.648 59.0227C212.648 66.8456 218.02 72.3905 224.647 72.3905C231.274 72.3905 236.651 66.8106 236.651 59.0227ZM307.587 17.0111V77.4209C307.603 79.1541 306.97 80.8316 305.81 82.1283C304.65 83.4249 303.045 84.2483 301.307 84.4387C299.569 84.6291 297.822 84.1729 296.404 83.1587C294.986 82.1445 293.998 80.6445 293.633 78.9495C289.592 82.8369 284.18 85.0074 278.549 84.999C265.825 84.999 255.514 74.1888 255.514 59.0227C255.514 43.8566 265.825 33.0464 278.549 33.0464C284.091 33.0417 289.423 35.1485 293.441 38.9311V17.0111C293.441 15.1516 294.186 13.3683 295.513 12.0535C296.839 10.7387 298.638 10 300.514 10C302.39 10 304.189 10.7387 305.515 12.0535C306.842 13.3683 307.587 15.1516 307.587 17.0111ZM293.874 59.0227C293.874 51.2198 288.497 45.6599 281.87 45.6599C275.244 45.6599 269.872 51.1998 269.872 59.0227C269.872 66.8456 275.244 72.3905 281.87 72.3905C288.497 72.3905 293.874 66.8106 293.874 59.0227ZM313.589 59.3824C313.589 43.9864 324.434 33.0115 337.778 33.0115C352.136 33.0115 362.003 44.6408 362.003 59.1126C361.995 60.6522 361.371 62.1257 360.269 63.2102C359.166 64.2946 357.675 64.9013 356.122 64.8973H328.244C329.7 69.4682 333.248 72.1857 339.058 72.1857C342.636 72.1762 346.18 71.4983 349.505 70.1875C350.479 69.8124 351.529 69.6771 352.567 69.7932C353.605 69.9093 354.599 70.2732 355.464 70.8539C356.329 71.4345 357.039 72.2145 357.532 73.1269C358.026 74.0393 358.289 75.0568 358.299 76.0921C358.296 77.401 357.885 78.677 357.12 79.7443C356.356 80.8116 355.276 81.6178 354.031 82.0517C349.224 83.7628 344.165 84.6759 339.058 84.7542C323.869 84.999 313.589 74.5985 313.589 59.3824ZM347.051 53.3229C346.575 51.2224 345.408 49.3381 343.734 47.9664C342.061 46.5947 339.974 45.8132 337.803 45.7448C333.772 45.7448 329.327 48.6772 328.279 53.3229H347.051ZM366.095 59.0227C366.095 43.8416 377.897 33.0464 392.451 33.0464C398.099 33.0038 403.615 34.7428 408.2 38.0119C409.037 38.599 409.72 39.3769 410.191 40.2801C410.662 41.1833 410.907 42.1855 410.906 43.2022C410.903 44.4177 410.557 45.6082 409.905 46.6381C409.254 47.668 408.324 48.4961 407.221 49.028C406.119 49.5599 404.888 49.7744 403.668 49.647C402.449 49.5196 401.29 49.0555 400.323 48.3075C398.063 46.5837 395.288 45.6572 392.436 45.6749C385.809 45.6749 380.437 51.2348 380.437 59.0377C380.437 66.8406 385.809 72.4055 392.436 72.4055C395.288 72.4232 398.063 71.4967 400.323 69.7729C401.48 68.9167 402.885 68.4541 404.329 68.4541C405.703 68.4398 407.046 68.8594 408.163 69.6521C409.281 70.4448 410.114 71.5694 410.544 72.8631C410.973 74.1568 410.976 75.5525 410.552 76.8479C410.128 78.1433 409.299 79.2713 408.185 80.0685C403.599 83.3221 398.09 85.0486 392.451 84.999C377.897 84.999 366.095 74.1888 366.095 59.0227ZM415.386 59.0227C415.386 43.8416 427.188 33.0464 441.742 33.0464C456.296 33.0464 468.104 43.8566 468.104 59.0227C468.104 74.1888 456.301 84.999 441.742 84.999C427.183 84.999 415.386 74.1888 415.386 59.0227ZM453.746 59.0227C453.746 51.2198 448.374 45.6599 441.742 45.6599C435.11 45.6599 429.743 51.1998 429.743 59.0227C429.743 66.8456 435.115 72.3905 441.742 72.3905C448.369 72.3905 453.746 66.8106 453.746 59.0227ZM522.112 40.4796V77.5058C522.1 79.2431 521.428 80.9121 520.23 82.1802C519.032 83.4484 517.396 84.2226 515.648 84.3486C513.9 84.4746 512.168 83.9432 510.798 82.8602C509.427 81.7772 508.519 80.2221 508.253 78.5049C504.781 82.5762 499.58 84.999 492.963 84.999C481.287 84.999 473.677 77.5058 473.677 64.5177V40.4796C473.677 38.6487 474.411 36.8927 475.717 35.598C477.023 34.3033 478.795 33.576 480.642 33.576C482.489 33.576 484.261 34.3033 485.567 35.598C486.873 36.8927 487.607 38.6487 487.607 40.4796V62.1598C487.607 68.4741 492.323 72.3705 497.786 72.3705C503.572 72.3705 508.183 67.8446 508.183 61.7402V40.4796C508.183 38.6487 508.916 36.8927 510.223 35.598C511.529 34.3033 513.3 33.576 515.147 33.576C516.994 33.576 518.766 34.3033 520.072 35.598C521.378 36.8927 522.112 38.6487 522.112 40.4796ZM565.295 39.8502C565.286 41.6728 564.547 43.4173 563.241 44.7004C561.935 45.9836 560.169 46.7006 558.33 46.694C548.095 46.694 543.116 51.005 543.116 64.3728V77.5058C543.087 79.3232 542.342 81.057 541.039 82.3362C539.736 83.6153 537.98 84.338 536.147 84.3495C535.236 84.3535 534.334 84.1796 533.491 83.8378C532.648 83.496 531.881 82.993 531.234 82.3575C530.588 81.722 530.074 80.9664 529.721 80.134C529.369 79.3015 529.186 78.4085 529.182 77.5058V40.4796C529.194 38.7424 529.866 37.0734 531.064 35.8052C532.262 34.5371 533.898 33.7629 535.646 33.6368C537.394 33.5108 539.126 34.0423 540.496 35.1253C541.867 36.2083 542.775 37.7633 543.041 39.4806C546.518 35.4043 551.714 32.9865 558.33 32.9865C559.243 32.9825 560.147 33.1571 560.991 33.5001C561.835 33.8432 562.603 34.348 563.25 34.9856C563.897 35.6232 564.41 36.3811 564.761 37.2159C565.112 38.0507 565.294 38.9459 565.295 39.8502ZM588.774 84.8941C582.369 84.939 576.452 83.5603 571.408 80.6679C570.115 79.9154 569.164 78.6992 568.751 77.271C568.338 75.8427 568.495 74.3117 569.189 72.9948C569.883 71.6779 571.061 70.6759 572.48 70.1961C573.898 69.7163 575.449 69.7955 576.81 70.4173C580.338 71.9958 584.571 73.3346 588.693 73.3796C592.815 73.4245 595.537 72.2706 595.617 69.8378C595.713 62.2747 568.742 66.4459 569.054 48.7671C569.226 39.0859 577.485 32.8067 589.913 33.0215C595.612 33.1164 600.314 34.575 604.945 36.798C606.157 37.3742 607.132 38.3451 607.708 39.5485C608.284 40.7519 608.425 42.1148 608.109 43.4093C607.793 44.7037 607.038 45.8513 605.97 46.6602C604.903 47.469 603.587 47.8901 602.244 47.8529C601.44 47.8435 600.647 47.6736 599.911 47.3534C595.849 45.535 591.898 44.5359 589.167 44.5859C585.528 44.6309 583.119 46.3793 583.119 48.5822C582.883 55.9455 609.965 51.5795 609.647 69.4582C609.481 78.7147 602.088 84.7991 588.794 84.8891L588.774 84.8941ZM614.586 59.3824C614.586 43.9864 625.426 33.0115 638.775 33.0115C653.128 33.0115 663 44.6408 663 59.1126C662.992 60.6539 662.367 62.129 661.262 63.2137C660.158 64.2984 658.664 64.904 657.109 64.8973H629.261C630.722 69.4682 634.27 72.1857 640.08 72.1857C643.657 72.1762 647.199 71.4982 650.522 70.1875C651.496 69.8126 652.547 69.6775 653.585 69.7936C654.623 69.9097 655.618 70.2736 656.483 70.8541C657.348 71.4347 658.058 72.2145 658.552 73.1268C659.047 74.0391 659.311 75.0566 659.321 76.0921C659.318 77.4016 658.906 78.6781 658.14 79.7454C657.375 80.8128 656.294 81.6186 655.048 82.0517C650.243 83.7627 645.186 84.6758 640.08 84.7542C624.871 84.999 614.586 74.5985 614.586 59.3824ZM648.043 53.3229C647.568 51.2228 646.402 49.3387 644.729 47.9669C643.056 46.5951 640.971 45.8134 638.8 45.7448C634.769 45.7448 630.324 48.6772 629.271 53.3229H648.043Z" />
                </svg>
            </a>

            <a
                class="flex items-center justify-center text-rose-50"
                href="https://ploi.io"
                target="_blank"
                title="Ploi"
            >
                <svg class="w-auto h-6 fill-current" viewBox="0 0 253 93.3">
                    <path d="M25.7 66a11.4 11.4 0 01-9.5-4.7q-3.6-4.7-3.7-12.6T16.2 36a11.4 11.4 0 019.5-4.7 11.4 11.4 0 019.6 4.7Q39 40.7 39 48.7t-3.6 12.6a11.5 11.5 0 01-9.6 4.7zm3.8-45.1a18.9 18.9 0 00-10.2 2.7 18 18 0 00-6.7 7.5h-.3v-9.3H0v71.5h12.6V66.5h.3a17 17 0 006.6 7.2 19.4 19.4 0 0010.2 2.6q10.2 0 16.1-7.4t6-20.3q0-12.9-6-20.4T29.5 21zM59.2 75.5h12.6V2.5H59.2v73.1zM105.3 66.6a11.5 11.5 0 01-9.6-4.7Q92 57.2 92 48.7t3.6-13.3a12.1 12.1 0 0119.2 0q3.6 4.7 3.6 13.3t-3.6 13.2a11.5 11.5 0 01-9.6 4.7zm0 10q11.8 0 19-7.4t7-20.6q0-13-7.1-20.4t-19-7.5q-11.7 0-18.8 7.5t-7.1 20.4q0 13.2 7 20.6t19 7.4zM145 13.7a6.7 6.7 0 004.9-2 6.6 6.6 0 002-4.8 6.6 6.6 0 00-2-4.9 6.8 6.8 0 00-5-2 6.7 6.7 0 00-4.8 2 6.5 6.5 0 00-2 4.9 6.5 6.5 0 002 4.8 6.6 6.6 0 004.8 2zm-6.3 61.9h12.6V21.8h-12.7v53.8zM168.8 76a5.7 5.7 0 10-4.1-1.6 5.6 5.6 0 004 1.7zM191.5 13.4a5.3 5.3 0 004-1.6A5.3 5.3 0 00197 8a5.5 5.5 0 10-11 0 5.3 5.3 0 001.5 4 5.3 5.3 0 004 1.5zm-4.4 62.1h8.8V22.8H187v52.8zM228.6 68.7a13.8 13.8 0 01-11.2-5q-4.3-5.2-4.3-14.5t4.3-14.4a14.9 14.9 0 0122.4 0q4.2 5 4.2 14.4t-4.2 14.4a13.8 13.8 0 01-11.2 5.1zm0 7.8q10.9 0 17.6-7.4t6.8-20q0-12.5-6.8-19.9T228.7 22q-11 0-17.7 7.3t-6.7 20q0 12.6 6.7 20t17.7 7.3z"></path>
                </svg>
            </a>

            <a
                class="flex items-center justify-center text-rose-50"
                href="https://ego-trace.com"
                target="_blank"
                title="EgoTrace"
            >
                <svg class="w-auto h-12 -my-10 fill-current" viewBox="0 0 226.77165 70.86614"><g><g><polygon class="d" points="0 .00006 0 15.11804 7.5591 15.11804 7.5591 7.5591 15.1181 7.5591 15.1181 .00006 0 .00006"/><rect class="c" x="15.11809" y="15.11807" width="7.55904" height="7.55898"/><polygon class="d" points="22.67711 30.23603 22.67711 37.79497 15.1181 37.79497 15.1181 45.35392 30.23611 45.35392 30.23611 30.23603 22.67711 30.23603"/><polygon class="d" points="22.67711 .00006 22.67711 7.5591 37.79521 7.5591 37.79521 15.11804 45.35422 15.11804 45.35422 .00006 22.67711 .00006"/></g><g><g><polygon class="b" points="222.16536 13.46464 220.03936 13.46464 220.03936 15.94493 217.55907 15.94493 217.55907 18.07093 220.03936 18.07093 220.03936 20.55135 222.16536 20.55135 222.16536 18.07093 224.64565 18.07093 224.64565 15.94493 222.16536 15.94493 222.16536 13.46464"/><path class="c" d="M215.43307,11.33864v11.33858h11.33858V11.33864h-11.33858Zm9.21258,6.73229h-2.48029v2.48042h-2.126v-2.48042h-2.48029v-2.126h2.48029v-2.48029h2.126v2.48029h2.48029v2.126Z"/></g><g><path class="d" d="M74.36145,36.05141v-.0514c0-5.14282,4.0058-9.35488,9.48378-9.35488,3.25624,0,5.21997,.87835,7.10634,2.48083l-2.50668,3.02331c-1.39532-1.16281-2.63593-1.83455-4.72891-1.83455-2.89394,0-5.19402,2.55818-5.19402,5.63339v.0519c0,3.30777,2.27413,5.7367,5.47847,5.7367,1.44722,0,2.73924-.36182,3.7468-1.08546v-2.58413h-4.0053v-3.43703h7.8559v7.85621c-1.86092,1.57603-4.41901,2.8681-7.72665,2.8681-5.63317,0-9.50973-3.95356-9.50973-9.30298Z"/><path class="d" d="M95.93,36.05141v-.0514c0-5.14282,4.0572-9.35488,9.63898-9.35488s9.58708,4.16067,9.58708,9.30298v.0519c0,5.14232-4.0572,9.35439-9.63898,9.35439-5.58127,0-9.58708-4.16017-9.58708-9.30298Zm15.06555,0v-.0514c0-3.10116-2.27413-5.68529-5.47847-5.68529s-5.42657,2.53223-5.42657,5.63339v.0519c0,3.10066,2.27413,5.6848,5.47847,5.6848s5.42657-2.53223,5.42657-5.63339Z"/><path class="d" d="M123.59185,30.62462h-5.50392v-3.66959h14.9877v3.66959h-5.50392v14.41985h-3.97985v-14.41985Z"/><path class="d" d="M137.12384,26.95503h8.26911c2.29958,0,4.08315,.64628,5.27187,1.83504,1.00706,1.0076,1.55002,2.42893,1.55002,4.13471v.0514c0,2.92-1.57597,4.75505-3.87655,5.60794l4.41951,6.46034h-4.65206l-3.87555-5.7886h-3.12699v5.7886h-3.97935V26.95503Zm8.01061,8.78646c1.93828,0,3.04914-1.03355,3.04914-2.55868v-.0514c0-1.70579-1.18872-2.58413-3.12699-2.58413h-3.9534v5.19422h4.03125Z"/><path class="d" d="M163.80158,26.82578h3.66895l7.7521,18.21869h-4.16001l-1.65382-4.05736h-7.6493l-1.65382,4.05736h-4.0572l7.7531-18.21869Zm4.18596,10.64695l-2.40338-5.86595-2.40338,5.86595h4.80676Z"/><path class="d" d="M177.35354,36.05141v-.0514c0-5.14282,3.87655-9.35488,9.43188-9.35488,3.41144,0,5.45252,1.13686,7.13229,2.79075l-2.53213,2.92c-1.39532-1.26612-2.81659-2.04116-4.62611-2.04116-3.04914,0-5.24492,2.53223-5.24492,5.63339v.0519c0,3.10066,2.14488,5.6848,5.24492,5.6848,2.06803,0,3.33359-.82694,4.75486-2.11901l2.53313,2.55868c-1.86142,1.98975-3.92845,3.22992-7.41675,3.22992-5.32377,0-9.27717-4.10876-9.27717-9.30298Z"/><polygon class="d" points="60.6463 41.50416 60.6463 37.70529 68.45534 37.70529 68.45534 34.16501 60.6463 34.16501 60.6463 30.49536 70.33669 30.49536 70.33669 26.95495 60.57191 26.95495 56.69291 29.19466 56.69291 45.04445 66.58692 45.04445 70.46592 42.80474 70.46592 41.50416 60.6463 41.50416"/><polygon class="d" points="202.77881 41.50416 202.77881 37.70529 210.58785 37.70529 210.58785 34.16501 202.77881 34.16501 202.77881 30.49536 212.4692 30.49536 212.4692 26.95495 202.70442 26.95495 198.82542 29.19466 198.82542 45.04445 208.71943 45.04445 212.59843 42.80474 212.59843 41.50416 202.77881 41.50416"/></g></g></g><g><path class="d" d="M60.21693,60.05811h.73926l3.18848,7.0459h-.84961l-.81934-1.84912h-3.80762l-.83008,1.84912h-.80957l3.18848-7.0459Zm1.94922,4.47754l-1.58887-3.55811-1.59961,3.55811h3.18848Z"/><path class="d" d="M64.80872,63.62598v-.02002c0-1.979,1.47949-3.61816,3.53809-3.61816,1.26953,0,2.0293,.44971,2.72852,1.10938l-.54004,.57959c-.58887-.55957-1.24902-.95947-2.19824-.95947-1.54883,0-2.70898,1.25977-2.70898,2.86865v.02002c0,1.61914,1.16992,2.88818,2.70898,2.88818,.95898,0,1.58887-.36963,2.25879-1.00928l.51953,.50977c-.72949,.73975-1.5293,1.22949-2.79883,1.22949-2.01855,0-3.50781-1.58936-3.50781-3.59814Z"/><path class="d" d="M74.34779,60.8374h-2.34863v-.72949h5.49707v.72949h-2.34863v6.2666h-.7998v-6.2666Z"/><path class="d" d="M79.04896,60.10791h.78906v6.99609h-.78906v-6.99609Z"/><path class="d" d="M81.28822,60.10791h.87988l2.48828,6.02686,2.49902-6.02686h.84961l-3.00879,7.0459h-.69922l-3.00879-7.0459Z"/><path class="d" d="M90.97669,60.05811h.73926l3.18848,7.0459h-.84961l-.81934-1.84912h-3.80762l-.83008,1.84912h-.80957l3.18848-7.0459Zm1.94922,4.47754l-1.58887-3.55811-1.59961,3.55811h3.18848Z"/><path class="d" d="M97.23744,60.8374h-2.34863v-.72949h5.49707v.72949h-2.34863v6.2666h-.7998v-6.2666Z"/><path class="d" d="M101.86829,60.10791h5.05762v.71973h-4.26855v2.38867h3.81836v.71924h-3.81836v2.44873h4.31836v.71973h-5.10742v-6.99609Z"/><path class="d" d="M111.25892,63.62598v-.02002c0-1.979,1.47852-3.61816,3.53809-3.61816,1.26855,0,2.02832,.44971,2.72852,1.10938l-.54004,.57959c-.58984-.55957-1.24902-.95947-2.19922-.95947-1.54883,0-2.70801,1.25977-2.70801,2.86865v.02002c0,1.61914,1.16895,2.88818,2.70801,2.88818,.95996,0,1.58984-.36963,2.25879-1.00928l.52051,.50977c-.73047,.73975-1.5293,1.22949-2.79883,1.22949-2.01855,0-3.50781-1.58936-3.50781-3.59814Z"/><path class="d" d="M118.43861,63.62598v-.02002c0-1.9292,1.44922-3.61816,3.57812-3.61816s3.55762,1.66943,3.55762,3.59814v.02002c0,1.92871-1.44922,3.61816-3.57812,3.61816s-3.55762-1.66943-3.55762-3.59814Zm6.31641,0v-.02002c0-1.58936-1.15918-2.88867-2.75879-2.88867-1.59863,0-2.73828,1.2793-2.73828,2.86865v.02002c0,1.58887,1.15918,2.88818,2.75879,2.88818,1.59863,0,2.73828-1.2793,2.73828-2.86816Z"/><path class="d" d="M127.24818,60.10791h.73926l4.4082,5.60693v-5.60693h.76953v6.99609h-.62988l-4.51758-5.73682v5.73682h-.76953v-6.99609Z"/><path class="d" d="M134.68861,66.08447l.48926-.57959c.72949,.65967,1.42969,.98926,2.39844,.98926,.93945,0,1.55957-.49951,1.55957-1.18896v-.02002c0-.6499-.34961-1.01953-1.81934-1.32959-1.6084-.34961-2.34863-.86914-2.34863-2.01855v-.02002c0-1.09961,.96973-1.90918,2.29883-1.90918,1.01953,0,1.74902,.29004,2.45898,.85938l-.45996,.60986c-.64941-.52979-1.29883-.75977-2.01855-.75977-.91016,0-1.48926,.5-1.48926,1.12939v.02002c0,.65967,.35938,1.02979,1.89844,1.35938,1.55957,.33984,2.2793,.90967,2.2793,1.979v.02002c0,1.19922-1,1.979-2.38867,1.979-1.10938,0-2.01953-.37012-2.8584-1.11963Z"/><path class="d" d="M141.43763,64.17578v-4.06787h.79004v4.01758c0,1.50928,.80957,2.35889,2.13867,2.35889,1.28906,0,2.1084-.77979,2.1084-2.30859v-4.06787h.79004v4.00781c0,2.03857-1.16895,3.09814-2.91797,3.09814-1.72949,0-2.90918-1.05957-2.90918-3.03809Z"/><path class="d" d="M149.13783,60.10791h.7998l2.54785,3.81787,2.54883-3.81787h.7998v6.99609h-.79004v-5.66699l-2.54785,3.74805h-.04004l-2.54883-3.73779v5.65674h-.76953v-6.99609Z"/><path class="d" d="M157.81751,60.10791h5.05762v.71973h-4.26758v2.38867h3.81738v.71924h-3.81738v2.44873h4.31738v.71973h-5.10742v-6.99609Z"/><path class="d" d="M164.51771,60.10791h3.00879c.85938,0,1.54883,.25977,1.98926,.69971,.33984,.33984,.53906,.82959,.53906,1.37891v.02002c0,1.15967-.79883,1.83936-1.89844,2.03906l2.14844,2.8584h-.96973l-2.02832-2.71826h-1.99902v2.71826h-.79004v-6.99609Zm2.93848,3.56787c1.0498,0,1.7998-.53955,1.7998-1.43896v-.02002c0-.85986-.66016-1.37939-1.78906-1.37939h-2.15918v2.83838h2.14844Z"/><path class="d" d="M176.59681,60.8374h-2.34863v-.72949h5.49707v.72949h-2.34863v6.2666h-.7998v-6.2666Z"/><path class="d" d="M181.22767,60.10791h3.00879c.85938,0,1.54883,.25977,1.98926,.69971,.33984,.33984,.53906,.82959,.53906,1.37891v.02002c0,1.15967-.79883,1.83936-1.89844,2.03906l2.14844,2.8584h-.96973l-2.02832-2.71826h-1.99902v2.71826h-.79004v-6.99609Zm2.93848,3.56787c1.0498,0,1.7998-.53955,1.7998-1.43896v-.02002c0-.85986-.66016-1.37939-1.78906-1.37939h-2.15918v2.83838h2.14844Z"/><path class="d" d="M188.34779,64.17578v-4.06787h.79004v4.01758c0,1.50928,.80957,2.35889,2.13867,2.35889,1.28906,0,2.1084-.77979,2.1084-2.30859v-4.06787h.79004v4.00781c0,2.03857-1.16895,3.09814-2.91797,3.09814-1.72949,0-2.90918-1.05957-2.90918-3.03809Z"/><path class="d" d="M195.58802,66.08447l.49023-.57959c.72949,.65967,1.42871,.98926,2.39844,.98926,.93945,0,1.55859-.49951,1.55859-1.18896v-.02002c0-.6499-.34961-1.01953-1.81836-1.32959-1.60938-.34961-2.34863-.86914-2.34863-2.01855v-.02002c0-1.09961,.96875-1.90918,2.29883-1.90918,1.01953,0,1.74902,.29004,2.45801,.85938l-.45898,.60986c-.65039-.52979-1.2998-.75977-2.01953-.75977-.90918,0-1.48926,.5-1.48926,1.12939v.02002c0,.65967,.36035,1.02979,1.89941,1.35938,1.55859,.33984,2.27832,.90967,2.27832,1.979v.02002c0,1.19922-.99902,1.979-2.38867,1.979-1.10938,0-2.01855-.37012-2.8584-1.11963Z"/><path class="d" d="M204.14662,60.8374h-2.34863v-.72949h5.49707v.72949h-2.34863v6.2666h-.7998v-6.2666Z"/></g></svg>
            </a>

            <a
                class="flex items-center justify-center text-rose-50"
                href="https://flareapp.io"
                target="_blank"
                title="Flare"
            >
                <svg class="w-auto h-20 fill-current -my-2 lg:-my-12" viewBox="0 0 2599.5 1482.4">
                    <polygon points="641.4,740.9 427.6,617.5 427.6,370.6 642.7,494.5 	"/>
                    <polygon points="641.4,1235.2 427.6,1111.8 427.6,864.9 640.9,988.3 	"/>
                    <path d="M641.4,287.6l357.8,206.3l-144.2,83L497.6,370.6L641.4,287.6 M641.4,247.2L427.6,370.6L855,617.3l214.3-123.4L641.4,247.2z"/>
                    <path d="M641.4,781.9l143.7,83L640.9,948l-143.4-83L641.4,781.9 M641.4,741.5L427.6,864.9l213.3,123.4l214.3-123.4L641.4,741.5z"/>
                    <path d="M1172.8,551.7h200.9v47.6h-144.1v85.1h130.3V732h-130.3v133.2h-56.8V551.7z"/>
                    <path d="M1478.2,865.2h-55.4V551.7h55.4V865.2z"/>
                    <path d="M1524.2,799.2c0-53,43.6-66.6,89.3-71.5c41.5-4.4,58.2-5.2,58.2-21.1v-0.9c0-23.1-14.1-36.3-39.8-36.3c-27.1,0-42.7,13.8-48.2,29.9l-51.7-7.3c12.2-42.9,50.2-64.9,99.7-64.9c44.9,0,95.5,18.7,95.5,80.8v157.4h-53.3v-32.3h-1.8c-10.1,19.7-32.1,37-69,37C1558,869.9,1524.2,845.5,1524.2,799.2z M1671.7,780.8v-27.7c-7.2,5.8-36.3,9.5-50.8,11.5c-24.8,3.5-43.3,12.4-43.3,33.7c0,20.4,16.5,30.9,39.7,30.9C1650.6,829.2,1671.7,807,1671.7,780.8z"/>
                    <path d="M1782.9,630.1h53.7v39.2h2.4c8.6-27.2,31.1-42.6,58-42.6c6.1,0,14.8,0.6,19.9,1.5v51c-4.7-1.5-16.4-3.2-25.7-3.2c-30.5,0-53,21.1-53,51v138.2h-55.4V630.1z"/>
                    <path d="M1934,749c0-72.6,43.9-122,111.3-122c57.9,0,107.5,36.3,107.5,118.8v17h-163.8c0.5,40.3,24.2,63.8,60,63.8c23.9,0,42.3-10.4,49.8-30.3l51.7,5.8c-9.8,40.9-47.5,67.7-102.3,67.7C1977.3,869.8,1934,822.8,1934,749z M2099.6,725.4c-0.3-32-21.7-55.3-53.6-55.3c-33.1,0-55.3,25.3-56.9,55.3H2099.6z"/>
                </svg>
            </a>

            <a
                class="flex items-center justify-center text-rose-50"
                href="https://ohdear.app"
                target="_blank"
                title="Oh Dear"
            >
                <svg class="w-auto h-5 fill-current" viewBox="0 0 1749 336">
                    <path d="M1196.57759,88 C1230.7236,88 1261.93222,101.114497 1284.45224,124.914881 C1306.52547,148.258686 1318.0469,179.64605 1316.92518,213.306593 L1316.92518,213.306593 L1316.25975,233.221199 L1128.36161,233.221199 C1136.85058,265.240002 1163.75293,286.33977 1196.96734,286.33977 C1222.57685,286.33977 1244.61206,276.314466 1257.44533,258.847898 L1257.44533,258.847898 L1269.54663,242.352775 L1308.03695,271.845822 L1296.07824,288.331231 C1274.08105,318.630577 1237.80567,336 1196.57759,336 C1129.52136,336 1077,281.628266 1077,212.199146 C1077,142.556309 1129.52136,88 1196.57759,88 Z M336.891224,96 C405.322396,96 461,149.834327 461,216 C461,282.165673 405.322396,336 336.891224,336 C277.114954,336 227.074234,294.920615 215.372104,240.427361 L215.372104,240.427361 L45,240.427361 L45,191.902102 L215.29422,191.902102 C226.869787,137.248823 276.988392,96 336.891224,96 Z M534.822964,0 L534.822964,104.667369 C551.050462,94.2889591 570.825008,88.8453343 592.590539,88.8453343 C638.914781,88.8453343 693,119.951762 693,207.625805 L693,207.625805 L693,328 L643.177036,328 L643.177036,207.625805 C643.177036,179.994848 636.421216,160.207704 623.093211,148.802014 C612.597045,139.815712 600.283862,137.933966 591.798011,137.933966 C565.808884,137.933966 534.822964,150.021309 534.822964,207.625805 L534.822964,207.625805 L534.822964,328 L485,328 L485,0 L534.822964,0 Z M1053,0 L1053,326.0341 L1003.25897,326.0341 L1003.25897,304.48554 C982.847193,319.716497 958.044234,328 932.401641,328 C865.452952,328 813,275.445563 813,208.356823 C813,141.048589 865.452952,88.312831 932.401641,88.312831 C958.333762,88.312831 983.107769,96.4436427 1003.25897,111.369217 L1003.25897,111.369217 L1003.25897,0 L1053,0 Z M1460.00595,88 C1485.95737,88 1510.8858,96.1509795 1531.25897,111.124701 L1531.25897,111.124701 L1531.25897,89.978022 L1581,89.978022 L1581,326.031534 L1531.25897,326.031534 L1531.25897,304.884854 C1510.8858,319.858576 1485.95737,328 1460.00595,328 C1393.26958,328 1341,275.376971 1341,208.200669 C1341,140.804587 1393.26958,88 1460.00595,88 Z M1749,88 L1749,138.054197 L1727.77131,137.659159 C1710.66278,137.427918 1694.98651,142.987354 1684.81361,152.776587 C1676.14163,161.130194 1671.56039,172.229796 1671.56039,184.899916 L1671.56039,184.899916 L1671.56039,328 L1621,328 L1621,89.9848248 L1671.56039,89.9848248 L1671.56039,101.932314 C1688.05089,92.7886306 1707.42551,88 1728.17351,88 L1728.17351,88 L1749,88 Z M336.891224,145.099467 C296.449754,145.099467 263.56307,176.906809 263.56307,216 C263.56307,255.093191 296.449754,286.900533 336.891224,286.900533 C377.322958,286.900533 410.209642,255.093191 410.209642,216 C410.209642,176.906809 377.322958,145.099467 336.891224,145.099467 Z M933.193019,137.107245 C893.691652,137.107245 862.741033,168.399418 862.741033,208.356823 C862.741033,248.085191 893.691652,279.205586 933.193019,279.205586 C972.491716,279.205586 1003.25897,248.085191 1003.25897,208.356823 C1003.25897,168.399418 972.491716,137.107245 933.193019,137.107245 Z M1460.79733,136.858098 C1421.51793,136.858098 1390.74103,168.191113 1390.74103,208.200669 C1390.74103,247.980889 1421.51793,279.141902 1460.79733,279.141902 C1500.30835,279.141902 1531.25897,247.980889 1531.25897,208.200669 C1531.25897,168.191113 1500.30835,136.858098 1460.79733,136.858098 Z M1196.57759,137.271652 C1166.64279,137.271652 1140.81464,155.94281 1130.50049,184.357554 L1130.50049,184.357554 L1264.32777,184.357554 C1254.46041,155.94281 1227.98584,137.271652 1196.57759,137.271652 Z"></path>
                </svg>
            </a>
        </x-slot>
    </x-sponsor-banner>

    <section class="relative max-w-7xl mx-auto px-8 py-16">
        <div class="space-y-16">
            <h2 class="font-heading text-4xl text-center">
                Here's what users say
            </h2>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <x-testimonial url="https://twitter.com/shocm/status/1487841457088045059">
                    Filament has become <strong>one of my required packages</strong> for all my new projects. I talk about it almost as much as I talk about Livewire and <strong>that is a lot</strong>. Thanks for the <strong>great work</strong>.

                    <x-slot name="author" avatar="https://avatars.githubusercontent.com/u/89408?v=4">
                        Eric Van Johnson
                    </x-slot>
                </x-testimonial>

                <x-testimonial url="https://twitter.com/ChrisHardie/status/1507793007470428167">
                    I’ve built a few Laravel admin tools/sites now with Filament and just have to remark on how <strong>well designed</strong> it is, and how quickly one can create <strong>powerful, friendly</strong> application interfaces with it. <strong>Impressive stuff.</strong>

                    <x-slot name="author" avatar="https://avatars.githubusercontent.com/u/311772?v=4">
                        Chris Hardie
                    </x-slot>
                </x-testimonial>

                <x-testimonial url="https://twitter.com/mrchrxs/status/1491159440250540033">
                    6 months ago, Sam recommended Filament. I was put off because I use Vue not Livewire. Just spent 30 minutes with it, and <strong>WOW</strong>. Definitely pitching this at work!

                    <x-slot name="author" avatar="https://avatars.githubusercontent.com/u/10789117?v=4">
                        Chris
                    </x-slot>
                </x-testimonial>

                <x-testimonial url="https://twitter.com/iksaku2">
                    Filament is the <strong>Swiss Army Knife dashboard for TALL stack apps</strong>. Just sit down, install and you'll have a full CMS in two shakes.

                    <x-slot name="author" avatar="https://avatars.githubusercontent.com/u/4632429?v=4">
                        Jorge González
                    </x-slot>
                </x-testimonial>

                <x-testimonial url="https://twitter.com/DaronSpence/status/1507602035641929729">
                    Big shoutout to Filament for making a <strong>really slick</strong> admin panel kit. <strong>Loving the markdown editor</strong> w/ builtin file uploads!

                    <x-slot name="author" avatar="https://avatars.githubusercontent.com/u/4062087?v=4">
                        Daron Spence
                    </x-slot>
                </x-testimonial>

                <x-testimonial url="https://twitter.com/jacques_van_wyk/status/1507401233937711104">
                    I must say this Filament is <strong>amazing</strong> and such <strong>a pleasure to work with</strong>. Dan, you and team have done great job.

                    <x-slot name="author" avatar="https://avatars.githubusercontent.com/u/12008702?v=4">
                        Jacques van Wyk
                    </x-slot>
                </x-testimonial>

                <x-testimonial url="https://twitter.com/heyjordn/status/1494428799584329730">
                    <strong>Loving the performance</strong> of Filament's datatable, our team at Orba added an Excel export, <strong>so smooth</strong> 🔥

                    <x-slot name="author" avatar="https://avatars.githubusercontent.com/u/4820517?v=4">
                        Jordan Jones
                    </x-slot>
                </x-testimonial>

                <x-testimonial url="https://twitter.com/ralphjsmit/status/1502305847749357572">
                    Filament is a <strong>GREAT</strong> tool for building admin panels in Laravel. It has a great plugin support and an <strong>active community</strong>. 🚀

                    <x-slot name="author" avatar="https://avatars.githubusercontent.com/u/59207045?v=4">
                        Ralph J. Smit
                    </x-slot>
                </x-testimonial>

                <x-testimonial url="https://twitter.com/larsklopstra">
                    Filament is a <strong>great CMS solution</strong> for both technical and non-technical users, and the fluent API is a <strong>developer's dream!</strong>

                    <x-slot name="author" avatar="https://avatars.githubusercontent.com/u/25669876?v=4">
                        Lars Klopstra
                    </x-slot>
                </x-testimonial>

                <x-testimonial url="https://twitter.com/jimmyaldape/status/1504641233871728640">
                    Filament is a <strong>joy to work with</strong>. Just about covers most use cases for an admin panel in Laravel. <strong>Great job.</strong>

                    <x-slot name="author" avatar="https://avatars.githubusercontent.com/u/59585840?v=4">
                        Jimmy Aldape
                    </x-slot>
                </x-testimonial>

                <x-testimonial url="https://twitter.com/mattmngdev/status/1495358748445057025">
                    The <strong>highlight of the weekend</strong>: managed to start a new project using Filament and <strong>I love it</strong>.

                    <x-slot name="author" avatar="https://avatars.githubusercontent.com/u/373999?v=4">
                        Matteo Mangoni
                    </x-slot>
                </x-testimonial>

                <x-testimonial url="https://twitter.com/romaldyminaya/status/1492553584587776004">
                    Filament is a <strong>very fun framework</strong> to play with so far. The support is <strong>very accurate and fast</strong>. 😍

                    <x-slot name="author" avatar="https://avatars.githubusercontent.com/u/2809147?v=4">
                        Romaldy Minaya
                    </x-slot>
                </x-testimonial>

                <x-testimonial url="https://twitter.com/nkornel/status/1547530825117360129">
                    We chose Filament and <strong>clients love it</strong>. It is <strong>consistent</strong> and <strong>clean</strong> so the <strong>learning curve is better</strong>.

                    <x-slot name="author" avatar="https://avatars.githubusercontent.com/u/1298094?v=4">
                        nKornel
                    </x-slot>
                </x-testimonial>

                <x-testimonial url="https://twitter.com/luilliarcec/status/1485764353802608643">
                    Today I tried Filament, and <strong>oh my God, that's fantastic! Amazing! Great job.</strong>

                    <x-slot name="author" avatar="https://avatars.githubusercontent.com/u/27895611?v=4">
                        Luis Andrés Arce C.
                    </x-slot>
                </x-testimonial>

                <x-testimonial url="https://twitter.com/nickciolpan/status/1483564450208747520">
                    Filament's admin is, by far, <strong>my favorite Laravel tool</strong> at the moment. Found my gateway drug into Livewire

                    <x-slot name="author" avatar="https://avatars.githubusercontent.com/u/8835763?v=4">
                        Nick Ciolpan
                    </x-slot>
                </x-testimonial>
            </div>

            <div>
                <h3 class="text-xl text-center font-medium transition hover:scale-105">
                    <a href="{{ route('docs') }}" class="link-underline">
                        Well. What are you waiting for? &rarr;
                    </a>
                </h3>
            </div>
        </div>
    </section>
</x-layouts.app>
