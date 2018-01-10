{% extends "layouts/layout.volt" %}

{% block styles %}{% endblock %}

{% block content %}

    {% for recipe in recipes %}

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">{{ recipe['name'] }}</h3>

                <div class="box-tools pull-right">
                    {{ link_to(['for': 'show-recipe', 'id': recipe['id']],
                    '<i class="fa fa-eye" aria-hidden="true"></i>',
                    'class': 'btn btn-danger btn-sm pull-right'
                    ) }}
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
                {{ recipe['description'] }}
            </div>
            <!-- /.box-body -->
            <div class="box-footer text-center">
                <a href="javascript:void(0)" class="uppercase"></a>
            </div>
            <!-- /.box-footer -->
        </div>


    {% endfor %}
{% endblock %}

{% block  scripts %}{% endblock %}