@extends('kafedraBoshligi.master.master')
@section('title', 'Yangi fan biriktirish')
@push('css')
    <link href="{{asset('admin/dist/select2/css/css.css')}}" rel="stylesheet" />
    <style>

    </style>
@endpush
@section('content')
    <section class="content">
        @if($errors->any())
            <div class="alert alert-danger">
                <ul class="list-unstyled">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="post" action="/kafedraboshligi/fanbiriktirish/{{$data->id}}">
            @method('put')
            @csrf
            <div class="row">
                <div class="col-md-12 mt-5">
                    <div class="card card-cyan">
                       <div class="card-header">
                            <h3 class="card-title">Fan biriktirishni o'zgartirish</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="container mt-3">
                            <div class="row">
                                <div class="col-3 text-right">
                                    <label for="fan_id">Fanni tanlang: </label>
                                </div>
                                <div class="col-6">
                                    <select name="fan_id" id="fan_id" class="form-control-sm col-12 fan_select2-example">
                                        @foreach($fanlar as $fan)
                                            <option @if($fan->id == $data->fan_id) selected="" @endif value="{{$fan->id}}">{{$fan->nomi}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="container mt-3">
                            <div class="row">
                                <div class="col-3 text-right">
                                    <label for="fan_soati">Fan soati: </label>
                                </div>
                                <div class="col-6">
                                    <input name="fan_soati" id="fan_soati" type="number" value="{{$data->fan_soati}}" id="inputName" class="form-control-sm col-6">
                                </div>
                            </div>
                        </div>

                        <div class="container mt-3">
                            <div class="row">
                                <div class="col-3 text-right">
                                    <label for="teacher_id">O'qituvchini tanlang: </label>
                                </div>
                                <div class="col-6">
                                    <select class="form-control-sm col-6 teach_select2-example col-6" name="teach_id" id="teacher_id">
                                        @foreach($teachers as $teach)
                                            <option @if($teach->id == $data->teacher_id) selected="" @endif value="{{$teach->id}}">{{$teach->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="container mt-3">
                            <div class="row">
                                <div class="col-3 text-right">
                                    <label for="semestr_id">Semestrni tanlang: </label>
                                </div>
                                <div class="col-6">
                                    <select class="form-control-sm semestr_select2-example col-6" name="semestr_id" id="semestr_id">
                                        @foreach($semestrs as $semestr)
                                            <option @if($semestr->id == $data->semestr) selected="" @endif value="{{$semestr->id}}">{{$semestr->nomi}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="container mt-3">
                            <div class="row">
                                <div class="col-3 text-right">
                                    <label for="guruh_id">Guruh tanlang: </label>
                                </div>
                                <div class="col-6">
                                    <select class="form-control-sm col-12" name="guruh_id" id="guruh_id" >
                                        @foreach($guruhs as $guruh)
                                            <option @if($guruh->id == $data->guruh_id) selected="" @endif value="{{$guruh->id}}">{{$guruh->nomi}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>


                        <div class="card-body">


                        </div>

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                    @enderror
                    <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <a href="{{route('kafedraboshligi.fanbiriktirish.index')}}" class="btn btn-secondary">Orqaga</a>
                    <input type="submit" value="Yaratish" class="btn btn-success float-right">
                </div>
            </div>
        </form>
    </section>
@endsection
@push('js')
    <script src="{{asset('admin/dist/select2/js/js.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.fan_select2-example').select2({
                placeholder: 'Select an option'
            })
        });
        $(document).ready(function() {
            $('.semestr_select2-example').select2({
                placeholder: 'Select an option'
            })
        });
        $(document).ready(function() {
            $('.teach_select2-example').select2({
                placeholder: 'Select an option'
            })
        });
        $(document).ready(function() {
            $('.guruh_select2-example').select2({
                placeholder: 'guruhni tanlang'
            })
        });



    </script>
@endpush
