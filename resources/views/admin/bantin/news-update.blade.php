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

<body>

    <!-- Left Panel -->
    @include('admin.Layouts.sidebar')

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">
        <!-- Header -->
        @include('admin.Layouts.header')
        <!-- Header -->
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <div style="margin-left: 10%;" class="col-lg-9">
                        <div class="card">
                            @if(count($errors) > 0)
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $err)
                                {{$err}}<br>
                                @endforeach
                            </div>

                            @endif
                            @if(session('TB'))
                            <div class="alert alert-success">
                                {{session('TB')}}
                            </div>
                            @endif
                            <div class="card-header">
                                <strong>New</strong>
                            </div>

                            <form action="admin/news/update/{{$news->id}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                <div class="card-body card-block">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}" />
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Static</label></div>
                                        <div class="col-12 col-md-9">
                                            <p class="form-control-static">Chỉnh sửa bản tin</p>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tiêu Đề</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="title" name="title" value="<?php echo $news['title'] ?>" class="form-control"><small class="form-text text-muted">This is a help text</small></div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Trích Dẫn</label></div>
                                        <div class="col-12 col-md-9"><textarea name="description" id="description" rows="9" class="form-control"><?php echo $news['description'] ?></textarea></div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Nội dung</label></div>
                                        <div class="col-12 col-md-9"><textarea name="content" id="content" rows="9" class="form-control"><?php echo $news['content'] ?></textarea></div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Ảnh</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="images" name="images" value="<?php echo $news['images'] ?>" class="form-control"><small class="form-text text-muted">This is a help text</small></div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="selectSm" class=" form-control-label">Loại tin</label></div>
                                        <div class="col-12 col-md-9">
                                        <select name="id_loaitin" id="SelectLm" class="form-control-sm form-control">
                                                <?php
                                                foreach ($list_kind as $list) {
                                                ?>
                                                    <option value="<?= $list->id ?>"><?= $list->name ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button name="btnUpdate" type="submit" class="btn btn-primary btn-sm">
                                        <i class="fa fa-dot-circle-o"></i> Submit
                                    </button>
                                    <button type="reset" class="btn btn-danger btn-sm">
                                        <i class="fa fa-ban"></i> Reset
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div style="margin-left: 10%;" class="col-lg-9">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">List Comment</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>User</th>
                                            <th>Nội dung</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $stt = 1;
                                        foreach ($list_comment as $ls) {
                                        ?>
                                            <tr>
                                                <td><?php echo $stt ?></td>
                                                <td style="width: 300px;"><?= $ls->user->name ?></td>
                                                <td style="width: 300px;"><?= $ls->comment ?></td>
                                                <td style="text-align: right;">
                                                    <a href="admin/comment/delete/<?= $ls->id ?>/<?= $ls->id_bantin ?>" onclick="return confirm('Bạn muốn xóa ?')">
                                                        <button class="btn btn-danger">delete</button>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php $stt++;
                                        } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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