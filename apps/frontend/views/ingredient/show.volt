<h3 class="box-title">Рецепты с ингредиентом <strong>{{ingredient['name']}}</strong></h3>
<table>
    <thead>
    <tr >
        <th>name</th>
        <th>to do</th>
        <th>more</th>
    </tr>
    </thead>
    <tbody>
    {% for recipe in recipes %}
        <tr>
            <td>{{ recipe['name'] }}</td>
            <td>{{ recipe['description'] }}</td>
            <td>{{ link_to(['for': 'show-recipe', 'id': recipe['id']], 'show') }}</td>
        </tr>
    {% endfor %}
    </tbody>
</table>