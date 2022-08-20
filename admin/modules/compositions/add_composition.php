<h1 class="h3 mb-2 text-gray-800">Страви</h1>
<p class="mb-4"> 
    <?php 
    // require_once '/config/db.php';

    if(!empty($_POST)) {
        $composition = $_POST['composition'];
        $sql = "INSERT INTO `composition` (`id`, `composition`) VALUES (NULL, '$composition')";
        if (mysqli_query($connect, $sql)) {
            echo 'Страву додано. <a href="/admin/compositions.php">Повернутись</a>';
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($connect);
        }
    }
   
?>


</p>


<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Додавання нової страви</h6>
    </div>
    
    <div class="card-body">

        <form class="user" action="?page=add_composition" method="POST">
       
            <div class="form-group">
                <p>Назва страви</p>
                <input type="text" class="form-control form-control-user" name="composition" required>

            </div>

            <button type="submit" class="btn btn-success btn-user btn-block">Створити нову страву</button>
        </form>
    </div>
</div>
