<x-layout>
    {{-- <x-slot:title>{{ $title }}</x-slot:title> --}}

    <div class="relative isolate px-6 pt-14 lg:px-8">

        <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
            <div class="hidden sm:mb-8 sm:flex sm:justify-center">
                <div
                    class="relative rounded-full px-3 py-1 text-sm leading-6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
                    Feel free to asking any questions in <a href="/contact" class="font-semibold text-indigo-600"><span
                            class="absolute inset-0" aria-hidden="true"></span>Contact <span
                            aria-hidden="true">&rarr;</span></a>
                </div>
            </div>
            <div class="text-center">
                <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Welcome to this homepage!</h1>
                <p class="mt-6 text-lg leading-8 text-gray-600">Anim aute id magna aliqua ad ad non deserunt sunt. Qui
                    irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua.</p>
                <div class="mt-10 flex items-center justify-center gap-x-6">
                    <a href="/about"
                        class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">About
                        me</a>
                    <a href="/posts" class="text-sm font-semibold leading-6 text-gray-900">See posts <span
                            aria-hidden="true">→</span></a>
                </div>
            </div>
        </div>
    </div>
</x-layout>
