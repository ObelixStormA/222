@extends('kafedraBoshligi.master.master')
@section('title', 'Kafedra o\'qituvchilar')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Kafedra o'qituvchilari</h3>
                            @if(session('succes'))
                                <h2 class="alert alert-success mt-5 text-center">{{session('succes')}}</h2>
                            @endif

                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th style="width: 100px">id</th>
                                    <th>nomi</th>


                                </tr>
                                </thead>
                                <tbody>
                                <?$i = 0?>
                                @foreach($data as $dat)
                                    <tr>
                                        <td>{{++$i}}</td>
                                        <td>{{$dat->name}}</td>
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
