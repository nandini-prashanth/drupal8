<?php

/**
 * @file
 * Contains \Drupal\pelgrom\Form\WelcomeMsgForm.
 */

namespace Drupal\pelgrom\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Component\Utility\UrlHelper;
use Drupal\Core\State\StateInterface;
use Drupal\file\Entity\File;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\Routing\TrustedRedirectResponse;

/**
 * Contribute form.
 */
class WelcomeMsgForm extends FormBase {
  /**
   * {@inheritdoc}
   */
  public function getFormId() {
       return 'welcome_msg_form' ;
  }


  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form = array();
    $form['message-body'] = array(
      '#type'     => 'text_format',
      '#title'    => t('Message'),
      '#format'   => 'full_html',
      '#default_value' => \Drupal::state()->get('welcome-message'),
      '#required' => TRUE
    );
    $form['submit'] = array(
      '#type' => 'submit',
      '#value' => t('Save'),
    );
    return $form;
  }
  public function validateForm(array &$form, FormStateInterface $form_state) {

  }
  public function submitForm(array &$form, FormStateInterface $form_state) {
    \Drupal::state()->set('welcome-message', $form_state->getvalues()['message-body']['value']);
  }
}
