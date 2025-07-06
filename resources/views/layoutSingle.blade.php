
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
    <link rel="icon" href="{{asset('storage/images/aliancas-de-casamento.ico')}}" type="image/x-icon"/>
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
        .form-register{
            display: flex;
            
        }
           .playfair {
            font-family: 'Playfair Display', serif;
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
        <x-header/>
        <!-- Conteúdo -->

        <div class="p-8 text-center">
            <p class="text-gray-600 mb-4">Prezado(a)</p>
            <h2 class="font-playfair text-2xl md:text-3xl text-marsala mb-6" id="guestName">{{$data['guest']['name']}}</h2>
            
            <p class="text-gray-700 mb-8">É com grande alegria que aguardamos sua confirmação para nosso casamento. Por favor, indique se poderá nos prestigiar com sua presença.</p>
            
          
                {{--<a href="{{route('register.single',['guest'=>$data['guest']['id'], 'confirmedPresence'=>'yes'])}}" class="btn-confirm bg-marsala text-white py-3 px-8 rounded-full font-medium transition-all duration-300 flex items-center justify-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    Sim, irei participar
                </a>
                <a href="{{route('register.single',['guest'=>$data['guest']['id'], 'confirmedPresence'=>'no'])}}" class="btn-decline border-2 border-marsala text-marsala py-3 px-8 rounded-full font-medium transition-all duration-300 flex items-center justify-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                    Infelizmente não poderei
                </a>--}}
                <form action="{{route('register-single',$data['guest']['token'])}}" method="POST" class="flex flex-col md:flex-row gap-4 justify-center mt-8">
                    @csrf
                    <button type="submit" name="{{$data['guest']['id']}}" value="yes" class="btn-confirm bg-marsala text-white py-3 px-8 rounded-full font-medium transition-all duration-300 flex items-center justify-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Sim, irei participar
                    </button>
                    <button type="submit" name="{{$data['guest']['id']}}" value="no" class="btn-decline border-2 border-marsala text-marsala py-3 px-8 rounded-full font-medium transition-all duration-300 flex items-center justify-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                        Infelizmente não poderei
                    </button>
                </form>
            </div>
       
        
        <!-- Rodapé -->
        <x-footer/>
        
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



<script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'9459eea5e152f190',t:'MTc0ODIyNzQ4Mi4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script></body>
</html>
