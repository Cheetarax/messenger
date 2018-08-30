<template>
<b-list-group>
    <div>
        <!-- Barra de búsqueda -->
        <b-form class="my-3 mx-2">
            <b-form-input
                type="text"
                placeholder="Buscar...">
            </b-form-input>
        </b-form>

        <contact-component v-for="conversation in conversations" :key="conversation.id" :conversation="conversation">
        </contact-component>

        <!-- Lista de contactos --> 

        <!--
        <contact-component variant="info">
        </contact-component>

        <contact-component variant="">
        </contact-component>

        <contact-component variant="secondary">
        </contact-component>
        -->

    </div>
    
</b-list-group>

</template>

<script>
    export default {
        data() {
            return {
                conversations: []
            };
        },

        mounted() {
            this.getConversations();
        },
        methods: {
            getConversations() {
                axios.get('/api/conversations')
                .then((response) => {
                    this.conversations = response.data;
                });
            }
        }
    }
</script>