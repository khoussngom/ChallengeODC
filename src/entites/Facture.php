<?php

namespace App\Entite;
use App\Config\AbstractEntity;
use DateTime;

class Facture extends AbstractEntity
{
    private int $id;
    private array $paiements;
    private DateTime $date;
    private float  $montant;
    private Statut $statut;
    public function __construct(int $id, array $paiements,$montant,$date,Statut $statut)
    {
        $this->id = $id;
        $this->paiements = $paiements;
        $this->statut = $statut;
        $this->montant = $montant;
        $this->date = $date;
    }
	


    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getPaiements()
    {
        return $this->paiements;
    }

    public function addPaiements($paiement)
    {
        $this->paiements [] = $paiement;
        
    }

    public function getStatut()
    {
        return $this->statut;
    }

    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

        public function getMontant()
    {
        return $this->montant;
    }


    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

        public function getDate()
    {
        return $this->date;
    }


    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

        public static function toObject(array $data)
    {
            $paiements = [];
            if (isset($data['paiements']) && is_array($data['paiements'])) {
                foreach ($data['paiements'] as $p) {
                    $paiements[] = is_array($p) ? Paiement::toObject($p) : $p;
                }
            }
            $statut = isset($data['statut']) ? Statut::from($data['statut']) : null;
            $montant = isset($data['montant']) ? $data['montant'] : null;
            $date = isset($data['date']) ? $data['date'] : null;
            $facture = new self(
                $data['id'] ?? 0,
                $paiements,
                $montant,
                $date,
                $statut
            );
            return $facture;
        }

    public function toArray(): array
    {
        return [
            'id' => $this->getId(),
            'paiements' => array_map(fn($p) => method_exists($p, 'toArray') 
                            ? $p->toArray() 
                            : $p, $this->getPaiements()),
            'statut' => $this->getStatut()?->value
        ];
    }




}