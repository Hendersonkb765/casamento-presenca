
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirme sua Presença | Casamento Henderson & Gizelli</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;1,400&family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet">
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
    @vite(['resources/js/app.js'])
    <style>
        body {
            background-color: #F9F5F0;
            font-family: 'Montserrat', sans-serif;
        }
        .playfair {
            font-family: 'Playfair Display', serif;
        }
        .floral-border {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='20' viewBox='0 0 100 20' fill='none'%3E%3Cpath d='M0,10 C30,20 70,0 100,10' stroke='%238B2439' stroke-width='1' fill='none' stroke-dasharray='4 2'/%3E%3C/svg%3E");
            background-repeat: repeat-x;
            height: 20px;
            width: 100%;
        }
        .bg-pattern {
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%238B2439' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }
        .couple-image {
            filter: drop-shadow(0 4px 6px rgba(0, 0, 0, 0.1));
        }
        .checkbox-marsala {
            accent-color: #8B2439;
        }
    </style>
</head>
<body class="bg-pattern">
    
    <div class="min-h-screen flex flex-col items-center justify-center p-4">
        <div class="max-w-3xl w-full bg-white rounded-lg shadow-xl overflow-hidden">
            <!-- Cabeçalho -->
            <x-header/>
            
            
            
            <!-- Conteúdo -->
            <div class="p-6 md:p-10">
                <div class="text-center mb-8">
                    <h2 class="playfair text-3xl text-marsala mb-4">Confirme sua Presença</h2>
                    <p class="text-gray-700">Ficaremos muito felizes com a sua presença em nosso grande dia!</p>
                    <div class="floral-border my-6"></div>
                </div>
                
                <!-- Informações do convidado -->
                {{--
                @if (!empty($family))
                <div class="bg-marsala bg-opacity-10 p-4 rounded-md mb-6">
                    <h3 class="text-marsala font-medium text-lg mb-2">Olá, <span id="mainGuestName">Família Silva</span>!</h3>
                    <p class="text-gray-700">Por favor, confirme quem da sua família estará presente:</p>
                </div>
                @else
                <div class="flex items-center p-2 hover:bg-gray-50 rounded-md">
                    <input type="checkbox" id="member_101" name="member_101" value="101" class="w-5 h-5 checkbox-marsala rounded" checked="">
                    <label for="member_101" class="ml-3 text-gray-700 flex-1">{{$guest->name}}</label>
                </div>
                @endif
                --}}
                
                @if(!empty($data['family']))
                    <div class="bg-marsala bg-opacity-10 p-4 rounded-md mb-6">
                        <h3 class="text-marsala font-medium text-lg mb-2">Olá, <span id="mainGuestName">Família {{$data['family']['familyName']}}</span>!</h3>
                        <p class="text-gray-700">Por favor, confirme quem da sua família estará presente:</p>
                    </div>
                @endif
                
                <form id="rsvpForm" method="POST" action="{{route('register-family',$data['family']['token'])}}" class="space-y-6">
                    @csrf
               
                    <div id="familyMembers" class="space-y-3 border-b border-gray-200 pb-6">
                        <div>
                            <input type="checkbox"  id="member_{{$data['family']['responsibleName']['id']}}" name="member_{{$data['family']['responsibleName']['id']}}" value="{{$data['family']['responsibleName']['id']}}" 
                            class="w-5 h-5 checkbox-marsala rounded" checked>
                            <label for="member_${{$data['family']['responsibleName']['id']}}" class="ml-3 text-gray-700 flex-1">{{$data['family']['responsibleName']['name']}}</label>
                            <span class="text-sm text-gray-500 md:inline">Responsável</span>
                        </div> 
                    @foreach ($data['family']['familyMembers'] as $member )
                    
                        <div>
                            <input type="checkbox" id="member_${{$member['id']}}" name="member_{{$member['id']}}" value="{{$member['id']}}" 
                            class="w-5 h-5 checkbox-marsala rounded" checked>
                            <label for="member_${{$member['id']}}" class="ml-3 text-gray-700 flex-1">{{$member['name']}}</label>
                        </div> 
                    
                    @endforeach
                </div>
                    
                    

                
                    <div class="pt-3">
                        <button type="submit" id="submitRegister" class="w-full bg-marsala hover:bg-marsalaLight text-white font-medium py-3 px-6 rounded-md transition duration-300 transform hover:scale-[1.02]">
                            Confirmar Presença
                        </button>
                    </div>
                   
                   
                    
                    
                </form>
            </div>
            
            <!-- Rodapé -->
            <x-footer/>
        </div>
    </div>
    
    <!-- Modal de confirmação -->
    <div id="confirmationModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
        <div class="bg-white rounded-lg p-8 max-w-md w-full mx-4">
            <div class="text-center">
                <svg class="w-16 h-16 text-marsala mx-auto" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                </svg>
                <h3 class="playfair text-2xl text-marsala mt-4">Obrigado!</h3>
                <p class="text-gray-700 mt-2">Sua confirmação foi recebida com sucesso.</p>
                <p class="text-gray-700 mt-1">Henderson e Gizelli estão ansiosos para celebrar este momento especial com você!</p>
                <div id="confirmedGuestsList" class="mt-4 text-left bg-cream p-4 rounded-md">
                    <!-- Lista de convidados confirmados será inserida aqui -->
                </div>
                <button id="closeModal" class="mt-6 bg-marsala hover:bg-marsalaLight text-white font-medium py-2 px-6 rounded-md transition duration-300">
                    Fechar
                </button>
            </div>
        </div>
    </div>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const mainGuestNameSpan = document.getElementById('mainGuestName');
            const familyMembersDiv = document.getElementById('familyMembers');
            const rsvpForm = document.getElementById('rsvpForm');
            const confirmationModal = document.getElementById('confirmationModal');
            const confirmedGuestsList = document.getElementById('confirmedGuestsList');
            const closeModalBtn = document.getElementById('closeModal');
            let generalLack= false
        
            // Adicionar botão para selecionar/desmarcar todos
            const selectAllDiv = document.createElement('div');
            selectAllDiv.className = 'flex justify-end mt-2';
            selectAllDiv.innerHTML = `
                <button type="button" id="selectAllBtn" class="text-sm text-marsala hover:underline">Selecionar todos</button>
                <span class="mx-2 text-gray-400">|</span>
                <button type="button" id="deselectAllBtn" class="text-sm text-marsala hover:underline">Desmarcar todos</button>
            `;
            if (familyMembersDiv && familyMembersDiv.children.length > 0) {
                    familyMembersDiv.appendChild(selectAllDiv);
                }
            
            const checkboxes = document.querySelectorAll('input[type="checkbox"]')
            function verifyCheckbox(){
                const allUnchecked = Array.from(checkboxes).every(cb=>!cb.checked)
            
                if (allUnchecked){
                    generalLack=true
                    console.log(generalLack)
                }
                else{
                    generalLack=false
                    console.log(generalLack)
                }
            }

            
            
            checkboxes.forEach(cb => {
            cb.addEventListener('change', verifyCheckbox);
            });
            setInterval(() => {
                const buttonSubmit = document.querySelector('#submitRegister');
                if (generalLack) {
                    buttonSubmit.innerHTML = 'RECUSAR O CONVITE';
                }
                else{
                    buttonSubmit.innerHTML = 'Confirmar Presença'
                }
            }, 500); // a cada 500ms

            // Funcionalidade para selecionar/desmarcar todos
            document.getElementById('selectAllBtn').addEventListener('click', function() {
                const checkboxes = familyMembersDiv.querySelectorAll('input[type="checkbox"]');
                checkboxes.forEach(checkbox => checkbox.checked = true);
                generalLack = false
            });
            
            document.getElementById('deselectAllBtn').addEventListener('click', function() {
                const checkboxes = familyMembersDiv.querySelectorAll('input[type="checkbox"]');
                checkboxes.forEach(checkbox => checkbox.checked = false);
                generalLack= true
            });

            // Fechar modal
            closeModalBtn.addEventListener('click', function() {
                confirmationModal.classList.add('hidden');
            });
            
            // Fechar modal ao clicar fora dele
            confirmationModal.addEventListener('click', function(e) {
                if (e.target === confirmationModal) {
                    confirmationModal.classList.add('hidden');
                }
            });

           
            
        });
    </script>
<script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'93de6c331129d833',t:'MTc0NjkzMjM5MS4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script></body>

<script>function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'93de6c331129d833',t:'MTc0NjkzMjM5MS4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script>
</html>