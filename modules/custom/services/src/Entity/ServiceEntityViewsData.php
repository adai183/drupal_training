<?php

namespace Drupal\services\Entity;

use Drupal\views\EntityViewsData;
use Drupal\views\EntityViewsDataInterface;

/**
 * Provides Views data for Service entity entities.
 */
class ServiceEntityViewsData extends EntityViewsData implements EntityViewsDataInterface {

  /**
   * {@inheritdoc}
   */
  public function getViewsData() {
    $data = parent::getViewsData();

    $data['service_entity']['table']['base'] = array(
      'field' => 'id',
      'title' => $this->t('Service entity'),
      'help' => $this->t('The Service entity ID.'),
    );

    return $data;
  }

}
