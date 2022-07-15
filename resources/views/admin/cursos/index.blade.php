@extends('layout.site')
@section('titulo', 'Cursos')

@section('conteudo')
<div class="container">
    <div class="container-content-adm">

        <div class="row">
            <div class="col s12 m12">
                <div class="card-panel bg-panel">
                    <span class="white-text">
                        Que bom te ver denovo por aqui,
                        <h4 class="header">
                            {{Auth::user()->name}}!
                        </h4>
                    </span>
                </div>
            </div>
        </div>

        <h3 class="center" style="margin: 5rem 0 2rem 0;">Lista de cursos</h3>

        <div class="row">
            <table class="striped centered responsive-table">
                <thead>
                    <tr class="tr">
                        <th>ID</th>
                        <th>Título</th>
                        <th>Descrição</th>
                        <th>Imagem</th>
                        <th>Publicado</th>
                        <th>Ação</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($list as $value)
                    <tr>
                        <td>{{$value->id}}</td>
                        <td>{{$value->title}}</td>
                        <td>{{$value->description}}</td>
                        <td> <img width="120" class="materialboxed" src="{{asset($value->image)}}" alt="{{$value->title}}"> </td>
                        <td>
                            @php
                            $styleBadge = $value->published == "yes" ? 'badge green white-text' : 'badge orange white-text';
                            @endphp

                            <span class="{{$styleBadge}}">{{$value->published == "yes" ? 'Sim' : 'Não'}}</span>
                        </td>
                        <td>
                            <a class="btn blue" href="{{route('admin.cursos.editar', $value->id)}}">Editar</a>
                            <a class="btn red modal-trigger" href="#modal1-{{$value->id}}">Deletar</a>
                        </td>
                    </tr>

                    <!-- Modal Structure -->
                    <div id="modal1-{{$value->id}}" class="modal">
                        <div class="modal-content">
                            <h4>Excluir curso</h4>
                            <p>Tem certeza de que deseja excluir este curso permanentemente?</p>
                        </div>
                        <div class="modal-footer">
                            <a href="{{route('admin.cursos.deletar', $value->id)}}" class="modal-close waves-effect waves-green btn red">Sim, tenho certeza</a>
                            <a class="modal-close waves-effect waves-green btn blue">Cancelar</a>
                        </div>
                    </div>
                    @endforeach
                </tbody>
            </table>
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
        </div>
    </div>
</footer>
@endsection