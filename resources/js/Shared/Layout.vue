<script setup>
import { Link } from "@inertiajs/vue3";
import { Head } from "@inertiajs/vue3";
</script>

<template>
    <Head>
        <title>My Vue App</title>
        <meta
            name="description"
            content="A simple Vue.js application using Inertia.js"
        />
    </Head>
    <main>
        <header>
            <Link href="/" :class="{ active: $page.url === '/' }">Home</Link>
            <Link href="/about">About</Link>
            <Link href="/contact" :class="{ active: $page.url === '/contact' }"
                >Contact</Link
            >
        </header>
        <article>
            <slot />
        </article>
    </main>
</template>
