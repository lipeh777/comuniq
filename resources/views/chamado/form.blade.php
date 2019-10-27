<div class="card-content">   
  <div class=" {{ $errors->has('tombamento') ? 'has-error' : "" }}">
    {!! form::label('tombamento','Número do Tombamento', ['for'=>'last_name']) !!}
    {{ Form::text('tombamento',NULL, ['id'=>'tombamento']) }}
    {{ $errors->first('tombamento', '<p class="help-block">:message</p>') }}
  </div>

  <div class=" {{ $errors->has('descricao') ? 'has-error' : "" }}">
    {!! form::label('descricao','Descrição', ['for'=>'last_name']) !!}
    {{ Form::text('descricao',NULL, ['id'=>'descricao']) }}
    {{ $errors->first('descricao', '<p class="help-block">:message</p>') }}
  </div>

  <div class="form-group">
    {{ Form::button(isset($model)? 'Update' : 'Enviar' , ['class'=>'btn btn-success', 'type'=>'submit']) }}
  </div>
</div>
