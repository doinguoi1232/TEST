<?php

?>
@extends('layouts.app')
@section('content')

            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Sản phẩm khách hàng mua</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Sản phẩm khách hàng mua</li>
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
                                    {!! Form::open(['route' => 'postOrderDetailStrore']) !!}
   
                                        <div class="container">
                                             <div class="form-group">
                                               <input type="hidden" value="<?php echo $detail;?>" name="order_id">
                                                <h3 class="text-primary">Tên Sản phẩm:</h3>
                                                 <div class="form-conrols">
                                                    <select name="ten_san_pham"  id="members">
                                                      
                                                       @foreach($products as $product)
                                                            <option value="{{$product->id}}">{{$product->name}}</option>
                                                       @endforeach
                                                    </select>
                                                 </div>
                                             </div>
                                              <div class="form-group">
                                                <h3 class="text-primary">Số lượng:</h3>
                                                 <div class="form-conrols">
                                                   
                                                     {!! Form::text('so_luong', null, ['class' => 'form-control']) !!}
                                                 </div>
                                             </div>
                                             <div class="form-group">
                                                <h3 class="text-primary">Giảm giá:</h3>
                                                 <div class="form-conrols">
                                                     {!! Form::text('giam_gia', null, ['class' => 'form-control']) !!}
                                                 </div>
                                             </div>
                                             
                                        <div class="container">
                                            {!! Form::submit('Thêm sẩn phẩm vào đơn hàng', ['class' => 'btn btn-primary']) !!}
                                        </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>
</div>
            </div> 

@endsection
