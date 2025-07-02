<script setup>
import { usePage, useForm } from "@inertiajs/vue3";

const page = usePage();

const form = useForm({
    name: "",
    email: "",
    message: "",
});

function submit() {
    form.post("/contact");
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
                <span v-if="form.errors.name" class="error">
                    {{ form.errors.name }}
                </span>
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
                <span v-if="form.errors.email" class="error">
                    {{ form.errors.email }}
                </span>
            </div>
            <div>
                <label for="message">Message:</label>
                <textarea
                    id="message"
                    name="message"
                    v-model="form.message"
                    required
                ></textarea>
                <span v-if="form.errors.message" class="error">
                    {{ form.errors.message }}
                </span>
            </div>
            <button :disabled="form.processing" type="submit">
                Send message
            </button>
        </form>
        <p>Thank you for reaching out to us!</p>
        <p>We will get back to you as soon as possible.</p>
    </div>
</template>
