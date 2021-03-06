@extends('layouts.main')

@section('title','Productos')

@section('styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" href="{{asset('dist/css/alt/AdminLTE-select2.min.css')}}">
<link rel="stylesheet" href="{{asset('css/app.css')}}">
@endsection

@section('breadcrumb')
<ol class="breadcrumb">
  <li><a href="{{ route('productos.index') }}">Productos</a></li>
</ol>
@endsection

@section('content')
<section class="content-header">
      <a href="{{ route('productos.create') }}">
      <button class="btn bg-olive pull-left">
      <span class="fa fa-plus"></span> &nbsp; Añadir producto
      </button>
    </a> 
    <p><br></p>

</section>
<section class="content">
  @include('productos.table')
</section>
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>
<script>
$(document).ready(function() {
  $('#tabla-productos').DataTable({
      'language': {
               'url' : '//cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json'
          }
  });

  function confirmarDeleteProducto(){
    if(confirm('¿Estás seguro de eliminar producto?'))
      return true;
    else
      return false;
  }
});
</script>
@endsection