<h2>Admin Login</h2>

<?php echo $this->tag->form("admin/login"); ?>

<input type='hidden' name='<?php echo $this->security->getTokenKey() ?>'
       value='<?php echo $this->security->getToken() ?>'/>

<p>
    <label for="email">E-Mail</label>
    <?php echo $this->tag->textField("email"); ?>
</p>

<p>
    <label for="password">Password</label>
    <?php echo $this->tag->passwordField("password"); ?>
</p>

<p>
    <?php echo $this->tag->submitButton("Login"); ?>
</p>

</form>