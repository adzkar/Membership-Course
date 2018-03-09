
    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    

                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <!-- ini bagian home doang -->
                <?php  
                if (!isset($page)) {
                ?>
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-warning text-center">
                                            <i class="ti-server"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>Member Saat Ini</p>
                                            105GB
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-reload"></i> Updated now
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-success text-center">
                                            <i class="ti-wallet"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>Revenue</p>
                                            $1,345
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-calendar"></i> Last day
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-danger text-center">
                                            <i class="ti-pulse"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>Errors</p>
                                            23
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-timer"></i> In the last hour
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php  
                }
                ?>
                <!-- ini akhir bagian home doang -->
                <!-- ini bagian isi -->
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Users Behavior</h4>
                            </div>
                            <div class="content">
                                <?php  
                                    if ($page == 'post') {
                                        $this->load->view('admin/dashboard/c_list_post');
                                    } else if ($page == 'member') {
                                        $this->load->view('admin/dashboard/c_member');
                                    } else if ($page == 'upgrade') {
                                        $this->load->view('admin/dashboard/c_upgrade');
                                    } else if ($page == 'tambah_post') {
                                        $this->load->view('admin/dashboard/c_tambah_post');
                                    } else if ($page == 'edit_post') {
                                        $this->load->view('admin/dashboard/c_edit_post');
                                    } else if ($page == 'mentor') {
                                        $this->load->view('admin/dashboard/c_mentor');
                                    } else if ($page == 'tambah_mentor') {
                                        $this->load->view('admin/dashboard/c_tambah_mentor');
                                    } else if ($page == 'edit_mentor') {
                                        $this->load->view('admin/dashboard/c_edit_mentor');
                                    }
                                    
                                ?>  
                            </div>
                        </div>
                    </div>
                </div>
                <!-- akhir bagian isi -->
            </div>
        </div>


        
