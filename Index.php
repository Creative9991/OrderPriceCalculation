<?php
if(isset($_GET["choice"])){
    $food=$_GET["choice"];
    $c = count($food);
    $price= 0.0;
    for($i=0;$i<$c;$i++){
        if($food[$i]==1){
            $price= $price+8;
            echo "You Have selected Chicken Sandwich<br>";
        }
        if($food[$i]==2){
            $price= $price+10;
            echo "You Have selected Meal<br>";
        }
        if($food[$i]==3){
            $price= $price+2.50;
            echo "You Have selected French Fries<br>";
        }
        if($food[$i]==4){
            $price= $price+5;
            echo "You Have selected Salad<br>";
        }
    }
    echo "Total Price is:" .$price. " Dollars <br>";
}
else{
    echo "Please Choose Something";
}
?>