<!-- Snack 5 -->
<!-- Prendere un paragrafo abbastanza lungo, contenente diverse frasi. 
Prendere il paragrafo e suddividerlo 
in tanti paragrafi. Ogni punto un nuovo paragrafo. -->

<?php

$text = 'Il Lonfo non vaterca né gluisce
        e molto raramente barigatta,
        ma quando soffia il bego a bisce bisce
        sdilenca un poco e gnagio s’archipatta.

        È frusco il Lonfo! È pieno di lupigna
        arrafferia malversa e sofolenta!
        Se cionfi ti sbiduglia e ti arrupigna
        se lugri ti botalla e ti criventa.
        Eppure il vecchio Lonfo ammargelluto
        che bete e zugghia e fonca nei trombazzi
        fa lègica busìa, fa gisbuto.';

$p = explode('.', $text);

var_dump($p);

?>
