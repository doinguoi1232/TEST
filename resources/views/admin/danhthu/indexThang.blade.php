@extends('layouts.app')
@section('content')

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
                                                <th>Tháng</th>
                                                <th>Danh thu</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $stt=0;?>
                                        @foreach($danhthu as $danhthues)
                                            <tr>
                                                <td> {{ $stt= $stt+1}}</a></td>
                                                
                                                <td>{{ date('m-Y', strtotime($danhthues->created_at)) }}</td>
                                                <td>{{ number_format($danhthues->danhthu,0,",",".") }} </td>
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
