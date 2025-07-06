
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta ao Convite - Nosso Casamento</title>
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
        
        .response-icon {
            width: 70px;
            height: 70px;
            margin: 0 auto 20px;
            color: #8C1C13;
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
        
        .button-secondary:hover {
     
            transform: translateY(-3px);
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
        
        .change-mind {
            margin-top: 20px;
            font-style: italic;
            color: #666;
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
                <!-- Ícone de resposta -->
                <svg class="response-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 21a9 9 0 1 0 0-18 9 9 0 0 0 0 18z"></path>
                    <path d="M8 14s1.5 2 4 2 4-2 4-2"></path>
                    <line x1="9" y1="9" x2="9.01" y2="9"></line>
                    <line x1="15" y1="9" x2="15.01" y2="9"></line>
                </svg>
                
                <h2 class="card-title">Resposta Recebida</h2>
                
                <p class="message">
                    Recebemos sua resposta e entendemos que não poderá comparecer ao nosso casamento.
                </p>
                
                <div class="highlight">
                    <p class="highlight-text">Sentiremos sua falta neste dia especial.</p>
                    <p>Mesmo à distância, você estará em nossos corações.</p>
                </div>
                
               
                <p class="change-mind">
                    Se mudar de ideia, ficaremos muito felizes em recebê-lo(a). Basta entrar em contato conosco.
                </p>
                <br>
                <!-- Grupo de botões -->
                <a href="https://wa.me/5511946800914" class="button-secondary" target="_blank">
                        
                        Entrar em contato com o noivo
                </a>
            </div>
                    
            <!-- Decoração inferior -->
            <div class="card-footer"></div>
        </div>
        
        <!-- Rodapé -->
        <div class="footer animate">
            <p>Com amor, Henderson & Gizelli</p>
        </div>
    </div>


<script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'93e7486a86bff1e2',t:'MTc0NzAyNTI5Ny4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script></body>
</html>