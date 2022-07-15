<ul class="collapsible">
    <li>
        <div class="collapsible-header"><i class="material-icons">book</i>Dados principais</div>
        <div class="collapsible-body">

            <div class="row">
                <div class="input-field col s6">
                    <input placeholder="Digite o título do curso" id="titile_input" type="text" class="validate" name="title" value="{{isset($register->title) ? $register->title : ''}}" autocomplete="off">
                    <label for="titile_input">Título</label>
                </div>

                <div class="input-field col s6">
                    <input placeholder="Digite o valor do curso" id="value_input" type="number" class="validate" name="value" value="{{isset($register->value) ? $register->value : ''}}" autocomplete="off">
                    <label for="value_input">Valor</label>
                </div>

                <div class="input-field col s12">
                    <textarea id="textarea1" class="materialize-textarea" name="description">
                    {{isset($register->description) ? $register->description : ''}}
                    </textarea>
                    <label for="textarea1">Descrição</label>
                </div>
            </div>
        </div>
    </li>
    <li>
        <div class="collapsible-header"><i class="material-icons">add_a_photo</i>Mídia</div>
        <div class="collapsible-body"><span>Adicione a foto do curso</span>

            <div class="row">
                <div class="file-field input-field col s12">
                    <div class="btn">
                        <span>Imagem</span>
                        <input type="file" name="image">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text">
                    </div>
                </div>

                @if (isset($register->image))
                <div class="input-field">
                    <img width="150" class="materialboxed" src="{{asset($register->image)}}" alt="">
                </div>
                @endif
            </div>
        </div>
    </li>
</ul>

<p class="col s12">
    <label>
        <input type="checkbox" name="published" value="true" {{isset($register->published) && $register->published == 'yes' ? 'checked' : ''}} />
        <span>Publicar</span>
    </label>
</p>