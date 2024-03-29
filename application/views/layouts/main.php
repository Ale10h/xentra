<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>xentra</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/bootstrap.min.css');?>">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/font-awesome.min.css');?>">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Datetimepicker -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/bootstrap-datetimepicker.min.css');?>">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/AdminLTE.min.css');?>">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/_all-skins.min.css');?>">
    </head>
    
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            <header class="main-header">
                <!-- Logo -->
                <a href="" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini">xentra</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg">xentra</span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>

                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="<?php echo site_url('resources/img/user2-160x160.jpg');?>" class="user-image" alt="User Image">
                                    <span class="hidden-xs">Alexander Pierce</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img src="<?php echo site_url('resources/img/user2-160x160.jpg');?>" class="img-circle" alt="User Image">

                                    <p>
                                        Alexander Pierce - Web Developer
                                        <small>Member since Nov. 2012</small>
                                    </p>
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="#" class="btn btn-default btn-flat">Profile</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="<?php echo site_url('resources/img/user2-160x160.jpg');?>" class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                            <p>Alexander Pierce</p>
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="header">MAIN NAVIGATION</li>
                        <li>
                            <a href="<?php echo site_url();?>">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
						<li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Aporte</span>
                            </a>
                            <ul class="treeview-menu">
								<li class="active">
                                    <a href="<?php echo site_url('aporte/add');?>"><i class="fa fa-plus"></i> Add</a>
                                </li>
								<li>
                                    <a href="<?php echo site_url('aporte/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
                                </li>
							</ul>
                        </li>
						<li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Asociado</span>
                            </a>
                            <ul class="treeview-menu">
								<li class="active">
                                    <a href="<?php echo site_url('asociado/add');?>"><i class="fa fa-plus"></i> Add</a>
                                </li>
								<li>
                                    <a href="<?php echo site_url('asociado/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
                                </li>
							</ul>
                        </li>
						<li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Asociado Aux</span>
                            </a>
                            <ul class="treeview-menu">
								<li class="active">
                                    <a href="<?php echo site_url('asociado_aux/add');?>"><i class="fa fa-plus"></i> Add</a>
                                </li>
								<li>
                                    <a href="<?php echo site_url('asociado_aux/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
                                </li>
							</ul>
                        </li>
						<li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Bitacora</span>
                            </a>
                            <ul class="treeview-menu">
								<li class="active">
                                    <a href="<?php echo site_url('bitacora/add');?>"><i class="fa fa-plus"></i> Add</a>
                                </li>
								<li>
                                    <a href="<?php echo site_url('bitacora/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
                                </li>
							</ul>
                        </li>
						<li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Bolsarol</span>
                            </a>
                            <ul class="treeview-menu">
								<li class="active">
                                    <a href="<?php echo site_url('bolsarol/add');?>"><i class="fa fa-plus"></i> Add</a>
                                </li>
								<li>
                                    <a href="<?php echo site_url('bolsarol/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
                                </li>
							</ul>
                        </li>
						<li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Categorium</span>
                            </a>
                            <ul class="treeview-menu">
								<li class="active">
                                    <a href="<?php echo site_url('categorium/add');?>"><i class="fa fa-plus"></i> Add</a>
                                </li>
								<li>
                                    <a href="<?php echo site_url('categorium/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
                                </li>
							</ul>
                        </li>
						<li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Categoria Ingreso</span>
                            </a>
                            <ul class="treeview-menu">
								<li class="active">
                                    <a href="<?php echo site_url('categoria_ingreso/add');?>"><i class="fa fa-plus"></i> Add</a>
                                </li>
								<li>
                                    <a href="<?php echo site_url('categoria_ingreso/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
                                </li>
							</ul>
                        </li>
						<li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Categoria</span>
                            </a>
                            <ul class="treeview-menu">
								<li class="active">
                                    <a href="<?php echo site_url('categoria/add');?>"><i class="fa fa-plus"></i> Add</a>
                                </li>
								<li>
                                    <a href="<?php echo site_url('categoria/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
                                </li>
							</ul>
                        </li>
						<li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Configuracion</span>
                            </a>
                            <ul class="treeview-menu">
								<li class="active">
                                    <a href="<?php echo site_url('configuracion/add');?>"><i class="fa fa-plus"></i> Add</a>
                                </li>
								<li>
                                    <a href="<?php echo site_url('configuracion/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
                                </li>
							</ul>
                        </li>
						<li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Detalle Factura</span>
                            </a>
                            <ul class="treeview-menu">
								<li class="active">
                                    <a href="<?php echo site_url('detalle_factura/add');?>"><i class="fa fa-plus"></i> Add</a>
                                </li>
								<li>
                                    <a href="<?php echo site_url('detalle_factura/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
                                </li>
							</ul>
                        </li>
						<li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Direccion Orden</span>
                            </a>
                            <ul class="treeview-menu">
								<li class="active">
                                    <a href="<?php echo site_url('direccion_orden/add');?>"><i class="fa fa-plus"></i> Add</a>
                                </li>
								<li>
                                    <a href="<?php echo site_url('direccion_orden/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
                                </li>
							</ul>
                        </li>
						<li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Dosificacion</span>
                            </a>
                            <ul class="treeview-menu">
								<li class="active">
                                    <a href="<?php echo site_url('dosificacion/add');?>"><i class="fa fa-plus"></i> Add</a>
                                </li>
								<li>
                                    <a href="<?php echo site_url('dosificacion/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
                                </li>
							</ul>
                        </li>
						<li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Empresa</span>
                            </a>
                            <ul class="treeview-menu">
								<li class="active">
                                    <a href="<?php echo site_url('empresa/add');?>"><i class="fa fa-plus"></i> Add</a>
                                </li>
								<li>
                                    <a href="<?php echo site_url('empresa/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
                                </li>
							</ul>
                        </li>
						<li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Estado Factura</span>
                            </a>
                            <ul class="treeview-menu">
								<li class="active">
                                    <a href="<?php echo site_url('estado_factura/add');?>"><i class="fa fa-plus"></i> Add</a>
                                </li>
								<li>
                                    <a href="<?php echo site_url('estado_factura/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
                                </li>
							</ul>
                        </li>
						<li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Estado</span>
                            </a>
                            <ul class="treeview-menu">
								<li class="active">
                                    <a href="<?php echo site_url('estado/add');?>"><i class="fa fa-plus"></i> Add</a>
                                </li>
								<li>
                                    <a href="<?php echo site_url('estado/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
                                </li>
							</ul>
                        </li>
						<li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Expedido</span>
                            </a>
                            <ul class="treeview-menu">
								<li class="active">
                                    <a href="<?php echo site_url('expedido/add');?>"><i class="fa fa-plus"></i> Add</a>
                                </li>
								<li>
                                    <a href="<?php echo site_url('expedido/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
                                </li>
							</ul>
                        </li>
						<li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Factura</span>
                            </a>
                            <ul class="treeview-menu">
								<li class="active">
                                    <a href="<?php echo site_url('factura/add');?>"><i class="fa fa-plus"></i> Add</a>
                                </li>
								<li>
                                    <a href="<?php echo site_url('factura/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
                                </li>
							</ul>
                        </li>
						<li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Gestion</span>
                            </a>
                            <ul class="treeview-menu">
								<li class="active">
                                    <a href="<?php echo site_url('gestion/add');?>"><i class="fa fa-plus"></i> Add</a>
                                </li>
								<li>
                                    <a href="<?php echo site_url('gestion/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
                                </li>
							</ul>
                        </li>
						<li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Ingreso</span>
                            </a>
                            <ul class="treeview-menu">
								<li class="active">
                                    <a href="<?php echo site_url('ingreso/add');?>"><i class="fa fa-plus"></i> Add</a>
                                </li>
								<li>
                                    <a href="<?php echo site_url('ingreso/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
                                </li>
							</ul>
                        </li>
						<li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Ingreso Egresox</span>
                            </a>
                            <ul class="treeview-menu">
								<li class="active">
                                    <a href="<?php echo site_url('ingreso_egresox/add');?>"><i class="fa fa-plus"></i> Add</a>
                                </li>
								<li>
                                    <a href="<?php echo site_url('ingreso_egresox/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
                                </li>
							</ul>
                        </li>
						<li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Lectura</span>
                            </a>
                            <ul class="treeview-menu">
								<li class="active">
                                    <a href="<?php echo site_url('lectura/add');?>"><i class="fa fa-plus"></i> Add</a>
                                </li>
								<li>
                                    <a href="<?php echo site_url('lectura/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
                                </li>
							</ul>
                        </li>
						<li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Medidor</span>
                            </a>
                            <ul class="treeview-menu">
								<li class="active">
                                    <a href="<?php echo site_url('medidor/add');?>"><i class="fa fa-plus"></i> Add</a>
                                </li>
								<li>
                                    <a href="<?php echo site_url('medidor/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
                                </li>
							</ul>
                        </li>
						<li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Medidor Servicio</span>
                            </a>
                            <ul class="treeview-menu">
								<li class="active">
                                    <a href="<?php echo site_url('medidor_servicio/add');?>"><i class="fa fa-plus"></i> Add</a>
                                </li>
								<li>
                                    <a href="<?php echo site_url('medidor_servicio/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
                                </li>
							</ul>
                        </li>
						<li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Me</span>
                            </a>
                            <ul class="treeview-menu">
								<li class="active">
                                    <a href="<?php echo site_url('me/add');?>"><i class="fa fa-plus"></i> Add</a>
                                </li>
								<li>
                                    <a href="<?php echo site_url('me/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
                                </li>
							</ul>
                        </li>
						<li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Multum</span>
                            </a>
                            <ul class="treeview-menu">
								<li class="active">
                                    <a href="<?php echo site_url('multum/add');?>"><i class="fa fa-plus"></i> Add</a>
                                </li>
								<li>
                                    <a href="<?php echo site_url('multum/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
                                </li>
							</ul>
                        </li>
						<li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Parametro</span>
                            </a>
                            <ul class="treeview-menu">
								<li class="active">
                                    <a href="<?php echo site_url('parametro/add');?>"><i class="fa fa-plus"></i> Add</a>
                                </li>
								<li>
                                    <a href="<?php echo site_url('parametro/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
                                </li>
							</ul>
                        </li>
						<li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Rol</span>
                            </a>
                            <ul class="treeview-menu">
								<li class="active">
                                    <a href="<?php echo site_url('rol/add');?>"><i class="fa fa-plus"></i> Add</a>
                                </li>
								<li>
                                    <a href="<?php echo site_url('rol/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
                                </li>
							</ul>
                        </li>
						<li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Rol Usuario</span>
                            </a>
                            <ul class="treeview-menu">
								<li class="active">
                                    <a href="<?php echo site_url('rol_usuario/add');?>"><i class="fa fa-plus"></i> Add</a>
                                </li>
								<li>
                                    <a href="<?php echo site_url('rol_usuario/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
                                </li>
							</ul>
                        </li>
						<li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Servicio</span>
                            </a>
                            <ul class="treeview-menu">
								<li class="active">
                                    <a href="<?php echo site_url('servicio/add');?>"><i class="fa fa-plus"></i> Add</a>
                                </li>
								<li>
                                    <a href="<?php echo site_url('servicio/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
                                </li>
							</ul>
                        </li>
						<li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Tarifa</span>
                            </a>
                            <ul class="treeview-menu">
								<li class="active">
                                    <a href="<?php echo site_url('tarifa/add');?>"><i class="fa fa-plus"></i> Add</a>
                                </li>
								<li>
                                    <a href="<?php echo site_url('tarifa/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
                                </li>
							</ul>
                        </li>
						<li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Tarifa Parametrizable</span>
                            </a>
                            <ul class="treeview-menu">
								<li class="active">
                                    <a href="<?php echo site_url('tarifa_parametrizable/add');?>"><i class="fa fa-plus"></i> Add</a>
                                </li>
								<li>
                                    <a href="<?php echo site_url('tarifa_parametrizable/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
                                </li>
							</ul>
                        </li>
						<li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Tipo Aporte</span>
                            </a>
                            <ul class="treeview-menu">
								<li class="active">
                                    <a href="<?php echo site_url('tipo_aporte/add');?>"><i class="fa fa-plus"></i> Add</a>
                                </li>
								<li>
                                    <a href="<?php echo site_url('tipo_aporte/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
                                </li>
							</ul>
                        </li>
						<li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Tipo Asociado</span>
                            </a>
                            <ul class="treeview-menu">
								<li class="active">
                                    <a href="<?php echo site_url('tipo_asociado/add');?>"><i class="fa fa-plus"></i> Add</a>
                                </li>
								<li>
                                    <a href="<?php echo site_url('tipo_asociado/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
                                </li>
							</ul>
                        </li>
						<li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Tipo Multum</span>
                            </a>
                            <ul class="treeview-menu">
								<li class="active">
                                    <a href="<?php echo site_url('tipo_multum/add');?>"><i class="fa fa-plus"></i> Add</a>
                                </li>
								<li>
                                    <a href="<?php echo site_url('tipo_multum/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
                                </li>
							</ul>
                        </li>
						<li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Tipo Usuario</span>
                            </a>
                            <ul class="treeview-menu">
								<li class="active">
                                    <a href="<?php echo site_url('tipo_usuario/add');?>"><i class="fa fa-plus"></i> Add</a>
                                </li>
								<li>
                                    <a href="<?php echo site_url('tipo_usuario/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
                                </li>
							</ul>
                        </li>
						<li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Usuario</span>
                            </a>
                            <ul class="treeview-menu">
								<li class="active">
                                    <a href="<?php echo site_url('usuario/add');?>"><i class="fa fa-plus"></i> Add</a>
                                </li>
								<li>
                                    <a href="<?php echo site_url('usuario/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
                                </li>
							</ul>
                        </li>
						<li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Zona</span>
                            </a>
                            <ul class="treeview-menu">
								<li class="active">
                                    <a href="<?php echo site_url('zona/add');?>"><i class="fa fa-plus"></i> Add</a>
                                </li>
								<li>
                                    <a href="<?php echo site_url('zona/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
                                </li>
							</ul>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Main content -->
                <section class="content">
                    <?php                    
                    if(isset($_view) && $_view)
                        $this->load->view($_view);
                    ?>                    
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <strong>Generated By <a href="http://www.crudigniter.com/">CRUDigniter</a> 3.2</strong>
            </footer>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Create the tabs -->
                <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                    
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <!-- Home tab content -->
                    <div class="tab-pane" id="control-sidebar-home-tab">

                    </div>
                    <!-- /.tab-pane -->
                    <!-- Stats tab content -->
                    <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
                    <!-- /.tab-pane -->
                    
                </div>
            </aside>
            <!-- /.control-sidebar -->
            <!-- Add the sidebar's background. This div must be placed
            immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>
        </div>
        <!-- ./wrapper -->

        <!-- jQuery 2.2.3 -->
        <script src="<?php echo site_url('resources/js/jquery-2.2.3.min.js');?>"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src="<?php echo site_url('resources/js/bootstrap.min.js');?>"></script>
        <!-- FastClick -->
        <script src="<?php echo site_url('resources/js/fastclick.js');?>"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo site_url('resources/js/app.min.js');?>"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo site_url('resources/js/demo.js');?>"></script>
        <!-- DatePicker -->
        <script src="<?php echo site_url('resources/js/moment.js');?>"></script>
        <script src="<?php echo site_url('resources/js/bootstrap-datetimepicker.min.js');?>"></script>
        <script src="<?php echo site_url('resources/js/global.js');?>"></script>
    </body>
</html>
