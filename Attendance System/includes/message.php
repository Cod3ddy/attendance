<?php
if (isset($_SESSION['error'])):
?>

<div class="errorMessage">
    <p style="
    color: red;
    font-size: 13px;
    margin-left: 10px;
    margin-top: 5px;
    letter-spacing: 2px;
"><?= $_SESSION['error'];?></p>
</div>




<?php
    unset($_SESSION['error']);
    endif;
?>