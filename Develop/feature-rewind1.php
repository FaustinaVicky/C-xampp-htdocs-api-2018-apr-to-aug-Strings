<?php
/*
  Consider the following string(bbit3b.txt)
  It contains a quote,the author(surname,first_name second_name),date and the url_reference
  @Required
  1. Create a new branch from the develop branch called feature-rewind-1
  2. Display the following data as follows (NB: The author's  first_name can be clicked to open the url_reference on a new tab)
      (a). "Quote" - first_name second_name,surname (YEAR).
      (b). .......
      (c). .......
      (For example                                                                                                  *
        a) "The worth and excellency of a soul is to be measured by the object of its love." -  HENRY P,SCOUGAL (1678).                                      *
      )
    Summary
     -- Total quotes : total.
     -- Total unique authors : total(list of author surnames - comma separated)
  3. Commit changes of the new branch
  4. Merge changes with the development branch
  5. Push the changes to your repo.
  6. Submit the github url on google classroom (Check Quiz 1 3B)
 */
$bbit3b=  "'Joy is the serious business of heaven.'.LEWIS,CLIVE STAPLES.1964-01-01.https://bit.ly/2HwPJd6
|'We weren't meant to be somebody--we were meant to know Somebody'.PIPER,JOHN STEPHEN.2011-07-17.https://bit.ly/2r31InJ|'He who sings prays twice.'Hipponensis,Aurelius Augustinus.430-02-30.https://bit.ly/2JwSHuH
|'The task of the modern educator is not to cut down jungles but to irrigate deserts.'.LEWIS,CLIVE STAPLES.1943-09-23.https://bit.ly/2HwPJd6
|'There is not one blade of grass, there is no color in this world that is not intended to make us rejoice.'1530-10-09.https://www.brainyquote.com/authors/john_calvin|
'The worth and excellency of a soul is to be measured by the object of its love.'.SCOUGAL,HENRY P.1678-08-23.https://bit.ly/2Kh1VMR
|'It is not the strength of your faith but the object of your faith that actually saves you.'.KELLER,TIMOTHY J.2013-01-14.https://bit.ly/2I0WocO
|'Truth is the agreement of our ideas with the ideas of God.'.Edwards,Jonathan Prtn.1703-09-23.https://bit.ly/2HSMz2U
|'Each day we are becoming a creature of splendid glory or one of unthinkable horror.'.LEWIS,CLIVE STAPLES.1952-02-01.https://bit.ly/2HwPJd6|'At your right hand are pleasures evermore..'.David,Jesse soun.1200-09-29.https://www.google.com|'Tolerance isn't about not having beliefs. It's about how your beliefs lead you to treat people who disagree with you.'KELLER,TIMOTHY J.2015-10-23.https://bit.ly/2I0WocO
|'It is better to lose your life than to waste it.'.PIPER,JOHN STEPHEN.2000-05-33.https://bit.ly/2r31InJ|
'It is not opinions that man needs: it is TRUTH...'.1885-02-12.https://www.goodreads.com/author/quotes/133605.Horatius_Bonar|
'Nothing could be more irrational than the idea that something comes from nothing.'SPROUL,CHARLES ROBERT.2006-03-23.https://bit.ly/2HQ4TJV
|'He is no fool who gives what he cannot keep to gain that which he cannot lose.'Elliot,James Phillip.1944-07-26.https://www.brainyquote.com/authors/jim_elliot
";


$bt3b = explode("|",$bbit3b);
 foreach ($bt3b as $line ) {
   echo $line;
 }
/*
$bit3b= explode(".",$bt3b);
 $b=array_chunk($bit3b,3);
 echo "<ol>";
 $quote;
 $first_name;
 $second_name;
 $surname;
 $year_name;

 foreach ($b as $a) {

   echo "<li>";
   foreach ($a as $key=>$value) {

          if ($key==0) {
            // code...
            $st=explode(",",$value);
            $stq=explode(" ",$st[1]);
            $st1=substr_replace($value,", ".substr($value,0,strpos($value,',')),-1);

            $st1=$stq[1]." ".$stq[0].", ".$st[0];
            $value=$st1;
     echo "{$value} ";
          }
          if ($key==3) {
            $value="(#".$value." " . $phone. " [".$country."])";
         echo "{$value} ";
          }
*/
