<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Kost Hunter</title>

    <!-- Custom fonts for this template -->
    <link href="{{asset('assetadmin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('assetadmin/css/sb-admin-2.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="{{asset('assetadmin/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Kost Hunter</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Tables -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Properti</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                                <img class="img-profile rounded-circle"
                                    src="{{asset('assetadmin/img/undraw_profile.svg')}}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">List Properti</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex align-items-center">
                            <h6 class="m-0 font-weight-bold text-primary">Data Properti</h6>
                            <a href="#" data-toggle="modal" data-target="#tambahPropertiModal" class="btn btn-primary ml-auto">Tambah Properti</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Gambar</th>
                                            <th>Nama</th>
                                            <th>Tipe</th>
                                            <th>Harga</th>
                                            <th>Alamat</th>
                                            <th>Wifi</th>
                                            <th>Jumlah Kamar</th>
                                            <th>Tipe Kamar Mandi</th>
                                            <th>Dapur</th>
                                            <th>Lain-lain</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                        $no = 1;
                                        $admin_id = auth()->id();
                                        $properti = App\Models\Properti::where('admin_id', $admin_id)->get();
                                    @endphp


                                    @foreach ($properti as $properti)
                                        <tr>
                                            {{-- <td>{{ $no++}}</td> --}}
                                            <td><img src="{{ asset($properti->image_url) }}" alt="Property Image" class="img-thumbnail"></td>

                                            <td>{{ $properti->nama}}</td>
                                            <td>{{ $properti->tipe}}</td>
                                            <td>{{ $properti->harga}}</td>
                                            <td>{{ $properti->alamat}}</td>
                                            <td>{{ $properti->wifi}}</td>
                                            <td>{{ $properti->jumlah_kamar}}</td>
                                            <td>{{ $properti->tipe_kamarmandi}}</td>
                                            <td>{{ $properti->dapur}}</td>
                                            <td>{{ $properti->lain}}</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="#" data-toggle="modal" data-target="#editPropertiModal" class="btn btn-outline-primary">Edit</a>
                                                <form action="{{ route('admin.properti.destroy', $properti->id )}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                <button class="btn btn-outline-danger" type="submit"  onclick="return confirm('Apakah Anda Ingin Menghapus Data properti {{$properti->nama}}');">Delete</button>
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

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>

                    <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
                </div>
            </div>
        </div>
    </div>

<!-- Tambah Properti Modal (nama kos, tipe (kos / kontrakan), harga, alamat, wifi (ada/tidak), jumlah kamar, tipe kamar mandi (luar / dalam), dapur (ada / tidak), lain-lain (textarea)) -->
<div class="modal fade" id="tambahPropertiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Properti</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="{{ route('admin.properti.store') }}" method="POST" enctype="multipart/form-data">

                    @csrf

                    @auth
                    <input type="hidden" name="admin_id" value="{{ Auth::user()->id }}">
                    @endauth
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control-file" id="image" name="image">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label for="tipe">Tipe</label>
                        <select class="form-control" id="tipe" name="tipe" required>
                            <option value="kos">Kos</option>
                            <option value="kontrakan">Kontrakan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="number" class="form-control" id="harga" name="harga" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" required>
                    </div>
                    <div class="form-group">
                        <label for="wifi">Wifi</label>
                        <select class="form-control" id="wifi" name="wifi" required>
                            <option value="ada">Ada</option>
                            <option value="tidak">Tidak</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="jumlah_kamar">Jumlah Kamar</label>
                        <input type="number" class="form-control" id="jumlah_kamar" name="jumlah_kamar" required>
                    </div>
                    <div class="form-group">
                        <label for="tipe_kamarmandi">Tipe Kamar Mandi</label>
                        <select class="form-control" id="tipe_kamarmandi" name="tipe_kamarmandi" required>
                            <option value="luar">Luar</option>
                            <option value="dalam">Dalam</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="dapur">Dapur</label>
                        <select class="form-control" id="dapur" name="dapur" required>
                            <option value="ada">Ada</option>
                            <option value="tidak">Tidak</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="lain">Lain-lain</label>
                        <textarea class="form-control" id="lain" name="lain" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah Properti</button>
                </form>

            </div>
        </div>
    </div>
</div>

<!-- Edit Properti Modal -->
<div class="modal fade" id="editPropertiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Properti</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                @if(isset($properti->id))
                <form action="{{ route('admin.properti.update', $properti->id) }}" method="POST">
                    @csrf
                    @method('PATCH')

                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control-file" id="image" name="image">
                    </div>

                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="{{ $properti->nama }}" required>
                    </div>
                    <div class="form-group">
                        <label for="tipe">Tipe</label>
                        <select class="form-control" id="tipe" name="tipe" required>
                            <option value="kos" @if($properti->tipe == 'kos') selected @endif>Kos</option>
                            <option value="kontrakan" @if($properti->tipe == 'kontrakan') selected @endif>Kontrakan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="number" class="form-control" id="harga" name="harga" value="{{ $properti->harga }}" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $properti->alamat }}" required>
                    </div>
                    <div class="form-group">
                        <label for="wifi">Wifi</label>
                        <select class="form-control" id="wifi" name="wifi" required>
                            <option value="ada" @if($properti->wifi == 'ada') selected @endif>Ada</option>
                            <option value="tidak" @if($properti->wifi == 'tidak') selected @endif>Tidak</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="jumlah_kamar">Jumlah Kamar</label>
                        <input type="number" class="form-control" id="jumlah_kamar" name="jumlah_kamar" value="{{ $properti->jumlah_kamar }}" required>
                    </div>
                    <div class="form-group">
                        <label for="tipe_kamarmandi">Tipe Kamar Mandi</label>
                        <select class="form-control" id="tipe_kamarmandi" name="tipe_kamarmandi" required>
                            <option value="luar" @if($properti->tipe_kamarmandi == 'luar') selected @endif>Luar</option>
                            <option value="dalam" @if($properti->tipe_kamarmandi == 'dalam') selected @endif>Dalam</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="dapur">Dapur</label>
                        <select class="form-control" id="dapur" name="dapur" required>
                            <option value="ada" @if($properti->dapur == 'ada') selected @endif>Ada</option>
                            <option value="tidak" @if($properti->dapur == 'tidak') selected @endif>Tidak</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="lain">Lain-lain</label>
                        <textarea class="form-control" id="lain" name="lain" required>{{ $properti->lain }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Properti</button>
                </form>
                @endif
            </div>
        </div>
    </div>
</div>








    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('assetadmin/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assetadmin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('assetadmin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('assetadmin/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('assetadmin/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assetadmin/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('assetadmin/js/demo/datatables-demo.js')}}"></script>

</body>

</html>
