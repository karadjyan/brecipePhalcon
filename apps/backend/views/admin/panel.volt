<h1>Admin Panel</h1>
<a href="{{ url('admin/logout') }}">logout</a>

<p>menu</p>

<ul>
    <li><a href="{{ url('admin/panel/users') }}">users</a></li>
    <li><a href="{{ url('admin/panel/recipes') }}">recipes</a></li>
    <li><a href="{{ url('admin/panel/ingredients') }}">ingredients</a></li>
</ul>