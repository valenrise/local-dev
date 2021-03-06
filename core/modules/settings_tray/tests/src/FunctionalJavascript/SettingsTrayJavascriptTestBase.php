<?php

namespace Drupal\Tests\settings_tray\FunctionalJavascript;

use Drupal\FunctionalJavascriptTests\JavascriptTestBase;

/**
 * Base class contains common test functionality for the Settings Tray module.
 */
abstract class SettingsTrayJavascriptTestBase extends JavascriptTestBase {

  /**
   * {@inheritdoc}
   */
  protected function drupalGet($path, array $options = [], array $headers = []) {
    $return = parent::drupalGet($path, $options, $headers);
    $this->assertPageLoadComplete();
    return $return;
  }

  /**
   * Assert the page is completely loaded.
   *
   * Ajax requests may happen after page loads. Also for users who have access
   * to contextual links the contextual link placeholders will be filled after
   * the page is received.
   */
  protected function assertPageLoadComplete() {
    $this->assertSession()->assertWaitOnAjaxRequest();
    if ($this->loggedInUser && $this->loggedInUser->hasPermission('access contextual links')) {
      $this->assertAllContextualLinksLoaded();
    }
  }

  /**
   * Assert all contextual link areas have be loaded.
   *
   * Contextual link placeholders will be filled after
   * the page is received.
   *
   * @todo Move this function to https://www.drupal.org/node/2821724.
   */
  protected function assertAllContextualLinksLoaded() {
    $this->waitForNoElement('[data-contextual-id]:empty');
  }

  /**
   * Enables a theme.
   *
   * @param string $theme
   *   The theme.
   */
  protected function enableTheme($theme) {
    // Enable the theme.
    \Drupal::service('theme_installer')->install([$theme]);
    $theme_config = \Drupal::configFactory()->getEditable('system.theme');
    $theme_config->set('default', $theme);
    $theme_config->save();
  }

  /**
   * Waits for off-canvas dialog to open.
   */
  protected function waitForOffCanvasToOpen() {
    $web_assert = $this->assertSession();
    $web_assert->assertWaitOnAjaxRequest();
    $this->assertElementVisibleAfterWait('css', '#drupal-off-canvas');
  }

  /**
   * Waits for off-canvas dialog to close.
   */
  protected function waitForOffCanvasToClose() {
    $this->waitForNoElement('#drupal-off-canvas');
  }

  /**
   * Gets the off-canvas dialog element.
   *
   * @return \Behat\Mink\Element\NodeElement|null
   */
  protected function getTray() {
    $tray = $this->getSession()->getPage()->find('css', '.ui-dialog[aria-describedby="drupal-off-canvas"]');
    $this->assertEquals(FALSE, empty($tray), 'The tray was found.');
    return $tray;
  }

  /**
   * Waits for an element to be removed from the page.
   *
   * @param string $selector
   *   CSS selector.
   * @param int $timeout
   *   (optional) Timeout in milliseconds, defaults to 10000.
   */
  protected function waitForNoElement($selector, $timeout = 10000) {
    $condition = "(typeof jQuery !== 'undefined' && jQuery('$selector').length === 0)";
    $this->assertJsCondition($condition, $timeout);
  }

  /**
   * Get themes to test.
   *
   * @return string[]
   *   Theme names to test.
   */
  protected function getTestThemes() {
    return ['bartik', 'stark', 'classy', 'stable'];
  }

  /**
   * Asserts the specified selector is visible after a wait.
   *
   * @param string $selector
   *   The selector engine name. See ElementInterface::findAll() for the
   *   supported selectors.
   * @param string|array $locator
   *   The selector locator.
   * @param int $timeout
   *   (Optional) Timeout in milliseconds, defaults to 10000.
   */
  protected function assertElementVisibleAfterWait($selector, $locator, $timeout = 10000) {
    $this->assertNotEmpty($this->assertSession()->waitForElementVisible($selector, $locator, $timeout));
  }

}
