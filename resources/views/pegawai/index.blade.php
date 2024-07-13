<!DOCTYPE html>
<html lang="en">

<head>
    @include('Template.head')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{asset('gambar/logo1.png')}}" height="60" width="60">
        </div>
        @include('Template.navbar')

        @include('Template.sidebar')

        <div class="content-wrapper">

            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Data Pegawai</h1>
                        </div>
                    </div>

                    <div class="content">
                        <div class="card card-info card-outline">
                            <div class="card-header">
                                <div class="card-tools">
                                    <a href="{{ route('Admin.pegawai.create') }}" class="btn btn-success"><i class="fas fa-plus-square"></i> Tambah Data </a>
                                </div>
                            </div>

                            <div class="card-body">
                                <table class="table table-borderd">
                                    <tr>
                                        <th>No</th>
                                        <th>NIK</th>
                                        <th>Nama</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Jabatan</th>
                                        <th>Action</th>
                                    </tr>
                                    @foreach ($dataPegawai as $data)
                                    <tr>
                                        <td>{{ $data->id }}</td>
                                        <td>{{ $data->nik }}</td>
                                        <td>{{ $data->nama }}</td>
                                        <td>{{ $data->tgl_lahir }}</td>
                                        <td>{{ $data->jenis_kelamin }}</td>
                                        <td>{{ $data->jabatan }}</td>
                                        <td class="d-flex">
                                            <a href="{{ route('Admin.pegawai.edit', $data->id) }}" class="btn btn-info btn-sm me-2">
                                                <i class="fas fa-edit"></i> Edit
                                            </a>
                                            <form action="{{ route('Admin.pegawai.delete', $data->id) }}" method="post">
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-sm ml-2 me-2" onclick="return confirm('Yakin data ini akan dihapus?')">
                                                    <i class="fas fa-trash-alt"></i> Hapus
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        {{ $dataPegawai->links() }}
                    </div>
                </div>
            </div>
        </div>
        <footer class="main-footer">
            @include('Template.footer')
        </footer>
        <aside class="control-sidebar control-sidebar-dark">
        </aside>
    </div>
    @include('Template.script')
</body>

</html>