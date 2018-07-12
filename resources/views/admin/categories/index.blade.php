@extends('layouts.app')
@section('content')

            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Vật liệu xây dựng Minh Sơn</h3> </div>
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
                                <h4 class="card-title">Xuất file</h4>
                                <section class="content-header">
                                    <h1 class="pull-left">Danh mục loại sản phẩm</h1>
                                    <h1 class="pull-right">
                                       <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('getCategories') !!}">Thêm mới loại sản phẩm</a>
                                    </h1>
                                </section>
                                <div class="table-responsive m-t-40">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Ngày tạo</th>
                                                <th>Ngày Cập nhật</th>
                                                <th>Xóa</th>
                                                <th>Sửa</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($categories as $category)
                                            <tr>
                                                <td> <a href="{{ route('showCategories', ['id' => $category->id]) }}">{{ $category->name }}</a></td>
                                                <td>{{ $category->created_at }}</td>
                                                <td>{{ $category->updated_at }}</td>
                                                <td class="text-center">
                                                    <a href="{{ route('delteCategories', ['id' => $category->id]) }}"><span class="glyphicon glyphicon-trash"></span>Delete</a>
                                                </td>
                                                <td class="text-center">
                                                    <a href="{{ route('editCategories', ['id' => $category->id]) }}"><span class="glyphicon glyphicon-trash"></span>Sửa</a>
                                                </td>
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
