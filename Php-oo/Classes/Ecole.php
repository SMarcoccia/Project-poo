<?php

namespace Classes;

class Ecole
{
    private string $nom;
    private string $adresse;
    private int $effectif;
    private string $directeur;
    private mixed $classes;

    
    public function __construct(string $nom, string $adresse, int $effectif, string $directeur)
    {
        $this->nom = $nom;
        $this->adresse = $adresse;
        $this->effectif = $effectif;
        $this->directeur = $directeur;
        $this->classes=[];
    }
    
    public function __destruct()
    {
        echo '<hr><h2>Destruction ' . $this->nom . '</h2>';
    }

    public function setNom(string $nom)
    {
        $this->nom = $nom;
    }

    public function setAdresse(string $adresse)
    {
        $this->adresse = $adresse;
    }

    public function setEffectif(int $effectif)
    {
        $this->effectif = $effectif;
    }

    public function setDirecteur(string $directeur)
    {
        $this->directeur = $directeur;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function getAdresse(): string
    {
        return $this->adresse;
    }

    public function getEffectif(): int
    {
        return $this->effectif;
    }

    public function getDirecteur(): string
    {
        return $this->directeur;
    }

        /**
     * getClasses
     *
     * @return array
     */
    public function getClasses(): array
    {
        return $this->classes;
    }
    
    /**
     * setClasses
     *
     * @param  array $classes
     * @return void
     */
    public function setClasses(array $classes): void
    {
        $this->classes = $classes;
    }

    /**
     * addClass
     *
     * @param  mixed $classe
     * @return void
     */
    public function addClasses(Classe $classe): void
    {
        if (!in_array($classe, $this->classes)) {
            $this->classes[] = $classe;
        }
    }
}
