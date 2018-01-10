{% extends "layouts/layout.volt" %}

{% block styles %}
    <script src="{{ url('public/ckeditor/ckeditor.js') }}"></script>
{% endblock %}

{% block content %}
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">Create recipe</h3>
            <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            {{ form('admin/recipe/edit/'~recipe['id'], 'method': 'post', 'calss': 'form-horisontal') }}
            <div class="form-group">
                <div class="col-md-1">
                    <label class="control-label" for='name'>Name</label>
                </div>
                <div class="col-md-6">
                    <input class="form-control" type="text" name="name" id="name" value="{{ recipe['name'] }}" required>
                </div>
            </div>
            <br>
            <div class="form-group">
                <div class="col-md-1">
                    <label class="control-label" for='description'>Description</label>
                </div>
                <div class="col-md-11">
                    <textarea class="form-control" name="description" id="description" cols="30" rows="10" required>{{ recipe["description"] }}</textarea>
                    <script>
                        CKEDITOR.replace( 'description' );
                    </script>
                </div>
            </div>
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
        </div>
    </div>
{% endblock %}
{% block scripts %}
    <script src="{{ url('public/js/ingredients.js') }}"></script>

{% endblock %}
