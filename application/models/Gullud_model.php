<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gullud_model extends CI_Model
{

    public function predict($berat_badan, $umur)
    {
        // Prediksi berat badan di masa depan berdasarkan berat badan optimal
        $umur2 = $umur / 12;
        // BBI anak usia 0-11 bulan = (usia (bulan) + 9) / 2. BBI anak usia 1-6 tahun = 2 x (usia tahun) + 8
        if ($umur2 >= 1) {
            $rumus = 2 * ($umur2) + 8;
            $rumus2 = 2 * (($umur + 1) / 12) + 8;
        } else {
            $rumus = ($umur + 9) / 2;
            $rumus2 = (($umur + 1) + 9) / 2;
        }
        $berat_badan_optimal = $rumus;
        $berat_badan_prediksi = $rumus2;

        return [
            'optimal' => round($berat_badan_optimal, 2),
            'prediksi' => round($berat_badan_prediksi, 2)
        ];
    }

    // Helper function for standard deviation
    function stats_standard_deviation($array)
    {
        $mean = array_sum($array) / count($array);
        $variance = 0;
        foreach ($array as $value) {
            $variance += pow($value - $mean, 2);
        }
        $variance /= count($array);
        return sqrt($variance);
    }
}
