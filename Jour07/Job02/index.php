<?php
function bonjour($jour)
{
    if ($jour) {
        echo "Bonjour";
    } else {
        echo "Bonsoir";
    }
}
// je l'appelle quand meme sinon ça sert quoi de la créer hh 
bonjour(false);
