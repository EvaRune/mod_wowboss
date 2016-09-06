<?php 
// No direct access
defined('_JEXEC') or die;

?>

<div id="wowboss-legion">

    <!-- Start loop for each raid -->
    <?php foreach ($raids as $raid): ?>

    <div class="wbl-raid <?php echo $raid->getId() ?> <?php echo $raid->getExpView() ?>">	
        <!-- Raid Name -->
        <div class="wbl-title" style="background-image:url('<?php echo $raid->getImgGrey() ?>')">

            <div class="wbl-title-progress" style="background-image:url('<?php echo $raid->getImg() ?>'); width:<?php echo $raid->BossCount()['normal'] ?>%"></div>

            <h3 class="wbl-raid-title" title="<?php echo JText::_('MOD_WOWBOSS_CLICKTOSHOW') ?>">
                <div class="wbl-arrow"></div>
                <span><?php echo $raid->getName() ?></span>
            </h3>

            <div class="wbl-progress-bar">
                <span class="wbl-normal" style="width:<?php echo $raid->BossCount()['normal'] ?>%"></span>
                <span class="wbl-heroic" style="width:<?php echo $raid->BossCount()['heroic'] ?>%"></span>
                <span class="wbl-mythic" style="width:<?php echo $raid->BossCount()['mythic'] ?>%"></span>
            </div>

        </div>

        <div class="wbl-boss-list">

        <!-- Start loop for each boss -->
        <?php foreach($raid->getBossList() as $boss): ?>	


            <div class="wbl-boss <?php echo $boss->getId() ?> clearfix">
                <div class="wbl-boss-portrait" style="background-image:url('<?php echo $boss->getImg(); ?>')"></div>

                <div class="wbl-boss-info">

                    <?php echo $boss->OpeningTag(); ?>

                    <span class="wbl-boss-name"><?php echo $boss->getName() ?></span><br>
                    <small class="wbl-boss-status wbl-<?php echo $boss->getStatus() ?>"><?php echo $boss->getStatusLabel() ?></small>

                    <?php echo $boss->ClosingTag(); ?>
                </div>
            </div>


        <?php endforeach; ?>
        <!-- End loop for each boss --> 

        </div>

    </div>

    <?php endforeach; ?>
    <!-- End loop for each raid -->
</div>    

