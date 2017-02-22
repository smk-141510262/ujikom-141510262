@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><h2><b><center> Data Tunjangan Pegawai </center></b></h2></div>

                <div class="panel-body">
                    <a href="{{url('/TunjanganPegawai/create')}}" class="btn btn-primary btn-block">Create Data Tunjangan Pegawai</a><br>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <td><center><b>No</b></center></td>
                                <td><center><b>Kode Tunjangan</b></center></td>
                                <td><center><b>Nama Pegawai</b></center></td>
                                <td colspan="2"><center><b>Action</b></center></td>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $i=1;
                            @endphp
                            @foreach ($tunjanganpegawais as $baru)
                                <tr>
                                    <td>{{ $i++}}</td>
                                    <td>{{ $baru->tunjangan->kode_tunjangan }}</td>
                                    <td>{{ $baru->pegawai->User->name }}</td>
                                    <td><a href="{{route('TunjanganPegawai.edit',$baru->id)}}" class="btn btn-success">Edit Data</a></td>
                                    <td>
                                    {!! Form::open(['method' => 'DELETE', 'route'=>['TunjanganPegawai.destroy', $baru->id]]) !!}
                                    {!! Form::submit('Delete Data', ['class' => 'btn btn-danger']) !!}
                                    {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
