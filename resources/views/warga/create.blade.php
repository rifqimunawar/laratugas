@section('title') {{ 'Tambah Warga' }}@endsection
@extends('app')
@section('content')
  <div class="container">
    
  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Warga Manajemen </h1>
    <p class="mb-4"></p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Warga</h6>
        </div>
        <div class="card-body">

          <form action="/warga/store" method="post" enctype="multipart/form-data" >
            @csrf 

            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Nama Warga</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" name="name">
            </div>

            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Alamat</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" name="alamat">
            </div>


            <div class="my-3">
              <a href="/warga" class="btn btn-warning">Kembali</a>
              <button type="submit" class="btn btn-success">Simpan</button>
          </div>

          </form>

        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

  </div>
    @endsection