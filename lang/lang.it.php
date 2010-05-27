<?php

	$about = array(
		'name' => 'Italiano',
		'author' => array(
			'name' => 'Simone Economo',
			'email' => 'my.ekoes@gmail.com',
			'website' => 'http://lineheight.net',
		),
		'release-date' => '2010-05-28',
	);


	/**
	 * Symphony Core
	 */
	$dictionary = array(

		'A database error occurred while attempting to reorder.' => 
		'Il riordinamento &#232; andato fallito a causa di un errore nel database.',

		'You are not authorised to access this page.' => 
		'Non sei autorizzato ad accedere alla pagina.',

		'%1$s &ndash; %2$s' => 
		false,

		'Symphony' => 
		false,

		'Components' => 
		'Componenti',

		'Events' => 
		'Eventi',

		'Create New' => 
		'Crea nuovo',

		'Create a new event' => 
		'Crea un nuovo evento',

		'Data Sources' => 
		'Sorgenti dati',

		'Create a new data source' => 
		'Crea una nuova sorgente dati',

		'Utilities' => 
		'Servizi',

		'Create a new utility' => 
		'Crea un nuovo servizio',

		'An error occurred while processing this form. <a href="#error">See below for details.</a>' => 
		'Si &#232; verificato un errore durante il salvataggio delle modifiche. <a href="#error">Visualizza i dettagli.</a>',

		'Data source updated at %1$s. <a href="%2$s">Create another?</a> <a href="%3$s">View all Data sources</a>' => 
		'Sorgente dati aggiornata %1$s. <a href="%2$s">Vuoi crearne un\'altra?</a> <a href="%3$s">Visualizza tutte le sorgenti dati</a>',

		'Data source created at %1$s. <a href="%2$s">Create another?</a> <a href="%3$s">View all Data sources</a>' => 
		'Sorgente dati creata %1$s. <a href="%2$s">Vuoi crearne un\'altra?</a> <a href="%3$s">Visualizza tutte le sorgenti dati</a>',

		'Untitled' => 
		'Senza titolo',

		'Essentials' => 
		'Generalità',

		'Name' => 
		'Nome',

		'Source' => 
		'Fonte',

		'System' => 
		'Sistema',

		'authors' => 
		'autori',

		'Authors' => 
		'Autori',

		'navigation' => 
		'navigazione',

		'Navigation' => 
		'Navigazione',

		'Custom XML' => 
		'Altre fonti XML',

		'dynamic_xml' => 
		'dynamic_xml',

		'Dynamic XML' => 
		'Fonte XML dinamica',

		'static_xml' => 
		'static_xml',

		'Static XML' => 
		'Fonte XML statica',

		'Sections' => 
		'Sezioni',

		'sections' => 
		'sezioni',

		'Filter Results' => 
		'Filtri',

		'Use <code>{$param}</code> syntax to filter by page parameters.' => 
		'La sintassi <code>{$parametro}</code> ti permette di usare i Parametri URL di una pagina come filtro.',

		'Filter %s by' => 
		'Filtra %s per',

		'System ID' => 
		'ID di sistema',

		'Value' => 
		'Valore',

		'Filter Authors by' => 
		'Filtra autori per',

		'ID' => 
		false,

		'Username' => 
		'Nome utente',

		'First Name' => 
		'Nome',

		'Last Name' => 
		'Cognome',

		'Email' => 
		'E-mail',

		'User Type' => 
		'Tipologia di utente',

		'Filter Navigation by' => 
		'Filtra la navigazione per',

		'Parent Page' => 
		'Pagina genitrice',

		'Page Type' => 
		'Tipologia della pagina',

		'Sorting and Limiting' => 
		'Ordinamento e limitazioni',

		'Use <code>{$param}</code> syntax to limit by page parameters.' => 
		'La sintassi <code>{$parametro}</code> ti permette di usare i Parametri URL di una pagina come filtro.',

		'Sort By' => 
		'Ordina per',

		'Author ID' => 
		'ID dell\'autore',

		'Status' => 
		'Stato',

		'Page ID' => 
		'ID della pagina',

		'Handle' => 
		'Abbreviazione',

		'Sort Order' => 
		'Ordinamento',

		'System Date' => 
		'Data di sistema',

		'ascending' => 
		'crescente',

		'descending' => 
		'decrescente',

		'random' => 
		'casuale',

		'Show a maximum of %s results' => 
		'Mostra un numero massimo di %s risultati',

		'Show page %s of results' => 
		'Mostra la pagina %s dei risultati',

		'Required URL Parameter <i>Optional</i>' => 
		'Parametro URL associato <i>Facoltativo</i>',

		'An empty result will be returned when this parameter does not have a value. Do not wrap the parameter with curly-braces.' => 
		'Non includere le parentesi graffe. Se il parametro non ha alcun valore, non verr&#224; restituito alcun risultato.' ,

		'%s Redirect to 404 page when no results are found' => 
		'%s Reindirizza alla pagina 404 nel caso non venga restituito alcun risultato',

		'Output Options' => 
		'Opzioni di output',

		'Parameter Output' => 
		'Parametro associato',

		'Use Field' => 
		'Usa il campo',

		'None' => 
		'Nessuno',

		'User type' => 
		'Tipologia di utente',

		'System Author' => 
		'Amministratore',

		'The parameter <code id="output-param-name">$ds-%s</code> will be created with this field\'s value for XSLT or other data sources to use.' => 
		'Verr&#224; creato un nuovo parametro <code id="output-param-name">$ds-%s</code> che potrà essere utilizzato nei template XSLT o in altre sorgenti dati.',

		'XML Output' => 
		'Albero XML',

		'Group By' => 
		'Raggruppa per',

		'Author' => 
		'Autore',

		'Included Elements' => 
		'Filtro',

		'%s Include a count of entries in associated sections' => 
		'%s includi il conteggio delle voci presenti in questa sezione',

		'%s HTML-encode text' => 
		'%s codifica il testo in formato HTML',

		'URL' => 
		'URL della sorgente',

		'Use <code>{$param}</code> syntax to specify dynamic portions of the URL.' => 
		'La sintassi <code>{$param}</code> ti permette di usare i parametri URL di una pagina come valore.',

		'Namespace Declarations <i>Optional</i>' => 
		'Namespace aggiuntivi <i>Facoltativo</i>',

		'URI' => 
		false,

		'Namespace' => 
		false,

		'Use an XPath expression to select which elements from the source XML to include.' => 
		'Puoi usare un\'espressione XPath per scegliere quali elementi estrarre dall\'albero XML.',

		'Body' => 
		'Corpo',

		'Save Changes' => 
		'Salva le modifiche',

		'Create Data Source' => 
		'Crea la sorgente dati',

		'Delete' => 
		'Elimina',

		'Delete this data source' => 
		'Elimina questa sorgente dati',

		'%1$s &ndash; %2$s &ndash; %3$s' => 
		false,

		'Data Source' => 
		'Sorgente dati',

		'URL Parameters' => 
		'Parametri URL',

		'Failed to delete <code>%s</code>. Please check permissions.' => 
		'Non &#232; stato possibile cancellare <code>%s</code>. Controlla i permessi.',

		'This is a required field' => 
		'Questo campo &#232; obbligatorio.',

		'XML is invalid' => 
		'XML non valido',

		'Must be a valid number' => 
		'Dev\'essere un numero valido',

		'Must be greater than zero' => 
		'Dev\'essere un numero maggiore di zero',

		'A result limit must be set' => 
		'Dev\'essere impostato un numero massimo di risultati',

		'Must be a valid number or parameter' => 
		'Dev\'essere un numero valido o un parametro',

		'A page number must be set' => 
		'Dev\'essere definito un numero di pagina',

		'A Data source with the name <code>%s</code> name already exists' => 
		'Una sorgente dati chiamata <code>%s</code> &#232; gi&#224; stata definita.',

		'Failed to write Data source to <code>%s</code>. Please check permissions.' => 
		'Non &#232; stato possibile creare la sorgente dati in <code>%s</code>. Controlla i permessi.',

		'Event updated at %1$s. <a href="%2$s">Create another?</a> <a href="%3$s">View all Events</a>' => 
		'Evento modificato %1$s. <a href="%2$s">Vuoi crearne un altro?</a> <a href="%3$s">Visualizza tutti gli eventi</a>',

		'Event created at %1$s. <a href="%2$s">Create another?</a> <a href="%3$s">View all Events</a>' => 
		'Evento creato %1$s. <a href="%2$s">Vuoi crearne un altro?</a> <a href="%3$s">Visualizza tutti gli eventi</a>',

		'Filter Rules' => 
		'Azioni associate all\'evento',

		'Admin Only' => 
		'Solamente gli autori autenticati possono scatenare l\'evento',

		'Send Email' => 
		'Invia un\'email a un autore quando l\'evento viene scatenato',

		'Allow Multiple' => 
		'Consenti l\'invio di pi&#249; voci',

		'This event will not be processed if any of these rules return true.' => 
		'L\'esito di questo evento &#232; strettamente legato a quello delle azioni selezionate.',

		'Description' => 
		'Descrizione',

		'Create Event' => 
		'Crea l\'evento',

		'Delete this event' => 
		'Elimina questo evento',

		'An Event with the name <code>%s</code> name already exists' => 
		"Un evento chiamato <code>%s</code> &#232; gi&#224; stato definito.",

		'Success and Failure XML Examples' => 
		'Risposta XML all\'evento',

		'When saved successfully, the following XML will be returned:' => 
		'Se l\'evento d&#224; esito positivo, verr&#224; restituito il seguente messaggio:',

		'Entry [created | edited] successfully.' => 
		'Voce [creata | modificata] con successo.',

		'When an error occurs during saving, due to either missing or invalid fields, the following XML will be returned' => 
		'Se l\'evento d&#224; esito negativo, per esempio a causa di campi mancanti o non validi, verr&#224; restituito il seguente messaggio:',

		' (<b>Notice that it is possible to get mixtures of success and failure messages when using the "Allow Multiple" option</b>)' => 
		 '(<b>N.B. &#232; possibile che utilizzando l\'opzione "Consenti l\'invio di pi&#249; voci" si possano ottenere sia messaggi di conferma che messaggi d\'errore</b>)',

		'Entry encountered errors when saving.' => 
		'Si sono verificati degli errori durante il salvataggio delle modifiche.',

		'The following is an example of what is returned if any filters fail:' => 
		'Se una o più azioni dovessero dare esito negativo, verr&#232; restituito un messaggio d\'errore simile a questo:',

		'Recipient username was invalid' => 
		'Il nome utente del destinatario non &#232; corretto',

		'Example Front-end Form Markup' => 
		'Come costruire il form associato all\'evento',

		'This is an example of the form markup you can use on your frontend:' => 
		'Per costruire il form associato a questo evento puoi ispirarti a questo esempio:',

		'Submit' => 
		'Invia',

		'To edit an existing entry, include the entry ID value of the entry in the form. This is best as a hidden field like so:' => 
		'Per modificare una voce gi&#224; esistente:',

		'To redirect to a different location upon a successful save, include the redirect location in the form. This is best as a hidden field like so, where the value is the URL to redirect to:' => 
		'Per reindirizzare su una pagina differente dopo l\'invio:',

		'Send Email Filter' => 
		'Maggiori informazioni sull\'invio di e-mail',

		'The send email filter, upon the event successfully saving the entry, takes input from the form and send an email to the desired recipient. <b>This filter currently does not work with the "Allow Multiple" option.</b> The following are the recognised fields:' => 
		'L\'azione relativa all\'invio di e-mail prende in input i dati inseriti nel form inviandoli al destinatario designato. <b>Questa azione non &#232; compatibile con l\'opzione "Consenti l\'invio di pi&#249; voci".</b> Di seguito i campi riconosciuti:',

		'Optional' => 
		'Facoltativo',

		'list of comma author usernames.' => 
		'i nomi di ciascun utente separati da virgola',

		'All of these fields can be set dynamically using the exact field name of another field in the form as shown below in the example form:' => 
		'Per costruire il form associato a questo evento puoi ispirarti a questo esempio:',

		'Message' => 
		'Messaggio',

		'Failed to write Event to <code>%s</code>. Please check permissions.' => 
		'Non &#232; stato possibile creare l\'evento in <code>%s</code>. Controlla i permessi.',

		'Pages' => 
		'Pagine',

		'Create a new page' => 
		'Crea una nuova pagina',

		'Title' => 
		'Titolo',

		'Template' => 
		false,

		'<acronym title="Universal Resource Locator">URL</acronym>' => 
		false,

		'<acronym title="Universal Resource Locator">URL</acronym> Parameters' => 
		'Parametri <acronym title="Universal Resource Locator">URL</acronym>',

		'Type' => 
		'Tipo',

		'Children' => 
		'Figli',

		'None found.' => 
		'Nessun risultato trovato.',

		'With Selected...' => 
		'ai selezionati...',

		'Apply' => 
		'Applica',

		'Page updated at %s. <a href="%s">View all Pages</a>' => 
		'Pagina modificata %s. <a href="%s">Visualizza tutte le pagine.</a>',

		'Edit Configuration' => 
		'Modifica le impostazioni',

		'Edit Page Confguration' => 
		'Modifica le impostazioni associate a questo template',

		'Body is a required field.' => 
		'Il corpo &#232; un campo obbligatorio.',

		'This document is not well formed. The following error was returned: <code>%s</code>' => 
		'Questo documento non &#232;  la sintassi XML. L\'errore individuato &#232; il seguente: <code>%s</code>',

		'Utility could not be written to disk. Please check permissions on <code>/workspace/utilities</code>.' => 
		'Non &#232; stato possibile creare il servizio. Verificare i permessi di lettura/scrittura nella cartella <code>/workspace/utilities</code>.',

		'Page not found' => 
		'La pagina non &#232; stata trovata',

		'The page you requested to edit does not exist.' => 
		'La pagina richiesta non esiste.',

		'Page updated at %1$s. <a href="%2$s">Create another?</a> <a href="%3$s">View all Pages</a>' => 
		'Pagina modificata %1$s. <a href="%2$s">Vuoi crearne un\'altra?</a> <a href="%3$s">Visualizza tutte le pagine</a>',

		'Page created at %1$s. <a href="%2$s">Create another?</a> <a href="%3$s">View all Pages</a>' => 
		'Pagina creata %1$s. <a href="%2$s">Vuoi crearne un\'altra?</a> <a href="%3$s">Visualizza tutte le pagine</a>',

		'Edit Template' => 
		'Modifica il template',

		'Edit Page Template' => 
		'Modifica il template associato a questa pagina',

		'Page Settings' => 
		'Impostazioni',

		'URL Handle' => 
		'Abbreviazione URL',

		'Page Resources' => 
		'Risorse associate',

		'Create Page' => 
		'Crea la pagina',

		'Delete this page' => 
		'Elimina questa pagina',

		'Title is a required field' => 
		'Il titolo &#232; un campo obbligatorio.',

		'An index type page already exists.' => 
		"Una pagina di tipo \'index\' &#232; gi&#224; stata definita.",

		'A 404 type page already exists.' => 
		'Una pagina di tipo \'404\' &#232; gi&#224; stata definita.',

		'A 403 type page already exists.' => 
		'Una pagina di tipo \'403\' &#232; gi&#224; stata definita.',

		'Page could not be written to disk. Please check permissions on <code>/workspace/pages</code>.' => 
		'Non &#232; stato possibile scrivere la pagina sul disco. Controlla i permessi nella cartella <code>/workspace/pages</code>.',

		'A page with that title already exists' => 
		'Una pagina con lo stesso titolo &#232; gi&#224; stata definita.',

		'A page with that handle already exists' => 
		'Una pagina con lo stesso identificativo &#232; gi&#224; stata definita.',

		'Unknown errors occurred while attempting to save. Please check your <a href="%s">activity log</a>.' => 
		'Si sono verificati degli errori durante il salvataggio. Controlla il <a href="%s">registro delle attivit&#224;</a>',

		'Page could not be deleted because it does not exist.' => 
		'Non &#232; stato possibile eliminare la pagina poich&#233; non esiste.',

		'Page could not be deleted because it has children.' => 
		'Non &#232; stato possibile eliminare la pagina poich&#233; contiene al suo interno delle sotto-pagine.',

		'One or more pages could not be deleted. Please check permissions on <code>/workspace/pages</code>.' => 
		'Non &#232; stato possibile eliminare una o pi&#249; pagine. Controlla i permessi nella cartella <code>/workspace/pages</code>.',

		'Create a section' => 
		'Crea una nuova sezione',

		'Entries' => 
		'Voci',

		'Navigation Group' => 
		'Gruppo di navigazione',

		'Delete Entries' => 
		'Elimina le voci',

		'%s Hide this section from the Publish menu' => 
		'%s Nascondi questa sezione dal men&#249; di navigazione',

		'Fields' => 
		'Campi',

		'Create Section' => 
		'Crea la sezione',

		'Unknown Section' => 
		'Sezione sconosciuta',

		'The Section you are looking for could not be found.' => 
		'La sezione richiesta non &#232; stata trovata.',

		'Section updated at %1$s. <a href="%2$s">Create another?</a> <a href="%3$s">View all Sections</a>' => 
		'Sezione modificata %1$s. <a href="%2$s">Vuoi crearne un\'altra?</a> <a href="%3$s">Visualizza tutte le sezioni</a>',

		'Section created at %1$s. <a href="%2$s">Create another?</a> <a href="%3$s">View all Sections</a>' => 
		'Sezione creata %1$s. <a href="%2$s">Vuoi crearne un\'altra?</a> <a href="%3$s">Visualizza tutte le sezioni</a>',

		'Navigation Group <i>Choose only one. Created if does not exist</i>' => 
		'Gruppo di navigazione <i>Puoi inserirne solo uno. Se non esiste, verr&#224; creato</i>',

		'Delete this section' =>
		'Elimina questa sezione',

		'This is a required field.' => 
		'Questo campo &#232; obbligatorio.',

		'A Section with the name <code>%s</code> name already exists' => 
		'Una sezione chiamata <code>%s</code> &#232; gi&#224; stata definita.',

		'Two custom fields have the same element name. All element names must be unique.' =>
		'I nomi dei campi personalizzati devono essere univoci.',

		'There is already a field of type <code>%s</code>. There can only be one per section.' => 
		'Un campo del tipo <code>%s</code> &#232; gi&#224; stato definito. Pu&#242; esisterne solo uno per sezione.',

		'An unknown database occurred while attempting to create the section.' => 
		'Si &#232; verificato un errore nel database durante la creazione della sezione.',

		'Utility updated at %1$s. <a href="%2$s">Create another?</a> <a href="%3$s">View all Utilities</a>' => 
		'Servizio aggiornato alle %1$s. <a href="%2$s">Vuoi crearne un altro?</a> <a href="%3$s">Visualizza tutti gli strumenti</a>',

		'Utility created at %1$s. <a href="%2$s">Create another?</a> <a href="%3$s">View all Utilities</a>' => 
		'Servizio creato alle %1$s. <a href="%2$s">Vuoi crearne un altro?</a> <a href="%3$s">Visualizza tutti gli strumenti</a>',

		'Create Utility' => 
		'Crea il servizio',

		'Delete this utility' => 
		'Elimina questo servizio',

		'Name is a required field.' => 
		'Il nome è un campo obbligatorio.',

		'A Utility with that name already exists. Please choose another.' => 
		'Un servizio con lo stesso nome &#232; gi&#224; stato definito.',

		'Login' => 
		'Accedi',

		'An email containing a customised login link has been sent. It will expire in 2 hours.' => 
		'Ti &#232; stata inviata un\'e-mail contenente un link per effettuare l\'accesso. Ricorda che il link &#232; &#232; valido solo nelle prossime 2 ore.',

		'Enter your email address to be sent a remote login link with further instructions for logging in.' => 
		'Inserisci il tuo indirizzo e-mail per ricevere ulteriori istruzioni su come effettuare l\'accesso.',

		'Email Address' => 
		'Indirizzo e-mail',

		'There was a problem locating your account. Please check that you are using the correct email address.' => 
		'Non &#232; stato possibile trovare il tuo account. Per favore controlla di avere utilizzato un indirizzo e-mail corretto.',

		'New Password' => 
		'Nuova password',

		'Confirm New Password' => 
		'Conferma la nuova password',

		'The supplied password was rejected. Make sure it is not empty and that password matches password confirmation.' => 
		'La password fornita non &#232; valida. Controlla di non aver lasciato il campo vuoto o di averla reinserita correttamente.',

		'Password' => 
		'Password',

		'The supplied password was rejected. <a href="%s">Retrieve password?</a>' => 
		'La password inserita non &#232; valida. <a href="%s">Hai perso la password?</a>',

		'Symphony Concierge' => 
		'Symphony CMS',

		'New Symphony Account Password' => 
		'Nuova password per il tuo account Symphony',

		'Hi %s,' => 
		'Ciao %s',

		'A new password has been requested for your account. Login using the following link, and change your password via the Authors area:' => 
		'&#232; stata richiesta una nuova password per il tuo account. Effettua l\'accesso usando il link seguente e modifica la password dalla pagina Autori dell\'amministrazione:',

		'It will expire in 2 hours. If you did not ask for a new password, please disregard this email.' => 
		'Ricorda che il link &#232; valido solo nelle prossime 2 ore. Se non ne hai richiesta una nuova, allora non considerare questa e-mail.',

		'Best Regards,' => 
		'Cordiali saluti,',

		'The Symphony Team' => 
		'Il team di Symphony CMS',

		'The Section you are looking, <code>%s</code> for could not be found.' => 
		'Non &#232; stato possibile trovare la sezione <code>%s</code>.',

		'Create a new entry' => 
		'Crea una nuova voce',

		'Sort by %1$s %2$s' => 
		'Ordina per %2$s %1$s',

		'Set %s' => 
		'Imposta %s',

		'First' => 
		'Prima',

		'&larr; Previous' => 
		'&larr; Precedente',

		'Page %1$s of %2$s' => 
		'Pagina %1$s di %2$s',

		'Viewing %1$s - %2$s of %3$s entries' => 
		'Voci mostrate: %1$s %2$s di %3s',

		'Next &rarr;' => 
		'Successiva &rarr;',

		'Last' => 
		'Ultima',

		'It looks like your trying to create an entry. Perhaps you want fields first? <a href="%s">Click here to create some.</a>' => 
		'Prima di creare una nuova voce in questa sezione, sei sicuro di non voler <a href="%s">creare un campo</a>, prima?',

		'Create Entry' => 
		'Crea la voce',

		'Some errors were encountered while attempting to save.' => 
		'Si sono verificati alcuni errori durante il salvataggio.',

		'The Section you are looking for, <code>%s</code>, could not be found.' => 
		'Non &#232; stato possibile trovare la sezione <code>%s</code>.',

		'Unknown Entry' => 
		'Voce sconosciuta',

		'The entry you are looking for could not be found.' => 
		'Non &#232; stato possibile trovare la voce richiesta.',

		'Entry updated at %1$s. <a href="%2$s">Create another?</a> <a href="%3$s">View all Entries</a>' => 
		'Voce modificata alle %1$s. <a href="%2$s">Vuoi crearne un\'altra?</a> <a href="%3$s">Visualizza tutte le voci</a>',

		'Entry created at %1$s. <a href="%2$s">Create another?</a> <a href="%3$s">View all Entries</a>' => 
		'Voce creata alle %1$s. <a href="%2$s">Vuoi crearne un\'altra?</a> <a href="%3$s">Visualizza tutte le voci</a>',

		'It looks like your trying to create an entry. Perhaps you want custom fields first? <a href="%s">Click here to create some.</a>' => 
		'Prima di creare una nuova voce in questa sezione, sei sicuro di non voler <a href="%s">creare un campo personalizato</a>, prima?',

		'Delete this entry' => 
		'Elimina questa voce',

		'Add an Author' => 
		'Crea un profilo',

		'Add a new author' => 
		'Crea un nuovo profilo autore',

		'Last Seen' => 
		'Ultima visita',

		'Author updated at %1$s. <a href="%2$s">Create another?</a> <a href="%3$s">View all Authors</a>' => 
		'Profilo autore modificato alle %1$s. <a href="%2$s">Vuoi crearne un altro?</a> <a href="%3$s">Visualizza i profili di tutti gli autori</a>',

		'Author created at %1$s. <a href="%2$s">Create another?</a> <a href="%3$s">View all Authors</a>' => 
		'Profilo autore aggiunto alle %1$s. <a href="%2$s">Vuoi crearne un altro?</a> <a href="%3$s">Visualizza i profili di tutti gli autori</a>',

		'Login Details' => 
		'Dettagli per l\'accesso',

		'Developer' => 
		'Sviluppatore',

		'Old Password' => 
		'Vecchia password',

		'Confirm Password' => 
		'Conferma password',

		'Leave password fields blank to keep the current password' => 
		'Lascia i campi vuoti per mantenere la password attuale',

		'%1$s Allow remote login via <a href="%2$s">%2$s</a>' => 
		'%1$s Permetti l\'accesso remoto attraverso <a href="%2$s">%2$s</a>',

		'Default Section' => 
		'Sezione da mostrare all\'accesso',

		'Custom Preferences' => 
		'Preferenze personali',

		'Language' => 
		'Lingua',

		'System Default' => 
		'Default',

		'Create Author' => 
		'Crea il profilo',

		'Delete this author' => 
		'Elimina questo profilo',

		'Passwords did not match' => 
		'La nuova password non &#232; stata inserita correttamente ',

		'There were some problems while attempting to save. Please check below for problem fields.' => 
		'Si sono verificati degli errori durante il salvataggio. Controlla di aver compilato correttamente il modulo.',

		'Wrong password. Enter old password to change it.' => 
		'La password &#232; errata. Inserisci quella vecchia per modificarla.',

		'Wrong password. Enter old one to change email address.' => 
		'La password &#232; errata. Inserisci quella vecchia per modificare l\'indirizzo email.',

		'Extensions' => 
		'Estensioni',

		'Enabled' => 
		'Attiva',

		'Version' => 
		'Versione',

		'Yes' => 
		'S&#236;',

		'No' => 
		'No',

		'Enable' => 
		'Attiva',

		'Disable' => 
		'Disattiva',

		'Uninstall' => 
		'Disinstalla',

		'Preferences' => 
		'Preferenze',

		'The Symphony configuration file, <code>/manifest/config.php</code>, is not writable. You will not be able to save changes to preferences.' => 
		'Il file di configurazione di Symphony, <code>/manifest/config.php</code>, non ha i permessi in scrittura, pertanto non sar&#224; possibile salvare eventuali cambiamenti alle impostazioni.',

		'Preferences saved.' => 
		false,

		'System Language' => 
		'Lingua',

		'Authors can set up a differing language in their profiles.' => 
		'Gli autori possono impostare una lingua diversa all\'interno del proprio profilo.',

		'Database Error' => 
		'Errore nel database',

		'Symphony Database Error' => 
		'Errore nel database di Symphony',

		'XSLT Processing Error' => 
		'Errore XSLT',

		'This page could not be rendered due to the following XSLT processing errors.' => 
		'Non &#232; stato possibile mostrare la pagina a causa dei seguenti errori di elaborazione.',

		'<a href="%s" title="Show debug view">Compile</a>' => 
		'<a href="%s" title="Mostra il debug per questa pagina">Debug</a>',

		'General' => 
		'Generale',

		'<a href="%1$s" title="Show debug view for %2$s">Line %3$d</a>' => 
		'<a href="%1$s" title="Mostra il debug per %2$s">Linea %3$d</a>',

		'Line %s' => 
		'Linea %s',

		'XML' => 
		false,

		'Access Denied' => 
		'Accesso negato',

		'Logout' => 
		'Esci',

		'You are not authorised to access this section.' => 
		'Non sei autorizzato ad accedere alla sezione richiesta.',

		'Could not add directory "%s".' => 
		'Non &#232; stato possibile creare la cartella "%s".',

		'Could not add file "%s".' => 
		'Non &#232; stato possibile creare il file "%s".',

		'First name is required' => 
		'Il nome &#232; obbligatorio.',

		'Last name is required' => 
		'Il cognome &#232; obbligatorio.',

		'E-mail address is required' => 
		'L\'indirizzo e-mail &#232; obbligatorio.',

		'E-mail address entered is invalid' => 
		'L\'indirizzo e-mail inserito non &#232; valido.',

		'Username is required' => 
		'Il nome utente &#232; obbligatorio.',

		'Username is already taken' => 
		"Il nome utente &#232; gi&#224; in uso.",

		'Password is required' => 
		'La password &#232; obbligatoria.',

		'%s is not a valid object. Failed to append to XML.' => 
		'Non &#232; stato possibile aggiungere %s all\'albero XML poich&#233; non &#232; un oggetto valido.',

		'No records found.' => 
		'L\'esito della ricerca non ha dato risultati.',

		'Could not find Data Source <code>%s</code>. If the Data Source was provided by an Extensions, ensure that it is installed, and enabled.' => 
		'Non &#232; stato possibile trovare la sorgente dati <code>%s</code>. Se &#232; stata fornita da un\'estensione, assicurati che quest\'ultima sia stata installata e abilitata.',

		'Edit' => 
		'Modifica',

		'Utility' => 
		'Servizio',

		'No suitable engine object found' => 
		'Non &#232; stato possibile creare il nuovo campo. Assicurati che esista un oggetto di tipo <code>engine</code>',

		'Entry limit specified was not a valid type. String or Integer expected.' => 
		'Il limite di voci specificato non &#232; valido. Usare una stringa o un numero intero.',

		'Could not find Event <code>%s</code>. If the Event was provided by an Extensions, ensure that it is installed, and enabled.' => 
		'Non &#232; stato possibile trovare l\'evento <code>%s</code>. Se &#232; stato fornito da un\'estensione, assicurati che quest\'ultima sia stata installata e abilitata.',

		'Could not %1$s %2$s, there was a problem loading the object. Check the driver class exists.' => 
		'&#232; stato riscontrato un errore: %1$s %2$s. Assicurati che esista il driver associato.',

		'Could not find extension at location %s' => 
		'Non &#232; stato possibile trovare l\'estensione in %s.',

		'Invalid element name. Must be valid QName.' => 
		'Il nome dell\'elemento dev\'essere di tipo <code>QName</code>.',

		'A field with that element name already exists. Please choose another.' => 
		'Un campo con questo nome &#232; gi&#224; stato definito.',

		'\'%s\' is a required field.' => 
		'\'%s\' &#232; un campo obbligatorio.',

		'Label' => 
		'Etichetta',

		'%s Make this a required field' => 
		'%s Campo obbligatorio',

		'%s Show column' => 
		'%s Mostra colonna',

		'Placement' => 
		'Collocamento nell\'interfaccia',

		'Main content' => 
		'Porzione principale',

		'Sidebar' => 
		'Barra laterale',

		'Formatting' => 
		'Formattazione',

		'Validation Rule <i>Optional</i>' => 
		'Formato <i>Facoltativo</i>',

		'Data source output grouping is not supported by the <code>%s</code> field' => 
		'Il campo <code>%s</code> non permette di raggruppare l\'output proveniente dalle sorgenti dati',

		'Could not find Field <code>%1$s</code> at <code>%2$s</code>. If the Field was provided by an Extension, ensure that it is installed, and enabled.' => 
		'Non &#232; stato possibile trovare il campo <code>%1$s</code> in <code>%2$s</code>. Se &#232; stato fornito da un\'estensione, assicurati che quest\'ultima sia stata installata e abilitata.',

		'The page you requested does not exist.' => 
		'La pagina richiesta non esiste.',

		'Page Not Found' => 
		'La pagina non &#232; stata trovata',

		'Please <a href="%s">login</a> to view this page.' => 
		'<a href="%s">Effettua l\'accesso</a> per visualizzare questa pagina.',

		'Forbidden' => 
		false,

		'Large' =>
		'Grandi',

		'Small' => 
		'Piccoli',

		'Hot' => 
		'Caldi',

		'Cold' => 
		'Freddi',

		'Big' => 
		'Grossi',

		'Hairy' => 
		'Irsuti',

		'Round' => 
		'Rotondi',

		'Lumpy' => 
		'Bozzoloso',

		'Coconut' => 
		'NociDiCocco',

		'Encumbered' => 
		'Ingombranti',

		'Cats' => 
		'Gatti',

		'Dogs' => 
		'Cani',

		'Weasels' => 
		'Donnole',

		'Birds' => 
		'Uccelli',

		'Worms' => 
		'Vermi',

		'Bugs' => 
		'Insetti',

		'Pigs' => 
		'Maiali',

		'Monkeys' => 
		'Scimmie',

		'Pirates' => 
		'Pirati',

		'Aardvarks' => 
		'Ornitorinchi',

		'Men' => 
		'Uomini',

		'Women' => 
		'Donne',

		'Unable to remove file - %s' => 
		'Impossibile trovare il file - %s',

		'MySQL Error (%1$s): %2$s in query "%3$s"' => 
		'Errore MySQL (%1$s): %2$s nella query "%3$s"',

		'Can\'t open file %s' => 
		'Impossibile aprire il file %s',

		'Could not find Text Formatter <code>%s</code>. If the Text Formatter was provided by an Extensions, ensure that it is installed, and enabled.' => 
		'Non &#232; stato possibile trovare il formattatore di testi <code>%s</code>. Se &#232; stato fornito da un\'estensione, assicurati che quest\'ultima sia stata installata e abilitata.',

		'No suitable XSLT processor was found.' => 
		'Non &#232; stato trovato alcun elaboratore XSLT disponibile.',

		'No <code>/symphony</code> directory was found at this location. Please upload the contents of Symphony\'s install package here.' => 
		'Impossibile trovare la cartella <code>/symphony</code> in questa cartella. Carica qui i contenuti del pacchetto di installazione di Symphony.',

		'Symphony does not have write permission to the existing <code>/workspace</code> directory. Please modify permission settings on this directory and its contents to allow this, such as with a recursive <code>chmod -R</code> command.' => 
		'Symphony non ha i permessi in scrittura per la cartella <code>/workspace</code>. Modifica i permessi di questa cartella e dei suoi contenuti, ad es. con un il comando <code>chmod -R</code>.',

		'Symphony does not have write permission to the <code>/manifest</code> directory. Please modify permission settings on this directory and its contents to allow this, such as with a recursive <code>chmod -R</code> command.' => 
		'Symphony non ha i permessi in scrittura per la cartella <code>/manifest</code>. Modifica i permessi di questa cartella e dei suoi contenuti, ad es. con un il comando <code>chmod -R</code>.',

		'Symphony does not have write permission to the root directory. Please modify permission settings on this directory. This is necessary only if you are not including a workspace, and can be reverted once installation is complete.' => 
		'Symphony non ha i permessi in scrittura nella cartella principale (root). Modifica i permessi di questa cartella. Questa modifica &#232; necessaria solo se non stai includendo uno spazio di lavoro (workspace) e pu&#242; essere annullata una volta completata l\'installazione.',

		'Symphony does not have write permission to the temporary <code>htaccess</code> file. Please modify permission settings on this file so it can be written to, and renamed.' => 
		'Symphony non ha i permessi in scrittura per il file temporaneo <code>htaccess</code>.  Modifica i permessi di questo file affinch&#233; possa essere modificato e rinominato.',

		'Symphony does not have write permission to the <code>/symphony</code> directory. Please modify permission settings on this directory. This is necessary only during installation, and can be reverted once installation is complete.' => 
		'Symphony non ha i permessi in scrittura per la cartella <code>/symphony</code>. Modifica i permessi di questa cartella. Questa modifica &#232; necessaria solo durante l\'installazione e pu&#242; essere annullata una volta che quest\'ultima sar&#224; terminata.',

		'There appears to be an existing <code>.htaccess</code> file in the Symphony install location. To avoid name clashes, you will need to delete or rename this file.' => 
		'Sembra che esista gi&#224; un file <code>.htaccess</code> nela cartella di installazione di Symphony. Per evitare conflitti devi cancellare o rinominare questo file.',

		'There appears to be an existing <code>.htaccess</code> file in the <code>/symphony</code> directory.' => 
		'Sembra che esista gi&#224; un file <code>.htaccess</code> nella cartella <code>/symphony</code>.',

		'Symphony was unable to connect to the specified database. You may need to modify host or port settings.' => 
		'Non &#232; stato possibile connettersi al database specificato. Prova a modificare le impostazioni relative all\'host o alla porta.',

		'Symphony requires <code>MySQL 4.1</code> or greater to work. This requirement must be met before installation can proceed.' => 
		'Symphony richiede <code>MySQL 4.1</code> o superiore per funzionare. Questo requisito deve essere soddisfatto affinch&#233; l\'installazione possa proseguire.',

		'The table prefix <code><!-- TABLE-PREFIX --></code> is already in use. Please choose a different prefix to use with Symphony.' => 
		'Il prefisso <code><!-- TABLE-PREFIX --></code> &#232; gi&#224; in uso. Scegline un altro affinch&#233; l\'installazione possa proseguire.',

		'The password and confirmation did not match. Please retype your password.' => 
		'Le due password inserite non corrispondono. Assicurati che la password digitata sia la stessa in entrambi i campi.',

		'This is not a valid email address. You must provide an email address since you will need it if you forget your password.' => 
		'Devi inserire un indirizzo e-mail valido, che ti servir&#224; qualora dovessi dimenticare la tua password.',

		'You must enter a Username. This will be your Symphony login information.' => 
		'Devi inserire un nome utente valido, che ti servir&#232; per effetturare l\'accesso.',

		'You must enter a Password. This will be your Symphony login information.' => 
		'Devi inserire una password valida, che ti servir&#232; per effetturare l\'accesso.',

		'You must enter your name.' => 
		'Devi inserire il tuo nome.',

		'An existing <code>/workspace</code> directory was found at this location. Symphony will use this workspace.' => 
		'Sembra che esista gi&#224; una cartella <code>/workspace</code> in questa cartella. Symphony la user&#224; come spazio di lavoro (workspace).',

		'Symphony requires <code>MySQL 4.1</code> or greater to work, however version <code>%s</code> was detected. This requirement must be met before installation can proceed.' => 
		'Symphony richiede <code>MySQL 4.1</code> o superiore per funzionare, mentre &#232; stata trovata la versione <code>%s</code>. Questo requisito deve essere soddisfatto affinch&#233; l\installazione possa proseguire.',

		'Website Name' => 
		'Nome del sito',

		'Environment Settings' => 
		'Impostazioni di sistema',

		'Symphony is ready to be installed at the following location.' => 
		'Symphony &#232; pronto per essere installato nella cartella specificata.',

		'Root Path' => 
		'Percorso della cartella principale (root)',

		'Website Preferences' => 
		'Preferenze del sito',

		'Date and Time' => 
		'Data e ora',

		'Customise how Date and Time values are displayed throughout the Administration interface.' => 
		'Personalizza il modo in cui la data e l\'ora vengono visualizzate nell\'interfaccia di amministrazione.',

		'Region' => 
		'Regione',

		'Date Format' => 
		'Formato della data',

		'Time Format' => 
		'Formato dell\'ora',

		'Local' => 
		'Locale',

		'Daylight savings time' => 
		'Ora legale',

		'Database Connection' => 
		'Connessione al database',

		'Please provide Symphony with access to a database.' => 
		'Inserisci i dati di accesso al database.',

		'Database' => 
		'Database',

		'Advanced Configuration' => 
		'Configurazione per esperti',

		'Leave these fields unless you are sure they need to be changed.' => 
		'Ignora questi campi a meno che tu non sia certo di come debbano essere compilati.',

		'Host' => 
		false,

		'Port' => 
		false,

		'Table Prefix' => 
		'Prefisso delle tabelle',

		'Use compatibility mode' => 
		'Abilita la modalit&#224; compatibile',

		'Symphony normally specifies UTF-8 character encoding for database entries. With compatibility mode enabled, Symphony will instead use the default character encoding of your database.' => 
		'Symphony normalmente usa la codifica UTF-8 per le voci del database. Con la modalit&#224; compatibile abilitata, Symphony utilizzer&#224; invece la codifica predefinita del tuo database.',

		'Permission Settings' => 
		'Impostazioni dei permessi',

		'Symphony needs permission to read and write both files and directories.' => 
		'Symphony ha bisogno dei permessi in lettura e scrittura su file e cartelle.',

		'Files' => 
		'File',

		'Directories' => 
		'Cartelle',

		'User Information' => 
		'Informazioni utente',

		'Once installed, you will be able to login to the Symphony admin with these user details.' => 
		'Una volta installato, sarai in grado di accedere all\'interfaccia d\'amministrazione con questi dati utente.',

		'Personal Information' => 
		'Informazioni personali',

		'Please add the following personal details for this user.' => 
		'Inserisci le informazioni personali per questo utente.',

		'Install Symphony' => 
		'Installa Symphony',

		'Make sure that you delete <code>' => // Wrong!
		false,

		'Version %s' => 
		'Versione %s',

		'Outstanding Requirements' => 
		'Requisiti essenziali',

		'Symphony needs the following requirements satisfied before installation can proceed.' => 
		'Symphony richiede che i seguenti requisiti vengano soddisfatti prima che l\'installazione possa procedere.',

		'<abbr title="PHP: Hypertext Pre-processor">PHP</abbr> 5.1 or above' => 
		'<abbr title="PHP: Hypertext Pre-processor">PHP</abbr> 5.1 o superiore',

		'Symphony needs a recent version of <abbr title="PHP: Hypertext Pre-processor">PHP</abbr>.' => 
		'Symphony richiede una versione recente di <abbr title="PHP: Hypertext Pre-processor">PHP</abbr>.',

		'My<abbr title="Structured Query Language">SQL</abbr> 4.1 or above' => 
		'My<abbr title="Structured Query Language">SQL</abbr> 4.1 o superiore',

		'Symphony needs a recent version of My<abbr title="Structured Query Language">SQL</abbr>.' => 
		'Symphony richiede una versione recente di My<abbr title="Structured Query Language">SQL</abbr>.',

		'ZLib Compression Library' => 
		'Libreria di compressione ZLib',

		'Data retrieved from the Symphony support server is decompressed with the ZLib compression library.' => 
		'I dati prelevati dal server di Symphony vengono decompressi con la libreria di compressione ZLib.',

		'<abbr title="eXtensible Stylesheet Language Transformation">XSLT</abbr> Processor' => 
		'Elaboratore <abbr title="eXtensible Stylesheet Language Transformation">XSLT</abbr>',

		'Symphony needs an XSLT processor such as Lib<abbr title="eXtensible Stylesheet Language Transformation">XSLT</abbr> or Sablotron to build pages.' => 
		'Symphony richiede un elaboratore XSLT come Lib<abbr title="eXtensible Stylesheet Language Transformation">XSLT</abbr> o Sablotron per generare le pagine.',

		'Missing Requirements' => 
		'Requisiti mancanti',

		'Update Symphony' => 
		'Aggiorna Symphony',

		'You are already using the most recent version of Symphony. There is no need to run the installer, and can be safely deleted.' => 
		'Stai gi&#224; usando la versione p&#249; recente di Symphony. Puoi rimuovere il file di aggiornamento.',

		'You are not using the most recent version of Symphony. This update is only compatible with Symphony 2.' => 
		'Questo aggiornamento &#232; compatibile solamente con Symphony 2.',

		'Installation Failure' => 
		'Installazione fallita',

		'An error occurred during installation. You can view you log <a href="install-log.txt">here</a> for more details.' => 
		'Si &#232; verificato un errore durante l\'installazione. Per maggiori dettagli consulta <a href="install-log.txt">rapporto</a>.',

		'XML returned is invalid.' => 
		'Il codice XML restituito non &#232; valido.',

		'The section associated with the data source <code>%s</code> could not be found.' => 
		'La sezione associata alla sorgente dati <code>%s</code> non &#232; stata trovata.',

		'Error creating field object with id %1$d, for filtering in data source "%2$s". Check this field exists.' => 
		'Non &#232; stato possibile filtrare la sorgente dati "%2$s" tramite il campo %1$d. Assicurati che il campo esista.',

		'Section is invalid' => 
		'La sezione specificata non &#232; valida',

		'Invalid Entry ID specified. Could not create Entry object.' => 
		'Non &#232; stato possibile creare la voce poich&#233; l\'ID specificato non &#232; valido.',

		'Unknown errors where encountered when saving.' => 
		'Si sono verificati degli errori durante il salvataggio delle modifiche.',

		'[Symphony] A new entry was created on %s' => 
		'[Symphony] &#232; stata creata una nuova voce in %s',

		'Dear <!-- RECIPIENT NAME -->,' => 
		'Ciao <!-- RECIPIENT NAME -->,',

		'This is a courtesy email to notify you that an entry was created on the %1$s section. You can edit the entry by going to: %2$s' => 
		'Ti &#232; stata inviata questa notifica per segnalarti che nella sezione %1$s &#232; stata creata una nuova voce. Puoi modificarla da qui: %2$s',

		'No valid recipients found. Check send-email[recipient] field.' => 
		'Non &#232; stato trovato nessun destinatario valido. Controlla il campo <code>send-email[recipient]</code>',

		'Entry edited successfully.' => 
		'La voce &#232; stata modificata con successo.',

		'Entry created successfully.' => 
		'La voce &#232; stata creata con successo.',

		'%s Allow selection of multiple authors' => 
		'%s Consenti la selezione di pi&#249; autori',

		'%s Select current user by default' => 
		'%s Seleziona in automatico l\'utente connesso',

		'Checkbox' => 
		'Casella di spunta',

		'Long Description <i>Optional</i>' => 
		'Descrizione <i>Facoltativa</i>',

		'%s Checked by default' => 
		'%s Selezionato in automatico',

		'Date' => 
		'Data/Ora',

		'The date specified in \'%s\' is invalid.' => 
		'La data specficata in \'%s\' non &#232; valida.',

		'%s Pre-populate this field with today\'s date' => 
		'%s Inserisci in automatico la data corrente',

		'Text Input' => 
		'Input semplice',

		'\'%s\' contains invalid data. Please check the contents.' => 
		'\'%s\' contiene dati non validi. Verifica che il formato dei dati sia corretto.',

		'Select Box' => 
		'Men&#249; a tendina',

		'At least one source must be specified, dynamic or static.' => 
		'&#232; necessario specificare almeno una fonte.',

		'Static Options' => 
		'Fonti statiche',

		'Dynamic Options' => 
		'Fonti dinamiche',

		'%s Allow selection of multiple options' => 
		'%s Consenti la selezione di pi&#249; elementi',

		'Tag List' => 
		'Lista tag',

		'Suggestion List' => 
		'Prendi spunto da',

		'Existing Values' => 
		'Valori pre-esistenti',

		'Textarea' => 
		false,

		'"%1$s" contains invalid XML. The following error was returned: <code>%2$s</code>' => 
		'"%1$s" contiene XML non valido. L\'errore segnalato &#232; il seguente: <code>%2$s</code>',

		'Make textarea %s rows tall' => 
		'Rendi il campo alto %s righe',

		'File Upload' => 
		false,

		'The destination directory, <code>%s</code>, does not exists.' => 
		'La cartella di destinazione, <code>%s</code>, non esiste.',

		'Destination folder, <code>%s</code>, is not writable. Please check permissions.' => 
		'La cartella di destinazione, <code>%s</code>, non &#232; modificabile. Verifica i permessi.',

		'Directory <code>%s</code> does not exists.' => 
		'La cartella <code>%s</code> non esiste.',

		'Destination Directory' => 
		'Cartella di destinazione',

		'File chosen in "%1$s" exceeds the maximum allowed upload size of %2$s specified by your host.' => 
		'Il file selezionato in "%1$s" supera la dimensione massima consentita di %2$s specificata dal tuo host.',

		'File chosen in "%1$s" exceeds the maximum allowed upload size of %2$s, specified by Symphony.' => 
		'Il file selezionato in "%1$s" supera la dimensione massima consentita di %2$s specificata da Symphony.',

		'File chosen in \'%s\' was only partially uploaded due to an error.' => 
		'Il file selezionato in \'%s\' &#232; stato caricato parzialmente a causa di un errore.',

		'Uploading \'%s\' failed. Could not write temporary file to disk.' => 
		'Il caricamento di \'%s\' &#232; fallito. Non &#232; stato possibile scrivere il file temporaneo sul disco.',

		'Uploading \'%s\' failed. File upload stopped by extension.' => 
		'Il caricamento di \'%s\' &#232; stato interrotto dall\'estensione.',

		'File chosen in \'%s\' does not match allowable file types for that field.' => 
		'Il formato del file selezionato in \'%s\' non &#232; fra quelli ammessi per questo campo.',

		'A file with the name %1$s already exists in %2$s. Please rename the file first, or choose another.' => 
		'Un file con il nome %1$s  gi presente in %2$s. Rinomina il file prima, oppure scegline un altro.',

		'There was an error while trying to upload the file <code>%1$s</code> to the target directory <code>%2$s</code>.' => 
		'Si &#232; verificato un errore durante il tentativo di caricamento del file <code>%1$s</code> nella cartella di destinazione <code>%2$s</code>.',

		'Blueprints' => 
		'Progetto',

		'false' => 
		'falso',

		// Future

		'Text Formatter' =>
		'Formattazione dei testi',

		'Update cached result every %s minutes' =>
		'Aggiorna i risultati in cache ogni %s minuti',

		'Make sure that you delete %s file after Symphony has installed successfully.' =>
		'Assicurati di cancellare <code>%s</code> dopo che l\'installazione sar&#224; terminata con successo.',

		'Name' =>
		'Nome',

		'Navigation Group <i>Created if does not exist</i>' =>
		'Gruppo di navigazione <i>Se non esiste, verr&#224; creato</i>'

	);


	/**
	 * Transliterations
	 */
	$transliterations = array(

		// Alphabetical
		
		'/À/' => 'A',		'/Á/' => 'A',		'/Â/' => 'A',		'/Ã/' => 'A',		'/Ä/' => 'Ae',
		'/Å/' => 'A',		'/Ā/' => 'A',		'/Ą/' => 'A',		'/Ă/' => 'A',		'/Æ/' => 'Ae',
		'/Ç/' => 'C',		'/Ć/' => 'C',		'/Č/' => 'C',		'/Ĉ/' => 'C',		'/Ċ/' => 'C',
		'/Ď/' => 'D',		'/Đ/' => 'D',		'/Ð/' => 'D',		'/È/' => 'E',		'/É/' => 'E',
		'/Ê/' => 'E',		'/Ë/' => 'E',		'/Ē/' => 'E',		'/Ę/' => 'E',		'/Ě/' => 'E',
		'/Ĕ/' => 'E',		'/Ė/' => 'E',		'/Ĝ/' => 'G',		'/Ğ/' => 'G',		'/Ġ/' => 'G',
		'/Ģ/' => 'G',		'/Ĥ/' => 'H',		'/Ħ/' => 'H',		'/Ì/' => 'I',		'/Í/' => 'I',
		'/Î/' => 'I',		'/Ï/' => 'I',		'/Ī/' => 'I',		'/Ĩ/' => 'I',		'/Ĭ/' => 'I',
		'/Į/' => 'I',		'/İ/' => 'I',		'/Ĳ/' => 'Ij',		'/Ĵ/' => 'J',		'/Ķ/' => 'K',
		'/Ł/' => 'L',		'/Ľ/' => 'L',		'/Ĺ/' => 'L',		'/Ļ/' => 'L',		'/Ŀ/' => 'L',
		'/Ñ/' => 'N',		'/Ń/' => 'N',		'/Ň/' => 'N',		'/Ņ/' => 'N',		'/Ŋ/' => 'N',
		'/Ò/' => 'O',		'/Ó/' => 'O',		'/Ô/' => 'O',		'/Õ/' => 'O',		'/Ö/' => 'Oe',
		'/Ø/' => 'O',		'/Ō/' => 'O',		'/Ő/' => 'O',		'/Ŏ/' => 'O',		'/Œ/' => 'Oe',
		'/Ŕ/' => 'R',		'/Ř/' => 'R',		'/Ŗ/' => 'R',		'/Ś/' => 'S',		'/Š/' => 'S',
		'/Ş/' => 'S',		'/Ŝ/' => 'S',		'/Ș/' => 'S',		'/Ť/' => 'T',		'/Ţ/' => 'T',
		'/Ŧ/' => 'T',		'/Ț/' => 'T',		'/Ù/' => 'U',		'/Ú/' => 'U',		'/Û/' => 'U',
		'/Ü/' => 'Ue',		'/Ū/' => 'U',		'/Ů/' => 'U',		'/Ű/' => 'U',		'/Ŭ/' => 'U',
		'/Ũ/' => 'U',		'/Ų/' => 'U',		'/Ŵ/' => 'W',		'/Ý/' => 'Y',		'/Ŷ/' => 'Y',
		'/Ÿ/' => 'Y',		'/Y/' => 'Y',		'/Ź/' => 'Z',		'/Ž/' => 'Z',		'/Ż/' => 'Z',
		'/Þ/' => 'T',
		'/à/' => 'a',		'/á/' => 'a',		'/â/' => 'a',		'/ã/' => 'a',		'/ä/' => 'ae',
		'/å/' => 'a',		'/ā/' => 'a',		'/ą/' => 'a',		'/ă/' => 'a',		'/æ/' => 'ae',
		'/ç/' => 'c',		'/ć/' => 'c',		'/č/' => 'c',		'/ĉ/' => 'c',		'/ċ/' => 'c',
		'/ď/' => 'd',		'/đ/' => 'd',		'/ð/' => 'd',		'/è/' => 'e',		'/é/' => 'e',
		'/ê/' => 'e',		'/ë/' => 'e',		'/ē/' => 'e',		'/ę/' => 'e',		'/ě/' => 'e',
		'/ĕ/' => 'e',		'/ė/' => 'e',		'/ĝ/' => 'g',		'/ğ/' => 'g',		'/ġ/' => 'g',
		'/ģ/' => 'g',		'/ĥ/' => 'h',		'/ħ/' => 'h',		'/ì/' => 'i',		'/í/' => 'i',
		'/î/' => 'i',		'/ï/' => 'i',		'/ī/' => 'i',		'/ĩ/' => 'i',		'/ĭ/' => 'i',
		'/į/' => 'i',		'/ı/' => 'i',		'/ĳ/' => 'ij',		'/ĵ/' => 'j',		'/ķ/' => 'k',
		'/ł/' => 'l',		'/ľ/' => 'l',		'/ĺ/' => 'l',		'/ļ/' => 'l',		'/ŀ/' => 'l',
		'/ñ/' => 'n',		'/ń/' => 'n',		'/ň/' => 'n',		'/ņ/' => 'n',		'/ŋ/' => 'n',
		'/ò/' => 'o',		'/ó/' => 'o',		'/ô/' => 'o',		'/õ/' => 'o',		'/ö/' => 'oe',
		'/ø/' => 'o',		'/ō/' => 'o',		'/ő/' => 'o',		'/ŏ/' => 'o',		'/œ/' => 'oe',
		'/ŕ/' => 'r',		'/ř/' => 'r',		'/ŗ/' => 'r',		'/ś/' => 's',		'/š/' => 's',
		'/ş/' => 's',		'/ŝ/' => 's',		'/ș/' => 's',		'/ť/' => 't',		'/ţ/' => 't',
		'/ŧ/' => 't',		'/ț/' => 't',		'/ù/' => 'u',		'/ú/' => 'u',		'/û/' => 'u',
		'/ü/' => 'ue',		'/ū/' => 'u',		'/ů/' => 'u',		'/ű/' => 'u',		'/ŭ/' => 'u',
		'/ũ/' => 'u',		'/ų/' => 'u',		'/ŵ/' => 'w',		'/ý/' => 'y',		'/ŷ/' => 'y',
		'/ÿ/' => 'y',		'/y/' => 'y',		'/ź/' => 'z',		'/ž/' => 'z',		'/ż/' => 'z',
		'/þ/' => 't',		'/ß/' => 'ss',		'/ſ/' => 'ss',		'/ƒ/' => 'f',		'/ĸ/' => 'k',
		'/ŉ/' => 'n',

		// Symbolic
		
		'/\(/' => null,		'/\)/' => null,		'/,/' => null,
		'/–/' => '-',		'/－/' => '-',		'/„/' => '"',
		'/“/' => '"',		'/”/' => '"',		'/—/' => '-',
		'/¿/' => null,		'/‽/' => null,		'/¡/' => null,

		// Ampersands
		
		'/^&(?!&)$/' => 'and',
		'/^&(?!&)/' => 'and-',
		'/&(?!&)&/' => '-and',
		'/&(?!&)/' => '-and-',

	);
