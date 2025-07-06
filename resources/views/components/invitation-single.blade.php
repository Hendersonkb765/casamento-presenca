<div>
 
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmação de Presença</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        marsala: '#8B2439',
                        marsalaLight: '#A93A4F',
                        marsalaDark: '#6A1C2B',
                        cream: '#F9F5F0',
                    },
                    fontFamily: {
                        'playfair': ['"Playfair Display"', 'serif'],
                        'montserrat': ['Montserrat', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <style>
        body {
            background-color: #F9F5F0;
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%238b2439' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }
        .envelope {
            box-shadow: 0 10px 30px rgba(139, 36, 57, 0.15);
        }
        .btn-confirm:hover {
            background-color: #6A1C2B;
            transform: translateY(-2px);
        }
        .btn-decline:hover {
            background-color: #F9F5F0;
            color: #8B2439;
            transform: translateY(-2px);
        }
        .floral-decoration {
            opacity: 0.8;
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center p-4 font-montserrat">
    <div class="envelope bg-white max-w-lg w-full rounded-lg overflow-hidden relative">
        <!-- Decoração floral superior -->
        <div class="floral-decoration absolute top-0 left-0 w-full flex justify-between p-4 opacity-60">
            <svg width="80" height="80" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M30,50 Q40,20 50,50 T70,50" stroke="#8B2439" stroke-width="1.5" fill="none" />
                <path d="M20,60 Q40,40 60,60 T90,60" stroke="#8B2439" stroke-width="1.5" fill="none" />
                <circle cx="50" cy="50" r="5" fill="#8B2439" fill-opacity="0.7" />
                <circle cx="30" cy="55" r="3" fill="#8B2439" fill-opacity="0.5" />
                <circle cx="70" cy="55" r="3" fill="#8B2439" fill-opacity="0.5" />
            </svg>
            <svg width="80" height="80" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M30,50 Q40,20 50,50 T70,50" stroke="#8B2439" stroke-width="1.5" fill="none" />
                <path d="M20,60 Q40,40 60,60 T90,60" stroke="#8B2439" stroke-width="1.5" fill="none" />
                <circle cx="50" cy="50" r="5" fill="#8B2439" fill-opacity="0.7" />
                <circle cx="30" cy="55" r="3" fill="#8B2439" fill-opacity="0.5" />
                <circle cx="70" cy="55" r="3" fill="#8B2439" fill-opacity="0.5" />
            </svg>
        </div>
        <!-- Cabeçalho -->
        <div class="bg-marsala text-white text-center py-8 px-6">
            <h1 class="font-playfair text-3xl md:text-4xl italic mb-2">Confirmação de Presença</h1>
            <p class="text-cream opacity-90">Ficaremos felizes com sua resposta</p>
        </div>
        
        <!-- Conteúdo -->
        <div class="p-8 text-center">
            <p class="text-gray-600 mb-4">Prezado(a)</p>
            <h2 class="font-playfair text-2xl md:text-3xl text-marsala mb-6" id="guestName">Ana Silva</h2>
            
            <p class="text-gray-700 mb-8">É com grande alegria que aguardamos sua confirmação para nosso casamento. Por favor, indique se poderá nos prestigiar com sua presença.</p>
            
            <div class="flex flex-col md:flex-row gap-4 justify-center mt-8">
                <button onclick="confirmAttendance(true)" class="btn-confirm bg-marsala text-white py-3 px-8 rounded-full font-medium transition-all duration-300 flex items-center justify-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    Sim, irei participar
                </button>
                
                <button onclick="confirmAttendance(false)" class="btn-decline border-2 border-marsala text-marsala py-3 px-8 rounded-full font-medium transition-all duration-300 flex items-center justify-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                    Infelizmente não poderei
                </button>
            </div>
        </div>
        
        <!-- Rodapé -->
        <div class="bg-marsala bg-opacity-10 p-4 text-center text-marsala text-sm">
            <p>Agradecemos sua atenção e carinho</p>
        </div>
        
        <!-- Decoração floral inferior -->
        <div class="floral-decoration absolute bottom-0 left-0 w-full flex justify-between p-4 opacity-60 transform rotate-180">
            <svg width="80" height="80" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M30,50 Q40,20 50,50 T70,50" stroke="#8B2439" stroke-width="1.5" fill="none" />
                <path d="M20,60 Q40,40 60,60 T90,60" stroke="#8B2439" stroke-width="1.5" fill="none" />
                <circle cx="50" cy="50" r="5" fill="#8B2439" fill-opacity="0.7" />
                <circle cx="30" cy="55" r="3" fill="#8B2439" fill-opacity="0.5" />
                <circle cx="70" cy="55" r="3" fill="#8B2439" fill-opacity="0.5" />
            </svg>
            <svg width="80" height="80" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M30,50 Q40,20 50,50 T70,50" stroke="#8B2439" stroke-width="1.5" fill="none" />
                <path d="M20,60 Q40,40 60,60 T90,60" stroke="#8B2439" stroke-width="1.5" fill="none" />
                <circle cx="50" cy="50" r="5" fill="#8B2439" fill-opacity="0.7" />
                <circle cx="30" cy="55" r="3" fill="#8B2439" fill-opacity="0.5" />
                <circle cx="70" cy="55" r="3" fill="#8B2439" fill-opacity="0.5" />
            </svg>
        </div>
    </div>

    <!-- Modal de confirmação -->
    <div id="confirmationModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
        <div class="bg-white rounded-lg p-8 max-w-md w-full text-center relative envelope">
            <button onclick="closeModal()" class="absolute top-4 right-4 text-gray-500 hover:text-gray-700">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
            <div id="confirmationIcon" class="mx-auto mb-4 w-16 h-16 flex items-center justify-center rounded-full"></div>
            <h3 class="font-playfair text-2xl mb-2" id="confirmationTitle"></h3>
            <p class="text-gray-600 mb-6" id="confirmationMessage"></p>
            <button onclick="closeModal()" class="bg-marsala text-white py-2 px-6 rounded-full font-medium transition-all duration-300 hover:bg-marsalaDark">
                Fechar
            </button>
        </div>
    </div>

    <script>
        // Função para personalizar o nome do convidado (em uma aplicação real, isso viria de um parâmetro da URL ou banco de dados)
        function setGuestName() {
            // Aqui você poderia obter o nome da URL, por exemplo: const urlParams = new URLSearchParams(window.location.search);
            // const name = urlParams.get('name');
            const name = "Ana Silva"; // Nome padrão para demonstração
            document.getElementById("guestName").textContent = name;
        }
        
        // Função para confirmar presença
      
        
        // Função para fechar o modal
        function closeModal() {
            document.getElementById("confirmationModal").classList.add("hidden");
        }
        
        // Inicializar o nome do convidado quando a página carregar
        window.onload = setGuestName;
    </script>
<script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'9459eea5e152f190',t:'MTc0ODIyNzQ4Mi4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script></body>
</html>
</div>