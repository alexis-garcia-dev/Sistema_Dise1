
@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')
    
    <div class="container-fluid mt--7">
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Producto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('productos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $producto->name }}
                        </div>
                        <div class="form-group">
                            <strong>Slug:</strong>
                            {{ $producto->slug }}
                        </div>
                        <div class="form-group">
                            <strong>Descriptions:</strong>
                            {{ $producto->descriptions }}
                        </div>
                        <div class="form-group">
                            <strong>Extract:</strong>
                            {{ $producto->extract }}
                        </div>
                        <div class="form-group">
                            <strong>Price:</strong>
                            {{ $producto->price }}
                        </div>
                        <div class="form-group">
                            <strong>Image:</strong>
                            {{ $producto->image }}
                        </div>
                        <div class="form-group">
                            <strong>Visible:</strong>
                            {{ $producto->visible }}
                        </div>
                        <div class="form-group">
                            <strong>Categoria Id:</strong>
                            {{ $producto->categoria_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
       

        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush