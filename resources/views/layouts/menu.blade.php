
<li class="{{ Request::is('productsssses*') ? 'active' : '' }}">
    <a href="{!! route('indexCategories') !!}"><i class="fa fa-edit"></i><span>Danh mục loại sản phẩm đã nhập</span></a>
</li>
<li class="{{ Request::is('productsssses*') ? 'active' : '' }}">
    <a href="{!! route('indexProducts') !!}"><i class="fa fa-edit"></i><span>Sản phẩm đã nhập</span></a>
</li>
<li class="{{ Request::is('productsssses*') ? 'active' : '' }}">
    <a href="{!! route('indexOreder') !!}"><i class="fa fa-edit"></i><span>Đơn hàng</span></a>
</li>
<li class="{{ Request::is('productsgiabans*') ? 'active' : '' }}">
    <a href="{!! route('indexEveryOreder') !!}"><i class="fa fa-edit"></i><span>Đơn hàng trong ngày</span></a>
</li>

<li class="{{ Request::is('productsgiabans*') ? 'active' : '' }}">
    <a href="{!! route('indexProductsgiaban') !!}"><i class="fa fa-edit"></i><span>Giá bán sản phẩm</span></a>
</li>
<li class="{{ Request::is('productsgiabans*') ? 'active' : '' }}">
    <a href="{!! route('listDanhthu') !!}"><i class="fa fa-edit"></i><span>Danh thu bán hàng</span></a>
</li>
<li class="{{ Request::is('productsgiabans*') ? 'active' : '' }}">
    <a href="{!! route('StoreIndex') !!}"><i class="fa fa-edit"></i><span>Sản phầm trong kho</span></a>
</li>
<li class="{{ Request::is('productsgiabans*') ? 'active' : '' }}">
    <a href="{!! route('listDanhThuThang') !!}"><i class="fa fa-edit"></i><span>Danh thu hàng tháng</span></a>
</li>
<li class="{{ Request::is('productsgiabans*') ? 'active' : '' }}">
    <a href="{!! route('listDanhThuNam') !!}"><i class="fa fa-edit"></i><span>Danh thu Năm</span></a>
</li>




