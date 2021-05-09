<?php // Izvada php errorus mājaslapā
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!doctype html>
<link rel="stylesheet" href="style.css" />
<div class="row">
    <form action="" class="comments">
        <?php
        include 'DB.php'; // izsaucās fails no kura tiek iegūtas funkcijas
        $db = new DB('localhost', 'root', 'root', 'comment_section'); // izveidojam objektu no klases 'new DB'
        $db->fetchAll('comments'); // Kopēts no index.php, nezinu vai šeit vajadzīgs
        //fetchAll satur visas vērtības un tās ieraksta mainīgajā

        if (array_key_exists('update', $_GET)) {
            // Pārbaude - ja adrešu joslā ir update, tad formā pievienojam 'h3' un 'input' laukus
            $id = $_GET['update'];
            $user = $db->find($id); // Lai iegūtu vērtību izmantojam 'find'
            if ($user !== []) {
                echo "<h3><a href='/'>&lt;-</a> Atjauninam ierakstu ar id $id</h3>";
                echo "<input type='hidden' name='update-id' value='$id'>";
            }
        } else {
            $user = [];
        }
        ?>

        <label for="email">Email: </label>
        <input type="email" name="email" id="email" value="<?= text(@$user['email']); ?>">
        <!-- value: formā tiek ievietota user vērtība ar atslēgu email. 
        'text' funkcija pārbauda vai netiek ievietoti neatļauti html tagi -->

        <label for="message">Message: </label>
        <textarea name="message" id="message" value="<?= text(@$user['message']); ?>"></textarea>

        <button type="submit" class="btn btn--gold">Submit</button>
    </form>

    <?php
    if (
        array_key_exists('email', $_GET) &&
        array_key_exists('message', $_GET) &&
        is_string($_GET['email']) &&
        is_string($_GET['message'])
    ) {
        if (
            array_key_exists('update-id', $_GET) &&
            is_numeric($_GET['update-id'])
        ) {
            $db->update( // update funkcijas izsaukšana
                'comments',
                [
                    'id' => $_GET['update-id'],
                    'email' => $_GET['email'],
                    'message' => $_GET['message']
                ]
            );
        } else {
            $db->add( // add funkcijas izsaukšana
                'comments',
                [
                    'email' => $_GET['email'],
                    'message' => $_GET['message']
                ]
            );
        }
    }
    // print_r($_GET); // Mājaslapā izvada to ko satur masīvs $_GET(url joslas)

    if (array_key_exists('delete', $_GET)) { // sadaļā kurā izdzēšam ierakstus
        $id = (int) $_GET['delete'];
        $db->delete('comments', $id); // tiek izsaukta DB delete funckija
    }

    // Sadaļa kurā izvadās visi ieraksti izmantojot getAll funkciju
    foreach ($db->getAll() as $row) {
        echo "<p>";
        echo "<b>" . $row['id'] . "</b>";
        echo " email: " . text($row['email']);
        echo " message: " . text($row['message']);
        echo " <a href='?delete=" . $row['id'] . "'>delete</a>";
        echo " <a href='?update=" . $row['id'] . "'>update</a>";
        echo "</p>";
    }

    // Tiek definēta funkcija 'text', kura neatļauj mājaslapas lietotājam ievadīt html tagus
    function text($string)
    {
        return htmlentities($string);
    }
    ?>
</div>