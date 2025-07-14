<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class CandidatureMaster extends Model
{
    protected $fillable = [
    'choix1', 'choix2', 'cin_passport', 'nom', 'prenom', 'nom_jeune_fille', 'sexe', 'date_naissance', 'nationalite',
    'adresse', 'pays', 'gouvernorat', 'ville', 'code_postal', 'telephone', 'email',
    'annee_bac', 'moyenne_bac', 'nb_redoublement', 'reussite_3ans', 'retrait_inscription', 'moyenne_diplome',
    'type_etablissement', 'nature_diplome', 'specialite', 'annee_diplome', 'situation_pro', 'nb_stages',
    'etudes_superieures'
];
}
