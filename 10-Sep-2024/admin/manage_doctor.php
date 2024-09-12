<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Zegva - Responsive Admin & Dashboard Template | Themesdesign</title>
    <meta content="Responsive admin theme build on top of Bootstrap 4" name="description" />
    <meta content="Themesdesign" name="author" />
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <link href="plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">

    <!-- DataTables -->
    <link href="plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">

</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <?php include "includes/top_bar.php" ?>
        <!-- Top Bar End -->

        <!-- ========== Left Sidebar Start ========== -->
        <?php include "includes/left_bar.php" ?>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">

                <div class="container-fluid">
                    <div class="page-title-box">

                        <div class="row align-items-center ">
                            <div class="col-md-8">
                                <div class="page-title-box">
                                    <h4 class="page-title">Data Table</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="javascript:void(0);">Zegva</a>
                                        </li>
                                        <li class="breadcrumb-item">
                                            <a href="javascript:void(0);">Tables</a>
                                        </li>
                                        <li class="breadcrumb-item active">Data Table</li>
                                    </ol>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="float-right d-none d-md-block app-datepicker">
                                    <input type="text" class="form-control" data-date-format="MM dd, yyyy" readonly="readonly" id="datepicker">
                                    <i class="mdi mdi-chevron-down mdi-drop"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page-title -->



                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="mt-0 header-title">Manage Doctors</h4>
                                    <p class="sub-title">The Buttons extension for DataTables provides a common set of options, API
                                        methods and styling to display buttons on a page that will interact with a DataTable.
                                        The core library provides the based framework upon which plug-ins can built.
                                    </p>
                                    <?php
                                    require_once "dbconfig.php";
                                    $sql = $db->query("SELECT * FROM  doctors");

                                    ?>
                                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>SN</th>
                                                <th>Doctor Name</th>
                                                <th>Specilization</th>
                                                <th>Photo</th>
                                                <th>Fess</th>
                                                <th>Contact</th>
                                                <th>Email</th>
                                                <th>Action</th>

                                            </tr>
                                        </thead>


                                        <?php
                                        $sn = 1 ;
                                         while ($row = $sql->fetch_assoc()) { ?>
                                            <tr>
                                                <td><?php echo $sn ?></td>
                                                <td><?php echo $row['doctorName'] ?></td>
                                                <td><?php echo $row['specilization'] ?></td>
                                               <td><?php echo $row['photo'] ?></td>
                                                <td><?php echo $row['docFees'] ?></td>
                                                <td><?php echo $row['contactno'] ?></td>
                                                <td><?php echo $row['docEmail'] ?></td>
                                                <td class="text-center"> <a href="" class="btn btn-outline-primary
                                                 waves-effect waves-light">EDIT</a> | <a href="" 
                                                 class="btn btn-outline-danger
                                                 waves-effect waves-light">DELETE</a></td>

                                            </tr>
                                        <?php 
                                        $sn++ ;
                                    } ?>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                </div>
                <!-- container-fluid -->

            </div>
            <!-- content -->

            <footer class="footer">
                © 2019 Zegva <span class="d-none d-sm-inline-block"> - Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign</span>.
            </footer>

        </div>
        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/metismenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/waves.min.js"></script>

    <script src="plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

    <!-- Required datatable js -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Buttons examples -->
    <script src="plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="plugins/datatables/buttons.bootstrap4.min.js"></script>
    <script src="plugins/datatables/jszip.min.js"></script>
    <script src="plugins/datatables/pdfmake.min.js"></script>
    <script src="plugins/datatables/vfs_fonts.js"></script>
    <script src="plugins/datatables/buttons.html5.min.js"></script>
    <script src="plugins/datatables/buttons.print.min.js"></script>
    <script src="plugins/datatables/buttons.colVis.min.js"></script>
    <!-- Responsive examples -->
    <script src="plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="plugins/datatables/responsive.bootstrap4.min.js"></script>

    <!-- Datatable init js -->
    <script src="assets/pages/datatables.init.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>

</body>

</html>