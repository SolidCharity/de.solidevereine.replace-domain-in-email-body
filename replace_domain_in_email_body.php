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

/**
 * Implementation of hook_civicrm_alterMailParams
 */
function replace_domain_in_email_body_civicrm_alterMailParams(&$params, $context) {
    if (empty($params['text'])) {
        return;
    }

    $domain_behind_vpn = 'civicrm2.wordpress.beispielverein.de';
    // TODO $domain_behind_vpn = CRM_Core_BAO_Domain::getDomain();
    // TODO: use a setting for the domain name that is the proxy for public access
    // $domain_public = str_replace('civicrm2.', 'civi2.', $domain_behind_vpn);
    //$domain_public = str_replace('crm.', 'civicrm.', $domain_behind_vpn);
    $domain_public = 'civi2.wordpress.beispielverein.de';

    $params['text'] = str_replace($domain_behind_vpn, $domain_public, $params['text']);

    if (!empty($params['html'])) {
        $params['html'] = str_replace($domain_behind_vpn, $domain_public, $params['html']);
    }
}
