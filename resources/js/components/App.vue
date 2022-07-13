<template>
    <div class="mt-12">
        <file-pond
            name="image"
            ref="pond"
            label-idle="Képek feltöltéséhez kattints ide, vagy húzd ide a képeket."
            server="/upload"
            @init="filepondInitialized"
            accepted-file-types="image/*"
        />
    </div>
</template>

<script>
    import vueFilePond from 'vue-filepond';
    import "filepond/dist/filepond.min.css";
    import FilePondPluginFileValidateType from 'filepond-plugin-file-validate-type';

    const FilePond = vueFilePond(FilePondPluginFileValidateType);

    export default {
        components: {
            FilePond
        },
        data() {
            return {

            }
        },
        methods: {
            filepondInitialized() {
                console.log('Filepond is ready!');
                console.log('Filepond object:', this.$refs.pond);
            }
        }
    }
</script>
