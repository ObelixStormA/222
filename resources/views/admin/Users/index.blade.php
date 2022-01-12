@extends('admin.master.master')

@section('title', 'Foydalanuvchilar')
@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Foydalanuvchilar</h3>
                            <a href="{{route('admin.users.create')}}" class="btn btn-outline-success float-sm-right"> Yangi qo'shish</a>
                            @if(session('succes'))
                                <h2 class="alert alert-success mt-5 text-center">{{session('succes')}}</h2>
                            @endif


                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th style="width: 25%">Nomi</th>
                                    <th>email</th>
                                    <th>foydalanuvchi turi</th>
                                    <th>Boshqarish</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $dat)
                                    @if($dat->role_id != 30)
                                        <tr>
                                            <td>{{$dat->name}}</td>
                                            <td>{{$dat->email}}</td>
                                            <td>{{$dat->role_id}}</td>
                                            <td>
                                                <a class="btn btn-outline-warning"> O'zgartirish</a>
                                                <a class="btn btn-outline-success"> Ko'rish</a>
                                                <a class="btn btn-outline-danger"> O'chirish</a>

                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Nomi</th>
                                    <th>email</th>
                                    <th>foydalanuvchi turi</th>
                                    <th>Boshqarish</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
@endsection

