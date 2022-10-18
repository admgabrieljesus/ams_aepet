<template>
	<div class="w-full mt-5">
		<h2>ENDEREÇO</h2>
		<p v-for="address in addresses" :key="address.id">
			{{ address.address }}, {{ address.number }}, {{ address.complement
			}}<br />
			{{ address.district }} - {{ address.city }}, {{ address.state }}<br />
			CEP: {{ address.zipcode }}
		</p>
	</div>
</template>

<script>
export default ({
  props: {
        addresses : Object
    }  
});
</script>
