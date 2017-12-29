<table>
    <thead>
    <tr >
        <th>name</th>
        <th>description</th>
        <th>to do</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($recipes as $recipe) { ?>
        <tr>
            <td><?= $recipe['name'] ?></td>
            <td><?= $recipe['description'] ?></td>
            <td>
                <p>
                    <?= $this->tag->linkTo([['for' => 'show-recipe', 'id' => $recipe['id']], 'show']) ?>
                </p>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>