<?php include "header.php";?>
<?php require "function.php";?>


<div class="container">
    <?php
    //checks krijgen
    $result = getAllCheck();
    //lists krijgen
    $lists = getList();
    $i = 0;
foreach ($lists as $list)
{
    
    ?><div class="list">
      <p><?php echo $list['name']; ?></p>
        <a href="modules/delete_list.php?id=<?php echo $list['id'];?>" class="btn btn-danger" style="margin-bottom:5px ;"><p>Delete list?</p></a>
        <a href="modules/edit_list.php?id=<?php echo $list['id'];?>" class="btn btn-success" style="margin-bottom:5px ;"><p>Edit list?</p></a>
        <a href="modules/create.php?list_id=<?php echo  $result[$i]['list_id']?>" class="btn btn-success" style="margin-bottom:5px ;"><p>Create Task</p></a>
    </div>
    <?php
}
    ?>
</div>
<div class="container">       
  <div class="row">
    <div class="col-md-12">
      <table id="table_id" class="display">
        <thead>
          <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Status</th>
            <th>Time</th>
            <th>Date</th>
            <th>List id</th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($result as $results){ 
           $list = getListSpec($results['list_id']); ?>
            <tr>
              <td><?php echo $results['Name']; ?></td>
              <td><?php echo $results['Description']; ?></td>
              <td><?php echo $results['Status']?></td>
              <td><?php echo $results['Time'];?></td>
              <td><?php echo $results['date'];?></td>
              <td><?php echo $list['name']; ?></td>
              <td><a href="modules/delete.php?ID=<?php echo $results['ID'];?>" class="btn btn-danger" style="margin-bottom:5px ;"><p>Delete task?</p></a></td>
              <td><a href="modules/edit.php?ID=<?php echo $results['ID'];?>" class="btn btn-success" style="margin-bottom:5px ;"><p>Edit task?</p></a></td>
            </tr>
            <?php // end of foreach 
          };?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<?php include "footer.php";?>