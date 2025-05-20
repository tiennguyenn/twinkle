<script setup>
defineProps({
    users: Array,
});
</script>
<template>
    <div class="container">
        <h1>List users</h1>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="user in users" :key="user.id">
                    <td>{{ user.name }}</td>
                    <td>{{ user.email }}</td>
                    <td>
                        <a :href="`/users/${user.id}`">View</a>
                        <a :href="`/users/${user.id}/edit`">Edit</a>
                        <form
                            :action="`/users/${user.id}`"
                            method="POST"
                            style="display: inline"
                        >
                            @csrf @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>
