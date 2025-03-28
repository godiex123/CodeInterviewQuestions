<?php

require_once 'Nodes.php';

use PHP\SingleNode;

class LinkedList
{
    private ?SingleNode $head = null;

    public function add(mixed $data): void
    {
        $newNode = new SingleNode($data);
        if ($this->head === null) {
            $this->head = $newNode;
        } else {
            $currentNode = $this->head;
            while ($currentNode->next !== null) {
                $currentNode = $currentNode->next;
            }
            $currentNode->next = $newNode;
        }
    }

    public function delete(mixed $data): void
    {
        if ($this->head === null) return;

        if ($this->head->data === $data) {
            $this->head = $this->head->next;
            return;
        }

        $currentNode = $this->head;
        while ($currentNode->next !== null && $currentNode->next->data !== $data) {
            $currentNode = $currentNode->next;
        }

        if ($currentNode->next !== null) {
            $currentNode->next = $currentNode->next->next;
        }
    }

    public function show(): void
    {
        $currentNode = $this->head;
        while ($currentNode !== null) {
            echo $currentNode->data . ' -> ';
            $currentNode = $currentNode->next;
        }
        echo 'NULL\n';
    }
}

// Uso
$lista = new LinkedList();
$lista->add(1);
$lista->add(2);
$lista->add(3);
$lista->show(); // 1 -> 2 -> 3 -> NULL

$lista->delete(2);
$lista->show(); // 1 -> 3 -> NULL