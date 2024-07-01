<li class="nav-item">
  <a href="{{route('produk.show')}}" class="nav-link"><i class="fas fa-columns"></i> <span>Daftar Produk</span></a>
</li>
<li class="nav-item dropdown">
  <a href="" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Transaksi</span></a>
  <ul class="dropdown-menu">
    <li><a class="nav-link" href="{{route('tran.show', 'pesanan')}}">Pesanan</a></li>
    <li><a class="nav-link" href="{{route('tran.show', 'pembayaran')}}">Pembayaran</a></li>
  </ul>
</li>