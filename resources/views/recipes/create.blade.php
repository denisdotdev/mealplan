@extends('layouts.app')

@section('content')
    <form action="" method="POST">
        @csrf

        <div class="field">
            <label for="name" class="label"></label>
            <div class="control">
                <input type="text" class="input">
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button class="button is-link">Submit</button>
            </div>
        </div>
    </form>
@endsection
