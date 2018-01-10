{% extends "layouts/layout.volt" %}

{% block styles %}{% endblock %}

{% block content %}
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Admin register</h3>
        <div class="box-tools pull-right"></div>
        <!-- /.box-tools -->
    </div>
    <!-- /.box-header -->
    <div class="box-body">

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
    </div>
</div>
{% endblock %}

{% block scripts %}
{% endblock %}