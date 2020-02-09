<?php

$json = array(["src"=>"/img/img1.jpg", "desc"=> "descripcion1", "specs"=> ["spec11", "spec12", "spec13"]],
              ["src"=>"/img/img2.jpg", "desc"=> "descripcion2", "specs"=> ["spec21", "spec22"]]);

echo json_encode($json);