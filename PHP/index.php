<?php
    function display_image_list($imageList)
    {
        foreach ($imageList as $item) {
            echo "img src='image/$item'
            width = 50px height = 50px alt='$item'>";
        }
    }
    $item = array('item1.png', 'item2.png', 'item3.png', 'item4.png');
    display_image_list($item);
?>
<h1>function</h1>
<?php
    $item = array('item5.png', 'item6.png');
    display_image_list($item);