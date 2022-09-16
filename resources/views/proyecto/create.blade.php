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
                        <span class="card-title">Crear Proyecto</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('proyectos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('proyecto.form')

                        </form>
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
