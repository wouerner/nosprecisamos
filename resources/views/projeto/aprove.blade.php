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
    </div>
@endsection
