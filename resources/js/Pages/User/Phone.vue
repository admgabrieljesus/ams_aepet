<template>
	<div class="w-full mt-5">
		<h2>TELEFONE</h2>
		<p v-for="phone in phones" :key="phone.id">
			({{ phone.ddd }}){{ phone.number }}
		</p>
	</div>
</template>

<script>
export default ({
  props: {
        phones : Object
    }  
});
</script>