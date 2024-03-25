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
                        <h1 class="text-2xl font-semibold mb-8">Modifier un portfolio</h1>
                        <form action="{{ route('portfolios.update', $portfolio->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-4">
                                <label for="titre" class="block text-gray-700 dark:text-gray-400 text-sm font-medium mb-2">Titre</label>
                                <input type="text" name="titre" id="titre" value="{{ $portfolio->titre }}" class="form-input rounded-md shadow-sm mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full" required>
                            </div>
                            <div class="mb-4">
                                <label for="categorie" class="block text-gray-700 dark:text-gray-400 text-sm font-medium mb-2">Catégorie</label>
                                <input type="text" name="categorie" id="categorie" value="{{ $portfolio->categorie }}" class="form-input rounded-md shadow-sm mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full" required>
                            </div>
                            <div class="mb-4">
                                <label for="description" class="block text-gray-700 dark:text-gray-400 text-sm font-medium mb-2">Description</label>
                                <textarea name="description" id="description" rows="3" class="form-textarea shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md" required>{{ $portfolio->description }}</textarea>
                            </div>
                            <div class="mb-4 flex items-center">
                                <label for="image" class="block text-gray-700 dark:text-gray-400 text-sm font-medium mb-2 mr-4">Image actuelle</label>
                                @if($portfolio->image)
                                <img src="{{ asset(str_replace('public', 'storage', $portfolio->image)) }}" alt="Portfolio Image" class="h-12 w-12 object-cover">
                                @else
                                    <span>Aucune image disponible</span>
                                @endif
                            </div>
                            <div class="mb-4">
                                <label for="image" class="block text-gray-700 dark:text-gray-400 text-sm font-medium mb-2">Nouvelle image</label>
                                <input type="file" name="image" id="image" class="form-input rounded-md shadow-sm mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full">
                            </div>
                            <div class="flex items-center justify-end">
                                <button type="submit" class="bg-blue-500 text-black py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Modifier</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </x-app-layout>
    </div>
@endsection
