# Invoerformulieren

Initiele upload is incompleet, veel code snippets maar geen werkend geheel. IOM Mike gepushed wat reeds aanwezig is om thuis verder 
af te maken

To-do: Forms afmaken, styling is onvoldoende. Hoogste prioriteit is het valideren danwel afwijzen van de forms dmv PHP.

18-10 20:30:
Localhost blijft 403 forbidden geven ondanks aanpassingen van httpd.conf en httpd-xampp.conf die probleem zouden moeten oplossen volgens 
https://stackoverflow.com/questions/6959189/apache-virtualhost-403-forbidden
en
https://stackoverflow.com/questions/21161908/new-xampp-security-concept-access-forbidden-error-403-windows-7-phpmyadmin

Om niet meer tijd te verspillen aan configureren van local host om enkel te kunnen testen of de code werkt, stop ik met proberen de localhost te laten werken en richt me in plaats daarvan op het creeeren van de code. 

---------

21:10
HTML van dubbelform iets opgeschoond, form action veranderd naar php_self server om reactie op zelfde pagina te triggeren in plaats van te verwijzen naar secundaire pagina. htmlspecialchars toegevoegd ter beveiliging.
spans met verwijzingen naar errors vanuit php onder inputs gehangen.
php include toegevoegd bovenin adhv tutorial gevonden op youtube (https://youtu.be/1CkBsGhux9U)

php van scratch opnieuw gemaakt in invoer2.php. Gestart met definitie van de vars die later terugkomen, errors en successen. PHP laten lopen enkel op POST method dmv eerste if statement.
if else statements gekoppeld aan alle inputs
Cleanup sectie onderin toegevoegd 

Local host nog niet werkend gekregen dus nog niet in staat geweest om te testen, eerstvolgende stap is echter CSS van forms aangezien code in principe, op tikfouten na, correct zou moeten zijn. 
In het ergste geval, als de code wel incorrect blijkt, is de structuur en opbouw + functionaliteit me nu dusdanig duidelijk dat herstel relatief makkelijk zou moeten blijken. Aangezien vereiste van opdracht óók de presentatie omvatte krijgt CSS nu prioriteit over werkend krijgen van localhost via apache, aangezien tijdsbestek hiervan geheel onbekend is en CSS relatief sneller klaar zou moeten zijn.
-------