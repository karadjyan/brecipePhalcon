{% extends "layouts/layout.volt" %}

{% block styles %}{% endblock %}

{% block content %}
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Edit ingredient</h3>
            <div class="box-tools pull-right"></div>
            <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body">
        {{ form('admin/ingredient/edit/'~ingredient['id'], 'method': 'post', 'class': 'form-horizontal') }}
            <div class="form-group">
                {{ hidden_field('id', 'value':ingredient['id']) }}
                <div class="col-md-1">
                    <label class="control-label" for="name">Name</label>
                </div>
                <div class="col-md-4">
                {{ text_field('name','id':'name', 'value':ingredient['name'], 'class': 'form-control') }}
                </div>
                <div class="col-md-3">
                    {{ submit_button('Save', 'class':'btn btn-primary') }}
                </div>
            </div>
        {{ end_form() }}
        </div>
    </div>
{% endblock %}
{% block scripts %}{% endblock %}