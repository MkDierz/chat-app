<x-app-layout>
    {{-- {{ dd(get_defined_vars()['__data']) }} --}}
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Chat') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8 ">
            <div class="bg-white rounded-full shadow-xl">
                <div class="grid grid-cols-4 ">
                    <div class="grid col-span-1 bg-green-500 ">
                        @foreach ($users as $user)
                            <div class="flex p-3">
                                <img class="object-cover w-12 h-12 bg-white rounded-full "
                                    src="{{ $user->profile_photo_url }}" alt="{{ $user->name }}" />
                                <span class="p-3 rounded-md focus:bg-gray-300">
                                    {{ $user->name }}
                                </span>
                            </div>
                        @endforeach
                    </div>
                    <div class="min-h-screen col-span-3 bg-red-500">
                        a
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
