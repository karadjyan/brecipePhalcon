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
        {{ form('admin/recipe/add', 'method': 'post', 'class':"form-horizontal" ) }}
            <div class="form-group">
                    <div class="col-md-1">
                        <label class="control-label" for='name'>Name</label>
                    </div>
                    <div class="col-md-6">
                        <input class="form-control" type="text" name="name" id="name" required>
                    </div>
            </div>
            <br>
            <div class="form-group">
                    <div class="col-md-1">
                        <label class="control-label" for='description'>Description</label>
                    </div>
                    <div class="col-md-11">
                        <textarea class="form-control" name="description" id="description" cols="30" rows="10" required></textarea>
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
            </div>
            <a id="add-ing" href="javascript:void(0)" class="btn btn-default">Добавить ингридиент</a>

            <div class="form-group">
                <p>{{ submit_button('Create', 'class':"btn btn-primary pull-right RBtnMargin") }}</p>
            </div>
        {{ end_form() }}
    </div>
</div>
{% endblock %}
{% block scripts %}
    <script src="{{ url('public/js/ingredients.js') }}"></script>

{% endblock %}