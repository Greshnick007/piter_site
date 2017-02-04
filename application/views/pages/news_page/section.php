<?php $i=0; foreach ($news as $new) { ?>
    <div class="news_table">
    <div class="news_row">
        <div class="news_cell"><img src="<?php echo $new['image']; ?>"/><p id="date_news">Дата добавления:<br/><?php echo $new['dates']; ?></p></div>
        <div class="news_cell">
            <p id="name_news"><a href="/news/page_news?id=<?php echo $new['id']; ?>"><?php echo $new['name']; ?></a></p>
            <p id="about_news"><?php echo $new['opis']; ?></p>
        </div>
    </div>
</div>
    <?php } ?>