<?php

?>
@extends('layouts.app')
@section('content')

            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Thêm mới đơn hàng</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Thêm đơn hàng</li>
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
                                    {!! Form::open(['route' => 'postOrder']) !!}
                                        <div class="container">
                                             <div class="form-group">
                                                <h3 class="text-primary">Tên Khách hàng</h3>
                                                 <div class="form-conrols">
                                                     {!! Form::text('tenkhachhang', null, ['class' => 'form-control']) !!}
                                                 </div>
                                             </div>
                                             <div class="form-group">
                                                <h3 class="text-primary">Tiền đã thanh toán</h3>
                                                 <div class="form-conrols">
                                                     {!! Form::text('tiendathanhtoan', null, ['class' => 'form-control']) !!}
                                                 </div>
                                             </div>
                                             
                                        <div class="container">
                                            {!! Form::submit('Thêm đơn hàng', ['class' => 'btn btn-primary']) !!}
                                        </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>
</div>
            </div> 
            </div>
@endsection
