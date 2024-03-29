@extends('templates/header')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="judul">Data Tahun Ajaran</h1> 
            <h5 class="sub">Rekapitulasi Data Semua Tahun Ajaran</h5>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href='{{ url('dashboard') }}'>Dashboard</a></li>
              <li class="breadcrumb-item active">Data Tahun Ajaran</li>
            </ol>
          </div>
        </div>
        <hr>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
            <div class="inner">
            <h3>2022/2023</h3>

            <p>Tahun Ajaran Aktif</p>
            </div>
            <div class="icon">
              <i class="nav-icon fas fa-calendar-alt"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
            <div class="inner">
            {{-- <h3>53<sup style="font-size: 20px">%</sup></h3> --}}
            <h3>2021/2022</h3>

            <p>Tahun Ajaran Aktif</p>
            </div>
            <div class="icon">
              <i class="nav-icon fas fa-calendar-alt"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
            <div class="inner">
            <h3>2020/2021</h3>

            <p>Tahun Ajaran Aktif</p>
            </div>
            <div class="icon">
              <i class="nav-icon fas fa-calendar-alt"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
            <div class="inner">
            <h3>2019/2020</h3>

            <p>Tahun Ajaran Aktif</p>
            </div>
            <div class="icon">
              <i class="nav-icon fas fa-calendar-alt"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
            <div class="inner">
            <h3>2018/2019</h3>

            <p>Tahun Ajaran Aktif</p>
            </div>
            <div class="icon">
              <i class="nav-icon fas fa-calendar-alt"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
        <!-- ./col -->
    </div>
    <!-- /.row -->
    </div>
      {{-- <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Title</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          Start creating your amazing application!
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div> --}}
      <!-- /.card -->
@endsection

    