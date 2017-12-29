<?= $this->tag->linkTo(['admin/panel/ingredients/add', 'Create']) ?>
<table>
    <thead>
    <tr >
        <th>id</th>
        <th>name</th>
        <th>to do</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($ingredients as $ingredient) { ?>
        <tr >
            <td><?= $ingredient['id'] ?></td>
            <td><?= $ingredient['name'] ?></td>
            <td>
                <p>
                    <?= $this->tag->form(['admin/ingredient/delete/' . $ingredient['id'], 'method' => 'post']) ?>
                        <?= $this->tag->submitButton(['delete']) ?>
                    <?= $this->tag->endForm() ?>
                    <?= $this->tag->linkTo([['for' => 'edit-ingredient', 'id' => $ingredient['id']], 'edit']) ?>
                </p>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>