<!DOCTYPE html>
<html>
<head>
	@include('templates.head')
	<title>Tambah Rekam Medis</title>
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
			Data Rekam Medis
			<small>advanced tables</small>
			</h1>
			<ol class="breadcrumb">
			<li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="{{ route('patient.index') }}">Data Rekam Medis</a></li>
			<li class="active">Tambah Data Rekam Medis</li>
			</ol>
		</section>

		<section class="content">
			<div class="row">
				<div class="col-xs-12">
					<div class="box">
						<div class="box-header">
							<div class="box-header">
								<h5 class="box-title">Tambah data rekam medis klinik Nurul Nabawi Al-Kautsar</h5>
							</div>
							<div class="box-body">
								@include('nurul_nabawi/validation')
								@include('nurul_nabawi/notification')
								<form action="{{ url('/medical_record') }}" method="post">
									<div>
										<label for="tgl_periksa">Tanggal Periksa</label>
										<input required="" class="form-control" type="date" name="tgl_periksa" id="tgl_periksa" value="<?=date('Y-m-d')?>">
									</div><br>
									<div>
										<label>Nama Pasien</label>
										<select required="" class="form-control" name="id_pasien">
											<option>- Pilih Pasien -</option>
											@foreach($patients as $patients)
											<option value="{{$patients->id_pasien}}">{{$patients->nama_pasien}}</option>
											@endforeach
										</select>
									</div><br>
									<div>
										<label for="riwayat">Riwayat Penyakit</label>
										<textarea class="form-control" type="text" name="riwayat" id="riwayat" cols="80" rows="3"></textarea>
									</div><br>
									<div>
										<label for="keluhan">Keluhan</label>
										<textarea required="" class="form-control" type="text" name="keluhan" id="keluhan" cols="80" rows="3"></textarea>
									</div><br>
									<div>
										<label for="check">Pemeriksaan</label>
										<textarea class="form-control" type="text" name="check" id="check" cols="80" rows="3"></textarea>
									</div><br>
									<div>
										<label for="diagnosa">Diagnosa</label>
										<textarea required="" class="form-control" type="text" name="diagnosa" id="diagnosa" cols="80" rows="3"></textarea>
									</div><br>
									<div>
										<label for="obat">Obat</label>
										<select multiple="multiple" size="7" class="form-control" name="medicines[]" id="obat">
											@foreach($medicines as $medicine)
											<option value="{{$medicine->id_obat}}">{{$medicine->nama_obat}}</option>
											@endforeach
										</select>
									</div><br>
									<div>
										<label for="resep">Resep</label>
										<textarea class="form-control" type="text" name="resep" id="resep" cols="80" rows="3"></textarea>
									</div><br>
									<div>
										<label for="ket">Keterangan</label>
										<textarea class="form-control" type="text" name="ket" id="ket" cols="80" rows="3"></textarea>
									</div><br>
									<div>
										<label for="tindakan">Tindakan</label>
										<select required="" class="form-control" name="id_tindakan" id="tindakan">
											<option>- Pilih Tindakan -</option>
											@foreach($treatments as $treatments)
											<option value="{{$treatments->id_tindakan}}">{{$treatments->nama_tindakan}}</option>
											@endforeach
										</select>
									</div><br>
									<div>
										<input class="btn btn-primary" type="submit" name="submit" value="Tambahkan">
										{{csrf_field()}}
										<input type="reset" class="btn btn-danger" value="Reset">
									</div>
								</form>
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
