<template>
    <div class="todoListContiner">
        <div class="heading">
            <h2 id="title">Todo List</h2>
            <add-item-form/>
        </div>
        <list-view :items="items" />
    </div>
</template>

<script>

import addItemForm from "./addItemForm.vue"
import listView from "./listView.vue"

export default {
    components: {
        addItemForm,
        listView
    },
    data: function(){
    return{
        items: []
    }
    },
    methods: {
        gitList(){
            axios.get('api/items')
            .then( response=> {
                this.items = response.data
            })
            .catch (error => {
                console.log( error);
            })
        }
    },
    created(){
        this.gitList();
    }

}
</script>

<style scoped>
.todoListContiner{
    width: 350px;
    margin: auto;
    text-align: center;
}
.heading{
    background-color: #e6e6e6;
    padding: 10px;
}
#title{
    text-align: center;
}
</style>