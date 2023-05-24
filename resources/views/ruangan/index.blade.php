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
                            <a href="{{ route('ruangan.create') }}"><button type="button" class="btn btn-block btn-primary">+</button></a>
                        </div>
                    </div>
                </div>
    
        <div class="card-body">
            <table id="barangtable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Ruangan</th>
                        <th>info</th>
                        <th>Options</th>
                        </tr>
                </thead>
                <tbody>
                    <?php $i = $datar->firstItem()?>
                    @foreach ($datar as $item)
                    <tr>
                        <td>{{$i}}</td>
                        <td>{{$item->nama_ruangan}}</td>
                        <td><a href="" class="btn btn-primary btn-sm">Info</a></td>
                        <td>
                            <a href="{{url('ruangan/'.$item->nama_ruangan.'/edit')}}" class="btn btn-warning btn-sm">Edit</a>
                            <form onsubmit="return confirm('Yakin menghapus data?')" class="d-inline" action="{{url('ruangan/'.$item->nama_ruangan)}}" method="POST">
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