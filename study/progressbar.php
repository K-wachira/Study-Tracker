 <?php
$current= 10; 
$total = 190;
$percent = round(($current/$total )*100,1);

?>

<style type ="text/css">

.outter{
    height: 25px;
    width: 300px;
    border:solid 1px #44f1A6;

}
.inner{
    height: 25px;
    width: <?php  echo $percent;?>%;
    color: #87ADD6;
    background-color:lightblue;
}
</style>


<div class = 'outter'>
    <div class ='inner'></div>
</div>

