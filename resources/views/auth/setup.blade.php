<!DOCTYPE html>
<html lang="en">
<head>
    <title>Setup</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container box">
        <h1 class="title">Setup</h1>

        <p>Please fill out this form to setup this web application.</p>

        <form action="{{ route('setup_post') }}" method="POST">
            @csrf

            <div class="field">
                <label class="label">Language</label>

                <div class="control has-icons-left">
                    <div class="select">
                        <select name="language" class="@error('language') is-danger @enderror">
                            <option value="english" @if(old('language') == '' or old('language') == 'english') selected @endif>English</option>
                            <option value="french" @if(old('language') == 'french') selected @endif>Français</option>
                        </select>
                    </div>

                    <div class="icon is-small is-left">
                        <i class="fas fa-globe"></i>
                    </div>
                </div>

                @error('language')
                    <p class="help is-danger">{{ $message }}</p>
                @enderror
            </div>

            <!--
            @TODO: Implement this at a later time when we have the basic dashboard style done.
            <div class="field">
                <label class="label">Theme color</label>
            </div>
            -->

            <div class="field">
                <label for="email" class="label">Administrative email</label>
                <div class="control">
                    <input type="email" class="input @error('email') is-danger @enderror" name="email" value="{{ old('email') }}">
                </div>

                @error('email')
                    <p class="help is-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="field">
                <label for="password" class="label">Administrative password</label>
                <div class="control">
                    <input type="password" class="input @error('password') is-danger @enderror" name="password">
                </div>

                @error('password')
                    <p class="help is-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="field">
                <label for="password" class="label">Administrative password (confirmation)</label>
                <div class="control">
                    <input type="password" class="input @error('password') is-danger @enderror" name="password_confirmation">
                </div>

                @error('password')
                    <p class="help is-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="field">
                <div class="control">
                    <button class="button is-link">Submit</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
