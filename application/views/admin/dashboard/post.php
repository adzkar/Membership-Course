
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
                                        include('form_post.php');
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- akhir bagian isi -->
            </div>
        </div>


        