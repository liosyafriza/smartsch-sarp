@extends('layouts.app')
@section('content')
@if ($errors->any())
    <div class="pt-3">
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $item)
                    <li>{{$item}}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif


<div class="card-header">
    <h1 class="card-title">New Items</h1>
        </div>
<form action="{{url('barang')}}" method="POST">
    @csrf
    <div class="card-body">
        <div class="container">
            <div class="row">
                <div class="form-group col-sm-4">
                    <label>Nomor Seri</label>
                    <input name="seri" type="text" class="form-control" placeholder="">
                </div>
                <div class="form-group col-sm-4">
                    <label>Nama Barang</label>
                    <input name="nama" type="text" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <div class="col-sm">
                    <label>Tanggal beli</label>
                    <input name="tgl_beli" type="date" class="form-control" placeholder="">
                    </div>
                </div>
          </div>

          <div class="container">
            <div class="row">
                <div class="form-group col-sm-4">
                    <label for="position-option">Satuan Barang</label>
                    <select class="form-control" name="satuan">
                       @foreach ($satuan as $brobro)
                          <option value="{{ $brobro->id_satuan }}">{{ $brobro->nama_satuan}}</option>
                       @endforeach
                    </select>
                 </div>
                 <div class="form-group col-sm-4">
                    <label for="position-option">Kategori Barang</label>
                    <select class="form-control" name="kategori">
                        @foreach ($kategori as $bro)
                           <option value="{{ $bro->id }}">{{ $bro->nama_kategori}}</option>
                        @endforeach
                     </select>
                </div>
                <div class="col-sm"></div>
            </div>
          </div>

          <div class="container">
            <div class="row">
                <div class="form-group col-2">
                    <label>Jumlah Barang Baik</label>
                    <input name="jml_baik" type="number" class="form-control" placeholder="">
                </div>
                <div class="form-group col-2">
                    <label>Jumlah Barang Rusak</label>
                    <input name="jml_rusak" type="number" class="form-control" placeholder="">
                </div>
                <div class="form-group col-sm-4">
                    <label for="position-option">Ruangan</label>
                    <select class="form-control" name="ruangan">
                        @foreach ($ruangan as $brobrobro)
                           <option value="{{ $brobrobro->id }}">{{ $brobrobro->nama_ruangan}}</option>
                        @endforeach
                     </select>
                </div>
            </div>
          </div>
        
        <div class="form-group col-4">
            <label>Foto</label>
            <input class="form-control" type="text" name="imgs">
        </div>
        <div class="form-group col-1">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        
        <!--
        <div class="form-group">
            <label for="file">Foto</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="file">Choose file</label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                    </div>
                </div>
        </div>
        -->
    </div>
    </div>
</form>

@endsection