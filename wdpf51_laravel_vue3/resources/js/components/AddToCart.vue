<template>
    <li><a href="#" @click="addProducttoCart"><i class="fa fa-shopping-cart"></i></a></li>
</template>
<script>
import axios from 'axios';

export default {
    props: ["pr_id"],
    methods: {
        addProducttoCart() {
            // alert('Your Id is: ' + this.pr_id);
            // API ar maddhome id pass kora hoyece
            axios.post('api/cart', { prid: this.pr_id }).then
                // ((res) => { alert(res.data) })
                ((res) => { console.log(res.data) })
        }
    }

}
</script>
<style></style>