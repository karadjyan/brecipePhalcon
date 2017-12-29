{{ form('admin/recipe/add', 'method': 'post') }}
    <p><label for='name'>Name</label></p>
    <p>{{ text_field('name', 'size': 32) }}</p>
    <p><label for='description'>Description</label></p>
    <p>{{ text_area('description') }}</p>
    <div class="block-of-ingredients">
        <div class="title-ing">
            <div class="col-md-6"><p>Ингридиент</p></div>
            <div class="col-md-6"><p>Количество</p></div>
        </div>
    </div>
    <a id="add-ing" href="javascript:void(0)" class="btn btn-default">Добавить ингридиент</a>
    <p>{{ submit_button('Create') }}</p>
{{ end_form() }}

<?php $this->assets->outputJs(); ?>