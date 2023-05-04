<?php 

$category = ['<i class="fa-solid fa-dog"></i>' , '<i class="fa-solid fa-cat"></i>'];




$crocchette = new Cibo('Edgard & Cooper Dog Adult Bio Organic Pollo e Tacchino', 58 , 'Edgard & Cooper Bio Organic al pollo e tacchino è un cibo secco per cani adulti glutine nei sacchi da 2.5kg e 7kg. Ricche di carne fresca di tacchino e pollo biologici allevati all aperto,', $category[0], './img/crocchette.webp', '25/07/2023', '5 kg' );
$kittenMice = new Gioco('Kong Kitten Mice', 4 , 'Gioco per gatti KONG Kitten Mice, ideale per divertenti colpetti con le zampe al fine di acciuffarlo.', $category[1], './img/kittenmice.webp', 'PUPPET' );
$cucciaIglò = new Cuccia('Cuccia Igloo Mimì per Gatto', 29 , 'Igloo Mimì di Trixie è una cuccia in peluche morbido che offre al tuo fatto un accogliente rifugio in cui dormire e poltrire a suo piacimento.', $category[1], './img/cucciaiglo.webp', 'COTTON', '43 X 35 X 35 CM' );
$aromaDog = new Gioco('Aromadog Bracco Testone Marrone', 10 , 'Aromadog Bracco Testone Marrone, morbido peluche per cane con squeacker che rilascia aromi terapeutici che aiutano a combattere l ansia da abbandono.', $category[0], './img/aromadog.webp' , 'PELUCHES' );
$croccantini = new Cibo('Hills Science Plan Cane Adult Agnello Riso', 69 , 'Hills Science Plan Cane Adult Agnello Riso è un cibo secco per cani adulti formulato per supportare la digestione e mantenere la massa muscolare. Contiene antiossidanti clinicamente testati e agnello altamente digeribile.', $category[0], './img/croccantini.webp', '02/10/2023', '2 kg' );
$beapher = new Cibo('Beaphar Lactol per Gattini', 11 , 'Beaphar Lactol è stato studiato appositamente da Beaphar per l allattamento dei gattini, fino allo svezzamento.', $category[1], './img/catlat.webp', '01/11/2023', '1 litro' );
$catpool = new Gioco('Piscina Pieghevole per Gatti', 14 , 'La piscina per gatti di Croci è un divertente gioco estivo che rinfrescherà il tuo micio durante le giornate più calde.', $category[1], './img/catpool.webp', 'PLASTIC');
$dogBall = new Gioco('Palla Galleggiante per Cane', 6 , 'Camon palla galleggiante è un divertente passa tempo per cane che lo farà divertire e tenere in movimento.', $category[0], './img/dogball.webp', 'PLASTIC');
$catfood = new Cibo('Virtus Cat Adult Natural Lattina', 2 ,'Trancetti per gatti adulti Virtus Nature Deep Sea Formula Tonno con Gamberetti. ', $category[1], './img/catfood.webp', '25/07/2024', '150g' );
$doghouse = new Cuccia('Cuccia Per Cani Woody', 450 , 'La cuccia Elbi è stata appositamente progettata a doppia parete per aumentarne notevolmente l isolamento termico.', $category[0], './img/doghouse.webp', 'PLASTIC', '87 X 129 X 103 CM');
$dogfood2 = new Cibo('Virtus Dog Protein Selection Patè Lattina', 2 , 'Virtus Dog Protein Selection al gusto Anatra, pregiato paté per cani preparato con proteine selezionate di prima qualità.', $category[0], './img/dogfood2.webp', '30/03/2024', '400g');
$doghouse2 = new Cuccia('Cuccia Poker Indi', 34 , 'Cuccia Poker Indi rettangolare morbida Indi realizzata per il 70% in cotone e per il 30% in poliestere, con interno in ovatta di poliestere siliconato.', $category[0], './img/doghouse2.webp', 'COTTON' , '53 X 53 X 23CM.');




?>