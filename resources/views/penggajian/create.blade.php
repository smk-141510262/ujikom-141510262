@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h2><b><center> Create Data Penggajian </center></b></h2></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/Penggajian') }}">
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
