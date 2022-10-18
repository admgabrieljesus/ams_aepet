<template>
	<app-layout title="Cadastro de Conveniados">
		<template #header>
			<h1 class="font-semibold text-xl text-gray-800 leading-tight">
				Usuário(a) {{ user.name }}
			</h1>
		</template>

		<div
			class="m-5 p-5 bg-white shadow overflow-hidden sm:rounded-lg"
		>
			<div v-if="user.userable_type == 'App\\Models\\Partner'">
			
				<Identity :person="person" />
			
				<Email :emails="emails" />
				
				<Phone :phones="phones" />

				<Address :addresses="addresses" />

			
				<div v-if="person.type == 'COMPANIES'" class="w-full mt-5">
					<h2>PROFISSIONAIS VINCULADOS</h2>
					<table class="min-w-full divide-y divide-gray-200">
						<thead class="bg-gray-50">
							<tr>
								<th
									scope="col"
									class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
								>
									NOME
								</th>
								<th
									scope="col"
									class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
								>
									CPF
								</th>
								<th
									scope="col"
									class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
								>
									DOCUMENTO
								</th>
								<th
									scope="col"
									class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
								>
									NÚMERO
								</th>
								<th
									scope="col"
									class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
								>
									ADICIONAR
								</th>
								<th
									scope="col"
									class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
								>
									ESPECIALIDADES
								</th>
							</tr>
						</thead>

						<tbody class="bg-white divide-y divide-gray-200">
							<tr v-for="doctor in doctors" :key="doctor.id">
								<td>{{ doctor.name }}</td>
								<td>{{ doctor.cpf }}</td>
								<td>{{ doctor.type_document }}</td>
								<td>{{ doctor.number_document }}</td>
								<td class="justify-center">
									<a
										@click="showAddSpeciality(doctor.id)"
										href="#"
										class="mt-0 mb-0 inline-flex justify-center py-0 px-0 border border-transparent shadow-sm text-sm font-medium rounded-md text-white hover:bg-indigo-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
									>
										<svg
											xmlns="http://www.w3.org/2000/svg"
											viewBox="0 0 24 24"
											width="24"
											height="24"
										>
											<path
												class="heroicon-ui"
												d="M5 3h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5c0-1.1.9-2 2-2zm0 2v14h14V5H5zm8 6h2a1 1 0 0 1 0 2h-2v2a1 1 0 0 1-2 0v-2H9a1 1 0 0 1 0-2h2V9a1 1 0 0 1 2 0v2z"
											/>
										</svg>
									</a>
								</td>
								<td>
									<p
										v-for="speciality in doctor.specialities"
										:key="speciality.id"
									>
										{{ speciality.title }}
										<a
											@click="deleteSpeciality(doctor.id, speciality.id)"
											href="#"
											class="mt-1 mb-1 inline-flex justify-center py-1 px-1 border border-transparent shadow-sm text-sm font-medium rounded-md text-white hover:bg-red-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
										>
											<svg
												xmlns="http://www.w3.org/2000/svg"
												viewBox="0 0 24 24"
												width="24"
												height="24"
											>
												<path
													class="heroicon-ui"
													d="M8 6V4c0-1.1.9-2 2-2h4a2 2 0 0 1 2 2v2h5a1 1 0 0 1 0 2h-1v12a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V8H3a1 1 0 1 1 0-2h5zM6 8v12h12V8H6zm8-2V4h-4v2h4zm-4 4a1 1 0 0 1 1 1v6a1 1 0 0 1-2 0v-6a1 1 0 0 1 1-1zm4 0a1 1 0 0 1 1 1v6a1 1 0 0 1-2 0v-6a1 1 0 0 1 1-1z"
												/>
											</svg>
										</a>
									</p>
								</td>
							</tr>
						</tbody>
					</table>
					<a href="#" @click="showDoctor = true" class="text-green-700"
						>Incluir novo profissional</a
					>
				</div>

				<div class="w-full mt-5">
					<h2>TERMO DE CONSENTIMENTO E CONTRATO DE CONVÊNIO</h2>
					<p>
						<a 
							target="_blank"
							href="/partners/terms/" 
							class="text-green-700">
							Termo de Consentimento						
						</a>
					</p>
					<p>
						<a 
							target="_blank"
							href="/partners/contracts/" 
							class="text-green-700">
							Contrato de Convênio						
						</a>
					</p>
				</div>

				<div
					v-if="files"
					class="bg-white px-4 py-1 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6"
				>
					<div class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
						<p>DOCUMENTOS</p>
						<ul
							role="list"
							class="border border-gray-200 rounded-md divide-y divide-gray-200"
						>
							<li
								v-for="file in files"
								:key="file.id"
								class="pl-3 pr-4 py-1 flex items-center justify-between text-sm"
							>
								<div class="w-0 flex-1 flex items-center">
									<svg
										class="flex-shrink-0 h-5 w-5 text-gray-400"
										xmlns="http://www.w3.org/2000/svg"
										viewBox="0 0 20 20"
										fill="currentColor"
										aria-hidden="true"
									>
										<path
											fill-rule="evenodd"
											d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z"
											clip-rule="evenodd"
										/>
									</svg>
									<span class="ml-2 flex-1 w-0 truncate">
										<button
											@click="
												readFile(
													'partners',
													user.userable_id,
													getName(file),
													getExtension(file)
												)
											"
										>
											{{ getDocument(file) }}
										</button>
									</span>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>

			<div
				class="w-full mt-5"
				v-if="user.userable_type == 'App\\Models\\Associate'"
			>

				<Identity :person="person" />
			
				<Email :emails="emails" />
				
				<Phone :phones="phones" />

				<Address :addresses="addresses" />

				 
			</div>
		</div>

		<div
			v-if="showSpeciality"
			class="fixed z-10 inset-0 overflow-y-auto"
			aria-labelledby="modal-title"
			role="dialog"
			aria-modal="true"
		>
			<div
				class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0"
			>
				<div
					class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"
					aria-hidden="true"
				></div>

				<span
					class="hidden sm:inline-block sm:align-middle sm:h-screen"
					aria-hidden="true"
					>&#8203;</span
				>

				<div
					class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
				>
					<form @submit.prevent="submit">
						<div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
							<div class="sm:flex sm:items-start">
								<div
									class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10"
								>
									<svg
										class="h-6 w-6 text-red-600"
										xmlns="http://www.w3.org/2000/svg"
										fill="none"
										viewBox="0 0 24 24"
										stroke="currentColor"
										aria-hidden="true"
									>
										<path
											stroke-linecap="round"
											stroke-linejoin="round"
											stroke-width="2"
											d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"
										/>
									</svg>
								</div>
								<div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
									<h3
										class="text-lg leading-6 font-medium text-gray-900"
										id="modal-title"
									>
										ADICIONAR ESPECIALIDADE
									</h3>
									<div class="mt-2">
										<p class="text-sm text-gray-500">
											Selecione uma Especialidade para associar ao conveniado
										</p>

										<input type="hidden" id="doctor_id" :value="doctors.id" />
										<select
											v-model="formSpecility.speciality_id"
											name="speciality_id"
											id="speciality_id"
											required
											class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600"
										>
											<option
												v-for="speciality in specialities"
												:key="speciality.id"
												:value="speciality.id"
												>{{ speciality.title }}</option
											>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div
							class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse"
						>
							<button
								@click.prevent="addSpeciality"
								type="button"
								class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-gray-900 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm"
							>
								Salvar
							</button>
							<button
								@click="showSpeciality = false"
								type="button"
								class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm"
							>
								Cancelar
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>

		<!-- Adicionar médicos -->
		<div
			v-if="showDoctor"
			class="fixed z-10 inset-0 overflow-y-auto"
			aria-labelledby="modal-title"
			role="dialog"
			aria-modal="true"
		>
			<div
				class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0"
			>
				<div
					class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"
					aria-hidden="true"
				></div>

				<span
					class="hidden sm:inline-block sm:align-middle sm:h-screen"
					aria-hidden="true"
					>&#8203;</span
				>

				<div
					class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
				>
					<form @submit.prevent="submit">
						<div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
							<div class="sm:flex sm:items-start">
								<div
									class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10"
								>
									<svg
										class="h-6 w-6 text-red-600"
										xmlns="http://www.w3.org/2000/svg"
										fill="none"
										viewBox="0 0 24 24"
										stroke="currentColor"
										aria-hidden="true"
									>
										<path
											stroke-linecap="round"
											stroke-linejoin="round"
											stroke-width="2"
											d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"
										/>
									</svg>
								</div>
								<div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
									<h3
										class="text-lg leading-6 font-medium text-gray-900"
										id="modal-title"
									>
										ADICIONAR PROFISSIONAL
									</h3>
									<div class="mt-2">
										<input type="hidden" id="person_id" :value="person.id" />
										<input-text
											title="NOME"
											v-model="formDoctor.name"
											required
											:error="errors.name"
										/>
										<input-text
											mask="###.###.###-##"
											title="CPF"
											v-model="formDoctor.cpf"
											required
											:error="errors.cpf"
										/>
										<input-select
											title="TIPO DE DOCUMENTO"
											v-model="formDoctor.type_document"
											:itens="options_type_document"
											:error="errors.type_document"
											required
										/>

										<input-number
											title="NÚMERO REGISTRO PROFISSIONAL(CREMEB/CROBA/CREFITO)"
											required
											:error="errors.number_document"
											v-model="formDoctor.number_document"
										/>
									</div>
								</div>
							</div>
						</div>
						<div
							class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse"
						>
							<button
								@click.prevent="addDoctor"
								type="button"
								class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-gray-900 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm"
							>
								Salvar
							</button>
							<button
								@click="showDoctor = false"
								type="button"
								class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm"
							>
								Cancelar
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</app-layout>
</template>

<script>
import { defineComponent } from "vue";
import AppLayout from "@/Layouts/AppLayout.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";
import { useForm } from "@inertiajs/inertia-vue3";
import InputText from "@/Pages/Form/InputText.vue";
import InputNumber from "@/Pages/Form/InputNumber.vue";
import InputSelect from "@/Pages/Form/InputSelect.vue";
import Identity from "./Identity.vue";
import Email from "./Email.vue";
import Phone from "./Phone.vue";
import Address from "./Address.vue";

export default defineComponent({
	components: {
    AppLayout,
    Head,
    Link,
    InputText,
    InputNumber,
    InputSelect,
    Identity,
	Email,
	Phone, 
	Address,
},
	data: () => ({
		options_type_document: [
			{ name: "CREMEB", id: "CREMEB" },
			{ name: "CROBA", id: "CROBA" },
			{ name: "CREFITO", id: "CREFITO" },
		],
		showSpeciality: false,
		showDoctor: false,
	}),
	setup(props) {
		const formDoctor = useForm({
			partner_id: props.person.id,
			name: null,
			cpf: null,
			type_document: null,
			number_document: null,
		});
		const formSpecility = useForm({
			doctor_id: props.doctors != null ? props.doctors.id : 0,
			speciality_id: null,
		});
		return { formDoctor, formSpecility };
	},
	props: {
		user: Object,
		person: Object,
		emails: Object,
		phones: Object,
		addresses: Object,
		doctors: Object,
		specialities: Object,
		errors: Object,
		files: Object,
	},
	methods: {
		// Exibe Janela
		showAddSpeciality(doctor) {
			this.formSpecility.doctor_id = doctor;
			this.showSpeciality = true;
		},
		// Adiciona Especialidade
		addSpeciality() {
			this.formSpecility.post(route("doctors.specialities.store"), {
				preserveScroll: true,
				onSuccess: () => this.formSpecility.reset(),
			});
			this.showSpeciality = false;
		},
		// Remove Especialidade
		deleteSpeciality(doctor, speciality) {
			this.formSpecility.post(
				route("doctors.specialities.delete", {
					doctor_id: doctor,
					speciality_id: speciality,
				}),
				{
					preserveScroll: true,
				}
			);
		},
		// Adiciona Especialidade
		addDoctor() {
			this.formDoctor.post(route("doctors.store"), {
				preserveScroll: true,
				onSuccess: () => {
					this.formDoctor.reset();
					this.showDoctor = false;
				},
			});
		},
		// Visualiza Arquivo
		readFile(vtype, vid, vname, vextension) {
			var result = "";

			axios
				.get(
					route("files.view", {
						type: "partners",
						id: vid,
						name: vname,
						extension: vextension,
					})
				)
				.then((response) => {
					result = "/" + response.data;
					window.open(result, "", "width=800,height=400");
				});
		},
		getName(name) {
			return name.split("/")[3].split(".")[0];
		},
		getExtension(name) {
			return name.split(".")[1];
		},
		getDocument(name) {
			return name.split("/")[3];
		},		 
	},
});
</script>
