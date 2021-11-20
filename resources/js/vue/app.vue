<template>
    <div class="todoListContiner">
        <div class="heading">
            <h2 id="title">Todo List</h2>
            <add-item-form/>
        </div>
        <list-view/>
    </div>
</template>

<script>

import addItemForm from "./addItemForm.vue"
import listView from "./listView.vue"

export default {
    components: {
        addItemForm,
        listView
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