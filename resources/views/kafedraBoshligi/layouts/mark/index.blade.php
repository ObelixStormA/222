@extends('kafedraBoshligi.master.master')
@section('title', 'Jurnallar')

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
                                    <th>Guruh nomi</th>
                                    <th>korish</th>
                                    <th>Baholash</th>

                                </tr>
                                </thead>
                                {{--                                @dd($data)--}}
                                <tbody>
                                <?$id = 0?>
                                @foreach($data as $dat)
                                    <tr>
                                        <td>{{++$id}}</td>
                                        <td>{{$dat->getFan->nomi}}</td>
                                        <td>{{$dat->getGuruh->nomi}}</td>
                                        <td>
                                            <a href="/kafedraboshligi/mark/markGroup/{{$dat->fan_id}}/{{$dat->guruh_id}}/{{auth()->user()->id}}" class="btn btn-success"> Ko'rish</a>
                                        </td>
                                        <td>
                                            <a href="/kafedraboshligi/mark/marking/{{$dat->guruh_id}}/{{$dat->fan_id}}/{{auth()->user()->id}}" class="float-left"><button class="btn btn-success">Baholash</button></a>

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
