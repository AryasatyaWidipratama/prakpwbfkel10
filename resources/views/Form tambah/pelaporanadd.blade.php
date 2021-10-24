@extends('main')

@section('title','dashboard')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Data Pelaporan</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active"><i class="fa fa-dashboard"></i></li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="content mt-3">
 
    <div class="animated fadeIn">
        List of Pelaporan

        <div class="card">
            <div class="card-header">
                <div class="pull-left">
                    <strong>Tambah Pelaporan</strong>
                </div>
                <div class="pull-right">
                    <a href="{{ url('pelaporan') }}" class="btn btn-secondary btn-sm">
                        <i class="fa fa-undo"></i> Back
                    </a>
                </div>
            </div>
            <div class="card-body">
                
                <div class="row">
                    <div class="col-md-4 offset-md-4">
                                <form action="{{ url('pelaporan/store') }}" method="post">
                                    @csrf
                                <div class="form-group">
                                    <label for="id_user">ID user</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                            <input type="text"  class="form-control" name="id_user" placeholder="Masukkan nama"/>
                                    </div>
                                </div>
        
                                <div class="form-group">
                                    <label for="id_bencana">ID Bencana</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" name="id_bencana" placeholder="Masukkan Email"/>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="id_kecamatan">ID Kecamatan</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" name="id_kecamatan" placeholder="Masukkan Email"/>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="waktu_bencana">Waktu Bencana</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" name="waktu_bencana" placeholder="Masukkan Waktu"/>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="status">Status</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" name="status" placeholder="Masukkan Status"/>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="edit">Edit</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" name="edit" placeholder="edit"/>
                                    </div>
                                </div>
                                        
                        <button type="submit" class="btn btn-success">Save</button>
                    </form>
                    </div>
                </div>   
            
                 </div>

            </div>
        </div>


    </div>

</div>
@endsection