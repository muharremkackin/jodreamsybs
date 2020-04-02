<script>
    export default {
        name: "Permissions",
        methods: {
            $can(permissionName) {
                return Permissions.indexOf(permissionName) !== -1;
            }
        }
    }
</script>

