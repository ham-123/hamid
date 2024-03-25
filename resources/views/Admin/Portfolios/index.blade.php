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
                        <h1 class="text-2xl font-semibold mb-8">Liste des portfolios</h1>
                        <div class="overflow-x-auto">
                            <table class="min-w-full">
                                <thead>
                                    <tr class="bg-gray-50 dark:bg-gray-700">
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                            Titre
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                            Catégorie
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                            Description
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                            Image
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                            Actions
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-800">
                                    @foreach($portfolios as $portfolio)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-gray-200">
                                            {{ $portfolio->titre }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">
                                            {{ $portfolio->categorie }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">
                                            {{ $portfolio->description }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">
                                            @if($portfolio->image)
                                                <img src="{{ asset(str_replace('public', 'storage', $portfolio->image)) }}" alt="Portfolio Image" class="h-12 w-12 object-cover">
                                            @else
                                                <span>Aucune image disponible</span>
                                            @endif
                                        </td>
                                        
                                        
                                        
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">
                                            <a href="{{ route('portfolios.edit', $portfolio->id) }}" class="text-blue-600 hover:text-blue-900 dark:text-blue-400 dark:hover:text-blue-600">Modifier</a>
                                            <form action="{{ route('portfolios.destroy', $portfolio) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce portfolio ?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-600 hover:text-red-900 dark:text-red-400 dark:hover:text-red-600">Supprimer</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <a href="{{ route('portfolios.create') }}" class="inline-flex items-center px-4 py-2 mt-4 text-sm font-medium text-black bg-blue-600 dark:bg-blue-500 border border-transparent rounded-md shadow-sm hover:bg-blue-700 dark:hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Ajouter une éducation</a>
                        </div>
                    </div>
                </div>
            </div>
        </x-app-layout>
    </div>
@endsection
