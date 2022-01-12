@extends('teacher.master.master')
@section('title', 'Topshiriq yuklash')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            {{--@dd($fanlar)--}}
            <div class="col-md-12 mt-4">
                <h3>Vazifani o'zgertirish</h3>
                <div class="card">
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="alert-danger">{{$error}}</div>
                        @endforeach
                    @endif
                    <div class="card-body">
                        <form method="POST" action="/teacher/task/{{$task->id}}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="container">
                                <div class="row">
                                    <div class="col-3 text-right">
                                        <label for="task_nomi">Topshiriq nomi: </label>
                                    </div>
                                    <div class="col-6">
                                        <input type="text" name="task_nomi" value="{{$task->nomi}}" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="container mt-3">
                                <div class="row">
                                    <div class="col-3 text-right">
                                        <label for="fan_id">Fan: </label>
                                    </div>
                                    <div class="col-6">
                                        <select name="fan_id" id="fan" class="form-control">
                                            @foreach($fanlar as $fan)
                                                <option @if($fan->fan_id == $task->fan_id) selected="" @endif value="{{$fan->fan_id}}">{{$fan->getFan->nomi}}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="container mt-3">
                                <div class="row">
                                    <div class="col-3 text-right">
                                        <label for="guruh_id">Guruh: </label>
                                    </div>
                                    <div class="col-6">
                                        <select name="guruh_id" id="fan" class="form-control">
                                            @foreach($guruhlar as $guruh)
                                                <option @if($fan->guruh_id == $task->guruh_id) selected="" @endif value="{{$guruh->guruh_id}}">{{$guruh->getGuruh->nomi}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="container mt-3">
                                <div class="row">
                                    <div class="col-3 text-right">
                                        <label for="task">Vazifa: </label>
                                    </div>
                                    <div class="col-6">
                                        <input type="file" name="task" class="form-control-file border" required>
                                    </div>
                                </div>
                            </div>

                            <div class="container mt-3">
                                <div class="row">
                                    <div class="col-3 text-right">
                                        <label for="ball">Max. ball: </label>
                                    </div>
                                    <div class="col-6">
                                        <input value="{{$task->max_ball}}" type="number" name="ball" class="form-control-sm" required>
                                    </div>
                                </div>
                            </div>
                            <div class="container mt-3">
                                <div class="row">
                                    <div class="col-3 text-right">
                                        <label for="desc">Qo'shimcha ma'lumot uchun </label>
                                    </div>
                                    <div class="col-6">
                                        <textarea type="text" name="desc" class="form-control" cols="86" rows ="5" placeholder="Topshiriq haqida qisacha ma'lumot">{{$task->description}}</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="container mt-3">
                                <div class="row">
                                    <div class="col-3 text-right">
                                        <label for="dead_line">Tugash vaqti: </label>
                                    </div>
                                    <div class="col-6">
                                        <input type="datetime-local" value="{{date("Y-m-d\TH:i:s", strtotime($task->dead_line))}}" name="dead_line" class="form-control-sm" required>
                                    </div>
                                </div>
                            </div>

                            <div class="container mt-3">
                                <div class="row">
                                    <div class="col-3"></div>
                                    <div class="col-3">
                                        <input type="submit" style="font-size: 1.5rem" class="form-control btn btn-success pt-0" value="Yuklash">

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
