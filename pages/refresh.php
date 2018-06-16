<?php
$lang = isset($_GET["la"]) ? $_GET["la"] : 'en';

echo '
    <script>
        // similar behavior as clicking on a link
        window.location.href = "index.php?page=blog&la='.$lang.'";
    </script>
';