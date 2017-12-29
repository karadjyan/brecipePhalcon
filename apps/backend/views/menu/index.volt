<?php $this->assets->outputCss(); ?>
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
<div class="md-overlay"></div>
<script>
    // this is important for IEs
    var polyfilter_scriptpath = 'public/js/';
</script>
<?php $this->assets->outputJs(); ?>