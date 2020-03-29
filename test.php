<html>
<head>
   <meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <?php
  
    if(move_uploaded_file($_FILES["myfile"]["tmp_name"],"data/".$_FILES["myfile"]["name"])){
      echo "Uploaded Success";
    }
    else{
      echo "Failed";
    }
   ?>
</body>
</html>
