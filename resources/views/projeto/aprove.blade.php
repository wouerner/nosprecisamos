@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading"><?php echo $projeto->titulo ?></div>
        <div class="panel-body">
            <?php echo $projeto->descricao?>
        </div>
    </div>
@endsection
