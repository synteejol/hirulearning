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
 * Strings for component 'plagiarism_compilatio', language 'it', branch 'MOODLE_38_STABLE'
 *
 * @package   plagiarism_compilatio
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['account_expire_soon_content'] = 'E\' possibile utilizzare il servizio Compilatio integrato fino alla fine del mese. Se l\'abbonamento non verrà rinnovato, non sarà possibile utilizzare Compilatio oltre questa data.';
$string['account_expire_soon_title'] = 'Fine dell\'abbonamento Compilatio.net';
$string['activate_compilatio'] = 'Attiva Compilatio';
$string['admin_disabled_reports'] = 'L\'amministratore ha disattivato la funzionalità che di visualizzare le analisi agli studenti.';
$string['admin_goto_helpcenter'] = 'Accedi al centro di assistenza Compilatio per visualizzare agli articoli relativi alla gestione del plugin Moodle.';
$string['allow_teachers_to_show_reports'] = 'I docenti possono consentire agli studenti di visualizzare i report delle analisi';
$string['analysing'] = 'Documento in corso di analisi';
$string['analysis_completed'] = 'Analisi terminata: {$a}% di similitudini';
$string['analysis_date'] = 'Data di analisi (solo avvio programmato)';
$string['analysis_started'] = '{$a} analisi richieste';
$string['analysis_type'] = 'Avvio delle analisi';
$string['analysistype_direct'] = 'Immediato';
$string['analysis_type_help'] = '<p>Esistono 3 opzioni :</p>
<ul>
<li><strong> Immediato:</strong> Il documento è inviato a Compilatio e subito analizzato.</li>
<li><strong> Manuale:</strong> Il documento è inviato a Compilatio, ma il docente deve avviare manualmente le analisi dei documenti.</li>
<li><strong> Programmato:</strong> Il documento è inviato a Compilatio e successivamente analizzato all\'ora/data scelta.</li>
</ul>
<p>Affinché tutti i documenti siano confrontati tra di loro durante le analisi, consigliamo di avviare le analisi solamente quando tutti i documenti sono consegnati nel compito.</p>';
$string['analysistype_manual'] = 'Manuale';
$string['analysistype_prog'] = 'Programmato';
$string['analyze'] = 'Analizzare';
$string['analyzing'] = 'Analisi';
$string['api_key_not_tested'] = 'Non è stato possibile verificare la chiave API poiché la connessione al servizio Compilatio.net ha fallito';
$string['api_key_not_valid'] = 'La chiave API registrata non è valida. LA chiave è specifica alla piattaforma utilizzata. Può ottenerne uyna corretta contattando <a href=\'mailto:ent@compilatio.net\'>ent@compilatio.net</a>.';
$string['api_key_valid'] = 'La chiave API registrata è valida';
$string['assign_statistics'] = 'Statistiche dei compiti';
$string['auto_diagnosis_title'] = 'Auto-diagnosi';
$string['average'] = 'Media';
$string['average_similarities'] = 'La percentuale di similitudine media per questo compito è {$a}%';
$string['compilatio'] = 'Plug-in di rilevamento plagio Compilatio';
$string['compilatioapi'] = 'Indirizzo API Compilatio';
$string['compilatioapi_help'] = 'L\'indirizzo delle API Compilatio';
$string['compilatiodefaults'] = 'Valori di default per Compilatio';
$string['compilatio_display_student_report'] = 'Gli studenti possono visualizzare le analisi';
$string['compilatio_display_student_report_help'] = 'L\'analisi di un documento presenta i passaggi simili alle fonti rilevate e la loro percentuale di similitudine';
$string['compilatio_display_student_score'] = 'Visualizza la percentuale di similitudine aglii studenti';
$string['compilatio_display_student_score_help'] = 'La percentuale di similitudine indica la quantità di testo nel documento che è stato rilevato all\'interno di altri documenti';
$string['compilatio_draft_submit'] = 'Quando il documento deve essere analizzato con Compilatio';
$string['compilatio:enable'] = 'Attivare/disattivare Compilatio all\'interno di un\'attività';
$string['compilatio_enable_mod_assign'] = 'Attiva Compilatio per i compiti';
$string['compilatio_enable_mod_forum'] = 'Attiva Compilatio per i forum';
$string['compilatio_enable_mod_workshop'] = 'Attivare Compilatio per i laboratori (workshop)';
$string['compilatioenableplugin'] = 'Attivare Compilatio per {$a}';
$string['compilatioexplain'] = 'Per maggiori informazioni su questo plug-in, visita: <a href="http://www.compilatio.net/it/" target="_blank">compilatio.net</a>';
$string['compilatio_help_assign'] = 'Ottenere aiuto per il plug-in Compilatio';
$string['compilatiopassword'] = 'Chiave API';
$string['compilatiopassword_help'] = 'Codice personale fornito da Compilatio per accedere alle API';
$string['compilatio:resetfile'] = 'Caricare nuovamente il documento all\'interno di Compilatio dopo un errore';
$string['compilatio_studentemail'] = 'Invia email allo studente';
$string['compilatio_studentemail_help'] = 'Consente di inviare email allo studente a valle dell\'analisi di un documento per avvisarlo che è disponibile l\'analisi.';
$string['compilatio:triggeranalysis'] = 'Avviare analisi manualmente';
$string['compilatio:viewreport'] = 'Consultare il report completo dopo l\'analisi Compilatio';
$string['context'] = 'Contesto';
$string['cron_check'] = 'Il CRON è stato eseguito l\'ultima volta il {$a}.';
$string['cron_check_never_called'] = 'Il CRON non è stato eseguito dopo l\'attivazione del plug-in. È possibile che non sia configurato correttamente.';
$string['cron_check_not_ok'] = 'Non è stato eseguito da più di un\'ora.';
$string['cron_frequency'] = 'Sembra sia eseguito ogni {$a} minuti.';
$string['cron_recommandation'] = 'Si raccomanda si utilizzare un intervallo di tempo inferiore a 15 minuti tra ogni esecuzione di CRON';
$string['defaults_desc'] = 'I parametri seguenti sono utilizzati come valori di default nelle attività di Moodle dove è integrato Compilatio';
$string['defaultupdated'] = 'I valori di default sono stati aggiornati';
$string['disclaimer_data'] = 'Attivando Compilatio, accetti che delle informazioni riguardanti la configurazione della piattaforma Moodle saranno raccolti in modo da facilitare il supporto tecnico e la manutenzione del servizio.';
$string['display_notifications'] = 'Visualizza le notifiche';
$string['display_stats'] = 'Visualizza le statistiche del compito';
$string['documents_analyzed'] = 'Sono stati analizzati {$a->countAnalyzed} documenti su {$a->documentsCount}.';
$string['documents_analyzed_between_thresholds'] = '{$a->documentsBetweenThresholds} documenti tra {$a->greenThreshold}% e {$a->redThreshold}%.';
$string['documents_analyzed_higher_red'] = '{$a->documentsAboveRedThreshold} documenti superiori a {$a->redThreshold}%.';
$string['documents_analyzed_lower_green'] = '{$a->documentsUnderGreenThreshold} documenti inferiori {$a->greenThreshold}%';
$string['documents_analyzing'] = '{$a} documenti in corso di analisi';
$string['documents_in_queue'] = '{$a} documenti in attesa di analisi';
$string['documents_number'] = 'Documenti analizzati';
$string['enabledandworking'] = 'Il plug-in Compilatio è attivo e funzionale.';
$string['enable_javascript'] = 'E\' necessario attivare JavaScript per usufruire di tutte le funzionalità del plug-in Compilatio.<br/> <a href="http://www.enable-javascript.com/it/"
target="_blank"> istruzioni su come abilitare JavaScript nel browser utilizzato</a>.';
$string['error'] = 'Errore';
$string['errors'] = 'Errori:';
$string['export_csv'] = 'Esporta i dati del compito in formato CSV';
$string['export_global_csv'] = 'Clicca per esportare i dati in formato CSV';
$string['export_raw_csv'] = 'Clicca per esportare i dati grezzi in formato CSV';
$string['failedanalysis'] = 'Compilatio non è riuscito ad analizzare il documento:';
$string['filename'] = 'Nome del file';
$string['filereset'] = 'Un documento è stato azzerato per ri-caricamento su Compilatio';
$string['firstname'] = 'Nome';
$string['get_scores'] = 'Recupera la percentuale di similitudini da Compilatio.net';
$string['global_statistics'] = 'Statistiche globali';
$string['goto_helpcenter'] = 'Clicca sul punto di domanda per aprire una nuova finestra e collegarti al centro di assistenza Compilatio.';
$string['green_threshold'] = 'Verde fino a';
$string['help_compilatio_format_content'] = 'Compilatio.net prende in considerazione la maggior parte dei formati utilizzati.
I seguenti formati sono supportati:';
$string['help_compilatio_settings_content'] = 'Il plug-in Compilatio permette di avviare le analisi secondo 3 opzioni:
<ul>
<li>
Immediato:<br/>
Ogni documento è inviato a Compilatio ed analizzato dal momento in cui lo studente lo deposita.
Consigliato se si desidera avere i risultati il più presto possibile e se non è necessario che tutti i documenti siano confrontati tra di loro
</li>
<li>
Programmato: <br/>
Tutti i documenti vengono analizzati alla data indicata. Scegliere una data di avvio delle analisi Compilatio successiva alla data limite di consegna da parte degli studenti.
Consigliato se si desidera confrontare tutti i documenti del compito tra di loro.
</li>
<li>
Manuale: <br/>
I documenti del compito sono analizzati solo se le analisi sono avviate personalmente. Per avviare l\'analisi di un documento, cliccare sul tasto "Analizzare" di ogni documento. Il tasto "Analizzare tutti i documenti" permette di avviare l\'analisi di tutti i documenti presenti nel compito.
</li>
</ul>';
$string['help_compilatio_settings_title'] = 'Quali parametri scegliere nelle impostazioni Compilatio di un compito?';
$string['hide_area'] = 'Nascondi le informazioni Compilatio';
$string['immediately'] = 'Immediatamente';
$string['indexed_document'] = 'Documento aggiunto alla biblioteca dei riferimenti dell\'istituto. Il suo contenuto potrà essere utilizzato per individuare delle similitudini con altri documenti.';
$string['indexing_state'] = 'Aggiungi i documenti nel Database dei documenti';
$string['indexing_state_help'] = 'Il contenuto dei documenti è indicizzato Database dei documenti. Verrà utilizzato come materiale di confronto per le future analisi.';
$string['information_settings'] = 'Informazioni';
$string['lastname'] = 'Cognome';
$string['loading'] = 'Caricamento in corso, si prega di attendere...';
$string['manual_analysis'] = 'L\'analisi di questo documento deve essere avviata manualmente';
$string['manual_send_confirmation'] = '{$a} documenti inviati a Compilatio';
$string['max_attempts_reach_files'] = 'I seguenti  file non sono stati analizzati da Compilatio. Sono state avviate troppe analisi e non è possibile avviarle di nuovo:';
$string['max_file_size_allowed'] = 'Dimensione massima dei documenti : <strong>{$a->Mo} MB</strong>';
$string['maximum'] = 'Massimo';
$string['minimum'] = 'Minimo';
$string['news_analysis_perturbated'] = 'Analisi Compilatio.net con piccoli disguidi';
$string['news_incident'] = 'Incidente Compilatio.net';
$string['news_maintenance'] = 'Manutenzione Compilatio.net';
$string['news_update'] = 'Aggiornamento Compilatio.net';
$string['no_document_available_for_analysis'] = 'Nessun documento disponibile per le analisi';
$string['no_documents_available'] = 'Nessun documento è disponibile per l\'analisi del compito';
$string['no_statistics_yet'] = 'Nessuna statistica è disponibile al momento';
$string['not_analyzed'] = 'Non è stato possibile analizzare i seguenti documenti:';
$string['not_analyzed_unextractable'] = '{$a} documenti non sono stati analizzati perché non contengono abbastanza testo.';
$string['not_analyzed_unsupported'] = '{$a} documenti non sono stati analizzati perché il loro formato non è supportato.';
$string['not_indexed_document'] = 'Documento non aggiunto alla biblioteca dei riferimenti dell\'istituto. Il suo contenuto non verrà utilizzato per individuare delle similitudini con altri documenti.';
$string['numeric_threshold'] = 'La soglia deve essere numerica';
$string['orange_threshold'] = 'Arancione fino a';
$string['owner_file'] = 'RGPD e proprietà dei testi';
$string['owner_file_school'] = 'L\'organizzazione è proprietaria degli elaborati';
$string['owner_file_school_details'] = 'In caso di richiesta di cancellazione dei dati personali di un allievo, il contenuto dei suoi elaborati sarà disponibile per un confronto futuro con eventuali nuovi testi. Al termine del contratto con Compilatio, tutti i dati personali del vostro stabilimento – compresi gli elaborati caricati sul sito – saranno cancellati entro i termini contrattuali.';
$string['owner_file_student'] = 'L\'allievo è l\'unico proprietario dei suoi elaborati';
$string['owner_file_student_details'] = 'In caso di richiesta di cancellazione dei dati personali di uno studente, i suoi elaborati saranno cancellati dalla piattaforma Moodle e dalla biblioteca di riferimento di Compilatio. Gli elaborati non saranno più disponibili per un confronto con nuovi documenti.';
$string['pending'] = 'Il documento è in attesa di essere inviato a Compilatio';
$string['pending_status'] = 'In attesa';
$string['planned'] = 'Pianificato';
$string['plugin_disabled'] = 'Il plug-in non è attivo.';
$string['plugin_disabled_assign'] = 'Il plug-in non è attivo per i compiti.';
$string['plugin_disabled_forum'] = 'Il plug-in non è attivo per i forum.';
$string['plugin_disabled_workshop'] = 'Il plug-in non è attivo per i workshop.';
$string['plugin_enabled'] = 'Il plug-in è attivo per la piattaforma Moodle';
$string['plugin_enabled_assign'] = 'Il plug-in è attivo per i compiti';
$string['plugin_enabled_forum'] = 'Il plug-in è attivo per i forum';
$string['plugin_enabled_workshop'] = 'Il plug-in è attivo per i laboratori';
$string['pluginname'] = 'Plug-in Compilatio per il rilevamento plagio';
$string['previouslysubmitted'] = 'Inviato in precedenza come';
$string['privacy:metadata:core_files'] = 'File caricati o creati da un campo di input';
$string['privacy:metadata:core_plagiarism'] = 'Questo plugin è chiamato dal sottosistema di prevenzione plagio di Moodle';
$string['privacy:metadata:external_compilatio_document'] = 'Informazioni sui documenti nel database Compilatio';
$string['privacy:metadata:external_compilatio_document:email_adress'] = 'Indirizzo e-mail dell\'utente Compilatio che ha inviato il file - attenzione, questo utente è quello che è collegato alla chiave API Compilatio sulla piattaforma Moodle (quindi probabilmente è l\'amministratore della piattaforma)';
$string['privacy:metadata:external_compilatio_document:filename'] = 'Nome del documento inviato';
$string['privacy:metadata:external_compilatio_document:firstname'] = 'Nome dell\'utente della Compilatio che ha inviato il file - attenzione, questo utente è quello che è collegato alla chiave API Compilatio sulla piattaforma Moodle (quindi probabilmente è l\'amministratore della piattaforma)';
$string['privacy:metadata:external_compilatio_document:id'] = 'L\'ID del documento inviato nel database di Compilatio';
$string['privacy:metadata:external_compilatio_document:indexed'] = 'Stato di indicizzazione del documento inviato (se utilizzato come riferimento per l\'analisi)';
$string['privacy:metadata:external_compilatio_document:lastname'] = 'Nome dell\'utente Compilatio che ha inviato il file - attenzione, questo utente è quello che è collegato alla chiave API di Compilatio sulla piattaforma Moodle (quindi probabilmente è l\'amministratore della piattaforma)';
$string['privacy:metadata:external_compilatio_document:upload_date'] = 'Ora in cui il file è stato salvato nel database Compilatio';
$string['privacy:metadata:external_compilatio_document:user_id'] = 'L\'ID dell\'utente Compilatio che ha inviato il file - attenzione, questo utente è quello che è collegato alla chiave API Compilatio sulla piattaforma Moodle (quindi probabilmente è l\'amministratore della piattaforma)';
$string['privacy:metadata:external_compilatio_report'] = 'Informazioni sul report di analisi nel database del Compilatio (solo se il documento è stato analizzato)';
$string['privacy:metadata:external_compilatio_report:doc_id'] = 'ID Compilatio del documento che è stato analizzato';
$string['privacy:metadata:external_compilatio_report:end'] = 'Data di fine dell\'analisi';
$string['privacy:metadata:external_compilatio_report:id'] = 'L\'ID Compilatio del report di analisi';
$string['privacy:metadata:external_compilatio_report:plagiarism_percent'] = 'Percentuale di somiglianze riscontrate per il documento inviato';
$string['privacy:metadata:external_compilatio_report:start'] = 'Data di inizio dell\'analisi';
$string['privacy:metadata:external_compilatio_report:state'] = 'Stato d’analisi del documento inviato (Analisi, Attesa, Tempo passato...)';
$string['privacy:metadata:external_compilatio_report:user_id'] = 'L\'ID dell\'utente Compilatio che ha inviato il file - attenzione, questo utente è quello che è collegato alla chiave API Compilatio sulla piattaforma Moodle (quindi spesso è l\'amministratore della piattaforma)';
$string['privacy:metadata:plagiarism_compilatio_files'] = 'Informazioni sui file inviati a Compilatio nel database dei plugin';
$string['privacy:metadata:plagiarism_compilatio_files:attempt'] = 'Numero di volte che un utente ha tentato di eseguire l\'analisi di un documento inviato';
$string['privacy:metadata:plagiarism_compilatio_files:cm'] = 'ID del modulo del corso in cui si trova il documento inviato';
$string['privacy:metadata:plagiarism_compilatio_files:errorresponse'] = 'Risposta in caso di errore - attualmente questo campo non è più utilizzato e viene impostato automaticamente su \'NULL\'';
$string['privacy:metadata:plagiarism_compilatio_files:externalid'] = 'ID del documento inviato nel database di Compilatio';
$string['privacy:metadata:plagiarism_compilatio_files:filename'] = 'Nome (eventualmente generato automaticamente) del documento inviato';
$string['privacy:metadata:plagiarism_compilatio_files:id'] = 'ID del documento inviato nel database di Moodle';
$string['privacy:metadata:plagiarism_compilatio_files:identifier'] = 'Content hash del documento inviato';
$string['privacy:metadata:plagiarism_compilatio_files:reporturl'] = 'URL del report di analisi';
$string['privacy:metadata:plagiarism_compilatio_files:similarityscore'] = 'Percentuale di somiglianze riscontrate per il documento inviato';
$string['privacy:metadata:plagiarism_compilatio_files:statuscode'] = 'Sstato del documento inviato (analisi, attesa, tempo passato...)';
$string['privacy:metadata:plagiarism_compilatio_files:timesubmitted'] = 'Il momento in cui il file è stato salvato nel database di Moodle del plugin';
$string['privacy:metadata:plagiarism_compilatio_files:userid'] = 'L\'identificante dell\'utente Moodle che ha effettuato l’invio del documento';
$string['processing_doc'] = 'Il documento è in corso di analisi da parte di Compilatio';
$string['programmed_analysis_future'] = 'I documenti saranno analizzati da Compilatio il {$a}.';
$string['programmed_analysis_past'] = 'I documenti sono stati inviati  a Compilatio per l\'analisi il {$a}.';
$string['progress'] = 'Avanzamento:';
$string['queue'] = 'Coda';
$string['queued'] = 'Il documento è in attesa di analisi e a breve sarà analizzato da Compilatio';
$string['red_threshold'] = 'Rosso oltre';
$string['report'] = 'report';
$string['reset'] = 'Reimposta';
$string['restart_failed_analysis'] = 'Riavvia le analisi interrotte';
$string['restart_failed_analysis_title'] = 'Riavvio le analisi interrotte :';
$string['results'] = 'Risultati:';
$string['saved_config_failed'] = 'La combinazione indirizzo - chiave API non è corretta. Il plug-in è disattivato, La preghiamo di riprovare.
La pagina di <a href="autodiagnosis.php">auto-diagnosi</a> può aiutarla a configurare questo plug-in.
Errore :';
$string['savedconfigsuccess'] = 'I parametri sono stati salvati correttamente';
$string['send_files'] = 'Carica i file su Compilatio.net per il rilevamento del plagio';
$string['showwhenclosed'] = 'L\'attività chiude';
$string['similarities'] = 'Similitudini';
$string['similarities_disclaimer'] = 'E\' possibile analizzare le similitudini presenti nei documenti di questo compito con l\'aiuto del software <a href=\'http://compilatio.net\' target=\'_blank\'>Compilatio</a>.<br/>
Attenzione, le similitudini rilevate durante un\'analisi non rivelano necessariamente un plagio.
Il rapporto di analisi aiuterà a comprendere se le similitudini corrispondono a dei prestiti e citazioni citati in maniera conveniente o a dei plagi.';
$string['similarity_percent'] = '% di similitudine';
$string['startallcompilatioanalysis'] = 'Analizza tutti i documenti';
$string['startanalysis'] = 'Avvia analisi';
$string['start_analysis_title'] = 'Avvio manuale dell\'analisi';
$string['statistics_title'] = 'Statistiche';
$string['studentdisclosuredefault'] = 'L\'insieme dei documenti inviati sarà analizzato dal servizio di rilevamento del plagio di Compilatio';
$string['studentemailcontent'] = 'Il documento che caricato in {$a->modulename} in {$a->coursename} è stato analizzato dal software di rilevamento del plagio Compilatio {$a->modulelink}';
$string['studentemailsubject'] = 'Il documento è stato analizzato da Compilatio';
$string['students_disclosure'] = 'Divulga agli studenti';
$string['students_disclosure_help'] = 'Il testo sarà visibile a tutti gli studenti sulla pagina di upload del documento.';
$string['submitondraft'] = 'Invia il documento non appena caricato';
$string['submitonfinal'] = 'Invia il documento quando uno studente lo invia per l\'analisi';
$string['subscription_state'] = 'L\'abbonamento Compilatio.net è valido fino alla fine del mese di {$a->end_date}. Questo mese, ha analizzato l\'equivalente di {$a->used} documenti di almeno 5.000 parole';
$string['tabs_title_help'] = 'Aiuto';
$string['tabs_title_notifications'] = 'Notifiche';
$string['tabs_title_stats'] = 'Statistiche';
$string['teacher'] = 'Docente';
$string['thresholds_description'] = 'Indica le soglie da utilizzare in modo da facilitare la classificazione delle analisi (% di similitudini)';
$string['thresholds_settings'] = 'Personalizzazione delle soglie per la percentuale di similitudini:';
$string['timesubmitted'] = 'Inviato a Compilatio il';
$string['toolarge'] = 'Il documento è troppo esteso per essere analizzato da Compilatio. Grandezza massima : {$a->Mo} MB';
$string['trigger_timed_analyses'] = 'Avvia le analisi anti plagio programmate';
$string['unextractable'] = 'Non è stato possibile estrarre il contenuto di questo documento';
$string['unextractablefile'] = 'Il documento non contiene abbastanza parole o non è stato possibile estrarre correttamente il testo.';
$string['unextractable_files'] = 'Non è stato possibile analizzare i seguenti documenti con Compiltio.net. Non contengono abbastanza parole o non è stato possibile estrarre correttamente il loro contenuto:';
$string['unknownlang'] = 'Attenzione, la lingua di alcuni passaggi di questo documento non è stata riconosciuta.';
$string['unknownwarning'] = 'Si è verificato un errore durante l\'invio del documento a Compilatio';
$string['unsent_documents'] = 'Documenti non inviati';
$string['unsent_documents_content'] = 'Attenzione, questa cartella contiene documenti non inviati a Compilatio.';
$string['unsupported'] = 'Documento non supportato';
$string['unsupported_files'] = 'Non è stato possibile analizzare i seguenti documenti con Compiltio.net perché il loro formato non è supportato:';
$string['unsupportedfiletype'] = 'Questo tipo di documento non è supportato da Compilatio';
$string['updatecompilatioresults'] = 'Aggiorna le informazioni';
$string['updated_analysis'] = 'I risultati dell\'analisi Compilatio sono stati aggiornati';
$string['update_in_progress'] = 'Aggiornamento informazioni';
$string['update_meta'] = 'Esegui le operazioni pianificate da Compilatio.net';
$string['use_compilatio'] = 'Consenti il rilevamento delle similitudini con Compilatio';
$string['webservice_not_ok'] = 'Non è stato possibile contattare il web service. È possibile che il firewall blocchi la connessione.';
$string['webservice_ok'] = 'Il server è in grado di contattare il webservice';
$string['webservice_unreachable_content'] = 'Il servizio Compilatio.net è attualmente non disponibile. Ci scusiamo per l\'interruzione momentanea';
$string['webservice_unreachable_title'] = 'Compilatio.net non è disponibile.';
