<?php
/**
 * Created by PhpStorm.
 * User: marlon
 * Date: 29/12/18
 * Time: 05:22 PM
 */

namespace usecases\products;


class Commands
{


    const COMMAND_ADD = "Agregar";
    const COMMAND_SUB = "Restar";
    const COMMAND_ACTIVATE = "Activar";
    const COMMAND_INACTIVATE = "Desactivar";


    /**
     * @param string $csv
     * @return array
     */
    public function execute(string $csv): array
    {

        $rows = explode("\n", $csv);

        $errors = [];
        $row = 1;
        $commands = [];
        foreach ($rows as $command) {

            $column = explode(';', $command);

            if (!$this->columnIsValid($column)) {
                $errors[] = "Error en la fila $row. Registro incompleto.";
                continue;
            }

            $id = trim($column[0]);
            $nameCommand = trim($column[1]);
            $param = !empty($column[2]) ? trim($column[2]) : '';

            $commands [] = [
                'id' => $id,
                'name' => $nameCommand,
                'param' => $param,
            ];

            ++$row;
        }

        return [
            $commands, $errors,
        ];

    }

    /**
     * @param array $column
     *
     * @return bool
     */
    private function columnIsValid(array $column): bool
    {

        if (3 === \count($column) && ($column[1] == self::COMMAND_ADD || $column[1] == self::COMMAND_SUB)) {
            return true;
        }

        if (2 === \count($column) && ($column[1] == self::COMMAND_ACTIVATE || $column[1] == self::COMMAND_INACTIVATE)) {
            return true;
        }

        return false;
    }

}