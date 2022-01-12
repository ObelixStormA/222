@extends('kursant.master.master')
@section('title', 'Fanlar')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">

                            <h3 class="card-title">Biriktirilgan fanlar</h3>

                            @if(session('succes'))
                                <h2 class="alert alert-success mt-5 text-center">{{session('succes')}}</h2>
                            @endif

                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead class="thead-light">
                                <tr>
                                    <th>id</th>
                                    <th>Fan nomi</th>
                                    <th>Semestr</th>
                                    <th>Guruh nomi</th>
                                    <th>korish</th>
                                </tr>
                                </thead>
{{--                                @dd($data)--}}
                                <tbody>
                                <?$id = 0?>
                                @foreach($data as $dat)
                                    <tr>
                                        <td>{{++$id}}</td>
                                        <td>{{$dat->getFan->nomi}}</td>
                                        <td>{{$dat->getSemestr->nomi}}</td>
                                        <td>{{$dat->getGuruh->nomi}}</td>
                                        <td>
                                            <a class="btn btn-success" href="/teacher/davomat/fordavomat/{{$dat->fan_id}}/{{$dat->guruh_id}}">Yo'qlama qilish</a>
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
