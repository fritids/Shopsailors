<?php
if(!defined('SH_MARKER')){
    header('location: directCallForbidden.php');
}

$command = array (
  'titles' => 
  array (
    0 => 'Référence',
    1 => 'Produit',
    2 => 'PU TTC',
    3 => 'Qté',
    4 => 'Total TTC',
  ),
  'elements' => 
  array (
    0 => 
    array (
      0 => 'P218-02-15',
      1 => 'Barracuda 120',
      2 => '34,00',
      3 => '4',
      4 => '136,00',
    ),
    1 => 
    array (
      0 => 'nlnln',
      1 => 'Cinébox 400',
      2 => '2 323,00',
      3 => '5',
      4 => '11 615,00',
    ),
    2 => 
    array (
      0 => 'Joli90283',
      1 => 'Joliproduit',
      2 => '23 000,00',
      3 => '1',
      4 => '23 000,00',
    ),
    3 => 
    array (
      0 => 'ks cdksq',
      1 => 'Maxtor 330SE',
      2 => '27 392,00',
      3 => '2',
      4 => '54 784,00',
    ),
    4 => 
    array (
      0 => 'MAX-M120-230204-3',
      1 => 'Disque M120',
      2 => '175,00',
      3 => '4',
      4 => '700,00',
    ),
    5 => 
    array (
      0 => 'vhvhvhv',
      1 => 'vhhvvhvcdcd',
      2 => '0,00',
      3 => '1',
      4 => '0,00',
    ),
    6 => 
    array (
      0 => 'MAX-F230-23932-Z',
      1 => 'Disque F230',
      2 => '160,00',
      3 => '2',
      4 => '320,00',
    ),
    7 => 
    array (
      0 => 'P328-02-27',
      1 => 'CineBox 500',
      2 => '54,00',
      3 => '1',
      4 => '54,00',
    ),
    8 => 
    array (
      0 => 'P475-02-26',
      1 => 'CineBox 250',
      2 => '98,00',
      3 => '1',
      4 => '98,00',
    ),
    9 => 
    array (
      0 => 'P756-02-29',
      1 => 'CineBox 500',
      2 => '135,00',
      3 => '1',
      4 => '135,00',
    ),
    10 => 
    array (
      0 => 'P425-02-28',
      1 => 'CineBox 250',
      2 => '106,00',
      3 => '5',
      4 => '530,00',
    ),
    11 => 
    array (
      0 => '321',
      1 => 'Cinébox 2000',
      2 => '321,00',
      3 => '2',
      4 => '642,00',
    ),
    12 => 
    array (
      0 => '16f5d4svdf',
      1 => 'Cinébox 2200',
      2 => '54,00',
      3 => '1',
      4 => '54,00',
    ),
    13 => 
    array (
      0 => '132a-54x',
      1 => 'Machin chose',
      2 => '654,12',
      3 => '1',
      4 => '654,00',
    ),
    14 => 
    array (
      0 => '54',
      1 => ' hfg hfd ghdfg',
      2 => '45,00',
      3 => '2',
      4 => '90,00',
    ),
    15 => 
    array (
      0 => '132',
      1 => 'yuj uyj yu',
      2 => '654,00',
      3 => '1',
      4 => '654,00',
    ),
    16 => 
    array (
      0 => '132',
      1 => 'sqdsdcqsq fsdqfsdf',
      2 => '654,00',
      3 => '1',
      4 => '654,00',
    ),
    17 => 
    array (
      0 => 'P854-02-4',
      1 => 'Disque DiamondMax 250',
      2 => '139,00',
      3 => '4',
      4 => '556,00',
    ),
    18 => 
    array (
      0 => 'P162-02-12',
      1 => 'Barracuda 1000',
      2 => '140,00',
      3 => '2',
      4 => '280,00',
    ),
    19 => 
    array (
      0 => 'P1105-02-20',
      1 => 'DiamondMax 500',
      2 => '28,00',
      3 => '1',
      4 => '28,00',
    ),
    20 => 
    array (
      0 => 'P901-02-18',
      1 => 'DeskStar 1000',
      2 => '54,00',
      3 => '4',
      4 => '216,00',
    ),
    21 => 
    array (
      0 => 'P1148-02-16',
      1 => 'DeskStar 250',
      2 => '137,00',
      3 => '1',
      4 => '137,00',
    ),
    22 => 
    array (
      0 => 'P1470-02-17',
      1 => 'DeskStar 500',
      2 => '33,00',
      3 => '2',
      4 => '66,00',
    ),
    23 => 
    array (
      0 => 'P1490-02-19',
      1 => 'DiamondMax 250',
      2 => '48,00',
      3 => '2',
      4 => '96,00',
    ),
    24 => 
    array (
      0 => 'P327-02-21',
      1 => 'DiamondMax 1000',
      2 => '117,00',
      3 => '1',
      4 => '117,00',
    ),
    25 => 
    array (
      0 => 'P470-02-22',
      1 => 'SpinPoint 250',
      2 => '115,00',
      3 => '1',
      4 => '115,00',
    ),
    26 => 
    array (
      0 => 'P348-02-23',
      1 => 'Barracuda 250',
      2 => '118,00',
      3 => '1',
      4 => '118,00',
    ),
    27 => 
    array (
      0 => 'P238-02-24',
      1 => 'Barracuda 500',
      2 => '64,00',
      3 => '2',
      4 => '128,00',
    ),
    28 => 
    array (
      0 => 'P369-02-25',
      1 => 'Barracuda 1000',
      2 => '50,00',
      3 => '3',
      4 => '150,00',
    ),
    29 => 
    array (
      0 => 'P560-02-5',
      1 => 'DiamondMax 500',
      2 => '108,00',
      3 => '1',
      4 => '108,00',
    ),
    30 => 
    array (
      0 => 'P782-02-6',
      1 => 'DiamondMax 1000',
      2 => '53,00',
      3 => '1',
      4 => '53,00',
    ),
    31 => 
    array (
      0 => 'P1254-02-9',
      1 => 'SpinPoint 1000',
      2 => '116,00',
      3 => '5',
      4 => '580,00',
    ),
    32 => 
    array (
      0 => 'P1177-02-8',
      1 => 'SpinPoint 500',
      2 => '77,00',
      3 => '1',
      4 => '77,00',
    ),
    33 => 
    array (
      0 => 'P863-02-10',
      1 => 'Barracuda 250',
      2 => '81,00',
      3 => '1',
      4 => '81,00',
    ),
    34 => 
    array (
      0 => 'P467-02-7',
      1 => 'SpinPoint 250',
      2 => '99,00',
      3 => '2',
      4 => '198,00',
    ),
    35 => 
    array (
      0 => 'knknkn',
      1 => 'Son nom',
      2 => '8,00',
      3 => '1',
      4 => '8,00',
    ),
    36 => 
    array (
      0 => '132a-54x2',
      1 => 'Cinébox 2000',
      2 => '13,50',
      3 => '1',
      4 => '13,50',
    ),
    37 => 
    array (
      0 => 'Livraison',
      1 => 'UPS',
      2 => '0,00',
      3 => 1,
      4 => '0,00',
    ),
  ),
  'shippingAddressIntro' => 'Adresse de livraison :',
  'shippingAddress' => '',
  'totalHT' => '81 308,95€',
  'totalTTC' => '97 245,50€',
  'client' => 
  array (
    'name' => 'Parent Brice',
    'address' => 'Téléphone : 0442921737
E-mail : briceparent@free.fr',
  ),
  'seller' => 
  array (
    'name' => 'Websailors',
    'address' => '62, av Joannon
Les Palombes
13540 Puyricard',
  ),
  'author' => 'Websailors pour Websailors',
  'totalHTName' => 'Total HT : ',
  'totalTTCName' => 'Total TTC : ',
  'logo' => '/sites/websailors/sh_images/site/banner.jpg',
  'footer' => 'Websailors est une SARL SCOP au capital variable de 1000€ - Siège : 62 av. Joannon - Les Palombes - 13540 Puyricard
Tel: +33 6 81 21 05 56 - facturation@websailors.fr - Siren : 512310814 - RCS d\'Aix-en-Provence',
  'headLine' => 'Madame, Monsieur,
par la présente nous vous joignons la facture réalisée conformément à nos conditions générales de vente:',
  'fillColor' => 
  array (
    0 => 200,
    1 => 200,
    2 => 255,
  ),
  'billId' => 1015,
  'title' => 'Facture n°1015',
  'subject' => 'Facture du 17/09/2009 pour Parent Brice',
);