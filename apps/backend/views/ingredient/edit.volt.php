<h2>ingredient edit</h2>

<?= $this->tag->form(['admin/ingredient/edit/' . $ingredient['id'], 'method' => 'post']) ?>
    <?= $this->tag->hiddenField(['id', 'value' => $ingredient['id']]) ?>
    <?= $this->tag->textField(['name', 'value' => $ingredient['name']]) ?>
    <?= $this->tag->submitButton(['edit']) ?>
<?= $this->tag->endForm() ?>