
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
