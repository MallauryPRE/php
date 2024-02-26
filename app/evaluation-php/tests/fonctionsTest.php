<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
require_once 'fonctions.php';
/**
 * NE PAS TOUCHER LE CODE NE PAS TOUCHER LE CODE NE PAS TOUCHER LE CODE
 */

final class fonctionsTest extends TestCase
{
    #REGION routingPage
    public function testroutingHomeBadParameters(): void
    {
        $this->expectException(TypeError::class);
        $pageToShow = routingPage('yolo');   
    }
    public function testroutingHomeEmptyParameters(): void
    {
        $this->expectException(ArgumentCountError::class);
        $pageToShow = routingPage();   
    }
    public function testroutingHomeParameterEmptyArray(): void
    {
        $this->expectException(TypeError::class);
        $parameterFromGet = routingPage([]);   
        $pageToShow = routingPage($parameterFromGet); 
    }
    public function testRoutingEmptyRoute():void
    {
        $parameterFromGet=['page'=>''];
        $pageToShow = routingPage($parameterFromGet); 
        $this->assertSame('home', $pageToShow);
    }
    public function testRoutingHomeRoute():void
    {
        $parameterFromGet=['page'=>'home'];
        $pageToShow = routingPage($parameterFromGet); 
        $this->assertSame('home', $pageToShow);
    }
    public function testRoutingListRoute():void
    {
        $parameterFromGet=['page'=>'list'];
        $pageToShow = routingPage($parameterFromGet); 
        $this->assertSame('list', $pageToShow);
    }
    public function testRoutingDetailRoute():void
    {
        $parameterFromGet=['page'=>'details'];
        $pageToShow = routingPage($parameterFromGet); 
        $this->assertSame('details', $pageToShow);
    }
    public function testRoutingNotExistingRoute():void
    {
        $parameterFromGet=['page'=>'pageinconnue'];
        $pageToShow = routingPage($parameterFromGet); 
        $this->assertSame('home', $pageToShow);
    }
    #REGION END

    public function testParamResearchEmpty():void
    {
        $params = getParamSearch([]);
        $this->assertSame('',$params);
    }
    public function testParamResearchCorrects():void
    {
        $params = getParamSearch(['nom'=>'MARTIN']);
        $this->assertSame('MARTIN',$params);
    }
    #REGION showPahe
    public function testShowPageEmptyParameters(): void
    {
        $this->expectException(ArgumentCountError::class);
        $viewContent = showPage();   
    }
    public function testShowPageincorrectPageParameters(): void
    {
        $this->expectException(ParseError::class);
        $viewContent = showPage('page.dont.exist.php');  
       
    }

    public function testShowPageCorrectPageParameters(): void
    {
        // attention le chemin d'acces qui compte est celui par rapport à la position de fonctions.php
        $viewContent = showPage('./tests/view/test.template.php');  
        $this->assertSame('<h1>bravo</h1>',$viewContent) ;
       
    }

}