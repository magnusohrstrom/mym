<div align="center">
<h1>Content Management System / FEND16</h1>
<hr>
<h4>MYM Medlemmar: Magnus Öhrström, Yoko Andrae, Martin Clavin</h4>
</div>
<p align="center"><img src="images/favicon.png" alt="team logo"></p>
### Beskrivning om uppgiften
Uppdraget är att skapa en blogg applikation skriven i PHP och MySQL som fungerar som ett mindre CMS där man kan lägga till, redigera och ta bort innehåll. Den ska även möjliggöra rösta eller gilla innehållet.

### Style Guide
#### Tema-färger
![theme colors](images/mym-color.jpg =x50)
![theme colors](images/mym-color2.jpg =x50)

#### Typsnitt
Abel, Sans-serif (Headers & Titles)  
Playfair Display, Serif (Subsidiary Texts )

| Verktyg & Tekniker | Arbetsområde |
|:-----:|:-----:|
|Photoshop|Style Guide|
|Sass|Stylesheet|
|jQuery|Ajax|
|Bootstrap|Library|
|Slack, Trello, Google Drive|Communication|

### Roller
- Magnus
    - Styling (CSS)
    - Like & Comment system
 - Yoko
    - Sign up / login system
- Martin
    - Posting system

### Arbetsflöde
Vi satte igång detta uppdrag med namngivning till vår grupp. Vi sedan strukturerade vår databas (bestämde vilka tabeller och kolumner krävdes), och därefter diskterade vi om tema färger och typsnitt. För att köra igång kodning,delade vi upp uppdraget till tre olika delar: **1) Signup/login system, 2) blogg inläggnings system,** samt **3) like/comments system**. Magnus byggde ett skellet (med CSS styles) av webbsidan, och sedan lade vi in var sin kod till detta skellet. I kodnings fasen, förståd vi inte riktigt hur SESSION-variabler skulle funka, men när vi väl förstod detta, utnyttjade vi SESSION-variabler för att skicka med och dela data mellan olika filer.  
  
Flesta våra kommunikationer skedde på Slack, samt vi samlade in i klassrummet när det var möjligt. Vi körde dessutom scrum-möte ett par gånger i veckan. Vi hanterade versioner och hämtade filer av varandra genom GitHub.  
  
Utmaningar till denna uppgift var att man skulle skicka data med AJAX, och lägga upp datan på webbsidan eller gömma beroende på kriterier (dvs tilläggat if-satser på php-filerna) där man krävdes att förstå hur och vilka data skulle skickas med och hämtas. Man skulle dessutom använda klasser vilka som fattas i vårt javascript. Vi försörkte kapsla in funktionaliteter med klass-metoder för att åstadkomma "Dependency Injections".
  
### Källor
Gif Loader Animation: http://www.ajaxload.info/  
Google Fonts: https://fonts.google.com/