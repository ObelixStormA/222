@extends('kafedraBoshligi.master.master')
@section('title', 'jurnal')

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
{{--                                @foreach($data as $dat)--}}
{{--                                    <tr>--}}
{{--                                        <td>{{++$id}}</td>--}}
{{--                                        <td>{{$dat->getFan->nomi}}</td>--}}
{{--                                        <td>{{$dat->getGuruh->nomi}}</td>--}}
{{--                                        <td>--}}
{{--                                            <form  action="{{ route('kafedraboshligi.jurnal.store') }}" method="post">--}}
{{--                                                @csrf--}}
{{--                                                @method('POST')--}}
{{--                                                <input hidden name="kafedra_id" value="{{$dat->kafedra_id}}">--}}
{{--                                                <input hidden name="guruh_id" value="{{$dat->guruh_id}}">--}}
{{--                                                <input class="btn btn-success" type="submit" value="Ko'rish">--}}
{{--                                            </form>--}}



{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <a href="#"><button class="btn btn-success">Baholash</button></a>--}}

{{--                                        </td>--}}

{{--                                    </tr>--}}
{{--                                @endforeach--}}
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
