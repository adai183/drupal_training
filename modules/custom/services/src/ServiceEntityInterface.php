<?php

namespace Drupal\services;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining Service entity entities.
 *
 * @ingroup services
 */
interface ServiceEntityInterface extends ContentEntityInterface, EntityChangedInterface, EntityOwnerInterface {

  // Add get/set methods for your configuration properties here.

  /**
   * Gets the Service entity name.
   *
   * @return string
   *   Name of the Service entity.
   */
  public function getName();

  /**
   * Sets the Service entity name.
   *
   * @param string $name
   *   The Service entity name.
   *
   * @return \Drupal\services\ServiceEntityInterface
   *   The called Service entity entity.
   */
  public function setName($name);

  /**
   * Gets the Service entity creation timestamp.
   *
   * @return int
   *   Creation timestamp of the Service entity.
   */
  public function getCreatedTime();

  /**
   * Sets the Service entity creation timestamp.
   *
   * @param int $timestamp
   *   The Service entity creation timestamp.
   *
   * @return \Drupal\services\ServiceEntityInterface
   *   The called Service entity entity.
   */
  public function setCreatedTime($timestamp);

  /**
   * Returns the Service entity published status indicator.
   *
   * Unpublished Service entity are only visible to restricted users.
   *
   * @return bool
   *   TRUE if the Service entity is published.
   */
  public function isPublished();

  /**
   * Sets the published status of a Service entity.
   *
   * @param bool $published
   *   TRUE to set this Service entity to published, FALSE to set it to unpublished.
   *
   * @return \Drupal\services\ServiceEntityInterface
   *   The called Service entity entity.
   */
  public function setPublished($published);

}
