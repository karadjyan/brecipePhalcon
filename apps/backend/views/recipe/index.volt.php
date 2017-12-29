<?php $this->assets->outputCss(); ?>
<?= $this->tag->linkTo(['admin/panel/recipes/add', 'Create']) ?>

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
            <th>menu</th>
            <th>name</th>
            <th>to do</th>
        </tr>
        </thead>
        <tbody>
            <?= $this->tag->form(['admin/menu/add', 'method' => 'post']) ?>
            <?php foreach ($recipes as $recipe) { ?>
                <tr>
                    <td><input type="checkbox" name="recipes[]" value="<?= $recipe['id'] ?>"></td>
                    <td><?= $recipe['name'] ?></td>
                    <td>
                        <p>
                            <button class="md-trigger" data-modal="modal-1" onclick="showFormDelete('/brecipes/admin/recipe/delete/', <?= $recipe['id'] ?>);">Delete</button>
                            <?= $this->tag->linkTo([['for' => 'edit-recipe', 'id' => $recipe['id']], 'edit']) ?>
                        </p>
                    </td>
                </tr>
            <?php } ?>
                <div class="form-menu">
                    <div class="col-md-6"><input class="form-control" type="text" name="name_menu" id="name_menu" required placeholder="Название меню"></div>
                    <div class="col-md-3"><input type="submit" class="btn btn-primary" value="Сохранить меню"></div>
                </div>
            <?= $this->tag->endForm() ?>
        </tbody>
    </table>
<div class="md-overlay"></div>
<script>
    // this is important for IEs
    var polyfilter_scriptpath = 'public/js/';
</script>
<?php $this->assets->outputJs(); ?>