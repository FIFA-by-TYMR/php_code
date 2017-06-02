<?php

foreach ($_SESSION['matchSelect'] as $match){
    echo "
    <form action='../../app/addresult.php' method='post' class=' form-inline col-md-8 col-md-offset-2'>
        <div class='form-group addresult col-md-6'>
            <label for='TeamA' class='control-label'>Score ".$match['team_a']."</label>
            <input type='number' id='TeamA' placeholder='0' min='0' class='control-label input-sm pull-right col-md-2' name='TeamAScore' required>
        </div>
        <div class='form-group addresult col-md-6 pull-right'>
            <label for='TeamB' class='control-label pull-right '>Score ".$match['team_b']."</label>
            <input type='number' id='TeamB' placeholder='0' min='0' class='control-label input-sm col-md-2' name='TeamBScore' required>
        </div>
        <div class='form-group col-md-12 addresult'>
            <input type='submit' class='btn btn-success col-md-12' >
        </div>
    </form>
    ";
}
