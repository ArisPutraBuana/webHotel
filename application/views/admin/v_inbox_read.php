<!doctype html>
<html lang="en" class="no-focus"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

        <title>Inbox</title>

        <meta name="description" content="">
        <meta name="author" content="Aris Putra Buana">
        <meta name="robots" content="noindex, nofollow">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="<?php echo base_url().'assets/images/favicon.png'?>">

        <!-- END Icons -->
        <link rel="stylesheet" href="<?php echo base_url().'assets/js/plugins/datatables/dataTables.bootstrap4.min.css'?>">
        <link rel="stylesheet" id="css-main" href="<?php echo base_url().'assets/css/codebase.min.css'?>">

       

    </head>
    <body>
        <!-- Page Container -->
       
        <div id="page-container" class="sidebar-o side-scroll main-content-boxed side-trans-enabled page-header-fixed">
            

            <!-- Sidebar -->
         
            <nav id="sidebar">
                <!-- Sidebar Scroll Container -->
                <div id="sidebar-scroll">
                    <!-- Sidebar Content -->
                    <div class="sidebar-content">
                        <!-- Side Header -->
                        <div class="content-header content-header-fullrow px-15">
                            <!-- Mini Mode -->
                            <div class="content-header-section sidebar-mini-visible-b">
                                <!-- Logo -->
                                <span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
                                    <span class="text-dual-primary-dark">c</span><span class="text-primary">b</span>
                                </span>
                                <!-- END Logo -->
                            </div>
                            <!-- END Mini Mode -->

                            <!-- Normal Mode -->
                            <div class="content-header-section text-center align-parent sidebar-mini-hidden">
                                <!-- Close Sidebar, Visible only on mobile screens -->
                                <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                                <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
                                    <i class="fa fa-times text-danger"></i>
                                </button>
                                <!-- END Close Sidebar -->

                                <!-- Logo -->
                                <div class="content-header-item">
                                    <a class="link-effect font-w700" href="<?php echo base_url().'admin/dashboard'?>">
                                        <i class="text-primary"></i>
                                        <span class="font-size-xl text-dual-primary-dark">A</span><span class="font-size-xl text-success">HOTEL</span>
                                    </a>
                                </div>
                                <!-- END Logo -->
                            </div>
                            <!-- END Normal Mode -->
                        </div>
                        <!-- END Side Header -->

                        <!-- Side User -->
                        <div class="content-side content-side-full content-side-user px-10 align-parent">
                            <!-- Visible only in mini mode -->
                            <div class="sidebar-mini-visible-b align-v animated fadeIn">
                                <img class="img-avatar img-avatar32" src="<?php echo base_url().'assets/images/user_blank.png'?>" alt="">
                            </div>
                            <!-- END Visible only in mini mode -->

                            <!-- Visible only in normal mode -->
                            <div class="sidebar-mini-hidden-b text-center">
                                <?php 
                                    error_reporting(0);
                                    $idadmin=$this->session->userdata('idadmin');
                                    $query=$this->db->query("SELECT * FROM pengguna WHERE pengguna_id='$idadmin'");
                                    $data=$query->row_array();
                                ?>
                                <?php if($this->session->userdata('akses')=='3'):?>
                                    <a class="img-link" href="<?php echo base_url().'assets/images/user_blank.png'?>">
                                        <img class="img-avatar" src="<?php echo base_url().'assets/images/user_blank.png'?>" alt="">
                                    </a>
                                <?php else:?>
                                    <a class="img-link" href="#">
                                        <img class="img-avatar" src="<?php echo base_url().'assets/images/'.$data['pengguna_photo'];?>" alt="">
                                    </a>
                                <?php endif;?>
                                <ul class="list-inline mt-10">
                                    <li class="list-inline-item">
                                        <a class="link-effect text-dual-primary-dark font-size-xs font-w600 text-uppercase" href="#"><?php echo $this->session->userdata('nama');?></a>
                                    </li>
                                    
                                </ul>
                            </div>
                            <!-- END Visible only in normal mode -->
                        </div>
                        <!-- END Side User -->

                        <!-- Side Navigation -->
                        <div class="content-side content-side-full">
                            <ul class="nav-main">
                                
                                <li>
                                    <a href="<?php echo base_url().'admin/dashboard'?>"><i class="si si-screen-desktop"></i><span class="sidebar-mini-hide">Dashboard</span></a>
                                </li>
                                <li>
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-pin"></i><span class="sidebar-mini-hide">Post</span></a>
                                    <ul>
                                        <li>
                                            <a href="<?php echo base_url().'admin/tulisan/add_tulisan'?>">Add New</a>
                                        </li>
                                        
                                        <li>
                                            <a href="<?php echo base_url().'admin/tulisan'?>">Post</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url().'admin/kategori'?>">Categories</a>
                                        </li>
                                        
                                    </ul>
                                </li>
                                <li>
                                    <a href="<?php echo base_url().'admin/slider'?>"><i class="si si-picture"></i><span class="sidebar-mini-hide">Image Slider</span></a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url().'admin/room'?>"><i class="si si-star"></i><span class="sidebar-mini-hide">Room & Suite</span></a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url().'admin/fasilitas'?>"><i class="si si-badge"></i><span class="sidebar-mini-hide">Fasilities</span></a>
                                </li>
                                <li>
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-cup"></i><span class="sidebar-mini-hide">Restaurant</span></a>
                                    <ul>
                                        <li>
                                            <a href="<?php echo base_url().'admin/schedule'?>">Schedule</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url().'admin/menu'?>">Menu</a>
                                        </li>
        
                                    </ul>
                                </li>
                                <li>
                                    <a href="<?php echo base_url().'admin/events'?>"><i class="si si-calendar"></i><span class="sidebar-mini-hide">Events</span></a>
                                </li>
                                <li>
                                    <a class="active" href="<?php echo base_url().'admin/inbox'?>"><i class="si si-envelope"></i><span class="sidebar-mini-hide">Inbox</span></a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url().'admin/contact'?>"><i class="si si-call-end"></i><span class="sidebar-mini-hide">Info Contact</span></a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url().'admin/pengguna'?>"><i class="si si-user"></i><span class="sidebar-mini-hide">Users</span></a>
                                </li>
                               
                            </ul>
                        </div>
                        <!-- END Side Navigation -->
                    </div>
                    <!-- Sidebar Content -->
                </div>
                <!-- END Sidebar Scroll Container -->
            </nav>
            <!-- END Sidebar -->

            <!-- Header -->
            <?php echo $this->load->view('admin/header.php');?>
            <!-- END Header -->

            <?php 
                error_reporting(0);
                $b=$record->row_array();
            ?>
            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Content -->
                <div class="content">
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title"><?php echo $b['inbox_subject'];?></h3>
                            <div class="block-options">
                                <a class="btn-block-option" href="<?php echo site_url('admin/inbox');?>" data-toggle="scroll-to">
                                    <i class="fa fa-arrow-left"></i> Go Back
                                </a>
                            </div>
                        </div>
                        <div class="block-content">
                            <!-- Discussion -->
                            <table class="table table-borderless">
                                <tbody>
                                    <tr class="table-active">
                                        <td class="d-none d-sm-table-cell"></td>
                                        <td class="font-size-sm text-muted">
                                            <?php echo '<b>'.$b['inbox_nama'].'</b>';?> on <em><?php echo $b['tanggal'];?></em>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="d-none d-sm-table-cell text-center" style="width: 140px;">
                                            <div class="mb-10">
                                                <a href="#">
                                                    <img class="img-avatar" src="<?php echo base_url().'assets/images/avatar4.jpg'?>" alt="">
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <p><?php echo $b['inbox_pesan'];?></p>
                                        </td>
                                    </tr>
                                   
                                </tbody>
                            </table>
                            <!-- END Discussion -->
                        </div>
                    </div>
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->

            <!-- Footer -->
            <div class="py-20">
                <footer class="main-footer">
                        <strong><center>&copy; <?= date('Y'); ?> <a href="https://ArisPutraBuana">Aris Putra Buana</a></strong>
                        </center>
                </footer>
            </div>
            <!-- END Footer -->
        </div>
        <!-- END Page Container -->

        
        <!-- Codebase Core JS -->
        <script src="<?php echo base_url().'assets/js/core/jquery.min.js'?>"></script>
        <script src="<?php echo base_url().'assets/js/core/popper.min.js'?>"></script>
        <script src="<?php echo base_url().'assets/js/core/bootstrap.min.js'?>"></script>
        <script src="<?php echo base_url().'assets/js/core/jquery.slimscroll.min.js'?>"></script>
        <script src="<?php echo base_url().'assets/js/core/jquery.scrollLock.min.js'?>"></script>
        <script src="<?php echo base_url().'assets/js/core/jquery.appear.min.js'?>"></script>
        <script src="<?php echo base_url().'assets/js/core/jquery.countTo.min.js'?>"></script>
        <script src="<?php echo base_url().'assets/js/core/js.cookie.min.js'?>"></script>
        <script src="<?php echo base_url().'assets/js/codebase.js'?>"></script>
        <script src="<?php echo base_url().'assets/ckeditor/ckeditor.js'?>"></script>
        <script src="<?php echo base_url().'assets/js/plugins/datatables/jquery.dataTables.min.js'?>"></script>
        <script src="<?php echo base_url().'assets/js/plugins/datatables/dataTables.bootstrap4.min.js'?>"></script>
        
        <script type="text/javascript">
            $(document).ready(function() {
                $('#mytable').DataTable();

                //Show Modal Add New
                $('#btn-add-new').on('click',function(){ 
                    $('#ModalAddNew').modal('show');
                });

                //Show Modal Update Kategori
                $('.btn-edit').on('click',function(){
                    var kategori_id=$(this).data('id');
                    var kategori_nama=$(this).data('kategori');
                    $('#ModalUpdate').modal('show');
                    $('[name="xkode"]').val(kategori_id);
                    $('[name="xkategori2"]').val(kategori_nama);
                });

                //Show Konfirmasi modal hapus record
                $('.btn-hapus').on('click',function(){
                    var kategori_id=$(this).data('id');
                    $('#Modalhapus').modal('show');
                    $('[name="kode"]').val(kategori_id);
                });  

            });
        </script>

    </body>
</html>