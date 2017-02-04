<nav>
	<img id="first" src="/source/movie.png"/>
	<ul>
		<li><a <?php if ($this->uri->rsegment(1)=='main') { echo 'style="text-decoration : underline"';} ?> href="<?php base_url()?>/main">Главная</a></li>
		<li><a <?php if ($this->uri->rsegment(1)=='news') { echo 'style="text-decoration : underline"';} ?> href="<?php base_url()?>/news">Новости</a></li>
		<li><a <?php if ($this->uri->rsegment(1)=='gallery') { echo 'style="text-decoration : underline"';} ?> href="<?php base_url()?>/gallery">Галерея</a></li>
		<li><a <?php if ($this->uri->rsegment(1)=='actors') { echo 'style="text-decoration : underline"';} ?> href="<?php base_url()?>/actors">Актеры</a></li>
		<li><a <?php if ($this->uri->rsegment(1)=='filmlist') { echo 'style="text-decoration : underline"';} ?> href="<?php base_url()?>/filmlist">Фильмография</a></li>
	</ul>
	<img id="second" src="/source/line.png"/>
</nav>
<section>
	<div class="content-box">