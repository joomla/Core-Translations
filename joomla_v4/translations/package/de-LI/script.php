<?php
/**
 * @package    Joomla.Language
 *
 * @copyright  (C) 2022 J!German <https://www.jgerman.de>
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

\defined('_JEXEC') or die;

use Joomla\CMS\Installer\InstallerScript;

/**
 * Installation class to perform additional changes during install/uninstall/update
 *
 * @since  4.0.0v1
 */
class Pkg_deLIInstallerScript extends InstallerScript
{
	/**
	 * Extension script constructor.
	 *
	 * @since   4.0.0v1
	 */
	public function __construct()
	{
		// Define the minimum versions to be supported.
		$this->minimumJoomla = '4.2';
		$this->minimumPhp    = '7.2.5';

		$this->deleteFiles = [
			// Backend
			'/administrator/language/de-LI/de-LI.com_actionlogs.ini',
			'/administrator/language/de-LI/de-LI.com_actionlogs.sys.ini',
			'/administrator/language/de-LI/de-LI.com_admin.ini',
			'/administrator/language/de-LI/de-LI.com_admin.sys.ini',
			'/administrator/language/de-LI/de-LI.com_ajax.ini',
			'/administrator/language/de-LI/de-LI.com_ajax.sys.ini',
			'/administrator/language/de-LI/de-LI.com_associations.ini',
			'/administrator/language/de-LI/de-LI.com_associations.sys.ini',
			'/administrator/language/de-LI/de-LI.com_banners.ini',
			'/administrator/language/de-LI/de-LI.com_banners.sys.ini',
			'/administrator/language/de-LI/de-LI.com_cache.ini',
			'/administrator/language/de-LI/de-LI.com_cache.sys.ini',
			'/administrator/language/de-LI/de-LI.com_categories.ini',
			'/administrator/language/de-LI/de-LI.com_categories.sys.ini',
			'/administrator/language/de-LI/de-LI.com_checkin.ini',
			'/administrator/language/de-LI/de-LI.com_checkin.sys.ini',
			'/administrator/language/de-LI/de-LI.com_config.ini',
			'/administrator/language/de-LI/de-LI.com_config.sys.ini',
			'/administrator/language/de-LI/de-LI.com_contact.ini',
			'/administrator/language/de-LI/de-LI.com_contact.sys.ini',
			'/administrator/language/de-LI/de-LI.com_contenthistory.ini',
			'/administrator/language/de-LI/de-LI.com_contenthistory.sys.ini',
			'/administrator/language/de-LI/de-LI.com_content.ini',
			'/administrator/language/de-LI/de-LI.com_content.sys.ini',
			'/administrator/language/de-LI/de-LI.com_cpanel.ini',
			'/administrator/language/de-LI/de-LI.com_cpanel.sys.ini',
			'/administrator/language/de-LI/de-LI.com_fields.ini',
			'/administrator/language/de-LI/de-LI.com_fields.sys.ini',
			'/administrator/language/de-LI/de-LI.com_finder.ini',
			'/administrator/language/de-LI/de-LI.com_finder.sys.ini',
			'/administrator/language/de-LI/de-LI.com_installer.ini',
			'/administrator/language/de-LI/de-LI.com_installer.sys.ini',
			'/administrator/language/de-LI/de-LI.com_joomlaupdate.ini',
			'/administrator/language/de-LI/de-LI.com_joomlaupdate.sys.ini',
			'/administrator/language/de-LI/de-LI.com_languages.ini',
			'/administrator/language/de-LI/de-LI.com_languages.sys.ini',
			'/administrator/language/de-LI/de-LI.com_login.ini',
			'/administrator/language/de-LI/de-LI.com_login.sys.ini',
			'/administrator/language/de-LI/de-LI.com_mailto.sys.ini',
			'/administrator/language/de-LI/de-LI.com_media.ini',
			'/administrator/language/de-LI/de-LI.com_media.sys.ini',
			'/administrator/language/de-LI/de-LI.com_menus.ini',
			'/administrator/language/de-LI/de-LI.com_menus.sys.ini',
			'/administrator/language/de-LI/de-LI.com_messages.ini',
			'/administrator/language/de-LI/de-LI.com_messages.sys.ini',
			'/administrator/language/de-LI/de-LI.com_modules.ini',
			'/administrator/language/de-LI/de-LI.com_modules.sys.ini',
			'/administrator/language/de-LI/de-LI.com_newsfeeds.ini',
			'/administrator/language/de-LI/de-LI.com_newsfeeds.sys.ini',
			'/administrator/language/de-LI/de-LI.com_plugins.ini',
			'/administrator/language/de-LI/de-LI.com_plugins.sys.ini',
			'/administrator/language/de-LI/de-LI.com_postinstall.ini',
			'/administrator/language/de-LI/de-LI.com_postinstall.sys.ini',
			'/administrator/language/de-LI/de-LI.com_privacy.ini',
			'/administrator/language/de-LI/de-LI.com_privacy.sys.ini',
			'/administrator/language/de-LI/de-LI.com_redirect.ini',
			'/administrator/language/de-LI/de-LI.com_redirect.sys.ini',
			'/administrator/language/de-LI/de-LI.com_tags.ini',
			'/administrator/language/de-LI/de-LI.com_tags.sys.ini',
			'/administrator/language/de-LI/de-LI.com_templates.ini',
			'/administrator/language/de-LI/de-LI.com_templates.sys.ini',
			'/administrator/language/de-LI/de-LI.com_users.ini',
			'/administrator/language/de-LI/de-LI.com_users.sys.ini',
			'/administrator/language/de-LI/de-LI.com_wrapper.ini',
			'/administrator/language/de-LI/de-LI.com_wrapper.sys.ini',
			'/administrator/language/de-LI/de-LI.ini',
			'/administrator/language/de-LI/de-LI.lib_joomla.ini',
			'/administrator/language/de-LI/de-LI.localise.php',
			'/administrator/language/de-LI/de-LI.mod_custom.ini',
			'/administrator/language/de-LI/de-LI.mod_custom.sys.ini',
			'/administrator/language/de-LI/de-LI.mod_feed.ini',
			'/administrator/language/de-LI/de-LI.mod_feed.sys.ini',
			'/administrator/language/de-LI/de-LI.mod_latestactions.ini',
			'/administrator/language/de-LI/de-LI.mod_latestactions.sys.ini',
			'/administrator/language/de-LI/de-LI.mod_latest.ini',
			'/administrator/language/de-LI/de-LI.mod_latest.sys.ini',
			'/administrator/language/de-LI/de-LI.mod_logged.ini',
			'/administrator/language/de-LI/de-LI.mod_logged.sys.ini',
			'/administrator/language/de-LI/de-LI.mod_login.ini',
			'/administrator/language/de-LI/de-LI.mod_login.sys.ini',
			'/administrator/language/de-LI/de-LI.mod_menu.ini',
			'/administrator/language/de-LI/de-LI.mod_menu.sys.ini',
			'/administrator/language/de-LI/de-LI.mod_multilangstatus.ini',
			'/administrator/language/de-LI/de-LI.mod_multilangstatus.sys.ini',
			'/administrator/language/de-LI/de-LI.mod_popular.ini',
			'/administrator/language/de-LI/de-LI.mod_popular.sys.ini',
			'/administrator/language/de-LI/de-LI.mod_privacy_dashboard.ini',
			'/administrator/language/de-LI/de-LI.mod_privacy_dashboard.sys.ini',
			'/administrator/language/de-LI/de-LI.mod_quickicon.ini',
			'/administrator/language/de-LI/de-LI.mod_quickicon.sys.ini',
			'/administrator/language/de-LI/de-LI.mod_sampledata.ini',
			'/administrator/language/de-LI/de-LI.mod_sampledata.sys.ini',
			'/administrator/language/de-LI/de-LI.mod_stats_admin.ini',
			'/administrator/language/de-LI/de-LI.mod_stats_admin.sys.ini',
			'/administrator/language/de-LI/de-LI.mod_status.ini',
			'/administrator/language/de-LI/de-LI.mod_status.sys.ini',
			'/administrator/language/de-LI/de-LI.mod_submenu.ini',
			'/administrator/language/de-LI/de-LI.mod_submenu.sys.ini',
			'/administrator/language/de-LI/de-LI.mod_title.ini',
			'/administrator/language/de-LI/de-LI.mod_title.sys.ini',
			'/administrator/language/de-LI/de-LI.mod_toolbar.ini',
			'/administrator/language/de-LI/de-LI.mod_toolbar.sys.ini',
			'/administrator/language/de-LI/de-LI.mod_version.ini',
			'/administrator/language/de-LI/de-LI.mod_version.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_actionlog_joomla.ini',
			'/administrator/language/de-LI/de-LI.plg_actionlog_joomla.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_authentication_cookie.ini',
			'/administrator/language/de-LI/de-LI.plg_authentication_cookie.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_authentication_gmail.ini',
			'/administrator/language/de-LI/de-LI.plg_authentication_gmail.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_authentication_joomla.ini',
			'/administrator/language/de-LI/de-LI.plg_authentication_joomla.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_authentication_ldap.ini',
			'/administrator/language/de-LI/de-LI.plg_authentication_ldap.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_captcha_recaptcha.ini',
			'/administrator/language/de-LI/de-LI.plg_captcha_recaptcha_invisible.ini',
			'/administrator/language/de-LI/de-LI.plg_captcha_recaptcha_invisible.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_captcha_recaptcha.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_content_confirmconsent.ini',
			'/administrator/language/de-LI/de-LI.plg_content_confirmconsent.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_content_contact.ini',
			'/administrator/language/de-LI/de-LI.plg_content_contact.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_content_emailcloak.ini',
			'/administrator/language/de-LI/de-LI.plg_content_emailcloak.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_content_fields.ini',
			'/administrator/language/de-LI/de-LI.plg_content_fields.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_content_finder.ini',
			'/administrator/language/de-LI/de-LI.plg_content_finder.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_content_geshi.ini',
			'/administrator/language/de-LI/de-LI.plg_content_geshi.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_content_joomla.ini',
			'/administrator/language/de-LI/de-LI.plg_content_joomla.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_content_loadmodule.ini',
			'/administrator/language/de-LI/de-LI.plg_content_loadmodule.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_content_pagebreak.ini',
			'/administrator/language/de-LI/de-LI.plg_content_pagebreak.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_content_pagenavigation.ini',
			'/administrator/language/de-LI/de-LI.plg_content_pagenavigation.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_content_vote.ini',
			'/administrator/language/de-LI/de-LI.plg_content_vote.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_editors_codemirror.ini',
			'/administrator/language/de-LI/de-LI.plg_editors_codemirror.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_editors_none.ini',
			'/administrator/language/de-LI/de-LI.plg_editors_none.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_editors_tinymce.ini',
			'/administrator/language/de-LI/de-LI.plg_editors_tinymce.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_editors-xtd_article.ini',
			'/administrator/language/de-LI/de-LI.plg_editors-xtd_article.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_editors-xtd_contact.ini',
			'/administrator/language/de-LI/de-LI.plg_editors-xtd_contact.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_editors-xtd_fields.ini',
			'/administrator/language/de-LI/de-LI.plg_editors-xtd_fields.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_editors-xtd_image.ini',
			'/administrator/language/de-LI/de-LI.plg_editors-xtd_image.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_editors-xtd_menu.ini',
			'/administrator/language/de-LI/de-LI.plg_editors-xtd_menu.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_editors-xtd_module.ini',
			'/administrator/language/de-LI/de-LI.plg_editors-xtd_module.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_editors-xtd_pagebreak.ini',
			'/administrator/language/de-LI/de-LI.plg_editors-xtd_pagebreak.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_editors-xtd_readmore.ini',
			'/administrator/language/de-LI/de-LI.plg_editors-xtd_readmore.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_editors-xtd_weblink.ini',
			'/administrator/language/de-LI/de-LI.plg_editors-xtd_weblink.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_extension_joomla.ini',
			'/administrator/language/de-LI/de-LI.plg_extension_joomla.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_fields_calendar.ini',
			'/administrator/language/de-LI/de-LI.plg_fields_calendar.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_fields_checkboxes.ini',
			'/administrator/language/de-LI/de-LI.plg_fields_checkboxes.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_fields_color.ini',
			'/administrator/language/de-LI/de-LI.plg_fields_color.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_fields_editor.ini',
			'/administrator/language/de-LI/de-LI.plg_fields_editor.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_fields_image.ini',
			'/administrator/language/de-LI/de-LI.plg_fields_image.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_fields_imagelist.ini',
			'/administrator/language/de-LI/de-LI.plg_fields_imagelist.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_fields_integer.ini',
			'/administrator/language/de-LI/de-LI.plg_fields_integer.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_fields_list.ini',
			'/administrator/language/de-LI/de-LI.plg_fields_list.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_fields_media.ini',
			'/administrator/language/de-LI/de-LI.plg_fields_media.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_fields_radio.ini',
			'/administrator/language/de-LI/de-LI.plg_fields_radio.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_fields_repeatable.ini',
			'/administrator/language/de-LI/de-LI.plg_fields_repeatable.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_fields_sql.ini',
			'/administrator/language/de-LI/de-LI.plg_fields_sql.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_fields_textarea.ini',
			'/administrator/language/de-LI/de-LI.plg_fields_textarea.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_fields_text.ini',
			'/administrator/language/de-LI/de-LI.plg_fields_text.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_fields_url.ini',
			'/administrator/language/de-LI/de-LI.plg_fields_url.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_fields_usergrouplist.ini',
			'/administrator/language/de-LI/de-LI.plg_fields_usergrouplist.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_fields_user.ini',
			'/administrator/language/de-LI/de-LI.plg_fields_user.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_finder_categories.ini',
			'/administrator/language/de-LI/de-LI.plg_finder_categories.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_finder_contacts.ini',
			'/administrator/language/de-LI/de-LI.plg_finder_contacts.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_finder_content.ini',
			'/administrator/language/de-LI/de-LI.plg_finder_content.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_finder_newsfeeds.ini',
			'/administrator/language/de-LI/de-LI.plg_finder_newsfeeds.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_finder_tags.ini',
			'/administrator/language/de-LI/de-LI.plg_finder_tags.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_installer_folderinstaller.ini',
			'/administrator/language/de-LI/de-LI.plg_installer_folderinstaller.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_installer_packageinstaller.ini',
			'/administrator/language/de-LI/de-LI.plg_installer_packageinstaller.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_installer_urlinstaller.ini',
			'/administrator/language/de-LI/de-LI.plg_installer_urlinstaller.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_installer_webinstaller.ini',
			'/administrator/language/de-LI/de-LI.plg_installer_webinstaller.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_privacy_actionlogs.ini',
			'/administrator/language/de-LI/de-LI.plg_privacy_actionlogs.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_privacy_consents.ini',
			'/administrator/language/de-LI/de-LI.plg_privacy_consents.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_privacy_contact.ini',
			'/administrator/language/de-LI/de-LI.plg_privacy_contact.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_privacy_content.ini',
			'/administrator/language/de-LI/de-LI.plg_privacy_content.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_privacy_message.ini',
			'/administrator/language/de-LI/de-LI.plg_privacy_message.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_privacy_user.ini',
			'/administrator/language/de-LI/de-LI.plg_privacy_user.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_quickicon_eos310.ini',
			'/administrator/language/de-LI/de-LI.plg_quickicon_eos310.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_quickicon_extensionupdate.ini',
			'/administrator/language/de-LI/de-LI.plg_quickicon_extensionupdate.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_quickicon_joomlaupdate.ini',
			'/administrator/language/de-LI/de-LI.plg_quickicon_joomlaupdate.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_quickicon_phpversioncheck.ini',
			'/administrator/language/de-LI/de-LI.plg_quickicon_phpversioncheck.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_quickicon_privacycheck.ini',
			'/administrator/language/de-LI/de-LI.plg_quickicon_privacycheck.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_sampledata_blog.ini',
			'/administrator/language/de-LI/de-LI.plg_sampledata_blog.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_system_actionlogs.ini',
			'/administrator/language/de-LI/de-LI.plg_system_actionlogs.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_system_cache.ini',
			'/administrator/language/de-LI/de-LI.plg_system_cache.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_system_debug.ini',
			'/administrator/language/de-LI/de-LI.plg_system_debug.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_system_fields.ini',
			'/administrator/language/de-LI/de-LI.plg_system_fields.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_system_highlight.ini',
			'/administrator/language/de-LI/de-LI.plg_system_highlight.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_system_languagecode.ini',
			'/administrator/language/de-LI/de-LI.plg_system_languagecode.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_system_languagefilter.ini',
			'/administrator/language/de-LI/de-LI.plg_system_languagefilter.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_system_log.ini',
			'/administrator/language/de-LI/de-LI.plg_system_logout.ini',
			'/administrator/language/de-LI/de-LI.plg_system_logout.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_system_logrotation.ini',
			'/administrator/language/de-LI/de-LI.plg_system_logrotation.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_system_log.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_system_p3p.ini',
			'/administrator/language/de-LI/de-LI.plg_system_p3p.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_system_privacyconsent.ini',
			'/administrator/language/de-LI/de-LI.plg_system_privacyconsent.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_system_redirect.ini',
			'/administrator/language/de-LI/de-LI.plg_system_redirect.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_system_remember.ini',
			'/administrator/language/de-LI/de-LI.plg_system_remember.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_system_sef.ini',
			'/administrator/language/de-LI/de-LI.plg_system_sef.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_system_sessiongc.ini',
			'/administrator/language/de-LI/de-LI.plg_system_sessiongc.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_system_stats.ini',
			'/administrator/language/de-LI/de-LI.plg_system_stats.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_system_updatenotification.ini',
			'/administrator/language/de-LI/de-LI.plg_system_updatenotification.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_twofactorauth_totp.ini',
			'/administrator/language/de-LI/de-LI.plg_twofactorauth_totp.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_twofactorauth_yubikey.ini',
			'/administrator/language/de-LI/de-LI.plg_twofactorauth_yubikey.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_user_contactcreator.ini',
			'/administrator/language/de-LI/de-LI.plg_user_contactcreator.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_user_joomla.ini',
			'/administrator/language/de-LI/de-LI.plg_user_joomla.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_user_profile.ini',
			'/administrator/language/de-LI/de-LI.plg_user_profile.sys.ini',
			'/administrator/language/de-LI/de-LI.plg_user_terms.ini',
			'/administrator/language/de-LI/de-LI.plg_user_terms.sys.ini',
			'/administrator/language/de-LI/de-LI.tpl_hathor.ini',
			'/administrator/language/de-LI/de-LI.tpl_hathor.sys.ini',
			'/administrator/language/de-LI/de-LI.tpl_isis.ini',
			'/administrator/language/de-LI/de-LI.tpl_isis.sys.ini',
			'/administrator/language/de-LI/de-LI.xml',
			'/administrator/language/de-LI/plg_fields_image.ini',
			'/administrator/language/de-LI/plg_fields_image.sys.ini',
			'/administrator/language/de-LI/plg_fields_menuitem.ini',
			'/administrator/language/de-LI/plg_fields_menuitem.sys.ini',
			// Frontend
			'/language/de-LI/de-LI.com_ajax.ini',
			'/language/de-LI/de-LI.com_config.ini',
			'/language/de-LI/de-LI.com_contact.ini',
			'/language/de-LI/de-LI.com_content.ini',
			'/language/de-LI/de-LI.com_finder.ini',
			'/language/de-LI/de-LI.com_mailto.ini',
			'/language/de-LI/de-LI.com_media.ini',
			'/language/de-LI/de-LI.com_messages.ini',
			'/language/de-LI/de-LI.com_newsfeeds.ini',
			'/language/de-LI/de-LI.com_privacy.ini',
			'/language/de-LI/de-LI.com_tags.ini',
			'/language/de-LI/de-LI.com_users.ini',
			'/language/de-LI/de-LI.com_wrapper.ini',
			'/language/de-LI/de-LI.files_joomla.sys.ini',
			'/language/de-LI/de-LI.finder_cli.ini',
			'/language/de-LI/de-LI.ini',
			'/language/de-LI/de-LI.lib_fof.ini',
			'/language/de-LI/de-LI.lib_fof.sys.ini',
			'/language/de-LI/de-LI.lib_idna_convert.sys.ini',
			'/language/de-LI/de-LI.lib_joomla.ini',
			'/language/de-LI/de-LI.lib_joomla.sys.ini',
			'/language/de-LI/de-LI.lib_phpass.sys.ini',
			'/language/de-LI/de-LI.lib_phputf8.sys.ini',
			'/language/de-LI/de-LI.lib_simplepie.sys.ini',
			'/language/de-LI/de-LI.localise.php',
			'/language/de-LI/de-LI.mod_articles_archive.ini',
			'/language/de-LI/de-LI.mod_articles_archive.sys.ini',
			'/language/de-LI/de-LI.mod_articles_categories.ini',
			'/language/de-LI/de-LI.mod_articles_categories.sys.ini',
			'/language/de-LI/de-LI.mod_articles_category.ini',
			'/language/de-LI/de-LI.mod_articles_category.sys.ini',
			'/language/de-LI/de-LI.mod_articles_latest.ini',
			'/language/de-LI/de-LI.mod_articles_latest.sys.ini',
			'/language/de-LI/de-LI.mod_articles_news.ini',
			'/language/de-LI/de-LI.mod_articles_news.sys.ini',
			'/language/de-LI/de-LI.mod_articles_popular.ini',
			'/language/de-LI/de-LI.mod_articles_popular.sys.ini',
			'/language/de-LI/de-LI.mod_banners.ini',
			'/language/de-LI/de-LI.mod_banners.sys.ini',
			'/language/de-LI/de-LI.mod_breadcrumbs.ini',
			'/language/de-LI/de-LI.mod_breadcrumbs.sys.ini',
			'/language/de-LI/de-LI.mod_custom.ini',
			'/language/de-LI/de-LI.mod_custom.sys.ini',
			'/language/de-LI/de-LI.mod_feed.ini',
			'/language/de-LI/de-LI.mod_feed.sys.ini',
			'/language/de-LI/de-LI.mod_finder.ini',
			'/language/de-LI/de-LI.mod_finder.sys.ini',
			'/language/de-LI/de-LI.mod_footer.ini',
			'/language/de-LI/de-LI.mod_footer.sys.ini',
			'/language/de-LI/de-LI.mod_languages.ini',
			'/language/de-LI/de-LI.mod_languages.sys.ini',
			'/language/de-LI/de-LI.mod_login.ini',
			'/language/de-LI/de-LI.mod_login.sys.ini',
			'/language/de-LI/de-LI.mod_menu.ini',
			'/language/de-LI/de-LI.mod_menu.sys.ini',
			'/language/de-LI/de-LI.mod_random_image.ini',
			'/language/de-LI/de-LI.mod_random_image.sys.ini',
			'/language/de-LI/de-LI.mod_related_items.ini',
			'/language/de-LI/de-LI.mod_related_items.sys.ini',
			'/language/de-LI/de-LI.mod_stats.ini',
			'/language/de-LI/de-LI.mod_stats.sys.ini',
			'/language/de-LI/de-LI.mod_syndicate.ini',
			'/language/de-LI/de-LI.mod_syndicate.sys.ini',
			'/language/de-LI/de-LI.mod_tags_popular.ini',
			'/language/de-LI/de-LI.mod_tags_popular.sys.ini',
			'/language/de-LI/de-LI.mod_tags_similar.ini',
			'/language/de-LI/de-LI.mod_tags_similar.sys.ini',
			'/language/de-LI/de-LI.mod_users_latest.ini',
			'/language/de-LI/de-LI.mod_users_latest.sys.ini',
			'/language/de-LI/de-LI.mod_whosonline.ini',
			'/language/de-LI/de-LI.mod_whosonline.sys.ini',
			'/language/de-LI/de-LI.mod_wrapper.ini',
			'/language/de-LI/de-LI.mod_wrapper.sys.ini',
			'/language/de-LI/de-LI.tpl_beez3.ini',
			'/language/de-LI/de-LI.tpl_beez3.sys.ini',
			'/language/de-LI/de-LI.tpl_protostar.ini',
			'/language/de-LI/de-LI.tpl_protostar.sys.ini',
			'/language/de-LI/de-LI.xml',
		];
	}

	/**
	 * Function to perform changes during postflight
	 *
	 * @param   string            $type    The action being performed
	 * @param   ComponentAdapter  $parent  The class calling this method
	 *
	 * @return  void
	 *
	 * @since   4.0.0v1
	 */
	public function postflight($type, $parent)
	{
		$this->removeFiles();
	}
}
