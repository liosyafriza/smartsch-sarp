@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                <h3 class="card-title">List Barang</h3>
                    <div class="row">
                        <div class="col-auto">
                            <a href="{{ route('barang.create') }}"><button type="button" class="btn btn-block btn-primary">+</button></a>
                        </div>
                    </div>
                </div>
    
        <div class="card-body">
            <table id="barangtable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nomor Seri</th>
                        <th>Nama</th>
                        <th>Satuan</th>
                        <th>Kategori</th>
                        <th>Jumlah Baik</th>
                        <th>Jumlah Rusak</th>
                        <th>ruangan</th>
                        <th>info</th>
                        <th>Options</th>
                        </tr>
                </thead>
                <tbody>
                    <?php $i = $data->firstItem()?>
                    @foreach ($data as $item)
                    <tr>
                        <td>{{$i}}</td>
                        <td>{{$item->seri}}</td>
                        <td>{{$item->nama}}</td>
                        <td>{{$item->satuan}}</td>
                        <td>{{$item->kategori}}</td>
                        <td>{{$item->jml_baik}}</td>
                        <td>{{$item->jml_rusak}}</td>
                        <td>{{$item->ruangan}}</td>
                        <td><a href="" class="btn btn-primary btn-sm">Info</a></td>
                        <td>
                            <a href="{{url('barang/'.$item->seri.'/edit')}}" class="btn btn-warning btn-sm">Edit</a>
                            <form onsubmit="return confirm('Yakin menghapus data?')" class="d-inline" action="{{url('barang/'.$item->seri)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" name="submit" class="btn btn-danger btn-sm">Del</button>
                            </form>
                        </td>
                    </tr> 
                    <?php $i++ ?>
                    @endforeach
                </tbody>
            </table>
        </div>
        </div>
        </div>
        </div>
        </div>
@endsection