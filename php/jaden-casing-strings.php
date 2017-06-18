<?php

function toJadenCase($string) 
{
   $string = ucwords(strtolower($string));
   return $string;
}