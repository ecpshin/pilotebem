<!-- Navbar -->
<nav class="bg-gray-900 text-white shadow-lg">
    <div class="container mx-auto px-4 py-3">
        <div class="flex justify-between items-center">
            <div class="flex items-center">
                <i class="fas fa-motorcycle text-2xl mr-2"></i>
                <span class="font-bold text-xl">Pilote Bem</span>
            </div>
            <div class="hidden md:flex space-x-6">
                <a href="#" class="hover:text-blue-300 transition">Início</a>
                <a href="#modules" class="hover:text-blue-300 transition">Módulos</a>
                <a href="#benefits" class="hover:text-blue-300 transition">Benefícios</a>
                <a href="#testimonials" class="hover:text-blue-300 transition">Depoimentos</a>
                <a href="#contact" class="hover:text-blue-300 transition">Contato</a>
            </div>
            <div class="flex items-center space-x-4">
                <a href="{{ route('filament.admin.auth.login') }}" class="bg-blue-700 hover:bg-blue-600 px-4 py-2 rounded-lg transition">Entrar</a>
                <button class="md:hidden focus:outline-none">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
        </div>
    </div>
</nav>