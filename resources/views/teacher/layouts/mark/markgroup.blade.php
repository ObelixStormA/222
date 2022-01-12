@extends('teacher.master.master')
@section('title', 'Jurnallar')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">

                            <h3 class="card-title">Topshiriq : {{$task->nomi}} </h3><br>
                            <h3 class="card-title">Fan : {{$fan->nomi}}</h3>
                            <a href="/teacher/mark/marking/{{$task->id}}/{{$fan_id}}/{{$group_id}}/{{$teach_id}}" class="float-right"><button class="btn btn-success">Baholash</button></a>
                            @if(session('succes'))
                                <div class="alert alert-success">
                                    <ul class="list-uenstyled">
                                        <h2>{{session('succes')}}</h2>
                                    </ul>
                                </div>
                            @endif
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead class="thead-light">
                                <tr>
                                    <th>id</th>
                                    <th>Kurasnt nomi</th>
                                    <th>Bahosi</th>
                                </tr>
                                </thead>
                                {{--                                @dd($data)--}}
                                <tbody>
                                <?$id = 0?>
                                @foreach($kursant as $kur)
                                    <tr>
                                        <td>{{++$id}}</td>
                                        <td>{{$kur->name}}</td>
                                        <td>
                                        @foreach($data as $dat)
                                            @if($kur->id == $dat->kursant_id)
                                            {{$dat->mark}}
                                            @endif
                                        @endforeach
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
