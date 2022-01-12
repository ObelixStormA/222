@extends('kafedraBoshligi.master.master')
@section('title', 'Topshiriqlar')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">

                            <h3 class="card-title">{{$fan->nomi}}</h3>
                            <a href="{{route('kafedraboshligi.task.create')}}" class="btn btn-outline-success float-sm-right"> Yangi topshiriq yaratish</a>
                            @if(session('success'))
                                <div class="alert alert-success mt-5">
                                    <ul class="list-unstyled">
                                        <h4>{{session('success')}}</h4>
                                    </ul>
                                </div>
                            @endif
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="exampled2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Topshiriq nomi</th>
                                    <th>Fan nomi</th>
                                    <th>Guruh</th>
                                    <th>Max. ball</th>
                                    <th>Tugash vaqti</th>
                                    <th>action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?$i=0?>
                                @foreach($data as $dat)
                                    <tr>

                                        <td>{{++$i}}</td>
                                        <td>{{$dat->nomi}}</td>
                                        <td>{{$dat->getFan->nomi}}</td>
                                        <td>{{$dat->getGuruh->nomi}}</td>
                                        <td>{{$dat->max_ball}}</td>
                                        <td>{{$dat->dead_line}}</td>
                                        <td>
                                            <a href="{{asset('storage/'.$dat->path)}}" class="btn btn-success">Yuklangan file</a>
                                            <a href="/kafedraboshligi/mark/markGroup/{{$dat->id}}/{{$dat->fan_id}}/{{$dat->guruh_id}}/{{auth()->user()->id}}" class="btn btn-success"> Ko'rish</a>
                                            <a href="/kafedraboshligi/task/{{$dat->id}}/edit" class="btn btn-warning">O'zgartirish</a>
                                        </td>


                                    </tr>@endforeach
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
