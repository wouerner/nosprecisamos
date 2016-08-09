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
                    <th>Titulo</th>
                    <th>Autor</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($projetos as $projeto): ?>
                    <tr>
                        <td><?php echo $projeto->id ;?></td>
                        <td><a href="projeto/aprove/<?php echo $projeto->id?>"><?php echo $projeto->titulo?></a></td>
                        <td><a href="#"><?php echo $projeto->user->name; ?></td>
                        <td>
                            <?php if (Auth::check()) : ?>
                                <a href="{{url('opiniao/create')}}/<?php echo $projeto->id?>" class="btn btn-default">Opinião</a>
                            <?php endif ?>
                            <a href="/projeto/aprove/<?php echo $projeto->id?>" class="btn btn-default">Discussão</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script>
        jQuery(document).ready(function(){
            jQuery('#table').DataTable({
               "language": {url: "/scripts/Portuguese-Brasil.json"}
            });
        });
    </script>
@endsection
