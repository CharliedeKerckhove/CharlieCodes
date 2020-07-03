<h2>Your Projects</h2>
<div class="projects-container">
<?php
    foreach($projects as $project) {
    ?>
        <div class="project-item">
            <?php if(isset($project['thumbnail_link']) && file_exists('assets/images/'.$project['thumbnail_link'])) {
                $thumbnail = "/assets/images/".$project['thumbnail_link'];
            } else {
                $thumbnail = "/assets/images/default_thumbnail.png";
            }?>
            <img class="project-thumbnail" src="<?=$thumbnail?>"/>
            <div class="project-name">
                <?=ucwords($project['title']);?>
            </div>
            <div class="project-summary">
                <?=$project['summary'];?>
            </div>
            <div class="project-status">
                <?=$project['status'];?>
            </div>
            <a class="project-link" href="<?=$project['slug']?>"></a>
        </div>
    <?php 
    }
?>
</div>