<style>
div {
    background-color:rgb(127,180,127);
    padding:1em;
}
div.get {
    background-color:rgb(127,127,180);
    padding:1em;
}
</style>
This environment should work for our html css js and php needs, the editey environment is ok.
<br>
This enviroment should work on a wide range of needs, and uses less resources than editey.
<br>
Files can be edited anywhere and uploaded if it's more convienient.
<div>
<?php
echo '<div class="get">'.strip_tags($_GET['variable']).'</div><br>This will be executed before the document gets to the browser view the page source and you won\'t see any php';
?>
<br>
<a href="?variable=put+whatever+you+want+here+get+variables">Try out this url</a>
<form action="" method="get">
Try out text submission : <input type="text" name="variable" size="30">
<input type="submit">
</form>
</div>
