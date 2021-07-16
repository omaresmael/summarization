<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">

    <!--<link rel="stylesheet" href="css/icon-font.css">-->

    <link rel="stylesheet" href="css/app.css">
    <link rel="shortcut icon" type="image/png" href="resources/img/favicon.png">

    <title>LAZY READER </title>
</head>

<body style="background: #2d3748; position: relative;">
<div id="particles-js"></div>

<section class="section-register">
    <div class="u-center-text u-margin-bottom-big">
        <h2 class=" heading-secondary heading-secondary--sub">
            Register
        </h2>
        <form action="/register" method="post">
            @csrf
            <div class="form__group">
                <input type="text" class="form__input u-margin-left-small" placeholder="Name" name="name" id="name" required>
                <label for="name" class="form__label">name</label>
                @if($errors->any() &&$errors->has('name'))
                    <li>{{ $errors->first('name') }}</li>
                @endif
            </div>

            <div class="form__group">
                <input type="email" class="form__input u-margin-left-small" placeholder="Email address" name="email" id="email" required>
                <label for="email" class="form__label">Email address</label>
                @if( $errors->any() && $errors->has('email'))
                    <li>{{ $errors->first('email') }}</li>

                @endif
            </div>
            <div class="form__group">
                <input type="password" class="form__input u-margin-left-small" placeholder="Password" name="password" id="password" required>
                <label for="name" class="form__label ">Password</label>
                @if($errors->any() && $errors->has('password'))
                    <li>{{ $errors->first('password') }}</li>

                @endif
            </div>
            <div class="form__group">
                <input type="password" class="form__input u-margin-left-small" placeholder="Confirm Password" name="password_confirmation" id="password_confirmation" required>
                <label for="password_confirmation" class="form__label ">Confirm Password</label>
                @if($errors->any() && $errors->has('password_confirmation'))
                    <li>{{ $errors->first('password_confirmation') }}</li>

                @endif
            </div>
            <div class="form__group">
                <button type="submit" class="btn btn--white ">Register</button>
            </div>
        </form>
    </div>
</section>



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
<script src="js/summarize.js"></script>
<script src="js/particles.js"></script>
<script>
    $(document).ready(function(){
        particlesJS.load('particles-js', 'particlesjs-config.json', function() {
            console.log('callback - particles.js config loaded');
        });
    })

</script>

</body>
</html>
