<!-- Footer -->
        <footer class="bg-gray-900 text-white py-8">
            <div class="container mx-auto px-4">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
                    <div>
                        <div class="flex items-center mb-4">
                            <i class="fas fa-motorcycle text-2xl mr-2"></i>
                            <span class="font-bold text-xl">MotoTreinamento</span>
                        </div>
                        <p class="text-gray-400">Formando motociclistas conscientes e preparados para um trânsito mais seguro.</p>
                    </div>
                    
                    <div>
                        <h4 class="text-lg font-bold mb-4">Links Rápidos</h4>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-gray-400 hover:text-white transition">Início</a></li>
                            <li><a href="#modules" class="text-gray-400 hover:text-white transition">Módulos</a></li>
                            <li><a href="#benefits" class="text-gray-400 hover:text-white transition">Benefícios</a></li>
                            <li><a href="#testimonials" class="text-gray-400 hover:text-white transition">Depoimentos</a></li>
                            <li><a href="#contact" class="text-gray-400 hover:text-white transition">Contato</a></li>
                        </ul>
                    </div>
                    
                    <div>
                        <h4 class="text-lg font-bold mb-4">Módulos</h4>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-gray-400 hover:text-white transition">Manutenção de Moto</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white transition">Pilotagem Segura</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white transition">Primeiros Socorros</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white transition">Combate às Drogas</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white transition">Relacionamento Interpessoal</a></li>
                        </ul>
                    </div>
                    
                    <div>
                        <h4 class="text-lg font-bold mb-4">Newsletter</h4>
                        <p class="text-gray-400 mb-4">Inscreva-se para receber dicas e novidades sobre pilotagem segura.</p>
                        <form>
                            <div class="flex">
                                <input type="email" placeholder="Seu email" class="px-4 py-2 rounded-l-lg w-full focus:outline-none text-gray-900">
                                <button type="submit" class="bg-blue-800 hover:bg-blue-700 px-4 py-2 rounded-r-lg transition">
                                    <i class="fas fa-paper-plane"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                
                <div class="border-t border-gray-800 pt-6 text-center text-gray-400">
                    <p>&copy; 2025 Pilote Bem. Todos os direitos reservados.</p>
                </div>
            </div>
        </footer>

        <script>
            // Mobile menu toggle
            document.addEventListener('DOMContentLoaded', function() {

                const menuButton = document.querySelector('button.md\\:hidden');
                const mobileMenu = document.createElement('div');
                mobileMenu.className = 'md:hidden bg-blue-900 absolute w-full left-0 top-14 z-50 shadow-lg hidden';
                mobileMenu.innerHTML = `
                    <div class="flex flex-col p-4 space-y-3">
                        <a href="#" class="text-white hover:text-blue-300 transition py-2">Início</a>
                        <a href="#modules" class="text-white hover:text-blue-300 transition py-2">Módulos</a>
                        <a href="#benefits" class="text-white hover:text-blue-300 transition py-2">Benefícios</a>
                        <a href="#testimonials" class="text-white hover:text-blue-300 transition py-2">Depoimentos</a>
                        <a href="#contact" class="text-white hover:text-blue-300 transition py-2">Contato</a>
                    </div>
                `;
                document.querySelector('nav').appendChild(mobileMenu);
                
                menuButton.addEventListener('click', function() {
                    mobileMenu.classList.toggle('hidden');
                });
                
                // Close mobile menu when clicking on links
                mobileMenu.querySelectorAll('a').forEach(link => {
                    link.addEventListener('click', function() {
                        mobileMenu.classList.add('hidden');
                    });
                });

                // Form submission
                const botao = document.getElementById('enviar');

                botao.addEventListener('click', function(event) {
                    console.log(event);
                    
                    const nome = document.getElementById('name').value;
                    const subject = document.getElementById('subject').value;
                    const mensagem = document.getElementById('mensagem').value;
                    
                    alert(`Agradecemos o seu contato, ${nome}. Sua mensagem foi enviada com sucesso!`);
                    return false
                })
                
            });
        </script>