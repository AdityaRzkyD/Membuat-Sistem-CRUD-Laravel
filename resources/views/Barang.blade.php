@extends('welcome')

@section('Barang')
<div class="col-md-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Form Pengisian Barang</h4>
        <p class="card-description">
          Masukkan Form Pengisian Barang
        </p>
        <form action="/barang/totalharga" method="POST" class="forms-sample">
            @csrf
          <div class="form-group">
            <label for="kode">Kode Barang</label>
            <input type="text" class="form-control" name="kode" id="kode" placeholder="Kode Barang">
          </div>
          <div class="form-group">
            <label for="nama">Nama Barang</label>
            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama">
          </div>
          <div class="form-group">
            <label for="jenis">Jenis Barang</label>
            <select class="form-control" name="jenis" id="jenis">
                <option value="">Pilih Jenis Barang</option>
                <option value="komputer">Komputer</option>
                <option value="laptop">Laptop</option>
                <option value="mouse">Mouse</option>
                <option value="keyboard">Keyboard</option>
                <option value="headset">Headset</option>
            </select>
          </div>
          <div class="form-group">
            <label for="qty">Quantity</label>
            <input type="number" class="form-control" name="qty" id="qty" placeholder="Quantity">
          </div>
          <div class="form-group">
            <label for="harga">Harga Jual</label>
            <input type="number" class="form-control" name="harga" id="harga" placeholder="Harga Jual">
          </div>
          <div class="form-check form-check-flat form-check-primary">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input">
              Remember me
            </label>
          </div>
          <button type="submit" class="btn btn-primary me-2">Submit</button>
          <button class="btn btn-light">Cancel</button>
        </form>
      </div>
    </div>
  </div>
<br />
@endsection