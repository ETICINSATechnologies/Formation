<?php

$db = new PDO('mysql:host = localhost;dbname=bdbibliotheque', 'root', '');

$messages = array();

$recup_messages = $db->query("SELECT *FROM tablecomm ORDER by id DESC");

while($all = $recup_messages->fetch()){
    $messages[] = $all;
}

foreach ($messages as $message) {
    ?>
    <section>
        <h4><?php echo $message['titre'] ?></h4>
        <?php echo $message['comm'] ?></br>
        de : <?php echo $message['pseudo'] ?></br>
        le : <?php echo $message['date'] ?>
        <hr/>

    </section>

    <?php
}

?>