<?php $this->assets->outputCss(); ?>
<div class="md-modal md-effect-1" id="modal-1">
    <div class="md-content">
        <h3>Do you really want to delete this post?</h3>
        <div>
            <?= $this->tag->form(['', 'method' => 'post', 'id' => 'delete-form']) ?>
            <?= $this->tag->submitButton(['delete']) ?>
            <?= $this->tag->endForm() ?>
            <button class="md-close">Close me!</button>
        </div>
    </div>
</div>

<table>
    <thead>
    <tr >
        <th>name</th>
        <th>to do</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($menus as $menu) { ?>
        <tr>
            <td><?= $menu['name'] ?></td>
            <td>
                <p>
                    <button class="md-trigger" data-modal="modal-1" onclick="showFormDelete('/brecipes/admin/menu/delete/', <?= $menu['id'] ?>);">Delete</button>

                </p>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>
<div class="md-overlay"></div>
<script>
    // this is important for IEs
    var polyfilter_scriptpath = 'public/js/';
</script>
<?php $this->assets->outputJs(); ?>