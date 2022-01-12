@extends('teacher.master.master')
@section('title', 'Davomat')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <form action="{{route('teacher.davomat.fordavomat.getdavomat')}}" method="POST">
                                @csrf
                                @method('post')
                                <div class="container">
                                    <div class="row">
                                        <div class="col-4">
                                            <select name="fan_id" id="" class="form-control text-bold">
                                                @foreach($fanlar as $fan)
                                                    <option value="{{$fan->id}}">{{$fan->nomi}}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                        <div class="col-2">
                                            <select name="guruh_id" id="" class="form-control">
                                                @foreach($guruhlar as $g)
                                                    <option value="{{$g->id}}">{{$g->nomi}}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                        <div class="col-2">
                                            <select name="oy" id="" class="form-control">

                                                <option value="1">Yanvar</option>
                                                <option value="2">Fevral</option>
                                                <option value="3">Mart</option>
                                                <option value="4">Aprel</option>
                                                <option value="5">May</option>
                                                <option value="6">Iyun</option>
                                                <option value="7">Iyul</option>
                                                <option value="8">Avgust</option>
                                                <option value="9">Sentabr</option>
                                                <option value="10">Oktyabr</option>
                                                <option value="11">Noyabr</option>
                                                <option value="12">Dekabr</option>
                                            </select>
                                        </div>

                                        <div class="col-2">
                                            <select name="yil" id="" class="form-control">

                                                <option value="2020">2020</option>
                                                <option value="2021">2021</option>
                                                <option value="2022">2022</option>
                                            </select>
                                        </div>
                                        <div class="col-2">
                                            <button type="submit" class="btn btn-success" name="enter">Davomatni ko'rish</button>
                                        </div>
                                    </div>

                                </div>
                            </form>

                            @if(session('succes'))
                                <div class="alert alert-success">
                                    <ul class="list-uenstyled">
                                        <h2>{{session('succes')}}</h2>
                                    </ul>
                                </div>
                            @endif
                            @if(session('success'))
                                <div class="alert alert-success">
                                    <ul class="list-uenstyled">
                                        <h2>{{session('success')}}</h2>
                                    </ul>
                                </div>
                            @endif
                        </div>
                        <div class="card-body">

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
