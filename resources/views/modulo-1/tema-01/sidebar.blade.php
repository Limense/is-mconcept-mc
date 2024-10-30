<div class="bg-secondary pl-[10px] rounded-[10px] pr-0 max-w-[500px] mx-auto">
    <div class="h-full bg-profile-primary border-[2px] border-secondary rounded-[10px] pt-4 pl-2 pb-2 pr-0">
        <div class="flex flex-col">
            <div class="flex items-center px-[.5rem] my-10">
                <div class="px-[15px]">
                    <span class="font-bold text-[15px] text-center text-white font-press-start">
                        ORIGEN, OBJETIVOS, FINALIDAD, PRINCIPIOS Y CARACTERÍSTICAS DE LA INGENIERÍA DE SOFTWARE
                    </span>
                </div>
            </div>
            <ul class="flex-grow w-full">
                <li class="w-full mb-2">
                    <a href="#" id="btn-introduccion"
                        class="flex items-center p-2 text-white rounded-lg group w-full text-[20px]">
                        <span class="ms-3">Introducción</span>
                    </a>
                </li>
                <li class="w-full mb-2">
                    <a href="#" id="btn-unidad"
                        class="flex items-center p-2 text-white rounded-lg group w-full text-[20px]">
                        <span class="ms-3">Unidad</span>
                    </a>
                </li>
                <li class="w-full mb-2">
                    <a href="#" id="btn-contenido-adicional"
                        class="flex items-center p-2 text-white rounded-lg group w-full text-[20px]">
                        <span class="ms-3">Evaluación</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

<script>
const links = document.querySelectorAll('.bg-profile-primary a');

links.forEach(item => {
    item.addEventListener('click', event => {
        links.forEach(link => {
            link.classList.remove('text-blue-500'); // Cambia este color si es necesario
            link.classList.add('text-white'); // Color por defecto
        });

        // Agregar la clase de color al enlace que fue clicado
        item.classList.add('text-blue-500'); // Cambia esto al color deseado
    });
});
</script>