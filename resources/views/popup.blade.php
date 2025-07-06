

<!DOCTYPE html>
<html lang="pt-BR">
<head>
        <link rel="icon" href="{{asset('storage/images/aliancas-de-casamento.ico')}}" type="image/x-icon"/>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aceitação do Convite</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Montserrat:wght@300;400;500&display=swap');
        
        :root {
            --marsala: #8C2A36;
            --marsala-light: #A33B47;
            --marsala-dark: #701F29;
            --white: #FFFFFF;
            --cream: #F9F5F0;
            --gold: #D4AF37;
            --gold-light: #E9CD7B;
        }
        
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: var(--cream);
            overflow-x: hidden;
            position: relative;
            min-height: 100vh;
            width: 100%;
        }
        
        h1, h2, h3 {
            font-family: 'Playfair Display', serif;
        }
        
        .main-container {
            position: relative;
            z-index: 2;
        }
        
        .bg-decoration {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
            pointer-events: none;
            overflow: hidden;
        }
        
        .envelope-container {
            perspective: 1000px;
            width: 220px;
            height: 140px;
            margin: 0 auto;
        }
        
        .envelope {
            width: 220px;
            height: 140px;
            background-color: var(--marsala);
            position: relative;
            transform-style: preserve-3d;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            overflow: hidden;
        }
        
        .envelope:before {
            content: '';
            position: absolute;
            top: 5px;
            left: 5px;
            right: 5px;
            bottom: 5px;
            border: 1px solid var(--gold);
            border-radius: 5px;
            opacity: 0.5;
            pointer-events: none;
        }
        
        .envelope-flap {
            position: absolute;
            top: -70px;
            width: 100%;
            height: 70px;
            background-color: var(--marsala-light);
            clip-path: polygon(0 100%, 50% 30%, 100% 100%);
            transform-origin: bottom;
            animation: openFlap 1.5s forwards;
            z-index: 2;
        }
        
        .envelope-flap:after {
            content: '';
            position: absolute;
            top: 5px;
            left: 5px;
            right: 5px;
            bottom: 0;
            clip-path: polygon(0 100%, 50% 30%, 100% 100%);
            border: 1px solid var(--gold);
            opacity: 0.5;
            pointer-events: none;
        }
        
        .envelope-back {
            position: absolute;
            width: 100%;
            height: 100%;
            background-color: var(--marsala);
            z-index: 1;
        }
        
        .envelope-seal {
            position: absolute;
            width: 40px;
            height: 40px;
            background-color: var(--gold);
            border-radius: 50%;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 3;
            box-shadow: 0 2px 4px rgba(0,0,0,0.2);
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Playfair Display', serif;
            color: var(--marsala-dark);
            font-size: 20px;
            font-weight: bold;
        }
        
        .envelope-letter {
            position: absolute;
            width: 200px;
            height: 120px;
            background-color: var(--white);
            top: 10px;
            left: 10px;
            transform: translateY(0);
            animation: pullLetter 2s 1.5s forwards;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            border-radius: 5px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            z-index: 0;
        }
        
        .letter-content {
            width: 100%;
            height: 100%;
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 15px;
        }
        
        .letter-border {
            position: absolute;
            top: 5px;
            left: 5px;
            right: 5px;
            bottom: 5px;
            border: 1px solid var(--marsala);
            opacity: 0.3;
            border-radius: 3px;
            pointer-events: none;
        }
        
        .letter-corner {
            position: absolute;
            width: 20px;
            height: 20px;
            border-style: solid;
            border-color: var(--marsala);
            opacity: 0.5;
        }
        
        .letter-corner-tl {
            top: 5px;
            left: 5px;
            border-width: 1px 0 0 1px;
            border-radius: 5px 0 0 0;
        }
        
        .letter-corner-tr {
            top: 5px;
            right: 5px;
            border-width: 1px 1px 0 0;
            border-radius: 0 5px 0 0;
        }
        
        .letter-corner-bl {
            bottom: 5px;
            left: 5px;
            border-width: 0 0 1px 1px;
            border-radius: 0 0 0 5px;
        }
        
        .letter-corner-br {
            bottom: 5px;
            right: 5px;
            border-width: 0 1px 1px 0;
            border-radius: 0 0 5px 0;
        }
        
        .letter-monogram {
            font-family: 'Playfair Display', serif;
            font-size: 28px;
            color: var(--marsala);
            margin-bottom: 10px;
            position: relative;
        }
        
        .letter-monogram:before,
        .letter-monogram:after {
            content: '❦';
            font-size: 14px;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            color: var(--gold);
        }
        
        .letter-monogram:before {
            left: -25px;
        }
        
        .letter-monogram:after {
            right: -25px;
        }
        
        .heart {
            position: absolute;
            width: 16px;
            height: 16px;
            background-color: var(--marsala);
            transform: rotate(45deg);
            opacity: 0;
            will-change: transform, opacity;
        }
        
        .heart:before, .heart:after {
            content: '';
            position: absolute;
            width: 16px;
            height: 16px;
            background-color: var(--marsala);
            border-radius: 50%;
        }
        
        .heart:before {
            top: -8px;
            left: 0;
        }
        
        .heart:after {
            top: 0;
            left: -8px;
        }
        
        .progress-container {
            width: 250px;
            height: 6px;
            background-color: rgba(140, 42, 54, 0.1);
            border-radius: 10px;
            margin-top: 30px;
            overflow: hidden;
            position: relative;
        }
        
        .progress-container:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            border-radius: 10px;
            box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
            pointer-events: none;
        }
        
        .progress-bar {
            height: 100%;
            width: 0%;
            background: linear-gradient(90deg, var(--marsala) 0%, var(--marsala-light) 50%, var(--marsala) 100%);
            border-radius: 10px;
            animation: progress 3.5s forwards;
            background-size: 200% 100%;
            will-change: width;
        }
        
        .message {
            opacity: 0;
            animation: fadeIn 1s 3.5s forwards;
            max-width: 500px;
            will-change: opacity, transform;
        }
        
        .confetti {
            position: fixed;
            opacity: 0;
            pointer-events: none;
            will-change: transform, opacity;
        }
        
        .decoration {
            position: fixed;
            pointer-events: none;
            z-index: -1;
            opacity: 0.2;
        }
        
        .decoration-1 {
            top: 10%;
            left: 10%;
        }
        
        .decoration-2 {
            bottom: 15%;
            right: 10%;
        }
        
        .btn-accept {
            background: linear-gradient(135deg, var(--marsala) 0%, var(--marsala-dark) 100%);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .btn-accept:before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: all 0.6s ease;
        }
        
        .btn-accept:hover:before {
            left: 100%;
        }
        
        @keyframes openFlap {
            0% { transform: rotateX(0deg); }
            100% { transform: rotateX(180deg); }
        }
        
        @keyframes pullLetter {
            0% { transform: translateY(0); }
            50% { transform: translateY(-100px); }
            100% { transform: translateY(-100px); }
        }
        
        @keyframes progress {
            0% { width: 0%; }
            30% { width: 40%; }
            60% { width: 75%; }
            100% { width: 100%; }
        }
        
        @keyframes fadeIn {
            0% { opacity: 0; transform: translateY(20px); }
            100% { opacity: 1; transform: translateY(0); }
        }
        
        @keyframes floatHeart {
            0% { transform: rotate(45deg) translateY(0) scale(1); opacity: 0; }
            10% { opacity: 0.8; }
            100% { transform: rotate(45deg) translateY(-100px) scale(0); opacity: 0; }
        }
        
        @keyframes confettiFall {
            0% { transform: translateY(-50px) rotate(0deg); opacity: 0; }
            10% { opacity: 0.8; }
            100% { transform: translateY(100vh) rotate(360deg); opacity: 0; }
        }
    </style>
</head>
<body>
    <div class="bg-decoration">
        <div class="decoration decoration-1">
            <svg width="150" height="150" viewBox="0 0 100 100" fill="none">
                <path d="M30,20 Q45,5 70,15 Q90,30 85,60 Q70,85 40,80 Q15,70 20,40 Q25,25 30,20" stroke="#8C2A36" stroke-width="1" fill="none" opacity="0.15"/>
                <path d="M35,25 Q45,15 65,20 Q80,30 75,55 Q65,75 40,70 Q20,65 25,40 Q30,30 35,25" stroke="#D4AF37" stroke-width="0.5" fill="none" opacity="0.1"/>
            </svg>
        </div>
        
        <div class="decoration decoration-2">
            <svg width="180" height="180" viewBox="0 0 100 100" fill="none">
                <path d="M25,30 Q40,10 65,20 Q85,35 80,65 Q65,85 35,75 Q15,60 25,30" stroke="#8C2A36" stroke-width="1" fill="none" opacity="0.15"/>
                <path d="M30,35 Q40,20 60,25 Q75,40 70,60 Q60,75 35,70 Q20,55 30,35" stroke="#D4AF37" stroke-width="0.5" fill="none" opacity="0.1"/>
            </svg>
        </div>
    </div>
    
    <div class="main-container min-h-screen flex flex-col items-center justify-center p-4">
        <h1 class="text-3xl md:text-4xl text-center mb-10 text-[#8C2A36] font-bold">Processando sua resposta</h1>
        
        <div class="flex flex-col items-center justify-center mb-10">
            <div class="envelope-container">
                <div class="envelope">
                    <div class="envelope-back"></div>
                    <div class="envelope-flap"></div>
                    <div class="envelope-seal">C</div>
                    <div class="envelope-letter">
                        <div class="letter-content">
                            <div class="letter-border"></div>
                            <div class="letter-corner letter-corner-tl"></div>
                            <div class="letter-corner letter-corner-tr"></div>
                            <div class="letter-corner letter-corner-bl"></div>
                            <div class="letter-corner letter-corner-br"></div>
                            <div class="letter-monogram">C&amp;M</div>
                            <p class="text-xs text-center text-[#8C2A36] opacity-70">Convite aceito</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="progress-container mt-8">
                <div class="progress-bar"></div>
            </div>
        </div>
        
        <div class="message text-center px-4">
            <h2 class="text-2xl md:text-3xl text-[#8C2A36] font-bold mb-4">Convite Aceito!</h2>
            <p class="text-lg text-gray-700 mb-8">Estamos muito felizes que você fará parte deste momento especial em nossa celebração de amor.</p>
            <button class="btn-accept text-white font-medium py-3 px-10 rounded-full shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all">
                Ver detalhes do evento
            </button>
        </div>
    </div>
    
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Limitar a quantidade de corações para evitar sobrecarga
            const heartInterval = setInterval(() => {
                createFloatingHeart();
            }, 500);
            
            // Limpar o intervalo após um tempo para evitar sobrecarga contínua
            setTimeout(() => {
                clearInterval(heartInterval);
            }, 5000);
            
            // Criar confetes quando o progresso terminar (quantidade reduzida)
            setTimeout(() => {
                createConfetti();
            }, 3500);
            
            function createFloatingHeart() {
                const letter = document.querySelector('.letter-content');
                if (!letter) return;
                
                const letterRect = letter.getBoundingClientRect();
                const heart = document.createElement('div');
                heart.classList.add('heart');
                
                heart.style.left = `${Math.random() * (letterRect.width - 20)}px`;
                heart.style.top = `${Math.random() * (letterRect.height - 20) + 20}px`;
                heart.style.animation = `floatHeart ${1 + Math.random()}s forwards`;
                
                letter.appendChild(heart);
                
                // Remover após a animação
                setTimeout(() => {
                    if (heart && heart.parentNode) {
                        heart.parentNode.removeChild(heart);
                    }
                }, 2000);
            }
            
            function createConfetti() {
                const colors = ['#8C2A36', '#A33B47', '#D4AF37', '#E9CD7B', '#FFFFFF'];
                const shapes = ['circle', 'diamond', 'triangle'];
                
                // Reduzir a quantidade de confetes para evitar tremores
                const confettiCount = 30;
                
                // Criar confetes em lotes para melhor performance
                for (let i = 0; i < confettiCount; i++) {
                    setTimeout(() => {
                        const confetti = document.createElement('div');
                        confetti.classList.add('confetti');
                        
                        const color = colors[Math.floor(Math.random() * colors.length)];
                        const shape = shapes[Math.floor(Math.random() * shapes.length)];
                        const size = Math.random() * 8 + 5;
                        
                        confetti.style.width = `${size}px`;
                        confetti.style.height = `${size}px`;
                        
                        if (shape === 'circle') {
                            confetti.style.backgroundColor = color;
                            confetti.style.borderRadius = '50%';
                        } else if (shape === 'diamond') {
                            confetti.style.backgroundColor = color;
                            confetti.style.transform = 'rotate(45deg)';
                        } else if (shape === 'triangle') {
                            confetti.style.width = '0';
                            confetti.style.height = '0';
                            confetti.style.backgroundColor = 'transparent';
                            confetti.style.borderLeft = `${size/2}px solid transparent`;
                            confetti.style.borderRight = `${size/2}px solid transparent`;
                            confetti.style.borderBottom = `${size}px solid ${color}`;
                        }
                        
                        // Distribuir os confetes por toda a largura da tela
                        confetti.style.left = `${Math.random() * 90 + 5}%`;
                        confetti.style.top = '0';
                        confetti.style.opacity = '0';
                        
                        const duration = Math.random() * 2 + 2;
                        const delay = Math.random() * 0.5;
                        
                        confetti.style.animation = `confettiFall ${duration}s ${delay}s forwards`;
                        
                        document.querySelector('.bg-decoration').appendChild(confetti);
                        
                        // Remover após a animação
                        setTimeout(() => {
                            if (confetti && confetti.parentNode) {
                                confetti.parentNode.removeChild(confetti);
                            }
                        }, (duration + delay) * 1000);
                    }, i * 100);
                }
            }
        });
    </script>
<script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'94691344013af1bb',t:'MTc0ODM4NjI2OS4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script></body>
</html>
