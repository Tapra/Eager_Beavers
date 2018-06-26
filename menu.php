<?php
/**
 * Created by PhpStorm.
 * User: Daniel Bratton
 * Date: 21/06/2018
 * Time: 10:09 PM
 */
$authenticated = true;
?>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Logo</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <?php
                /*open up extra menu items if logged in*/
                    if($authenticated === true){
                        echo "<li><a href='#'>Events</a></li>";
                        echo "<li><a href='#'>Friends</a></li>";
                        echo "<li><a href='#'>Groups</a></li>";
                    }
                    else{
                        echo "<li><a href='#'>Register</a></li>";
                    }
                ?>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php
                    /* display login for logged out users, and logout for logged in users - got it? */
                    if($authenticated === true){
                        echo "<li><a href='#'><span class='glyphicon glyphicon-log-in'></span> Logout</a></li>";
                    }
                    else{
                        echo "<li><a href='#'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>";
                    }
                ?>
            </ul>
        </div>
    </div>
</nav>
