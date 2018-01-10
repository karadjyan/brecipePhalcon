{% extends "layouts/layout.volt" %}

{% block styles %}{% endblock %}

{% block content %}
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Admin login</h3>
        <div class="box-tools pull-right"></div>
        <!-- /.box-tools -->
    </div>
    <!-- /.box-header -->
    <div class="box-body">

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
    </div>
</div>
{% endblock %}

{% block scripts %}
{% endblock %}