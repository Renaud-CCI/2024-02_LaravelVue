<template>
  <h1>Users List</h1>
  <div v-for="user in users" :key="user.id">
    <h3>{{ user.name }}</h3>
    <p>{{ user.email }}</p>
  </div>

</template>

<script setup>
import { ref } from 'vue';
import axios from 'axios';

let users = ref([]);

const loadFromServer = async () => {
  try {
    const response = await axios.get('/api/users');
    users.value = response.data.data;
  } catch (error) {
    console.log(error);
  }
};

loadFromServer();
</script>
