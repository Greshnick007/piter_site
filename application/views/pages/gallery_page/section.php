<style>
    #galleria{height:400px; width : 700px; margin : 0 auto;}
</style>
<script src="<?php base_url()?>/scripts/jquery.min.js"></script>
<script src="<?php base_url()?>/scripts/galleria-1.2.2.min.js"></script>
<div id="galleria">
    <?php foreach ($photo as $img) { ?>
        <a href="<?php echo $img['uri']; ?>">
            <img title="<?php echo $img['name']; ?>"
                 alt="<?php echo $img['opis']; ?>"
                 src="<?php echo $img['uri']; ?>">
        </a>
    <?php } ?>
</div>
<script>
    // Load the classic theme
    Galleria.loadTheme('<?php base_url()?>/scripts/themes/classic/galleria.classic.js');
    // Initialize Galleria
    $('#galleria').galleria();
</script>