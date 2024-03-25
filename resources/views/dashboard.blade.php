<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
       
    </x-slot>

    <div class="py-12">
       
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-50">
                    <div class="mt-4">
                        <a href="{{Route('education.index')}}" class="btn btn-primary">Éducation</a>
                    </div>
                </div>
            </div>
        </div><br>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-50">
                    <div class="mt-4">
                        <a href="{{Route('experience.index')}}" class="btn btn-primary">Expérience</a>
                    </div>
                </div>
            </div>
        </div><br>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-50">
                    <div class="mt-4">
                        <a href="{{Route('portfolios.index')}}" class="btn btn-primary">Portfolio</a>
                    </div>
                </div>
            </div>
        </div><br>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-50">
                    <div class="mt-4">
                        <a href="#" class="btn btn-primary">Clients</a>
                    </div>
                </div>
            </div>
        </div><br>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-50">
                    <div class="mt-4">
                        <a href="#" class="btn btn-primary">Newsletter</a>
                    </div>
                </div>
            </div>
        </div><br>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-50">
                    <div class="mt-4">
                        <a href="#" class="btn btn-primary">Blog</a>
                    </div>
                </div>
            </div>
        </div><br>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-50">
                    <div class="mt-4">
                        <a href="#" class="btn btn-primary">Contact</a>
                    </div>
                </div>
            </div>
        </div><br>

    </div>
</x-app-layout>
