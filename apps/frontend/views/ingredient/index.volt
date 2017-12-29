<table>
    <thead>
    <tr>
        <th>name</th>
        <th>count recipes</th>
    </tr>
    </thead>
    <tbody>
    {% for ingredient in ingredients %}
        <tr >
            <td>{{ link_to(['for': 'show-ingredient', 'id': ingredient['id']], ingredient['name']) }}</td>
            <td>

            </td>
        </tr>
    {% endfor %}
    </tbody>
</table>