<?php
echo 'Merci ' . $_POST['user_firstname'] . ' ' . $_POST['user_lastname'] . ' de nous avoir contacté à propos de " ' . $_POST['subject'] . ' ".';
?>
<br>
<br>
<?php
echo 'Un de nos conseiller vous contactera soit à l’adresse ' . $_POST['user_mail'] . ' ou par téléphone au ' . $_POST['user_phoneNumber'] . ' dans les plus brefs délais pour traiter votre demande :';
?>
<br>
<br>
<?php
echo $_POST['user_message'];

