<h2>ingredient Register</h2>

<?php echo $this->tag->form("admin/ingredient/add"); ?>

<input type='hidden' name='<?php echo $this->security->getTokenKey() ?>'
       value='<?php echo $this->security->getToken() ?>'/>

<p>
    <label for="email">Name</label>
    <?php echo $this->tag->textField("name"); ?>
</p>
<p>
    <?php echo $this->tag->submitButton("Create"); ?>
</p>

</form>