<li class="nav-item">
  <a href="{{route('akun.show')}}" class="nav-link"><i class="fas fa-columns"></i> <span>Daftar Akun</span></a>
</li>
<li class="nav-item dropdown">
    <a href="" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Daftar Pengguna</span></a>
    <ul class="dropdown-menu">
      <li><a class="nav-link" href="{{route('pengguna.show','admin')}}">Admin</a></li>
      <li><a class="nav-link" href="{{route('pengguna.show','pembeli')}}">Pembeli</a></li>
      <li><a class="nav-link" href="{{route('pengguna.show','penjual')}}">Penjual</a></li>
      <li><a class="nav-link" href="{{route('pengguna.show','ekspedisi')}}">Ekspedisi</a></li>
    </ul>
  </li>
  <li class="nav-item dropdown">
    <a href="" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Transaksi</span></a>
    <ul class="dropdown-menu">
      <li><a class="nav-link" href="{{route('tran.show','pesanan')}}">Pesanan</a></li>
      <li><a class="nav-link" href="{{route('tran.show','pembayaran')}}">Pembayaran</a></li>
      <li><a class="nav-link" href="{{route('tran.show','pengiriman')}}">Pengiriman</a></li>
    </ul>
  </li>
  <li class="nav-item">
    <a href="{{route('produk.show')}}" class="nav-link"><i class="fas fa-columns"></i> <span>Daftar Produk</span></a>
  </li>