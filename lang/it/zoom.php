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
 * Strings for component 'zoom', language 'it', branch 'MOODLE_39_STABLE'
 *
 * @package   zoom
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Azioni';
$string['addtocalendar'] = 'Aggiungi al calendario';
$string['allmeetings'] = 'Tutti i meeting';
$string['alternative_hosts'] = 'Host alternativo';
$string['alternative_hosts_help'] = 'Consente di pianificare riunioni e designare un altro Utente Pro sullo stesso account affinché possa avviare la riunione o il webinar. Questo utente riceverà un\'email con la notifica che è stato aggiunto come sono stati aggiunti come Host alternativo, con un link per avviarela riunione. Separare più email con una virgola (senza spazi).';
$string['apikey'] = 'Chiave API Zoom';
$string['apisecret'] = 'Secret API Zoom';
$string['apiurl'] = 'Url API Zoom';
$string['audio_both'] = 'Entrambi';
$string['audio_telephony'] = 'Solo telefono';
$string['audio_voip'] = 'Solo Voip';
$string['cachedef_sessions'] = 'Informazioni da Zoom delle richieste di report sugli utenti';
$string['cachedef_zoomid'] = 'ID Zoom dell\'utente';
$string['calendardescriptionintro'] = '\\nDescrizione:\\n{\\$a}';
$string['calendardescriptionURL'] = 'URL per partecipare alla riunione: {$a}.';
$string['calendariconalt'] = 'Icona calendario';
$string['clickjoin'] = 'Cliccato il pulsante di partecipazione alla riunione';
$string['connectionfailed'] = 'Connessione non riuscita:';
$string['connectionok'] = 'La connessione è funzionante.';
$string['connectionstatus'] = 'Stato della connessione';
$string['defaultsettings'] = 'Impostazioni predefinite di Zoom';
$string['defaultsettings_help'] = 'Le impostazioni predefinite delle attività riunione e webinar di Zoom.';
$string['downloadical'] = 'Scarica iCal';
$string['duration'] = 'Durata (min.)';
$string['endtime'] = 'Orario di fine';
$string['err_duration_nonpositive'] = 'La durata deve essere un numero positivo.';
$string['err_duration_too_long'] = 'La durata non deve eccedere le 150 ore.';
$string['err_invalid_password'] = 'La password contiene caratteri non validi.';
$string['err_long_timeframe'] = 'Spazio di tempo troppo ampio, vengono visualizzati solo i risultati dell\'ultimo mese.';
$string['errorwebservice'] = 'Errore webservice Zoom: {$a}.';
$string['errorwebservice_notfound'] = 'La risorsa non esiste: {$a}';
$string['err_password'] = 'La password può contenere solo questi caratteri: [a-z A-Z 0-9 @ - _ *]. Max 10 caratteri.';
$string['err_password_required'] = 'La password è obbligatoria, ma il campo password è vuoto';
$string['err_start_time_past'] = 'La data di inizio non può essere nel passato.';
$string['export'] = 'Esporta';
$string['firstjoin'] = 'Primo partecipante';
$string['firstjoin_desc'] = 'Con quanto anticipo un utente può partecipare al meeting (minuti prima dell\'inizio).';
$string['getmeetingreports'] = 'Ricevi da Zoom il report sulla riunione';
$string['invalid_status'] = 'Stato non valido, verifica il database.';
$string['join'] = 'Partecipa';
$string['joinbeforehost'] = 'Partecipa al meeting prima dell\'organizzatore';
$string['join_meeting'] = 'Partecipa al meeting';
$string['jointime'] = 'Orario di accesso';
$string['leavetime'] = 'Orario di uscita';
$string['licensesnumber'] = 'Numero di licenze';
$string['lowlicenses'] = 'Se il numero delle licenze supera quello richiesto, quando crei ogni nuova attività per utente verrà assegnata una licenza PRO abbassando il livello di un altro utente. L\'opzione è utile quando il numero di licenze PRO attive è superiore a 5.';
$string['maskparticipantdata'] = 'Nascondi i dati dei partecipanti';
$string['maskparticipantdata_help'] = 'Evita la visualizzazione nei report dei dati  (utile per i siti che mascherano i dati dei partecipanti, per esempio per HIPAA).';
$string['meeting_finished'] = 'Terminato';
$string['meeting_nonexistent_on_zoom'] = 'Inesistente su Zoom';
$string['meeting_not_started'] = 'Non ancora iniziato';
$string['meetingoptions'] = 'Opzioni';
$string['meetingoptions_help'] = '*Partecipa prima dell\'organizzatore* consente di partecipare al meeting prima dell\'organizzatore o quando l\'organizzatore non può partecipare.';
$string['meeting_started'] = 'In corso';
$string['meeting_time'] = 'Orario di inizio';
$string['modulename'] = 'Riunione Zoom';
$string['modulename_help'] = 'Zoom è una piattaforma video e web che consente agli utenti autorizzati di organizzare un meting.';
$string['modulenameplural'] = 'Riunioni Zoom';
$string['newmeetings'] = 'Nuove riunioni';
$string['nomeetinginstances'] = 'Non sono state trovate sessioni relative a questa riunione.';
$string['noparticipants'] = 'Non è stato trovato nessun partecipante per questa sessione.';
$string['nosessions'] = 'Non è stata trovata nessuna sessione nell\'intervallo specificato.';
$string['nozooms'] = 'Non ci sono riunioni.';
$string['off'] = 'Off';
$string['oldmeetings'] = 'Riuninioni svolte';
$string['on'] = 'On';
$string['option_audio'] = 'Opzioni audio';
$string['option_authenticated_users'] = 'Solo utenti autenticati';
$string['option_host_video'] = 'Avvia video';
$string['option_jbh'] = 'Abilita partecipazione prima dell\'organizzatore';
$string['option_mute_upon_entry'] = 'Microfono muto all\'entrata';
$string['option_mute_upon_entry_help'] = 'Tutti i partecipanti avranno il microfono muto quando entrano nella riunione. L\'host controlla se i partecipanti possono riattivare il microfono in autonomia.';
$string['option_participants_video'] = 'Video dei partecipanti';
$string['option_proxyhost'] = 'Utilizza proxy';
$string['option_proxyhost_desc'] = 'Il proxy impostato come \'<code><hostname>:<port></code>\' è usato solo per le comunicazioni con Zoom. Lasciare vuoto se si vuole utilizzare le impostazioni Proxy di default di Moodle.';
$string['option_waiting_room'] = 'Abilita sala d\'attesa';
$string['participantdatanotavailable'] = 'Dettagli non disponibili';
$string['participantdatanotavailable_help'] = 'I dati del partecipanti non sono disponibili per questa sessione Zoom (per esempio dovuto al protocollo HIPAA).';
$string['participants'] = 'Partecipanti';
$string['password'] = 'Password';
$string['passwordprotected'] = 'Protetto da password';
$string['pluginadministration'] = 'Gestione Zoom meeting';
$string['pluginname'] = 'Zoom meeting';
$string['privacy:metadata:zoom_meeting_details'] = 'Tabella del database che memorizza informazioni su ciascuna istanza della riunione';
$string['privacy:metadata:zoom_meeting_details:topic'] = 'Nome della riunione a cui l\'utente ha partecipato.';
$string['privacy:metadata:zoom_meeting_participants'] = 'Tabella del database che memorizza informazioni sui partecipanti alla riunione.';
$string['privacy:metadata:zoom_meeting_participants:duration'] = 'Tempo di partecipazione è rimasto il partecipante alla riunione';
$string['privacy:metadata:zoom_meeting_participants:join_time'] = 'Ora in cui il partecipante è entrato nella riunione';
$string['privacy:metadata:zoom_meeting_participants:leave_time'] = 'Ora in cui il partecipante è uscito dalla riunione';
$string['privacy:metadata:zoom_meeting_participants:name'] = 'Nome del partecipante';
$string['privacy:metadata:zoom_meeting_participants:user_email'] = 'Indirizzo e-mail del partecipante';
$string['recurringmeeting'] = 'Ricorrente';
$string['recurringmeeting_help'] = 'Non ha data di fine';
$string['recurringmeetinglong'] = 'Meeting ricorrente';
$string['redefinelicenses'] = 'Ridefinire le licenze';
$string['report'] = 'Report';
$string['reportapicalls'] = 'Report delle chiamate API esaurite';
$string['requirepassword'] = 'Il meeting richiede una password';
$string['resetapicalls'] = 'Reimposta il numero chiamate API disponibili';
$string['search:activity'] = 'Zoom - informazioni attività';
$string['sessions'] = 'Sessioni';
$string['start'] = 'Avvia';
$string['starthostjoins'] = 'Avvia il video quando accede l\'organizzatore';
$string['start_meeting'] = 'Avvia il meeting';
$string['startpartjoins'] = 'Avvia il video dopo l\'accesso dei partecipanti';
$string['starttime'] = 'Orario d\'inizio';
$string['start_time'] = 'Quando';
$string['status'] = 'Stato';
$string['title'] = 'Titolo';
$string['topic'] = 'Argomento';
$string['unavailable'] = 'Al momento non è possibile partecipare';
$string['updatemeetings'] = 'Aggiorna le impostazioni della riunione Zoom';
$string['usepersonalmeeting'] = 'Utilizza l\'ID personale riunioni {$a}';
$string['waitingroom'] = 'Sala d\'attesa abilitata';
$string['webinar'] = 'Webinar';
$string['webinar_already_false'] = '<p><b>Questa attività è stata precedentemente impostata come riunione, non come Webinar. Non è possibile cambiare questa impostazione dopo aver creato la riunione.</b></p>';
$string['webinar_already_true'] = '<p><b>Questa attività è stata precedentemente impostata come Webinar, non come riunione. Non è possibile cambiare questa impostazione dopo aver creato il Webinar.</b></p>';
$string['webinar_help'] = 'L\'opzione è disponibile soltanto per account Zoom pre-autorizzati.';
$string['zoom:addinstance'] = 'Aggiungere riunione Zoom';
$string['zoomerr'] = 'Zoom ha riscontrato un errore.';
$string['zoomerr_apikey_missing'] = 'La Zoom API key non è stata trovata';
$string['zoomerr_apisecret_missing'] = 'La Zoom API secret non è stata trovata';
$string['zoomerr_id_missing'] = 'E\' necessario specificare un course_module ID oppure un ID istanza';
$string['zoomerr_meetingnotfound'] = 'Questa riunione non è presente su Zoom. E\' possibile<a href="{$a->ricrearla}"> ricrearla qui</a> oppure <a href="{$a->cancellare}">eliminarla completamente</a>.';
$string['zoomerr_meetingnotfound_info'] = 'Questa riunione non è presente su Zoom. Si prega di contattare l\'host della riunione per dubbi o domande.';
$string['zoomerr_usernotfound'] = 'Non è stato possibile trovare il tuo account su Zoom. Se si sta utilizzando Zoom per la prima volta, è necessario attivare il proprio account su <a href="{$a}" target="_blank">{$a}</a>.
Una volta attivato l\'account Zoom, ricaricare la pagina e continuare a impostare la riunione. Verificare inoltre che l\'email in Zoom coincida con quella di Moodle.';
$string['zoomurl'] = 'Zoom home page URL';
$string['zoom:view'] = 'Visualizza riunioni Zoom.';
