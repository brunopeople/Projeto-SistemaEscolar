@extends('admin.admin_master')
@section('admin')

<div class="content-wrapper">
    <div class="container-full">
        <!--Content Header (Page header) -->

        <!--Main Content -->
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-tittle">Lista de Usuários</h3>
                                <a href="{{route('users.add')}}" style="float: right;" class="btn btn-rounded btn-sucess mb-5"> Adicionar Usuário</a>

                        </div>
                        <!--/.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                              <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th width="5%">SL</th>
                                        <th>Função</th>
                                        <th>Nome</th>
                                        <th>Email</th>
                                        <th>Código</th>
                                        <th width="25%">Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($alldData as $key => $user)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$user->role}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->code}}</td>
                                        <td>
                                    <a href="{{route('users.edit)}}" class="btn btn-info">Atualizar</a>
                                    <a href="{{route('users.delete', $user->id)}}" class="btn btn-danger" id="delete">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                </tfoot>
                              </table>
                            </div>
                        </div>
                        <!-- /.box-body-->
                    </div>
                    <!-- /.box-->
                </div>
                <!--/.col -->
            </div>
            <!--/.content -->
        </div>
    </div>
</div>

@endsection 