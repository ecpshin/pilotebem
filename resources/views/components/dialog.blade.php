<div class="relative z-10 " aria-labelledby="dialog-title" role="dialog" aria-modal="true" x-show="show" x-transition.opacity.duration.300ms x-on:close.stop="show = false" x-on:keydown.escape.window="show = false" x-on:click.outside.window="show = false" x-on:keydown.tab.prevent="$event.shiftKey || nextFocusable().focus()" x-on:keydown.shift.tab.prevent="prevFocusable().focus()" tabindex="dialog">    
    <div class="fixed inset-0 bg-gray-500/75 transition-opacity" aria-hidden="true"></div>
        
    <div class="fixed inset-0 z-10 w-screen overflow-y-auto">

        <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
            
            <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-xl">
                
                <div class="max-w-7xl bg-stone-100 p-4">
                    
                    <div class="sm:flex flex-col sm:items-center">
                        <div class="w-6 h-6 text-bold cursor-pointer absolute top-3 right-3" x-on:click="show = false">X</div>
                        <div class="mt-3 text-center flex flex-col justify-center items-center sm:mt-0 sm:ml-4 sm:text-start">
                            <div class="mx-auto flex size-24 shrink-0 items-center justify-center rounded-full bg-transparent sm:mx-0 sm:size-16">                
                                <img src="{{ asset('images/capacete.svg') }}" alt="">
                            </div>
                            <h3 class="text-xl font-bold text-emerald-800" id="dialog-title">FICHA DE INSCRIÇÃO</h3>
                        </div>
                        
                        <div class="w-full mt-3 text-center sm:mt-0 sm:text-left">
                            <div class="mt-2">
                                <form enctype="multipart/form-data">
                                    <div class="mb-4">
                                        <label for="nome" class="block text-gray-700 font-medium mb-2">Nome</label>
                                        <input type="text" id="nome" name="nome" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Nome Completo">
                                    </div>

                                    <div class="mb-4">
                                        <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                                        <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="fulano@example.com" required>
                                    </div>                                                       
                                    
                                    <div class="mb-4">
                                        <label for="phone" class="block text-gray-700 font-medium mb-2">Contato (WhatsApp)</label>
                                        <input id="phone" type="tel" name="phone" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="(00) 00000-0000" required>
                                    </div>      

                                    <div class="mb-4">
                                        <label for="regiao" class="block text-gray-700 font-medium mb-2">Região</label>
                                        <select id="regiao" name="regiao" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="(00) 00000-0000" required>
                                            <option value="">Selecione a Região</option>
                                            @foreach ($regioes as $regiao)
                                                <optgroup label="{{ $regiao->nome_regiao }}">
                                                    <option value="{{ $regiao->id }}">{{ $regiao->municipio_regiao }}</option>
                                                </optgroup>
                                            @endforeach
                                        </select>
                                    </div>                                                                                                                                   
                                    
                                    <div class="mb-4">
                                        <label for="cover-photo" class="block text-sm/6 font-medium text-gray-900">CNH e Documento da Moto</label>
                                        <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                                            <div class="text-center">                                    
                                                <div class="mt-4 flex text-sm/6 text-gray-600">
                                                    <label for="files" class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                                                    <span>Upload a file</span>
                                                    <input id="files" name="files[]" multiple type="file" class="sr-only">
                                                    </label>
                                                    <p class="pl-1">Arraste e solte aqui</p>
                                                </div>
                                                <p class="text-xs/5 text-gray-600">PNG, JPG ou PDF até 10MB</p>
                                            </div>
                                        </div>                            
                                    </div>  
                                    
                                    <div class="flex justify-center space-x-2">
                                        <button type="button" id="enviar" class="bg-blue-800 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded-lg transition" x-on:click="show = false" onclick="enviarMensagem()">Inscrever-se</button>
                                        <button type="button" id="fechar" class="bg-stone-400 hover:bg-slate-700 text-white font-bold py-2 px-6 rounded-lg transition" x-on:click="show = false" onclick="enviarMensagem()">Cancelar</button>
                                    </div>
                                    
                                </form>
                            </div>
                        </div>
                    
                    </div>

                </div> 

            </div>

        </div>

    </div>

</div>