<?php

namespace Drupal\metatag_open_graph\Plugin\metatag\Tag;

use \Drupal\metatag\Plugin\metatag\Tag\MetaPropertyBase;

/**
 * The Open Graph "Article tags" meta tag.
 *
 * @MetatagTag(
 *   id = "article_tags",
 *   label = @Translation("Article tag(s)"),
 *   description = @Translation("Appropriate keywords for this content."),
 *   name = "article:tags",
 *   group = "open_graph",
 *   weight = 31,
 *   type = "label",
 *   secure = FALSE,
 *   multiple = TRUE
 * )
 */
class ArticleTags extends MetaPropertyBase {
  // Nothing here yet. Just a placeholder class for a plugin.
}
