@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">Meus projetos</div>

                <div class="panel-body">
                    <?php if($projetos) :?>
                    <table id="table" class="table">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Titulo</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($projetos as $projeto): ?>
                                <tr>
                                    <td><?php echo $projeto->id?></td>
                                    <td><?php echo $projeto->titulo?></td>
                                    <td>
                                        <a href="{{url('opiniao/create')}}/<?php echo $projeto->id?>" class="btn btn-default">Opinião</a>
                                        <a href="projeto/aprove/<?php echo $projeto->id?>" class="btn btn-default">Discussão</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <script>
                        jQuery(document).ready(function(){
                            jQuery('#table').DataTable({
                               "language": {url: "/scripts/Portuguese-Brasil.json"}
                            });
                        });

                    </script>
                    <?php else: ?>
                        <p>Você não tem projetos</p>
                    <?php endif;?>
                </div>
                <div class="panel-footer">
                    <a class="btn btn-success" href="{{url('projeto/create')}}" role="button">Novo Projeto</a>
                </div>
            </div>
        </div>
    </div>
@endsection
