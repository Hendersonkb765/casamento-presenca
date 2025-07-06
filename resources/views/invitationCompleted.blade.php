
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmação de Pedido - Nosso Casamento</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;1,400&family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="icon" href="{{asset('storage/images/aliancas-de-casamento.ico')}}" type="image/x-icon"/>

    <style>
       * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #FFF9F9;
            color: #333;
            line-height: 1.6;
        }
        
        .container {
            width: 100%;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        
        .header {
            text-align: center;
            margin-bottom: 30px;
            width: 100%;
        }
        
        .title {
            font-family: 'Playfair Display', serif;
            color: #8C1C13; /* Marsala */
            font-size: 2.5rem;
            margin-bottom: 5px;
        }
        
        .subtitle {
            font-style: italic;
            color: #666;
        }
        
        .card {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 100%;
            max-width: 600px;
            position: relative;
        }
        
        .card-header, .card-footer {
            height: 10px;
            background-color: #8C1C13; /* Marsala */
        }
        
        .card-content {
            padding: 40px 30px;
            text-align: center;
        }
        
        .check-icon {
            width: 70px;
            height: 70px;
            margin: 0 auto 20px;
            color: #4CAF50;
        }
        
        .card-title {
            font-family: 'Playfair Display', serif;
            color: #8C1C13; /* Marsala */
            font-size: 2rem;
            margin-bottom: 20px;
        }
        
        .message {
            font-size: 1.1rem;
            margin-bottom: 20px;
        }
        
        .highlight {
            border-top: 1px solid #eee;
            border-bottom: 1px solid #eee;
            padding: 20px 0;
            margin: 30px 0;
        }
        
        .highlight-text {
            font-size: 1.2rem;
            margin-bottom: 5px;
        }
        
        .details {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
            text-align: left;
            margin-top: 30px;
        }
        
        .details-title {
            font-family: 'Playfair Display', serif;
            color: #8C1C13; /* Marsala */
            font-size: 1.3rem;
            margin-bottom: 15px;
        }
        
        .details-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }
        
        @media (max-width: 600px) {
            .details-grid {
                grid-template-columns: 1fr;
            }
        }
        
        .details-item {
            margin-bottom: 10px;
        }
        
        .details-label {
            font-weight: 500;
        }
        
        .details-value {
            color: #666;
        }
        
        .button {
            display: inline-block;
            background-color: #8C1C13; /* Marsala */
            color: white;
            font-weight: 500;
            padding: 12px 30px;
            border-radius: 30px;
            margin-top: 30px;
            text-decoration: none;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 1rem;
        }
        
        .button:hover {
            background-color: #7a1810;
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(140, 28, 19, 0.3);
        }
        
        .button-group {
            display: flex;
            flex-direction: column;
            gap: 15px;
            margin-top: 30px;
            width: 100%;
            max-width: 400px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .button-secondary {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            background-color: white;
            color: #8C1C13;
            border: 2px solid #8C1C13;
            font-weight: 500;
            padding: 10px 20px;
            border-radius: 30px;
            text-decoration: none;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 0.95rem;
        }
        #button-download{
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            background-color: #8C1C13;
            color: white;
            border: 2px solid #8C1C13;
            font-weight: 500;
            padding: 10px 20px;
            border-radius: 30px;
            text-decoration: none;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 0.95rem;
            
        }
        #button-download:hover{
            background-color: #8C1C13;
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(140, 28, 19, 0.15);
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
        .container-download{
            display: flex;
            align-content: center;
            justify-content: center;
            padding: 10px;
        }
        .button-secondary:hover {
            background-color: #f9f0f0;
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(140, 28, 19, 0.15);
        }
        
        .button-icon {
            width: 20px;
            height: 20px;
        }
        
        .footer {
            margin-top: 30px;
            color: #777;
            font-size: 0.9rem;
            text-align: center;
        }
        
        /* Animações suaves */
        @keyframes fadeIn {
            from { opacity: 0.7; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .animate {
            animation: fadeIn 0.8s ease-out forwards;
        }
    </style>
</head>
<body>

    <div class="container">
           <!-- Cabeçalho -->
        <div class="header animate">
            <h1 class="title">Henderson & Gizelli</h1>
            <p class="subtitle">13 de Setembro de 2024</p>
        </div>
        <!-- Card principal -->
        <div class="card animate">
            <!-- Decoração superior -->
            <div class="card-header"></div>
            
            <!-- Conteúdo -->
            <div class="card-content">
                <!-- Ícone de confirmação -->
                <svg class="check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                
                <h2 class="card-title">Confirmado!</h2>
                
                <p class="message">
                    Recebemos sua resposta e agradecemos por fazer parte deste momento tão especial em nossas vidas.
                </p>
                
                <div class="highlight">
                    <p class="highlight-text">Sua presença é o nosso maior presente.</p>
                    <p>Estamos ansiosos para celebrar este dia com você!</p>
                </div>

               
            <div style="display: flex; flex-direction: column; align-items: center;">
                <img src="{{ $imageQrcode }}" alt="QR Code" width="300">
                
               {{--<a href="{{route('qrcode.download')}}" id="download" class="button-secondary" style="background: #6A1C2B; color: white; margin-top: 10px;">
                    Baixar Imagem
                </a>--}}
            </div>
            <div class="container-download">
                <a id="button-download" href="{{route('download.qrcode',$token)}}"  target="_blank">
                      
                        <svg class="button-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                            <polyline points="7 10 12 15 17 10"></polyline>
                            <line x1="12" y1="3" x2="12" y2="15"></line>
                        </svg>

                        Baixar QR Code
                </a>
            </div>
            <div class="container-confirmed">
                <p class="message" id="confirmed" style="font: bold;">
                        Confirmado a Presença
                </p>
                <p class="message" >
                        @foreach ($data as $guest )
                            {{$guest->name}} <br>
                            
                        @endforeach
                </p>
            </div>
            
           

                   
                <!-- Detalhes do evento -->
                <x-details></x-details>

                <div class="button-group">                   
      
                    <!-- Botão para adicionar ao Google Calendar -->
                    <a id="calendarButton" href="{{$urlCalendar}}" class="button-secondary" target="_blank">
                        <svg class="button-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                            <line x1="16" y1="2" x2="16" y2="6"></line>
                            <line x1="8" y1="2" x2="8" y2="6"></line>
                            <line x1="3" y1="10" x2="21" y2="10"></line>
                        </svg>
                        Adicionar ao Google Calendar
                    </a>
                    
                    <!-- Botão para ver no Google Maps -->
                    <a id="mapsButton" href="{{$urlMaps}}" class="button-secondary" target="_blank">
                        <svg class="button-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg>
                        Ver Local no Google Maps
                    </a>
                </div>

            </div>
            
            <!-- Decoração inferior -->
            <div class="card-footer"></div>
        </div>
        
        <!-- Rodapé -->
        <div class="footer animate">
            <p>Com amor, Henderson & Gizelli</p>
        </div>
    </div>

    <script>
        // Interação do botão
        document.getElementById('backButton').addEventListener('click', function() {
            alert('Redirecionando para o site principal do casamento...');
            // Aqui você adicionaria o redirecionamento real
            // window.location.href = 'pagina-principal.html';
        });
    </script>
<script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'93e692600751572a',t:'MTc0NzAxNzg0MS4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script></body>
</html>