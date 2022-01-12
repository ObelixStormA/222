@extends('teacher.master.master')
@section('title', 'Davomat')

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
                                <div class="col-4">
                                    <h4 class="text-center btn-lg btn-info disabled">Fan : {{$fan->nomi}}</h4>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-center btn-lg btn-info disabled">Guruh : {{$guruh->nomi}}</h4>
                                </div>

                            </div>

                        </div>
                        <!-- /.card-header -->
                        <div class="text-center m-auto p-5" >
                            <form action="{{route('teacher.davomat.store')}}" method="POST">
                                @csrf
                                @method('post')
                                <table id="example2" class="table table-bordered table-hover table-responsive-xl table-striped">
                                    <input type="hidden" name="fan_id" value="{{$fan->id}}">
                                    <input type="hidden" name="guruh_id" value="{{$guruh->id}}">
                                    <thead class="thead-dark h4">
                                    <tr>
                                        <th class="text-center">id</th>
                                        <th class="text-center">FIO</th>
                                        <th class="text-center">Davomat</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?$id = 0?>
                                    @foreach($kursant as $k)
                                    <tr>
                                        <td class="text-center pl-5 pr-5">{{++$id}}</td>
                                        <td class="pl-5 pr-5">{{$k->name}}</td>
                                        <td class="pl-5 pr-5">
                                            <input type="text" class="w-50 text-center" maxlength="1" required name="name[]">
                                            <input type="hidden" name="name_id[]" value="{{$k->id}}">
                                        </td>
                                    </tr>
                                    @endforeach

                                    </tbody>

                                </table>
                                <div class="text-center">
                                    <input type="submit" class="btn btn-success font-weight-bold" value="Bazaga jo'natish">
                                </div>
                            </form>
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
