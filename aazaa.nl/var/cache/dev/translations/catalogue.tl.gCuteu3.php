<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('tl', array (
  'validators' => 
  array (
    'This value should be false.' => 'Ang halaga nito ay dapat na huwad.',
    'This value should be true.' => 'Ang halaga nito ay dapat totoo.',
    'This value should be of type {{ type }}.' => 'Ang halaga nito ay dapat sa uri {{ type }}.',
    'This value should be blank.' => 'Ang halaga nito ay dapat walang laman.',
    'The value you selected is not a valid choice.' => 'Ang halaga ng iyong pinili ay hindi balidong pagpili.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Kailangan mong pumili ng pinakamababang {{ limit }} ng pagpilian.|Kailangan mong pumili ng pinakamababang {{ limit }} ng mga pagpipilian.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Kailangan mong pumili ng pinakamataas {{ limit }} ng pagpipilian.|Kailangan mong pumili ng pinakamataas {{ limit }} ng mga pagpipilian.',
    'One or more of the given values is invalid.' => 'Isa o higit pang mga halaga na binigay ay hindi balido.',
    'This field was not expected.' => 'Ang larangang ito ay hindi inaasahan.',
    'This field is missing.' => 'Ang patlang na ito ay nawawala.',
    'This value is not a valid date.' => 'Ang halagang ito ay hindi balidong petsa.',
    'This value is not a valid datetime.' => 'Ang halagang ito ay hindi wastong petsa/oras.',
    'This value is not a valid email address.' => 'Ang halagang ito ay hindi balidong address ng email.',
    'The file could not be found.' => 'Ang file na ito ay hindi makita.',
    'The file is not readable.' => 'Ang file na ito ay hindi mabasa.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Ang file na ito ay masyadong malaki ({{ size }} {{ suffix }}). Ang pinakamalaking sukat {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Ang uri ng file ng mime ay hindi balido ({{ type }}).Ang mga pinapayagang uri ng mime ay ang  {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Ang halaga nito ay dapat na {{ limit }} or maliit pa.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Ang halaga nito ay masyadong mahaba.Ito ay dapat na {{ limit }} karakter o maliit pa.|Ang halaga nito ay masyadong mahaba. Ito ay dapat na {{ limit }} mga karakter o maliit pa.',
    'This value should be {{ limit }} or more.' => 'Ang halaga nito ay dapat na {{ limit }} o mas marami pa.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Ang halaga nito ay masyadong maliit. Ito ay dapat na {{ limit }} karakter o marami pa.|Ang halaga nito ay masyadong maliit. Ito ay dapat na {{ limit }} mga karakter o marami pa.',
    'This value should not be blank.' => 'Ang halaga na ito ay dapat na may laman.',
    'This value should not be null.' => 'Meron dapt itong halaga.',
    'This value should be null.' => 'Wala dapat itong halaga.',
    'This value is not valid.' => 'Hindi balido ang halagang ito.',
    'This value is not a valid time.' => 'Ang halagang ito ay hindi wastong oras.',
    'This value is not a valid URL.' => 'Hindi ito isang balidong URL.',
    'The two values should be equal.' => 'Ang dalwang halaga ay dapat magkapareha.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Ang file ay masyadong malaki. Ang pinapayagan halaga lamang ay {{ limit}} {{ suffix }}.',
    'The file is too large.' => 'Ang file na ito ay masyadong malaki.',
    'The file could not be uploaded.' => 'Ang file na ito ay hindi ma-upload.',
    'This value should be a valid number.' => 'Ang halaga nito ay dapat na wastong numero.',
    'This file is not a valid image.' => 'Ang file na ito ay hindi wastong imahe.',
    'This is not a valid IP address.' => 'Ito ay hindi wastong IP address.',
    'This value is not a valid language.' => 'Ang halaga na ito ay hindi balidong wika.',
    'This value is not a valid locale.' => 'Ito ay isang hindi wastong locale na halaga.',
    'This value is not a valid country.' => 'ng halaga na ito ay hindi wastong bansa.',
    'This value is already used.' => 'Ang halaga na ito ay ginamit na.',
    'The size of the image could not be detected.' => 'Ang sukat ng imahe ay hindi madetect.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Ang lapad ng imahe ay masyadong malaki ({{ width }}px). Ang pinapayagang lapay ay {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Ang lapad ng imahe ay masyadong maliit ({{ width }}px). Ang pinakamaliit na pinapayagang lapad ay {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Ang haba ng imahe ay masyadong mataas ({{ height }}px). Ang pinakmataas na haba ay {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Ang haba ng imahe ay masyadong maliit ({{ height }}px). Ang inaasahang haba ay {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Ang halagang ito ay dapat na password ng kasalukuyang gumagamit.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Ang halagang ito ay dapat na eksakto sa {{ limit}} karakter.|Ang halagang ito ay dapat na eksakto sa {{ limit }} mga karakter.',
    'The file was only partially uploaded.' => 'Ang file na ito ay kahalating na upload lamang.',
    'No file was uploaded.' => 'Walang na upload na file.',
    'No temporary folder was configured in php.ini.' => 'Walang temporaryong folder ang naayos sa php.ini.',
    'Cannot write temporary file to disk.' => 'Temporaryong hindi  makasulat ng file sa disk.',
    'A PHP extension caused the upload to fail.' => 'Ang dahilan ng pagkabigo ng pagupload ng files ay isang extension ng PHP.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Ang koleksyon na ito ay dapat magkaroon ng {{ limit }} elemento o marami pa.|Ang koleksyon na ito ay dapat magkaroon ng {{ limit }} mga elemento o marami pa.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Ang koleksyon na ito ay dapat magkaroon ng {{ limit }} elemento o maliit pa.|Ang koleksyon na ito ay dapat magkaroon ng {{ limit }} mga elemento o maliit pa.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Ang koleksyong ito ay magkaroon ng eksaktong {{ limit }} elemento.|Ang koleksyong ito ay magkaroon ng eksaktong {{ limit }} mga elemento.',
    'Invalid card number.' => 'Hindi wastong numero ng kard.',
    'Unsupported card type or invalid card number.' => 'Hindi supportadong uri ng kard o hindi wastong numero ng kard.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Ito ay hindi isang balidong International Bank Account Number (IBAN).',
    'This value is not a valid ISBN-10.' => 'Ang halagang ito ay hindi balidong SBN-10.',
    'This value is not a valid ISBN-13.' => 'Ang halagang ito ay hindi balidong ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Ang halagang ito ay pwdeng isang balidong ISBN-10 o isang balidong ISBN-13.',
    'This value is not a valid ISSN.' => 'Ang halangang ito ay hindi isang balidong ISSN.',
    'This value is not a valid currency.' => 'Ang halagang ito ay hindi balidong pera.',
    'This value should be equal to {{ compared_value }}.' => 'Ito ay hindi dapat magkapareho sa {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Ang halagang ito ay dapat tataas sa {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Ang halagang ito ay dapat mas mataas o magkapareha sa {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Ang halagang ito ay dapat kapareha ng {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Ang halagang ito ay dapat mas maliit sa {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Ang halagang ito ay dapat mas mmaliit o magkapareha sa {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Ang halagang ito ay hindi dapat magkapareha sa {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Ang halagang ito ay hindi dapat magkapareha sa {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Ang ratio ng imahe ay masyadong malaki ({{ ratio }}). Ang pinakamalaking ratio ay {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'ng ratio ng imahe ay masyadong maliit ({{ ratio }}). Ang pinamaliit na ratio ay {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Ang imahe ay kwadrado ({{ width }}x{{ height }}px). Ang mga kwadradong imahe ay hindi pwede.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Ang orientasyon ng imahe ay nakalandscape ({{ width }}x{{ height }}px). Ang mga imaheng nakalandscape ang orientasyon ay hindi pwede.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Ang orientasyon ng imahe ay nakaportrait ({{ width }}x{{ height }}px). PAng mga imaheng nakaportrait ang orientasyon ay hindi pwede.',
    'An empty file is not allowed.' => 'Ang file na walang laman ay hindi pwede.',
    'The host could not be resolved.' => 'Hindi maresolba ang host.',
    'This value does not match the expected {{ charset }} charset.' => 'Ang halaga ay hindi kapareha sa inaasahang {{ charset }} set ng karater.',
    'This is not a valid Business Identifier Code (BIC).' => 'Ito ay hindi isang balidong Business Identifier Code (BIC).',
    'Error' => 'Error',
    'This is not a valid UUID.' => 'Ito ay hindi wastong UUID.',
    'This value should be a multiple of {{ compared_value }}.' => 'Ang halagang ito ay dapat multiple ng {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Ang Business Identifier Code (BIC) na ito ay walang kaugnayan sa IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'Ang halagang ito ay dapat naka wastong JSON.',
    'This collection should contain only unique elements.' => 'Ang mga elemento ng koleksyong ito ay dapat magkakaiba.',
    'This value should be positive.' => 'Ang halagang ito ay dapat positibo.',
    'This value should be either positive or zero.' => 'Ang halagang ito ay dapat positibo o zero.',
    'This value should be negative.' => 'Ang halagang ito ay dapat negatibo.',
    'This value should be either negative or zero.' => 'Ang halagang ito ay dapat negatibo o zero.',
    'This value is not a valid timezone.' => 'Ang halagang ito ay hindi wastong timezone.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'Naikalat ang password na ito sa isang data breach at hindi na dapat gamitin. Mangyaring gumamit ng ibang pang password.',
    'This form should not contain extra fields.' => 'Ang pormang itong ay hindi dapat magkarron ng dagdag na mga patlang.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Ang ini-upload na file ay masyadong malaki. Pakiulit muling mag-upload ng mas maliit na file.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Hindi balido ang CSRF token. Maagpasa muli ng isang pang porma.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Isang pambihirang pagpaptunay ang nangyari.',
    'Authentication credentials could not be found.' => 'Hindi mahanap ang mga kinakailangan na dokumento para sa pagpapatunay.',
    'Authentication request could not be processed due to a system problem.' => 'Hindi maproseso ang iyong hiling dahil may problema sa sistema.',
    'Invalid credentials.' => 'Hindi balidong mga dokumento.',
    'Cookie has already been used by someone else.' => 'Ang Cookie ay ginamit na ng ibang tao.',
    'Not privileged to request the resource.' => 'Walang pribilehiyo upang humingi ng mga bagong mapagkukunan.',
    'Invalid CSRF token.' => 'Hindi balidong mga token ng CSRF.',
    'No authentication provider found to support the authentication token.' => 'Walang nakitang nagbibibagay ng suporta sa token ng pagpapatunay.',
    'No session available, it either timed out or cookies are not enabled.' => 'Walang sesyon ng magagamit, ito ay nawalan ng oras o hindi pinagana.',
    'No token could be found.' => 'Walang token na nahanap.',
    'Username could not be found.' => 'Walang username na makita.',
    'Account has expired.' => 'Ang akawnt ay nag-expire na.',
    'Credentials have expired.' => '.ng mga kinakailangang dokumento ay nag expire na.',
    'Account is disabled.' => 'Ang akawnt ay hindi pinagana.',
    'Account is locked.' => 'ng akawnt ay nakasara.',
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
    'One or more of the given values is invalid.' => 'E??n of meer van de ingegeven waarden zijn ongeldig.',
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
    'The file could not be uploaded.' => 'Het bestand kon niet worden ge??pload.',
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
    'The file was only partially uploaded.' => 'Het bestand is slechts gedeeltelijk ge??pload.',
    'No file was uploaded.' => 'Er is geen bestand ge??pload.',
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
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Het ge??ploade bestand is te groot. Probeer een kleiner bestand te uploaden.',
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
