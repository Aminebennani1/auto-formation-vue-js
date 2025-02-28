<template>
    <div class="container mt-4">
        <h2>Ajouter un Apprenant</h2>
        <form @submit.prevent="addApprenant">
            <input v-model="newApprenant.nom" placeholder="Nom" required class="form-control mb-2" />
            <input v-model="newApprenant.email" placeholder="Email" type="email" required class="form-control mb-2" />
            <input v-model="newApprenant.statut" placeholder="Statut" required class="form-control mb-2" />
            <button type="submit" class="btn btn-outline-success">Ajouter</button>
        </form>

        <h2 class="mt-4">Liste des Apprenants</h2>
        <div v-if="apprenants.length === 0" class="alert alert-warning">No data available.</div>
        <div v-for="apprenant in apprenants" :key="apprenant.id" class="apprenant border p-3 mb-2">
            <p><strong>ID :</strong> {{ apprenant.id }}</p>
            <p><strong>Nom :</strong> {{ apprenant.nom }}</p>
            <p><strong>Email :</strong> {{ apprenant.email }}</p>
            <p><strong>Statut :</strong> {{ apprenant.statut }}</p>
            <hr />
        </div>
    </div>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import axios from 'axios';

const apprenants = ref([]);
const newApprenant = ref({
    nom: '',
    email: '',
    statut: ''
});

const fetchApprenants = async () => {
    try {
        const response = await axios.get('http://127.0.0.1:8000/apprenant');
        apprenants.value = response.data;
    } catch (error) {
        console.error('Error fetching apprenants:', error);
    }
};

const addApprenant = async () => {
    try {
        console.log('Submitting:', newApprenant.value);

        const response = await axios.post('http://127.0.0.1:8000/apprenant', newApprenant.value, {
            headers: {
                'Content-Type': 'application/json',
            }
        });

        apprenants.value.push(response.data); 
        newApprenant.value = { nom: '', email: '', statut: '' };
    } catch (error) {
        console.error('Error adding apprenant:', error);
    }
};

onMounted(fetchApprenants);
</script>

<style scoped>
/* Ajoutez vos styles ici si nécessaire */
</style>