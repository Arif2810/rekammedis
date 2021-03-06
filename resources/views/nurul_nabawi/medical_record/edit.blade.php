<!DOCTYPE html>
<html>
<head>
	@include('templates.head')
	<title>Edit Rekam Medis</title>
</head>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">

	  	<header class="main-header">
	  		@include('templates.header')
	  	</header>
		<!-- Left side column. contains the logo and sidebar -->
		<aside class="main-sidebar">
			@include('templates.sidebar')
		</aside>

  		<!-- Content Wrapper. Contains page content -->
	  	<div class="content-wrapper">
		    <!-- Content Header (Page header) -->
		    <section class="content-header">
		      <h1>
		        Data Rekam Medis Pasien
		        <small>advanced tables</small>
		      </h1>
		      <ol class="breadcrumb">
		        <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
		        <li><a href="{{ route('medical_record.index') }}">Data Rekam Medis Pasien</a></li>
		        <li class="active">Edit Data Rekam Medis Pasien</li>
		      </ol>
		    </section>

		    <section class="content">
		      	<div class="row">
		        	<div class="col-xs-12">
		          		<div class="box">
		            		<div class="box-header">
		            			<div class="box-header">
					              <h5 class="box-title">Edit data rekam medis pasien klinik Nurul Nabawi Al-Kautsar</h5>
					            </div>
					            <div class="box-body">
					            	{!! Form::model($medical_records,['route'=>['medical_record.update',$medical_records->id_mr],'method'=>'PUT']) !!}
					            		<div>
											<label>Tanggal Periksa</label>
											<input class="form-control" type="date" name="tgl_periksa" value="{{ $medical_records->tgl_periksa }}">
										</div><br>
										<div>
											{{ Form::label ('id_pasien', "Nama Pasien") }}
											{{ Form::select('id_pasien', \App\Patient::pluck('nama_pasien', 'id_pasien'), NULL, ['class'=>'form-control']) }}
										</div><br>
										<div>
											<label for="riwayat">Riwayat Penyakit</label>
											<textarea class="form-control" name="riwayat" id="riwayat" cols="80" rows="3">{{ $medical_records->riwayat }}</textarea>
											<!-- <input class="form-control" type="text" name="riwayat" value="{{ $medical_records->riwayat }}"> -->
										</div><br>
										<div>
											<label for="keluhan">Keluhan</label>
											<textarea class="form-control" name="keluhan" id="keluhan" cols="80" rows="3">{{ $medical_records->keluhan }}</textarea>
										</div><br>
										<div>
											<label for="check">Pemeriksaan</label>
											<textarea class="form-control" name="check" id="check" cols="80" rows="3">{{ $medical_records->check }}</textarea>
										</div><br>
										<div>
											<label for="diagnosa">Diagnosa</label>
											<textarea class="form-control" name="diagnosa" id="diagnosa" cols="80" rows="3">{{ $medical_records->diagnosa }}</textarea>
										</div><br>					            		
										<div>
											{{ Form::label ('id_obat', "Obat") }}
											{{ Form::select('medicines[]', \App\Medicine::pluck('nama_obat', 'id_obat'), NULL, ['class'=>'form-control', 'multiple'=>'multiple']) }}														
										</div><br>
										<div>
											<label for="resep">Resep</label>
											<textarea class="form-control" name="resep" id="resep" cols="80" rows="3">{{ $medical_records->resep }}</textarea>
										</div><br>								
										<div>
											<label for="ket">Keterangan</label>
											<textarea class="form-control" name="ket" id="ket" cols="80" rows="3">{{ $medical_records->ket }}</textarea>
										</div><br>
										<div>
											{{ Form::label ('id_tindakan', "Tindakan") }}
											{{ Form::select('id_tindakan', \App\Treatment::pluck('nama_tindakan', 'id_tindakan'), NULL, ['class'=>'form-control']) }}
										</div><br>
										<div>
											<label>User : </label>
											{{ Auth::user()->name }}
											<!-- <input class="form-control" type="text" name="nama_user" value="{{ $medical_records->user }}"> -->
										</div><br><br>
										<div>
											<input class="btn btn-primary" type="submit" name="submit" value="Simpan">
											<input type="reset" class="btn btn-danger" value="Reset">
											{{csrf_field()}}
											<input type="hidden" name="_method" value="PUT">
										</div>					            	
					            </div>
		            		</div>
		        		</div>
		    		</div>
				</div>
			</section>
		</div>
		<!-- /.content-wrapper -->

		<footer class="main-footer">
    		@include('templates.footer')
  		</footer>

		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			@include('templates.control_sidebar')
		</aside>
	</div>
@include('templates.scripts')
</body>
</html>
