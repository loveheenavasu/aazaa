<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('de', array (
  'validators' => 
  array (
    'This value should be false.' => 'Dieser Wert sollte false sein.',
    'This value should be true.' => 'Dieser Wert sollte true sein.',
    'This value should be of type {{ type }}.' => 'Dieser Wert sollte vom Typ {{ type }} sein.',
    'This value should be blank.' => 'Dieser Wert sollte leer sein.',
    'The value you selected is not a valid choice.' => 'Sie haben einen ungültigen Wert ausgewählt.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Sie müssen mindestens {{ limit }} Möglichkeit wählen.|Sie müssen mindestens {{ limit }} Möglichkeiten wählen.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Sie dürfen höchstens {{ limit }} Möglichkeit wählen.|Sie dürfen höchstens {{ limit }} Möglichkeiten wählen.',
    'One or more of the given values is invalid.' => 'Einer oder mehrere der angegebenen Werte sind ungültig.',
    'This field was not expected.' => 'Dieses Feld wurde nicht erwartet.',
    'This field is missing.' => 'Dieses Feld fehlt.',
    'This value is not a valid date.' => 'Dieser Wert entspricht keiner gültigen Datumsangabe.',
    'This value is not a valid datetime.' => 'Dieser Wert entspricht keiner gültigen Datums- und Zeitangabe.',
    'This value is not a valid email address.' => 'Dieser Wert ist keine gültige E-Mail-Adresse.',
    'The file could not be found.' => 'Die Datei wurde nicht gefunden.',
    'The file is not readable.' => 'Die Datei ist nicht lesbar.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Die Datei ist zu groß ({{ size }} {{ suffix }}). Die maximal zulässige Größe beträgt {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Der Dateityp ist ungültig ({{ type }}). Erlaubte Dateitypen sind {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Dieser Wert sollte kleiner oder gleich {{ limit }} sein.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Diese Zeichenkette ist zu lang. Sie sollte höchstens {{ limit }} Zeichen haben.|Diese Zeichenkette ist zu lang. Sie sollte höchstens {{ limit }} Zeichen haben.',
    'This value should be {{ limit }} or more.' => 'Dieser Wert sollte größer oder gleich {{ limit }} sein.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Diese Zeichenkette ist zu kurz. Sie sollte mindestens {{ limit }} Zeichen haben.|Diese Zeichenkette ist zu kurz. Sie sollte mindestens {{ limit }} Zeichen haben.',
    'This value should not be blank.' => 'Dieser Wert sollte nicht leer sein.',
    'This value should not be null.' => 'Dieser Wert sollte nicht null sein.',
    'This value should be null.' => 'Dieser Wert sollte null sein.',
    'This value is not valid.' => 'Dieser Wert ist nicht gültig.',
    'This value is not a valid time.' => 'Dieser Wert entspricht keiner gültigen Zeitangabe.',
    'This value is not a valid URL.' => 'Dieser Wert ist keine gültige URL.',
    'The two values should be equal.' => 'Die beiden Werte sollten identisch sein.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Die Datei ist zu groß. Die maximal zulässige Größe beträgt {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Die Datei ist zu groß.',
    'The file could not be uploaded.' => 'Die Datei konnte nicht hochgeladen werden.',
    'This value should be a valid number.' => 'Dieser Wert sollte eine gültige Zahl sein.',
    'This file is not a valid image.' => 'Diese Datei ist kein gültiges Bild.',
    'This is not a valid IP address.' => 'Dies ist keine gültige IP-Adresse.',
    'This value is not a valid language.' => 'Dieser Wert entspricht keiner gültigen Sprache.',
    'This value is not a valid locale.' => 'Dieser Wert entspricht keinem gültigen Gebietsschema.',
    'This value is not a valid country.' => 'Dieser Wert entspricht keinem gültigen Land.',
    'This value is already used.' => 'Dieser Wert wird bereits verwendet.',
    'The size of the image could not be detected.' => 'Die Größe des Bildes konnte nicht ermittelt werden.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Die Bildbreite ist zu groß ({{ width }}px). Die maximal zulässige Breite beträgt {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Die Bildbreite ist zu gering ({{ width }}px). Die erwartete Mindestbreite beträgt {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Die Bildhöhe ist zu groß ({{ height }}px). Die maximal zulässige Höhe beträgt {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Die Bildhöhe ist zu gering ({{ height }}px). Die erwartete Mindesthöhe beträgt {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Dieser Wert sollte dem aktuellen Benutzerpasswort entsprechen.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Dieser Wert sollte genau {{ limit }} Zeichen lang sein.|Dieser Wert sollte genau {{ limit }} Zeichen lang sein.',
    'The file was only partially uploaded.' => 'Die Datei wurde nur teilweise hochgeladen.',
    'No file was uploaded.' => 'Es wurde keine Datei hochgeladen.',
    'No temporary folder was configured in php.ini.' => 'Es wurde kein temporärer Ordner in der php.ini konfiguriert oder der temporäre Ordner existiert nicht.',
    'Cannot write temporary file to disk.' => 'Kann die temporäre Datei nicht speichern.',
    'A PHP extension caused the upload to fail.' => 'Eine PHP-Erweiterung verhinderte den Upload.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Diese Sammlung sollte {{ limit }} oder mehr Elemente beinhalten.|Diese Sammlung sollte {{ limit }} oder mehr Elemente beinhalten.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Diese Sammlung sollte {{ limit }} oder weniger Elemente beinhalten.|Diese Sammlung sollte {{ limit }} oder weniger Elemente beinhalten.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Diese Sammlung sollte genau {{ limit }} Element beinhalten.|Diese Sammlung sollte genau {{ limit }} Elemente beinhalten.',
    'Invalid card number.' => 'Ungültige Kartennummer.',
    'Unsupported card type or invalid card number.' => 'Nicht unterstützer Kartentyp oder ungültige Kartennummer.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Dieser Wert ist keine gültige internationale Bankkontonummer (IBAN).',
    'This value is not a valid ISBN-10.' => 'Dieser Wert entspricht keiner gültigen ISBN-10.',
    'This value is not a valid ISBN-13.' => 'Dieser Wert entspricht keiner gültigen ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Dieser Wert ist weder eine gültige ISBN-10 noch eine gültige ISBN-13.',
    'This value is not a valid ISSN.' => 'Dieser Wert ist keine gültige ISSN.',
    'This value is not a valid currency.' => 'Dieser Wert ist keine gültige Währung.',
    'This value should be equal to {{ compared_value }}.' => 'Dieser Wert sollte gleich {{ compared_value }} sein.',
    'This value should be greater than {{ compared_value }}.' => 'Dieser Wert sollte größer als {{ compared_value }} sein.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Dieser Wert sollte größer oder gleich {{ compared_value }} sein.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Dieser Wert sollte identisch sein mit {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Dieser Wert sollte kleiner als {{ compared_value }} sein.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Dieser Wert sollte kleiner oder gleich {{ compared_value }} sein.',
    'This value should not be equal to {{ compared_value }}.' => 'Dieser Wert sollte nicht {{ compared_value }} sein.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Dieser Wert sollte nicht identisch sein mit {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Das Seitenverhältnis des Bildes ist zu groß ({{ ratio }}). Der erlaubte Maximalwert ist {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Das Seitenverhältnis des Bildes ist zu klein ({{ ratio }}). Der erwartete Minimalwert ist {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Das Bild ist quadratisch ({{ width }}x{{ height }}px). Quadratische Bilder sind nicht erlaubt.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Das Bild ist im Querformat ({{ width }}x{{ height }}px). Bilder im Querformat sind nicht erlaubt.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Das Bild ist im Hochformat ({{ width }}x{{ height }}px). Bilder im Hochformat sind nicht erlaubt.',
    'An empty file is not allowed.' => 'Eine leere Datei ist nicht erlaubt.',
    'The host could not be resolved.' => 'Der Hostname konnte nicht aufgelöst werden.',
    'This value does not match the expected {{ charset }} charset.' => 'Dieser Wert entspricht nicht dem erwarteten Zeichensatz {{ charset }}.',
    'This is not a valid Business Identifier Code (BIC).' => 'Dieser Wert ist kein gültiger BIC.',
    'Error' => 'Fehler',
    'This is not a valid UUID.' => 'Dies ist keine gültige UUID.',
    'This value should be a multiple of {{ compared_value }}.' => 'Dieser Wert sollte ein Vielfaches von {{ compared_value }} sein.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Diese internationale Bankleitzahl (BIC) ist nicht mit der IBAN {{ iban }} assoziiert.',
    'This value should be valid JSON.' => 'Dieser Wert sollte gültiges JSON sein.',
    'This collection should contain only unique elements.' => 'Diese Sammlung darf keine doppelten Elemente enthalten.',
    'This value should be positive.' => 'Diese Zahl sollte positiv sein.',
    'This value should be either positive or zero.' => 'Diese Zahl sollte entweder positiv oder 0 sein.',
    'This value should be negative.' => 'Diese Zahl sollte negativ sein.',
    'This value should be either negative or zero.' => 'Diese Zahl sollte entweder negativ oder 0 sein.',
    'This value is not a valid timezone.' => 'Dieser Wert ist keine gültige Zeitzone.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'Dieses Passwort ist Teil eines Datenlecks, es darf nicht verwendet werden.',
    'This value should be between {{ min }} and {{ max }}.' => 'Dieser Wert sollte zwischen {{ min }} und {{ max }} sein.',
    'This form should not contain extra fields.' => 'Dieses Formular sollte keine zusätzlichen Felder enthalten.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Die hochgeladene Datei ist zu groß. Versuchen Sie bitte eine kleinere Datei hochzuladen.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Der CSRF-Token ist ungültig. Versuchen Sie bitte das Formular erneut zu senden.',
    'fos_user.username.already_used' => 'Dieser Benutzername wird bereits verwendet.',
    'fos_user.username.blank' => 'Bitte geben Sie einen Benutzernamen an.',
    'fos_user.username.short' => 'Dieser Benutzername ist zu kurz.',
    'fos_user.username.long' => 'Dieser Benutzername ist zu lang.',
    'fos_user.email.already_used' => 'Diese E-Mail-Adresse wird bereits verwendet.',
    'fos_user.email.blank' => 'Bitte geben Sie eine E-Mail-Adresse an.',
    'fos_user.email.short' => 'Diese E-Mail-Adresse ist zu kurz.',
    'fos_user.email.long' => 'Diese E-Mail-Adresse ist zu lang.',
    'fos_user.email.invalid' => 'Diese E-Mail-Adresse ist ungültig.',
    'fos_user.password.blank' => 'Bitte geben Sie ein Passwort an.',
    'fos_user.password.short' => 'Das Passwort ist zu kurz.',
    'fos_user.password.mismatch' => 'Die Passwörter stimmen nicht überein.',
    'fos_user.new_password.blank' => 'Bitte geben Sie ein neues Passwort an.',
    'fos_user.new_password.short' => 'Das neue Passwort ist zu kurz.',
    'fos_user.current_password.invalid' => 'Das angegebene Passwort ist ungültig.',
    'fos_user.group.blank' => 'Bitte geben Sie einen Namen an.',
    'fos_user.group.short' => 'Dieser Name ist zu kurz.',
    'fos_user.group.long' => 'Dieser Name ist zu lang.',
    'fos_group.name.already_used' => 'Dieser Name wird bereits verwendet.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Es ist ein Fehler bei der Authentifikation aufgetreten.',
    'Authentication credentials could not be found.' => 'Es konnten keine Zugangsdaten gefunden werden.',
    'Authentication request could not be processed due to a system problem.' => 'Die Authentifikation konnte wegen eines Systemproblems nicht bearbeitet werden.',
    'Invalid credentials.' => 'Fehlerhafte Zugangsdaten.',
    'Cookie has already been used by someone else.' => 'Cookie wurde bereits von jemand anderem verwendet.',
    'Not privileged to request the resource.' => 'Keine Rechte, um die Ressource anzufragen.',
    'Invalid CSRF token.' => 'Ungültiges CSRF-Token.',
    'No authentication provider found to support the authentication token.' => 'Es wurde kein Authentifizierungs-Provider gefunden, der das Authentifizierungs-Token unterstützt.',
    'No session available, it either timed out or cookies are not enabled.' => 'Keine Session verfügbar, entweder ist diese abgelaufen oder Cookies sind nicht aktiviert.',
    'No token could be found.' => 'Es wurde kein Token gefunden.',
    'Username could not be found.' => 'Der Benutzername wurde nicht gefunden.',
    'Account has expired.' => 'Der Account ist abgelaufen.',
    'Credentials have expired.' => 'Die Zugangsdaten sind abgelaufen.',
    'Account is disabled.' => 'Der Account ist deaktiviert.',
    'Account is locked.' => 'Der Account ist gesperrt.',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'Gruppe aktualisieren',
    'group.show.name' => 'Gruppenname',
    'group.new.submit' => 'Gruppe erstellen',
    'group.flash.updated' => 'Die Gruppe wurde aktualisiert.',
    'group.flash.created' => 'Die Gruppe wurde erstellt.',
    'group.flash.deleted' => 'Die Gruppe wurde gelöscht.',
    'security.login.username' => 'Benutzername',
    'security.login.password' => 'Passwort',
    'security.login.remember_me' => 'An mich erinnern',
    'security.login.submit' => 'Anmelden',
    'profile.show.username' => 'Benutzername',
    'profile.show.email' => 'E-Mail',
    'profile.edit.submit' => 'Benutzer aktualisieren',
    'profile.flash.updated' => 'Das Benutzerprofil wurde aktualisiert.',
    'change_password.submit' => 'Passwort ändern',
    'change_password.flash.success' => 'Das Passwort wurde geändert.',
    'registration.check_email' => 'Eine E-Mail wurde an %email% gesendet. Sie enthält einen Link, den Sie anklicken müssen, um Ihr Benutzerkonto zu bestätigen.',
    'registration.confirmed' => 'Glückwunsch %username%, Ihr Benutzerkonto ist jetzt bestätigt.',
    'registration.back' => 'Zurück zur ursprünglichen Seite.',
    'registration.submit' => 'Registrieren',
    'registration.flash.user_created' => 'Der Benutzer wurde erfolgreich erstellt.',
    'registration.email.subject' => 'Willkommen %username%!',
    'registration.email.message' => 'Hallo %username%!

Besuchen Sie bitte folgende Seite, um Ihr Benutzerkonto zu bestätigen: %confirmationUrl%

Mit besten Grüßen,
das Team.
',
    'resetting.check_email' => 'Eine E-Mail wurde verschickt. Sie beinhaltet einen Link zum Zurücksetzen des Passwortes.
Hinweis: Ein neues Passwort kann nur alle %tokenLifetime% Stunden beantragt werden.

Eventuell wurde diese E-Mail als Spam markiert, wenn sie nicht angekommen ist.
',
    'resetting.request.username' => 'Benutzername oder E-Mail-Adresse',
    'resetting.request.submit' => 'Passwort zurücksetzen',
    'resetting.reset.submit' => 'Passwort ändern',
    'resetting.flash.success' => 'Das Passwort wurde erfolgreich zurückgesetzt.',
    'resetting.email.subject' => 'Passwort zurücksetzen',
    'resetting.email.message' => 'Hallo %username%!

Besuchen Sie bitte folgende Seite, um Ihr Passwort zurückzusetzen: %confirmationUrl%

Mit besten Grüßen,
das Team.
',
    'layout.logout' => 'Abmelden',
    'layout.login' => 'Anmelden',
    'layout.register' => 'Registrieren',
    'layout.logged_in_as' => 'Angemeldet als %username%',
    'form.group_name' => 'Gruppenname',
    'form.username' => 'Benutzername',
    'form.email' => 'E-Mail-Adresse',
    'form.current_password' => 'Derzeitiges Passwort',
    'form.password' => 'Passwort',
    'form.password_confirmation' => 'Passwort bestätigen',
    'form.new_password' => 'Neues Passwort',
    'form.new_password_confirmation' => 'Neues Passwort bestätigen',
  ),
  'KnpPaginatorBundle' => 
  array (
    'label_previous' => 'Vorherige',
    'label_next' => 'Nächste',
  ),
));

$catalogueNl = new MessageCatalogue('nl', array (
  'validators' => 
  array (
    'This value should be false.' => 'Deze waarde moet onwaar zijn.',
    'This value should be true.' => 'Deze waarde moet waar zijn.',
    'This value should be of type {{ type }}.' => 'Deze waarde moet van het type {{ type }} zijn.',
    'This value should be blank.' => 'Deze waarde moet leeg zijn.',
    'The value you selected is not a valid choice.' => 'De geselecteerde waarde is geen geldige optie.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Selecteer ten minste {{ limit }} optie.|Selecteer ten minste {{ limit }} opties.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Selecteer maximaal {{ limit }} optie.|Selecteer maximaal {{ limit }} opties.',
    'One or more of the given values is invalid.' => 'Eén of meer van de ingegeven waarden zijn ongeldig.',
    'This field was not expected.' => 'Dit veld werd niet verwacht.',
    'This field is missing.' => 'Dit veld ontbreekt.',
    'This value is not a valid date.' => 'Deze waarde is geen geldige datum.',
    'This value is not a valid datetime.' => 'Deze waarde is geen geldige datum en tijd.',
    'This value is not a valid email address.' => 'Deze waarde is geen geldig e-mailadres.',
    'The file could not be found.' => 'Het bestand kon niet gevonden worden.',
    'The file is not readable.' => 'Het bestand is niet leesbaar.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Het bestand is te groot ({{ size }} {{ suffix }}). Toegestane maximum grootte is {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Het mime type van het bestand is ongeldig ({{ type }}). Toegestane mime types zijn {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Deze waarde moet {{ limit }} of minder zijn.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Deze waarde is te lang. Hij mag maximaal {{ limit }} teken bevatten.|Deze waarde is te lang. Hij mag maximaal {{ limit }} tekens bevatten.',
    'This value should be {{ limit }} or more.' => 'Deze waarde moet {{ limit }} of meer zijn.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Deze waarde is te kort. Hij moet tenminste {{ limit }} teken bevatten.|Deze waarde is te kort. Hij moet tenminste {{ limit }} tekens bevatten.',
    'This value should not be blank.' => 'Deze waarde mag niet leeg zijn.',
    'This value should not be null.' => 'Deze waarde mag niet null zijn.',
    'This value should be null.' => 'Deze waarde moet null zijn.',
    'This value is not valid.' => 'Deze waarde is niet geldig.',
    'This value is not a valid time.' => 'Deze waarde is geen geldige tijd.',
    'This value is not a valid URL.' => 'Deze waarde is geen geldige URL.',
    'The two values should be equal.' => 'De twee waarden moeten gelijk zijn.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Het bestand is te groot. Toegestane maximum grootte is {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Het bestand is te groot.',
    'The file could not be uploaded.' => 'Het bestand kon niet worden geüpload.',
    'This value should be a valid number.' => 'Deze waarde moet een geldig getal zijn.',
    'This file is not a valid image.' => 'Dit bestand is geen geldige afbeelding.',
    'This is not a valid IP address.' => 'Dit is geen geldig IP-adres.',
    'This value is not a valid language.' => 'Deze waarde is geen geldige taal.',
    'This value is not a valid locale.' => 'Deze waarde is geen geldige locale.',
    'This value is not a valid country.' => 'Deze waarde is geen geldig land.',
    'This value is already used.' => 'Deze waarde wordt al gebruikt.',
    'The size of the image could not be detected.' => 'De grootte van de afbeelding kon niet bepaald worden.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'De afbeelding is te breed ({{ width }}px). De maximaal toegestane breedte is {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'De afbeelding is niet breed genoeg ({{ width }}px). De minimaal verwachte breedte is {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'De afbeelding is te hoog ({{ height }}px). De maximaal toegestane hoogte is {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'De afbeelding is niet hoog genoeg ({{ height }}px). De minimaal verwachte hoogte is {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Deze waarde moet het huidige wachtwoord van de gebruiker zijn.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Deze waarde moet exact {{ limit }} teken lang zijn.|Deze waarde moet exact {{ limit }} tekens lang zijn.',
    'The file was only partially uploaded.' => 'Het bestand is slechts gedeeltelijk geüpload.',
    'No file was uploaded.' => 'Er is geen bestand geüpload.',
    'No temporary folder was configured in php.ini.' => 'Er is geen tijdelijke map geconfigureerd in php.ini, of de gespecificeerde map bestaat niet.',
    'Cannot write temporary file to disk.' => 'Kan het tijdelijke bestand niet wegschrijven op disk.',
    'A PHP extension caused the upload to fail.' => 'De upload is mislukt vanwege een PHP-extensie.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Deze collectie moet {{ limit }} element of meer bevatten.|Deze collectie moet {{ limit }} elementen of meer bevatten.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Deze collectie moet {{ limit }} element of minder bevatten.|Deze collectie moet {{ limit }} elementen of minder bevatten.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Deze collectie moet exact {{ limit }} element bevatten.|Deze collectie moet exact {{ limit }} elementen bevatten.',
    'Invalid card number.' => 'Ongeldig creditcardnummer.',
    'Unsupported card type or invalid card number.' => 'Niet-ondersteund type creditcard of ongeldig nummer.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Dit is geen geldig internationaal bankrekeningnummer (IBAN).',
    'This value is not a valid ISBN-10.' => 'Deze waarde is geen geldige ISBN-10.',
    'This value is not a valid ISBN-13.' => 'Deze waarde is geen geldige ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Deze waarde is geen geldige ISBN-10 of ISBN-13 waarde.',
    'This value is not a valid ISSN.' => 'Deze waarde is geen geldige ISSN waarde.',
    'This value is not a valid currency.' => 'Deze waarde is geen geldige valuta.',
    'This value should be equal to {{ compared_value }}.' => 'Deze waarde moet gelijk zijn aan {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Deze waarde moet groter zijn dan {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Deze waarde moet groter dan of gelijk aan {{ compared_value }} zijn.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Deze waarde moet identiek zijn aan {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Deze waarde moet minder zijn dan {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Deze waarde moet minder dan of gelijk aan {{ compared_value }} zijn.',
    'This value should not be equal to {{ compared_value }}.' => 'Deze waarde mag niet gelijk zijn aan {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Deze waarde mag niet identiek zijn aan {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'De afbeeldingsverhouding is te groot ({{ ratio }}). Maximale verhouding is {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'De afbeeldingsverhouding is te klein ({{ ratio }}). Minimale verhouding is {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'De afbeelding is vierkant ({{ width }}x{{ height }}px). Vierkante afbeeldingen zijn niet toegestaan.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'De afbeelding is liggend ({{ width }}x{{ height }}px). Liggende afbeeldingen zijn niet toegestaan.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'De afbeelding is staand ({{ width }}x{{ height }}px). Staande afbeeldingen zijn niet toegestaan.',
    'An empty file is not allowed.' => 'Lege bestanden zijn niet toegestaan.',
    'The host could not be resolved.' => 'De hostnaam kon niet worden bepaald.',
    'This value does not match the expected {{ charset }} charset.' => 'Deze waarde is niet in de verwachte tekencodering {{ charset }}.',
    'This is not a valid Business Identifier Code (BIC).' => 'Dit is geen geldige bedrijfsidentificatiecode (BIC/SWIFT).',
    'Error' => 'Fout',
    'This is not a valid UUID.' => 'Dit is geen geldige UUID.',
    'This value should be a multiple of {{ compared_value }}.' => 'Deze waarde zou een meervoud van {{ compared_value }} moeten zijn.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Deze bedrijfsidentificatiecode (BIC) is niet gekoppeld aan IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'Deze waarde moet geldige JSON zijn.',
    'This collection should contain only unique elements.' => 'Deze collectie moet alleen unieke elementen bevatten.',
    'This value should be positive.' => 'Deze waarde moet positief zijn.',
    'This value should be either positive or zero.' => 'Deze waarde moet positief of gelijk aan nul zijn.',
    'This value should be negative.' => 'Deze waarde moet negatief zijn.',
    'This value should be either negative or zero.' => 'Deze waarde moet negatief of gelijk aan nul zijn.',
    'This value is not a valid timezone.' => 'Deze waarde is geen geldige tijdzone.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'Dit wachtwoord is gelekt vanwege een data-inbreuk, het moet niet worden gebruikt. Kies een ander wachtwoord.',
    'This value should be between {{ min }} and {{ max }}.' => 'Deze waarde moet zich tussen {{ min }} en {{ max }} bevinden.',
    'This form should not contain extra fields.' => 'Dit formulier mag geen extra velden bevatten.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Het geüploade bestand is te groot. Probeer een kleiner bestand te uploaden.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'De CSRF-token is ongeldig. Probeer het formulier opnieuw te versturen.',
    'fos_user.username.already_used' => 'De gebruikersnaam is al in gebruik.',
    'fos_user.username.blank' => 'Voer een gebruikersnaam in.',
    'fos_user.username.short' => 'De gebruikersnaam is te kort.',
    'fos_user.username.long' => 'De gebruikersnaam is te lang.',
    'fos_user.email.already_used' => 'Het e-mailadres is al in gebruik.',
    'fos_user.email.blank' => 'Voer een e-mailadres in.',
    'fos_user.email.short' => 'Het e-mailadres is te kort.',
    'fos_user.email.long' => 'Het e-mailadres is te lang.',
    'fos_user.email.invalid' => 'Het e-mailadres is ongeldig.',
    'fos_user.password.blank' => 'Voer een wachtwoord in.',
    'fos_user.password.short' => 'Het wachtwoord is te kort.',
    'fos_user.password.mismatch' => 'Het ingevoerde wachtwoord komt niet overeen.',
    'fos_user.new_password.blank' => 'Voer een nieuw wachtwoord in.',
    'fos_user.new_password.short' => 'Het nieuwe wachtwoord is te kort.',
    'fos_user.current_password.invalid' => 'Het ingevulde wachtwoord is ongeldig.',
    'fos_user.group.blank' => 'Voer een naam in.',
    'fos_user.group.short' => 'De naam is te kort.',
    'fos_user.group.long' => 'De naam is te lang.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Er heeft zich een authenticatieprobleem voorgedaan.',
    'Authentication credentials could not be found.' => 'Authenticatiegegevens konden niet worden gevonden.',
    'Authentication request could not be processed due to a system problem.' => 'Authenticatieaanvraag kon niet worden verwerkt door een technisch probleem.',
    'Invalid credentials.' => 'Ongeldige inloggegevens.',
    'Cookie has already been used by someone else.' => 'Cookie is al door een ander persoon gebruikt.',
    'Not privileged to request the resource.' => 'Onvoldoende rechten om de aanvraag te verwerken.',
    'Invalid CSRF token.' => 'CSRF-code is ongeldig.',
    'No authentication provider found to support the authentication token.' => 'Geen authenticatieprovider gevonden die de authenticatietoken ondersteunt.',
    'No session available, it either timed out or cookies are not enabled.' => 'Geen sessie beschikbaar, mogelijk is deze verlopen of cookies zijn uitgeschakeld.',
    'No token could be found.' => 'Er kon geen authenticatietoken worden gevonden.',
    'Username could not be found.' => 'Gebruikersnaam kon niet worden gevonden.',
    'Account has expired.' => 'Account is verlopen.',
    'Credentials have expired.' => 'Authenticatiegegevens zijn verlopen.',
    'Account is disabled.' => 'Account is gedeactiveerd.',
    'Account is locked.' => 'Account is geblokkeerd.',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'Groep bijwerken',
    'group.show.name' => 'Groep naam',
    'group.new.submit' => 'Groep aanmaken',
    'group.flash.updated' => 'De groep is bijgewerkt.',
    'group.flash.created' => 'De groep is aangemaakt.',
    'group.flash.deleted' => 'De groep is verwijderd.',
    'security.login.username' => 'Gebruikersnaam',
    'security.login.password' => 'Wachtwoord',
    'security.login.remember_me' => 'Onthoud mijn gegevens',
    'security.login.submit' => 'Inloggen',
    'profile.show.username' => 'Gebruikersnaam',
    'profile.show.email' => 'E-mail',
    'profile.edit.submit' => 'Bijwerken',
    'profile.flash.updated' => 'Het profiel is bijgewerkt.',
    'change_password.submit' => 'Wachtwoord wijzigen',
    'change_password.flash.success' => 'Het wachtwoord is gewijzigd.',
    'registration.check_email' => 'Er is een e-mail verstuurd naar %email%, met een link om uw account te activeren.',
    'registration.confirmed' => 'Gefeliciteerd %username%, uw account is nu geactiveerd.',
    'registration.back' => 'Terug naar de oorspronkelijke pagina.',
    'registration.submit' => 'Registreer',
    'registration.flash.user_created' => 'De gebruiker is succesvol aangemaakt.',
    'registration.email.subject' => 'Welkom %username%!',
    'registration.email.message' => 'Hallo %username%!

U moet uw account nog valideren, ga naar %confirmationUrl%

Vriendelijke groeten,
het Team.
',
    'resetting.check_email' => 'Er werd een email gestuurd. De email bevat een link om je wachtwoord te resetten.
Opgelet: Je kan pas na %tokenLifetime% uur een nieuw wachtwoord aanvragen.

Indien je geen email ontvangen hebt, controleer dan zeker je spam folder of probeer opnieuw.
',
    'resetting.request.username' => 'Gebruikersnaam of e-mailadres',
    'resetting.request.submit' => 'Reset wachtwoord',
    'resetting.reset.submit' => 'Wijzig wachtwoord',
    'resetting.flash.success' => 'Het wachtwoord is succesvol gereset.',
    'resetting.email.subject' => 'Reset wachtwoord',
    'resetting.email.message' => 'Hallo %username%!

Om uw wachtwoord te resetten, klikt u op de volgende link %confirmationUrl%

Met vriendelijke groet,
het Team.
',
    'layout.logout' => 'Uitloggen',
    'layout.login' => 'Inloggen',
    'layout.register' => 'Registreer',
    'layout.logged_in_as' => 'Ingelogd als %username%',
    'form.group_name' => 'Groep naam',
    'form.username' => 'Gebruikersnaam',
    'form.email' => 'E-mail',
    'form.current_password' => 'Huidig wachtwoord',
    'form.password' => 'Wachtwoord',
    'form.password_confirmation' => 'Wachtwoord controle',
    'form.new_password' => 'Nieuw wachtwoord',
    'form.new_password_confirmation' => 'Wachtwoord controle',
  ),
  'KnpPaginatorBundle' => 
  array (
    'label_previous' => 'Vorige',
    'label_next' => 'Volgende',
  ),
));
$catalogue->addFallbackCatalogue($catalogueNl);

return $catalogue;