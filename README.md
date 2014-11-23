# redirectLogin #

Das Contao Login Modul für FE-Mitglieder übermittelt leider keine eindeutige Identifikation. Dies führt dazu dass bei zwei Login Modulen das ausgeführt wird welches zuerst geladen wird. Hat dieses Modul nun z. B. eine Weiterleitungsseite und das zweite Modul nicht, über welches der Senden Button gedrückt wurde, führt dies dazu das der Nutzer umgeleitet wird obwohl dies eigentlich nicht gewünscht ist.

Dieses Modul umgeht die Problematik und liefert im FORM_SUBMIT Feld die ID des Moduls mit so das eine eindeutige Identifikation des genutzten Moduls erfolgen kann und so die richtigen Einstellungen genutzt werden und nicht die des Login Moduls welches zuerst geladen wird.

## Wir freuen uns über Spenden ##

Wir würden uns freuen wenn Sie, der dieses ContentElement für Contao einsetzt, unsere Arbeit honorierst. Deshalb spende Sie doch einfach einen kleinen Beitrag per Paypal oder Sofortüberweisung.

Weitere Informationen dazu finden Sie auf http://contao.kitchen/de/spenden.html

## Contao Erweiterungen von pixelSpread.de aus der contao.kitchen ##

Wenn Sie individuelle Contao Erweiterungen brauchen werden wir gerne für Sie tätig. Schreiben Sie uns eine E-Mail an rezepte@contao.kitchen. Wir freuen uns auf Ihre Nachricht.

## Wie Sie uns kontaktieren können ##

Gerne helfen wir Ihnen in allen Fragen rund um Contao. Dazu rufen Sie uns doch einfach an oder senden Sie uns eine E-Mail. Unsere Kontaktdaten gibt es hier.

pixelSpread.de // contao.kitchen  
Inh. Sascha Brandhoff  
hallo@pixelSpread.de | hilfe@contao.kitchen  
http://pixelSpread.de | http://contao.kitchen  
Phone: 0641-35099863 
