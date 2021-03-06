<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?></title>

    <!-- Favicons -->
    <link href="<?php echo base_url(); ?>assets/dist/img/logo.png" rel="icon">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/summernote/summernote-bs4.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <style>
        [class*="sidebar-dark-"] .nav-sidebar>.nav-item>.nav-link.active {
            color: white;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
            background: linear-gradient(to bottom right,
                    rgba(49, 207, 246, 0.921),
                    rgba(170, 255, 214, 0.958));
        }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="<?php echo base_url(); ?>assets/dist/img/logo.png" alt="Logo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="" class="nav-link">Home</a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a class="brand-link">
                <img src="<?php echo base_url(); ?>assets/dist/img/logo.png" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">OfficeHour</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?php echo base_url(); ?>assets/dist/img/avatar5.png" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a class="d-block text-center"><?php echo $this->session->userdata('nama_karyawan'); ?></a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                        <li class="nav-item">
                            <a href="<?php echo base_url() . 'Supervisor' ?>" class="nav-link">
                                <i class="nav-icon fas fa-clock"></i>
                                <p> Project Manage </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url() . 'Account_Karyawan' ?>" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p> Akun </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url() . 'Supervisor/daftar_karyawan' ?>" class="nav-link active">
                                <i class="nav-icon fas fa-file"></i>
                                <p> Laporan </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url() . 'Login/logout_karyawan' ?>" class="nav-link">
                                <i class="nav-icon fas fa-power-off"></i>
                                <p> Keluar </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>

            <!-- /.sidebar -->
        </aside>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h3>Laporan</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Laporan</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">

                    <div class="row">
                        <section class="col-lg-6 connectedSortable">
                            <div class="card card-outline">
                                <div class="card-header bg-gray">
                                    <h3 class="card-title">
                                        <i class="far fa-chart-bar"></i>
                                        Durasi Setiap Project Dalam Jam
                                    </h3>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus text-white"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                                            <i class="fas fa-times text-white"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="container">
                                        <canvas id="myChart"></canvas>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header bg-gray">
                                    <h3 class="card-title">
                                        <i class="far fa-chart-bar"></i>
                                        Total Status Project
                                    </h3>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus text-white"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                                            <i class="fas fa-times text-white"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="chartCard">
                                        <div class="chartBox">
                                            <canvas id="chart-status-project"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </section>

                        <section class="col-lg-6 connectedSortable">
                            <div class="card card-outline">
                                <div class="card-header bg-gray">
                                    <h3 class="card-title">
                                        <i class="far fa-chart-bar"></i>
                                        Karyawan Paling Sering Telat Untuk Menyelesaikan Tugas
                                    </h3>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus text-white"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                                            <i class="fas fa-times text-white"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="container">
                                        <canvas id="chart-karyawan"></canvas>
                                    </div>
                                </div>
                                <!-- /.card-body-->
                            </div>

                            <div class="card card-outline">
                                <div class="card-header bg-gray">
                                    <h3 class="card-title">
                                        <i class="far fa-chart-bar"></i>
                                        Total Karyawan Aktif & Tidak Aktif
                                    </h3>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus text-white"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                                            <i class="fas fa-times text-white"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="container">
                                        <canvas id="chart-status-karyawan"></canvas>
                                    </div>
                                </div>
                                <!-- /.card-body-->
                            </div>
                        </section>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Laporan Karyawan</h3>
                        </div>


                        <div class="card-body">
                            <table id="list_karyawan" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama Karyawan</th>
                                        <th>Email</th>
                                        <th>Posisi</th>
                                        <th>Status Karyawan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($karyawan as $list_karyawan) { ?>
                                        <tr>
                                            <td><?php echo $list_karyawan->id_karyawan ?></td>
                                            <td><?php echo $list_karyawan->nama_karyawan ?></td>
                                            <td><?php echo $list_karyawan->email_karyawan ?></td>
                                            <td><?php echo $list_karyawan->posisi_karyawan ?></td>
                                            <td class="text-center">
                                                <?php if ($list_karyawan->status_karyawan == 1) { ?>
                                                    <span class="badge badge-success">Aktif</span>
                                                <?php } else { ?>
                                                    <span class="badge badge-danger">Tidak Aktif</span>
                                                <?php }  ?>
                                            </td>
                                            <td>
                                                <a class="btn btn-sm bg-info" href="<?php echo base_url() . 'Supervisor/aktivitas/' . $list_karyawan->id_karyawan ?>">
                                                    <i class="fas fa-eye">
                                                    </i>
                                                    Aktivitas
                                                </a>
                                            </td>
                                        </tr>
                                    <?php } ?>

                                </tbody>
                            </table>
                        </div>

                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">List Project</h3>
                        </div>

                        <div class="card-body">
                            <table id="list_project" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama Project</th>
                                        <th>Project Manager</th>
                                        <th>Klien</th>
                                        <th>Progress</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($list_project as $detail) { ?>
                                        <tr>
                                            <td><?php echo $detail->id_project ?></td>
                                            <td><?php echo $detail->nama_project ?></td>
                                            <td><?php echo $detail->nama_karyawan ?></td>
                                            <td><?php echo $detail->nama_client ?></td>
                                            <td><?php foreach ($tugas_selesai as $row) {
                                                    if ($detail->id_project == $row->id_project) {

                                                        foreach ($total as $row_t) {
                                                            if ($detail->id_project == $row_t->id_project) {

                                                                echo number_format($row->totalSelesai / $row_t->totalTugas * 100, 0) . '%';
                                                            }
                                                        }
                                                    } else {
                                                        echo '0%';
                                                    }
                                                    //    echo $row->totalSelesai;
                                                }
                                                ?></td>
                                            <td><?php echo $detail->status_project ?></td>
                                        </tr>
                                    <?php } ?>

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </section>


            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->


    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?php echo base_url(); ?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?php echo base_url(); ?>assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="<?php echo base_url(); ?>assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- ChartJS -->
    <script src="<?php echo base_url(); ?>assets/plugins/chart.js/Chart.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url(); ?>assets/dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url(); ?>assets/dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?php echo base_url(); ?>assets/dist/js/pages/dashboard.js"></script>
    <!-- SweetAlert2 -->
    <script src="<?php echo base_url(); ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="<?php echo base_url(); ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/jszip/jszip.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

    <script>
        $(function() {
            $("#list_karyawan").DataTable({
                "processing": true,
                "severside": true,
                "responsive": true,
                "lengthChange": true,
                "autoWidth": false,
                "language": {
                    "sLengthMenu": "Tampil _MENU_ Baris",
                    "sZeroRecords": "Pencarian tidak ditemukan",
                    "sEmptyTable": "Data Kosong",
                    "sInfo": "Menampilkan baris _START_ hingga _END_ dari _TOTAL_ baris", //"sInfo": "Menampilkan baris _START_ hingga _END_ dari _TOTAL_ entri",
                    "sInfoEmpty": "Menampilkan 0 hingga 0 dari 0 baris",
                    "sSearch": "Cari:",
                    "sLoadingRecords": "Sedang memproses",
                    "oPaginate": {
                        "sFirst": "Pertama",
                        "sLast": "Terakhir",
                        "sNext": "Selanjutnya",
                        "sPrevious": "Sebelumnya"
                    }
                }
            });

            $("#list_project").DataTable({
                "processing": true,
                "severside": true,
                "responsive": true,
                "lengthChange": true,
                "autoWidth": false,
                "language": {
                    "sLengthMenu": "Tampil _MENU_ Baris",
                    "sZeroRecords": "Pencarian tidak ditemukan",
                    "sEmptyTable": "Data Kosong",
                    "sInfo": "Menampilkan baris _START_ hingga _END_ dari _TOTAL_ baris", //"sInfo": "Menampilkan baris _START_ hingga _END_ dari _TOTAL_ entri",
                    "sInfoEmpty": "Menampilkan 0 hingga 0 dari 0 baris",
                    "sSearch": "Cari:",
                    "sLoadingRecords": "Sedang memproses",
                    "oPaginate": {
                        "sFirst": "Pertama",
                        "sLast": "Terakhir",
                        "sNext": "Selanjutnya",
                        "sPrevious": "Sebelumnya"
                    }
                }
            });

            const sukses = $('.sukses').data('flashdata');
            if (sukses) {
                Swal.fire({
                    title: 'Sukses',
                    text: sukses,
                    icon: 'success'
                });
            }

        });

        var ctx = document.getElementById('myChart').getContext('2d');
        var chart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: [
                    <?php
                    if (count($graph) > 0) {
                        foreach ($graph as $data) {
                            echo "'" . $data->nama_project . "',";
                        }
                    }

                    ?>
                ],
                datasets: [{
                    label: 'Jumlah Durasi Setiap Project',
                    backgroundColor: [
                        'rgba(255, 26, 104, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(0, 0, 0, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 26, 104, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(0, 0, 0, 1)'
                    ],
                    borderWidth: 1,
                    data: [
                        <?php
                        foreach ($graph as $data) {
                            echo $data->durasi . ", ";
                        }
                        ?>
                    ]
                }]
            },
        });

        var ctx = document.getElementById('chart-karyawan').getContext('2d');
        var chart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: [
                    <?php
                    if (count($overtime) > 0) {
                        foreach ($overtime as $data) {
                            echo "'" . $data->nama_karyawan . "',";
                        }
                    }

                    ?>
                ],
                datasets: [{
                    label: 'Total',
                    backgroundColor: [
                        'rgba(255, 26, 104, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(0, 0, 0, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 26, 104, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(0, 0, 0, 1)'
                    ],
                    borderWidth: 1,
                    data: [
                        <?php
                        foreach ($overtime as $data) {
                            echo $data->total . ", ";
                        }
                        ?>
                    ]
                }]
            },
        });

        //grafik status project
        var c = document.getElementById('chart-status-project').getContext('2d');
        var chart = new Chart(c, {
            type: 'pie',
            data: {
                labels: ['Selesai', 'Sedang Berjalan', 'Tidak Selesai'],
                datasets: [{
                    label: 'Total',
                    backgroundColor: [
                        'rgba(255, 26, 104, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 26, 104, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1,
                    data: [<?php echo $selesai['totalSelesai']; ?>, <?php echo $sedang_berjalan['totalSedangBerjalan']; ?>, <?php echo $tidak_selesai['totalTidakSelesai']; ?>],
                }]
            },
        });

        //grafik status karyawan
        var c = document.getElementById('chart-status-karyawan').getContext('2d');
        var chart = new Chart(c, {
            type: 'pie',
            data: {
                labels: ['Akitf', 'Tidak Aktif'],
                datasets: [{
                    label: 'Total',
                    backgroundColor: [
                        'rgba(255, 26, 104, 0.2)',
                        'rgba(75, 192, 192, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 26, 104, 1)',
                        'rgba(75, 192, 192, 1)'
                    ],
                    borderWidth: 1,
                    data: [<?php echo $karyawan_aktif['total_aktif']; ?>, <?php echo $karyawan_tidak_aktif['total_tidak_aktif']; ?>],
                }]
            },
        });
    </script>



</body>

</html>