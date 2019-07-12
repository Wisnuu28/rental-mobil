@extends('apps.layout')
@section('sectionheader')
<section class="content-header">
    <h1>
      Edit Data
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-database"></i> Master Data</a></li>
      <li>Edit Data</li>
    </ol>
  </section>
@endsection
@section('content')
<section class="content">
   <div class="box box-primary">
        <div class="box-header">
        @if(count($errors) > 0)
				<div class="alert alert-danger">
					@foreach ($errors->all() as $error)
					{{ $error }} <br/>
					@endforeach
				</div>
				@endif
        </div>
        <div class="box-body">
            <div class="row">
                <form action="/edit/update/{{ $data_mobil->id }}" method="post">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="form-group">
                    <label>Nama Mobil</label>
                    <input class="form-control" name="nama_mobil" value="Nama Mobil">
                </div>
                <div class="form-group">
                    <label>Harga Sewa</label>
                    <input class="form-control" name="harga_sewa" value="Harga Sewa">
                </div>
                <div class="form-group">
                    <label>Keterangan</label>
                    <textarea class="form-control" name="keterangan" value=Keterangan></textarea>
                </div>
                <div class="form-group">
                    <label>Upload File</label>
                    <input class="form-control-file" type="file" name="file">
                </div>
                </form>
            </div>
        </div>
    </div>

@endsection