<?php include "header.php";?>
<?php require "function.php";?>


<div class="container">
    <?php
    //checks krijgen
    $result = GetAllCheck();
    //lists krijgen
    $lists = getList();
    $i = 0;
foreach ($lists as $list)
{
    
    ?><div class="list">
        <a href="modules/delete_list.php?id=<?php echo $list['id'];?>" class="btn btn-danger" style="margin-bottom:5px ;"><p>Delete list?</p></a>
        <a href="modules/edit_list.php?id=<?php echo $list['id'];?>" class="btn btn-success" style="margin-bottom:5px ;"><p>Edit list?</p></a>
        <a href="modules/create.php?list_id=<?php echo  $result[$i]['list_id']?>" class="btn btn-success" style="margin-bottom:5px ;"><p>Create Task</p></a>
        <?= $i++; ?>
    <?php
    foreach ($result as $results)
    {    
    ?>
    <?php
        //checkt welke list er bij welke check hoort
        if ($results['list_id']===$list["id"])
        {
        ?>
    <div id="container-fluid" class="homepage-container" style="background-color:crimson; padding:50px ;">
  </div>

        <!-- <div class="left">
            <h2 class="title"><?php echo $results['Name']; ?></h2><i class="fas fa-user"></i>
            <p class="text"><?php echo $results['Description']; ?></p>
            <p class="status" ><?php echo $results['Status']?></p>
        </div>
        <div class="right">
            <p class="time"><?php echo $results['Time'];?></p>
            <p class="date"><?php echo $results['date'];?></p>
            <a class="button-index" href="modules/edit.php?ID=<?php echo $results['ID'];?>">Edit<i class="fas fa-pencil-alt"></i></a>
            <a class="button-index-del" href="modules/delete.php?ID=<?php echo $results['ID'];?>">Delete<i class="fas fa-trash-alt"></i></a>
        </div> -->
    </div>
    <?php 
        }//end of if 
    }
    ?> 
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
          foreach ($result as $results){ ?>
            <tr>
              <td><?php echo $results['Name']; ?></td>
              <td><?php echo $results['Description']; ?></td>
              <td><?php echo $results['Status']?></td>
              <td><?php echo $results['Time'];?></td>
              <td><?php echo $results['date'];?></td>
              <td><?php echo $results['list_id'];?></td>
            </tr>
            <?php // end of foreach 
          };?>
        </tbody>
      </table>
    </div>

  </div>
</div>

<?php include "footer.php";?>