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
 * Strings for component 'local_contact', language 'it', branch 'MOODLE_38_STABLE'
 *
 * @package   local_contact
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['configure'] = 'Configurazione plugin';
$string['confirmationemail'] = '<p>Gentile[fromname],</p>
<p>Ti ringraziamo per averci contattato. Se necessario, ti risponderemo al più presto.</p>
<p>A presto,</p>
<p>[supportname]<br>
[sitefullname]<br>
<a href="[siteurl]">[siteurl]</a></p>';
$string['confirmationmessage'] = 'Ti ringraziamo per averci contattato. Se necessario, ti risponderemo al più presto.';
$string['confirmationsent'] = 'Ti \' stata inviata un email al tuo indirizzo {$a}.';
$string['defaultsubject'] = 'Nuovo messaggio';
$string['errorsending'] = 'Si è verificato un errore durante l\'invio del messaggio. Si prega di riprovare più tardi.';
$string['errorsendingtitle'] = 'L\'Invio messaggio email non è andato a buon fine';
$string['extrainfo'] = '<hr>
<p><strong>Informazioni aggiuntive sull\'utente</strong></p>
<ul>
    <li><strong>Utente del sito sito:</strong> [userstatus]</li>
    <li><strong>Lingua preferita:</strong> [lang]</li>
    <li><strong>Indirizzo IP di provenienza:</strong> [userip]</li>
    <li><strong>Browser web:</strong> [http_user_agent]</li>
    <li><strong>Modulo web:</strong> <a href="[http_referer]">[http_referer]</a></li>
</ul>';
$string['field-email'] = 'email';
$string['field-message'] = 'messaggio';
$string['field-name'] = 'nome';
$string['field-subject'] = 'oggetto';
$string['forbidden'] = 'Vietato';
$string['globalhelp'] = 'Il modulo contatti è un plugin per Moodle che permette al sito di elaborare informazioni inviate tramite moduli HTML, inviandole all\'indirizzo email di supporto del sito.';
$string['lockedout'] = 'BLOCCATO';
$string['notconfirmed'] = 'NON CONFERMATO';
$string['pluginname'] = 'Modulo contatti';
