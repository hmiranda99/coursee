<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="shortcut icon" href="{{asset('img/favicon/fav-icon.svg')}}" type="image/x-icon">
    <title>Coursee</title>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>

    <header>
        <nav class="background-nav-bar-cs">
            <div class="nav-wrapper container">
                <a href="/" class="brand-logo center navbar-image">
                    <svg width="356" height="49" viewBox="0 0 356 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M31.384 48.536C40.088 48.536 45.976 46.936 52.504 43.352V28.952C49.496 31 43.864 32.728 37.272 32.728C28.056 32.728 22.808 29.464 22.808 24.472C22.808 19.608 27.8 16.344 37.336 16.344C43.48 16.344 49.368 18.008 52.44 19.864V5.016C46.424 2.2 40.152 0.663998 31.896 0.663998C11.224 0.663998 0.472 11.544 0.472 24.92C0.472 38.424 11.352 48.536 31.384 48.536ZM82.779 48.408C100.059 48.408 109.403 39.192 109.403 27.48C109.403 15.768 99.995 7.384 82.779 7.384C65.435 7.384 56.091 15.832 56.091 27.48C56.091 39.128 65.435 48.408 82.779 48.408ZM82.779 34.776C78.427 34.776 75.931 32.152 75.931 27.864C75.931 23.64 78.427 21.08 82.779 21.08C87.003 21.08 89.499 23.64 89.499 27.864C89.499 32.152 87.003 34.776 82.779 34.776ZM144.035 27.672C144.035 32.344 142.243 34.776 138.339 34.776C134.435 34.776 133.027 32.344 133.027 27.8V9.112H113.059V32.216C113.059 42.52 118.307 48.344 128.611 48.344C136.547 48.344 141.731 44.696 144.035 38.232V47H163.939V9.112H144.035V27.672ZM201.949 8.088C194.909 8.088 190.941 12.12 189.149 21.464V9.112H169.629V47H189.597V38.36C189.597 28.952 193.949 25.24 201.373 25.24C204.637 25.24 207.069 26.008 208.285 26.712V9.496C207.133 8.92 204.765 8.088 201.949 8.088ZM232.883 48.28C247.347 48.28 254.707 42.968 254.707 35.224C254.707 27.352 249.907 24.408 240.882 23.32L234.931 22.488C232.307 22.104 231.347 21.656 231.347 20.696C231.347 19.672 232.627 18.968 236.723 18.968C242.483 18.968 248.371 20.504 252.531 22.552V11.352C248.562 9.176 241.523 7.32 233.139 7.32C219.571 7.32 210.867 12.376 210.867 20.376C210.867 26.072 214.131 29.72 224.115 31.64L230.451 32.92C233.459 33.496 233.971 34.2 233.971 35.096C233.971 35.992 232.883 36.696 230.451 36.696C223.795 36.696 214.643 34.264 210.419 30.872V42.776C216.499 46.296 224.562 48.28 232.883 48.28ZM305.026 27.224C305.026 15.448 297.986 7.384 281.858 7.384C266.242 7.384 257.154 15.704 257.154 27.48C257.154 39.832 267.01 48.408 284.29 48.408C292.29 48.408 299.458 46.488 303.746 43.992V31.896C300.162 33.88 295.81 35.224 290.05 35.224C282.754 35.224 278.53 33.496 276.546 30.68H305.026V27.224ZM282.882 19.352C286.978 19.352 289.282 21.144 289.794 24.024H275.842C276.418 21.144 278.85 19.352 282.882 19.352ZM355.588 27.224C355.588 15.448 348.548 7.384 332.42 7.384C316.804 7.384 307.716 15.704 307.716 27.48C307.716 39.832 317.572 48.408 334.852 48.408C342.852 48.408 350.02 46.488 354.308 43.992V31.896C350.724 33.88 346.372 35.224 340.612 35.224C333.316 35.224 329.092 33.496 327.108 30.68H355.588V27.224ZM333.444 19.352C337.54 19.352 339.844 21.144 340.356 24.024H326.404C326.98 21.144 329.412 19.352 333.444 19.352Z" fill="white" />
                    </svg>
                </a>
                <a href="#" data-target="mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="left hide-on-med-and-down">
                    @if (Auth::guest())
                    <li><a href="/"><b>Home</b></a></li>
                    @else
                    <li><a href="/"><b>Visão do usuário</b></a></li>
                    <li><a href="{{route('admin.cursos')}}"><b>Lista de cursos</b></a></li>
                    @endif
                </ul>

                <ul class="right hide-on-med-and-down">
                    @if (Auth::guest())
                    <a href="{{route('login.index')}}" class="waves-effect waves-light btn blue"><i class="material-icons left">person</i>Login</a>
                    @else
                    <a class="btn blue" href="{{route('admin.cursos.adicionar')}}"><i class="material-icons left">library_add</i>Adicionar curso</a>
                    <a href="{{route('site.login.sair')}}" class="waves-effect waves-light btn red"><i class="material-icons left">exit_to_app</i>Sair</a>
                    @endif
                </ul>
            </div>
        </nav>

        <ul class="sidenav" id="mobile">
            @if (Auth::guest())
            <li><a href="{{route('login.index')}}">Login</a></li>
            @else
            <li><a><h5>{{Auth::user()->name}}</h5></a></li>
            <li><a href="/">Visão do usuário</a></li>
            <li><a href="{{route('admin.cursos')}}">Lista de cursos</a></li>
            <li><a href="{{route('admin.cursos.adicionar')}}">Adicionar curso</a></li>
            <li><a href="{{route('site.login.sair')}}">Sair</a></li>
            @endif
        </ul>
    </header>