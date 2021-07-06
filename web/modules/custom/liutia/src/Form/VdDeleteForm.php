<?php

namespace Drupal\liutia\Form;

use Drupal\Core\Ajax\RedirectCommand;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Ajax\AjaxResponse;
use Drupal\Core\Url;

/**
 * Contains \Drupal\liutia\Form\vdDeleteForm.
 *
 * @file
 */

/**
 * Provides an vidguk form.
 */
class VdDeleteForm extends FormBase {

  /**
   * Contain slug id to delete cat entry.
   *
   * @var ctid
   */
  protected $ctid = 0;

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'vd_delete_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state, $cid = NULL) {
    $form['delete'] = [
      '#type' => 'submit',
      '#value' => t('Delete'),
      '#ajax' => [
        'callback' => '::ajaxForm',
        'event' => 'click',
      ],
    ];
    $this->ctid = $cid;
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $connection = \Drupal::service('database');
    $result = $connection->delete('liutia');
    $result->condition('id', $this->ctid);
    $result->execute();
  }

  /**
   * Function to reload page.
   */
  public function ajaxForm(array &$form, FormStateInterface $form_state) {
    $response = new AjaxResponse();
    $currentURL = Url::fromRoute('liutia.vd_page');
    $response->addCommand(new RedirectCommand($currentURL->toString()));
    return $response;
  }

}
