<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mealplan login</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container is-fluid">
        <form action="{{ route('login_post') }}" class="box" method="POST">
            @csrf
            <div class="field">
                <label for="" class="field">Email</label>
                <div class="control has-icons-left">
                    <input type="email" class="input" placeholder="you@meaplan.com">
                    <span class="icon is-small is-left">
                        <i class="fas fa-envelope"></i>
                    </span>
                </div>
            </div>

            <div class="field">
                <label for="" class="field">Password</label>
                <div class="control has-icons-left">
                    <input type="password" class="input" placeholder="Password">
                    <span class="icon is-small is-left">
                        <i class="fas fa-lock"></i>
                    </span>
                </div>
            </div>

            <label class="checkbox">
                <input type="checkbox">
                Remember me
            </label>

            <div class="field">
                <div class="control">
                    <button class="button is-link">Submit</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
