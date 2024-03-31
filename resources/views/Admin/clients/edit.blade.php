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
                        <h1 class="text-2xl font-semibold mb-8">Modifier un client</h1>
                        <form action="{{ route('clients.update', $client->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-4">
                                <label for="nom_client" class="block text-gray-700 dark:text-gray-400 text-sm font-medium mb-2">Nom du client</label>
                                <input type="text" name="nom_client" id="nom_client" value="{{ $client->nom_client }}" class="form-input rounded-md shadow-sm mt-4 focus:ring-indigo-500 focus:border-indigo-500 block w-full" required>
                            </div>
                            <div class="mb-4">
                                <label for="entreprise" class="block text-gray-700 dark:text-gray-400 text-sm font-medium mb-2">Entreprise</label>
                                <input type="text" name="entreprise" id="entreprise" value="{{ $client->entreprise }}" class="form-input rounded-md shadow-sm mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full" required>
                            </div>
                            <div class="mb-4">
                                <label for="commentaire" class="block text-gray-700 dark:text-gray-400 text-sm font-medium mb-2">Commentaire</label>
                                <textarea name="commentaire" id="commentaire" rows="3" class="form-textarea shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md" required>{{ $client->commentaire }}</textarea>
                            </div>
                            <div class="flex items-center justify-end">
                                <button type="submit" class="bg-blue-500 text-black py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Mettre à jour</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </x-app-layout>
    </div>
@endsection
