@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="title">{{ __('recipes.index.title') }}</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td><button class="delete"></button></td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
