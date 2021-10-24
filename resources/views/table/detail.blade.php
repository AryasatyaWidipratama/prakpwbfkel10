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

        <div class="card">
            <div class="card-header">
                <div class="pull-left">
                    <strong>Detail Korban</strong>
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
                        <th> Id Detail Korban </th>
                        <th> Id Pelaporan</th>
                        <th> NIK </th>
                        <th> Nama </th>
                        <th> Umur </th>
                        <th> Kondisi </th>
                        <th> Edit </th>
                    </thead>
                    <tbody>
                        @foreach($detailkorban as $p)
                        <tr>
                            
                            <td>{{ $p->id_detailkorban }}</td>
                            <td>{{ $p->id_pelaporan }}</td>
                            <td>{{ $p->nik }}</td>
                            <td>{{ $p->nama }}</td>
                            <td>{{ $p->umur }}</td>
                            <td>{{ $p->kondisi }}</td>
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