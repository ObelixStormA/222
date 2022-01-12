@extends('admin.master.master')

@section('title', 'Kafedra boshliqlari')
@section('content')


    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Kafedra boshliqlari</h3>
                            <a href="{{route('admin.kafedrabosh.create')}}" class="btn btn-outline-success float-sm-right"> Yangi yaratish </a>
                            @if(session('succes'))
                                <h2 class="alert alert-success mt-5 text-center">{{session('succes')}}</h2>
                            @endif

                        </div>
{{--                        @dd($data)--}}
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th style="width: 25%">FIO</th>
                                    <th>email</th>
                                    <th>foydalanuvchi turi</th>
                                    <th>Kafedrasi</th>
                                    <th>Ilmiy darajasi</th>
                                    <th>Ilmiy unvoni</th>

                                    <th>Boshqarish</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $dat)
                                        <tr>
                                            <td>{{$dat->name}}</td>
                                            <td>{{$dat->email}}</td>
                                            <td>Kafedra boshligi</td>
                                            <td>{{$dat->getKaf['nomi']}}</td>
                                            <td>@if($dat->unvon_id !=0) {{$dat->getUnvon->nomi}}@else {{"mavjud emas"}}@endif</td>
                                            <td>@if($dat->daraja_id !=0) {{$dat->getDaraja->nomi}} @else {{"mavjud emas"}}@endif</td>
                                            <td>
                                                <a href="edit/kafedraboshligi/{{$dat->id}}" class="btn btn-outline-warning"> O'zgartirish</a>
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
                                    <th>Ilmiy darajasi</th>
                                    <th>Ilmiy unvoni</th>
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
@push('js')

@endpush
