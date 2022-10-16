@extends('layout.layout')
@section('content')
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
 Tambah
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
    <form action="/barang/tambah" method="POST">
    @csrf
  <div class="form-group">
    <label>ID BARANG</label>
    <input type="text" class="form-control" name="id_barang">
  </div>
  <div class="form-group">
    <label>NAMA BARANG</label>
    <input type="text" class="form-control" name="nama_barang">
  </div>
  <div class="form-group">
    <label>HARGA</label>
    <input type="text" class="form-control" name="harga">
  </div>
  <div class="form-group">
    <label>STOK</label>
    <input type="text" class="form-control" name="stok">
  </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  <button type="submit" class="btn btn-primary ">Save</button>
      </div>
    </div>
  </div>
</div>
</form>


  </table>
   <table border="1" class="table table-dark" id="table1">
  <thead>
      <tr>
          <th>NO</th>
          <th scope="col">ID BARANG</th>
          <th scope="col">NAMA BARANG</th>
          <th scope="col">HARGA</th>
          <th scope="col">STOK</th>
          <th scope="col">ACTION</th>
        </tr>
  </thead>
  <tbody>
    @foreach ($barang as $barang )
        <tr>
         
            <td>{{$loop->iteration}}</td>
            <td>{{$barang->id_barang}}</td>
            <td>{{$barang ->nama_barang}}</td>
            <td>{{$barang ->harga}}</td>
            <td>{{$barang ->stok}}</td>
            <td>
                <a href="/barang/edit/{{ $barang->id }}" class="btn btn-warning">Edit</a>
                <a href="/barang/hapus/{{ $barang->id }}" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
       @endforeach
  </tbody>
      
@endsection