@extends('main')

@section('title','dashboard')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>City Data</h1>
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
   

        <div class="card">
            <div class="card-header">
                <div class="pull-left">
                    <strong>Edit Kota</strong>
                </div>
                <div class="pull-right">
                    <a href="{{ url('kota') }}" class="btn btn-secondary btn-sm">
                        <i class="fa fa-undo"></i> Back
                    </a>
                </div>
            </div>
            <div class="card-body">
                @foreach($kota as $s)
                <div class="row">
                    <div class="col-md-4 offset-md-4">
                                <form action="{{ url('kota/kotaupdate') }}" method="post">
                                    @csrf
                                <div class="form-group">
                                    <label for="id_provinsi">ID provinsi</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                            <input type="text"  class="form-control" name="id_provinsi" value="{{ $s->id_provinsi }}" placeholder="Masukkan nama"/>
                                    </div>
                                </div>
        
                                <div class="form-group">
                                    <label for="nama_kota">Nama Kota</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" name="nama_kota" value="{{ $s->nama_kota }}" placeholder="Masukkan nama kota"/>
                                    </div>
                                </div>                                
        
                        <button type="submit" class="btn btn-success">Save</button>
                    </form>
                    @endforeach
                    </div>
                </div>   
            
                 </div>

            </div>
        </div>


    </div>

</div>
@endsection