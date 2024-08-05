@extends('template.app')

@section('content')
<div class="section-header">
  <h1>Tambah Mobil</h1>
  <div class="section-header-breadcrumb">
    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
    <div class="breadcrumb-item"><a href="#">Mobil</a></div>
    <div class="breadcrumb-item">Tambah Mobil</div>
  </div>
</div>
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body p-0">
        <form action="{{ route('cars.store') }}" method="POST">
          @csrf
          <div class="form-group">
            <label for="make">Merk</label>
            <input type="text" name="make" class="form-control" id="make" placeholder="Enter merk mobil">
            @error('make')
            <div class="alert alert-danger mt-2">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-group">
            <label for="model">Model</label>
            <input type="text" name="model" class="form-control" id="model" placeholder="Enter model mobil">
            @error('model')
            <div class="alert alert-danger mt-2">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-group">
            <label for="year">Tahun</label>
            <input type="number" name="year" class="form-control" id="year" placeholder="Enter tahun mobil">
            @error('year')
            <div class="alert alert-danger mt-2">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-group">
            <label for="price_per_day">Harga per Hari</label>
            <input type="text" name="price_per_day" class="form-control" id="price_per_day" placeholder="Enter harga per hari">
            @error('price_per_day')
            <div class="alert alert-danger mt-2">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-group">
            <label for="license_plate">Nomor Plat</label>
            <input type="text" name="license_plate" class="form-control" id="license_plate" placeholder="Enter nomor plat mobil">
            @error('license_plate')
            <div class="alert alert-danger mt-2">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
