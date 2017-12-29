<?php $this->assets->outputCss(); ?>
{{ link_to('admin/panel/recipes/add', 'Create') }}

<div class="md-modal md-effect-1" id="modal-1">
    <div class="md-content">
        <h3>Do you really want to delete this post?</h3>
        <div>
            {{ form('', 'method': 'post', 'id':'delete-form') }}
                {{ submit_button('delete') }}
            {{ end_form() }}
            <button class="md-close">Close me!</button>
        </div>
    </div>
</div>

    <table>
        <thead>
        <tr >
            <th>menu</th>
            <th>name</th>
            <th>to do</th>
        </tr>
        </thead>
        <tbody>
            {{ form('admin/menu/add', 'method': 'post') }}
            {% for recipe in recipes %}
                <tr>
                    <td><input type="checkbox" name="recipes[]" value="{{ recipe['id'] }}"></td>
                    <td>{{ recipe['name'] }}</td>
                    <td>
                        <p>
                            <button class="md-trigger" data-modal="modal-1" onclick="showFormDelete('/brecipes/admin/recipe/delete/', {{recipe['id']}});">Delete</button>
                            {{ link_to(['for': 'edit-recipe', 'id': recipe['id']], 'edit') }}
                        </p>
                    </td>
                </tr>
            {% endfor %}
                <div class="form-menu">
                    <div class="col-md-6"><input class="form-control" type="text" name="name_menu" id="name_menu" required placeholder="Название меню"></div>
                    <div class="col-md-3"><input type="submit" class="btn btn-primary" value="Сохранить меню"></div>
                </div>
            {{ end_form() }}
        </tbody>
    </table>
<div class="md-overlay"></div>
<script>
    // this is important for IEs
    var polyfilter_scriptpath = 'public/js/';
</script>
<?php $this->assets->outputJs(); ?>