@extends('layouts._hamid')

@section('content')
    <div class="min-h-screen bg-gray-100">
        <x-app-layout>
            <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    {{ __('Dashboard') }}
                </h2>
            </x-slot>

            <div class="container mx-auto py-12">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="p-6 sm:px-10 bg-white dark:bg-gray-800">
                        <h1 class="text-2xl font-semibold mb-8">Ajouter une expérience</h1>
                        <form action="{{ route('experience.store') }}" method="POST">
                            @csrf
                            <div class="mb-4">
                                <label for="poste" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Poste</label>
                                <input type="text" name="poste" id="poste" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-300 rounded-md">
                            </div>
                            <div class="mb-4">
                                <label for="entreprise" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Entreprise</label>
                                <input type="text" name="entreprise" id="entreprise" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-300 rounded-md">
                            </div>
                            <div class="mb-4">
                                <label for="description" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Description</label>
                                <textarea name="description" id="description" rows="4" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-300 rounded-md"></textarea>
                            </div>
                            <div class="mb-4">
                                <label for="annee_debut" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Année de début</label>
                                <input type="text" name="annee_debut" id="annee_debut" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-300 rounded-md">
                            </div>
                            <div class="mb-4">
                                <label for="annee_fin" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Année de fin</label>
                                <input type="text" name="annee_fin" id="annee_fin" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-300 rounded-md">
                            </div>
                            <button type="submit" class="inline-flex items-center px-4 py-2 shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                Ajouter
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </x-app-layout>
    </div>
@endsection
