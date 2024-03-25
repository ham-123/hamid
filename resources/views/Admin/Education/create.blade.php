@extends('layouts._hamid')

@section('content')
    <div class="min-h-screen bg-gray-100">
        <x-app-layout>
            <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    {{ __('Dashboard') }}
                </h2>
            </x-slot>

            <div class="content-wrapper">
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0">Ajouter une éducation</h1>
                            </div>

                        </div>
                    </div>
                </div>

                <section class="content">
                    <div class="container-fluid">
                        <!-- Formulaire de création d'une nouvelle éducation -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <form action="{{ route('education.store') }}" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <label>Diplôme</label>
                                                <input type="text" name="diplome" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Université</label>
                                                <input type="text" name="universite" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Année d'obtention</label>
                                                <input type="text" name="annee_obtention" class="form-control">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Ajouter</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
    </div>
    </x-app-layout>
@endsection
