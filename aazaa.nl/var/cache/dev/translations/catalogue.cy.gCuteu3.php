<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('cy', array (
  'validators' => 
  array (
    'This value should be false.' => 'Dylid bod y gwerth hwn yn ffug.',
    'This value should be true.' => 'Dylid bod y gwerth hwn yn wir.',
    'This value should be of type {{ type }}.' => 'Dylid bod y gwerth hwn bod o fath {{ type }}.',
    'This value should be blank.' => 'Dylid bod y gwerth hwn yn wag.',
    'The value you selected is not a valid choice.' => 'Nid yw\'r gwerth â ddewiswyd yn ddilys.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Rhaid dewis o leiaf {{ limit }} opsiwn.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Rhaid dewis dim mwy na {{ limit }} opsiwn.',
    'One or more of the given values is invalid.' => 'Mae un neu fwy o\'r gwerthoedd a roddwyd yn annilys.',
    'This field was not expected.' => 'Nid oedd disgwyl y maes hwn.',
    'This field is missing.' => 'Mae\'r maes hwn ar goll.',
    'This value is not a valid date.' => 'Nid yw\'r gwerth yn ddyddiad dilys.',
    'This value is not a valid datetime.' => 'Nid yw\'r gwerth yn datetime dilys.',
    'This value is not a valid email address.' => 'Nid yw\'r gwerth yn gyfeiriad ebost dilys.',
    'The file could not be found.' => 'Ni ddarganfyddwyd y ffeil.',
    'The file is not readable.' => 'Ni ellir darllen y ffeil.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Mae\'r ffeil yn rhy fawr ({{ size }} {{ suffix }}). Yr uchafswm â ganiateir yw {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Nid yw math mime y ffeil yn ddilys ({{ type }}). Dyma\'r mathau â ganiateir {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Dylai\'r gwerth hwn fod yn {{ limit }} neu lai.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Mae\'r gwerth hwn rhy hir. Dylai gynnwys {{ limit }} nodyn cyfrifiadurol neu lai.',
    'This value should be {{ limit }} or more.' => 'Dylai\'r gwerth hwn fod yn {{ limit }} neu fwy.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Mae\'r gwerth hwn yn rhy fyr. Dylai gynnwys {{ limit }} nodyn cyfrifiadurol neu fwy.',
    'This value should not be blank.' => 'Ni ddylai\'r gwerth hwn fod yn wag.',
    'This value should not be null.' => 'Ni ddylai\'r gwerth hwn fod yn null.',
    'This value should be null.' => 'Dylai\'r gwerth fod yn null.',
    'This value is not valid.' => 'Nid yw\'r gwerth hwn yn ddilys.',
    'This value is not a valid time.' => 'Nid yw\'r gwerth hwn yn amser dilys.',
    'This value is not a valid URL.' => 'Nid yw\'r gwerth hwn yn URL dilys.',
    'The two values should be equal.' => 'Rhaid i\'r ddau werth fod yn gyfystyr a\'u gilydd.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Mae\'r ffeil yn rhy fawr. Yr uchafswm â ganiateir yw {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Mae\'r ffeil yn rhy fawr.',
    'The file could not be uploaded.' => 'Methwyd ag uwchlwytho\'r ffeil.',
    'This value should be a valid number.' => 'Dylai\'r gwerth hwn fod yn rif dilys.',
    'This file is not a valid image.' => 'Nid yw\'r ffeil hon yn ddelwedd dilys.',
    'This is not a valid IP address.' => 'Nid yw hwn yn gyfeiriad IP dilys.',
    'This value is not a valid language.' => 'Nid yw\'r gwerth hwn yn iaith ddilys.',
    'This value is not a valid locale.' => 'Nid yw\'r gwerth hwn yn locale dilys.',
    'This value is not a valid country.' => 'Nid yw\'r gwerth hwn yn wlad dilys.',
    'This value is already used.' => 'Mae\'r gwerth hwn eisoes yn cael ei ddefnyddio.',
    'The size of the image could not be detected.' => 'Methwyd â darganfod maint y ddelwedd.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Mae lled y ddelwedd yn rhy fawr ({{ width }}px). Y lled mwyaf â ganiateir yw {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Mae lled y ddelwedd yn rhy fach ({{ width }}px). Y lled lleiaf â ganiateir yw {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Mae uchder y ddelwedd yn rhy fawr ({{ width }}px). Yr uchder mwyaf â ganiateir yw {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Mae uchder y ddelwedd yn rhy fach ({{ width }}px). Yr uchder lleiaf â ganiateir yw {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Dylaid bod y gwerth hwn yn gyfrinair presenol y defnyddiwr.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Dylai\'r gwerth hwn fod yn union {{ limit }} nodyn cyfrifiadurol o hyd.',
    'The file was only partially uploaded.' => 'Dim ond rhan o\'r ffeil ag uwchlwythwyd.',
    'No file was uploaded.' => 'Ni uwchlwythwyd unrhyw ffeil.',
    'No temporary folder was configured in php.ini.' => 'Nid oes ffolder dros-dro wedi\'i gosod yn php.ini.',
    'Cannot write temporary file to disk.' => 'Methwyd ag ysgrifennu\'r ffeil dros-dro ar ddisg.',
    'A PHP extension caused the upload to fail.' => 'Methwyd ag uwchlwytho oherwydd ategyn PHP.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Dylai\'r casgliad hwn gynnwys {{ limit }} elfen neu fwy.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Dylai\'r casgliad hwn gynnwys {{ limit }} elfen neu lai.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Dylai\'r casgliad hwn gynnwys union {{ limit }} elfen.',
    'Invalid card number.' => 'Nid oedd rhif y cerdyn yn ddilys.',
    'Unsupported card type or invalid card number.' => 'Unai ni dderbynir y math yna o gerdyn, neu nid yw rhif y cerdyn yn ddilys.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Nid yw hwn yn Rhif Cyfrif Banc Rhyngwladol (IBAN) dilys.',
    'This value is not a valid ISBN-10.' => 'Nid yw\'r gwerth hwn yn ISBN-10 dilys.',
    'This value is not a valid ISBN-13.' => 'Nid yw\'r gwerth hwn yn ISBN-13 dilys.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Nid yw\'r gwerth hwn yn Rhif ISBN-10 dilys nac yn ISBN-13 dilys.',
    'This value is not a valid ISSN.' => 'Nid yw\'r gwerth hwn yn ISSN dilys.',
    'This value is not a valid currency.' => 'Nid yw\'r gwerth hwn yn arian dilys.',
    'This value should be equal to {{ compared_value }}.' => 'Dylai\'r gwerth hwn fod yn gyfartal â {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Dylai\'r gwerth hwn fod yn fwy na {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Dylai\'r gwerth hwn fod yn fwy na neu\'n hafal i {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Dylai\'r gwerth hwn fod yn union yr un fath â {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Dylai\'r gwerth hwn fod yn llai na {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Dylai\'r gwerth hwn fod yn llai na neu\'n hafal i {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Ni ddylai\'r gwerth hwn fod yn hafal i {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Ni ddylai\'r gwerth hwn fod yn union yr un fath â {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Mae\'r gymhareb delwedd yn rhy fawr ({{ ratio }}). Y gymhareb uchaf a ganiateir yw {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Mae\'r gymhareb delwedd yn rhy fach ({{ ratio }}). Y gymhareb isaf a ddisgwylir yw {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Mae\'r ddelwedd yn sgwâr ({{ width }}x{{ height }}px). Ni chaniateir delweddau sgwâr.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Mae\'r ddelwedd mewn fformat tirlun ({{ width }}x{{ height }}px). Ni chaniateir delweddau mewn fformat tirlun.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Mae\'r ddelwedd mewn fformat portread ({{ width }}x{{ height }}px). Ni chaniateir delweddau mewn fformat portread.',
    'An empty file is not allowed.' => 'Ni chaniateir ffeil wag.',
    'The host could not be resolved.' => 'Ni fu modd datrys y gwesteiwr.',
    'This value does not match the expected {{ charset }} charset.' => 'Nid yw\'r gwerth hwn yn cyfateb â\'r {{ charset }} set nodau ddisgwyliedig.',
    'This is not a valid Business Identifier Code (BIC).' => 'Nid yw hwn yn God Adnabod Busnes (BIC) dilys.',
    'Error' => 'Gwall',
    'This is not a valid UUID.' => 'Nid yw hyn yn UUID dilys.',
    'This value should be a multiple of {{ compared_value }}.' => 'Dylai\'r gwerth hwn fod yn luosrif o {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Nid yw\'r Cod Adnabod Busnes (BIC) hwn yn gysylltiedig ag IBAN {{ iban }}.',
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
