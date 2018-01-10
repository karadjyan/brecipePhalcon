{% extends "layouts/layout.volt" %}

{% block styles %}{% endblock %}

{% block content %}
<div class="modal modal-danger fade" id="modal-danger" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Danger Modal</h4>
            </div>
            <div class="modal-body">
                <p>Do you really want to delete this post?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                {{ form('', 'method': 'post', 'id':'delete-form') }}
                {{ submit_button('Delete', 'class': "btn btn-success btn-outline") }}
                {{ end_form() }}
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Recipes</h3>
        <div class="box-tools pull-right">
            {{ link_to('admin/panel/recipes/add', 'Create','class':'btn btn-success') }}
        </div>
        <!-- /.box-tools -->
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div class="col-md-12 table-responsive">
            <table class="table table-hover table-bordered">
                <thead>
                <tr class="bg-primary">
                    <th width="5%">Menu</th>
                    <th width="30%">Name</th>
                    <th width="50%">Description</th>
                    <th width="15%">TODO</th>
                </tr>
                </thead>
                    <tbody>
                        {{ form('admin/menu/add', 'method': 'post') }}
                        {% for recipe in recipes %}
                            <tr>
                                <td><input type="checkbox" name="recipes[]" value="{{ recipe['id'] }}"></td>
                                <td>{{ recipe['name'] }}</td>
                                <td>{{ recipe['description'] }}</td>
                                <td>
                                    <p>
                                        <button type="button" class="btn btn-danger btn-sm" title="Delete" data-toggle="modal" data-target="#modal-danger" onclick="showFormDelete('/brecipes/admin/recipe/delete/', {{recipe['id']}});">
                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                        </button>

                                        {{ link_to(
                                        ['for': 'edit-recipe', 'id': recipe['id']],
                                        '<i class="fa fa-pencil-square-o" aria-hidden="true"></i>',
                                        'class':'btn btn-primary btn-sm',
                                        'title':'Edit'
                                        ) }}
                                    </p>
                                </td>
                            </tr>
                        {% endfor %}
                            <div class="form-menu">
                                <div class="col-md-6"><input class="form-control" type="text" name="name_menu" id="name_menu" required placeholder="Name menu"></div>
                                <div class="col-md-3"><input type="submit" class="btn btn-primary" value="Save menu"></div>
                            </div>
                        {{ end_form() }}
                    </tbody>
                </table>
        </div>
    </div>
{% endblock %}
{% block scripts %}
    <script src="{{ url('public/js/deleteform.js') }}"></script>
{% endblock %}