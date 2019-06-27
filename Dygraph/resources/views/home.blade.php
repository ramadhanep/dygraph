@extends('layouts.app')

@section('content')
<section class="section">
    <div class="section-header">
      <h1>Dashboard</h1>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-primary">
            <i class="far fa-user"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Jumlah Fotografer</h4>
            </div>
            <div class="card-body">{{ $fotografers }}
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-success">
            <i class="fas fa-users"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Pengguna (User)</h4>
            </div>
            <div class="card-body">{{ $users }}
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-info">
            <i class="far fa-images"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Kategori Foto</h4>
            </div>
            <div class="card-body">{{ $categories }}
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-danger">
            <i class="fas fa-camera-retro"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Foto</h4>
            </div>
            <div class="card-body">{{ $fotos }}
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 col-12">
        <div class="card">
          <div class="card-header stc">
            <h4>Statistik Data Foto 7 Bulan Terakhir</h4>
            <div class="hide">
                @foreach($d_categories as $res)
                <span id="d_category_{{ $loop->iteration }}">{{ $res->category }}</span>
                @php
                    $i = 0;
                @endphp
                @foreach($d_fotos as $res_)
                  @if($res_->id_category == $res->id)
                    @php
                        $i++;
                    @endphp
                  @endif
                @endforeach
                <span id="d_count_{{ $loop->iteration }}">{{ $i }}</span>
              @endforeach
            </div>
            <div class="hide">
              @include ('_____API.tanggal-indo')
              @foreach($statistics as $res)
              <span id="r_month_{{ $loop->iteration}}">{{ bulan_indo($res->r_month) }}</span>
              <span id="r_count_{{ $loop->iteration}}">{{ $res->r_count }}</span>
              @endforeach
            </div>
          </div>
          <div class="card-body">
              <canvas id="myChart" height="331" width="547" class="chartjs-render-monitor" style="display: block; height: 265px; width: 438px;"></canvas>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-12">
        <div class="card">
          <div class="card-header stc">
            <h4>Doughnut Chart 7 Data Kategori Foto Terakhir</h4>
          </div>
          <div class="card-body"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
            <canvas id="myChart3" width="371" height="185" class="chartjs-render-monitor" style="display: block; height: 148px; width: 297px;"></canvas>
          </div>
        </div>
      </div>
    </div>
</section>
<script src="{{ asset('js/chart-doughnut.js') }}"></script>
@endsection
