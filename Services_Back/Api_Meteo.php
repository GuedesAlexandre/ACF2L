<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apimétéo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
<?php

class ApiMeteo {
    private $api_key;
    private $city;

    public function __construct($api_key, $city) {
        $this->api_key = $api_key;
        $this->city = $city;
    }

    public function getMeteoData() {
        $url = "http://api.openweathermap.org/data/2.5/forecast?q={$this->city}&appid={$this->api_key}&units=metric"; // Ajout de l'unité de mesure en Celsius
        $response = @file_get_contents($url);

        if ($response === false) {
            die('Erreur lors de la récupération des données météo.');
        }

        $data = json_decode($response, true);

        if ($data['cod'] != 200) {
            die('Erreur API: ' . $data['message']);
        }

        return $data['list'];
    }

    public function afficherDonnees() {
        $forecasts = $this->getMeteoData();
    
        echo "<table>";
        echo "<tr><th>Jour</th><th>Température moyenne (°C)</th></tr>";
    
        $days = array();
        $temperatures = array();
    
        foreach ($forecasts as $forecast) {
            $timestamp = $forecast['dt'];
            $date = date('Y-m-d', $timestamp);
            $temperature = round($forecast['main']['temp']);
    
<<<<<<< HEAD
            $day = date('l', $timestamp);
            
=======
            $day = date('l',$timestamp);
>>>>>>> 4fe3cdf6b76634eab62f63544467a951677af0a5
            $day_fr = $this->convertDayToFrench($day);
    
            if (!isset($days[$day_fr])) {
                $days[$day_fr] = 1;
                $temperatures[$day_fr] = $temperature;
            } else {
                $days[$day_fr]++;
                $temperatures[$day_fr] += $temperature;
            }
        }   
    
        foreach ($days as $day => $count) {
            $averageTemperature = round($temperatures[$day] / $count);
            $weather = $averageTemperature > 15 ? "<i class='fas fa-sun'></i>" : "<i class='fas fa-cloud'></i>";
            echo "<tr><td>{$day}</td><td>{$averageTemperature} {$weather}</td></tr>";
        }
    
        echo "</table>";
    }

    private function convertDayToFrench($day) {
        $englishDays = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
        $frenchDays = array('Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche');

        return str_replace($englishDays, $frenchDays, $day);
    }
}

$api_key = 'f3021d8d67f574d4da86424bffc7d7b1';
$city = 'Vesoul';

$apiMeteo = new ApiMeteo($api_key, $city);
$apiMeteo->afficherDonnees();

?>

</body>
</html>

