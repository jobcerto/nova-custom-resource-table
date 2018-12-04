<template>
	<table ref="custom-resource-table" cellpadding="0" cellspacing="0" class="table w-full">
		<thead>
			<tr>
				<th class="text-left" v-for="heading in field.headings">
					{{ heading }}
				</th>
				<th v-if="hasActions">Ações</th>
			</tr>
		</thead>
		<tbody>
			<tr v-for="row in field.rows">
				<td v-for="column in row">{{ column.value }}</td>
				<td v-if="hasActions" class="text-right">
					<span v-for="action in field.actions">
						<a class="inline-block px-4" :href="action.url"><i :class="action.icon"></i></a>
					</span>
				</td>
			</tr>
		</tbody>
	</table>
</template>

<script>
	export default {
		props: ['resourceName', 'resourceId', 'field'],

		mounted() {
            this.$refs['custom-resource-table'].parentElement.classList.remove('py-3');
            this.$refs['custom-resource-table'].parentElement.classList.remove('px-6');
        },

        computed: {
        	hasActions() {
        		return this.field.actions !== undefined;
        	}
        }
    }
</script>
