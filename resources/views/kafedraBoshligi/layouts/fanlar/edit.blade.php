@extends('kafedraBoshligi.master.master')
@section('title', 'Fanni o\'zgartirish')
@section('content')
    <section class="content">
        <form method="post" action="/kafedraboshligi/fanlar/{{$getFan->id}}">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-12 mt-5">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Fanni o'zgartirish</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nomi"  >Fan nomi</label>
                                <input type="text" name="nomi" id="inputName" class="form-control" value="{{$getFan->nomi}}">
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>

            </div>
            <div class="row">
                <div class="col-12">
                    <a href="/kafedraboshligi/fanlar" class="btn btn-secondary">Orqaga</a>
                    <input type="submit" value="O'zgartish" class="btn btn-success float-right">
                </div>
            </div>
        </form>
    </section>
@endsection
