<!-- resources/views/tasks.blade.php -->
@push('scripts')
    <script src="/scripts/projeto.js"></script>
@endpush

@extends('layouts.app')

@section('content')
    <div class="panel-body">
        <form id="projeto-create" action="{{ url('projeto') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}
            <legend>Projeto</legend>
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">Titulo</label>
                <div class="col-sm-6">
                    <input id="titulo" type="text" name="titulo" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">Descrição</label>
                <div class="col-sm-6">
                    <textarea name="descricao" id="descricao" class="form-control"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">Categoria</label>
                <div class="col-sm-6">
                    <input type="text" id="categorias_id" name="categorias_id" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button id="create" type="button" class="btn btn-success">
                        <i class="fa fa-plus"></i> Salvar
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
