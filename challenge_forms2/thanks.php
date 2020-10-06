<?php


//VALIDATION

$errors = [];

if(empty($_POST['user_firstname'])) {
    $errors['firstname1'] = 'Je dois connaitre votre prénom';
}
if(empty($_POST['user_lastname'])) {
    $errors['lastname1'] = 'Je dois connaitre votre nom';
}
if(empty($_POST['subject'])) {
    $errors['subject1'] = 'Je dois connaitre le sujet de votre demande';
}
if(empty($_POST['user_mail'])) {
    $errors['mail1'] = 'Je dois connaitre votre mail pour vous contacter';
}elseif (!filter_var($_POST['user_mail'], FILTER_VALIDATE_EMAIL)) {
    $errors['mail2'] = "Votre adresse mail n'est pas valide";
}
if(empty($_POST['user_phoneNumber'])) {
    $errors['phone1'] = 'Je dois connaitre votre téléphone pour vous contacter';
}
if(empty($_POST['user_message'])) {
    $errors['message1'] = 'Merci de m\'en dire plus';
}


// REPONSE UTILISATEUR

if(empty($errors)){
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
} else {
    foreach ($errors as $errorMessage) {
        echo $errorMessage;
        ?>
        <br>
        <?php
    }
}
