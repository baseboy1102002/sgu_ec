<?php

namespace Drupal\Tests\plugin\Functional\ParamConverter;

use Drupal\Tests\BrowserTestBase;

/**
 * Tests \Drupal\plugin\ParamConverter\PluginInstanceConverter's integration.
 *
 * @group Plugin
 */
class PluginInstanceConverterTest extends BrowserTestBase {

  /**
   * {@inheritdoc}
   */
  protected static $modules = ['plugin', 'plugin_test_helper', 'system'];

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * Tests the integration.
   */
  public function testIntegration() {
    $this->drupalGet('plugin_test_helper/paramconverter/plugin_instance/plugin_test_helper_plugin');
    $this->assertSession()->statusCodeEquals(200);
    $this->drupalGet('plugin_test_helper/paramconverter/plugin_instance/foo');
    $this->assertSession()->statusCodeEquals(404);
  }

}
