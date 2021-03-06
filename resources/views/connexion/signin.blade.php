<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.3/css/bulma.css"
        integrity="sha512-7VGuxKU1BFMmA+dC7NiW8jF0YOIe6bibjUBr42unVtEsI/UYzXMS3nkgNvmsY4yqauxeiEs4bXF6fPLsCuxN/A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Inscription</title>
</head>

<body>


    <form action="{{ route('inscription') }}" method="post" class="section"
        style="width: 60%; margin-left:20%; border-radius:20px solid black;">
        {{ csrf_field() }}
        <div>
            <h1 class="text-center" style="font-size:4em;font-family:Arial;color:rgb(79, 156, 146);">TeamGift</h1>

            <h1 class="text-center" style="font-size:2em;font-family:Arial;color:rgb(79, 156, 146);">Inscrivez-vous
            </h1>
        </div>

        <div class="field">
            <label class="label">Votre Nom</label>
            <div class="control">
                <input class="input" type="text" name="fullName" value={{ old('fullName') }}>
                @if ($errors->has('fullName'))
                    <p class="help is-danger">{{ $errors->first('fullName') }}</p>
                @endif
            </div>
        </div>

        <div class="field">
            <label class="label">Courriel</label>
            <div class="control">
                <input class="input" type="text" name="email" value={{ old('email') }}>
                @if ($errors->has('email'))
                    <p class="help is-danger">{{ $errors->first('email') }}</p>
                @endif
            </div>
        </div>

        <div class="field">
            <label class="label">Mot de passe</label>
            <div class="control">
                <input class="input" type="password" name="password">
                @if ($errors->has('password'))
                    <p class="help is-danger">{{ $errors->first('password') }}</p>
                @endif
            </div>
        </div>

        <div class="control">
            <button class="btn btn-dark" type="submit">S'enregistrer</button>
        </div><br>

        @if (session()->has('messager'))
            <h4 style="background-color:red; color: white; text-align:center;">
                {{ session()->get('messager') }}</h4>
        @endif

        @if (session()->has('message'))
            <h4 style="background-color:green; color: white; text-align:center;">
                {{ session()->get('message') }}</h4>
        @endif
    </form>


</body>

</html>
