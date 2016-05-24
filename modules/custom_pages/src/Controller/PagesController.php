<?php
/**
 * @file
 * Contains \Drupal\custom_pages\Controller\PagesController.
 */

namespace Drupal\custom_pages\Controller;

use Drupal\Core\Controller\ControllerBase;

class PagesController extends ControllerBase {

    public function about() {
        return array(
            '#theme' => 'about',
            '#test_var' => $this->t('Test Value'),
        );
    }

    public function research() {
        return array(
            '#theme' => 'research',
            '#test_var' => $this->t('Test Value'),
        );
    }

    public function services() {
        return array(
            '#theme' => 'services',
            '#test_var' => $this->t('Test Value'),
        );
    }

    public function outreach() {
        return array(
            '#theme' => 'outreach',
            '#test_var' => $this->t('Test Value'),
        );
    }

    public function news() {
        return array(
            '#theme' => 'news',
            '#test_var' => $this->t('Test Value'),
        );
    }


}
