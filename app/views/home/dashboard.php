You are logged in

<form method="post" action='/new_mvc/public/home/new'>
<h3>Add new attribute</h3>
Attribute name : <input type='text' name='name' required>
<br>
value: <input type='text' name='value'  required>
<br>
<button type='submit'>Save </button>
</form>

<?php 

foreach($data as $item) {
    echo $item->name. ': ' . $item->value. '<br>';
}

