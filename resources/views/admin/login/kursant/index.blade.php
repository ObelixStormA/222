@extends('admin.master.master')

@section('title', 'Kursantlar')
@section('content')


    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">

                            <h3 class="card-title">Kursantlar</h3>
                            <a href="{{route('admin.kursant.create')}}" class="btn btn-outline-success float-sm-right"> Yangi yaratish</a>
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
                                    <th>Kafedrasi</th>
                                    <th>Kursi</th>
                                    <th>guruhi</th>
                                    <th>Boshqarish</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $dat)
                                        <tr>
                                            <td>{{$dat->name}}</td>
                                            <td>{{$dat->email}}</td>
                                            <td>Kursant</td>
                                            <td>{{$dat->getKaf->nomi}} </td>
                                            <td>{{$dat->getKur->nomi}}</td>
                                            <td>{{$dat->getGuruh->nomi}}</td>
                                            <td>
                                                <a href="edit/kursant/{{$dat->id}}" class="btn btn-outline-warning"> O'zgartirish</a>
{{--                                                <a class="btn btn-outline-success"> Ko'rish</a>--}}
{{--                                                <a class="btn btn-outline-danger"> O'chirish</a>--}}

                                            </td>
                                        </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Nomi</th>
                                    <th>email</th>
                                    <th>foydalanuvchi turi</th>
                                    <th>Kafedrasi</th>
                                    <th>Kursi</th>
                                    <th>guruhi</th>
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

