<?php

namespace App\Entite;
use App\Config\AbstractEntity;


abstract class Personne extends AbstractEntity
{
    protected int $id;
    protected string $nom;
    protected ?TYPE $type = null;

    public function __construct(int $id,string $nom,TYPE $type)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->type = $type;
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


    public function getNom()
    {
        return $this->nom;
    }


    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    public function getType()
    {
        return $this->type;
    }


    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    public static function toObject(array $data = [])
    {
        return null;
    }

    public function toJson(array $data = []): string
    {
        return json_encode($this->toArray());
    }

    public function toArray(): array
    {
        return [
            'id' => $this->getId(),
            'nom' => $this->getNom(),
            'type' => $this->getType()?->value,
        ];
    }


}
