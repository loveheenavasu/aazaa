<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('sk', array (
  'validators' => 
  array (
    'This value should be false.' => 'Táto hodnota by mala byť nastavená na false.',
    'This value should be true.' => 'Táto hodnota by mala byť nastavená na true.',
    'This value should be of type {{ type }}.' => 'Táto hodnota by mala byť typu {{ type }}.',
    'This value should be blank.' => 'Táto hodnota by mala byť prázdna.',
    'The value you selected is not a valid choice.' => 'Táto hodnota by mala byť jednou z poskytnutých možností.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Mali by ste vybrať minimálne {{ limit }} možnosť.|Mali by ste vybrať minimálne {{ limit }} možnosti.|Mali by ste vybrať minimálne {{ limit }} možností.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Mali by ste vybrať najviac {{ limit }} možnosť.|Mali by ste vybrať najviac {{ limit }} možnosti.|Mali by ste vybrať najviac {{ limit }} možností.',
    'One or more of the given values is invalid.' => 'Niektoré z uvedených hodnôt sú neplatné.',
    'This field was not expected.' => 'Toto pole sa neočakáva.',
    'This field is missing.' => 'Toto pole chýba.',
    'This value is not a valid date.' => 'Tato hodnota nemá platný formát dátumu.',
    'This value is not a valid datetime.' => 'Táto hodnota nemá platný formát dátumu a času.',
    'This value is not a valid email address.' => 'Táto hodnota nie je platná emailová adresa.',
    'The file could not be found.' => 'Súbor sa nenašiel.',
    'The file is not readable.' => 'Súbor nie je čitateľný.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Súbor je príliš veľký ({{ size }} {{ suffix }}). Maximálna povolená veľkosť je {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Súbor typu ({{ type }}) nie je podporovaný. Podporované typy sú {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Táto hodnota by mala byť {{ limit }} alebo menej.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Táto hodnota obsahuje viac znakov ako je povolené. Mala by obsahovať najviac {{ limit }} znak.|Táto hodnota obsahuje viac znakov ako je povolené. Mala by obsahovať najviac {{ limit }} znaky.|Táto hodnota obsahuje viac znakov ako je povolené. Mala by obsahovať najviac {{ limit }} znakov.',
    'This value should be {{ limit }} or more.' => 'Táto hodnota by mala byť viac ako {{ limit }}.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Táto hodnota je príliš krátka. Musí obsahovať minimálne {{ limit }} znak.|Táto hodnota je príliš krátka. Musí obsahovať minimálne {{ limit }} znaky.|Táto hodnota je príliš krátka. Minimálny počet znakov je {{ limit }}.',
    'This value should not be blank.' => 'Táto hodnota by mala byť vyplnená.',
    'This value should not be null.' => 'Táto hodnota by nemala byť null.',
    'This value should be null.' => 'Táto hodnota by mala byť null.',
    'This value is not valid.' => 'Táto hodnota nie je platná.',
    'This value is not a valid time.' => 'Tato hodnota nemá správny formát času.',
    'This value is not a valid URL.' => 'Táto hodnota nie je platnou URL adresou.',
    'The two values should be equal.' => 'Tieto dve hodnoty by mali byť rovnaké.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Súbor je príliš veľký. Maximálna povolená veľkosť je {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Súbor je príliš veľký.',
    'The file could not be uploaded.' => 'Súbor sa nepodarilo nahrať.',
    'This value should be a valid number.' => 'Táto hodnota by mala byť číslo.',
    'This file is not a valid image.' => 'Tento súbor nie je obrázok.',
    'This is not a valid IP address.' => 'Toto nie je platná IP adresa.',
    'This value is not a valid language.' => 'Tento jazyk neexistuje.',
    'This value is not a valid locale.' => 'Táto lokalizácia neexistuje.',
    'This value is not a valid country.' => 'Táto krajina neexistuje.',
    'This value is already used.' => 'Táto hodnota sa už používa.',
    'The size of the image could not be detected.' => 'Nepodarilo sa zistiť rozmery obrázku.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Obrázok je príliš široký ({{ width }}px). Maximálna povolená šírka obrázku je {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Obrázok je príliš úzky ({{ width }}px). Minimálna šírka obrázku by mala byť {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => '>Obrázok je príliš vysoký ({{ height }}px). Maximálna povolená výška obrázku je {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Obrázok je príliš nízky ({{ height }}px). Minimálna výška obrázku by mala byť {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Táto hodnota by mala byť aktuálne heslo používateľa.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Táto hodnota by mala mať presne {{ limit }} znak.|Táto hodnota by mala mať presne {{ limit }} znaky.|Táto hodnota by mala mať presne {{ limit }} znakov.',
    'The file was only partially uploaded.' => 'Bola nahraná len časť súboru.',
    'No file was uploaded.' => 'Žiadny súbor nebol nahraný.',
    'No temporary folder was configured in php.ini.' => 'V php.ini nie je nastavená cesta k adresáru pre dočasné súbory.',
    'Cannot write temporary file to disk.' => 'Dočasný súbor sa nepodarilo zapísať na disk.',
    'A PHP extension caused the upload to fail.' => 'Rozšírenie PHP zabránilo nahraniu súboru.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Táto kolekcia by mala obsahovať aspoň {{ limit }} prvok alebo viac.|Táto kolekcia by mala obsahovať aspoň {{ limit }} prvky alebo viac.|Táto kolekcia by mala obsahovať aspoň {{ limit }} prvkov alebo viac.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Táto kolekcia by mala maximálne {{ limit }} prvok.|Táto kolekcia by mala obsahovať maximálne {{ limit }} prvky.|Táto kolekcia by mala obsahovať maximálne {{ limit }} prvkov.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Táto kolekcia by mala obsahovať presne {{ limit }} prvok.|Táto kolekcia by mala obsahovať presne {{ limit }} prvky.|Táto kolekcia by mala obsahovať presne {{ limit }} prvkov.',
    'Invalid card number.' => 'Neplatné číslo karty.',
    'Unsupported card type or invalid card number.' => 'Nepodporovaný typ karty alebo neplatné číslo karty.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Toto je neplatný IBAN.',
    'This value is not a valid ISBN-10.' => 'Táto hodnota je neplatné ISBN-10.',
    'This value is not a valid ISBN-13.' => 'Táto hodnota je neplatné ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Táto hodnota nie je platné ISBN-10 ani ISBN-13.',
    'This value is not a valid ISSN.' => 'Táto hodnota nie je platné ISSN.',
    'This value is not a valid currency.' => 'Táto hodnota nie je platná mena.',
    'This value should be equal to {{ compared_value }}.' => 'Táto hodnota by mala byť rovná {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Táto hodnota by mala byť väčšia ako {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Táto hodnota by mala byť väčšia alebo rovná {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Táto hodnota by mala byť typu {{ compared_value_type }} a zároveň by mala byť rovná {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Táto hodnota by mala byť menšia ako {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Táto hodnota by mala byť menšia alebo rovná {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Táto hodnota by nemala byť rovná {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Táto hodnota by nemala byť typu {{ compared_value_type }} a zároveň by nemala byť rovná {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Pomer strán obrázku je príliš veľký ({{ ratio }}). Maximálny povolený pomer strán obrázku je {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Pomer strán obrázku je príliš malý ({{ ratio }}). Minimálny povolený pomer strán obrázku je {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Strany obrázku sú štvorcové ({{ width }}x{{ height }}px). Štvorcové obrázky nie sú povolené.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Obrázok je orientovaný na šírku ({{ width }}x{{ height }}px). Obrázky orientované na šírku nie sú povolené.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Obrázok je orientovaný na výšku ({{ width }}x{{ height }}px). Obrázky orientované na výšku nie sú povolené.',
    'An empty file is not allowed.' => 'Súbor nesmie byť prázdny.',
    'The host could not be resolved.' => 'Hostiteľa nebolo možné rozpoznať.',
    'This value does not match the expected {{ charset }} charset.' => 'Táto hodnota nezodpovedá očakávanej znakovej sade {{ charset }}.',
    'This is not a valid Business Identifier Code (BIC).' => 'Táto hodnota nie je platný identifikačný kód podniku (BIC).',
    'This form should not contain extra fields.' => 'Polia by nemali obsahovať ďalšie prvky.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Odoslaný súbor je príliš veľký. Prosím odošlite súbor s menšou veľkosťou.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF token je neplatný. Prosím skúste znovu odoslať formulár.',
    'fos_user.username.already_used' => 'Používateľské meno už existuje.',
    'fos_user.username.blank' => 'Zadajte, prosím, svoje používateľské meno.',
    'fos_user.username.short' => 'Používateľské meno je príliš krátke.',
    'fos_user.username.long' => 'Používateľské meno je príliš dlhé.',
    'fos_user.email.already_used' => 'E-mail už existuje.',
    'fos_user.email.blank' => 'Zadajte prosím e-mail.',
    'fos_user.email.short' => 'E-mail je príliš krátky.',
    'fos_user.email.long' => 'E-mail je príliš dlhý.',
    'fos_user.email.invalid' => 'E-mail nie je platný.',
    'fos_user.password.blank' => 'Zadajte, prosím, heslo.',
    'fos_user.password.short' => 'Heslo je príliš krátke.',
    'fos_user.password.mismatch' => 'Zadané heslá sa nezhodujú.',
    'fos_user.new_password.blank' => 'Zadajte, prosím, nové heslo.',
    'fos_user.new_password.short' => 'Nové heslo je príliš krátke.',
    'fos_user.current_password.invalid' => 'Zadané heslo je neplatné.',
    'fos_user.group.blank' => 'Zadajte, prosím, názov.',
    'fos_user.group.short' => 'Názov je príliš krátky.',
    'fos_user.group.long' => 'Názov je príliš dlhý.',
    'fos_group.name.already_used' => 'Tento názov už existuje.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Pri overovaní došlo k chybe.',
    'Authentication credentials could not be found.' => 'Overovacie údaje neboli nájdené.',
    'Authentication request could not be processed due to a system problem.' => 'Požiadavok na overenie nemohol byť spracovaný kvôli systémovej chybe.',
    'Invalid credentials.' => 'Neplatné prihlasovacie údaje.',
    'Cookie has already been used by someone else.' => 'Cookie už bolo použité niekým iným.',
    'Not privileged to request the resource.' => 'Nemáte oprávnenie pristupovať k prostriedku.',
    'Invalid CSRF token.' => 'Neplatný CSRF token.',
    'No authentication provider found to support the authentication token.' => 'Poskytovateľ pre overovací token nebol nájdený.',
    'No session available, it either timed out or cookies are not enabled.' => 'Session nie je k dispozíci, vypršala jej platnosť, alebo sú zakázané cookies.',
    'No token could be found.' => 'Token nebol nájdený.',
    'Username could not be found.' => 'Prihlasovacie meno nebolo nájdené.',
    'Account has expired.' => 'Platnosť účtu skončila.',
    'Credentials have expired.' => 'Platnosť prihlasovacích údajov skončila.',
    'Account is disabled.' => 'Účet je zakázaný.',
    'Account is locked.' => 'Účet je zablokovaný.',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'Upraviť skupinu',
    'group.show.name' => 'Názov skupiny',
    'group.new.submit' => 'Vytvoriť skupinu',
    'group.flash.updated' => 'Skupina bola úspešne zmenená.',
    'group.flash.created' => 'Skupina bola úspešne vytvorená.',
    'group.flash.deleted' => 'Skupina bola úspešne vymazaná.',
    'security.login.username' => 'Používateľské meno',
    'security.login.password' => 'Heslo',
    'security.login.remember_me' => 'Zapamätať si',
    'security.login.submit' => 'Prihlásenie',
    'profile.show.username' => 'Používateľské meno',
    'profile.show.email' => 'Email',
    'profile.edit.submit' => 'Upraviť',
    'profile.flash.updated' => 'Profil bol úspešne zmenený.',
    'change_password.submit' => 'Zmena hesla',
    'change_password.flash.success' => 'Heslo bolo úspešne zmenené.',
    'registration.check_email' => 'Aktivačný email bol zaslaný na adresu %email%. V tele správy je aktivačný link, na ktorý treba kliknúť pre úspešné dokončenie registrácie.',
    'registration.confirmed' => 'Gratulujeme %username%, Vaše konto bolo aktivované.',
    'registration.back' => 'Návrat na predchádzajúcu stránku.',
    'registration.submit' => 'Registrácia',
    'registration.flash.user_created' => 'Vaše konto bolo úspešne vytvorené.',
    'registration.email.subject' => 'Vitaj %username%!',
    'registration.email.message' => 'Ahoj %username%!

Pre ukončenie registrácie, prosím klikni na nasledovný link: %confirmationUrl%

S pozdravom,
Realizačný tím
',
    'resetting.request.username' => 'Používateľské meno alebo emailová adresa',
    'resetting.request.submit' => 'Obnova hesla',
    'resetting.reset.submit' => 'Zmeniť heslo',
    'resetting.flash.success' => 'Heslo bolo úspešne zmenené.',
    'resetting.email.subject' => 'Vynulovanie hesla',
    'resetting.email.message' => 'Ahoj %username%!

Pre zmenu hesla, klikni prosím na nasledovný link: %confirmationUrl%

S pozdravom,
Realizačný tím
',
    'layout.logout' => 'Odhlásenie',
    'layout.login' => 'Prihlásenie',
    'layout.register' => 'Registrácia',
    'layout.logged_in_as' => 'Ste prihlásený ako %username%',
    'form.group_name' => 'Názov skupiny',
    'form.username' => 'Používateľské meno',
    'form.email' => 'Email',
    'form.current_password' => 'Súčasné heslo',
    'form.password' => 'Heslo',
    'form.password_confirmation' => 'Potvrdenie hesla',
    'form.new_password' => 'Nové heslo',
    'form.new_password_confirmation' => 'Potvrdenie hesla',
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