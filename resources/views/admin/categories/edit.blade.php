<?php

?>
@extends('layouts.app')
@section('content')


            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Sửa loại sản phẩm</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Sửa loại sản phẩm</li>
                    </ol>
                </div>
            </div>
            @if ($errors->any())
        <div class="alert alert-primary">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
@endif
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
<div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="basic-elements">
                                  {!! Form::open(['route' => ['editStoreCategories', $category->id]]) !!}
                                        <div class="container">
                                          <div class="col-lg-10">
                                                <h3 class="text-primary">Sửa loại sản phẩm</h3>
                                                

                                                        {!! Form::text('name', $category->name, ['class' => 'form-control']) !!}
               {!! Form::submit('Thêm loại sản phảm', ['class' => 'btn btn-primary']) !!}
                                     
      
                                          </div>
                                         </div>

                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>
</div>
            </div> 
@endsection
