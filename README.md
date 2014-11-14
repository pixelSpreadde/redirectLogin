redirectLogin
=============

Das Contao Login Modul für FE-Mitglieder übermittelt leider keine eindeutige Identifikation. Dies führt dazu dass bei zwei Login Modulen das ausgeführt wird welches zuerst geladen wird. Hat dieses Modul nun z. B. eine Weiterleitungsseite und das zweite Modul nicht, über welches der Senden Button gedrückt wurde, führt dies dazu das der Nutzer umgeleitet wird obwohl dies eigentlich nicht gewünscht ist. Dieses Modul umgeht die Problematik und liefert im FORM_SUBMIT Feld die ID des Moduls mit so das eine eindeutige Identifikation des genutzten Moduls erfolgen kann und so die richtigen Einstellungen genutzt werden und nicht die des Login Moduls welches zuerst geladen wird.
