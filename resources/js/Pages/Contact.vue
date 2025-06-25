<script setup>
import { reactive } from "vue";
import { router } from "@inertiajs/vue3";

const form = reactive({
    name: "",
    email: "",
    message: "",
});

function submit() {
    router.post("/contact", form);
    console.log("Form submitted:", form);
}
</script>
<template>
    <div>
        <h1>Contact Us</h1>
        <p>If you have any questions, feel free to reach out!</p>
        <form @submit.prevent="submit">
            <div>
                <label for="name">Name:</label>
                <input
                    type="text"
                    id="name"
                    name="name"
                    v-model="form.name"
                    required
                />
            </div>
            <div>
                <label for="email">Email:</label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    v-model="form.email"
                    required
                />
            </div>
            <div>
                <label for="message">Message:</label>
                <textarea
                    id="message"
                    name="message"
                    v-model="form.message"
                    required
                ></textarea>
            </div>
            <button type="submit">Send message</button>
        </form>
        <p>Thank you for reaching out to us!</p>
        <p>We will get back to you as soon as possible.</p>
    </div>
</template>
