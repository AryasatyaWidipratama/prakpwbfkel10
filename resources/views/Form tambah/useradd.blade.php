@extends('main')

@section('title','dashboard')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>User Data</h1>
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
        List of user data

        <div class="card">
            <div class="card-header">
                <div class="pull-left">
                    <strong>Tambah User</strong>
                </div>
                <div class="pull-right">
                    <a href="{{ url('user') }}" class="btn btn-secondary btn-sm">
                        <i class="fa fa-undo"></i> Back
                    </a>
                </div>
            </div>
            <div class="card-body">
                
                <div class="row">
                    <div class="col-md-4 offset-md-4">
                                <form action="{{ url('user/store') }}" method="post">
                                    @csrf
                                <div class="form-group">
                                    <label for="nama_user">Nama User</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                            <input type="text"  class="form-control" name="nama_user" placeholder="Masukkan nama"/>
                                    </div>
                                </div>
        
                                <div class="form-group">
                                    <label for="email">Email</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" name="email" placeholder="Masukkan Email"/>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password">Password</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-key fa" aria-hidden="true"></i></span>
                                            <input type="password" class="form-control" name="password" placeholder="Masukkan Password"/>
                                    </div>
                                </div>
        
                                <div class="form-group">
                                    <label for="tgl_lahir">Tanggal Lahir</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-calendar fa" aria-hidden="true"></i></span>
                                            <input type="date" class="form-control" name="tgl_lahir" placeholder="Masukkan Tanggal Lahir"/>
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