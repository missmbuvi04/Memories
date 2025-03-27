<template>
    <div
        class="flex min-h-screen items-center justify-center bg-cover bg-center"
        style="background-image: url('/images/background.jpg')"
    >
        <div
            class="w-2/3 max-w-2xl rounded-lg bg-white bg-opacity-80 p-8 shadow-lg"
        >
            <h2 class="mb-4 text-xl font-bold text-gray-800">
                Create your album!
            </h2>

            <form @submit.prevent="submitAlbum">
                <!-- Full Name -->
                <div class="mb-4">
                    <label class="block text-gray-700">Full Name</label>
                    <input
                        v-model="form.name"
                        type="text"
                        class="w-full rounded-lg border px-4 py-2 focus:outline-none focus:ring focus:ring-blue-300"
                        required
                    />
                </div>

                <!-- Role -->
                <div class="mb-4">
                    <label class="block text-gray-700">Role</label>
                    <input
                        v-model="form.role"
                        type="text"
                        class="w-full rounded-lg border px-4 py-2 focus:outline-none focus:ring focus:ring-blue-300"
                        required
                    />
                </div>
                <!--invite code-->
                <!-- <div class="mb-4">
                    <label class="block text-gray-700">Invite Code</label>
                    <div class="flex">
                        <input
                            v-model="form.code"
                            type="text"
                            class="w-full rounded-lg border px-4 py-2 focus:outline-none focus:ring focus:ring-blue-300"
                            readonly
                        />
                        <button
                            @click="generateInviteCode"
                            class="ml-2 rounded-lg bg-blue-500 px-4 py-2 text-white hover:bg-blue-600"
                        >
                            Generate
                        </button>
                    </div>
                </div> -->

                <!-- File Upload -->
                <div
                    class="mb-4 rounded-lg border-2 border-dashed border-gray-300 p-6 text-center"
                >
                    <input
                        type="file"
                        ref="fileInput"
                        class="hidden"
                        @change="handleFileUpload"
                    />
                    <div @click="triggerFileInput" class="cursor-pointer">
                        <i
                            class="fas fa-cloud-upload-alt text-3xl text-gray-500"
                        ></i>
                        <p class="text-gray-600">
                            Drag and drop your Album photo here or select a
                            file!
                        </p>
                    </div>
                </div>

                <!-- Submit Button -->
                <button
                    type="submit"
                    class="w-full rounded-lg bg-gradient-to-r from-purple-500 to-blue-500 py-2 text-white shadow-md hover:opacity-90"
                >
                    Create Album
                </button>
            </form>
            <!--invite code-->
            <div class="mb-4 mt-10">
                <label class="block text-gray-700">Invite Code</label>
                <div class="flex">
                    <input
                        v-model="form.code"
                        type="text"
                        class="w-full rounded-lg border px-4 py-2 focus:outline-none focus:ring focus:ring-blue-300"
                        readonly
                    />
                    <button
                        @click="generateInviteCode"
                        class="ml-2 rounded-lg bg-blue-500 px-4 py-2 text-white hover:bg-blue-600"
                    >
                        Generate
                    </button>
                </div>
            </div>

            <!-- Social Media Icons -->
            <div class="mt-4 flex justify-center space-x-6 text-gray-700">
                <i class="fab fa-whatsapp text-2xl"></i>
                <i class="fab fa-facebook text-2xl"></i>
                <i class="fab fa-instagram text-2xl"></i>
            </div>
        </div>
    </div>
</template>

<script>
import { useForm } from '@inertiajs/vue3';

export default {
    data() {
        return {
            form: useForm({
                name: '',
                role: '',
                photo: null,
                code: '',
            }),
        };
    },

    methods: {
        submitAlbum() {
            this.form.post('/albums', {
                onSuccess: () => alert('Album created successfully!'),
            });
        },
        triggerFileInput() {
            this.$refs.fileInput.click();
        },
        handleFileUpload(event) {
            this.form.photo = event.target.files[0];
        },
        generateInviteCode() {
            this.form.code = Math.random().toString(36).substring(2, 8);
        },
    },
};
</script>
