@extends('kafedraBoshligi.master.master')
@section('title', 'Guruh yaratish')
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

        <form method="post" action="{{route('kafedraboshligi.fanlar.store')}}">
            @method('post')
            @csrf
            <div class="row">
                <div class="col-md-12 mt-5">
                    <div class="card card-cyan">
                        <div class="card-header">
                            <h3 class="card-title">Yangi fan qo'shish</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nomi">Fan nomi</label>
                                <input name="nomi" type="text" id="inputName" class="form-control" placeholder="fan nomini kiriting...">
                            </div>

                            @error('nomi')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>



                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <a href="{{route('kafedraboshligi.fanlar.index')}}" class="btn btn-secondary">Orqaga</a>
                    <input type="submit" value="Yaratish" class="btn btn-success float-right">
                </div>
            </div>
        </form>
    </section>
@endsection
