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
                    <strong>Data User</strong>
                </div>
                <div class="pull-right">
                    <a href="" class="btn btn-success btn-sm">
                        <i class="fa fa-plus"></i> Add
                    </a>
                </div>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <th>ID USER</th>
                        <th> Nama </th>
                        <th> Email </th>
                        <th> Tanggal Lahir </th>
                        <th> Edit </th>
                    </thead>
                    <tbody>
                        @foreach($user as $p)
                        <tr>
                            <td></td>
                            <td>{{ $p->id_user }}</td>
                            <td>{{ $p->nama_user }}</td>
                            <td>{{ $p->email }}</td>
                            <td>{{ $p->tgl_lahir }}</td>
                            <td class="text-center">
                                <a href="" class="btn btn-primary btn-sm">
                                    <i class="fa fa-pencil"></i>
                                </a>
                            </td>

                                </tr>
                                @endforeach
            
                    </tbody>
            
                    </table>

            </div>
        </div>


    </div>

</div>
@endsection