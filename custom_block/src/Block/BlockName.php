<?php

namespace Drupal\custom_block\Block;

class BlockName implements BlockInterface {

  /**
   * Build block info.
   */
  public static function getInfo() {
    return array(
      'info' => t('Custom block'),
      'cache' => DRUPAL_CACHE_GLOBAL,
    );
  }

  /**
   * Build block content.
   */
  public static function build() {
    return array(
      'subject' => NULL,
      'content' => array(
        '#markup' => 'Hello world!',
      ),
    );
  }

}
