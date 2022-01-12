@extends('kursant.master.master')
@section('title', 'Topshiriq yuklash')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            {{--@dd($fanlar)--}}
            <div class="col-md-12 mt-4">
                <h3>Vazifa yuklash oynasi</h3>
                <div class="card">
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="alert-danger">{{$error}}</div>
                        @endforeach
                    @endif
                    <div class="card-body">
                        <form method="POST" action="{{route('teacher.mark.store')}}" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="container">
                                <div class="row">
                                    <div class="col-3 text-right">
                                        <h5><label for="fan_nomi">Fan nomi: </label></h5>
                                    </div>
                                    <div class="col-3 text-left">
                                        <label><h4>{{$fan->nomi}}</h4></label>

                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="teacher_id" value="{{$teacher->id}}">
                            <input type="hidden" name="fan_id" value="{{$fan->id}}">
                            <input type="hidden" name="guruh_id" value="{{$guruh_id}}">
                            <input type="hidden" name="task_id" value="{{$task->id}}">
                            <div class="container">
                                <div class="row">
                                    <div class="col-3 text-right">
                                        <h5><label for="teach_nomi"> O'qituvchi : </label></h5>
                                    </div>
                                    <div class="col-3 text-left">
                                        <h4>{{$teacher->name}}</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-3 text-right">
                                        <h5><label for="teach_nomi"> Topshiriq nomi : </label></h5>
                                    </div>
                                    <div class="col-3 text-left">
                                        <h4>{{$task->nomi}}</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="container mt-3">
                                <div class="row">
                                    <div class="col-3 text-right">
                                        <label for="kursant_id">Kursantni tanlang: </label>
                                    </div>
                                    <div class="col-6">

                                        <select name="kursant_id" class="form-control">
                                            @foreach($kursantlar as $kursant)
                                                <option value="{{$kursant->id}}">{{$kursant->name}}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>
                            </div>


                            <div class="container mt-3">
                                <div class="row">
                                    <div class="col-3 text-right">
                                        <label for="ball">Baho : </label>
                                    </div>
                                    <div class="col-6">
                                        <input type="number" name="ball" class="form-control-sm" required>
                                    </div>
                                </div>
                            </div>


                            <div class="container mt-3">
                                <div class="row">
                                    <div class="col-3"></div>
                                    <div class="col-3">
                                        <input type="submit" style="font-size: 1.5rem" class="form-control btn btn-success pt-0" value="Saqlash">

                                    </div>
                                </div>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>



    </div>

@endsection
