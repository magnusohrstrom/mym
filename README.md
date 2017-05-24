<div align="center">
<h1>Simple Content Management System / Group Work</h1>
<h3>FEND16 : PHP, MySQL, CMS</h3>
<p align="center"><img src="images/favicon.png" alt="team logo"></p>
<h4>Magnus Öhrström, Yoko Andrae, Martin Clavin</h4>
</div>  

### Beskrivning om uppgiften
Uppdraget är att skapa en bloggapplikation skriven i PHP och MySQL som fungerar som ett mindre CMS där man kan lägga till, redigera och ta bort innehåll. Den ska även möjliggöra det för anvämndare att rösta på eller gilla innehållet.

### Arbetsflöde
Vi satte igång detta uppdrag med namngivning till vår grupp/projekt. Vi strukturerade sedan vår databas (bestämde vilka tabeller och kolumner krävdes), och därefter diskuterade vi tema, färger och typsnitt. Rent kodingsmässigt delade vi upp uppdraget till tre olika delar: **1) Signup/login system, 2) post system,** samt **3) like/comments system**. Magnus byggde ett skelett av webbsidan med ett enkelt upplägg. Sedan fick vaje gruppmedlem lägga till de delar man har jobbat med.  

Kommunikationen i projektet förekom mest på Slack, men vi träffades även i klassrummet ett par gånger för att enklare kunna stämma av vad som har gjorts, var vi låg i projektet och vad som behöver göras. Vid dessa tillfällen mergade vi också ofta de olika branches vi jobbade i. Detta gjorde det enkelt att avgöra vilket kod som skulle användas var.

Utmaningar till denna uppgift var att skicka och hämta data med AJAX, och lägga upp denna data på webbsidan eller gömma den beroende på kriterier (dvs tillagt flera if-satser på php-filerna) där det krävdes att man förstår hur och vilken data skulle skickas med och/eller hämtas. Vi försökte använda oss så mycket som möjligt utav klasser för att få hela projektet så objektorienterat som möjligt. Vi kapslade in mycket funktionallitet i dessa klasser för att lätt kunna hantera funktioner, databashantering eller liknande. Allt rörande ett visst objekt ligger då lite mer unlanlagt i en klass, men ändå lättåtkomligt.

### Huvudsakliga roller
- Magnus
    - Styling (CSS)
    - Like system
 - Yoko
    - Sign up / login system
- Martin
    - Posting system


### Viktiga punkter
Vår CMS-applikation har en tydlig struktur och därmed ett enkelt utseende. Den har ingen admin-sida utan är en "one page" applikation. När man loggar in som Admin kommer headerns/menyns för att vara blå istället för att indikera att en admin är inloggad. Då blir även adminrättigheter aktiverade.
  
**Sign-up systemet** låter användare att välja username och lösenord som är obligatoriska, firstname och lastname är valfria. JavaScript validerar om alla obligatoriska fält är ifyllda och lösenord stämmer överens med andra vid registering. Om det godkäns skickar scriptet datan till PHP. PHP validerar då om användarnamnet är ledigt, eller om det redan finns en användare med det användarnamnet. När användare loggar in validerar JavaScript om alla fält är ifyllda och skickar vidare till PHP när dessa är godkännda. I PHP kollas det om  användarnamnet och lösenordet stämmer samt retunerar boolean (true/false) för admin rättigheten, beroende på om användaren är admin eller ej. När en användare är inloggad kommer användarnamnet visas i menyn för att visa vem man är inloggad som.
  
**Post systemet**
Låter användare skapa posts om man är inloggad, altså om $_SESSION är igång. Alla användare kan även regigera sina posts och ta bort dem genom att klicka på knapper i posten. Dessa knappar visas bara om det är användaren själv som har skapat posten eller om man är inloggad som en adminanvändare.

**Like systemet**  
<<<<<< Magnus skriver >>>>>>

<hr>

### Style Guide
#### Tema-färger
![theme colors](images/mym-color.jpg)
![theme colors](images/mym-color2.jpg)

#### Typsnitt
Abel, Sans-serif (Headers & Titles)  
Playfair Display, Serif (Subsidiary Texts )

|  Working Area | Tools & Technologies |
|:-----:|:-----:|
|Style Guide|Photoshop|
|Stylesheet|Sass|
|Data Transform between files|jQuery, Ajax|
|Library|Bootstrap|
|Communication|Slack, Trello, Google Drive|
|Version Controll|Git, GitHub|
Localhost Mamp


### Källor
Gif Loader Animation: http://www.ajaxload.info/  
Google Fonts: https://fonts.google.com/
