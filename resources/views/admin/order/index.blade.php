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
                                    <h1 class="pull-left">Productsssses</h1>
                                    <h1 class="pull-right">
                                       <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('getOrder') !!}">Thêm mới đơn hàng</a>
                                    </h1>
                                </section>
                                <div class="table-responsive m-t-40">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>STT</th>
                                                <th>Tên khách hàng</th>
                                                <th>Tổng tiền</th>
                                                <th>Tiền đã thanh toán</th>
                                                <th>Tiền chưa thanh toán</th>
                                                <th>Lợi nhuận</th>
                                                <th>Ngày mua hàng</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $STT=0;?>

                                        @foreach($order as $orders)
                                            <tr>
                                                <td>{{ $STT=$STT+1 }}</td>
                                                <td>
                                                    <a href="{{ route('OrederShow', ['id' => $orders->id]) }}">{{ $orders->tenkhachhang }}</a>
                                                </td>
                                                  <td>{{ number_format($orders->tongtien,0,",",".") }}</td>
                                                <td>{{ number_format($orders->tiendathanhtoan,0,",",".") }}</td>
                                                 <td>{{ number_format($orders->tienchuathanhtoan,0,",",".") }}</td>
                                                  <td>{{ number_format($orders->loinhuan,0,",",".") }}</td>
                                                <td>{{ $orders->created_at }}</td>
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
