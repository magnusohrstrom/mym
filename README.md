# Content Management System / FEND16
### Team Name: MYM

#### Member: Yoko Andrae, Martin Clavin, Magnus Öhrström
![theme colors](images/favicon.png)
### Beskrivning om uppgiften
Uppdraget är att skapa en blogg applikation skriven i PHP och MySQL som fungerar som ett mindre CMS där man kan lägga till, redigera och ta bort innehåll. Den ska även möjliggöra rösta eller gilla innehållet.

### Style Guide
#### Tema-färger
![theme colors](images/mym-color.jpg)
![theme colors](images/mym-color2.jpg)

#### Typsnitt
Headers & Titles: Abel, Sans-serif  
Subsidiary Texts: Playfair Display, serif

| Arbetsområde | Verktyg & Tekniker |
|:-----:|:-----:|
|Style Guide |Photoshop|
|Stylesheet|Sass|
|Ajax|jQuery|
|Library|Bootstrap|
|Communication|Slack, Trello, Google Drive|

### Roller
- Yoko
    - Sign up / login system
- Martin
    - Posting system
- Magnus
    - Styling (CSS)
    - Like & Comment system
 
### Arbetsflöde
Först, strukturerade vi en databas (bestämde vilka tabeller och kolumner krävdes) och sedan diskterade om tema färger och typsnitt. För att sätta igång kodning delade vi upp uppdraget till tre olika delar: 1) Signup/login system, 2) blogg inläggnings system samt 3) like/comments system. Magnus byggde ett skellet (CSS styles) av webbsidan, och sedan lade vi in var sin kod till detta skellet. I kodnings fasen, förståd vi inte riktigt hur SESSION-variabler skulle funka, men när vi väl fattade detta, utnyttjade vi SESSION-variabler för att skicka med och dela data mellan olika filer.  
  
Flesta våra kommunikationer skedde på Slack, samt vi samlade in i klassrummet när det var möjligt. Vi körde dessutom scrum-möte ett par gånger i veckan. Vi hanterade versioner och delade koder genom GitHub.  
  
Utmaningar till denna uppgift var att man skulle skicka data med AJAX, och lägga upp / gömma datan beroende på kriterier (dvs tilläggat if-satser på php-filer) där man krävdes att förstå hur och vilka data skulle skickas och hämtas. Man skulle dessutom använda klasser vilka som fattas i vår javascript. Vi försörkte kapsla in funktionaliteter till metoder inom klasser för att åstadkomma "Dependency Injections".
  
### Källor
[Gif Loader Animation](http://www.ajaxload.info/)
[Fonts](https://fonts.google.com/)