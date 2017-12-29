<div class="box-header with-border">
    <h3 class="box-title"><strong>{{recipe['name']}}</strong></h3>
</div>
<div class="box-body">
    <p>{{ recipe['description'] }}</p>
</div>
<p>Ингридиенты: </p>
<div class="block-of-ingredients">
    <div class="col-md-10 table-responsive">
        <table class="table table-hover table-bordered">
            <thead>
            <tr class="bg-purple">
                <th>Ингридиент</th>
                <th>Количество</th>
            </tr>
            </thead>
            <tbody>
            {% for ingredient in ingredients %}
                <tr class="bg-white">
                    <td><a href="{{ static_url('ingredient/'~ingredient['id_ingredient'])}}">{{ingredient['name']}}</a></td>
                    <td>{{ingredient['count']}}</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>
</div>