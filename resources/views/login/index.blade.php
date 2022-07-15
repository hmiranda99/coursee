@extends('layout.site')

@section('conteudo')
<div class="content-container">
    <div class="content-login">
        <div class="content-form z-depth-2 grey lighten-5">
            <div class="container">
                <h3 class="header center">Login</h3>

                <div class="row">
                    <form action="{{route('site.login.entrar')}}" method="post">
                        {{csrf_field()}}

                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">email</i>
                                <input id="icon_prefix" type="text" class="validate" name="email">
                                <label for="icon_prefix">Email</label>
                            </div>

                            <div class="input-field col s12">
                                <i class="material-icons prefix">https</i>
                                <input id="icon_prefix_pass" type="password" class="validate" name="password">
                                <label for="icon_prefix_pass">Senha</label>
                            </div>
                        </div>

                        <button class="waves-effect waves-light btn-large blue btn-form mt-2" type="submit">Entrar</button>
                    </form>

                    <a href="/">
                        <button class="btn-large btn-form btn-cancel blue-text mt-1">Cancelar</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="page-footer footer" style="background-color: #202020;">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">Coursee</h5>
                <p class="grey-text text-lighten-4">Sempre pensando em você!</p>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            © 2022 Copyright | Helena Miranda da Silva
        </div>
    </div>
</footer>
@endsection