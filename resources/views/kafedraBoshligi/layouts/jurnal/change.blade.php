@extends('kafedraBoshligi.master.master')
@section('title', 'jurnal')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">

                            @if(session('succes'))
                                <div class="alert alert-success">
                                    <ul class="list-uenstyled">
                                        <h2>{{session('succes')}}</h2>
                                    </ul>
                                </div>
                            @endif
                        </div>
                        <div class="container mt-5">
                            <div class="row">
                                <div class="col-2"></div>
                                <div class="col-6">
                                    <select name="" id="" class="form-control text-bold text-lg">
                                        <option value="" disabled selected>Fan nomi</option>
                                        <option value="1">Web texnologiyalar</option>
                                        <option value="2">OOP</option>
                                        <option value="3">Computer vision</option>
                                    </select>

                                </div>
                                <div class="col-2">
                                    <select name="" id="" class="form-control text-lg">
                                        <option value="" disabled selected>Guruh nomi</option>
                                        <option value="1">241</option>
                                        <option value="2">242</option>
                                        <option value="3">243</option>
                                    </select>
                                </div>

                            </div>

                        </div>
                        <!-- /.card-header -->
                        <div class="text-center m-auto p-5" >
                            <form action="">
                                <table id="example2" class="table table-bordered table-hover table-responsive-xl table-striped">
                                    <thead class="thead-dark h4">
                                    <tr>
                                        <th class="text-center">id</th>
                                        <th class="text-center">FIO</th>
                                        <th class="text-center">Davomat</th>


                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="text-center pl-5 pr-5">id</td>
                                        <td class="pl-5 pr-5">Aliyev Ali Aliyevich</td>
                                        <td class="pl-5 pr-5">
                                            <input type="text" class="w-50 text-center" maxlength="1" class="text-center">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center pl-5 pr-5">id</td>
                                        <td class="pl-5 pr-5">Aliyev Ali Aliyevich</td>
                                        <td class="pl-5 pr-5">
                                            <input type="text" class="w-50 text-center" maxlength="1" class="text-center">
                                        </td>
                                    </tr><tr>
                                        <td class="text-center pl-5 pr-5">id</td>
                                        <td class="pl-5 pr-5">Aliyev Ali Aliyevich</td>
                                        <td class="pl-5 pr-5">
                                            <input type="text" class="w-50 text-center" maxlength="1" class="text-center">
                                        </td>
                                    </tr><tr>
                                        <td class="text-center pl-5 pr-5">id</td>
                                        <td class="pl-5 pr-5">Aliyev Ali Aliyevich</td>
                                        <td class="pl-5 pr-5">
                                            <input type="text" class="w-50 text-center" maxlength="1" class="text-center">
                                        </td>
                                    </tr><tr>
                                        <td class="text-center pl-5 pr-5">id</td>
                                        <td class="pl-5 pr-5">Aliyev Ali Aliyevich</td>
                                        <td class="pl-5 pr-5">
                                            <input type="text" class="w-50 text-center" maxlength="1" class="text-center">
                                        </td>
                                    </tr><tr>
                                        <td class="text-center pl-5 pr-5">id</td>
                                        <td class="pl-5 pr-5">Aliyev Ali Aliyevich</td>
                                        <td class="pl-5 pr-5">
                                            <input type="text" class="w-50 text-center" maxlength="1" class="text-center">
                                        </td>
                                    </tr><tr>
                                        <td class="text-center pl-5 pr-5">id</td>
                                        <td class="pl-5 pr-5">Aliyev Ali Aliyevich</td>
                                        <td class="pl-5 pr-5">
                                            <input type="text" class="w-50 text-center" maxlength="1" class="text-center">
                                        </td>
                                    </tr>

                                    </tbody>

                                </table>
                                <div class="text-center">
                                    <input type="submit" class="btn btn-success font-weight-bold" value="Bazaga jo'natish">
                                </div>
                            </form>
                        </div>
{{--                        <div class="card-body container">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-2"></div>--}}
{{--                                <div class="col-8">--}}
{{--                                    <table id="example2" class="table table-bordered table-hover table-responsive-xl">--}}
{{--                                        <thead class="thead-light">--}}
{{--                                        <tr>--}}
{{--                                            <th class="text-center">id</th>--}}
{{--                                            <th class="text-center col-3">FIO</th>--}}
{{--                                            <th class="text-center">Baho</th>--}}


{{--                                        </tr>--}}
{{--                                        </thead>--}}
{{--                                        <tbody>--}}
{{--                                        <tr>--}}
{{--                                            <td class="text-center">id</td>--}}
{{--                                            <td>fio</td>--}}
{{--                                            <td>--}}
{{--                                                <input type="number" min="2" max="5" class="text-center">--}}
{{--                                            </td>--}}

{{--                                        </tr>--}}

{{--                                        </tbody>--}}

{{--                                    </table>--}}

{{--                                </div>--}}
{{--                                <div class="col-2"></div>--}}
{{--                            </div>--}}
{{--                            <div class="text-center"><button class="btn btn-success">Bazaga jo'natish</button></div>--}}


{{--                        </div>--}}



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
