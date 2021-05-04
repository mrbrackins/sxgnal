<template>

    <tr class="btn-reveal-trigger odd" role="row" >

        <td class="py-2 align-middle sorting_1">
            <div class="custom-control custom-checkbox" data-children-count="1">
                <input class="custom-control-input checkbox-bulk-select-target" type="checkbox" id="checkbox-20">
                <label class="custom-control-label" for="checkbox-20"></label>
            </div>
        </td>
        <td class="py-2 align-middle white-space-nowrap"><a href="../e-commerce/order-details.html"> <strong>{{item.name}}</strong></a> </td>
        <td class="py-2 align-middle">{{item.date}}</td>

        <td class="py-2 align-middle">{{item.description}}
            <p class="mb-0 text-500">{{item.category}}</p>
        </td>
        <td class="py-2 align-middle text-center fs-0 white-space-nowrap"><span class="badge badge rounded-capsule d-block badge-soft-success">{{item.status}}<svg class="svg-inline--fa fa-check fa-w-16 ml-1" data-fa-transform="shrink-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.5em;"><g transform="translate(256 256)"><g transform="translate(0, 0)  scale(0.875, 0.875)  rotate(0 0 0)"><path fill="currentColor" d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z" transform="translate(-256 -256)"></path></g></g></svg><!-- <span class="ml-1 fas fa-check" data-fa-transform="shrink-2"></span> --></span>
        </td>
        <td class="py-2 align-middle text-right fs-0 font-weight-medium">${{item.amount}}</td>

    </tr>



</template>

<script>
    export default {
        name: "ChecklistItem",
        props: ['item'],
        mounted() {
            console.log('mounted');
            this.$nextTick(function () {
                // remove unwanted element all other is work jQuery required
                $('.remove').contents().unwrap();
            })
        },
    }
</script>

<style scoped>

</style>
