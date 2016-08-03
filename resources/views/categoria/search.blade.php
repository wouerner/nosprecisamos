@push('scripts')
    <script src="/scripts/projeto.js"></script>
@endpush

@extends('layouts.app')

@section('content')
    <div class="panel-body">
        <table id="table" class="table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Nome</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($categorias as $categoria): ?>
                    <tr>
                        <td><?php echo $categoria->id ;?></td>
                        <td><a href="projeto/lista/<?php echo $categoria->id?>"><?php echo $categoria->nome ?></a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script>
        jQuery(document).ready(function(){
            jQuery('#table').DataTable();
        });
    </script>
@endsection
