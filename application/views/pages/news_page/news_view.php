<?php foreach ($news as $new) { ?>
<p id="intro"><?php echo $new['name']; ?></p>
<img id="news_photo" src="<?php echo $new['image']; ?>"/>
<p><?php echo $new['opis']; ?></p>
<p><?php echo $new['text_new']; ?></p>
<p id="date_add_news">Дата добавления: <?php echo $new['dates']; ?></p>
<?php } ?>