<template>
    <b-list-group-item :variant="variant">
        <b-row class="p-2" aling-h="center">
            <b-col cols="12" md="3" class="text.center">
                <b-img rounded="circle" blank width="75" height="75" blank-color="#777" alt="img" class="m-1" />
            </b-col>
            <b-col cols="7" align-self="center" class="d-none d-md-block">
                <p class="mb-1"><b>{{ conversation.contact_name }}</b></p>
                <p class="text-muted small mb-0"> {{ conversation.last_message }}</p>
            </b-col>
            <b-col cols="2" class="d-none d-md-block">
                    <p class="text-muted small">{{ conversation.last_time }}</p>
            </b-col>
        </b-row>
    </b-list-group-item>
</template>

<script>
    export default {
        props: {
            variant: String,
            /* Propiedad externa que le paso desde ContactListComponent y desde donde conseguimos el contact_name, last_message y last_time*/
            conversation: Object
        },

        data() {
            return {
                    
            };
        },

        mounted() {
            
        }
    }
</script>