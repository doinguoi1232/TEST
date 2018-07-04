@extends('layouts.app')
@section('content')

            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Dashboard</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Data Export</h4>
                                <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                                <section class="content-header">
                                    <h1 class="pull-left">Giá bán sản phấm</h1>
                                    <h1 class="pull-right">
                                       <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('getProductsgiaban') !!}">Thêm Sản phẩm muốn bán</a>
                                    </h1>
                                </section>
                                <div class="table-responsive m-t-40">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Tên sản phẩm</th>
                                                <th>Giá bán</th>
                                                <th>Giá nhập</th>
                                                <th>Ngày tạo</th>
                                                <th>Ngày Cập nhật</th>
                                                <th>Xóa</th>
                                                <th>Sửa</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($productsgiabans as $productsgiaban)
                                            <tr>
                                                <td> <a href="{{ route('editProductsgiaban', ['id' => $productsgiaban->id]) }}">{{ $productsgiaban->name }}</a></td>
                                                
                                                <td>{{ $productsgiaban->giaban }}</td>
                                                <td>{{ $productsgiaban->gianhap }}</td>
                                                <td>{{ $productsgiaban->created_at }}</td>
                                                <td>{{ $productsgiaban->updated_at }}</td>
                                                
                                            </tr>
                                        @endforeach
                                        </tbody>
                                        
                                    </table>
                                </div>
                            </div>
                        </div>
                  
                      
                    </div>
                </div>
                <!-- End PAge Content -->
            </div>

@endsection
