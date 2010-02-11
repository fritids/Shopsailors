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
      3 => '1',
      4 => '34,00',
    ),
    1 => 
    array (
      0 => 'P782-02-6',
      1 => 'DiamondMax 1000',
      2 => '53,00',
      3 => '3',
      4 => '159,00',
    ),
    2 => 
    array (
      0 => 'Livraison',
      1 => 'A l\'adresse ci-dessous',
      2 => '0,00',
      3 => 1,
      4 => '0,00',
    ),
  ),
  'customerService' => 
  array (
    0 => 'Service Client :',
    1 => '04 92 81 42 32',
    2 => 'service-client@maboutique.com',
  ),
  'billingAddressIntro' => 'Adresse de facturation :',
  'billingAddress' => 
  array (
    0 => 'Brice Parent',
    1 => '',
    2 => '13290 Les Milles',
  ),
  'shippingAddressIntro' => 'Adresse de livraison :',
  'shippingAddress' => 
  array (
    0 => '6 rue St Pons',
    1 => '13290 Les Milles',
  ),
  'totalHT' => '161,38€',
  'totalTTC' => '193,00€',
  'client' => 
  array (
    'id' => '9040100001',
    'name' => 'Pascal VAN DOERSOELLAER',
    'address' => 'N° client : 9040100001
0442921737
briceparent@free.fr',
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
  'footer' => 'Websailors - SARL SCOP au capital variable de 1000€ - Siège : 62 av. Joannon - Les Palombes - 13540 Puyricard
Tel: +33 6 81 21 05 56 - facturation@websailors.fr - Siren : 512310814 - RCS d\'Aix-en-Provence',
  'headLine' => 'Madame, Monsieur,
par la présente nous vous joignons la facture réalisée conformément à nos conditions générales de vente:',
  'fillColor' => 
  array (
    0 => 153,
    1 => 204,
    2 => 204,
  ),
  'billId' => 1058,
  'title' => 'Facture n°1058',
  'subject' => 'Facture du 22/09/2009 pour Pascal VAN DOERSOELLAER',
);