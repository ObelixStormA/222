@extends('kafedraBoshligi.master.master')
@section('title', 'jurnal')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="container">
                                <div class="row">
                                    <div class="col-6">
                                        <select name="" id="" class="form-control text-bold">
                                            <option value="" disabled selected>Fan nomi</option>
                                            <option value="1">Web texnologiyalar</option>
                                            <option value="2">OOP</option>
                                            <option value="3">Computer vision</option>
                                        </select>

                                    </div>
                                    <div class="col-2">
                                        <select name="" id="" class="form-control">
                                            <option value="" disabled selected>Guruh nomi</option>
                                            <option value="1">241</option>
                                            <option value="2">242</option>
                                            <option value="3">243</option>
                                        </select>
                                    </div>
                                    <div class="col-2">
                                        <select name="" id="" class="form-control">
                                            <option value="" disabled selected>Oy</option>
                                            <option value="1">Yanvar</option>
                                            <option value="1">Fevral</option>
                                            <option value="1">Mart</option>
                                            <option value="1">Aprel</option>
                                            <option value="1">May</option>
                                            <option value="1">Iyun</option>
                                            <option value="1">Iyul</option>
                                            <option value="1">Avgust</option>
                                            <option value="1">Sentabr</option>
                                            <option value="1">Oktyabr</option>
                                            <option value="1">Noyabr</option>
                                            <option value="1">Dekabr</option>
                                        </select>
                                    </div>

                                    <div class="col-2">
                                        <select name="" id="" class="form-control">
                                            <option value="" disabled selected>Yil</option>
                                            <option value="1">2020</option>
                                            <option value="2">2021</option>
                                            <option value="3">2022</option>
                                        </select>
                                    </div>
                                </div>

                            </div>


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
{{--@dd($data)--}}
                            <table id="example2" class="table table-bordered table-hover">
                                <thead class="thead-light h5">
                                <tr>
                                    <th class="text-center">id</th>
                                    <th width="200" class="text-center">FIO</th>
                                    @for($i = 1; $i <= 31; $i++)
                                        <th class="text-center">{{$i}}</th>
                                    @endfor

                                </tr>
                                </thead>
                                <tbody>


                                        <tr>

                                            <td class="text-center">id</td>
                                            <td>fio</td>
                                            @for($i = 1; $i <= 31; $i++)
                                                <td class="text-center"></td>
                                            @endfor
                                        </tr>

                                </tbody>

                            </table>

                            <div class="text-center mt-3">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item active"><a class="page-link" href="#">Yanvar</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Fevral</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Mart</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Aprel</a></li>
                                    <li class="page-item"><a class="page-link" href="#">May</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Iyun</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Iyul</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Avgust</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Sentabr</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Oktabr</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Noyabr</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Dekabr</a></li>
                                </ul>
                            </div>
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
