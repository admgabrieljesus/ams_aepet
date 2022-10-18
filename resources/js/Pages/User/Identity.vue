<template>
	<div class="w-full">
		<h2>IDENTIFICAÇÃO</h2>
		<p>Nome / Razão Social: {{ person.name }}</p>
		<p>Tipo: Conveniado(a)</p>
	</div>
</template>

<script>
export default ({
  props: {
        person : Object
    }  
});
</script>

