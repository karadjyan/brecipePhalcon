<h1>Admin Panel</h1>
<a href="{{ url('admin/logout') }}">logout</a>

<p>menu</p>

<ul>
    <li><a href="{{ url('admin/panel/users') }}">users</a></li>
    <li><a href="{{ url('admin/panel/recipes') }}">recipes</a></li>
    <li><a href="{{ url('admin/panel/ingredients') }}">ingredients</a></li>
</ul>

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