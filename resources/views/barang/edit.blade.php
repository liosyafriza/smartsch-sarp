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
    <h1 class="card-title">Edit Items</h1>
        </div>
<form action="{{url('barang')}}" method="POST">
    @csrf
    <div class="card-body">
        <div class="form-group">
            <label>Nomor Seri</label>
        </div>
        <div class="form-group">
            <label>Nama Barang</label>
            <input name="nama" type="text" class="form-control" value="">
        </div>
        <div class="form-group">
            <label>Tanggal beli</label>
            <input name="tgl_beli" type="date" class="form-control" value="">
        </div>
        <div class="form-group">
            <label>Satuan Barang</label>
            <input name="satuan" type="text" class="form-control" value="">
        </div>
        <div class="form-group">
            <label>Kategori Barang</label>
            <input name="kategori" type="text" class="form-control" value="">
        </div>
        <div class="form-group">
            <label>Jumlah Barang Baik</label>
            <input name="jml_baik" type="number" class="form-control" value="">
        </div>
        <div class="form-group">
            <label>Jumlah Barang Rusak</label>
            <input name="jml_rusak" type="number" class="form-control" value="">
        </div>
        <div class="form-group">
            <label>Ruangan</label>
            <input name="ruangan" type="text" class="form-control" value="">
        </div>
        <div class="form-group">
            <label>Foto</label>
            <input name="imgs" type="text" class="form-control" value="">
        </div>
        
        <!--
        <div class="form-group">
            <label>Ruangan</label>
            <select class="form-control">
            <option>null</option>
            </select>
            </div>
        
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
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>

@endsection