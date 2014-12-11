<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of querystring
 *
 * @author thienbinh
 */
 $firstName = "John";
 $homePage = "http://www.example.com/";
 $favoriteSport = "Ice Hockey";
 $queryString = "firstName=" . urlencode( $firstName ) . "&amp;homePage=" . urlencode( $homePage ) . "&amp;favoriteSport=" . urlencode( $favoriteSport );
 echo '<p><a href="moreinfo.php?' . $queryString . '">Find out more info on this person</a></p>';
 
 $fields = array (
   "firstName" => "John",
   "homePage" => "http://www.example.com/",
   "favoriteSport" => "Ice Hockey"
 );
 var_dump(htmlspecialchars(http_build_query($fields)));exit();
 echo '<p><a href="moreinfo.php?' . htmlspecialchars( http_build_query ( $fields ) ) . '">Find out more info on this person</a></p>';