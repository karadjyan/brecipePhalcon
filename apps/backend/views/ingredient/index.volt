{{ link_to('admin/panel/ingredients/add', 'Create') }}
<table>
    <thead>
    <tr >
        <th>id</th>
        <th>name</th>
        <th>to do</th>
    </tr>
    </thead>
    <tbody>
    {% for ingredient in ingredients %}
        <tr >
            <td>{{ ingredient['id'] }}</td>
            <td>{{ ingredient['name'] }}</td>
            <td>
                <p>
                    {{ form('admin/ingredient/delete/'~ingredient['id'], 'method': 'post') }}
                        {{ submit_button('delete') }}
                    {{ end_form() }}
                    {{ link_to(['for': 'edit-ingredient', 'id': ingredient['id']], 'edit') }}
                </p>
            </td>
        </tr>
    {% endfor %}
    </tbody>
</table>