@extends('template.app')

@section('content')
<div class="section-header">
  <h1>Daftar Mobil</h1>
  <div class="section-header-breadcrumb">
    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
    <div class="breadcrumb-item"><a href="#">Mobil</a></div>
    <div class="breadcrumb-item">Daftar Mobil</div>
  </div>
</div>
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h4>Daftar Mobil</h4>
        <div class="card-header-action">
          <a href="{{ route('cars.create') }}" class="btn btn-primary">Tambah Mobil</a>
        </div>
      </div>
      <div class="card-body p-0">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>ID</th>
              <th>Merk</th>
              <th>Model</th>
              <th>Tahun</th>
              <th>Harga per Hari</th>
              <th>Nomor Plat</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($cars as $car)
            <tr>
              <td>{{ $car->id }}</td>
              <td>{{ $car->make }}</td>
              <td>{{ $car->model }}</td>
              <td>{{ $car->year }}</td>
              <td>{{ $car->price_per_day }}</td>
              <td>{{ $car->license_plate }}</td>
              <td>
                <a href="{{ route('cars.edit', $car->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('cars.destroy', $car->id) }}" method="POST" style="display:inline;">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        {{-- {{ $cars->links() }} --}}
      </div>
    </div>
  </div>
</div>
@endsection
