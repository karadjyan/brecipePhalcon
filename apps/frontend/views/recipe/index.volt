<table>
    <thead>
    <tr >
        <th>name</th>
        <th>description</th>
        <th>to do</th>
    </tr>
    </thead>
    <tbody>
    {% for recipe in recipes %}
        <tr>
            <td>{{ recipe['name'] }}</td>
            <td>{{ recipe['description'] }}</td>
            <td>
                <p>
                    {{ link_to(['for': 'show-recipe', 'id': recipe['id']], 'show') }}
                </p>
            </td>
        </tr>
    {% endfor %}
    </tbody>
</table>