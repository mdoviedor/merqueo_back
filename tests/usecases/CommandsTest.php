<?php
/**
 * Created by PhpStorm.
 * User: marlon
 * Date: 29/12/18
 * Time: 07:54 PM
 */

namespace Tests\usecases;


use Tests\TestCase;
use usecases\products\Commands;

class CommandsTest extends TestCase
{

    public function test_success()
    {
        $uc = new Commands();

        $csv = `
                1;Agregar;1000
       1;Activar
        2;Restar;10
        2;Desactivar
        `;

        $result = $uc->execute($csv);

        $this->assertEquals([
            [
                [
                    'id' => '1',
                    'name' => 'Agregar',
                    'param' => '1000',
                ],
                [
                    'id' => '1',
                    'name' => 'Activar',
                    'param' => '',
                ],
                [
                    'id' => '2',
                    'name' => 'Restar',
                    'param' => '10',
                ],
                [
                    'id' => '2',
                    'name' => 'Desactivar',
                    'param' => '',
                ]
            ],
            []
        ], $result);
    }

}