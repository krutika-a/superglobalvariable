<html>
<head>

<script>
function test(){

alert("444");
}
</script>
</head>


<form method="get" action="ind.php">
<input type="text" name="name">

<input type="text" name="age">


<input type="submit">
</form>
</html>

<?php echo "Hello";

print_r($_GET);


?>
