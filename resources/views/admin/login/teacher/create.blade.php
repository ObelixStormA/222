@extends('admin.master.master')

@section('content')
    <div class="container">

        <div class="row justify-content-center">

            <div class="col-md-12 mt-4">
                <h3>O'qituvchi</h3>
                <div class="card">

                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div>{{$error}}</div>
                        @endforeach
                    @endif
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.teach.store') }}">
                            @csrf
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ 'FIO' }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"  required autocomplete="name" autofocus placeholder="Foydalanuvchi nomini kiritng...">

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{'E-mail addresi' }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"  required autocomplete="email" placeholder="Emailni kiriting">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="type_id" class="col-md-4 col-form-label text-md-right">{{ "Kafedrani tanlang" }}</label>
                                <div class="col-md-6">
                                    <div class="form-group">

                                        <select class="form-control" name="kafedra_id">
                                            @foreach($kafedra as $kaf)
                                                <option value="{{$kaf->id}}">{{$kaf->nomi}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    @error('kafedra_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="daraja_id" class="col-md-4 col-form-label text-md-right">{{ "Ilmiy darajani tanlang" }}</label>

                                <div class="col-md-6">
                                    <div class="form-group">

                                        <select class="form-control" name="daraja_id">
                                            <option value="0">mavjud emas</option>
                                            @foreach($daraja as $dar)
                                                <option value="{{$dar->id}}">{{$dar->nomi}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    @error('daraja_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="unvon_id" class="col-md-4 col-form-label text-md-right">{{ "Ilmiy unvonini tanlang" }}</label>

                                <div class="col-md-6">
                                    <div class="form-group">

                                        <select class="form-control" name="unvon_id">
                                            <option value="0">mavjud emas</option>
                                            @foreach($unvon as $un)
                                                <option value="{{$un->id}}">{{$un->nomi}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    @error('unvon_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ 'Parolni kiritish' }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="parolni kiriting" name="password" required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ 'Parolni tasdiqlang' }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="parolni takrorlang" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ "Ro'yxatga olish" }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
