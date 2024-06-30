<aside id="sidebar-wrapper">
  <div class="sidebar-brand">
    <a href="#" style="text-transform: none;">CoShop</a>
  </div>
  <div class="sidebar-brand sidebar-brand-sm">
    <a href="#">SC</a>
  </div>
  <ul class="sidebar-menu">
    <li class="menu-header">Starter</li>

    {{-- Kalo bisa dibikin include sesuai login sebagai apa --}}
    {{-- nanti di view backend tambah folder untuk setiap role --}}
    @include('backend.layouts.aside-list.admin-aside')
    @include('backend.layouts.aside-list.buyer-aside')
    @include('backend.layouts.aside-list.shipping-aside')
    
  </ul>
</aside>