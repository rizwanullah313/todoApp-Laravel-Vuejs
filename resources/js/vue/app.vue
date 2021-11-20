<template>
    <div class="todoListContiner">
        <div class="heading">
            <h2 id="title">Todo List</h2>
            <add-item-form
                    v-on:reloadlist="getList()"
              />
        </div>
        <list-view 
        :items="items"
        v-on:reloadlist="getList()"
         />
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
        getList(){
            axios.get('api/items')
            .then( response=> {
                this.items = response.data
            })
            .catch (error => {
                console.log( "api call nhi hogi");
            })
        }
    },
    created(){
        this.getList();
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