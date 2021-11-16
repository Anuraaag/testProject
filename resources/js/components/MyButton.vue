<template>
    <div>
         <button :type="type" class="vue-btn" v-text="another_btn"> My Button </button> 

         <!--  v-text="text"  to use the prop value sent from home -->
    </div>
</template>

<script>
    export default {
        mounted() {
        console.log('Component mounted.')

            axios.post('api/vue', {}).then(response => {
                this.another_btn = response.data.name;
            })
        },

        data: function () {
            return {
                another_btn: null,
            }
        },

        props: [
            'text',
            'type'
        ]    
    
    }
</script>

<style>
    .vue-btn {
        background: #333;
        color: #fff;
        padding: 10px 20px;
        font-weight: bold;
    }

</style>

