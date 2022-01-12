@extends('kafedraBoshligi.master.master')
@section('title', 'Scroll')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">

                            <h3 class="card-title">Biriktirilgan fanlar</h3>

                            @if(session('succes'))
                                <div class="alert alert-success">
                                    <ul class="list-uenstyled">
                                        <h2>{{session('succes')}}</h2>
                                    </ul>
                                </div>
                            @endif
                        </div>

                        <!-- /.card-header -->
                       @dd($data)
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
