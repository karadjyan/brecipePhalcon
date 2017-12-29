<h3 class="box-title">Рецепты с ингредиентом <strong><?= $ingredient['name'] ?></strong></h3>
<table>
    <thead>
    <tr >
        <th>name</th>
        <th>to do</th>
        <th>more</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($recipes as $recipe) { ?>
        <tr>
            <td><?= $recipe['name'] ?></td>
            <td><?= $recipe['description'] ?></td>
            <td><?= $this->tag->linkTo([['for' => 'show-recipe', 'id' => $recipe['id']], 'show']) ?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>