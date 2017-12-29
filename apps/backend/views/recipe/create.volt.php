<?= $this->tag->form(['admin/recipe/add', 'method' => 'post']) ?>
    <p><label for='name'>Name</label></p>
    <p><?= $this->tag->textField(['name', 'size' => 32]) ?></p>
    <p><label for='description'>Description</label></p>
    <p><?= $this->tag->textArea(['description']) ?></p>
    <div class="block-of-ingredients">
        <div class="title-ing">
            <div class="col-md-6"><p>Ингридиент</p></div>
            <div class="col-md-6"><p>Количество</p></div>
        </div>
    </div>
    <a id="add-ing" href="javascript:void(0)" class="btn btn-default">Добавить ингридиент</a>
    <p><?= $this->tag->submitButton(['Create']) ?></p>
<?= $this->tag->endForm() ?>

<?php $this->assets->outputJs(); ?>