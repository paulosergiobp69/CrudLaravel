<div class="input-field col s12" >
    <input type="text" name="titulo" value="{{ isset($registro->titulo) ? $registro->titulo : ''}}">
    <label align="center">Titulo</label>
</div>

<div class="input-field col s12">
    <input type="text" name="descricao" value="{{ isset($registro->descricao) ? $registro->descricao : ''}}">
    <label>Descrição</label>
</div>

<div class="input-field col s12">
    <input type="text" name="valor" value="{{ isset($registro->valor) ? $registro->valor : ''}}">
    <label>Valor</label>
</div>

<div class="file-field input-field col s12">
    <div class="btn blue">
        <span>Imagem</span>
        <input type="file" name="imagem">
    </div>
    <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
    </div>    
</div>

@if(isset($registro->imagem))
<div class="input-field col s12">
    <img width="150" src="{{ asset($registro->imagem)}}">
</div>
@endif
<!--
<div class="input-field">
    <p>
        <input type="checkbox" id="publicado" name="publicado"  value="true"/>
        <label for="publicado">Publicar?</label>
    </p>    
    <br><br>
</div>
-->
<!--
<div class="input-field">
    <input type="text" name="test5" value="{{ isset($registro->publicado) ? $registro->publicado : ''}}">
    <label for="test5">Publicar?</label>
</div>
-->
<div class="input-field col s12">
  <p>
      <input type="checkbox" id="test5" name="publicado" {{isset($registro->publicado) && $registro->publicado == 'sim' ? 'checked' : '' }} value="true" />
      <label for="test5">Publicar?</label>
    </p>
    <br><br>
</div>

