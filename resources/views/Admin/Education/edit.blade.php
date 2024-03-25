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
                        <h1 class="text-2xl font-semibold mb-8">Modifier une éducation</h1>
                        <form action="{{ route('education.update', $education->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-4">
                                <label for="diplome" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Diplôme</label>
                                <input type="text" name="diplome" id="diplome" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-300 rounded-md" value="{{ $education->diplome }}">
                            </div>
                            <div class="mb-4">
                                <label for="universite" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Université</label>
                                <input type="text" name="universite" id="universite" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-300 rounded-md" value="{{ $education->universite }}">
                            </div>
                            <div class="mb-4">
                                <label for="annee_obtention" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Année d'obtention</label>
                                <input type="text" name="annee_obtention" id="annee_obtention" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-300 rounded-md" value="{{ $education->annee_obtention }}">
                            </div>
                            <button type="submit" class="inline-flex items-center px-4 py-2 shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                Modifier
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </x-app-layout>
    </div>
@endsection
