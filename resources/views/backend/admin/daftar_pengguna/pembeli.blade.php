@extends('backend.layouts.parent')

@section('title','Daftar Pengguna')

@section('main','Daftar Pembeli')

@section('content')
  <div class="container-fluid">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>No.</th>
          <th>ID Akun</th>
          <th>ID Admin</th>
          <th>Nama</th>
          <th>Alamat</th>
          <th>No Telepon</th>
        </tr>
      </thead>
      <tbody>
        {{-- @foreach ($article as $index)
          <tr>
            <td>{{$loop->iteration}}</td>
            <td><img src="{{asset('storage/' . $index->image)}}" alt="" width="100"></td>
            <td>{{$index->title}}</td>
            <td>{{$index->price}}</td>
            <td>{{$index->getBrand->brand}}</td>
            <td>
              <a href="{{route('article.edit',$index->id)}}" class="btn btn-warning">Edit</a>
               <form action="{{route('article.delete',$index->id)}}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit" name="">Delete</button>
              </form>
            </td>
          </tr>
        @endforeach --}}
      </tbody>
    </table>
  </div>
@endsection