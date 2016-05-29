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

        // Returns a Drupal\Core\Database\Connection object.
        $connection = \Drupal::database();

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

    public function CellularMolecularBiology() {
        return array(
            '#theme' => 'cellularmolecularbiology',
            '#test_var' => $this->t('Test Value'),
        );
    }

    public function CellularMolecularMedicine() {
        return array(
            '#theme' => 'cellularmolecularmedicine',
            '#test_var' => $this->t('Test Value'),
        );
    }

    public function ChemicalPhysicalBiology() {
        return array(
            '#theme' => 'chemicalphysicalbiology',
            '#test_var' => $this->t('Test Value'),
        );
    }

    public function EnvironmentalBiology() {
        return array(
            '#theme' => 'environmentalbiology',
            '#test_var' => $this->t('Test Value'),
        );
    }

    public function MolmicroinfecBio() {
        return array(
            '#theme' => 'molmicroinfecbio',
            '#test_var' => $this->t('Test Value'),
        );
    }

    public function Aspergillus() {
        return array(
            '#theme' => 'aspergillus',
            '#test_var' => $this->t('Test Value'),
        );
    }


}
