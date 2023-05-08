@section('title') {{ 'warga' }}@endsection
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
            <h6 class="m-0 font-weight-bold text-primary">Warga Manajemen</h6>
        </div>
        <div class="card-body">
          <a href="/warga/create" class="btn btn-primary my-3" >Tambah Warga</a>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <td class="text-center">No</td>
                        <td class="text-center">Nama</td>
                        <td class="text-center">Alamat</td>
                        <td class="text-center"> Aksi</td>
                    </tr>
                    @foreach ($warga as $warg)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td>{{ $warg->name }}</td>
                        <td>{{ $warg->alamat }}</td>
                        <td class="text-center">
                          <div class="btn-group" >
                            <div class="btn">
                              <a href="/warga/{{ $warg->id }}/edit" class="btn btn-warning btn-sm mx-2">Edit</a>
                            </div>
                            <div class="btn">
                              <form action="{{ route('warga.destroy', $warg->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm mx-2" data-confirm-delete="true" onclick="return confirm
                                ('Apakah Anda yakin ingin menghapus warga ini?')">Hapus</button>
                            </form>
                          </div>
                        </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

  </div>
    @endsection