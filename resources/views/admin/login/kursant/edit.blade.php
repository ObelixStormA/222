@extends('admin.master.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-4">
                <div class="card">
                    <div class="card-header">Kursant</div>
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div>{{$error}}</div>
                        @endforeach
                    @endif
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.kursant.update', [$user]) }}">
                            @csrf
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"  required autocomplete="name" autofocus value="{{ $user->name }}">

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"  required value="{{ $user->email }}" >

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kafedra_id" class="col-md-4 col-form-label text-md-right">{{ "Kafedrani tanlang" }}</label>

                                <div class="col-md-6">
                                    <div class="form-group">

                                        <select class="form-control" name="kafedra_id">
                                            @foreach($kafedra as $kaf)
                                                <option value="{{$kaf->id}}">{{$kaf->nomi}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kurs_id" class="col-md-4 col-form-label text-md-right">{{ "Foydalanuvchi kursini tanlang" }}</label>

                                <div class="col-md-6">
                                    <div class="form-group">

                                        <select class="form-control" name="kurs_id">
                                            @foreach($kurs as $kur)
                                                <option value="{{$kur->id}}">{{$kur->nomi}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="guruh_id" class="col-md-4 col-form-label text-md-right">{{ "Foydalanuvchi guruhini tanlang" }}</label>

                                <div class="col-md-6">
                                    <div class="form-group">

                                        <select class="form-control" name="guruh_id">
                                            @foreach($guruh as $guruh)
                                                <option value="{{$guruh->id}}">{{$guruh->nomi}}</option>
                                            @endforeach

                                        </select>
                                    </div>

                                    @error('password')
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
                                        {{ "O'zgartirish" }}
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
