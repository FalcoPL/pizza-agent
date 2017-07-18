<?php if (isset($_POST['category'])) $this -> admin_model -> add_category($_POST["category"]); ?>

<?php/*

foreach($types as $typ){
	echo $typ -> type_name;
	
	Jakoś trzeba zaprezentować...
}
*/
?>



<a href="" id="add">Dodaj Kategorię</a>

<form action="" method="POST">
<div id="form">

</div>
<input type="submit"/>
</form>

<script type="text/javascript">
	
$(document).ready(function() {
	var wrapper = $("#form"); //Fields wrapper
	var add_button = $("#add"); //Add button ID

	$(add_button).click(function(e){ //on add input button click
		e.preventDefault();
		$(wrapper).append('<div><input type="text" name="category[]"/><a href="" class="remove_field">Usuń</a></div>'); //add input box
	});

	$(wrapper).on("click",".remove_field", function(e){ //user click on remove text
		e.preventDefault();
		$(this).parent('div').remove();
	})
});

</script>

