@extends('main')

@section('title','dashboard')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Data Table</h1>
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
        List of Region

        <div class="card">
            <div class="card-header">
                <div class="pull-left">
                    <strong>Data Provinsi</strong>
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
                        <th> Id Provinsi </th>
                        <th> Nama Provinsi </th>
                        <th></th>
                    </thead>
                    <tbody>
                        @foreach($provinsi as $p)
                        <tr>
                            
                            <td>{{ $p->id_provinsi }}</td>
                            <td>{{ $p->nama_provinsi }}</td>
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