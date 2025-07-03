<?php

namespace App\Entite;

enum TYPE:string{
    case CLIENT = 'Client';
    case VENDEUR = 'Vendeur';
}

enum Statut:string
{
    case PAYE = 'Payé';
    case IMPAYE = 'Impayé';
}