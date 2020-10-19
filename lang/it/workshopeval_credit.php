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
 * Strings for component 'workshopeval_credit', language 'it', branch 'MOODLE_36_STABLE'
 *
 * @package   workshopeval_credit
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['mode'] = 'Modalità di valutazione';
$string['modeall'] = 'Tutte o niente';
$string['mode_desc'] = 'La modalità di valutazione di default che sarà usata dal Riconoscimento per la partecipazione';
$string['mode_help'] = 'La modalità determina il calcolo del voto per la valutazione.

* Tutte o niente - Per ottenere il voto massimo il revisore dovrà valutare tutte le consegne a lui distribuite; in caso contrario riceverà un voto pari a zero.
* Proporzionale - Il voto ottenuto sarà proporzionale al numero di valutazioni. Ad esempio, se saranno valutate tutte le consegne, il revisore otterrà il voto massimo; se invece saranno valutate il 50% delle consegne, il revisore otterrà il 50% del voto massimo.
* Almeno una - il revisore dovrà valutare almeno una consegna per ottenere il voto massimo.';
$string['modeone'] = 'Almeno una';
$string['modeproportional'] = 'Proporzionale';
$string['pluginname'] = 'Riconoscimento per la partecipazione';
