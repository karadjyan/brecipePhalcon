<table>
    <thead>
    <tr >
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>to do</th>
    </tr>
    </thead>
    <tbody>
    {% for user in users %}
    <tr >
        <td>{{ user['id'] }}</td>
        <td>{{ user['name'] }}</td>
        <td>{{ user['email'] }}</td>
        <td>
            {{ form('admin/user/delete', 'method': 'post') }}
                {{ hidden_field('id', 'value':user['id']) }}
                {{ submit_button('delete') }}
            {{ end_form() }}
        </td>
    </tr>
    {% endfor %}
    </tbody>
</table>