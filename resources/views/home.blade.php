<x-site-layout>
  
    <!-- Hero Section -->
    <section class="hero-section flex items-center justify-center text-white" style="background-image: url({{ asset('images/motocycle_bg.png') }})">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-4 text-slate-50 bg-black bg-opacity-50 rounded-full p-3">Treinamento Completo para Motociclistas</h1>
            <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto bg-black bg-opacity-50 rounded-full p-3">Aprimore suas habilidades com nossos módulos teóricos e práticos, desenvolvidos por especialistas em pilotagem segura.</p>
            <div class="flex flex-col md:flex-row justify-center space-y-4 md:space-y-0 md:space-x-4">
                <a href="#modules" class="bg-blue-700 hover:bg-yellow-500 text-white-900 hover:text-emerald-700 font-bold py-3 px-8 rounded-lg transition transform hover:scale-105">
                    Começar Agora
                </a>
                <a href="#modules" class="bg-emerald-800 hover:bg-white hover:text-blue-900 font-bold py-3 px-8 rounded-lg transition">
                    Conhecer os Módulos
                </a>
            </div>
        </div>
    </section>    

    <!-- Modules Section -->
    <section id="modules" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Nossos Módulos de Treinamento</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Conheça os módulos completos que preparamos para sua formação como motociclista consciente e seguro.</p>
            </div>
            
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 justify-center items-center">
                <!-- Module 1 -->
                <div class="module-card bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="bg-blue-800 h-2"></div>
                    <div class="p-6">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                            <i class="fas fa-tools text-blue-800 text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-2">Manutenção de Moto</h3>
                        <p class="text-gray-600 mb-4">Aprenda a cuidar da sua moto e evitar problemas mecânicos, garantindo mais segurança e economia.</p>
                        <a href="#" class="text-blue-800 font-semibold hover:text-blue-600 flex items-center">
                            Ver Módulo <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Module 2 -->
                <div class="module-card bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="bg-teal-600 h-2"></div>
                    <div class="p-6">
                        <div class="w-16 h-16 bg-teal-100 rounded-full flex items-center justify-center mb-4">
                            <i class="fas fa-helmet-safety text-teal-600 text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-2">Pilotagem Segura</h3>
                        <p class="text-gray-600 mb-4">Técnicas avançadas para pilotar com segurança em qualquer situação, incluindo condições adversas.</p>
                        <a href="#" class="text-teal-500 font-semibold hover:text-teal-500 flex items-center">
                            Ver Módulo <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Module 3 -->
                <div class="module-card bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="bg-yellow-500 h-2"></div>
                    <div class="p-6">
                        <div class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mb-4">
                            <i class="fas fa-kit-medical text-yellow-500 text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-2">Primeiros Socorros</h3>
                        <p class="text-gray-600 mb-4">Saiba como agir em situações de emergência no trânsito, podendo salvar vidas em momentos críticos.</p>
                        <a href="#" class="text-yellow-500 font-semibold hover:text-yellow-700 flex items-center">
                            Ver Módulo <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Module 4 -->
                <div class="module-card bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="bg-sky-500 h-2"></div>
                    <div class="p-6">
                        <div class="w-16 h-16 bg-sky-100 rounded-full flex items-center justify-center mb-4">
                            <i class="fas fa-triangle-exclamation text-sky-500 text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-2">Combate às Drogas</h3>
                        <p class="text-gray-600 mb-4">Conscientização sobre os riscos das drogas no trânsito e como a prevenção pode evitar acidentes.</p>
                        <a href="#" class="text-sky-500 font-semibold hover:text-sky-400 flex items-center">
                            Ver Módulo <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>

                <!-- Module 5 -->
                <div class="module-card bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="bg-slate-500 h-2"></div>
                    <div class="p-6">
                        <div class="w-16 h-16 bg-slate-100 rounded-full flex items-center justify-center mb-4">
                            <i class="fas fa-triangle-exclamation text-slate-500 text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-2">Relacionamento Interpessoal</h3>
                        <p class="text-gray-600 mb-4">A relação interpessoal é a forma como as pessoas interagem e se relacionam umas com as outras.</p>
                        <a href="#" class="text-slate-500 font-semibold hover:text-slate-400 flex items-center">
                            Ver Módulo <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Paralax Section -->
    <section id="benefits" class="py-16 bg-transparent h-72">  
    </section> 

    <!-- Benefits Section -->
    <section id="benefits" class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Por que escolher nosso treinamento?</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Nosso programa foi desenvolvido pensando na sua segurança e no seu desenvolvimento como motociclista.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Benefit 1 -->
                <div class="bg-white p-8 rounded-lg shadow-md">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-book text-blue-800 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Conteúdo Completo</h3>
                    <p class="text-gray-600">Material teórico e prático desenvolvido por especialistas com anos de experiência em pilotagem e segurança.</p>
                </div>
                
                <!-- Benefit 2 -->
                <div class="bg-white p-8 rounded-lg shadow-md">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-certificate text-blue-800 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Certificado Reconhecido</h3>
                    <p class="text-gray-600">Receba um certificado após a conclusão do treinamento, valorizado por empresas e instituições do setor.</p>
                </div>
                
                <!-- Benefit 3 -->
                <div class="bg-white p-8 rounded-lg shadow-md">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-users text-blue-800 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Comunidade Ativa</h3>
                    <p class="text-gray-600">Participe de uma comunidade de motociclistas para trocar experiências e continuar aprendendo.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonial-section py-16 text-white" style="background-image: url({{ asset('images/testmonial.png') }})">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">O que dizem nossos alunos</h2>
                <p class="max-w-2xl mx-auto">Veja o depoimento de quem já participou do nosso treinamento e transformou sua experiência como motociclista.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-white bg-opacity-10 p-6 rounded-lg backdrop-filter backdrop-blur-sm">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center mr-4">
                            <span class="text-white font-bold">RP</span>
                        </div>
                        <div>
                            <h4 class="font-bold">Ricardo Pereira</h4>
                            <p class="text-sm text-gray-300">Motociclista há 5 anos</p>
                        </div>
                    </div>
                    <p class="italic">"O módulo de manutenção me ajudou a economizar muito dinheiro. Agora consigo identificar problemas antes que se tornem graves."</p>
                </div>
                
                <!-- Testimonial 2 -->
                <div class="bg-white bg-opacity-10 p-6 rounded-lg backdrop-filter backdrop-blur-sm">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-rose-400 rounded-full flex items-center justify-center mr-4">
                            <span class="text-white font-bold">MS</span>
                        </div>
                        <div>
                            <h4 class="font-bold">Mariana Silva</h4>
                            <p class="text-sm text-gray-300">Motociclista iniciante</p>
                        </div>
                    </div>
                    <p class="italic">"As técnicas de pilotagem segura me deram confiança para enfrentar o trânsito. Recomendo para todos os iniciantes."</p>
                </div>
                
                <!-- Testimonial 3 -->
                <div class="bg-white bg-opacity-10 p-6 rounded-lg backdrop-filter backdrop-blur-sm">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-green-600 rounded-full flex items-center justify-center mr-4">
                            <span class="text-white font-bold">CA</span>
                        </div>
                        <div>
                            <h4 class="font-bold">Carlos Almeida</h4>
                            <p class="text-sm text-gray-300">Motociclista profissional</p>
                        </div>
                    </div>
                    <p class="italic">"O curso de primeiros socorros me permitiu ajudar um motociclista acidentado. Conhecimento que todo piloto deveria ter."</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-gray-900 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Pronto para se tornar um motociclista mais seguro e preparado?</h2>
            <p class="text-xl mb-8 max-w-3xl mx-auto">Inscreva-se hoje mesmo e comece sua jornada para uma pilotagem mais consciente e segura.</p>
            <button x-on:click="show = true" class="bg-teal-600 hover:bg-yellow-500 text-white text-lg hover:text-teal-700 font-bold py-3 px-8 rounded-lg inline-block transition transform hover:scale-105 animate-pulse">
                Inscreva-se Agora
            </button>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Entre em Contato</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Tem dúvidas sobre nosso treinamento? Estamos aqui para ajudar.</p>
            </div>
            
            <div class="max-w-4xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div>
                        <h3 class="text-xl font-bold mb-4">Informações de Contato</h3>
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <i class="fas fa-map-marker-alt text-blue-800 mt-1 mr-3"></i>
                                <p>Av. das Motos, 1234<br>Natal - RN, 59000-000</p>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-phone text-blue-800 mr-3"></i>
                                <p>(84) 2020-9999</p>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-envelope text-blue-800 mr-3"></i>
                                <p>contato@mototreinamento.com.br</p>
                            </div>
                        </div>
                        
                        <h3 class="text-xl font-bold mt-8 mb-4">Nos siga nas redes</h3>
                        <div class="flex space-x-4">
                            <a href="#" class="w-10 h-10 bg-blue-800 text-white rounded-full flex items-center justify-center hover:bg-blue-700 transition">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="w-10 h-10 bg-blue-400 text-white rounded-full flex items-center justify-center hover:bg-blue-500 transition">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="w-10 h-10 bg-gradient-to-r from-purple-500 to-pink-500 text-white rounded-full flex items-center justify-center hover:from-purple-600 hover:to-pink-600 transition">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" class="w-10 h-10 bg-red-600 text-white rounded-full flex items-center justify-center hover:bg-red-700 transition">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                    
                    <div>
                        <form>
                            <div class="mb-4">
                                <label for="name" class="block text-gray-700 font-medium mb-2">Nome</label>
                                <input type="text" id="name" name="nome" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            </div>
                            <div class="mb-4">
                                <label for="subject" class="block text-gray-700 font-medium mb-2">Assunto</label>
                                <input type="text" id="subject" name="subject" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            </div>                                                       
                            <div class="mb-4">
                                <label for="subject" class="block text-gray-700 font-medium mb-2">Mensagem</label>
                                <textarea id="mensagem" name="mensagem" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                            </div>                                                       
                            <button type="button" id="enviar" class="bg-blue-800 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded-lg transition" onclick="enviarMensagem()">
                                Enviar Mensagem
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <x-slot name="dialog">
        @include('components.dialog', $regioes)
    </x-slot>
    
</x-site-layout>