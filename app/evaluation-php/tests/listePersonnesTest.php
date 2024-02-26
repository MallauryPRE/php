<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
require_once 'entity/personne.php';
require_once 'entity/listepersonnes.php';
/**
 * NE PAS TOUCHER LE CODE NE PAS TOUCHER LE CODE NE PAS TOUCHER LE CODE
 */

final class ListePersonnesTest extends TestCase
{
public function testCreateurListe(): void
    {
        $personnees = ListePersonnes::getListePersonnes('tests/personnes.json');
        $this->assertSame('Élodie',$personnees->liste[0]->prenom);
        $this->assertSame('MARTIN',$personnees->liste[0]->nom);
        $this->assertEquals(new DateTime('1985-04-12'),$personnees->liste[0]->date);// c'est un objet, c'est la référence de l'objet que l'on compare, pas les valeurs
        $this->assertSame('Élodie a commencé sa carrière dans le marketing avant de découvrir sa passion pour le développement web. Après plusieurs années à coder pour des startups, elle rejoint notre entreprise pour apporter son expertise en front-end.',$personnees->liste[0]->resume);
        
        $this->assertSame('Alexandre',$personnees->liste[1]->prenom);
        $this->assertSame('DUPONT',$personnees->liste[1]->nom);
        $this->assertEquals(new DateTime('1978-09-25'),$personnees->liste[1]->date);// c'est un objet, c'est la référence de l'objet que l'on compare, pas les valeurs
        $this->assertSame('Avec un fond solide en ingénierie logicielle, Alexandre a travaillé sur divers projets d infrastructure avant de se joindre à nous. Il aime relever des défis techniques complexes et contribue activement à notre architecture système.',$personnees->liste[1]->resume);

    }

}