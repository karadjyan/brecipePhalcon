{{ form('admin/recipe/edit/'~recipe['id'], 'method': 'post') }}
<p><label for='name'>Name</label></p>
<p>{{ text_field('name', 'size': 32, 'value':recipe['name']) }}</p>
<p><label for='description'>Description</label></p>
<p>{{ text_area('description', 'value':recipe['description'],'cols': 32, 'rows': 10) }}</p>
<div class="block-of-ingredients">
    <div class="title-ing">
        <div class="col-md-6"><p>Ингридиент</p></div>
        <div class="col-md-6"><p>Количество</p></div>
    </div>

    {% for ingredient in ingredients %}
    <div id="{{ingredient['id']}}" class="form-group ingredient-counter">
        <div class="col-md-6">
            <input class="form-control" type="text" name="ingredients[]" value="{{ingredient['name']}}" required>
        </div>
        <div class="col-md-5">
            <input type="text" class="form-control" name="count_ing[]" value="{{ingredient['count']}}" required>
        </div>
        <div class="col-md-1">
            <a href="javascript:void(0)" class="btn btn-danger btn-sm" onclick="delete_ing({{ingredient['id']}})">
                <i class="fa fa-minus-square-o" aria-hidden="true"></i>
            </a>
        </div>
    </div>
    {% endfor %}

</div>
<a id="add-ing" href="javascript:void(0)" class="btn btn-default">Добавить ингридиент</a>
<p>{{ submit_button('Edit') }}</p>
{{ end_form() }}

<?php $this->assets->outputJs(); ?>