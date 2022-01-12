@extends('kafedraBoshligi.master.master')
@section('title', 'Biriktirilgan fanlar')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">

                            <h3 class="card-title">Biriktirilgan fanlar</h3>
                            <a href="{{route('kafedraboshligi.fanbiriktirish.create')}}" class="btn btn-outline-success float-sm-right"> Yangi fan biriktirish</a>
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
                                    <th>Fan</th>
                                    <th>O'qituvchi</th>
                                    <th>Fan soati</th>
                                    <th>Semestr</th>
                                    <th>Guruh</th>
                                    <th>action</th>


                                </tr>
                                </thead>
                                <tbody>
                                <?$i=0?>
                                @foreach($data as $dat)
                                        <tr>

                                            <td>{{++$i}}</td>
                                            <td>{{$dat->getFan->nomi}}</td>
                                            <td>{{$dat->getTeacher->name}}</td>
                                            <td>{{$dat->fan_soati}}</td>
                                            <td>{{$dat->getSemestr->nomi}}</td>
                                            <td>{{$dat->getGuruh->nomi}}</td>

                                            <td>
                                                <a href="/kafedraboshligi/fanbiriktirish/{{$dat->id}}/edit" class="btn btn-outline-warning"> O'zgartirish</a>
{{--                                                <form method="post" action="/kafedraboshligi/fanbiriktirish/{{$dat->id}}" style="display: inline-block; width: 50px; " >--}}
{{--                                                    @csrf--}}
{{--                                                    @method('delete')--}}
{{--                                                    <input type="submit" class="btn btn-outline-danger" value="O'chirish">--}}
{{--                                                </form>--}}
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
