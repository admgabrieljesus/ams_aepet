<template>
	<div class="w-full mt-5">
		<h2>EMAIL</h2>
		<p v-for="email in emails" :key="email.id">
			{{ email.email }}
		</p>
	</div>
</template>

<script>
export default ({
  props: {
        emails : Object
    }  
});
</script>
