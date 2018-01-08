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
                <a href="<?= $this->url->get('') ?>" class="logo">
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
                                <a href="<?= $this->url->get('admin/logout') ?>">logout</a>
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
                    <?= $this->getContent() ?>
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="/brecipes/public/js/bootstrap/bootstrap.js"></script>
        <script src="/brecipes/public/js/app.min.js"></script>
    </body>
</html>