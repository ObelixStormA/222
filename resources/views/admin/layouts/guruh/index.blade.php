@extends('admin.master.master')
@section('title', 'Guruhlar')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">

                            <h3 class="card-title">Guruhlar</h3>
                            <a href="{{route('admin.guruh.create')}}" class="btn btn-outline-success float-sm-right"> Yangi guruh qo'shish</a>
                            @if(session('succes'))
                                <h2 class="alert alert-success mt-5 text-center">{{session('succes')}}</h2>
                            @endif

                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>id</th>
                                    <th>nomi</th>
                                    <th>kursi</th>
                                    <th>action</th>


                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $dat)
                                        <tr>

                                            <td>{{$dat->id}}</td>
                                            <td>{{$dat->nomi}}</td>
                                            <td>{{$dat->getKur->nomi}}</td>

                                            <td>
                                                <a href="/admin/guruh/{{$dat->id}}/edit" class="btn btn-outline-warning"> O'zgartirish</a>
{{--                                                <a  class="btn btn-outline-success"> Ko'rish</a>--}}
                                                <form method="post" action="/admin/guruh/{{$dat->id}}" style="display: inline-block; width: 50px; " >
                                                    @csrf
                                                    @method('delete')
                                                    <input type="submit" class="btn btn-outline-danger" value="O'chirish">
                                                </form>
                                            </td>
                                        </tr>
                                @endforeach
                                </tbody>

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
