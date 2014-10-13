<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'report_security', language 'de', branch 'MOODLE_26_STABLE'
 *
 * @package   report_security
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['check_configrw_details'] = '<p>Nach der Installation sollten die Zugriffsrechte für die Datei config.php so gesetzt werden, dass der Webserver diese Datei nicht mehr verändern kann. Bitte beachten Sie, dass dieser Schritt die Server-Sicherheit nicht entscheidend verbessert, aber dass  generelle Angriffe behindert und in ihrer Wirkung begrenzt werden könnten.</p>';
$string['check_configrw_name'] = ' config.php';
$string['check_configrw_ok'] = 'PHP-Skripte können die config.php nicht verändern';
$string['check_configrw_warning'] = 'PHP-Skripte könnten die Datei config.php verändern';
$string['check_cookiesecure_details'] = '<p>Zusätzlich zur Aktivierung der Datenübertragung über https sollte auch die Funktion sichere Cookies aktiviert werden. Die permanenete Umleitung von http nach https sollte ebenfalls eingerichtet werden.</p>';
$string['check_cookiesecure_error'] = 'Bitte aktivieren Sie sichere Cookies';
$string['check_cookiesecure_name'] = 'Sichere Cookies';
$string['check_cookiesecure_ok'] = 'Sichere Cookies aktiviert';
$string['check_defaultuserrole_details'] = '<p>Jeder eingeloggte Nutzer hat zunächst Rechte aus der Standardrolle für Nutzer. Für diese Rolle sollten keine bedenklichen Berechtigungen vergeben worden sein.</p>
<p>Die einzige Rolle, für die das zunächst zutrifft, ist die Rolle <em>authentifizierte/r Nutzer/in</em>. Die Berechtigung \'Kurse sehen\' (course view) muss dazu nicht aktiviert sein.</p>';
$string['check_defaultuserrole_error'] = 'Eine falsche Definition der Standardrolle wurde festgestellt! "{$a}"';
$string['check_defaultuserrole_name'] = 'Standardrolle für alle Nutzer';
$string['check_defaultuserrole_notset'] = 'Die Standardrolle ist nicht gesetzt';
$string['check_defaultuserrole_ok'] = 'Die Rollendefinition für registrierte Nutzer ist OK';
$string['check_displayerrors_details'] = '<p>Die Aktivierung der PHP-Einstellung <code>display_errors</code> wird auf produktiven Websites nicht empfohlen, weil die Fehlermeldungen u. U. sensible Informationen zu Ihrem Server preisgeben könnten. Setzen Sie also <code>display_errors=off</code>.</p>';
$string['check_displayerrors_error'] = 'Die PHP-Einstellung für die Anzeige von Fehlern ist aktiviert. Es wird empfohlen, dies zu deaktivieren';
$string['check_displayerrors_name'] = 'Anzeige von PHP-Fehlern';
$string['check_displayerrors_ok'] = 'Die Anzeige von PHP-Fehlern ist deaktiviert';
$string['check_emailchangeconfirmation_details'] = '<p>Es wird empfohlen, eine E-Mail-Bestätigung einzufordern, wenn Nutzer/innen ihre E-Mail-Adresse im Nutzerprofil ändern. Falls diese Einstellung deaktiviert ist, könnten Spammer versuchen, den Webserver zum Versenden von Spam zu missbrauchen.</p>
<p></p>';
$string['check_emailchangeconfirmation_error'] = 'Es dürfen beliebige E-Mail-Adressen eingetragen werden';
$string['check_emailchangeconfirmation_info'] = 'Es dürfen ausschließlich E-Mail-Adressen von zugelassenen Domains eingetragen werden';
$string['check_emailchangeconfirmation_name'] = 'E-Mail-Adressänderungen';
$string['check_emailchangeconfirmation_ok'] = 'Änderungen von E-Mail-Adressen müssen bestätigt werden';
$string['check_embed_details'] = '<p>Die uneingeschränkte Nutzung von EMBED/OBJECT ist äußerst gefährlich, weil alle registrierten Nutzer/innen einen XSS-Angriff gegen andere Servernutzer starten könnten. Diese Einstellung sollte auf produktiven Servern deaktiviert sein.</p>';
$string['check_embed_error'] = 'Die uneingeschränkte Nutzung von EMBED/OBJECT ist aktiviert. Diese Einstellung ist für die meisten Webserver sehr gefährlich.';
$string['check_embed_name'] = 'EMBED/OBJECT';
$string['check_embed_ok'] = 'Die uneingeschränkte Nutzung von EMBED/OBJECT ist nicht erlaubt.';
$string['check_frontpagerole_details'] = '<p>Die standardmäßige Rolle für die Startseite erhalten alle angemeldeten Nutzer/innen. Beachten Sie, dass für die Startseite keine bedenklichen Rechte vergeben werden dürfen.</p>
<p>Es wird empfohlen, immer eine Rolle neu anzulegen und keine vorgegebene Rolle zu verändern.</p>';
$string['check_frontpagerole_error'] = 'Rolle für die Startseite \'{$a}\' ist falsch definiert!';
$string['check_frontpagerole_name'] = 'Rolle für die Startseite';
$string['check_frontpagerole_notset'] = 'Keine Rolle für die Startseite angelegt.';
$string['check_frontpagerole_ok'] = 'Die Rolle für die Startseite ist in Ordnung.';
$string['check_globals_details'] = '<p>register_globals gilt als eine sehr unsichere Einstellung für PHP.</p>
<p>Die PHP-Einstellung <code>register_globals=off </code> muss unbedingt gesetzt sein. Diese Einstellung können Sie in der Datei <code>php.ini</code>, Apache/IIS-Konfiguration oder der Datei <code>.htaccess</code> vornehmen.</p>';
$string['check_globals_error'] = 'Die Einstellung register_globals muss deaktiviert sein. Bitte passen Sie Ihre PHP-Einstellungen umgehend an!';
$string['check_globals_name'] = 'register_globals';
$string['check_globals_ok'] = 'register_globals ist deaktiviert.';
$string['check_google_details'] = '<p>Die Einstellung \'Offen für Google\' erlaubt es Google und anderen Suchmaschinen, mit der Gastberechtigung alle offenen Kurse zu durchsuchen. Es ist nicht sinnvoll, diese Funktion zu aktivieren, wenn der Gastzugang deaktiviert ist.</p>';
$string['check_google_error'] = 'Der Zugriff für Suchmaschinen ist aktiviert, wobei der Gastzugang aber deaktiviert ist.';
$string['check_google_info'] = 'Suchmaschinen könnten auf Ihre Kursinhalte als Gäste zugreifen.';
$string['check_google_name'] = 'Offen für Google';
$string['check_google_ok'] = 'Gastzugang für Suchmaschinen nicht aktiv.';
$string['check_guestrole_details'] = '<p>Die Gastrolle wird für Gäste, nichteingeloggte Nutzer und den zeitweisen Gastzugang zu Kursen verwendet. Bitte achten Sie darauf, keine unsicheren Berechtigungen für diese Rolle zuzulassen.<p>
</p>Der einzige unterstützte Legacytyp für die Gastrolle ist <em>Gast</em>.</p>';
$string['check_guestrole_error'] = 'Die Rollendefinition der Gastrolle "{$a}" ist fehlerhaft!';
$string['check_guestrole_name'] = 'Gastrolle';
$string['check_guestrole_notset'] = 'Die Gastrolle ist nicht gesetzt.';
$string['check_guestrole_ok'] = 'Die Definition der Gastrolle ist in Ordnung.';
$string['check_mediafilterswf_details'] = '<p>Die automatische Einbindung von Flash-Dateien im Format .swf ist sehr gefährlich. Jeder registrierte Nutzer könnte damit eine XSS-Attacke gegen den Server auslösen. Bitte deaktivieren Sie diese Funktion unbedingt auf produktiven Servern.</p>';
$string['check_mediafilterswf_error'] = 'Der Flash-Mediafilter (.swf) ist aktiviert - dies ist für die meisten Webserver sehr gefährlich.';
$string['check_mediafilterswf_name'] = 'Mediafilter (.swf)';
$string['check_mediafilterswf_ok'] = 'Der Flash-Mediafilter (.swf) ist nicht aktiv.';
$string['check_noauth_details'] = '<p>Das Plugin "Ohne Authentifizierung" ist nicht für produktive Seiten gedacht. Deaktivieren Sie diese Funktion unbedingt, es sei denn, Sie betreiben eine Testseite zu Entwicklungszwecken.</p>';
$string['check_noauth_error'] = 'Das Plugin "Ohne Authentifizierung" darf auf produktiven Seiten nicht verwendet werden';
$string['check_noauth_name'] = 'Ohne Authentifizierung';
$string['check_noauth_ok'] = 'Das Plugin "Ohne Authentifizierung" ist ausgeschaltet.';
$string['check_openprofiles_details'] = 'Öffentlich sichtbare Nutzerprofile können von Spammern missbraucht werden. Aktivieren Sie am besten die Einstellung \'Anmeldung notwendig\'  bzw. \'Anmeldung notwendig, um Profile zu sehen\'.';
$string['check_openprofiles_error'] = 'Jeder kann zurzeit Nutzerprofile sehen, ohne sich zuvor einzuloggen.';
$string['check_openprofiles_name'] = 'Offene Nutzerprofile';
$string['check_openprofiles_ok'] = 'Ein Login ist erforderlich, um Nutzerprofile sehen zu können.';
$string['check_passwordpolicy_details'] = '<p>Kennwortregeln sollten unbedingt festgelegt werden. Oft ist es ziemlich einfach, Kennworte zu erraten und so unberechtigten Zugang zu Systemen zu bekommen. Die Regeln sollten aber nicht zu kompliziert sein. Besonders strenge Regeln führen nämlich häufig dazu, dass Nutzer sich die Kennworte nicht merken können und diese daher vergessen oder sie aufschreiben.</p>';
$string['check_passwordpolicy_error'] = 'Die Kennwortregeln sind nicht eingerichtet.';
$string['check_passwordpolicy_name'] = 'Kennwortregeln';
$string['check_passwordpolicy_ok'] = 'Die Kennwortregeln sind aktiviert.';
$string['check_riskadmin_detailsok'] = '<p>Bitte prüfen Sie die folgende Liste von Serveradministrator(en):</p>{$a}';
$string['check_riskadmin_detailswarning'] = '<p>Bitte prüfen Sie die folgende Liste von Serveradministrator(en):</p>{$a->admins}
<p>Es wird empfohlen, die Administratorenrolle nur auf Systemebene zu vergeben. Die folgenden Nutzer verfügen über nicht unterstützte Zuweisungen zur Administratorrolle:</p>{$a->unsupported}';
$string['check_riskadmin_name'] = 'Administratoren';
$string['check_riskadmin_ok'] = '{$a} Serveradministrator(en) gefunden';
$string['check_riskadmin_unassign'] = 'Rollenzuweisung überprüfen bei <a href="{$a->url}">{$a->fullname} ({$a->email})</a>';
$string['check_riskadmin_warning'] = '{$a->admincount} Serveradministrator(en) und {$a->unsupcount} nicht unterstützte Zuweisung(en) zur Administratorrolle gefunden.';
$string['check_riskbackup_detailsok'] = 'Keine Rolle erlaubt das Sichern von Nutzerdaten. Beachten Sie aber, dass Admins mit der Berechtigung "doanything" (alles tun) auch weiterhin dazu befähigt sind.';
$string['check_riskbackup_details_overriddenroles'] = '<p>Diese aktivierten Änderungen geben Nutzern/innen die Möglichkeit, auch Nutzerdaten in eine Kurssicherung einzubeziehen. Bitte prüfen Sie, ob diese Berechtigung nötig ist.</p> {$a}';
$string['check_riskbackup_details_systemroles'] = '<p>Die folgenden Systemrollen erlauben es aktuell, Nutzerdaten in eine Kurssicherung einzubeziehen. Bitte prüfen Sie, ob diese Berechtigung nötig ist.</p> {$a}';
$string['check_riskbackup_details_users'] = '<p>Wegen der obigen Rollen oder lokalen Rollenänderungen besitzen die nachfolgenden Nutzerkonten die Berechtigung, persönliche Daten von allen in ihren Kursen eingetragenen Nutzern/innen in Kurssicherungen einzubeziehen. Stellen Sie unbedingt sicher, dass diese Konten (a) vertrauenswürdig und (b) mit sicheren Kennworten gesichert sind:</p> {$a}';
$string['check_riskbackup_editoverride'] = '<a href="{$a->url}">{$a->name} in {$a->contextname}</a>';
$string['check_riskbackup_editrole'] = '<a href="{$a->url}">{$a->name}</a>';
$string['check_riskbackup_name'] = 'Sicherung von Nutzerdaten';
$string['check_riskbackup_ok'] = 'Keine Rolle erlaubt das Sichern von Nutzerdaten';
$string['check_riskbackup_unassign'] = '<a href="{$a->url}">{$a->fullname} ({$a->contextname})</a>';
$string['check_riskbackup_warning'] = '{$a->rolecount} Rolle(n), {$a->overridecount} Rollenänderung(en) und {$a->usercount} Nutzer mit der Möglichkeit zur Sicherung von Nutzerdaten gefunden.';
$string['check_riskxss_details'] = '<p>RISK_XSS bezeichnet alle bedenklichen Berechtigungen, die ausschließlich absolut vertrauenswürdige Nutzer ausführen dürfen.</p>
<p>Bitte prüfen Sie die folgende Nutzerliste und stellen Sie sicher, dass Sie ihnen völlig trauen können:</p><p>{$a}</p>';
$string['check_riskxss_name'] = 'XSS-vertrauenswürdige Nutzer';
$string['check_riskxss_warning'] = '{$a} Nutzer gefunden, denen bezüglich XSS vertraut werden muss!';
$string['check_unsecuredataroot_details'] = '<p>Das Verzeichnis \'dataroot\' sollte nicht aus dem Internet aufrufbar sein. Am besten legen Sie es außerhalb des öffentlich zugänglichen Verzeichnisses an, beim Webserver Apache also üblicherweise außerhalb von \'htdocs\'.</p>
<p>Wenn Sie das Verzeichnis \'dataroot\' verschieben, müssen Sie auch unbedingt den Eintrag <code>$CFG->dataroot</code> in der Datei  <code>config.php</code> entsprechend anpassen.</p>';
$string['check_unsecuredataroot_error'] = 'Ihr Verzeichnis \'dataroot\'  liegt an der falschen Stelle <code>{$a}</code> und ist aus dem Web aufrufbar!';
$string['check_unsecuredataroot_name'] = 'dataroot';
$string['check_unsecuredataroot_ok'] = 'Das Verzeichnis \'dataroot\' ist nicht aus dem Web erreichbar.';
$string['check_unsecuredataroot_warning'] = 'Ihr moodledata-Verzeichnis <code>{$a}</code> liegt an der falschen Stelle. Es sollte nicht aus dem Web aufrufbar sein.';
$string['configuration'] = 'Konfiguration';
$string['description'] = 'Beschreibung';
$string['details'] = 'Details';
$string['issue'] = 'Ausgabe';
$string['pluginname'] = 'Sicherheitsbericht';
$string['security:view'] = 'Sicherheitsbericht ansehen';
$string['status'] = 'Status';
$string['statuscritical'] = 'Kritisch';
$string['statusinfo'] = 'Information';
$string['statusok'] = 'OK';
$string['statusserious'] = 'Schwerwiegend';
$string['statuswarning'] = 'Warnung';
$string['timewarning'] = 'Haben Sie bitte Geduld, denn die Bearbeitung kann etwas länger dauern ...';
