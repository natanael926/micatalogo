<div class="form-group">
    {!! Form::label('name', 'Nombre genero', ['class' => 'form-label']); !!}
    <div class="controls">
        {!! Form::text('name', $genre->name, ['class' => 'form-control', 'id' => 'name', 'placeholder' => 'Por favor introduzca un nombre de genero']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('description', 'Detalle', ['class' => 'form-label']); !!}
    <div class="controls">
        {!! Form::text('description', $genre->description, ['class' => 'form-control', 'id' => 'description', 'placeholder' => 'Por favor introduzca un detalle del genero']) !!}
    </div>
</div>