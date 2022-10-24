<?php

namespace App\Covoiturage\Model\DataObject;

class Section
{
    private String $section;
    private String $titre;
    private String $texteExplicatif;
    private int $numero;
    private $texteReponse;
    private Question $idQ;


    /**
     * @param String $section
     * @param String $titre
     * @param String $texteExplicatif
     * @param int $numero
     * @param $texteReponse
     * @param Question $idQ
     */
    public function __construct(string $section, string $titre, string $texteExplicatif, int $numero, $texteReponse, Question $idQ)
    {
        $this->section = $section;
        $this->titre = $titre;
        $this->texteExplicatif = $texteExplicatif;
        $this->numero = $numero;
        $this->texteReponse = $texteReponse;
        $this->idQ = $idQ;
    }

    /**
     * @return String
     */
    public function getSection(): string
    {
        return $this->section;
    }

    /**
     * @param String $section
     */
    public function setSection(string $section): void
    {
        $this->section = $section;
    }

    /**
     * @return String
     */
    public function getTitre(): string
    {
        return $this->titre;
    }

    /**
     * @param String $titre
     */
    public function setTitre(string $titre): void
    {
        $this->titre = $titre;
    }

    /**
     * @return String
     */
    public function getTexteExplicatif(): string
    {
        return $this->texteExplicatif;
    }

    /**
     * @param String $texteExplicatif
     */
    public function setTexteExplicatif(string $texteExplicatif): void
    {
        $this->texteExplicatif = $texteExplicatif;
    }

    /**
     * @return int
     */
    public function getNumero(): int
    {
        return $this->numero;
    }

    /**
     * @param int $numero
     */
    public function setNumero(int $numero): void
    {
        $this->numero = $numero;
    }

    /**
     * @return mixed
     */
    public function getTexteReponse()
    {
        return $this->texteReponse;
    }

    /**
     * @param mixed $texteReponse
     */
    public function setTexteReponse($texteReponse): void
    {
        $this->texteReponse = $texteReponse;
    }

    /**
     * @return Question
     */
    public function getIdQ(): Question
    {
        return $this->idQ;
    }

    /**
     * @param Question $idQ
     */
    public function setIdQ(Question $idQ): void
    {
        $this->idQ = $idQ;
    }




}