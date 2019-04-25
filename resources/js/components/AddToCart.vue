<template>
    <div>
        <button class="btn btn-primary my-2" @click="addToCart" :disabled="disabled">Ajouter au panier</button>
    </div>
</template>
<script>
export default {
    props: ['product_id'],
    data() {
        return {
            disabled: false
        }
    },
    mounted() {
        console.log('mounted')
    },
    methods: {
        addToCart() {
            this.disabled = true
            axios.post('/cart/add/'+this.product_id)
            .then(response => (this.disabled = false))
            .catch(error => console.log(error))
        }
    }
}
</script>