<?php include "../module-header.php";?>
<?php require "../function.php";?>


<Div class="form-create">
    <h1>Maak een taak aan</h1>
    <form method="post" action="create_function.php" name="create_form">
        <input class="form-control" type="text" value="name" name="Name"></input>
        <input class="form-control" value="task" type="text-area" name="Description"></input>
        <select class="form-control" name="Status" id="select">
            <option value="in afwerking">In afwerking</option>
            <option value="klaar">Klaar</option>
            <option value="bezig">Bezig</option>
            <option value="nog beginnen">Nog beginnen</option>
        </select>
        <br>
        <input class="form-control" type="date" name="date" value="date">
        <input class="form-control" type="time" name='Time'>
        <input type="hidden" name="list_id" id="list_id" value="<?php echo $_GET['list_id'] ?>">
        <button class="btn btn-light" name="submit" >Maak Check aan</button>
    </form>
</Div>
<?php include "../footer.php";?>