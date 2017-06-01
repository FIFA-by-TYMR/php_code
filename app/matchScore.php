<?php

foreach ($_SESSION['matchSelect'] as $match){
    echo "
    <form action='' method='' class='form-horizontal form-inline col-md-8 col-md-offset-2'>
        <div class='form-group addresult col-md-6'>
            <label for='TeamA' class='control-label col-md-10'>Score ".$match['team_a']."</label>
            <input type='number' id='TeamA' placeholder='0' min='0' class='col-md-2 input-sm' name='TeamAScore' required>
        </div>
        <div class='form-group addresult col-md-6'>
        <label for='TeamA' class='control-label pull-right '>Score ".$match['team_b']."</label>
            <input type='number' id='TeamA' placeholder='0' min='0' class='col-md-2 input-sm pull-right ' name='TeamBScore' required>
        </div>
        <div class='form-group col-md-12 addresult'>
            <input type='submit' class='btn btn-success col-md-12' >
        </div>
    </form>
    ";
}
