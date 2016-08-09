<!-- resources/views/tasks.blade.php -->
@push('scripts')
    <script src="/scripts/opiniao.js"></script>
@endpush

@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading"><?php echo $projeto->titulo ?></div>
        <div class="panel-body">
            <?php echo $projeto->descricao?>
        </div>
            <table class="table">
                <thead>
                    <th>A favor</th>
                    <th>Contra</th>
                </thead>
                <tbody>
                    <tr>
                    <td><?php echo $aprovado ?></td>
                    <td><?php echo $reprovado ?></td>
                    </tr>
                </tbody>
            </table>
        <div class="panel-footer">
            <?php if($opiniaoUsuario) :?>
                <?php if($opiniaoUsuario->aprovado == 1) :?>
                    <button class="btn btn-success btn-lg"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Aprovado</button>
                <?php else: ?>
                    <button class="btn btn-danger btn-lg"><i class="fa fa-thumbs-down" aria-hidden="true"></i> Reprovado</button>
                <?php endif?>
            <?php else:?>
                <button id="aprovado" value="1" class="btn btn-success btn-lg"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Aprovado</button>
                <button id="reprovado" value="0" class="btn btn-danger btn-lg"><i class="fa fa-thumbs-down" aria-hidden="true"></i> Reprovado</button>
            <?php endif?>
        </div>
    </div>
    <input type="hidden" name="projeto" id="projeto" value="<?php echo $projeto->id ?>">
    {{ csrf_field() }}
@endsection
