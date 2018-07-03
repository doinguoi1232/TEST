@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Productgiaban
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($productgiaban, ['route' => ['productgiabans.update', $productgiaban->id], 'method' => 'patch']) !!}

                        @include('productgiabans.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection