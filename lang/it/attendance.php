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
 * Strings for component 'attendance', language 'it', branch 'MOODLE_39_STABLE'
 *
 * @package   attendance
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['Aacronym'] = 'A';
$string['acronym'] = 'Acronimo';
$string['add'] = 'Aggiungi';
$string['addedrecip'] = 'Aggiunti {$a} nuovo destinatario';
$string['addedrecips'] = 'Aggiunti {$a} nuovi destinatari';
$string['addmultiplesessions'] = 'Aggiungi più lezioni';
$string['addsession'] = 'Aggiungi lezione';
$string['adduser'] = 'Aggiungi utente';
$string['addwarning'] = 'Aggiungi avviso';
$string['Afull'] = 'Assente';
$string['all'] = 'Tutte';
$string['allcourses'] = 'Tutti i corsi';
$string['allpast'] = 'Tutte registrate';
$string['allsessions'] = 'Tutte le sessioni';
$string['attendance:addinstance'] = 'Aggiungere attività Presenze';
$string['attendance_already_submitted'] = 'Non puoi registrare una presenza che è già stata registrata.';
$string['attendance:canbelisted'] = 'Essere elencato';
$string['attendance:changeattendances'] = 'Modificare presenze';
$string['attendance:changepreferences'] = 'Modificare preferenze';
$string['attendancedata'] = 'Dati presenze';
$string['attendance:export'] = 'Esportare report';
$string['attendanceforthecourse'] = 'Presenze al corso';
$string['attendancegrade'] = 'Valutazione presenza';
$string['attendance:manageattendances'] = 'Gestire presenze';
$string['attendance:managetemporaryusers'] = 'Gestire utenti temporanei';
$string['attendance_no_status'] = 'Non era disponibile uno stato valido: potresti essere in ritardo per registrare la partecipazione.';
$string['attendancenotset'] = 'Devi registrare lo stato della tua presenza';
$string['attendancenotstarted'] = 'La registrazione delle Presenze per questo corso non è ancora iniziata';
$string['attendancepercent'] = 'Percentuale di presenze';
$string['attendancereport'] = 'Report delle presenze';
$string['attendanceslogged'] = 'Presenze registrate';
$string['attendancestaken'] = 'Presenze prese';
$string['attendancesuccess'] = 'Le presenze sono state registrate';
$string['attendance:takeattendances'] = 'Rilevare presenze';
$string['attendanceupdated'] = 'Le presenze sono state aggiornate';
$string['attendance:view'] = 'Visualizzare presenze';
$string['attendance:viewreports'] = 'Visualizzazione Report';
$string['attendance:viewsummaryreports'] = 'Visualizza i report di riepilogo del corso';
$string['attendance:warningemails'] = 'Può essere abbonato a e-mail con utenti assenti';
$string['attforblockdirstillexists'] = 'la vecchia directory mod / attforblock esiste ancora: è necessario eliminare questa directory sul server prima di eseguire l\'aggiornamento.';
$string['attrecords'] = 'Registro presenze';
$string['autoassignstatus'] = 'Seleziona automaticamente lo stato più alto disponibile';
$string['autoassignstatus_help'] = 'Sezionando l\'opzione, agli studenti verrà automaticamente assegnato il voto più alto disponibile.';
$string['automarkall'] = 'Sì';
$string['autorecorded'] = 'sistema registrato automaticamente';
$string['averageattendance'] = 'Presenza media';
$string['averageattendancegraded'] = 'Presenza media';
$string['backtoparticipants'] = 'Torna alla lista dei partecipanti';
$string['below'] = 'Sotto {$a}%';
$string['calclose'] = 'Chiudi';
$string['calendarevent'] = 'Crea un evento di calendario per la sessione';
$string['calendarevent_help'] = 'Se abilitato, verrà creato un evento di calendario per questa sessione.
Se disabilitato, tutti gli eventi di calendario esistenti per questa sessione verranno eliminati.';
$string['caleventcreated'] = 'Evento di calendario per la sessione creato correttamente';
$string['caleventdeleted'] = 'Evento di calendario per la sessione correttamente';
$string['calmonths'] = 'Gennaio,Febbraio,Marzo,Aprile,Maggio,Giugno,Luglio,Agosto,Settembre,Ottobre,Novembre,Dicembre';
$string['calshow'] = 'Scegli data';
$string['caltoday'] = 'Oggi';
$string['calweekdays'] = 'Do,Lu,Ma,Me,Gi,Ve,Sa';
$string['cannottakeforgroup'] = 'Non puoi registrare le presenze per il gruppo "{$a}"';
$string['cantaddstatus'] = 'È necessario impostare un acronimo e una descrizione quando si aggiunge un nuovo stato.';
$string['categoryreport'] = 'Report categoria corso';
$string['changeattendance'] = 'Modifica presenze';
$string['changeduration'] = 'Modifica durata';
$string['changesession'] = 'Cambia lezione';
$string['checkweekdays'] = 'Seleziona i giorni della settimana in cui, nell\'arco di tempo selezionato, si svolgeranno le sessioni';
$string['closed'] = 'Questa sessione non è attualmente disponibile per l\'automarcazione';
$string['column'] = 'colonna';
$string['columns'] = 'colonne';
$string['commonsession'] = 'Comune';
$string['commonsessions'] = 'Comuni';
$string['confirm'] = 'Conferma';
$string['confirmcolumnmappings'] = 'Conferma mappatura colonna';
$string['confirmdeletehiddensessions'] = 'Confermi l\'eliminazione di {$a->count} sessioni programmate prima della data di inizio del corso ({$a->date})?';
$string['confirmdeleteuser'] = 'Confermi l\'eliminazione dell\'utente \'{$a->fullname}\' ({$a->email})?<br/>Tutti i relativi dati nel registro presenze saranno definitivamente eliminati.';
$string['copyfrom'] = 'Copia registro presenze da';
$string['countofselected'] = 'Numero selezionati';
$string['course'] = 'Corso';
$string['coursemessage'] = 'Messaggio agli iscritti al corso';
$string['coursesummary'] = 'Rapporto di sintesi del corso';
$string['createmultiplesessions'] = 'Crea più lezioni';
$string['createmultiplesessions_help'] = 'Questa funzione consente la creazione di più sessioni con un solo semplice passo.
Le sessioni iniziano dala data della sessione base e continuano fino alla data "ripeti fino a".

* <strong>Ripeti da</strong>: Seleziona i giorni della settimana in cui la tua classe si riunisce (per esempio, Lunedì/Mercoledì/Venerdì).
* <strong>Ripeti ogni</strong>: Questa opzione consente di stabilire la frequenza. Se la tua classe si riunisce ogni settimana, seleziona 1; se si riunisce in ogni altra settimana, scegli 2; ogni terza settiama, scegli 3, etc.
* <strong>Repeat until</strong>: Seleziona l\'ultimo giorno della classe (l\'ultimo giorno in cui vuoi registrare le presenze).';
$string['createonesession'] = 'Crea una sessione per il corso';
$string['csvdelimiter'] = 'Delimitatore di campo CSV';
$string['currentlyselectedusers'] = 'Utenti attualmente selezionati';
$string['date'] = 'Data';
$string['days'] = 'Giorno';
$string['defaultdisplaymode'] = 'Modo di visualizzaione di default';
$string['defaults'] = 'Valori di default';
$string['defaultsessionsettings'] = 'Impostazioni di sessione predefinite';
$string['defaultsessionsettings_help'] = 'Queste impostazioni definiscono le impostazioni predefinite per tutte le nuove sessioni';
$string['defaultsettings'] = 'Impostazioni di presenza predefinite';
$string['defaultsettings_help'] = 'Queste impostazioni definiscono le impostazioni predefinite per tutte le nuove presenze';
$string['defaultstatus'] = 'Stato predefinito impostato';
$string['defaultsubnet'] = 'Indirizzo di rete predefinito';
$string['defaultsubnet_help'] = 'La registrazione delle presenze può essere limitata a determinate sottoreti specificando un elenco separato da virgole di indirizzi IP parziali o completi. Questo è il valore predefinito utilizzato durante la creazione di nuove sessioni.';
$string['delete'] = 'Elimina';
$string['deletedgroup'] = 'Il gruppo associato alla sessione è stato eliminato';
$string['deletehiddensessions'] = 'Elimina tutte le sessioni nascoste';
$string['deletelogs'] = 'Elimina il contenuto del registro presenze';
$string['deleteselected'] = 'Elimina selezionati';
$string['deletesession'] = 'Elimina lezione';
$string['deletesessions'] = 'Elimina tutte le lezioni';
$string['deleteuser'] = 'Elimina utente';
$string['deletingsession'] = 'Eliminazione lezioni del corso';
$string['deletingstatus'] = 'Eliminazione stati del corso';
$string['description'] = 'Descrizione';
$string['display'] = 'Visualizza';
$string['displaymode'] = 'Modalità visualizzazione';
$string['donotusepaging'] = 'Non usare la paginazione';
$string['downloadexcel'] = 'Download in formato Excel';
$string['downloadooo'] = 'Download in formato OpenOffice';
$string['downloadtext'] = 'Download in formato testo';
$string['duration'] = 'Durata';
$string['Eacronym'] = 'G';
$string['editsession'] = 'Modifica lezione';
$string['edituser'] = 'Modifica utente';
$string['Efull'] = 'Giustificato';
$string['emptyacronym'] = 'Gli acronimi vuoti non sono consentiti. Il record non è stato aggiornato.';
$string['emptydescription'] = 'Le descrizioni vuote non sono consentite. Il record non è stato aggiornato.';
$string['endofperiod'] = 'Fine del periodo';
$string['endtime'] = 'Orario di fine lezione';
$string['enrolmentend'] = 'Iscritto fino a {$a}';
$string['enrolmentstart'] = 'Iscritto da {$a}';
$string['enrolmentsuspended'] = 'Iscrizione sospesa';
$string['errorgroupsnotselected'] = 'Seleziona uno o più gruppi';
$string['errorinaddingsession'] = 'Si è verificato un errore durante l\'inserimento della lezione';
$string['erroringeneratingsessions'] = 'Si è verificato un errore durante la creazione delle lezioni';
$string['eventdurationupdated'] = 'Aggiornata durata della sessione';
$string['eventreportviewed'] = 'Visualizzato report delle presenze';
$string['eventsessionadded'] = 'Sessione aggiunta';
$string['eventsessiondeleted'] = 'Sessione eliminata';
$string['eventsessionupdated'] = 'Sessione aggiornata';
$string['eventstatusadded'] = 'Aggiunto stato';
$string['eventstatusupdated'] = 'Aggiornato stato';
$string['eventtaken'] = 'Registrata presenza';
$string['eventtakenbystudent'] = 'Registrata presenza dallo studente';
$string['export'] = 'Esporta';
$string['gradebookexplanation'] = 'Valutazione nel registro valutatore';
$string['gradebookexplanation_help'] = 'Il modulo Presenze mostra la valutazione delle presenze basata sul punteggio ottenuto fino ad adesso e il punteggio che avresti ottenuto fino ad adesso; non include le sessioni che si svolgeranno in futuro. In Valutazioni, la valutazione delle presenze è basata sulla tua attuale percentuale delle presenze e sul punteggio che puoi ottenere nell\'intera durata del corso. Per tale motivo, la valutazione delle presenze visualizzata nel modulo Presenze e in Valutazioni potrebbero non avere lo stesso punteggio, ma hanno la stessa percentuale.

Per esempio, se hai ottenuto fino ad adesso un punteggio di 8 su 10 (80% di presenze) e la presenza per l\'intero corso vale 50 punti, il modulo Presenze mostrerà 8/10 e Valutazioni mostrerà 40/50. Non hai ancora ottenuto 40 punti ma 40 è il valore del punteggio equivalente all\'80%. Il valore del punteggio ottenuto nel modulo Presenze non può mai diminuire; nelle Valutazioni, invece, il valore visualizzato per le presenze può aumentare o diminuire a seconda delle tue presenze future, in quanto è basato sulle presenze nell\'intero corso.';
$string['gridcolumns'] = 'Colonne griglia';
$string['groupsession'] = 'Gruppo';
$string['hiddensessions'] = 'Lezioni nascoste';
$string['hiddensessionsdeleted'] = 'Tutte le sessioni nascoste sono state eliminate';
$string['hiddensessions_help'] = 'Le sessioni sono nascoste se riportano una data anteriore alla data di inizio del corso.

E\' possibile utilizzare questa funzionalità per nascondere le sessioni più vecchie invece di eliminarle. Nel Registro valutatore verranno visualizzate soltanto le sessioni visibili.';
$string['identifyby'] = 'Identifica lo studente per';
$string['includeall'] = 'Seleziona tutte le lezioni';
$string['includenottaken'] = 'Includi le lezioni non ancora registrate';
$string['includeremarks'] = 'Includi note';
$string['indetail'] = 'Dettagli...';
$string['invalidaction'] = 'Devi selezionare un\'azione';
$string['invalidsessionenddate'] = 'La fine della lezione non può essere antecedente l\'inizio della stessa lezione';
$string['jumpto'] = 'Vai a';
$string['Lacronym'] = 'R';
$string['Lfull'] = 'In ritardo';
$string['mergeuser'] = 'Unisci utente';
$string['modulename'] = 'Presenze';
$string['modulename_help'] = 'Il modulo Presenze consente al docente di registrare le presenze durante la sessione agli studenti di visualizzare lo stato delle loro presenze.

Il docente può creare più sessioni in una volta e può registrare lo stato della presenza come "Presente", "Assente", "In ritardo" o "Giustificato" oppure modificare gli stati per adattarli alle sue esigenze.

I report sono disponibili per l\'intera classe o per i singoli studenti.';
$string['modulenameplural'] = 'Presenze';
$string['months'] = 'Mesi';
$string['moreattendance'] = 'Presenze correttamente registrate in questa pagina';
$string['mustselectusers'] = 'Devi selezionare gli utenti da esportare';
$string['newdate'] = 'Nuova data';
$string['newduration'] = 'Nuova durata';
$string['newstatusset'] = 'Nuovo set di status';
$string['noattforuser'] = 'Non ci sono presenze registrate per questo utente';
$string['nodescription'] = 'Lezione normale di classe';
$string['nogroups'] = 'Non puoi aggiungere lezioni di gruppo poiché nel corso non ci sono gruppi.';
$string['noguest'] = 'Gli ospiti non possono visualizzare le presenze';
$string['noofdaysabsent'] = 'Giorni di assenza';
$string['noofdaysexcused'] = 'Giorni giustificati';
$string['noofdayslate'] = 'Ritardi';
$string['noofdayspresent'] = 'Giorni di presenza';
$string['nosessiondayselected'] = 'Non è stato selezionato il giorno della lezione';
$string['nosessionexists'] = 'Non esistono lezioni per questo corso';
$string['nosessionsselected'] = 'Nessuna lezione selezionata';
$string['notfound'] = 'Per poter utilizzare questo blocco è necessario aggiungere al corso almeno un\'attività Presenze.';
$string['notmember'] = 'non&nbsp;membro';
$string['olddate'] = 'Data precedente';
$string['onlyselectedusers'] = 'Esporta utenti specifici';
$string['Pacronym'] = 'P';
$string['participant'] = 'Partecipante';
$string['percentage'] = 'Percentuale';
$string['Pfull'] = 'Presente';
$string['pluginadministration'] = 'Amministrazione presenze';
$string['pluginname'] = 'Presenze';
$string['points'] = 'Punteggio';
$string['remark'] = 'Nota per: {a}';
$string['remarks'] = 'Note';
$string['report'] = 'Report';
$string['required'] = 'Obbligatorio*';
$string['resetdescription'] = 'Ricorda che eliminando le presenze queste verranno eliminate definitivamente dal database. E\' anche possibile nascondere le vecchie lezioni cambiando la data di inizio nelle impostazioni del corso!';
$string['resetstatuses'] = 'Riporta gli status al loro default';
$string['restoredefaults'] = 'Ripristina valori predefiniti';
$string['resultsperpage'] = 'Risultati per pagina';
$string['resultsperpage_desc'] = 'Numero di studenti visualizzati per pagina';
$string['save'] = 'Salva';
$string['session'] = 'Lezione';
$string['sessionadded'] = 'Lezione aggiunta con successo';
$string['sessionalreadyexists'] = 'E\' già presente una lezione in questa data';
$string['sessiondate'] = 'Data lezione';
$string['sessiondays'] = 'Giorni di lezione';
$string['sessiondeleted'] = 'Lezione eliminata con successo';
$string['sessionexist'] = 'La lezione non è stata inserita
(è già esistente)!';
$string['session_help'] = 'Lezione';
$string['sessions'] = 'Lezioni';
$string['sessionsgenerated'] = 'Lezione/i creata/e correttamente';
$string['sessionsids'] = 'ID delle lezioni';
$string['sessionsnotfound'] = 'Non sono presenti lezioni in questo intervallo di tempo';
$string['sessionstartdate'] = 'Data inizio della lezione';
$string['sessiontype'] = 'Tipo di lezione';
$string['sessiontype_help'] = 'Le sessioni possono essere di due tipi: comuni e di gruppo. La possibilità di aggiungere differenti tipi dipende dalla modalità gruppo dell\'attività.

* Nella modalità "Senza gruppi" è possibile aggiungere solo sessioni comuni.
* Nella modalità "Gruppi visibili" è possibile aggiungere sessioni di gruppo o sessioni comuni.
* Nella modalità "Gruppi separati" è possibile aggiungere soltanto sessioni di gruppo.';
$string['sessiontypeshort'] = 'Tipo';
$string['sessionupdated'] = 'Lezione aggiornata correttamente';
$string['setallstatuses'] = 'Imposta lo status per tutti gli utenti';
$string['setallstatusesto'] = 'Imposta lo status per tutti gli utenti a «{$a}»';
$string['set_by_student'] = 'Autoregistrato';
$string['settings'] = 'Impostazioni';
$string['showdefaults'] = 'Visualizza default';
$string['showduration'] = 'Mostra la durata';
$string['sortedgrid'] = 'Tabella';
$string['sortedlist'] = 'Elenco';
$string['startofperiod'] = 'A partire da';
$string['status'] = 'Stato';
$string['statusdeleted'] = 'Stato cancellato';
$string['statuses'] = 'Stati';
$string['statusset'] = 'Set di status {$a}';
$string['strftimedm'] = '\'%d.%m';
$string['strftimedmy'] = '%d.%m.%Y';
$string['strftimedmyhm'] = '%d.%m.%Y %H.%M';
$string['strftimedmyw'] = '%d.%m.%y (%a)';
$string['strftimehm'] = '%H:%M';
$string['strftimeshortdate'] = '%d.%m.%Y';
$string['studentid'] = 'ID Studente';
$string['studentscanmark'] = 'Consenti agli studenti di registrare la loro presenza';
$string['studentscanmark_help'] = 'Se selezionato, gli studenti potranno modifiicare lo status della loro presenza alla sessione.';
$string['submitattendance'] = 'Registra presenza';
$string['tactions'] = 'Azione';
$string['takeattendance'] = 'Registra presenze';
$string['tcreated'] = 'Creato';
$string['tempaddform'] = 'Aggiungi utente temporaneo';
$string['tempexists'] = 'Esiste già un utente temporaneo con questo indirizzo e-mail';
$string['temptable'] = 'Elenco degli utenti temporanei';
$string['tempuser'] = 'Utente temporaneo';
$string['tempusermerge'] = 'Unisci utente temporaneo';
$string['tempusers'] = 'Utenti temporanei';
$string['tempusersedit'] = 'Modifica utente temporaneo';
$string['tempuserslist'] = 'Utenti temporanei';
$string['thiscourse'] = 'Questo corso';
$string['tuseremail'] = 'Email';
$string['tusername'] = 'Nome completo';
$string['unknowngroup'] = 'Gruppo sconosciuto';
$string['update'] = 'Aggiorna';
$string['userexists'] = 'Esiste già un utente con questo indirizzo e-mail';
$string['users'] = 'Utenti da esportare';
$string['usestatusset'] = 'Utilizza il set di status';
$string['variable'] = 'variabile';
$string['variablesupdated'] = 'Variabile aggiornata correttamente';
$string['versionforprinting'] = 'versione stampabile';
$string['viewmode'] = 'Modalità visualizzazione';
$string['week'] = 'Settimana(e)';
$string['weeks'] = 'Settimane';
$string['youcantdo'] = 'Non puoi fare nulla';
