<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import { Head, Link, useForm } from '@inertiajs/vue3'



// Creamos el formulario con los campos del estudiante
const form = useForm({
    codigo: '',
    nombres: '',
    pri_ape: '',
    seg_ape: '',
    dni: ''
})

const createEstudiantes= () => {
    const url = route('estudiantes.store');

    formulario.post(url, {
        onSuccess: (response) => {
            console.log(response+' ok');
        }
    })
}

// Enviar formulario
const submit = () => {
    form.post(route('estudiantes.store'))
}
</script>

<template>
    <Head title="Registrar Estudiante" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-3xl font-bold text-center text-blue-600 py-4">
                Registrar Nuevo Estudiante
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-3xl mx-auto bg-white shadow-md rounded-lg p-6 mt-6">
                <form @submit.prevent="submit" class="space-y-4">
                <div>
                    <label class="block text-gray-700 font-semibold">Código</label>
                    <input v-model="form.codigo" type="text" class="w-full border rounded p-2" required>
                </div>

                <div>
                    <label class="block text-gray-700 font-semibold">Nombres</label>
                    <input v-model="form.nombres" type="text" class="w-full border rounded p-2" required>
                    
                </div>

                <div>
                    <label class="block text-gray-700 font-semibold">Primer Apellido</label>
                    <input v-model="form.pri_ape" type="text" class="w-full border rounded p-2" required>
                    
                </div>

                <div>
                    <label class="block text-gray-700 font-semibold">Segundo Apellido</label>
                    <input v-model="form.seg_ape" type="text" class="w-full border rounded p-2">
                    
                </div>

                <div>
                    <label class="block text-gray-700 font-semibold">DNI</label>
                    <input v-model="form.dni" type="text" maxlength="8" class="w-full border rounded p-2" required>
                    
                </div>

                <div class="flex justify-between items-center mt-6">
                    <Link
                        :href="route('estudiantes.index')"
                        class="bg-gray-400 hover:bg-gray-500 text-white font-bold py-2 px-4 rounded"
                    >
                        Volver
                    </Link>

                    <button
                        type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                        :disabled="form.processing"
                    >
                        Guardar
                    </button>
                </div>
            </form>

            </div>
        </div>
    </AuthenticatedLayout>
</template>