<?php 
$images = get_sub_field('gallery_images');
if( $images ): ?>
    <div class="gallery">
        <div class="gallery__holder">
        
            <?php foreach( $images as $image ): ?>
                <div class="gallery__item">
                    <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
                </div>
            <?php endforeach; ?>
        </div>

        <?php if( get_sub_field('has_thumbnails') ): ?>
            <div class="gallery__nav">
                <?php foreach( $images as $image ): ?>
                    <div class="gallery__nav__item">
                        <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>

<?php endif; ?>