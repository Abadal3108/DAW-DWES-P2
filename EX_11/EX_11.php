<?php
function mayus($palabra)
{

    if (ctype_upper($palabra)
    ) {
        echo "Todo son mayus";
    } elseif(ctype_lower($palabra)) {
        echo "todas mins";
    }else{
        echo "diferentes";
    }
}

mayus("LAW");
?>
