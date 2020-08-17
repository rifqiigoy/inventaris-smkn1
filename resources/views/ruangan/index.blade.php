@extends('layout/layout')

@section('content')
<div class="row">
    <!-- Earnings (Monthly) Card Example -->
    @foreach ($ruangan as $ruang)
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">{{ $ruang->kibb_lokasi}}</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $ruang->nama_lokasi}}</div>
            </div>
            <div class="col-auto">
                <a href="/ruangan/{{ $ruang->id }}" class="btn btn-info btn-circle">
                    <i class="fas fa-info-circle"></i>
                  </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach
</div>
@endsection
