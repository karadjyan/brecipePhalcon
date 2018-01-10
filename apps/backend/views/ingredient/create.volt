{% extends "layouts/layout.volt" %}

{% block styles %}{% endblock %}

{% block content %}
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Create ingredient</h3>
        <div class="box-tools pull-right">

        </div>
        <!-- /.box-tools -->
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <?php echo $this->tag->form("admin/ingredient/add"); ?>

        <input type='hidden' name='<?php echo $this->security->getTokenKey() ?>'
               value='<?php echo $this->security->getToken() ?>'/>

        <p>
            <label for="email">Name</label>
            <?php echo $this->tag->textField("name"); ?>
        </p>
        <p>
            {{ submit_button("Create", 'class':'btn btn-success')}}

        </p>

        </form>
    </div>
</div>
{% endblock %}
{% block scripts %}{% endblock %}
