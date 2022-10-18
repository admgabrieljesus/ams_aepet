<template>
	<app-guest title="Cadastro de Conveniados">
		<template #header>
			<h1 class="font-semibold text-xl text-gray-800 leading-tight">
				Resultados
			</h1>
		</template>

		<div
			class="w-full ml-0 mt-5 mr-0 bg-white shadow overflow-hidden sm:rounded-lg"
		>
			<div class="border-t border-gray-200">
				<dt class="text-sm font-medium text-gray-500">
					CONVENIADOS
				</dt>
				<dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
					<div v-if="partners.length > 0">
						<h1 class="mt-2 mb-2">
							Clínicas, Médicos(as), Dentistas e Fisioterapeutas
						</h1>
						
						<table class="w-full leading-normal">
							<tr>
								<th
									class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
								>
									Nome
								</th>
								<th
									class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
								>
									Telefones
								</th>
								<th
									class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
								>
									Emails
								</th>
								<th
									class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
								>
									Endereços
								</th>
							</tr>
							<tr v-for="partner in partners" :key="partner.id">
								<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
									{{ partner.name }}
								</td>
								<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
									<p v-for="phone in partner.phones" :key="phone.id">
										({{ phone.ddd }}) {{ phone.number }}
									</p>
								</td>
								<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
									<p v-for="email in partner.emails" :key="email.id">
										{{ email.email }}
									</p>
								</td>
								<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
									<p v-for="address in partner.addresses" :key="address.id">
										{{ address.address }}<br />
										{{ address.complement }} <br />
										{{ address.district }}, {{ address.city }},
										{{ address.state }},
									</p>
								</td>
							</tr>
						</table>

					</div>

					<div v-if="doctors.length > 0">
						<h1 class="mt-2 mb-2">
							Clínicas, Médicos(as), Dentistas e Fisioterapeutas
						</h1>
						
						<table class="w-full leading-normal">
							<tr>
								<th
									class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
								>
									Nome
								</th>
								<th
									class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
								>
									Clínica
								</th>
								<th
									class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
								>
									Telefones
								</th>
								<th
									class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
								>
									Emails
								</th>
								<th
									class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
								>
									Endereços
								</th>
							</tr>
							<tr v-for="doctor in doctors" :key="doctor.id">
								<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
									{{ doctor.name }}
								</td>

								<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
									{{ doctor.partner.name }}
								</td>

								<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
									<p v-for="phone in doctor.partner.phones" :key="phone.id">
										({{ phone.ddd }}) {{ phone.number }}
									</p>
								</td>
								<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
									<p v-for="email in doctor.partner.emails" :key="email.id">
										{{ email.email }}
									</p>
								</td>
								<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
									<p
										v-for="address in doctor.partner.addresses"
										:key="address.id"
									>
										{{ address.address }}<br />
										{{ address.complement }} <br />
										{{ address.district }}, {{ address.city }},
										{{ address.state }},
									</p>
								</td>
							</tr>
						</table>

					</div>
				</dd>
			</div>
		</div>

	</app-guest>
</template>

<script>
import { defineComponent } from "vue";
import AppGuest from "@/Layouts/GuestLayout.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";
import Button from "../../Jetstream/Button.vue";

export default defineComponent({
	components: {
		AppGuest,
		Head,
		Link,
		Button,
	},
	props: {
		partners: Object,
		doctors: Object,
	},
});
</script>
