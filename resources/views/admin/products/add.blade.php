<?php

?>
@extends('layouts.app')
@section('content')

            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Thêm mới sản phẩm</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Thêm mới sản phẩm</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
<div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="basic-elements">
                                    {!! Form::open(['route' => 'postProducts']) !!}
                                        <div class="container">
                                             <div class="form-group col-lg-10">
                                                <h3 class="text-primary">Tên sản phẩm</h3>
                                                 <div class="form-conrol">
                                                     {!! Form::text('name', null, ['class' => 'form-control']) !!}
                                                 </div>
                                             </div>
                                             <div class="form-group col-lg-10">
                                                <h3 class="text-primary">Số lượng </h3>
                                                 <div class="form-conrol">
                                                     {!! Form::text('so_luong', null, ['class' => 'form-control']) !!}
                                                 </div>
                                             </div>
                                            <div class="form-group col-lg-10">
                                                <h3 class="text-primary">Giá bán </h3>
                                                 <div class="form-conrol">
                                                     {!! Form::text('gia_ban', null, ['class' => 'form-control']) !!}
                                                 </div>
                                             </div>
                                             <div class="form-group col-lg-10">
                                                <h3 class="text-primary">Đơn giá</h3>
                                                 <div class="form-conrol">
                                                     {!! Form::text('don_gia', null, ['class' => 'form-control']) !!}
                                                 </div>
                                             </div>
                                            <div class="form-group col-lg-10">
                                                <h3 class="text-primary">Tên nhà cùng cấp</h3>
                                                 <div class="form-conrol">
                                                     {!! Form::text('nha_cung_cap', null, ['class' => 'form-control']) !!}
                                                 </div>
                                             </div>
                                             <div class="form-group col-lg-10">
                                                <h3 class="text-primary">Đơn vị</h3>
                                                 <div class="form-conrol">
                                                    {{ Form::select('don_vi', [
                                                        'vien' => 'Vien',
                                                        'bao' => ' Bao',
                                                        'cay' => 'Cây',
                                                        'thung' => 'Thùng',
                                                        'khoi' => ' Khối',
                                                        'tan' => 'Tấn',
                                                        'vien' => 'Vien',
                                                        'kg' => 'kg']
                                                     ) }}
                                                 </div>
                                             </div>
                                           <div class="form-group col-lg-10">
                                                <h3 class="text-primary">Loại sản phẩm</h3>
                                                 <div class="form-conrol">
                                                    <select name="categories"  id="members">
                                                       @foreach($categories as $categorie)
                                                        <option value="{{$categorie->id}}">{{$categorie->name}}</option>
                                                        @endforeach
                                                    </select>
                                                 </div>
                                             </div>
                                          <div class="form-group col-lg-10">
                                                <h3 class="text-primary">Ghi chú</h3>
                                                 <div class="form-conrol">
                                                     {!! Form::text('ghi_chu', null, ['class' => 'form-control']) !!}
                                                 </div>
                                             </div>
                 
                                         </div>
                                        <div class="container">
                                            {!! Form::submit('Thêm sản phẩm', ['class' => 'btn btn-primary']) !!}
                                        </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>
</div>
            </div> 

@endsection
