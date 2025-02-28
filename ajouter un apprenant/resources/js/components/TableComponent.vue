<template>
    <!-- <div>
        <h2>Liste des Apprenants</h2>
        <div v-if="apprenants.length === 0">No data available.</div>
        <div v-for="apprenant in apprenants" :key="apprenant.id" class="apprenant">
            <p><strong>ID :</strong> {{ apprenant.id }}</p>
            <p><strong>Nom :</strong> {{ apprenant.nom }}</p>
            <p><strong>Email :</strong> {{ apprenant.email }}</p>
            <p><strong>Statut :</strong> {{ apprenant.statut }}</p>
            <hr />
        </div>
    </div> -->
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            apprenants: [], // Initialize an empty array to store the data
        };
    },
    mounted() {
        this.fetchApprenants(); // Fetch data when the component is mounted
    },
    methods: {
        fetchApprenants() {
            console.log("Fetching apprenants...");
            axios.get('/api/apprenants') // Fetch data from the API
                .then(response => {
                    // Check if the response data is an array
                    if (Array.isArray(response.data)) {
                        console.log("Response data:", response.data); // Log the response
                        this.apprenants = response.data; // Store the data
                    } else {
                        console.error("Unexpected response format:", response.data);
                    }
                })
                .catch(error => {
                    console.error("Error fetching apprenants:", error); // Log errors
                });
        }
    }
}
</script>

<style scoped>
.apprenant {
    margin: 10px 0; /* Spacing between apprenants */
    padding: 10px;
    border: 1px solid #ddd; /* Border around each apprenant */
}
hr {
    border: 0;
    height: 1px;
    background: #ccc; /* Separator line */
}
</style>