
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
    <a href="{!! route('indexProductsgiaban') !!}"><i class="fa fa-edit"></i><span>Productsgiabans</span></a>
</li>
<li class="{{ Request::is('productsgiabans*') ? 'active' : '' }}">
    <a href="{!! route('listDanhthu') !!}"><i class="fa fa-edit"></i><span>Danh thu bán hàng</span></a>
</li>
<li class="{{ Request::is('productsgiabans*') ? 'active' : '' }}">
    <a href="{!! route('StoreIndex') !!}"><i class="fa fa-edit"></i><span>Sản phầm trong kho</span></a>
</li>



