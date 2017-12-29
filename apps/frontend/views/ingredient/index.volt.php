<table>
    <thead>
    <tr>
        <th>name</th>
        <th>count recipes</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($ingredients as $ingredient) { ?>
        <tr >
            <td><?= $this->tag->linkTo([['for' => 'show-ingredient', 'id' => $ingredient['id']], $ingredient['name']]) ?></td>
            <td>

            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>