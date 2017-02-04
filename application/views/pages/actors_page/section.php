<table class="film-list">
    <tr>
    <?php $i=0; foreach ($actors as $actor) {
        if ($i%4 == 0) {
            echo "</tr><tr>";
        }
    ?>
    <td>
        <?php echo '<p>'.$actor['name'].'</p><img src="'.$actor['img'].'" /><p>'.$actor['about'].'</p>';?>
    </td>
<?php $i++; } ?>
    </tr>
</table>
