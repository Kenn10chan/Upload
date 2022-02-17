<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Documents || KENNCHAN</title>
</head>

<body>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="file">
        <button type="submit" name="submit">UPLOAD</button>
        <?php
        if (isset($_GET['uploadsuccess'])) {
            echo "FILE SUCCESSIFULY UPLOADED!";
            if (isset($_POST['submit'])) {
                header("location:index.php");
                echo "";
            }
        }
        ?>

    </form>

</body>

</html>