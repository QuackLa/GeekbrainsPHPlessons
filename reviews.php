<?php include "config/connect.php";
    if(!empty($_POST['review'])){ header("Location:index.php");
        $otziv=htmlspecialchars($_POST['review']);
        $newotziv=mysqli_query($side,"INSERT INTO reviews (`new review`) VALUE ('$otziv')");}
        $allreviews = mysqli_query($side,"SELECT `new review`,`time` FROM reviews") or die('Allreviews syntaxys error');
        $jay = [];
        while($i = mysqli_fetch_assoc($allreviews))
            $jay[] = $i;
        foreach($jay as $key => $value)
           echo strip_tags($value['time'])."<br>". strip_tags($value['new review'])."<br><br>" ;
?>