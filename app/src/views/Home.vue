<!-- aqui vai um -->
<template>
  <VContainer>
    <VBtn @click="sanctum" color="success">Sanctum</VBtn>
    <VBtn @click="login" color="info">Login</VBtn>

  </VContainer>
</template>

<script setup>
import axios from 'axios'
axios.defaults.withCredentials = true;
function sanctum() {
  axios.get('http://localhost:8000/sanctum/csrf-cookie').then(r => {
    console.log(r);
  });
}

function login() {

  axios.post('http://localhost:8000/login', {
    email: 'text@example.com',
    password: 'password'
  }).then(r => {
    console.log(r);
  });
}
</script>
