
@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')
    
    <div class="container-fluid mt--7">
       
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Crear Categoria</span>
                    </div>
                    <div class="card-body">
                    {!! Form::open(['route' => 'categorias.store']) !!}

<div class="form-group">
    <label for="name">Nombre de la Categoría:</label>
    {!!
        Form::text(
            'name',
            null,
            array(
                'class' => 'form-control',
                'placeholder' => 'Ingrese el Nombre'
            )
        )    
    !!}
</div>
<div class="form-group">
    <label for="descripcion">Descripción</label>
    {!!
        Form::textarea(
            'descripcion',
            null,
            array(
                'class' => 'form-control',
            )
        )    
    !!}
</div>

<div class="form-group">
    {!! Form::submit('Guardar', array('class' =>'btn btn-outline-primary')) !!}
    <a href="{{ route('categorias.index')}}" class="btn btn-outline-warning">Cancelar</a>
</div>
{!! Form::close()!!}   
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

