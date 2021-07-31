<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <base href="{{asset('')}}">
    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>
<style>
    .paginate li {
        text-align: right;
    }
</style>
<body>

    <!-- Left Panel -->
    @include('admin.Layouts.sidebar')

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">
        <!-- Header -->
        @include('admin.Layouts.header')
        <!-- Header -->
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="index">Dashboard</a></li>
                            <li><a href="#">Managements</a></li>
                            <li class="active">News</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content mt-3">
            @if(session('TB'))
            <div class="alert alert-success">
                {{session('TB')}}
            </div>
            @endif
            <div class="animated">
                <div class="card">
                    <div class="card-body">

                        <!-- Button trigger modal -->
                        <a href="admin/news/add" type="button" class="btn btn-secondary mb-1">
                            Add News
                        </a>
                    </div>
                </div>
            </div><!-- .animated -->
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Table</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Tiêu đề</th>
                                            <th>Trích dẫn</th>
                                            <th>Anh</th>
                                            <th>Loai</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $stt = 1;
                                        foreach ($list_news as $ls) {
                                        ?>
                                            <tr>
                                                <td><?php echo $stt ?></td>
                                                <td style="width: 300px;"><?= $ls->title ?></td>
                                                <td style="width: 300px;"><?= $ls->description ?></td>
                                                <td style="width: 200px;"><img src="<?= $ls->images ?>"></td>
                                                <td style="width: 150px;"><?= $ls->loaitin->name ?></td>
                                                <td style="text-align: right;">
                                                    <a href="admin/news/update/<?= $ls->id ?>">
                                                        <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#update">
                                                            Edit
                                                        </button>
                                                    </a>
                                                    <a href="admin/news/delete/<?= $ls->id ?>" onclick="return confirm('Bạn muốn xóa ?')">
                                                        <button class="btn btn-danger">delete</button>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php $stt++;
                                        } ?>
                                    </tbody>
                                </table>
                                <div>
                                    {!! $list_news->links() !!}
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
    </div>
    <!-- Right Panel -->

    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>

</body>

</html>