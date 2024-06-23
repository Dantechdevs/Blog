<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot name="nav">
    <div>
        <x-responsive-nav-link href="{{ route('Categories.index') }}" :active="request()->routeIs('Categories.create')">
            {{ __('index') }}
        </x-responsive-nav-link>

        <x-responsive-nav-link href="{{ route('Categories.create') }}" :active="request()->routeIs('Categories.create')">
            {{ __('create') }}
        </x-responsive-nav-link>
    </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
            </div>
        </div>
    </div>
</x-app-layout>
