<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
require_once 'entity/personne.php';
/**
 * NE PAS TOUCHER LE CODE NE PAS TOUCHER LE CODE NE PAS TOUCHER LE CODE
 */
final class personneTest extends TestCase
{
  
    public function testConstructeur(): void
    {
        $this->expectException(TypeError::class);
        $personne = new Personne();
    }
    public function testConstructeur2(): void
    {
        $this->expectException(TypeError::class);
        $personne = new Personne('Thierry','BRU','24/10/1977','un formateur comme les autres');
    }
    public function testConstructeur3(): void
    {
        $this->expectException(TypeError::class);
        $personne = new Personne(42,'BRU',new DateTime('1977-10-24'),'un formateur comme les autres');
    }
    public function testConstructeur4(): void
    {
        $this->expectException(TypeError::class);
        $personne = new Personne('Thierry',42,new DateTime('1977-10-24'),'un formateur comme les autres');
    }
    public function testConstructeur5(): void
    {
        $this->expectException(TypeError::class);
        $personne = new Personne('Thierry','BRU',new DateTime('1977-10-24'),42);
    }
    public function testConstructeur6(): void
    {
        $testDate = new DateTime('1977-10-24');
        $personne = new Personne('Thierry','BRU',$testDate,'un formateur comme les autres');
        $this->assertSame('Thierry',$personne->prenom);
        $this->assertSame('BRU',$personne->nom);
        $this->assertSame($testDate,$personne->date);// c'est un objet, c'est la référence de l'objet que l'on compare, pas les valeurs
        $this->assertSame('un formateur comme les autres',$personne->resume);
    }

    public function testCreateur(): void
    {
        $jsonTest = '{
            "nom": "Petit",
            "prenom": "Isabelle",
            "date": "1989-05-23",
            "resume": "Isabelle est notre experte en UX/UI, avec un œil pour le design qui engage et convertit. Son travail sur l amélioration de l expérience utilisateur a eu un impact majeur sur la satisfaction de nos clients."
        }';
        $personne = Personne::create($jsonTest);
        $this->assertSame('Isabelle',$personne->prenom);
        $this->assertSame('PETIT',$personne->nom);
        $this->assertEquals(new DateTime('1989-05-23'),$personne->date);// c'est un objet, c'est la référence de l'objet que l'on compare, pas les valeurs
        $this->assertSame('Isabelle est notre experte en UX/UI, avec un œil pour le design qui engage et convertit. Son travail sur l amélioration de l expérience utilisateur a eu un impact majeur sur la satisfaction de nos clients.',$personne->resume);

    }



   
 
}