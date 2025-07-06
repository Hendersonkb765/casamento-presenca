<?php 

namespace App\Services;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\App;

class  GeneratePdfService{

    public static function toGenerate($imageQrcode,$text,array $data ){
     
        $pdf = App::make('dompdf.wrapper');
        $guests = '';
        foreach($data as $guest){
                $guests .= $guest['name']. '<br>';
               
        }
        $html = <<<HTML
        


    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;600;700&family=Playfair+Display:wght@400;600&family=Lato:wght@300;400&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: white;
            font-family: 'Lato', sans-serif;
            padding: 0;
            margin: 0;
        }

        .invitation-card {
            background: white;
            border-radius: 20px;
            border: 3px solid #8B2635;
            max-width: 700px;
            width: 100%;
            padding: 40px 30px;
            text-align: center;
            position: relative;
            overflow: hidden;
            margin: 20px auto;
         
          
        }

        .invitation-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #8B2635, #A0394A, #8B2635);
        }

        .invitation-card::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #8B2635, #A0394A, #8B2635);
        }

        .decorative-border {
            border: 2px solid #8B2635;
            border-radius: 15px;
            padding: 30px 20px;
            margin: 10px;
            position: relative;
           
           
        }

      

        .decorative-border::before {
            left: 50%;
            transform: translateX(-50%);
        }

        .main-title {
            font-family: 'Dancing Script', cursive;
            font-size: 2.2rem;
            color: #8B2635;
            margin-bottom: 10px;
            font-weight: 700;
        }

        .couple-names {
            font-family: 'Playfair Display', serif;
            font-size: 1.8rem;
            color: #8B2635;
            margin: 20px 0;
            font-weight: 600;
            letter-spacing: 1px;
        }

        .family-info {
            font-size: 1.1rem;
            color: #666;
            margin-bottom: 25px;
            font-weight: 300;
        }

        .family-name {
            color: #8B2635;
            font-weight: 400;
            font-size: 1.2rem;
        }

        .qr-container {
            background: #f8f8f8;
            border-radius: 15px;
            padding: 20px;
            margin: 25px 0;
            border: 3px solid #8B2635;
            display: inline-block;
        }



        .instructions {
            font-size: 1rem;
            color: #555;
            margin: 20px 0 10px 0;
            line-height: 1.5;
        }

        .important-note {
            background: #8B2635;
            color: white;
            padding: 12px 20px;
            border-radius: 25px;
            font-size: 0.95rem;
            margin-top: 20px;
            font-weight: 300;
        }

        .decorative-flourish {
            font-size: 1.5rem;
            color: #8B2635;
            margin: 15px 0;
        }

        .date-location {
            font-size: 0.9rem;
            color: #777;
            margin-top: 15px;
            font-style: italic;
        }

        @media print {
            body {
                background: white !important;
            }
            
            .invitation-card {
                box-shadow: none;
                border: 2px solid #8B2635;
            }
        }

        .hearts-decoration {
            position: absolute;
            top: 15px;
            right: 15px;
            font-size: 12px;
            color: #8B2635;
            opacity: 0.3;
        }
        #confirmed{
            font: bold;
            background: #8C1C13;
            color: white;
        }
        .container-confirmed{
            background: #eee;
            padding:0px 0px 5px 0px 
        }
    </style>
    <div class="invitation-card">
        
        <div class="decorative-border">
            <h1 class="main-title">Convite Especial</h1>
            
            
            <h2 class="couple-names">Henderson & Gizelli</h2>
            
            <p class="family-info">
                Este convite pertence à<br>
                <span class="family-name">$text</span>
            </p>
            
            <div class="qr-container">
                <img src="{$imageQrcode}" style="width: 350px; height: 350px; border-radius: 10px;">
            </div>
            
            <div class="container-confirmed">
                <p class="message" id="confirmed" style="font: bold;">
                        Confirmado a Presença
                </p>
                <p class="message" >
                        $guests
                </p>
            </div>
            <p class="instructions">
                <strong>Apresente este QR Code na entrada do casamento</strong>
            </p>
            
            
            <div class="important-note">
                Guarde este convite com carinho
            </div>
            
            <p class="date-location">
                Um momento especial para celebrarmos juntos
            </p>
        </div>
    </div>
</html>
HTML;
        $pdf->loadHTML($html);
        return $pdf;
    }
}