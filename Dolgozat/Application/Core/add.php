<main>
    <fieldset class='addF'>
        <form name="upload" method="POST" action="index.php?page=upload">
            Image: <br /><input type="text" name="thumbnail"><br />
            Author: <br /><input type="text" name="author"><br />
            <input type="submit" name="btnSubmit" value="Submit"><br />
        </form>
    </fieldset>
</main>

<?php
    if (isset($_POST["btnSubmit"])) 
    {
        $thumbnail = $_POST["thumbnail"];
        $author = $_POST["author"];
        echo $thumbnail." ".$author;
        $marks = array('thumbnail'=>$thumbnail, 'author'=>$author);
        echo json_encode($marks);
        $file = fopen("Application/Datas/photos.json", 'r+');
        fseek($file, -1, SEEK_END);
        fwrite($file, ",".json_encode($marks)."]");
        fclose($file);
    }
    
?> 
