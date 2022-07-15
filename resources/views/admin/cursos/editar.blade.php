@extends('layout.site')
@section('titulo', 'Contatos')

@section('conteudo')

<div class="blue lighten-5 container-course">
    <div class="content-form-course">
        <div class="container">
            <div class="form-course z-depth-2">
                <h3 class="center">Editar curso</h3>
                <div class="row">
                    <form action="{{route('admin.cursos.atualizar', $register->id)}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}

                        <input type="hidden" name="_method" value="put">
                        @include('admin.cursos._form')

                        <button class="btn blue mt-2 btn-form" type="submit">Editar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection