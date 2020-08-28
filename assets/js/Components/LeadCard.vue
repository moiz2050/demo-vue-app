<template>
    <a href="#" name="lead.id" class="list-group-item list-group-item-action flex-column align-items-start mb-2" @click="selectLead(lead)" :class="{'active' : selected}">
        <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">{{lead.name}}</h5>
            <small>{{lead.location.name}} | {{lead.created_at | ago}}</small>
        </div>
        <p class="mb-1">{{lead.more_info}}</p>
        <small>{{lead.service.name}}</small>
    </a>
</template>

<script>
    import moment from "moment";

    export default {
        name: "LeadCard",
        props : {
            'lead' : {required : true}
        },
        data(){
            return {
                selected : false
            }
        },
        filters: {
            ago(date) {
                return moment(date).fromNow()
            }
        },
        methods: {
            selectLead(currentLead) {
                this.$emit('selectedLead', currentLead)
            }
        }
    }
</script>

<style scoped>

</style>