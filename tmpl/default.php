<?php
/**
 * @copyright Recranet B.V. 2016
 */

defined('_JEXEC') or die;

$accommodations = json_decode($accommodations);
$lang = (string) $params->get('locale');

$link = JURI::base() . $lang . \JText::_('ACCOMMODATION_FEATURED_LINK') . '#!/';
if ($html5Mode) {
    $link = JURI::base() . $lang . \JText::_('ACCOMMODATION_FEATURED_LINK') . '/';
}
?>
<section class="section-featured section-featured-activities">
    <div class="container">
      <div class="c-featured-headline">
        <h3 class="h4 text-center"><?php echo \JText::_('ACCOMMODATION_FEATURED_SUBTITLE'); ?></h3>
        <h2 class="text-center mb-5"><?php echo \JText::_('ACCOMMODATION_FEATURED_TITLE'); ?></h2>
      </div>
      <div class="row row-cards">
        <?php for ($i=0; $i < $amount; $i++) {
            $accommodation = $accommodations[$i];
        ?>
          <div class="col col-12 col-sm-6 col-md-3">
              <a href="<?php echo $link . $accommodation->slug; ?>" class="card card-activity">
                  <img class="card-img card-img-recranet" src="<?php echo 'https://recranet.imgix.net' . $accommodation->image ?> ">
                  <span class="card-img-overlay h-100 d-flex flex-column justify-content-end">
                      <h3 class="card-title"><?php echo $accommodation->title ?></h3>
                  </span>
              </a>
          </div>

        <?php } ?>
      </div>
      <div class="d-block text-center mt-3 pt-3">
          <a class="btn btn-primary btn-zonne" href="<?php echo \JText::_('ACCOMMODATION_FEATURED_LINK'); ?>"><?php echo \JText::_('ACCOMMODATION_FEATURED_BTN'); ?></a>
      </div>
  </div>
</section>
