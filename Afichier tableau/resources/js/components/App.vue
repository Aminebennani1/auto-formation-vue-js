<template>
    <div>
         <div>
        <h2>Liste des Apprenants</h2>
        <div v-if="apprenant.length === 0">No data available.</div>
        <div v-for="apprenant in apprenant" :key="apprenant.id" class="apprenant">
            <p><strong>ID :</strong> {{ apprenant.id }}</p>
            <p><strong>Nom :</strong> {{ apprenant.nom }}</p>
            <p><strong>Email :</strong> {{ apprenant.email }}</p>
            <p><strong>Statut :</strong> {{ apprenant.statut }}</p>
            <hr />
        </div>
    </div>
    </div>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import axios from 'axios'; // Assurez-vous que cela est correct

const apprenant = ref([]);

const fetchapprenant = async () => {
    try {
        const response = await axios.get('http://127.0.0.1:8000/apprenant');
        apprenant.value = response.data;
    } catch (error) {
        console.error('Error fetching apprenant:', error);
    }
};

onMounted(fetchapprenant);
</script>

<style scoped>
/* Ajoutez vos styles ici */
</style>