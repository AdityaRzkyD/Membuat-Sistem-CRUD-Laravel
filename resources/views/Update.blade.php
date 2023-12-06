@extends('welcome')

@section('Update')
<div class="col-md-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Form Pengisian Barang</h4>
        <p class="card-description">
          Masukkan Form Pengisian Barang
        </p>
        <form action="/barang/hasil/{{ $data['id']}}" method="POST" class="forms-sample">
          @method('put')
            @csrf
          <div class="form-group">
            <label for="kode">Kode Barang</label>
            <input type="text" class="form-control" name="kode" id="kode" placeholder="Kode Barang" value="{{$data['kode']}}">
          </div>
          <div class="form-group">
            <label for="nama">Nama Barang</label>
            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" value="{{$data['nama']}}">
          </div>
          <div class="form-group">
            <label for="jenis">Jenis Barang</label>
            <select class="form-control" name="jenis" id="jenis" value="{{$data['jenis']}}">
                <option value="">Pilih Jenis Barang</option>
                <option value="komputer" @if ($data['jenis'] == 'komputer')
                  selected
                @endif>Komputer</option>
                <option value="laptop" @if ($data['jenis'] == 'laptop')
                    selected
                @endif>Laptop</option>
                <option value="mouse" @if ($data['jenis'] == 'mouse')
                  selected
                @endif>Mouse</option>
                <option value="keyboard" @if ($data['jenis'] == 'keyboard')
                  selected
                @endif>Keyboard</option>
                <option value="headset" @if ($data['jenis'] == 'headset')
                  selected
                @endif>Headset</option>
            </select>
          </div>
          <div class="form-group">
            <label for="qty">Quantity</label>
            <input type="number" class="form-control" name="qty" id="qty" placeholder="Quantity" value="{{$data['qty']}}">
          </div>
          <div class="form-group">
            <label for="harga">Harga Jual</label>
            <input type="number" class="form-control" name="harga" id="harga" placeholder="Harga Jual" value="{{$data['harga']}}">
          </div>
          <div class="form-check form-check-flat form-check-primary">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input">
              Remember me
            </label>
          </div>
          <button type="submit" class="btn btn-primary me-2">Update</button>
          <button class="btn btn-light">Cancel</button>
        </form>
      </div>
    </div>
  </div>
<br />
@endsection