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
                                <div class="table-responsive m-t-40">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Tên sản phẩm</th>
                                                <th>Giá nhập</th>
                                                <th>Số lượng</th>
                                                <th>Đơn vị tính</th>
                                                <th>Giá bán</th>
                                                <th>Thành tiền giá nhập</th>
                                                <th>Thành tiền giá bán </th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($products as $product)
                                            <tr>
                                                <td>{{ $product->name }}</td>
                                                <td>{{ number_format($product->price,0,",",".") }} </td>
                                                <td>{{ $product->soluong }}</td>
                                                <td>{{ $product->donvitinh }}</td>
                                                <td>{{ number_format($product->giaban,0,",",".") }} </td>
                                                <td>{{ number_format($product->price*$product->giaban,0,",",".") }} </td>
                                                <td>{{ number_format( $product->giaban*$product->soluong,0,",",".") }} </td>
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