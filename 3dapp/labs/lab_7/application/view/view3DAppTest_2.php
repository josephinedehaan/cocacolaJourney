
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Test View</title>
    <style>
        h1 {
            color:red;
            margin-left: 5px;
        }
        h2 {
            color:blue;
            margin:5px;
        }
        p {
            color:green;
            margin-left:5px;
        }
        .imgBox {
            padding: 0.25rem;
            margin-top: 0px;
            margin-bottom: 5px;
            border: 10px solid #dee2e6;
            border-radius: 0.25rem;
            width: 300px;
        }
        .box{
            border: 10px solid rgba(0, 0, 0, 1,0);
            padding: 5px;
            padding-top: 70px;
            float: left;
            margin: 5px;
            height:280px;
            
        }
    </style>
</head>

<body>
    <h1>Second 3D App Test View</h1>
    <p>If you're seeing the test model 3D image data below, then your basic mvc framework is working</p>

    <div class="box">
        <h2><?php echo $model_1 ?></h2>
        <img class="imgBox" src="../lab_7/assets/images/gallery_images/<?php echo $image3D_1 ?>.png">
    </div>
    <div class="box">
        <h2><?php echo $model_2 ?></h2>
        <img class="imgBox" src="../lab_7/assets/images/gallery_images/<?php echo $image3D_2 ?>.png">
    </div>
    <div class="box">
        <h2><?php echo $model_3 ?></h2>
        <img class="imgBox" src="../lab_7/assets/images/gallery_images/<?php echo $image3D_3 ?>.png">
    </div>
    <div class="box">
        <h2><?php echo $model_4 ?></h2>
        <img class="imgBox" src="../lab_7/assets/images/gallery_images/<?php echo $image3D_4 ?>.png">
    </div>
    <div class="box">
        <h2><?php echo $model_5 ?></h2>
        <img class="imgBox" src="../lab_7/assets/images/gallery_images/<?php echo $image3D_5 ?>.png">
    </div>
    <div class="box">
        <h2><?php echo $model_6 ?></h2>
        <img class="imgBox" src="../lab_7/assets/images/gallery_images/<?php echo $image3D_6 ?>.png">
    </div>



</body>

</html>