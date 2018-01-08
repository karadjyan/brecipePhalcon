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
    <?php foreach ($users as $user) { ?>
    <tr >
        <td><?= $user['id'] ?></td>
        <td><?= $user['name'] ?></td>
        <td><?= $user['email'] ?></td>
        <td>
            <?= $this->tag->form(['admin/user/delete', 'method' => 'post']) ?>
                <?= $this->tag->hiddenField(['id', 'value' => $user['id']]) ?>
                <?= $this->tag->submitButton(['delete']) ?>
            <?= $this->tag->endForm() ?>
        </td>
    </tr>
    <?php } ?>
    </tbody>
</table>