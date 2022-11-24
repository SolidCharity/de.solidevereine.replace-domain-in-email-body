<?php

require_once 'replace_domain_in_email_body.civix.php';
// phpcs:disable
use CRM_ReplaceDomainInEmailBody_ExtensionUtil as E;
// phpcs:enable

/**
 * Implements hook_civicrm_config().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_config/
 */
function replace_domain_in_email_body_civicrm_config(&$config): void {
  _replace_domain_in_email_body_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_install
 */
function replace_domain_in_email_body_civicrm_install(): void {
  _replace_domain_in_email_body_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_postInstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_postInstall
 */
function replace_domain_in_email_body_civicrm_postInstall(): void {
  _replace_domain_in_email_body_civix_civicrm_postInstall();
}

/**
 * Implements hook_civicrm_uninstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_uninstall
 */
function replace_domain_in_email_body_civicrm_uninstall(): void {
  _replace_domain_in_email_body_civix_civicrm_uninstall();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_enable
 */
function replace_domain_in_email_body_civicrm_enable(): void {
  _replace_domain_in_email_body_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_disable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_disable
 */
function replace_domain_in_email_body_civicrm_disable(): void {
  _replace_domain_in_email_body_civix_civicrm_disable();
}

/**
 * Implements hook_civicrm_upgrade().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_upgrade
 */
function replace_domain_in_email_body_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _replace_domain_in_email_body_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implements hook_civicrm_entityTypes().
 *
 * Declare entity types provided by this module.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_entityTypes
 */
function replace_domain_in_email_body_civicrm_entityTypes(&$entityTypes): void {
  _replace_domain_in_email_body_civix_civicrm_entityTypes($entityTypes);
}

// --- Functions below this ship commented out. Uncomment as required. ---

/**
 * Implements hook_civicrm_preProcess().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_preProcess
 */
//function replace_domain_in_email_body_civicrm_preProcess($formName, &$form): void {
//
//}

/**
 * Implements hook_civicrm_navigationMenu().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_navigationMenu
 */
//function replace_domain_in_email_body_civicrm_navigationMenu(&$menu): void {
//  _replace_domain_in_email_body_civix_insert_navigation_menu($menu, 'Mailings', [
//    'label' => E::ts('New subliminal message'),
//    'name' => 'mailing_subliminal_message',
//    'url' => 'civicrm/mailing/subliminal',
//    'permission' => 'access CiviMail',
//    'operator' => 'OR',
//    'separator' => 0,
//  ]);
//  _replace_domain_in_email_body_civix_navigationMenu($menu);
//}
