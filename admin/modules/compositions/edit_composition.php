<h1 class="h3 mb-2 text-gray-800">Інгредієнт</h1>
<p class="mb-4"> 

<?php
    $composition_id = $_GET['id'];
    $composition = mysqli_query($connect, "SELECT * FROM `composition` WHERE `id` = '$composition_id'");
    $composition = mysqli_fetch_assoc($composition);
?>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Змінити назву страви</h6>
    </div>
    
    <div class="card-body">
        <form class="user" action="/admin/modules/compositions/vendor/edit_update.php" method="POST">
            <input type="hidden" name="id" value="<?= $composition['id'] ?>">            
            
            <div class="form-group">
                <p>Назва страви</p>
                <input type="text" class="form-control form-control-user" 
                name="composition" value="<?= $composition['composition'] ?>">
            </div>

            <button type="submit" class="btn btn-success btn-user btn-block">Зберегти зміни</button>
        </form>
    </div>
</div>