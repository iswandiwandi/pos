<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Blank Page</title>

    @include('layouts.inc.css')
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        @include('layouts.inc.navbar')

        <!-- /.navbar -->
        @include('layouts.inc.sidebar')


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Blank Page</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Blank Page</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">@yield('title')</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        @yield ('content')
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        Apotek Zaky
                    </div>
                    <!-- /.card-footer-->
                </div>
                <!-- /.card -->

            </section>
            <!-- /.content -->

        </div>
        <!-- /.content-wrapper -->

        @include ('layouts.inc.footer')


    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    @include('sweetalert::alert')
    @include('layouts.inc.js')
    <script>
        $('.show_confirm').click(function() {
            let form = $(this).closet('form');
            let name = $(this).data('name');

            event.prevenDefault();

            const swalbutton = Swal.mixn({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger mr-2',
                },
                buttonStyling: false,
            });

            swalButton.fire({
                title: "Apakah anda yakin??",
                text: "akan menghapus data ini??",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonClas: 'mr-2',
                confirmButtontext: 'yaa, Hapuss!!',
                cancelButtonText: 'Jangan, dihapus!',
                reverseButton: true,

            }).then((result)) => {
                if (result.value) {
                    form.submit();

                } else {
                    swalButton.fire(
                        'Batal',
                        'Data anda aman :)',
                        'error'
                    )
                }
            }
        });
    </script>

</body>

</html>
