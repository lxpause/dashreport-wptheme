<?php
/**
 * Title: 404
 * Slug: dashreport/404
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|xx-large","top":"var:preset|spacing|xx-large"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xx-large);padding-bottom:var(--wp--preset--spacing--xx-large)"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php echo __('404', 'dashreport');?></h2>
<!-- /wp:heading -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"100%","style":{"border":{"width":"0px","style":"none"}},"layout":{"wideSize":"100%"}} -->
<div class="wp-block-column" style="border-style:none;border-width:0px;flex-basis:100%"><!-- wp:paragraph {"align":"center","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"><?php echo __('<strong>Oops! Page</strong> <strong>not found</strong>', 'dashreport');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo __('Sorry but the page you are looking for could not be found. It might have been deleted, renamed, or is temporarily unavailable. You can search the site below, or return to the front page.', 'dashreport');?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"","placeholder":"Search...","width":75,"widthUnit":"%","buttonText":"Search","buttonUseIcon":true,"align":"center"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->