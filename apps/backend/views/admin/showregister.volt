<h2>Admin Register</h2>

<?php echo $this->tag->form("admin/register"); ?>

<input type='hidden' name='<?php echo $this->security->getTokenKey() ?>'
       value='<?php echo $this->security->getToken() ?>'/>

<p>
    <label for="email">Name</label>
    <?php echo $this->tag->textField("name"); ?>
</p>

<p>
    <label for="email">E-Mail</label>
    <?php echo $this->tag->textField("email"); ?>
</p>

<p>
    <label for="pass">Password</label>
    <?php echo $this->tag->passwordField("password"); ?>
</p>

<p>
    <?php echo $this->tag->submitButton("Sigin"); ?>
</p>

</form>