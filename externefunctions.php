<?php
    
switch($_POST["betaalwijze"])
{
    case "visa" :
        $kosten = 10;
        break;
            
    case "Mastercard" :
         $kosten = 12;
         break;
                
    case "Paypal" :
         $kosten = 14;
         break;
                
    case "Ideal" :
         $kosten = 16;
         break;
              
        default:
        $kosten = 0;      
}

echo "<br>ServiceKosten zijn: $kosten";

function bestelRules($genre, $aantal)
