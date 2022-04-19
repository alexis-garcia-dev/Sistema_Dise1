<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('name', $producto->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('slug') }}
            {{ Form::text('slug', $producto->slug, ['class' => 'form-control' . ($errors->has('slug') ? ' is-invalid' : ''), 'placeholder' => 'Slug']) }}
            {!! $errors->first('slug', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descriptions', $producto->descriptions, ['class' => 'form-control' . ($errors->has('descriptions') ? ' is-invalid' : ''), 'placeholder' => 'Descriptions']) }}
            {!! $errors->first('descriptions', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('sub nombre') }}
            {{ Form::text('extract', $producto->extract, ['class' => 'form-control' . ($errors->has('extract') ? ' is-invalid' : ''), 'placeholder' => 'Extract']) }}
            {!! $errors->first('extract', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('precio') }}
            {{ Form::text('price', $producto->price, ['class' => 'form-control' . ($errors->has('price') ? ' is-invalid' : ''), 'placeholder' => 'Price']) }}
            {!! $errors->first('price', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-md-6">
                <label for="image">Imagen:</label>
                {{ Form::file('image',null,['required' => 'required'])}}
        </div>
        <div class="card-header">
            <label for="visible">Estado:</label>
            <input type="checkbox" name="visible" {{ $producto->visible == 1 ? "checked='checked'" : ''}}> 
         </div>
       

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </div>
</div>