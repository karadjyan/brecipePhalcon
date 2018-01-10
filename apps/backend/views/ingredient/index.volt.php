<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?= $title ?> - bRecipe</title>
        <link href="/brecipes/public/css/bootstrap/bootstrap.css" rel="stylesheet">
        <link href="/brecipes/public/css/side.css" rel="stylesheet">
        <link rel='stylesheet' href='/brecipes/public/css/AdminLTE.min.css' />
        <link rel="stylesheet" href="/brecipes/public/css/skins/skin-blue.min.css" />
        <script src="https://use.fontawesome.com/486ca9e286.js"></script>
        
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            <!-- Main Header -->
            <header class="main-header">

                <!-- Logo -->
                <a href="<?= $this->url->get('admin') ?>" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><i class="fa fa-cutlery" aria-hidden="true"></i><b> bR</b></span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><i class="fa fa-cutlery" aria-hidden="true"></i>  b<b>Recipes</b></span>
                </a>

                <!-- Header Navbar -->
                <nav class="navbar navbar-static-top" role="navigation">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    <!-- Navbar Right Menu -->
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- Control Sidebar Toggle Button -->
                            <li>
                                <!-- Authentication Links -->
                                <a href="<?= $this->url->get('admin/logout') ?>" class="btn btn-danger">logout</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>

            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar Menu -->
                    <ul class="sidebar-menu">
                        <li class="header text-center">MENU</li>

                        <!-- Optionally, you can add icons to the links -->
                        <li><a href="<?= $this->url->get('admin/panel/users') ?>"><i class="fa fa-user"></i> <span>Users</span></a></li>
                        <li><a href="<?= $this->url->get('admin/panel/recipes') ?>"><i class="fa fa-book"></i> <span>Recipes</span></a></li>
                        <li><a href="<?= $this->url->get('admin/panel/ingredients') ?>"><i class="fa fa-puzzle-piece"></i> <span>Ingredients</span></a></li>
                        <li><a href="<?= $this->url->get('admin/panel/menus') ?>"><i class="fa fa-map"></i> <span>Menus</span></a></li>
                    </ul>
                    <!-- /.sidebar-menu -->
                </section>
                <!-- /.sidebar -->
            </aside>
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Main content -->
                <section class="content">
                    
    <div class="modal modal-danger fade" id="modal-danger" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Danger Modal</h4>
                </div>
                <div class="modal-body">
                    <p>Do you really want to delete this post?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                    <?= $this->tag->form(['', 'method' => 'post', 'id' => 'delete-form']) ?>
                    <?= $this->tag->submitButton(['Delete', 'class' => 'btn btn-success btn-outline']) ?>
                    <?= $this->tag->endForm() ?>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Ingredients</h3>
            <div class="box-tools pull-right">
                <?= $this->tag->linkTo(['admin/panel/ingredients/add', 'Create', 'class' => 'btn btn-success']) ?>
            </div>
            <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="col-md-12 table-responsive">
                <table class="table table-hover table-bordered">
                    <thead>
                    <tr class="bg-primary">
                        <th width="5%">ID</th>
                        <th width="80%">Name</th>
                        <th width="15%">TODO</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($ingredients as $ingredient) { ?>
                        <tr >
                            <td><?= $ingredient['id'] ?></td>
                            <td><?= $ingredient['name'] ?></td>
                            <td>
                                <p>
                                    <button type="button" class="btn btn-danger btn-sm" title="Delete" data-toggle="modal" data-target="#modal-danger" onclick="showFormDelete(<?= $this->url->get('admin/ingredient/delete/') ?>, <?= $ingredient['id'] ?>);">
                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                                    </button>

                                    <?= $this->tag->linkTo([['for' => 'edit-ingredient', 'id' => $ingredient['id']], '<i class="fa fa-pencil-square-o" aria-hidden="true"></i>', 'class' => 'btn btn-primary btn-sm', 'title' => 'Edit']) ?>
                                </p>
                            </td>
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
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="<?= $this->url->get('public/js/bootstrap/bootstrap.js') ?>"></script>
        <script src="<?= $this->url->get('public/js/app.min.js') ?>"></script>
        
    <script src="<?= $this->url->get('public/js/deleteform.js') ?>"></script>

    </body>
</html>