<h1>Admin Panel</h1>
<a href="<?= $this->url->get('admin/logout') ?>">logout</a>

<p>menu</p>

<ul>
    <li><a href="<?= $this->url->get('admin/panel/users') ?>">users</a></li>
    <li><a href="<?= $this->url->get('admin/panel/recipes') ?>">recipes</a></li>
    <li><a href="<?= $this->url->get('admin/panel/ingredients') ?>">ingredients</a></li>
</ul>

