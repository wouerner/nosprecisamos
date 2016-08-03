<!-- resources/views/tasks.blade.php -->
@push('scripts')
    <script src="/scripts/projeto.js"></script>
@endpush

@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading"><?php echo $projeto->titulo ?></div>
        <div class="panel-body">
            <?php echo $projeto->descricao?>
        </div>
    </div>
    <button class="btn btn-success btn-lg"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Aprovado</button>
    <button class="btn btn-danger btn-lg"><i class="fa fa-thumbs-down" aria-hidden="true"></i> Reprovado</button>
@endsection
