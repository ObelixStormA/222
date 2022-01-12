@extends('kursant.master.master')
@section('title', 'Topshiriqlar')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">

                            <h3 class="card-title">Mening topshiriqlarim</h3>
                            @if(session('succes'))
                                <h2 class="alert alert-success mt-5 text-center">{{session('succes')}}</h2>
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
                                        <th>status</th>
                                        <th>Ko'rish</th>
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
                                                    @if($dat->dead_line > now())
                                                        <a class="btn btn-danger">Yopilgan</a>
                                                    @else
                                                        <a class="btn btn-info">Yopilmagan</a>
                                                    @endif
                                                </td>
                                                <td><a href="/kursant/mark/markGroup/{{$dat->id}}/{{$dat->fan_id}}/{{$dat->guruh_id}}/{{$dat->user_id}}" class="btn btn-success"> Ko'rish</a></td>
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
