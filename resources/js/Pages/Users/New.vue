<script setup>
import { reactive } from "vue";
import { router } from "@inertiajs/vue3";
const form = reactive({
    name: "",
    email: "",
});

const submit = () => {
    router
        .post("/users", form)
        .then(() => {
            // Handle success
            alert("User created successfully!");
        })
        .catch((error) => {
            // Handle error
            console.error("Error creating user:", error);
        });
};
</script>

<template>
    <form @submit.prevent="submit">
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" v-model="form.name" />
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" v-model="form.email" />
        </div>
        <button type="submit">Create User</button>
    </form>
</template>
