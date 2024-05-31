 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Sistem Informasi Pedagang</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Beranda</a></li>
              <li class="breadcrumb-item active">Dashboard Gripa</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">

          <!-- ./col -->
          <div class="col-lg-3 col-6">
            
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>228.267</h3>

                <p>Pengguna Gripa</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">Informasi Lebih lanjut <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <!-- ./col -->
          <div class="col-lg-3 col-6">

            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>40<sup style="font-size: 20px">%</sup></h3>

                <p>Pertumbuhan Pengguna</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">Informasi Lebih lanjut <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <!-- ./col -->
          <div class="col-lg-3 col-6">

            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>342</h3>

                <p>Pedagang Terdaftar</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="{{ url('pedagangs/index') }}" class="small-box-footer">Informasi Lebih lanjut <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

            <!-- /.card -->
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-12 connectedSortable">

            <!-- Map card -->
            <div class="card bg-gradient-primary" >
              <div class="card-header border-0" style="margin-bottom: -5px;">
                <h3 class="card-title" style="font-size: 30px;">
                  <i class="fas fa-map-marker-alt mr-1"></i>
                  Persebaran Pedagang
                </h3>
                <!-- card tools -->
                <div class="card-tools">
                  <button type="button" class="btn btn-primary btn-sm" data-card-widget="collapse" title="Collapse" style="height: 40px; width: 40px">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <div class="card-body">
                <div id="map" style="height: 400px; width: 100%;"></div>
              </div>
 
                <!-- /.row -->
              </div>
            </div>
            <!-- /.card -->

            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->