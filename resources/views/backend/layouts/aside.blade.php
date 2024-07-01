<aside id="sidebar-wrapper">
  <div class="sidebar-brand">
    <a href="{{route('dashboard')}}" style="text-transform: none;">CoShop</a>
  </div>
  <div class="sidebar-brand sidebar-brand-sm">
    <a href="#">SC</a>
  </div>
  <ul class="sidebar-menu">
    <li class="menu-header">Starter</li>

    {{-- Include sidebar sesuai dengan peran pengguna --}}
    {{-- @if(Auth::user()->role === 'admin') --}}
        @include('backend.layouts.aside-list.admin-aside')
    {{-- @elseif(Auth::user()->role === 'pembeli') --}}
        @include('backend.layouts.aside-list.buyer-aside')
    {{-- @elseif(Auth::user()->role === 'ekspedisi') --}}
        @include('backend.layouts.aside-list.shipping-aside')
    @endif
  </ul>
</aside>