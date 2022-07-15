@extends('layout.site')
@section('titulo', 'Cursos')

@section('conteudo')
<div class="parallax-container">
    <div class="image-header"></div>
</div>
<div class="section white">
    <div class="row container">
        <h2 class="header center">Os melhores cursos do mercado</h2>
        <p class="grey-text text-darken-3 lighten-3 center">
            Aprenda com os melhores profissionais
        </p>

        <div class="divider-content">
            <div class="divider"></div>
        </div>

        <h3 class="header center">Lista de cursos</h3>

        <div class="row">
            @foreach ($list as $value)
            <div class="col s12 m4">
                <div class="card">
                    <div class="card-image">
                        <img height="400px" src="{{asset($value->image)}}">
                    </div>
                    <div class="card-content">
                        <span class="card-title">{{$value->title}}</span>
                        <p>{{$value->description}}</p>
                    </div>
                    <div class="card-action">
                        <h5><b class="blue-text">{{$value->value}}</b></h5>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="row pagination">
            {{ $list->links() }}
        </div>
    </div>
</div>

<footer class="page-footer" style="background-color: #202020;">
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
            <a class="grey-text text-lighten-4 right" href="{{route('login.index')}}">Login</a>
        </div>
    </div>
</footer>
@endsection