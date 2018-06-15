<?php
/**
 * @file
 * Contains \Drupal\pelgrom\Plugin\Block\WelcomeBlock.
 */
namespace Drupal\pelgrom\Plugin\Block;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormInterface;
use Drupal\Core\State\StateInterface;

/**
 * Provides a 'Welcome message' block.
 *
 * @Block(
 *   id = "welcome_block",
 *   admin_label = @Translation("Welcome message block"),
 *   category = @Translation("Basic Block")
 * )
 */
class WelcomeBlock extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {
    $message =  \Drupal::state()->get('welcome-message');
    return array( '#markup' => $message,); 
  }
}


