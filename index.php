<!-- Riscrivere questa pagina del sito google
https://policies.google.com/faq.
Ci sono diverse domande con relative risposte.
Gestire il “Database” e la visualizzazione di queste domande e risposte con PHP. -->
<?php 
    $faqs = [
        [
            'domanda' => 'Come state...',
            'risposta' => ['la recente..', 'da quando', 'per presentare...', 'nei prossimi...', 'quando cerchi...'],
        ],

        [
            'domanda' => 'Come fa...',
            'risposta' => ['Sappiamo..', 'siamo costantemente...', 'puoi leggere...', 'scopri quali...'],
        ],

        [
            'domanda' => 'Perchè il mio account è associato...',
            'risposta' => [
                'il tuo account...',
                'la società',
                'tieni presente che i servizi...',
                '<h5>Stabilire il paese associato al tuo account</h5>',
                'quando crei un nuovo...',
                'i viaggi frequenti solitamente...',
                'se il paese associato al tuo account...'
            ]
        ],

        [
            'domanda' => 'Come faccio...',
            'risposta' => 'I risultati di ricerca di Google....'
 
        ],

        [
            'domanda' => 'Quando faccio...',
            'risposta' => 'in alcuni casi si. Quando...',
        ]
    ];
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Faqs</title>
</head>
<body>
    <div class="container">
        <?php 
            foreach ($faqs as $faq) {
                echo '<h3>faq['domanda']</h3>';
            }
        ?>
    </div>
</body>
</html>