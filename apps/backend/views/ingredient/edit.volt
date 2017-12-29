<h2>ingredient edit</h2>

{{ form('admin/ingredient/edit/'~ingredient['id'], 'method': 'post') }}
    {{ hidden_field('id', 'value':ingredient['id']) }}
    {{ text_field('name', 'value':ingredient['name']) }}
    {{ submit_button('edit') }}
{{ end_form() }}