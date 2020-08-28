<template>
    <div class="row">
        <div class="col-lg-12">
            <lead-filters @leadsFiltered = 'leadsFiltered'></lead-filters>
        </div>
        <div class="col-lg-6">
            <loading :show="showLoading"></loading>
            <div v-for="lead of leads" class="list-group">
                <lead-card :lead="lead" @selectedLead = "selectedLead"></lead-card>
            </div>
        </div>
        <div class="col-lg-6">
            <lead-detail v-if="showDetails" :lead = "leadForDetail"></lead-detail>
        </div>
    </div>
</template>

<script>
    import Leads from "../Models/Leads";
    import Loading from "./Loading";
    import LeadCard from "./LeadCard";
    import LeadDetail from "./LeadDetail";
    import LeadFilters from "./LeadFilters";

    export default {
        components: {LeadFilters, LeadDetail, LeadCard, Loading},
        data() {
            return {
                leads: [],
                showLoading: true,
                leadForDetail: {},
                showDetails: false
            }
        },
        created() {
            (new Leads).all(leads => this.leads = leads.data).then(() => this.showLoading = false);
        },
        methods: {
            selectedLead(currentLead) {
                this.$children.forEach(function (child) {
                    if (child.$options.name === "LeadCard") {
                        child.selected = (currentLead.id === child.lead.id)
                    }
                })

                this.leadForDetail = currentLead;
                this.showDetails = true;
            },

            leadsFiltered(leads) {
                this.leads = leads
                this.showDetails = false;
            }
        }
    }
</script>