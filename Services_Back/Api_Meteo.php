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
    
        echo '<div class="metteo row justify-content-center">
        <div class="col-xxl-7 col-lg-9 exter">
            <div class="inter">
            <div class="row justify-content-center gap">';
      
    
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
        // src='ressources/sunny-outline.svg'>
        // src='ressources/partly-sunny-outline.svg'
        // src='ressources/rainy-outline.svg'>
        // src='ressources/cloudy-outline.svg'>
        
        foreach ($days as $day => $count) {
            $averageTemperature = round($temperatures[$day] / $count);
            $weather = $averageTemperature > 15 ? "<i class='fas fa-sun'></i>" : "<img style='width: 39px;' src='ressources/icons-wether/cloudy-outline.svg'>";
            echo "<div class='col flex-column d-flex align-items-center justify-content-center'>
            <h6>{$day}</h6>
            <div>{$weather}</div>
            <h6>{$averageTemperature}°</h6>
        </div>"       ;    
       
        }
    
        echo "       </div>
        </div>
    </div>
    </div>";
    }

    private function convertDayToFrench($day) {
        $englishDays = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
        $frenchDays = array('Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche');
    
        $key = array_search($day, $englishDays);
    
        if ($key !== false) {
            return $frenchDays[$key];
        }
    
        return null;
    }
}

$api_key = 'f3021d8d67f574d4da86424bffc7d7b1';
$city = 'Vesoul';

$apiMeteo = new ApiMeteo($api_key, $city);
$apiMeteo->afficherDonnees();

?>

</body>
</html>

