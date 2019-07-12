@extends('apps.layout')
@section('sectionheader')
<section class="content-header">
    <h1>
      Tambah Data
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-database"></i> Master Data</a></li>
      <li>Tambah Data</li>
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
            <form action="/tambahdata/store" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nama Mobil</label>
                        <input class="form-control" name="nama_mobil">
                    </div>
                    <div class="form-group">
                        <label>Harga Sewa</label>
                        <input class="form-control" name="harga_sewa">
                    </div>
                    <div class="form-group">
                        <label>Keterangan</label>
                        <textarea class="form-control" name="keterangan" rows="4"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Upload Gambar</label>
                        <input class="form-control-file" type="file" name="file"></br>
                    </div>
                        <input type="submit" value="Upload" class="btn btn-primary">
                    </form>
                    <a class="btn btn-default" href="/dashboard">Cancel</a>
                </div>
            </div>
        </div>
   </div>
</section>
@endsection