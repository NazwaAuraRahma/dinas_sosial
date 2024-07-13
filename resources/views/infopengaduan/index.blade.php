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
                            <h1 class="m-0">Info Pengaduan</h1>
                        </div>
                    </div>

                    <div class="content">
                        <div class="card card-info card-outline">


                            <div class="card-body">
                                <table class="table table-borderd">
                                    <tr>
                                        <th>No</th>
                                        <th>Judul Pengaduan</th>
                                        <th>Nama Pelapor</th>
                                        <th>NIK</th>
                                        <th>Isi Laporan</th>
                                        <th>Action</th>
                                    </tr>
                                    @foreach ($dataInfo as $datai)
                                    <tr>
                                        <td>{{ $datai->id }}</td>
                                        <td>{{ $datai->judul_laporan }}</td>
                                        <td>{{ $datai->nama }}</td>
                                        <td>{{ $datai->nik }}</td>
                                        <td>{{ $datai->laporan }}</td>
                                        <td class="d-flex">
                                            <form action="{{ route('Admin.infopengaduan.delete', $datai->id) }}" method="POST">
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-sm ml-2 me-2" onclick="return confirm('Yakin data ini akan dihapus?')">
                                                    <i class="fas fa-trash-alt"></i> Hapus
                                                </button>
                                            </form>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </table>
                            </div>


                        </div>
                        <div class="card-footer">
                            {{ $dataInfo->links() }}
                        </div>
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