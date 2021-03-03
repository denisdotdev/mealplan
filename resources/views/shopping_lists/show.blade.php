@extends('layouts.app')

@section('content')
    <h1 class="title">{{ $shopping_list->name  ?? '' }}</h1>
@endsection
