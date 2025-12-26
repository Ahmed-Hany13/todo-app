<?php 
include __DIR__ ."/../core/function.php";

    

if(isset($_GET['id'])){
    $connection = mysqli_connect("localhost","root","","todo");

    
    $id = $_GET['id'];

    $sql = "SELECT * FROM `tasks`  WHERE `id` = '$id' ";
    $my_query = mysqli_query($connection,$sql);
    $row = mysqli_fetch_assoc($my_query);
    if(!$row){
        Set_Session("Data not exist","danger");
        header("location:index.php");
        die;
    }

}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">    
    <title>Document</title>
</head>
<body>
    

    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto">
                <form action="../handlers/update.php?id=<?php echo $_GET['id']; ?>" method="POST" class="form border p-2 my-5">

                    <?php Show_Session() ?>

                    <input type="text" name="title" value="<?php echo $row['title']; ?>"  class="form-control my-3 border border-success" placeholder="add new todo">
                    <input type="submit" value="Save"  class="form-control btn btn-primary my-3 " placeholder="add new todo">
                </form>
            </div>
          
        </div>
    </div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="script.js"></script>
</body>
</html>