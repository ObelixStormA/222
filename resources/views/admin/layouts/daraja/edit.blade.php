@extends('admin.master.master')
@section('title', 'Darajani o\'zgartirish')
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
        <form method="post" action="/admin/daraja/{{$daraja->id}}">
            @method('PUT')
            @csrf
            <div class="row">
                <div class="col-md-12 mt-5">
                    <div class="card card-cyan">
                        <div class="card-header">
                            <h3 class="card-title">Darajani o'zgartirish</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nomi">Daraja nomi</label>
                                <input name="nomi" type="text" id="inputName" class="form-control" value="{{$daraja->nomi}}">

                            </div>
                        </div>

                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <a href="{{route('admin.daraja.index')}}" class="btn btn-secondary">Orqaga</a>
                    <input type="submit" value="O'zgartirish" class="btn btn-success float-right">
                </div>
            </div>
        </form>
    </section>
@endsection
