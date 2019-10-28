<div class="row container">
  <div class="col s12 m14">
    <div class="card darken-1">
      <div class="card-header center"><h5>{{ __('Novo Chamado') }}</h5></div>
      <div class="card-content">
        <div class="row">
          
          <div class="row">
            <div class="input-field col s4 form-group {{ $errors->has('tombamento') ? 'has-error' : "" }}">
              <i class="material-icons prefix" id="icone">code</i>
              {!! form::label('tombamento','Número do Tombamento', ['for'=>'last_name']) !!}
              {{ Form::text('tombamento',NULL, ['class'=>'validate', 'id'=>'tombamento']) }}
              {{ $errors->first('tombamento', '<p class="help-block">:message</p>') }}
            </div>
          </div>

          <div class="row">
            <div class="input-field col s11 form-group {{ $errors->has('descricao') ? 'has-error' : "" }}">
              <i class="material-icons prefix" id="icone">short_text</i>
              {!! form::label('descricao','Descrição', ['for'=>'last_name']) !!}
              {{ Form::text('descricao',NULL, ['id'=>'descricao', 'class'=>'validate']) }}
              {{ $errors->first('descricao', '<p class="help-block">:message</p>') }}
            </div>
          </div>

          <div class="form-group center">
            {{ Form::button(isset($model)? 'Update' : 'Enviar' , ['class'=>'btn btn-success', 'type'=>'submit']) }}
          </div>

        </div>
      </div>
    </div>
  </div>
</div>