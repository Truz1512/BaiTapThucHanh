<?php
    function display_image_list($imageList)
    {
        foreach ($imageList as $item) {
            echo "img src='images/$item'
            width = 50px height = 50px alt='$item'>";
        }
    }
    
?>
<h1>function</h1>
<?php
    $item = array('item5.png', 'item6.png');
    foreach ($item as $item) {
        echo "<img src='images/$item' width = 50px height = 50px alt='$item'>";
    }
?>