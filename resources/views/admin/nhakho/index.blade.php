@extends('admin.master')
@section('content')
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Vật liệu xây dựng minh Sơn</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Vật liệu xây dựng minh Sơn</li>
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
                    
                                <div class="table-responsive m-t-40">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                
                                                <th>Tên sản phẩm</th>
                                                <th>Số lượng</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $stt=0;?>
                                        @foreach($nhakho as $nhakhos)
                                            <tr>
                                                <?php $products = DB::table('products')->where('id',
                                                $nhakhos->id)->first ();?>
                                                <td> {{ $stt= $stt+1}}</a></td>
                                                
                                                <td>{{  $products->name }}</td>
                                                <td>{{  $nhakhos->soluong }}</td>
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
        </div>
@endsection
