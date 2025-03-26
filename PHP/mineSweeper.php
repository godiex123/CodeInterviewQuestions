<?php

/**
 * Let's play the minesweeper game (Wikipedia, online game)!
 *
 * You are given an m x n char matrix board representing the game board where:
 *
 * 'M' represents an unrevealed mine,
 * 'E' represents an unrevealed empty square,
 * 'B' represents a revealed blank square that has no adjacent mines (i.e., above, below, left, right, and all 4 diagonals),
 * digit ('1' to '8') represents how many mines are adjacent to this revealed square, and
 * 'X' represents a revealed mine.
 * You are also given an integer array click where click = [clickr, clickc] represents the next click position among all the unrevealed squares ('M' or 'E').
 *
 * Return the board after revealing this position according to the following rules:
 *
 * If a mine 'M' is revealed, then the game is over. You should change it to 'X'.
 * If an empty square 'E' with no adjacent mines is revealed, then change it to a revealed blank 'B' and all of its adjacent unrevealed squares should be revealed recursively.
 * If an empty square 'E' with at least one adjacent mine is revealed, then change it to a digit ('1' to '8') representing the number of adjacent mines.
 * Return the board when no more squares will be revealed.
 *
 * Example 1
 * Input: board = [["E","E","E","E","E"],["E","E","M","E","E"],["E","E","E","E","E"],["E","E","E","E","E"]], click = [3,0]
 * Output: [["B","1","E","1","B"],["B","1","M","1","B"],["B","1","1","1","B"],["B","B","B","B","B"]]
 *
 * Example 2
 * Input: board = [["B","1","E","1","B"],["B","1","M","1","B"],["B","1","1","1","B"],["B","B","B","B","B"]], click = [1,2]
 * Output: [["B","1","E","1","B"],["B","1","X","1","B"],["B","1","1","1","B"],["B","B","B","B","B"]]
 */
class Solution
{
    private const DIRECTIONS = [
        [-1, 0], // Top
        [-1, 1], // Top right diagonal
        [0, 1], // Right
        [1, 1], // Lower right diagonal
        [1, 0], // Low
        [1, -1], // Lower left diagonal
        [0, -1], // Left
        [-1, -1] // Top left diagonal
    ];

    private int $lengthOfRows;
    private int $lengthOfColumns;

    function updateBoard(array $board, array $click): array
    {
        if ($board[$click[0]][$click[1]] === 'M') {
            $board[$click[0]][$click[1]] = 'X';
            return $board;
        }

        $this->lengthOfRows = count($board);
        $this->lengthOfColumns = count($board[0]);
        $this->bfs($board, $click);
        return $board;
    }

    private function bfs(&$board, $click): void
    {
        // Estructura de datos en cola
        $queue = new SplQueue();
        $queue->enqueue($click);
        // Mientras la cola no este vacía
        while (!$queue->isEmpty()) {
            [$cx, $cy] = $queue->dequeue();

            if ($board[$cx][$cy] !== 'E') continue;

            $mines = 0;
            $adjacents = [];

            foreach (self::DIRECTIONS as [$dx, $dy]) {
                // nuevas posiciones
                $nx = $cx + $dx; // Ex1: 3 - 1 = 2
                $ny = $cy + $dy; // Ex1: 0 + 0 = 0

                // Aquí validamos que no se salga de las dimensiones de las matrices
                if ($nx >= 0 && $ny >= 0 && $nx < $this->lengthOfRows && $ny < $this->lengthOfColumns) {
                    if ($board[$nx][$ny] === 'M') {
                        $mines++;
                    } else {
                        $adjacents[] = [$nx, $ny];
                    }
                }
            }

            if ($mines > 0) {
                $board[$cx][$cy] = (string) $mines;
            } else {
                $board[$cx][$cy] = 'B';
                // Se insertan las nuevas posiciones a revelar
                foreach ($adjacents as $adj) $queue->enqueue($adj);
            }
        }
    }
}

$solution = new Solution();
$board = [
    ["E","E","E","E","E"],
    ["E","E","M","E","E"],
    ["E","E","E","E","E"],
    ["E","E","E","E","E"]
];
$click = [3,0];
print_r($solution->updateBoard($board, $click));