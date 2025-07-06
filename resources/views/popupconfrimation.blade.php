
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <link rel="icon" href="{{asset('storage/images/aliancas-de-casamento.ico')}}" type="image/x-icon"/>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convite de Casamento Confirmado</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        marsala: {
                            light: '#9e4244',
                            DEFAULT: '#7D292B',
                            dark: '#5d1f21'
                        },
                        gold: {
                            light: '#f0e6a9',
                            DEFAULT: '#D4AF37',
                            dark: '#9e8324'
                        }
                    }
                }
            }
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&family=Great+Vibes&display=swap');

        body {
            font-family: 'Cormorant Garamond', serif;
            background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23d4af37' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E"),
                linear-gradient(135deg, #f9f7f7 0%, #f0ebe8 100%);
            height: 100vh;
            margin: 0;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .elegant-text {
            font-family: 'Great Vibes', cursive;
        }

        /* Overlay background */
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(3px);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 50;
            animation: fadeIn 0.5s ease forwards;
        }

        /* Popup container */
        .popup {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
            position: relative;
            max-width: 90%;
            width: 500px;
            max-height: 90vh;
            overflow-y: auto;
            animation: popIn 0.5s cubic-bezier(0.26, 0.53, 0.74, 1.48) forwards;
        }

        .popup-content {
            position: relative;
            padding: 2.5rem;
        }

        .popup-border {
            position: absolute;
            top: 10px;
            left: 10px;
            right: 10px;
            bottom: 10px;
            border: 1px solid rgba(212, 175, 55, 0.5);
            border-radius: 4px;
            pointer-events: none;
        }

        .text-reveal {
            opacity: 0;
            animation: fadeIn 2s 5s forwards;
        }

        .checkmark {
            stroke-dasharray: 100;
            stroke-dashoffset: 100;
            animation: drawCheck 1.5s 6s forwards;
        }

        .checkmark-circle {
            stroke-dasharray: 400;
            stroke-dashoffset: 400;
            animation: drawCircle 2s 5.5s forwards;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }

        @keyframes popIn {
            0% {
                opacity: 0;
                transform: scale(0.9);
            }
            100% {
                opacity: 1;
                transform: scale(1);
            }
        }

        @keyframes drawCheck {
            to {
                stroke-dashoffset: 0;
            }
        }

        @keyframes drawCircle {
            to {
                stroke-dashoffset: 0;
            }
        }

        .ornament {
            position: absolute;
            width: 30px;
            height: 30px;
            opacity: 0.6;
        }

        .top-left {
            top: 15px;
            left: 15px;
        }

        .top-right {
            top: 15px;
            right: 15px;
            transform: rotate(90deg);
        }

        .bottom-left {
            bottom: 15px;
            left: 15px;
            transform: rotate(270deg);
        }

        .bottom-right {
            bottom: 15px;
            right: 15px;
            transform: rotate(180deg);
        }
        
        /* Animação refinada */
        #animation-container {
            position: relative;
            height: 180px;
            width: 100%;
            overflow: hidden;
        }
        
        #male-ring, #female-ring {
            position: absolute;
            top: 50%;
            opacity: 0;
            transform: translateY(-50%);
        }
        
        #male-ring {
            left: 25%;
            animation: fadeInMaleRing 1s ease forwards, 
                       moveMaleRing 2s 1s ease forwards;
        }
        
        #female-ring {
            right: 25%;
            animation: fadeInFemaleRing 1s ease forwards, 
                       moveFemaleRing 2s 1s ease forwards;
        }
        
        #heart {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) scale(0);
            opacity: 0;
            animation: showHeart 1.5s 3s forwards;
        }
        
        /* Brilho do diamante */
        .diamond-sparkle {
            animation: sparkle 2s infinite alternate;
        }
        
        @keyframes sparkle {
            0% {
                opacity: 0.4;
            }
            50% {
                opacity: 1;
            }
            100% {
                opacity: 0.6;
            }
        }
        
        @keyframes fadeInMaleRing {
            from {
                opacity: 0;
                transform: translateY(-50%) translateX(-50px) rotate(-45deg);
            }
            to {
                opacity: 1;
                transform: translateY(-50%) translateX(0) rotate(0);
            }
        }
        
        @keyframes fadeInFemaleRing {
            from {
                opacity: 0;
                transform: translateY(-50%) translateX(50px) rotate(45deg);
            }
            to {
                opacity: 1;
                transform: translateY(-50%) translateX(0) rotate(0);
            }
        }
        
        @keyframes moveMaleRing {
            0% {
                transform: translateY(-50%) translateX(0) rotate(0);
            }
            50% {
                transform: translateY(-50%) translateX(40%) rotate(10deg);
            }
            100% {
                transform: translateY(-50%) translateX(40%) rotate(10deg);
                opacity: 0;
            }
        }
        
        @keyframes moveFemaleRing {
            0% {
                transform: translateY(-50%) translateX(0) rotate(0);
            }
            50% {
                transform: translateY(-50%) translateX(-40%) rotate(-10deg);
            }
            100% {
                transform: translateY(-50%) translateX(-40%) rotate(-10deg);
                opacity: 0;
            }
        }
        
        @keyframes showHeart {
            0% {
                opacity: 0;
                transform: translate(-50%, -50%) scale(0);
            }
            70% {
                opacity: 1;
                transform: translate(-50%, -50%) scale(1.1);
            }
            85% {
                transform: translate(-50%, -50%) scale(0.95);
            }
            100% {
                opacity: 1;
                transform: translate(-50%, -50%) scale(1);
            }
        }
        
        .close-button {
            position: absolute;
            top: 15px;
            right: 15px;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background: rgba(125, 41, 43, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            z-index: 10;
        }
        
        .close-button:hover {
            background: rgba(125, 41, 43, 0.2);
        }
        
        .close-button svg {
            width: 15px;
            height: 15px;
        }
    </style>
</head>
<body>
    <!-- Overlay background -->
    <div class="overlay">
        <!-- Popup container -->
        <div class="popup">
            <div class="popup-content">
                <!-- Botão de fechar -->
                <div class="close-button" onclick="document.querySelector('.overlay').style.display = 'none';">
                    <svg viewBox="0 0 24 24" fill="none" stroke="#7D292B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </div>
                
                <!-- Borda decorativa -->
                <div class="popup-border"></div>
                
                <!-- Ornamentos decorativos nos cantos -->
                <svg class="ornament top-left" viewBox="0 0 24 24">
                    <path d="M12,0 C16,8 24,12 24,12 C24,12 16,16 12,24 C8,16 0,12 0,12 C0,12 8,8 12,0 Z" fill="none" stroke="#D4AF37" stroke-width="0.5"></path>
                </svg>
                <svg class="ornament top-right" viewBox="0 0 24 24">
                    <path d="M12,0 C16,8 24,12 24,12 C24,12 16,16 12,24 C8,16 0,12 0,12 C0,12 8,8 12,0 Z" fill="none" stroke="#D4AF37" stroke-width="0.5"></path>
                </svg>
                <svg class="ornament bottom-left" viewBox="0 0 24 24">
                    <path d="M12,0 C16,8 24,12 24,12 C24,12 16,16 12,24 C8,16 0,12 0,12 C0,12 8,8 12,0 Z" fill="none" stroke="#D4AF37" stroke-width="0.5"></path>
                </svg>
                <svg class="ornament bottom-right" viewBox="0 0 24 24">
                    <path d="M12,0 C16,8 24,12 24,12 C24,12 16,16 12,24 C8,16 0,12 0,12 C0,12 8,8 12,0 Z" fill="none" stroke="#D4AF37" stroke-width="0.5"></path>
                </svg>

                <!-- Cabeçalho elegante -->
                <div class="text-center mb-2">
                    <div class="h-px w-16 mx-auto bg-gradient-to-r from-transparent via-gold-DEFAULT to-transparent"></div>
                    <p class="text-xs tracking-widest uppercase text-gold-dark mt-2">Convite de Casamento</p>
                </div>

                <!-- Nova animação com alianças diferenciadas -->
                <div id="animation-container" class="mb-6">
                    <!-- Aliança masculina (mais larga e simples) -->
                    <svg id="male-ring" width="80" height="80" viewBox="0 0 100 100">
                        <defs>
                            <linearGradient id="goldGradient1" x1="0%" y1="0%" x2="100%" y2="100%">
                                <stop offset="0%" stop-color="#F0E68C" />
                                <stop offset="50%" stop-color="#D4AF37" />
                                <stop offset="100%" stop-color="#B8860B" />
                            </linearGradient>
                            <filter id="shadow1" x="-20%" y="-20%" width="140%" height="140%">
                                <feGaussianBlur in="SourceAlpha" stdDeviation="2" />
                                <feOffset dx="0" dy="1" result="offsetblur" />
                                <feComponentTransfer>
                                    <feFuncA type="linear" slope="0.5" />
                                </feComponentTransfer>
                                <feMerge>
                                    <feMergeNode />
                                    <feMergeNode in="SourceGraphic" />
                                </feMerge>
                            </filter>
                        </defs>
                        <g filter="url(#shadow1)">
                            <!-- Aliança masculina mais larga -->
                            <circle cx="50" cy="50" r="30" fill="none" stroke="url(#goldGradient1)" stroke-width="8" />
                            <!-- Detalhe interno da aliança masculina -->
                            <circle cx="50" cy="50" r="26" fill="none" stroke="#B8860B" stroke-width="1" />
                            <circle cx="50" cy="50" r="22" fill="none" stroke="#B8860B" stroke-width="1" />
                        </g>
                    </svg>
                    
                    <!-- Aliança feminina (mais fina com diamante) -->
                    <svg id="female-ring" width="80" height="80" viewBox="0 0 100 100">
                        <defs>
                            <linearGradient id="goldGradient2" x1="0%" y1="0%" x2="100%" y2="100%">
                                <stop offset="0%" stop-color="#F0E68C" />
                                <stop offset="50%" stop-color="#D4AF37" />
                                <stop offset="100%" stop-color="#B8860B" />
                            </linearGradient>
                            <filter id="shadow2" x="-20%" y="-20%" width="140%" height="140%">
                                <feGaussianBlur in="SourceAlpha" stdDeviation="2" />
                                <feOffset dx="0" dy="1" result="offsetblur" />
                                <feComponentTransfer>
                                    <feFuncA type="linear" slope="0.5" />
                                </feComponentTransfer>
                                <feMerge>
                                    <feMergeNode />
                                    <feMergeNode in="SourceGraphic" />
                                </feMerge>
                            </filter>
                            <!-- Filtro para o brilho do diamante -->
                            <filter id="diamond-glow" x="-50%" y="-50%" width="200%" height="200%">
                                <feGaussianBlur in="SourceGraphic" stdDeviation="2" result="blur" />
                                <feComposite in="blur" operator="over" in2="SourceGraphic" />
                            </filter>
                        </defs>
                        <g filter="url(#shadow2)">
                            <!-- Aliança feminina mais fina -->
                            <circle cx="50" cy="50" r="30" fill="none" stroke="url(#goldGradient2)" stroke-width="4" />
                            
                            <!-- Diamante na aliança feminina -->
                            <g transform="translate(50, 20)">
                                <!-- Base do diamante -->
                                <polygon points="0,-8 6,0 0,8 -6,0" fill="#FFFFFF" stroke="#D4AF37" stroke-width="0.5" />
                                
                                <!-- Brilhos do diamante -->
                                <g class="diamond-sparkle">
                                    <polygon points="0,-10 2,-4 0,-2 -2,-4" fill="#FFFFFF" filter="url(#diamond-glow)" opacity="0.8" />
                                    <polygon points="0,10 2,4 0,2 -2,4" fill="#FFFFFF" filter="url(#diamond-glow)" opacity="0.8" />
                                    <polygon points="8,0 4,2 2,0 4,-2" fill="#FFFFFF" filter="url(#diamond-glow)" opacity="0.8" />
                                    <polygon points="-8,0 -4,2 -2,0 -4,-2" fill="#FFFFFF" filter="url(#diamond-glow)" opacity="0.8" />
                                </g>
                            </g>
                        </g>
                    </svg>
                    
                    <!-- Coração -->
                    <svg id="heart" width="100" height="100" viewBox="0 0 120 120">
                        <defs>
                            <linearGradient id="marsalaGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                                <stop offset="0%" stop-color="#9e4244" />
                                <stop offset="50%" stop-color="#7D292B" />
                                <stop offset="100%" stop-color="#5d1f21" />
                            </linearGradient>
                            <filter id="heartShadow" x="-20%" y="-20%" width="140%" height="140%">
                                <feGaussianBlur in="SourceAlpha" stdDeviation="3" />
                                <feOffset dx="0" dy="2" result="offsetblur" />
                                <feComponentTransfer>
                                    <feFuncA type="linear" slope="0.5" />
                                </feComponentTransfer>
                                <feMerge>
                                    <feMergeNode />
                                    <feMergeNode in="SourceGraphic" />
                                </feMerge>
                            </filter>
                        </defs>
                        <path d="M60,30 C50,15 30,15 20,30 C10,45 10,75 60,105 C110,75 110,45 100,30 C90,15 70,15 60,30 Z" 
                              fill="url(#marsalaGradient)" stroke="#7D292B" stroke-width="1" filter="url(#heartShadow)" />
                    </svg>
                </div>
                
                <h1 class="elegant-text text-reveal text-4xl md:text-5xl text-marsala mb-6 text-center">Estamos ansiosos pelo dia</h1>
                
                <div class="mt-6 flex justify-center">
                    <div class="relative w-16 h-16">
                        <svg class="w-full h-full" viewBox="0 0 50 50">
                            <circle class="checkmark-circle" cx="25" cy="25" r="20" fill="none" stroke="#7D292B" stroke-width="2" />
                            <path class="checkmark" d="M15,25 L22,32 L35,18" fill="none" stroke="#7D292B" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <p class="text-reveal absolute -bottom-6 left-1/2 transform -translate-x-1/2 text-xs text-marsala font-semibold tracking-wider uppercase">Convite Confirmado</p>
                    </div>
                </div>
                
                <div class="text-reveal mt-10 text-gold-dark text-center">
                    <div class="h-px w-16 mx-auto bg-gradient-to-r from-transparent via-gold-DEFAULT to-transparent mb-3"></div>
                    <p class="text-xs tracking-widest uppercase">Aguardamos sua presença</p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Script para mostrar o popup automaticamente -->
    <script>
        // O popup já é mostrado por padrão, mas podemos adicionar lógica adicional aqui se necessário
        document.addEventListener('DOMContentLoaded', function() {
            // O popup já está visível por padrão
        });
    </script>
<script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'93e4d0598487ddeb',t:'MTc0Njk5OTQwNy4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script></body>
</html>