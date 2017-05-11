<?php
    session_start();
    if (isset($_SESSION['logedIn']))
    {
        header("location: ../public/admin/admindex.php");
    }
    else
    {
        require(realpath(__DIR__) . '/templates/header.php');
    }
?>

    <div class="main-content">
        <div class="container">
            <div class="index_IMG">
                <img src="http://wacbeekendonk.nl/wp-content/uploads/2016/05/vriendschappelijk.png" alt="main_IMG" class="img-responsive center-block img-circle">
            </div>
            <div class="index_Beschrijving text-center">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus at blanditiis deleniti earum eos fugiat itaque labore minus necessitatibus non odio, praesentium quasi repellat totam unde! Ad autem consectetur esse.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi cupiditate esse harum hic molestiae praesentium quos. Dolor error fugiat harum, inventore, iure maiores nostrum odit quis quos rem sapiente voluptate.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid commodi culpa cupiditate delectus doloremque dolores eligendi enim facilis, fugit hic impedit ipsam laboriosam libero magni maiores, officiis quas, ullam voluptas.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim est fuga placeat recusandae reiciendis repellendus similique! Accusamus atque, consequuntur, cumque doloremque dolores ea id, iusto modi nemo provident totam voluptatem?</p>
            </div>
        </div>
    </div>

<?php require(realpath(__DIR__) . '/templates/footer.php');
