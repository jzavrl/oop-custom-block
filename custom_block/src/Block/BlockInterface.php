<?php

/**
 * @file
 */

namespace Drupal\custom_block\Block;

/**
 * Define common interface for blocks..
 */
interface BlockInterface {

  /**
   * Build content for hook_block_info().
   */
  public static function getInfo();

  /**
   * Build content for the block.
   */
  public static function build();

}
