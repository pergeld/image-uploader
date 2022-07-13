<template>
    <div class="mt-12">
        <file-pond
            name="image"
            ref="pond"
            label-idle="Képek feltöltéséhez kattints ide, vagy húzd ide a képeket."
            @init="filepondInitialized"
            accepted-file-types="image/*"
        />
    </div>
</template>

<script>
    import vueFilePond, { setOptions } from 'vue-filepond';
    import "filepond/dist/filepond.min.css";
    import FilePondPluginFileValidateType from 'filepond-plugin-file-validate-type';

    setOptions({
        server: {
            process: {
                url: './upload',
                headers: {
                    'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf_token"]').content
                }
            }
        }
    })

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
