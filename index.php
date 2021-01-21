<?php

  $blocks = [
    [
      "question" => "Domanda blocco 1?",
      "answers" => [
        "
        La recente decisione della Corte di giustizia dell'Unione europea ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi.
        ",
        "
        Da quando questa decisione è stata pubblicata il 13 maggio 2014, abbiamo lavorato incessantemente per uniformarci a essa. Si tratta di una procedura complessa perché dobbiamo valutare ogni singola richiesta e effettuare un bilanciamento tra il diritto dell'individuo a controllare i suoi dati personali ed il diritto di tutti di conoscere e distribuire le informazioni.
        ",
        "
        Nei prossimi mesi lavoreremo a stretto contatto con le autorità per la protezione dei dati e con altre autorità per perfezionare il nostro approccio. La decisione della CGUE rappresenta un cambiamento significativo per i motori di ricerca. Siamo preoccupati per le sue conseguenze, ma riteniamo anche che sia importante rispettare la decisione della Corte e ci stiamo adoperando per predisporre una procedura conforme alla legge.
        ",
      ],
    ],
    [
      "question" => "Domanda blocco 2?",
      "answers" => [
        "Risposta 1 del blocco 2",
        "Risposta 2 del blocco 2",
        "Risposta 3 del blocco 2",
      ],
    ],
  ];

 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <!-- foglio di stile personale -->
     <link rel="stylesheet" href="css/style.css">
     <title>Google faq</title>
   </head>
   <body>
     <header></header>

     <main>
       <div id="wrapper">
       <?php foreach ($blocks as $block) { ?>

         <div class="block">
           <h3><?= $block["question"]; ?></h3>

           <?php foreach($block["answers"] as $answer) { ?>
             <p><?= $answer; ?></p>
           <?php } ?>

         </div>

       <?php } ?>


       </div>
     </main>
   </body>
 </html>
