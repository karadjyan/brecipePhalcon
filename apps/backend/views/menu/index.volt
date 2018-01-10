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

<div class="box box-success">
    <div class="box-header with-border">
        <h3 class="box-title">Create recipe</h3>
        <!-- /.box-tools -->
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table>
            <thead>
            <tr >
                <th>name</th>
                <th>to do</th>
            </tr>
            </thead>
            <tbody>
            {% for menu in menus %}
                <tr>
                    <td>{{ menu['name'] }}</td>
                    <td>
                        <p>
                            <button class="md-trigger" data-modal="modal-1" onclick="showFormDelete('/brecipes/admin/menu/delete/', {{menu['id']}});">Delete</button>

                        </p>
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>
</div>
{% endblock %}
{% block scripts %}
    <script src="{{ url('public/js/deleteform.js') }}"></script>

{% endblock %}