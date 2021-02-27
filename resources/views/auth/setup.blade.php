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
                        <select>
                            <option selected>English</option>
                            <option>Français</option>
                        </select>
                    </div>

                    <div class="icon is-small is-left">
                        <i class="fas fa-globe"></i>
                    </div>
                </div>
            </div>

            <div class="field">
                <label class="label">Theme color</label>
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
